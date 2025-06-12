<?php
/**
 * BulkServiceApi
 * BulkService
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

class BulkServiceApi extends AbstractServiceApi
{
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'downloadCampaignsByAccountIds' => [
            'application/json',
        ],
        'downloadCampaignsByCampaignIds' => [
            'application/json',
        ],
        'getBulkDownloadStatus' => [
            'application/json',
        ],
        'getBulkUploadStatus' => [
            'application/json',
        ],
        'getBulkUploadUrl' => [
            'application/json',
        ],
        'uploadEntityRecords' => [
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
        $this->hostIndex = 'BulkService';
    }

    /**
     * Operation downloadCampaignsByAccountIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsRequest $DownloadCampaignsByAccountIdsRequest DownloadCampaignsByAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByAccountIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault
     */
    public function downloadCampaignsByAccountIds($DownloadCampaignsByAccountIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByAccountIds'][0])
    {
        list($response) = $this->downloadCampaignsByAccountIdsWithHttpInfo($DownloadCampaignsByAccountIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation downloadCampaignsByAccountIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsRequest $DownloadCampaignsByAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByAccountIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadCampaignsByAccountIdsWithHttpInfo($DownloadCampaignsByAccountIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByAccountIds'][0])
    {
        $request = $this->downloadCampaignsByAccountIdsRequest($DownloadCampaignsByAccountIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation downloadCampaignsByAccountIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsRequest $DownloadCampaignsByAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByAccountIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadCampaignsByAccountIdsAsync($DownloadCampaignsByAccountIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByAccountIds'][0])
    {
        return $this->downloadCampaignsByAccountIdsAsyncWithHttpInfo($DownloadCampaignsByAccountIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadCampaignsByAccountIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsRequest $DownloadCampaignsByAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByAccountIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadCampaignsByAccountIdsAsyncWithHttpInfo($DownloadCampaignsByAccountIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByAccountIds'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsResponse';
        $request = $this->downloadCampaignsByAccountIdsRequest($DownloadCampaignsByAccountIdsRequest, $contentType);

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
     * Create request for operation 'downloadCampaignsByAccountIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsRequest $DownloadCampaignsByAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByAccountIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function downloadCampaignsByAccountIdsRequest($DownloadCampaignsByAccountIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByAccountIds'][0])
    {

        // verify the required parameter 'DownloadCampaignsByAccountIdsRequest' is set
        if ($DownloadCampaignsByAccountIdsRequest === null || (is_array($DownloadCampaignsByAccountIdsRequest) && count($DownloadCampaignsByAccountIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DownloadCampaignsByAccountIdsRequest when calling downloadCampaignsByAccountIds'
            );
        }


        $resourcePath = '/Bulk/v13/Campaigns/DownloadByAccountIds';
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
            $DownloadCampaignsByAccountIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordownloadCampaignsByAccountIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation downloadCampaignsByCampaignIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsRequest $DownloadCampaignsByCampaignIdsRequest DownloadCampaignsByCampaignIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByCampaignIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault
     */
    public function downloadCampaignsByCampaignIds($DownloadCampaignsByCampaignIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByCampaignIds'][0])
    {
        list($response) = $this->downloadCampaignsByCampaignIdsWithHttpInfo($DownloadCampaignsByCampaignIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation downloadCampaignsByCampaignIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsRequest $DownloadCampaignsByCampaignIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByCampaignIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadCampaignsByCampaignIdsWithHttpInfo($DownloadCampaignsByCampaignIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByCampaignIds'][0])
    {
        $request = $this->downloadCampaignsByCampaignIdsRequest($DownloadCampaignsByCampaignIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation downloadCampaignsByCampaignIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsRequest $DownloadCampaignsByCampaignIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByCampaignIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadCampaignsByCampaignIdsAsync($DownloadCampaignsByCampaignIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByCampaignIds'][0])
    {
        return $this->downloadCampaignsByCampaignIdsAsyncWithHttpInfo($DownloadCampaignsByCampaignIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadCampaignsByCampaignIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsRequest $DownloadCampaignsByCampaignIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByCampaignIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadCampaignsByCampaignIdsAsyncWithHttpInfo($DownloadCampaignsByCampaignIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByCampaignIds'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsResponse';
        $request = $this->downloadCampaignsByCampaignIdsRequest($DownloadCampaignsByCampaignIdsRequest, $contentType);

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
     * Create request for operation 'downloadCampaignsByCampaignIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsRequest $DownloadCampaignsByCampaignIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['downloadCampaignsByCampaignIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function downloadCampaignsByCampaignIdsRequest($DownloadCampaignsByCampaignIdsRequest, string $contentType = self::contentTypes['downloadCampaignsByCampaignIds'][0])
    {

        // verify the required parameter 'DownloadCampaignsByCampaignIdsRequest' is set
        if ($DownloadCampaignsByCampaignIdsRequest === null || (is_array($DownloadCampaignsByCampaignIdsRequest) && count($DownloadCampaignsByCampaignIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DownloadCampaignsByCampaignIdsRequest when calling downloadCampaignsByCampaignIds'
            );
        }


        $resourcePath = '/Bulk/v13/Campaigns/DownloadByCampaignIds';
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
            $DownloadCampaignsByCampaignIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordownloadCampaignsByCampaignIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBulkDownloadStatus
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusRequest $GetBulkDownloadStatusRequest GetBulkDownloadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkDownloadStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault
     */
    public function getBulkDownloadStatus($GetBulkDownloadStatusRequest, string $contentType = self::contentTypes['getBulkDownloadStatus'][0])
    {
        list($response) = $this->getBulkDownloadStatusWithHttpInfo($GetBulkDownloadStatusRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBulkDownloadStatusWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusRequest $GetBulkDownloadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkDownloadStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBulkDownloadStatusWithHttpInfo($GetBulkDownloadStatusRequest, string $contentType = self::contentTypes['getBulkDownloadStatus'][0])
    {
        $request = $this->getBulkDownloadStatusRequest($GetBulkDownloadStatusRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBulkDownloadStatusAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusRequest $GetBulkDownloadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkDownloadStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBulkDownloadStatusAsync($GetBulkDownloadStatusRequest, string $contentType = self::contentTypes['getBulkDownloadStatus'][0])
    {
        return $this->getBulkDownloadStatusAsyncWithHttpInfo($GetBulkDownloadStatusRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBulkDownloadStatusAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusRequest $GetBulkDownloadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkDownloadStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBulkDownloadStatusAsyncWithHttpInfo($GetBulkDownloadStatusRequest, string $contentType = self::contentTypes['getBulkDownloadStatus'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusResponse';
        $request = $this->getBulkDownloadStatusRequest($GetBulkDownloadStatusRequest, $contentType);

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
     * Create request for operation 'getBulkDownloadStatus'
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkDownloadStatusRequest $GetBulkDownloadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkDownloadStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBulkDownloadStatusRequest($GetBulkDownloadStatusRequest, string $contentType = self::contentTypes['getBulkDownloadStatus'][0])
    {

        // verify the required parameter 'GetBulkDownloadStatusRequest' is set
        if ($GetBulkDownloadStatusRequest === null || (is_array($GetBulkDownloadStatusRequest) && count($GetBulkDownloadStatusRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBulkDownloadStatusRequest when calling getBulkDownloadStatus'
            );
        }


        $resourcePath = '/Bulk/v13/BulkDownloadStatus/Query';
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
            $GetBulkDownloadStatusRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBulkDownloadStatus',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBulkUploadStatus
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusRequest $GetBulkUploadStatusRequest GetBulkUploadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault
     */
    public function getBulkUploadStatus($GetBulkUploadStatusRequest, string $contentType = self::contentTypes['getBulkUploadStatus'][0])
    {
        list($response) = $this->getBulkUploadStatusWithHttpInfo($GetBulkUploadStatusRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBulkUploadStatusWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusRequest $GetBulkUploadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBulkUploadStatusWithHttpInfo($GetBulkUploadStatusRequest, string $contentType = self::contentTypes['getBulkUploadStatus'][0])
    {
        $request = $this->getBulkUploadStatusRequest($GetBulkUploadStatusRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBulkUploadStatusAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusRequest $GetBulkUploadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBulkUploadStatusAsync($GetBulkUploadStatusRequest, string $contentType = self::contentTypes['getBulkUploadStatus'][0])
    {
        return $this->getBulkUploadStatusAsyncWithHttpInfo($GetBulkUploadStatusRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBulkUploadStatusAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusRequest $GetBulkUploadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBulkUploadStatusAsyncWithHttpInfo($GetBulkUploadStatusRequest, string $contentType = self::contentTypes['getBulkUploadStatus'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusResponse';
        $request = $this->getBulkUploadStatusRequest($GetBulkUploadStatusRequest, $contentType);

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
     * Create request for operation 'getBulkUploadStatus'
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadStatusRequest $GetBulkUploadStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBulkUploadStatusRequest($GetBulkUploadStatusRequest, string $contentType = self::contentTypes['getBulkUploadStatus'][0])
    {

        // verify the required parameter 'GetBulkUploadStatusRequest' is set
        if ($GetBulkUploadStatusRequest === null || (is_array($GetBulkUploadStatusRequest) && count($GetBulkUploadStatusRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBulkUploadStatusRequest when calling getBulkUploadStatus'
            );
        }


        $resourcePath = '/Bulk/v13/BulkUploadStatus/Query';
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
            $GetBulkUploadStatusRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBulkUploadStatus',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBulkUploadUrl
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlRequest $GetBulkUploadUrlRequest GetBulkUploadUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadUrl'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault
     */
    public function getBulkUploadUrl($GetBulkUploadUrlRequest, string $contentType = self::contentTypes['getBulkUploadUrl'][0])
    {
        list($response) = $this->getBulkUploadUrlWithHttpInfo($GetBulkUploadUrlRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBulkUploadUrlWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlRequest $GetBulkUploadUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadUrl'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBulkUploadUrlWithHttpInfo($GetBulkUploadUrlRequest, string $contentType = self::contentTypes['getBulkUploadUrl'][0])
    {
        $request = $this->getBulkUploadUrlRequest($GetBulkUploadUrlRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBulkUploadUrlAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlRequest $GetBulkUploadUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadUrl'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBulkUploadUrlAsync($GetBulkUploadUrlRequest, string $contentType = self::contentTypes['getBulkUploadUrl'][0])
    {
        return $this->getBulkUploadUrlAsyncWithHttpInfo($GetBulkUploadUrlRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBulkUploadUrlAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlRequest $GetBulkUploadUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadUrl'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBulkUploadUrlAsyncWithHttpInfo($GetBulkUploadUrlRequest, string $contentType = self::contentTypes['getBulkUploadUrl'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlResponse';
        $request = $this->getBulkUploadUrlRequest($GetBulkUploadUrlRequest, $contentType);

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
     * Create request for operation 'getBulkUploadUrl'
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\GetBulkUploadUrlRequest $GetBulkUploadUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBulkUploadUrl'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBulkUploadUrlRequest($GetBulkUploadUrlRequest, string $contentType = self::contentTypes['getBulkUploadUrl'][0])
    {

        // verify the required parameter 'GetBulkUploadUrlRequest' is set
        if ($GetBulkUploadUrlRequest === null || (is_array($GetBulkUploadUrlRequest) && count($GetBulkUploadUrlRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBulkUploadUrlRequest when calling getBulkUploadUrl'
            );
        }


        $resourcePath = '/Bulk/v13/BulkUploadUrl/Query';
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
            $GetBulkUploadUrlRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBulkUploadUrl',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation uploadEntityRecords
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsRequest $UploadEntityRecordsRequest UploadEntityRecordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uploadEntityRecords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault
     */
    public function uploadEntityRecords($UploadEntityRecordsRequest, string $contentType = self::contentTypes['uploadEntityRecords'][0])
    {
        list($response) = $this->uploadEntityRecordsWithHttpInfo($UploadEntityRecordsRequest, $contentType);
        return $response;
    }

    /**
     * Operation uploadEntityRecordsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsRequest $UploadEntityRecordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uploadEntityRecords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsResponse|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault|\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadEntityRecordsWithHttpInfo($UploadEntityRecordsRequest, string $contentType = self::contentTypes['uploadEntityRecords'][0])
    {
        $request = $this->uploadEntityRecordsRequest($UploadEntityRecordsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadEntityRecordsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsRequest $UploadEntityRecordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uploadEntityRecords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadEntityRecordsAsync($UploadEntityRecordsRequest, string $contentType = self::contentTypes['uploadEntityRecords'][0])
    {
        return $this->uploadEntityRecordsAsyncWithHttpInfo($UploadEntityRecordsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadEntityRecordsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsRequest $UploadEntityRecordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uploadEntityRecords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadEntityRecordsAsyncWithHttpInfo($UploadEntityRecordsRequest, string $contentType = self::contentTypes['uploadEntityRecords'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsResponse';
        $request = $this->uploadEntityRecordsRequest($UploadEntityRecordsRequest, $contentType);

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
     * Create request for operation 'uploadEntityRecords'
     *
     * @param  \Microsoft\MsAds\Rest\Model\BulkService\UploadEntityRecordsRequest $UploadEntityRecordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uploadEntityRecords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadEntityRecordsRequest($UploadEntityRecordsRequest, string $contentType = self::contentTypes['uploadEntityRecords'][0])
    {

        // verify the required parameter 'UploadEntityRecordsRequest' is set
        if ($UploadEntityRecordsRequest === null || (is_array($UploadEntityRecordsRequest) && count($UploadEntityRecordsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UploadEntityRecordsRequest when calling uploadEntityRecords'
            );
        }


        $resourcePath = '/Bulk/v13/EntityRecords/Upload';
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
            $UploadEntityRecordsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForuploadEntityRecords',
            null,
            [],
            $queryParams
        );
    }

}
