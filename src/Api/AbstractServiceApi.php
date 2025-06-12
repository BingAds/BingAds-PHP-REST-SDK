<?php
/**
 * AbstractServiceApi
 * This class is an abstract base class for service APIs.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Api
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use JsonException;
use Microsoft\MsAds\Rest\ApiException;
use Microsoft\MsAds\Rest\Auth\ApiEnvironment;
use Microsoft\MsAds\Rest\Configuration;
use Microsoft\MsAds\Rest\HeaderSelector;
use Microsoft\MsAds\Rest\ObjectSerializer;
use RuntimeException;

abstract class AbstractServiceApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var string Host index
     */
    protected string $hostIndex;

    /**
     * @var string Host Environment
     */
    protected string $hostEnv;

    /**
     * @param  ClientInterface|null  $client
     * @param  Configuration|null  $config
     * @param  HeaderSelector|null  $selector
     * @param  string  $hostEnv  host environment, default is ApiEnvironment::SANDBOX
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        string $hostEnv = ApiEnvironment::SANDBOX
    ) {
        $this->client = $client ?: new Client(['verify' => false]);
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostEnv = $hostEnv;
    }

    /**
     * Set the host index
     *
     * @param  string  $hostIndex  Host index (required)
     */
    public function setHostIndex(string $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return string Host index
     */
    public function getHostIndex(): string
    {
        return $this->hostIndex;
    }

    /**
     * Set the host environment
     *
     * @param  string  $hostEnv  Host environment (required)
     */
    public function setHostEnv(string $hostEnv): void
    {
        $this->hostEnv = $hostEnv;
    }

    /**
     * Get the host environment
     *
     * @return string Host environment
     */
    public function getHostEnv(): string
    {
        return $this->hostEnv;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }


    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws RuntimeException on file opening failure
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Set the authentication headers
     */
    public function setAuthHeaders(array &$headers)
    {
        $apiKeys = $this->config->getApiKeys();
        foreach ($apiKeys as $key => $value) {
            $apiKey = $this->config->getApiKeyWithPrefix($key);
            if ($apiKey !== null) {
                $headers[$key] = $apiKey;
            }
        }
    }

    /**
     * Get the response content
     * @throws ApiException
     */
    public function getResponseContent($request, $response, $returnType): array
    {
        $statusCode = $response->getStatusCode();
        $content = ($returnType === '\SplFileObject')
            ? $response->getBody()
            : (string)$response->getBody();
        if ($returnType !== 'string' && $returnType !== '\SplFileObject') {
            try {
                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $exception) {
                throw new ApiException(
                    sprintf('Error JSON decoding server response (%s)', $request->getUri()),
                    $statusCode,
                    $response->getHeaders(),
                    $content
                );
            }
        }
        try {
            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $statusCode,
                $response->getHeaders()
            ];
        } catch (Exception $e) {
            return [$content, $statusCode, $response->getHeaders()];
        }
    }

    /**
     * Handle the fulfilled response
     * @param  Response  $response
     * @param  string  $returnType
     *
     * @return array
     */
    public function onFulfilledResponse(Response $response, string $returnType): array
    {
        if ($returnType === '\SplFileObject') {
            $content = $response->getBody();
        } else {
            $content = (string)$response->getBody();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
        }
        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Handle the rejected response
     * @throws ApiException
     */
    public function onRejectedResponse($exception): void
    {
        $response = $exception->getResponse();
        $statusCode = $response->getStatusCode();
        throw new ApiException(
            sprintf(
                '[%d] Error connecting to the API (%s)',
                $statusCode,
                $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            (string)$response->getBody()
        );
    }

    /**
     * Setup and send the request
     *
     * @param  string  $httpMethod
     * @param  string  $resourcePath
     * @param  array  $headers
     * @param  array  $headerParams
     * @param  mixed  $requestParam
     * @param  array  $formParams
     * @param  bool  $multipart
     * @param  bool  $hasBodyParams
     * @param  bool  $hasAuthMethods
     * @param  bool  $preserveHost
     * @param  string|null  $preserveHostFn
     * @param  string|null  $hostIndex
     * @param  array|null  $variables
     * @param  array|null  $queryParams
     *
     * @return Request
     */
    public function setupAndSendRequest(
        string $httpMethod,
        string $resourcePath,
        array $headers,
        array $headerParams,
        $requestParam,
        array $formParams,
        bool $multipart,
        bool $hasBodyParams,
        bool $hasAuthMethods,
        bool $preserveHost,
        ?string $preserveHostFn,
        ?string $hostIndex,
        ?array $variables,
        ?array $queryParams
    ): Request {
        $this->config->refreshAuthorizationData();
        $httpBody = '';
        if ($hasBodyParams && isset($requestParam)) {
            $httpBody = stripos($headers['Content-Type'], 'application/json') !== false
                ? Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($requestParam))
                : $requestParam;
        } elseif (!empty($formParams)) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        if ($hasAuthMethods) {
            $this->setAuthHeaders($headers);
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if ($preserveHost) {
            if ($hostIndex === null) {
                $hostIndex = $this->hostIndex;
            }
            $hostSettings = $this->$preserveHostFn();
            $operationHost = Configuration::getHostString($hostSettings, $this->hostEnv, $hostIndex, $variables);
        } else {
            $operationHost = $this->config->getHost($this->hostEnv, $this->hostIndex);
        }


        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            $httpMethod,
            $operationHost.$resourcePath.($query ? "?$query" : ''),
            $headers,
            $httpBody
        );
    }
}