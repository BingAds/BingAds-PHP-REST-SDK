<?php
/**
 * ReportingServiceApi
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Api
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Api;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Microsoft\MsAds\Rest\ApiException;
use Microsoft\MsAds\Rest\Auth\ApiEnvironment;
use Microsoft\MsAds\Rest\Configuration;
use Microsoft\MsAds\Rest\HeaderSelector;
use Microsoft\MsAds\Rest\ObjectSerializer;

class ReportingServiceApi extends AbstractServiceApi
{
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'pollGenerateReport' => [
            'application/json',
        ],
        'submitGenerateReport' => [
            'application/json',
        ],
    ];

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
        parent::__construct($client, $config, $selector, $hostEnv);
        $this->hostIndex = 'ReportingService';
    }

    /**
     * Operation pollGenerateReport
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportRequest $PollGenerateReportRequest PollGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pollGenerateReport'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportResponse|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault
     */
    public function pollGenerateReport($PollGenerateReportRequest, string $contentType = self::contentTypes['pollGenerateReport'][0])
    {
        list($response) = $this->pollGenerateReportWithHttpInfo($PollGenerateReportRequest, $contentType);
        return $response;
    }

    /**
     * Operation pollGenerateReportWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportRequest $PollGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pollGenerateReport'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportResponse|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function pollGenerateReportWithHttpInfo($PollGenerateReportRequest, string $contentType = self::contentTypes['pollGenerateReport'][0])
    {
        $request = $this->pollGenerateReportRequest($PollGenerateReportRequest, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $response = $e->getResponse();
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation pollGenerateReportAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportRequest $PollGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pollGenerateReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pollGenerateReportAsync($PollGenerateReportRequest, string $contentType = self::contentTypes['pollGenerateReport'][0])
    {
        return $this->pollGenerateReportAsyncWithHttpInfo($PollGenerateReportRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pollGenerateReportAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportRequest $PollGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pollGenerateReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pollGenerateReportAsyncWithHttpInfo($PollGenerateReportRequest, string $contentType = self::contentTypes['pollGenerateReport'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportResponse';
        $request = $this->pollGenerateReportRequest($PollGenerateReportRequest, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return $this->onFulfilledResponse($response, $returnType);
                },
                function ($exception) {
                    $this->onRejectedResponse($exception);
                }
            );
    }

    /**
     * Create request for operation 'pollGenerateReport'
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\PollGenerateReportRequest $PollGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pollGenerateReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function pollGenerateReportRequest($PollGenerateReportRequest, string $contentType = self::contentTypes['pollGenerateReport'][0])
    {

        // verify the required parameter 'PollGenerateReportRequest' is set
        if ($PollGenerateReportRequest === null || (is_array($PollGenerateReportRequest) && count($PollGenerateReportRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $PollGenerateReportRequest when calling pollGenerateReport'
            );
        }


        $resourcePath = '/Reporting/v13/GenerateReport/Poll';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        return $this->setupAndSendRequest(
            'POST',
            $resourcePath,
            $headers,
            $headerParams,
            $PollGenerateReportRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForpollGenerateReport',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation submitGenerateReport
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportRequest $SubmitGenerateReportRequest SubmitGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['submitGenerateReport'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportResponse|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault
     */
    public function submitGenerateReport($SubmitGenerateReportRequest, string $contentType = self::contentTypes['submitGenerateReport'][0])
    {
        list($response) = $this->submitGenerateReportWithHttpInfo($SubmitGenerateReportRequest, $contentType);
        return $response;
    }

    /**
     * Operation submitGenerateReportWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportRequest $SubmitGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['submitGenerateReport'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportResponse|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitGenerateReportWithHttpInfo($SubmitGenerateReportRequest, string $contentType = self::contentTypes['submitGenerateReport'][0])
    {
        $request = $this->submitGenerateReportRequest($SubmitGenerateReportRequest, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $response = $e->getResponse();
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault');
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation submitGenerateReportAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportRequest $SubmitGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['submitGenerateReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitGenerateReportAsync($SubmitGenerateReportRequest, string $contentType = self::contentTypes['submitGenerateReport'][0])
    {
        return $this->submitGenerateReportAsyncWithHttpInfo($SubmitGenerateReportRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitGenerateReportAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportRequest $SubmitGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['submitGenerateReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitGenerateReportAsyncWithHttpInfo($SubmitGenerateReportRequest, string $contentType = self::contentTypes['submitGenerateReport'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportResponse';
        $request = $this->submitGenerateReportRequest($SubmitGenerateReportRequest, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return $this->onFulfilledResponse($response, $returnType);
                },
                function ($exception) {
                    $this->onRejectedResponse($exception);
                }
            );
    }

    /**
     * Create request for operation 'submitGenerateReport'
     *
     * @param  \Microsoft\MsAds\Rest\Model\ReportingService\SubmitGenerateReportRequest $SubmitGenerateReportRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['submitGenerateReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function submitGenerateReportRequest($SubmitGenerateReportRequest, string $contentType = self::contentTypes['submitGenerateReport'][0])
    {

        // verify the required parameter 'SubmitGenerateReportRequest' is set
        if ($SubmitGenerateReportRequest === null || (is_array($SubmitGenerateReportRequest) && count($SubmitGenerateReportRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SubmitGenerateReportRequest when calling submitGenerateReport'
            );
        }


        $resourcePath = '/Reporting/v13/GenerateReport/Submit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        return $this->setupAndSendRequest(
            'POST',
            $resourcePath,
            $headers,
            $headerParams,
            $SubmitGenerateReportRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsubmitGenerateReport',
            null,
            [],
            $queryParams
        );
    }

}
