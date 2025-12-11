<?php
/**
 * AdInsightServiceApi
 * AdInsightService
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

class AdInsightServiceApi extends AbstractServiceApi
{
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'applyRecommendations' => [
            'application/json',
        ],
        'dismissRecommendations' => [
            'application/json',
        ],
        'getAuctionInsightData' => [
            'application/json',
        ],
        'getAudienceBreakdown' => [
            'application/json',
        ],
        'getAudienceFullEstimation' => [
            'application/json',
        ],
        'getAutoApplyOptInStatus' => [
            'application/json',
        ],
        'getBidLandscapeByAdGroupIds' => [
            'application/json',
        ],
        'getBidLandscapeByKeywordIds' => [
            'application/json',
        ],
        'getBidOpportunities' => [
            'application/json',
        ],
        'getBudgetOpportunities' => [
            'application/json',
        ],
        'getDomainCategories' => [
            'application/json',
        ],
        'getEstimatedBidByKeywordIds' => [
            'application/json',
        ],
        'getEstimatedBidByKeywords' => [
            'application/json',
        ],
        'getEstimatedPositionByKeywordIds' => [
            'application/json',
        ],
        'getEstimatedPositionByKeywords' => [
            'application/json',
        ],
        'getHistoricalKeywordPerformance' => [
            'application/json',
        ],
        'getHistoricalSearchCount' => [
            'application/json',
        ],
        'getKeywordCategories' => [
            'application/json',
        ],
        'getKeywordDemographics' => [
            'application/json',
        ],
        'getKeywordIdeaCategories' => [
            'application/json',
        ],
        'getKeywordIdeas' => [
            'application/json',
        ],
        'getKeywordLocations' => [
            'application/json',
        ],
        'getKeywordOpportunities' => [
            'application/json',
        ],
        'getKeywordTrafficEstimates' => [
            'application/json',
        ],
        'getPerformanceInsightsDetailDataByAccountId' => [
            'application/json',
        ],
        'getRecommendations' => [
            'application/json',
        ],
        'getTextAssetSuggestionsByFinalUrls' => [
            'application/json',
        ],
        'retrieveRecommendations' => [
            'application/json',
        ],
        'setAutoApplyOptInStatus' => [
            'application/json',
        ],
        'suggestKeywordsForUrl' => [
            'application/json',
        ],
        'suggestKeywordsFromExistingKeywords' => [
            'application/json',
        ],
        'tagRecommendations' => [
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
        $this->hostIndex = 'AdInsightService';
    }

    /**
     * Operation applyRecommendations
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsRequest $ApplyRecommendationsRequest ApplyRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['applyRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function applyRecommendations($ApplyRecommendationsRequest, string $contentType = self::contentTypes['applyRecommendations'][0])
    {
        list($response) = $this->applyRecommendationsWithHttpInfo($ApplyRecommendationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation applyRecommendationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsRequest $ApplyRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['applyRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function applyRecommendationsWithHttpInfo($ApplyRecommendationsRequest, string $contentType = self::contentTypes['applyRecommendations'][0])
    {
        $request = $this->applyRecommendationsRequest($ApplyRecommendationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation applyRecommendationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsRequest $ApplyRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['applyRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applyRecommendationsAsync($ApplyRecommendationsRequest, string $contentType = self::contentTypes['applyRecommendations'][0])
    {
        return $this->applyRecommendationsAsyncWithHttpInfo($ApplyRecommendationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation applyRecommendationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsRequest $ApplyRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['applyRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applyRecommendationsAsyncWithHttpInfo($ApplyRecommendationsRequest, string $contentType = self::contentTypes['applyRecommendations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsResponse';
        $request = $this->applyRecommendationsRequest($ApplyRecommendationsRequest, $contentType);

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
     * Create request for operation 'applyRecommendations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\ApplyRecommendationsRequest $ApplyRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['applyRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function applyRecommendationsRequest($ApplyRecommendationsRequest, string $contentType = self::contentTypes['applyRecommendations'][0])
    {

        // verify the required parameter 'ApplyRecommendationsRequest' is set
        if ($ApplyRecommendationsRequest === null || (is_array($ApplyRecommendationsRequest) && count($ApplyRecommendationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ApplyRecommendationsRequest when calling applyRecommendations'
            );
        }


        $resourcePath = '/AdInsight/v13/Recommendations/apply';
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
            $ApplyRecommendationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForapplyRecommendations',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation dismissRecommendations
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsRequest $DismissRecommendationsRequest DismissRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function dismissRecommendations($DismissRecommendationsRequest, string $contentType = self::contentTypes['dismissRecommendations'][0])
    {
        list($response) = $this->dismissRecommendationsWithHttpInfo($DismissRecommendationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation dismissRecommendationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsRequest $DismissRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function dismissRecommendationsWithHttpInfo($DismissRecommendationsRequest, string $contentType = self::contentTypes['dismissRecommendations'][0])
    {
        $request = $this->dismissRecommendationsRequest($DismissRecommendationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation dismissRecommendationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsRequest $DismissRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dismissRecommendationsAsync($DismissRecommendationsRequest, string $contentType = self::contentTypes['dismissRecommendations'][0])
    {
        return $this->dismissRecommendationsAsyncWithHttpInfo($DismissRecommendationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dismissRecommendationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsRequest $DismissRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dismissRecommendationsAsyncWithHttpInfo($DismissRecommendationsRequest, string $contentType = self::contentTypes['dismissRecommendations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsResponse';
        $request = $this->dismissRecommendationsRequest($DismissRecommendationsRequest, $contentType);

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
     * Create request for operation 'dismissRecommendations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\DismissRecommendationsRequest $DismissRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function dismissRecommendationsRequest($DismissRecommendationsRequest, string $contentType = self::contentTypes['dismissRecommendations'][0])
    {

        // verify the required parameter 'DismissRecommendationsRequest' is set
        if ($DismissRecommendationsRequest === null || (is_array($DismissRecommendationsRequest) && count($DismissRecommendationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DismissRecommendationsRequest when calling dismissRecommendations'
            );
        }


        $resourcePath = '/AdInsight/v13/Recommendations/dismiss';
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
            $DismissRecommendationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordismissRecommendations',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAuctionInsightData
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataRequest $GetAuctionInsightDataRequest GetAuctionInsightDataRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAuctionInsightData'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getAuctionInsightData($GetAuctionInsightDataRequest, string $contentType = self::contentTypes['getAuctionInsightData'][0])
    {
        list($response) = $this->getAuctionInsightDataWithHttpInfo($GetAuctionInsightDataRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAuctionInsightDataWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataRequest $GetAuctionInsightDataRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAuctionInsightData'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuctionInsightDataWithHttpInfo($GetAuctionInsightDataRequest, string $contentType = self::contentTypes['getAuctionInsightData'][0])
    {
        $request = $this->getAuctionInsightDataRequest($GetAuctionInsightDataRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuctionInsightDataAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataRequest $GetAuctionInsightDataRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAuctionInsightData'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuctionInsightDataAsync($GetAuctionInsightDataRequest, string $contentType = self::contentTypes['getAuctionInsightData'][0])
    {
        return $this->getAuctionInsightDataAsyncWithHttpInfo($GetAuctionInsightDataRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuctionInsightDataAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataRequest $GetAuctionInsightDataRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAuctionInsightData'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuctionInsightDataAsyncWithHttpInfo($GetAuctionInsightDataRequest, string $contentType = self::contentTypes['getAuctionInsightData'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataResponse';
        $request = $this->getAuctionInsightDataRequest($GetAuctionInsightDataRequest, $contentType);

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
     * Create request for operation 'getAuctionInsightData'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAuctionInsightDataRequest $GetAuctionInsightDataRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAuctionInsightData'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAuctionInsightDataRequest($GetAuctionInsightDataRequest, string $contentType = self::contentTypes['getAuctionInsightData'][0])
    {

        // verify the required parameter 'GetAuctionInsightDataRequest' is set
        if ($GetAuctionInsightDataRequest === null || (is_array($GetAuctionInsightDataRequest) && count($GetAuctionInsightDataRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAuctionInsightDataRequest when calling getAuctionInsightData'
            );
        }


        $resourcePath = '/AdInsight/v13/AuctionInsightData/query';
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
            $GetAuctionInsightDataRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAuctionInsightData',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAudienceBreakdown
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownRequest $GetAudienceBreakdownRequest GetAudienceBreakdownRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceBreakdown'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getAudienceBreakdown($GetAudienceBreakdownRequest, string $contentType = self::contentTypes['getAudienceBreakdown'][0])
    {
        list($response) = $this->getAudienceBreakdownWithHttpInfo($GetAudienceBreakdownRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAudienceBreakdownWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownRequest $GetAudienceBreakdownRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceBreakdown'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAudienceBreakdownWithHttpInfo($GetAudienceBreakdownRequest, string $contentType = self::contentTypes['getAudienceBreakdown'][0])
    {
        $request = $this->getAudienceBreakdownRequest($GetAudienceBreakdownRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAudienceBreakdownAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownRequest $GetAudienceBreakdownRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceBreakdown'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAudienceBreakdownAsync($GetAudienceBreakdownRequest, string $contentType = self::contentTypes['getAudienceBreakdown'][0])
    {
        return $this->getAudienceBreakdownAsyncWithHttpInfo($GetAudienceBreakdownRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAudienceBreakdownAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownRequest $GetAudienceBreakdownRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceBreakdown'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAudienceBreakdownAsyncWithHttpInfo($GetAudienceBreakdownRequest, string $contentType = self::contentTypes['getAudienceBreakdown'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownResponse';
        $request = $this->getAudienceBreakdownRequest($GetAudienceBreakdownRequest, $contentType);

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
     * Create request for operation 'getAudienceBreakdown'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceBreakdownRequest $GetAudienceBreakdownRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceBreakdown'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAudienceBreakdownRequest($GetAudienceBreakdownRequest, string $contentType = self::contentTypes['getAudienceBreakdown'][0])
    {

        // verify the required parameter 'GetAudienceBreakdownRequest' is set
        if ($GetAudienceBreakdownRequest === null || (is_array($GetAudienceBreakdownRequest) && count($GetAudienceBreakdownRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAudienceBreakdownRequest when calling getAudienceBreakdown'
            );
        }


        $resourcePath = '/AdInsight/v13/AudienceBreakdown/query';
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
            $GetAudienceBreakdownRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAudienceBreakdown',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAudienceFullEstimation
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationRequest $GetAudienceFullEstimationRequest GetAudienceFullEstimationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceFullEstimation'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getAudienceFullEstimation($GetAudienceFullEstimationRequest, string $contentType = self::contentTypes['getAudienceFullEstimation'][0])
    {
        list($response) = $this->getAudienceFullEstimationWithHttpInfo($GetAudienceFullEstimationRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAudienceFullEstimationWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationRequest $GetAudienceFullEstimationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceFullEstimation'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAudienceFullEstimationWithHttpInfo($GetAudienceFullEstimationRequest, string $contentType = self::contentTypes['getAudienceFullEstimation'][0])
    {
        $request = $this->getAudienceFullEstimationRequest($GetAudienceFullEstimationRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAudienceFullEstimationAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationRequest $GetAudienceFullEstimationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceFullEstimation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAudienceFullEstimationAsync($GetAudienceFullEstimationRequest, string $contentType = self::contentTypes['getAudienceFullEstimation'][0])
    {
        return $this->getAudienceFullEstimationAsyncWithHttpInfo($GetAudienceFullEstimationRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAudienceFullEstimationAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationRequest $GetAudienceFullEstimationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceFullEstimation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAudienceFullEstimationAsyncWithHttpInfo($GetAudienceFullEstimationRequest, string $contentType = self::contentTypes['getAudienceFullEstimation'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationResponse';
        $request = $this->getAudienceFullEstimationRequest($GetAudienceFullEstimationRequest, $contentType);

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
     * Create request for operation 'getAudienceFullEstimation'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAudienceFullEstimationRequest $GetAudienceFullEstimationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAudienceFullEstimation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAudienceFullEstimationRequest($GetAudienceFullEstimationRequest, string $contentType = self::contentTypes['getAudienceFullEstimation'][0])
    {

        // verify the required parameter 'GetAudienceFullEstimationRequest' is set
        if ($GetAudienceFullEstimationRequest === null || (is_array($GetAudienceFullEstimationRequest) && count($GetAudienceFullEstimationRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAudienceFullEstimationRequest when calling getAudienceFullEstimation'
            );
        }


        $resourcePath = '/AdInsight/v13/AudienceFullEstimation/query';
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
            $GetAudienceFullEstimationRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAudienceFullEstimation',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAutoApplyOptInStatus
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusRequest $GetAutoApplyOptInStatusRequest GetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getAutoApplyOptInStatus($GetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['getAutoApplyOptInStatus'][0])
    {
        list($response) = $this->getAutoApplyOptInStatusWithHttpInfo($GetAutoApplyOptInStatusRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAutoApplyOptInStatusWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusRequest $GetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAutoApplyOptInStatusWithHttpInfo($GetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['getAutoApplyOptInStatus'][0])
    {
        $request = $this->getAutoApplyOptInStatusRequest($GetAutoApplyOptInStatusRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAutoApplyOptInStatusAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusRequest $GetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAutoApplyOptInStatusAsync($GetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['getAutoApplyOptInStatus'][0])
    {
        return $this->getAutoApplyOptInStatusAsyncWithHttpInfo($GetAutoApplyOptInStatusRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAutoApplyOptInStatusAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusRequest $GetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAutoApplyOptInStatusAsyncWithHttpInfo($GetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['getAutoApplyOptInStatus'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusResponse';
        $request = $this->getAutoApplyOptInStatusRequest($GetAutoApplyOptInStatusRequest, $contentType);

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
     * Create request for operation 'getAutoApplyOptInStatus'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetAutoApplyOptInStatusRequest $GetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAutoApplyOptInStatusRequest($GetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['getAutoApplyOptInStatus'][0])
    {

        // verify the required parameter 'GetAutoApplyOptInStatusRequest' is set
        if ($GetAutoApplyOptInStatusRequest === null || (is_array($GetAutoApplyOptInStatusRequest) && count($GetAutoApplyOptInStatusRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAutoApplyOptInStatusRequest when calling getAutoApplyOptInStatus'
            );
        }


        $resourcePath = '/AdInsight/v13/AutoApplyOptInStatus/query';
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
            $GetAutoApplyOptInStatusRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAutoApplyOptInStatus',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBidLandscapeByAdGroupIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsRequest $GetBidLandscapeByAdGroupIdsRequest GetBidLandscapeByAdGroupIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByAdGroupIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getBidLandscapeByAdGroupIds($GetBidLandscapeByAdGroupIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByAdGroupIds'][0])
    {
        list($response) = $this->getBidLandscapeByAdGroupIdsWithHttpInfo($GetBidLandscapeByAdGroupIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBidLandscapeByAdGroupIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsRequest $GetBidLandscapeByAdGroupIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByAdGroupIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBidLandscapeByAdGroupIdsWithHttpInfo($GetBidLandscapeByAdGroupIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByAdGroupIds'][0])
    {
        $request = $this->getBidLandscapeByAdGroupIdsRequest($GetBidLandscapeByAdGroupIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBidLandscapeByAdGroupIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsRequest $GetBidLandscapeByAdGroupIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByAdGroupIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBidLandscapeByAdGroupIdsAsync($GetBidLandscapeByAdGroupIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByAdGroupIds'][0])
    {
        return $this->getBidLandscapeByAdGroupIdsAsyncWithHttpInfo($GetBidLandscapeByAdGroupIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBidLandscapeByAdGroupIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsRequest $GetBidLandscapeByAdGroupIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByAdGroupIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBidLandscapeByAdGroupIdsAsyncWithHttpInfo($GetBidLandscapeByAdGroupIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByAdGroupIds'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsResponse';
        $request = $this->getBidLandscapeByAdGroupIdsRequest($GetBidLandscapeByAdGroupIdsRequest, $contentType);

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
     * Create request for operation 'getBidLandscapeByAdGroupIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByAdGroupIdsRequest $GetBidLandscapeByAdGroupIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByAdGroupIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBidLandscapeByAdGroupIdsRequest($GetBidLandscapeByAdGroupIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByAdGroupIds'][0])
    {

        // verify the required parameter 'GetBidLandscapeByAdGroupIdsRequest' is set
        if ($GetBidLandscapeByAdGroupIdsRequest === null || (is_array($GetBidLandscapeByAdGroupIdsRequest) && count($GetBidLandscapeByAdGroupIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBidLandscapeByAdGroupIdsRequest when calling getBidLandscapeByAdGroupIds'
            );
        }


        $resourcePath = '/AdInsight/v13/BidLandscape/queryByAdGroupIds';
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
            $GetBidLandscapeByAdGroupIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBidLandscapeByAdGroupIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBidLandscapeByKeywordIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsRequest $GetBidLandscapeByKeywordIdsRequest GetBidLandscapeByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByKeywordIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getBidLandscapeByKeywordIds($GetBidLandscapeByKeywordIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByKeywordIds'][0])
    {
        list($response) = $this->getBidLandscapeByKeywordIdsWithHttpInfo($GetBidLandscapeByKeywordIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBidLandscapeByKeywordIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsRequest $GetBidLandscapeByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByKeywordIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBidLandscapeByKeywordIdsWithHttpInfo($GetBidLandscapeByKeywordIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByKeywordIds'][0])
    {
        $request = $this->getBidLandscapeByKeywordIdsRequest($GetBidLandscapeByKeywordIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBidLandscapeByKeywordIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsRequest $GetBidLandscapeByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBidLandscapeByKeywordIdsAsync($GetBidLandscapeByKeywordIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByKeywordIds'][0])
    {
        return $this->getBidLandscapeByKeywordIdsAsyncWithHttpInfo($GetBidLandscapeByKeywordIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBidLandscapeByKeywordIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsRequest $GetBidLandscapeByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBidLandscapeByKeywordIdsAsyncWithHttpInfo($GetBidLandscapeByKeywordIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByKeywordIds'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsResponse';
        $request = $this->getBidLandscapeByKeywordIdsRequest($GetBidLandscapeByKeywordIdsRequest, $contentType);

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
     * Create request for operation 'getBidLandscapeByKeywordIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidLandscapeByKeywordIdsRequest $GetBidLandscapeByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidLandscapeByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBidLandscapeByKeywordIdsRequest($GetBidLandscapeByKeywordIdsRequest, string $contentType = self::contentTypes['getBidLandscapeByKeywordIds'][0])
    {

        // verify the required parameter 'GetBidLandscapeByKeywordIdsRequest' is set
        if ($GetBidLandscapeByKeywordIdsRequest === null || (is_array($GetBidLandscapeByKeywordIdsRequest) && count($GetBidLandscapeByKeywordIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBidLandscapeByKeywordIdsRequest when calling getBidLandscapeByKeywordIds'
            );
        }


        $resourcePath = '/AdInsight/v13/BidLandscape/queryByKeywordIds';
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
            $GetBidLandscapeByKeywordIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBidLandscapeByKeywordIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBidOpportunities
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesRequest $GetBidOpportunitiesRequest GetBidOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidOpportunities'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getBidOpportunities($GetBidOpportunitiesRequest, string $contentType = self::contentTypes['getBidOpportunities'][0])
    {
        list($response) = $this->getBidOpportunitiesWithHttpInfo($GetBidOpportunitiesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBidOpportunitiesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesRequest $GetBidOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidOpportunities'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBidOpportunitiesWithHttpInfo($GetBidOpportunitiesRequest, string $contentType = self::contentTypes['getBidOpportunities'][0])
    {
        $request = $this->getBidOpportunitiesRequest($GetBidOpportunitiesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBidOpportunitiesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesRequest $GetBidOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBidOpportunitiesAsync($GetBidOpportunitiesRequest, string $contentType = self::contentTypes['getBidOpportunities'][0])
    {
        return $this->getBidOpportunitiesAsyncWithHttpInfo($GetBidOpportunitiesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBidOpportunitiesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesRequest $GetBidOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBidOpportunitiesAsyncWithHttpInfo($GetBidOpportunitiesRequest, string $contentType = self::contentTypes['getBidOpportunities'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesResponse';
        $request = $this->getBidOpportunitiesRequest($GetBidOpportunitiesRequest, $contentType);

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
     * Create request for operation 'getBidOpportunities'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBidOpportunitiesRequest $GetBidOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBidOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBidOpportunitiesRequest($GetBidOpportunitiesRequest, string $contentType = self::contentTypes['getBidOpportunities'][0])
    {

        // verify the required parameter 'GetBidOpportunitiesRequest' is set
        if ($GetBidOpportunitiesRequest === null || (is_array($GetBidOpportunitiesRequest) && count($GetBidOpportunitiesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBidOpportunitiesRequest when calling getBidOpportunities'
            );
        }


        $resourcePath = '/AdInsight/v13/BidOpportunities/query';
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
            $GetBidOpportunitiesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBidOpportunities',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBudgetOpportunities
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesRequest $GetBudgetOpportunitiesRequest GetBudgetOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBudgetOpportunities'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getBudgetOpportunities($GetBudgetOpportunitiesRequest, string $contentType = self::contentTypes['getBudgetOpportunities'][0])
    {
        list($response) = $this->getBudgetOpportunitiesWithHttpInfo($GetBudgetOpportunitiesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBudgetOpportunitiesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesRequest $GetBudgetOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBudgetOpportunities'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBudgetOpportunitiesWithHttpInfo($GetBudgetOpportunitiesRequest, string $contentType = self::contentTypes['getBudgetOpportunities'][0])
    {
        $request = $this->getBudgetOpportunitiesRequest($GetBudgetOpportunitiesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBudgetOpportunitiesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesRequest $GetBudgetOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBudgetOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBudgetOpportunitiesAsync($GetBudgetOpportunitiesRequest, string $contentType = self::contentTypes['getBudgetOpportunities'][0])
    {
        return $this->getBudgetOpportunitiesAsyncWithHttpInfo($GetBudgetOpportunitiesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBudgetOpportunitiesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesRequest $GetBudgetOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBudgetOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBudgetOpportunitiesAsyncWithHttpInfo($GetBudgetOpportunitiesRequest, string $contentType = self::contentTypes['getBudgetOpportunities'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesResponse';
        $request = $this->getBudgetOpportunitiesRequest($GetBudgetOpportunitiesRequest, $contentType);

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
     * Create request for operation 'getBudgetOpportunities'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetBudgetOpportunitiesRequest $GetBudgetOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBudgetOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBudgetOpportunitiesRequest($GetBudgetOpportunitiesRequest, string $contentType = self::contentTypes['getBudgetOpportunities'][0])
    {

        // verify the required parameter 'GetBudgetOpportunitiesRequest' is set
        if ($GetBudgetOpportunitiesRequest === null || (is_array($GetBudgetOpportunitiesRequest) && count($GetBudgetOpportunitiesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBudgetOpportunitiesRequest when calling getBudgetOpportunities'
            );
        }


        $resourcePath = '/AdInsight/v13/BudgetOpportunities/query';
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
            $GetBudgetOpportunitiesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBudgetOpportunities',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getDomainCategories
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesRequest $GetDomainCategoriesRequest GetDomainCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDomainCategories'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getDomainCategories($GetDomainCategoriesRequest, string $contentType = self::contentTypes['getDomainCategories'][0])
    {
        list($response) = $this->getDomainCategoriesWithHttpInfo($GetDomainCategoriesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getDomainCategoriesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesRequest $GetDomainCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDomainCategories'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDomainCategoriesWithHttpInfo($GetDomainCategoriesRequest, string $contentType = self::contentTypes['getDomainCategories'][0])
    {
        $request = $this->getDomainCategoriesRequest($GetDomainCategoriesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDomainCategoriesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesRequest $GetDomainCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDomainCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDomainCategoriesAsync($GetDomainCategoriesRequest, string $contentType = self::contentTypes['getDomainCategories'][0])
    {
        return $this->getDomainCategoriesAsyncWithHttpInfo($GetDomainCategoriesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDomainCategoriesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesRequest $GetDomainCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDomainCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDomainCategoriesAsyncWithHttpInfo($GetDomainCategoriesRequest, string $contentType = self::contentTypes['getDomainCategories'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesResponse';
        $request = $this->getDomainCategoriesRequest($GetDomainCategoriesRequest, $contentType);

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
     * Create request for operation 'getDomainCategories'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetDomainCategoriesRequest $GetDomainCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDomainCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDomainCategoriesRequest($GetDomainCategoriesRequest, string $contentType = self::contentTypes['getDomainCategories'][0])
    {

        // verify the required parameter 'GetDomainCategoriesRequest' is set
        if ($GetDomainCategoriesRequest === null || (is_array($GetDomainCategoriesRequest) && count($GetDomainCategoriesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetDomainCategoriesRequest when calling getDomainCategories'
            );
        }


        $resourcePath = '/AdInsight/v13/DomainCategories/query';
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
            $GetDomainCategoriesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetDomainCategories',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getEstimatedBidByKeywordIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsRequest $GetEstimatedBidByKeywordIdsRequest GetEstimatedBidByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywordIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getEstimatedBidByKeywordIds($GetEstimatedBidByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywordIds'][0])
    {
        list($response) = $this->getEstimatedBidByKeywordIdsWithHttpInfo($GetEstimatedBidByKeywordIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getEstimatedBidByKeywordIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsRequest $GetEstimatedBidByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywordIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEstimatedBidByKeywordIdsWithHttpInfo($GetEstimatedBidByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywordIds'][0])
    {
        $request = $this->getEstimatedBidByKeywordIdsRequest($GetEstimatedBidByKeywordIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEstimatedBidByKeywordIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsRequest $GetEstimatedBidByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedBidByKeywordIdsAsync($GetEstimatedBidByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywordIds'][0])
    {
        return $this->getEstimatedBidByKeywordIdsAsyncWithHttpInfo($GetEstimatedBidByKeywordIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEstimatedBidByKeywordIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsRequest $GetEstimatedBidByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedBidByKeywordIdsAsyncWithHttpInfo($GetEstimatedBidByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywordIds'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsResponse';
        $request = $this->getEstimatedBidByKeywordIdsRequest($GetEstimatedBidByKeywordIdsRequest, $contentType);

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
     * Create request for operation 'getEstimatedBidByKeywordIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordIdsRequest $GetEstimatedBidByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEstimatedBidByKeywordIdsRequest($GetEstimatedBidByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywordIds'][0])
    {

        // verify the required parameter 'GetEstimatedBidByKeywordIdsRequest' is set
        if ($GetEstimatedBidByKeywordIdsRequest === null || (is_array($GetEstimatedBidByKeywordIdsRequest) && count($GetEstimatedBidByKeywordIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetEstimatedBidByKeywordIdsRequest when calling getEstimatedBidByKeywordIds'
            );
        }


        $resourcePath = '/AdInsight/v13/EstimatedBid/queryByKeywordIds';
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
            $GetEstimatedBidByKeywordIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetEstimatedBidByKeywordIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getEstimatedBidByKeywords
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsRequest $GetEstimatedBidByKeywordsRequest GetEstimatedBidByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getEstimatedBidByKeywords($GetEstimatedBidByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywords'][0])
    {
        list($response) = $this->getEstimatedBidByKeywordsWithHttpInfo($GetEstimatedBidByKeywordsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getEstimatedBidByKeywordsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsRequest $GetEstimatedBidByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEstimatedBidByKeywordsWithHttpInfo($GetEstimatedBidByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywords'][0])
    {
        $request = $this->getEstimatedBidByKeywordsRequest($GetEstimatedBidByKeywordsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEstimatedBidByKeywordsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsRequest $GetEstimatedBidByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedBidByKeywordsAsync($GetEstimatedBidByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywords'][0])
    {
        return $this->getEstimatedBidByKeywordsAsyncWithHttpInfo($GetEstimatedBidByKeywordsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEstimatedBidByKeywordsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsRequest $GetEstimatedBidByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedBidByKeywordsAsyncWithHttpInfo($GetEstimatedBidByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywords'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsResponse';
        $request = $this->getEstimatedBidByKeywordsRequest($GetEstimatedBidByKeywordsRequest, $contentType);

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
     * Create request for operation 'getEstimatedBidByKeywords'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedBidByKeywordsRequest $GetEstimatedBidByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedBidByKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEstimatedBidByKeywordsRequest($GetEstimatedBidByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedBidByKeywords'][0])
    {

        // verify the required parameter 'GetEstimatedBidByKeywordsRequest' is set
        if ($GetEstimatedBidByKeywordsRequest === null || (is_array($GetEstimatedBidByKeywordsRequest) && count($GetEstimatedBidByKeywordsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetEstimatedBidByKeywordsRequest when calling getEstimatedBidByKeywords'
            );
        }


        $resourcePath = '/AdInsight/v13/EstimatedBid/queryByKeywords';
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
            $GetEstimatedBidByKeywordsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetEstimatedBidByKeywords',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getEstimatedPositionByKeywordIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsRequest $GetEstimatedPositionByKeywordIdsRequest GetEstimatedPositionByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywordIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getEstimatedPositionByKeywordIds($GetEstimatedPositionByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywordIds'][0])
    {
        list($response) = $this->getEstimatedPositionByKeywordIdsWithHttpInfo($GetEstimatedPositionByKeywordIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getEstimatedPositionByKeywordIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsRequest $GetEstimatedPositionByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywordIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEstimatedPositionByKeywordIdsWithHttpInfo($GetEstimatedPositionByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywordIds'][0])
    {
        $request = $this->getEstimatedPositionByKeywordIdsRequest($GetEstimatedPositionByKeywordIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEstimatedPositionByKeywordIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsRequest $GetEstimatedPositionByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedPositionByKeywordIdsAsync($GetEstimatedPositionByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywordIds'][0])
    {
        return $this->getEstimatedPositionByKeywordIdsAsyncWithHttpInfo($GetEstimatedPositionByKeywordIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEstimatedPositionByKeywordIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsRequest $GetEstimatedPositionByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedPositionByKeywordIdsAsyncWithHttpInfo($GetEstimatedPositionByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywordIds'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsResponse';
        $request = $this->getEstimatedPositionByKeywordIdsRequest($GetEstimatedPositionByKeywordIdsRequest, $contentType);

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
     * Create request for operation 'getEstimatedPositionByKeywordIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordIdsRequest $GetEstimatedPositionByKeywordIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywordIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEstimatedPositionByKeywordIdsRequest($GetEstimatedPositionByKeywordIdsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywordIds'][0])
    {

        // verify the required parameter 'GetEstimatedPositionByKeywordIdsRequest' is set
        if ($GetEstimatedPositionByKeywordIdsRequest === null || (is_array($GetEstimatedPositionByKeywordIdsRequest) && count($GetEstimatedPositionByKeywordIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetEstimatedPositionByKeywordIdsRequest when calling getEstimatedPositionByKeywordIds'
            );
        }


        $resourcePath = '/AdInsight/v13/EstimatedPosition/queryByKeywordIds';
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
            $GetEstimatedPositionByKeywordIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetEstimatedPositionByKeywordIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getEstimatedPositionByKeywords
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsRequest $GetEstimatedPositionByKeywordsRequest GetEstimatedPositionByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getEstimatedPositionByKeywords($GetEstimatedPositionByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywords'][0])
    {
        list($response) = $this->getEstimatedPositionByKeywordsWithHttpInfo($GetEstimatedPositionByKeywordsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getEstimatedPositionByKeywordsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsRequest $GetEstimatedPositionByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEstimatedPositionByKeywordsWithHttpInfo($GetEstimatedPositionByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywords'][0])
    {
        $request = $this->getEstimatedPositionByKeywordsRequest($GetEstimatedPositionByKeywordsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEstimatedPositionByKeywordsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsRequest $GetEstimatedPositionByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedPositionByKeywordsAsync($GetEstimatedPositionByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywords'][0])
    {
        return $this->getEstimatedPositionByKeywordsAsyncWithHttpInfo($GetEstimatedPositionByKeywordsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEstimatedPositionByKeywordsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsRequest $GetEstimatedPositionByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEstimatedPositionByKeywordsAsyncWithHttpInfo($GetEstimatedPositionByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywords'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsResponse';
        $request = $this->getEstimatedPositionByKeywordsRequest($GetEstimatedPositionByKeywordsRequest, $contentType);

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
     * Create request for operation 'getEstimatedPositionByKeywords'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetEstimatedPositionByKeywordsRequest $GetEstimatedPositionByKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEstimatedPositionByKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEstimatedPositionByKeywordsRequest($GetEstimatedPositionByKeywordsRequest, string $contentType = self::contentTypes['getEstimatedPositionByKeywords'][0])
    {

        // verify the required parameter 'GetEstimatedPositionByKeywordsRequest' is set
        if ($GetEstimatedPositionByKeywordsRequest === null || (is_array($GetEstimatedPositionByKeywordsRequest) && count($GetEstimatedPositionByKeywordsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetEstimatedPositionByKeywordsRequest when calling getEstimatedPositionByKeywords'
            );
        }


        $resourcePath = '/AdInsight/v13/EstimatedPosition/queryByKeywords';
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
            $GetEstimatedPositionByKeywordsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetEstimatedPositionByKeywords',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getHistoricalKeywordPerformance
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceRequest $GetHistoricalKeywordPerformanceRequest GetHistoricalKeywordPerformanceRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalKeywordPerformance'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getHistoricalKeywordPerformance($GetHistoricalKeywordPerformanceRequest, string $contentType = self::contentTypes['getHistoricalKeywordPerformance'][0])
    {
        list($response) = $this->getHistoricalKeywordPerformanceWithHttpInfo($GetHistoricalKeywordPerformanceRequest, $contentType);
        return $response;
    }

    /**
     * Operation getHistoricalKeywordPerformanceWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceRequest $GetHistoricalKeywordPerformanceRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalKeywordPerformance'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistoricalKeywordPerformanceWithHttpInfo($GetHistoricalKeywordPerformanceRequest, string $contentType = self::contentTypes['getHistoricalKeywordPerformance'][0])
    {
        $request = $this->getHistoricalKeywordPerformanceRequest($GetHistoricalKeywordPerformanceRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistoricalKeywordPerformanceAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceRequest $GetHistoricalKeywordPerformanceRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalKeywordPerformance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoricalKeywordPerformanceAsync($GetHistoricalKeywordPerformanceRequest, string $contentType = self::contentTypes['getHistoricalKeywordPerformance'][0])
    {
        return $this->getHistoricalKeywordPerformanceAsyncWithHttpInfo($GetHistoricalKeywordPerformanceRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistoricalKeywordPerformanceAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceRequest $GetHistoricalKeywordPerformanceRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalKeywordPerformance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoricalKeywordPerformanceAsyncWithHttpInfo($GetHistoricalKeywordPerformanceRequest, string $contentType = self::contentTypes['getHistoricalKeywordPerformance'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceResponse';
        $request = $this->getHistoricalKeywordPerformanceRequest($GetHistoricalKeywordPerformanceRequest, $contentType);

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
     * Create request for operation 'getHistoricalKeywordPerformance'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalKeywordPerformanceRequest $GetHistoricalKeywordPerformanceRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalKeywordPerformance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistoricalKeywordPerformanceRequest($GetHistoricalKeywordPerformanceRequest, string $contentType = self::contentTypes['getHistoricalKeywordPerformance'][0])
    {

        // verify the required parameter 'GetHistoricalKeywordPerformanceRequest' is set
        if ($GetHistoricalKeywordPerformanceRequest === null || (is_array($GetHistoricalKeywordPerformanceRequest) && count($GetHistoricalKeywordPerformanceRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetHistoricalKeywordPerformanceRequest when calling getHistoricalKeywordPerformance'
            );
        }


        $resourcePath = '/AdInsight/v13/HistoricalKeywordPerformance/query';
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
            $GetHistoricalKeywordPerformanceRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetHistoricalKeywordPerformance',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getHistoricalSearchCount
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountRequest $GetHistoricalSearchCountRequest GetHistoricalSearchCountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalSearchCount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getHistoricalSearchCount($GetHistoricalSearchCountRequest, string $contentType = self::contentTypes['getHistoricalSearchCount'][0])
    {
        list($response) = $this->getHistoricalSearchCountWithHttpInfo($GetHistoricalSearchCountRequest, $contentType);
        return $response;
    }

    /**
     * Operation getHistoricalSearchCountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountRequest $GetHistoricalSearchCountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalSearchCount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistoricalSearchCountWithHttpInfo($GetHistoricalSearchCountRequest, string $contentType = self::contentTypes['getHistoricalSearchCount'][0])
    {
        $request = $this->getHistoricalSearchCountRequest($GetHistoricalSearchCountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistoricalSearchCountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountRequest $GetHistoricalSearchCountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalSearchCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoricalSearchCountAsync($GetHistoricalSearchCountRequest, string $contentType = self::contentTypes['getHistoricalSearchCount'][0])
    {
        return $this->getHistoricalSearchCountAsyncWithHttpInfo($GetHistoricalSearchCountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistoricalSearchCountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountRequest $GetHistoricalSearchCountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalSearchCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoricalSearchCountAsyncWithHttpInfo($GetHistoricalSearchCountRequest, string $contentType = self::contentTypes['getHistoricalSearchCount'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountResponse';
        $request = $this->getHistoricalSearchCountRequest($GetHistoricalSearchCountRequest, $contentType);

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
     * Create request for operation 'getHistoricalSearchCount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetHistoricalSearchCountRequest $GetHistoricalSearchCountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getHistoricalSearchCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistoricalSearchCountRequest($GetHistoricalSearchCountRequest, string $contentType = self::contentTypes['getHistoricalSearchCount'][0])
    {

        // verify the required parameter 'GetHistoricalSearchCountRequest' is set
        if ($GetHistoricalSearchCountRequest === null || (is_array($GetHistoricalSearchCountRequest) && count($GetHistoricalSearchCountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetHistoricalSearchCountRequest when calling getHistoricalSearchCount'
            );
        }


        $resourcePath = '/AdInsight/v13/HistoricalSearchCount/query';
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
            $GetHistoricalSearchCountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetHistoricalSearchCount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordCategories
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesRequest $GetKeywordCategoriesRequest GetKeywordCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordCategories'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordCategories($GetKeywordCategoriesRequest, string $contentType = self::contentTypes['getKeywordCategories'][0])
    {
        list($response) = $this->getKeywordCategoriesWithHttpInfo($GetKeywordCategoriesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordCategoriesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesRequest $GetKeywordCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordCategories'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordCategoriesWithHttpInfo($GetKeywordCategoriesRequest, string $contentType = self::contentTypes['getKeywordCategories'][0])
    {
        $request = $this->getKeywordCategoriesRequest($GetKeywordCategoriesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordCategoriesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesRequest $GetKeywordCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordCategoriesAsync($GetKeywordCategoriesRequest, string $contentType = self::contentTypes['getKeywordCategories'][0])
    {
        return $this->getKeywordCategoriesAsyncWithHttpInfo($GetKeywordCategoriesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordCategoriesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesRequest $GetKeywordCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordCategoriesAsyncWithHttpInfo($GetKeywordCategoriesRequest, string $contentType = self::contentTypes['getKeywordCategories'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesResponse';
        $request = $this->getKeywordCategoriesRequest($GetKeywordCategoriesRequest, $contentType);

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
     * Create request for operation 'getKeywordCategories'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordCategoriesRequest $GetKeywordCategoriesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordCategoriesRequest($GetKeywordCategoriesRequest, string $contentType = self::contentTypes['getKeywordCategories'][0])
    {

        // verify the required parameter 'GetKeywordCategoriesRequest' is set
        if ($GetKeywordCategoriesRequest === null || (is_array($GetKeywordCategoriesRequest) && count($GetKeywordCategoriesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetKeywordCategoriesRequest when calling getKeywordCategories'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordCategories/query';
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
            $GetKeywordCategoriesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordCategories',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordDemographics
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsRequest $GetKeywordDemographicsRequest GetKeywordDemographicsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordDemographics'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordDemographics($GetKeywordDemographicsRequest, string $contentType = self::contentTypes['getKeywordDemographics'][0])
    {
        list($response) = $this->getKeywordDemographicsWithHttpInfo($GetKeywordDemographicsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordDemographicsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsRequest $GetKeywordDemographicsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordDemographics'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordDemographicsWithHttpInfo($GetKeywordDemographicsRequest, string $contentType = self::contentTypes['getKeywordDemographics'][0])
    {
        $request = $this->getKeywordDemographicsRequest($GetKeywordDemographicsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordDemographicsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsRequest $GetKeywordDemographicsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordDemographics'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordDemographicsAsync($GetKeywordDemographicsRequest, string $contentType = self::contentTypes['getKeywordDemographics'][0])
    {
        return $this->getKeywordDemographicsAsyncWithHttpInfo($GetKeywordDemographicsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordDemographicsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsRequest $GetKeywordDemographicsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordDemographics'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordDemographicsAsyncWithHttpInfo($GetKeywordDemographicsRequest, string $contentType = self::contentTypes['getKeywordDemographics'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsResponse';
        $request = $this->getKeywordDemographicsRequest($GetKeywordDemographicsRequest, $contentType);

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
     * Create request for operation 'getKeywordDemographics'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordDemographicsRequest $GetKeywordDemographicsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordDemographics'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordDemographicsRequest($GetKeywordDemographicsRequest, string $contentType = self::contentTypes['getKeywordDemographics'][0])
    {

        // verify the required parameter 'GetKeywordDemographicsRequest' is set
        if ($GetKeywordDemographicsRequest === null || (is_array($GetKeywordDemographicsRequest) && count($GetKeywordDemographicsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetKeywordDemographicsRequest when calling getKeywordDemographics'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordDemographics/query';
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
            $GetKeywordDemographicsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordDemographics',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordIdeaCategories
     *
     * @param  object $Body Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeaCategories'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeaCategoriesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordIdeaCategories($Body, string $contentType = self::contentTypes['getKeywordIdeaCategories'][0])
    {
        list($response) = $this->getKeywordIdeaCategoriesWithHttpInfo($Body, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordIdeaCategoriesWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeaCategories'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeaCategoriesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordIdeaCategoriesWithHttpInfo($Body, string $contentType = self::contentTypes['getKeywordIdeaCategories'][0])
    {
        $request = $this->getKeywordIdeaCategoriesRequest($Body, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeaCategoriesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeaCategoriesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeaCategoriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordIdeaCategoriesAsync
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeaCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordIdeaCategoriesAsync($Body, string $contentType = self::contentTypes['getKeywordIdeaCategories'][0])
    {
        return $this->getKeywordIdeaCategoriesAsyncWithHttpInfo($Body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordIdeaCategoriesAsyncWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeaCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordIdeaCategoriesAsyncWithHttpInfo($Body, string $contentType = self::contentTypes['getKeywordIdeaCategories'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeaCategoriesResponse';
        $request = $this->getKeywordIdeaCategoriesRequest($Body, $contentType);

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
     * Create request for operation 'getKeywordIdeaCategories'
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeaCategories'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordIdeaCategoriesRequest($Body, string $contentType = self::contentTypes['getKeywordIdeaCategories'][0])
    {

        // verify the required parameter 'Body' is set
        if ($Body === null || (is_array($Body) && count($Body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $Body when calling getKeywordIdeaCategories'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordIdeaCategories/query';
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
            $Body,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordIdeaCategories',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordIdeas
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasRequest $GetKeywordIdeasRequest GetKeywordIdeasRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeas'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordIdeas($GetKeywordIdeasRequest, string $contentType = self::contentTypes['getKeywordIdeas'][0])
    {
        list($response) = $this->getKeywordIdeasWithHttpInfo($GetKeywordIdeasRequest, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordIdeasWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasRequest $GetKeywordIdeasRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeas'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordIdeasWithHttpInfo($GetKeywordIdeasRequest, string $contentType = self::contentTypes['getKeywordIdeas'][0])
    {
        $request = $this->getKeywordIdeasRequest($GetKeywordIdeasRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordIdeasAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasRequest $GetKeywordIdeasRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeas'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordIdeasAsync($GetKeywordIdeasRequest, string $contentType = self::contentTypes['getKeywordIdeas'][0])
    {
        return $this->getKeywordIdeasAsyncWithHttpInfo($GetKeywordIdeasRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordIdeasAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasRequest $GetKeywordIdeasRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeas'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordIdeasAsyncWithHttpInfo($GetKeywordIdeasRequest, string $contentType = self::contentTypes['getKeywordIdeas'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasResponse';
        $request = $this->getKeywordIdeasRequest($GetKeywordIdeasRequest, $contentType);

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
     * Create request for operation 'getKeywordIdeas'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordIdeasRequest $GetKeywordIdeasRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordIdeas'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordIdeasRequest($GetKeywordIdeasRequest, string $contentType = self::contentTypes['getKeywordIdeas'][0])
    {

        // verify the required parameter 'GetKeywordIdeasRequest' is set
        if ($GetKeywordIdeasRequest === null || (is_array($GetKeywordIdeasRequest) && count($GetKeywordIdeasRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetKeywordIdeasRequest when calling getKeywordIdeas'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordIdeas/query';
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
            $GetKeywordIdeasRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordIdeas',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordLocations
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsRequest $GetKeywordLocationsRequest GetKeywordLocationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordLocations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordLocations($GetKeywordLocationsRequest, string $contentType = self::contentTypes['getKeywordLocations'][0])
    {
        list($response) = $this->getKeywordLocationsWithHttpInfo($GetKeywordLocationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordLocationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsRequest $GetKeywordLocationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordLocations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordLocationsWithHttpInfo($GetKeywordLocationsRequest, string $contentType = self::contentTypes['getKeywordLocations'][0])
    {
        $request = $this->getKeywordLocationsRequest($GetKeywordLocationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordLocationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsRequest $GetKeywordLocationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordLocations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordLocationsAsync($GetKeywordLocationsRequest, string $contentType = self::contentTypes['getKeywordLocations'][0])
    {
        return $this->getKeywordLocationsAsyncWithHttpInfo($GetKeywordLocationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordLocationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsRequest $GetKeywordLocationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordLocations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordLocationsAsyncWithHttpInfo($GetKeywordLocationsRequest, string $contentType = self::contentTypes['getKeywordLocations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsResponse';
        $request = $this->getKeywordLocationsRequest($GetKeywordLocationsRequest, $contentType);

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
     * Create request for operation 'getKeywordLocations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordLocationsRequest $GetKeywordLocationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordLocations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordLocationsRequest($GetKeywordLocationsRequest, string $contentType = self::contentTypes['getKeywordLocations'][0])
    {

        // verify the required parameter 'GetKeywordLocationsRequest' is set
        if ($GetKeywordLocationsRequest === null || (is_array($GetKeywordLocationsRequest) && count($GetKeywordLocationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetKeywordLocationsRequest when calling getKeywordLocations'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordLocations/query';
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
            $GetKeywordLocationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordLocations',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordOpportunities
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesRequest $GetKeywordOpportunitiesRequest GetKeywordOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordOpportunities'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordOpportunities($GetKeywordOpportunitiesRequest, string $contentType = self::contentTypes['getKeywordOpportunities'][0])
    {
        list($response) = $this->getKeywordOpportunitiesWithHttpInfo($GetKeywordOpportunitiesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordOpportunitiesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesRequest $GetKeywordOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordOpportunities'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordOpportunitiesWithHttpInfo($GetKeywordOpportunitiesRequest, string $contentType = self::contentTypes['getKeywordOpportunities'][0])
    {
        $request = $this->getKeywordOpportunitiesRequest($GetKeywordOpportunitiesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordOpportunitiesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesRequest $GetKeywordOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordOpportunitiesAsync($GetKeywordOpportunitiesRequest, string $contentType = self::contentTypes['getKeywordOpportunities'][0])
    {
        return $this->getKeywordOpportunitiesAsyncWithHttpInfo($GetKeywordOpportunitiesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordOpportunitiesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesRequest $GetKeywordOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordOpportunitiesAsyncWithHttpInfo($GetKeywordOpportunitiesRequest, string $contentType = self::contentTypes['getKeywordOpportunities'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesResponse';
        $request = $this->getKeywordOpportunitiesRequest($GetKeywordOpportunitiesRequest, $contentType);

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
     * Create request for operation 'getKeywordOpportunities'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordOpportunitiesRequest $GetKeywordOpportunitiesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordOpportunities'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordOpportunitiesRequest($GetKeywordOpportunitiesRequest, string $contentType = self::contentTypes['getKeywordOpportunities'][0])
    {

        // verify the required parameter 'GetKeywordOpportunitiesRequest' is set
        if ($GetKeywordOpportunitiesRequest === null || (is_array($GetKeywordOpportunitiesRequest) && count($GetKeywordOpportunitiesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetKeywordOpportunitiesRequest when calling getKeywordOpportunities'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordOpportunities/query';
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
            $GetKeywordOpportunitiesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordOpportunities',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getKeywordTrafficEstimates
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesRequest $GetKeywordTrafficEstimatesRequest GetKeywordTrafficEstimatesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordTrafficEstimates'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getKeywordTrafficEstimates($GetKeywordTrafficEstimatesRequest, string $contentType = self::contentTypes['getKeywordTrafficEstimates'][0])
    {
        list($response) = $this->getKeywordTrafficEstimatesWithHttpInfo($GetKeywordTrafficEstimatesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getKeywordTrafficEstimatesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesRequest $GetKeywordTrafficEstimatesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordTrafficEstimates'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeywordTrafficEstimatesWithHttpInfo($GetKeywordTrafficEstimatesRequest, string $contentType = self::contentTypes['getKeywordTrafficEstimates'][0])
    {
        $request = $this->getKeywordTrafficEstimatesRequest($GetKeywordTrafficEstimatesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getKeywordTrafficEstimatesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesRequest $GetKeywordTrafficEstimatesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordTrafficEstimates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordTrafficEstimatesAsync($GetKeywordTrafficEstimatesRequest, string $contentType = self::contentTypes['getKeywordTrafficEstimates'][0])
    {
        return $this->getKeywordTrafficEstimatesAsyncWithHttpInfo($GetKeywordTrafficEstimatesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getKeywordTrafficEstimatesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesRequest $GetKeywordTrafficEstimatesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordTrafficEstimates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKeywordTrafficEstimatesAsyncWithHttpInfo($GetKeywordTrafficEstimatesRequest, string $contentType = self::contentTypes['getKeywordTrafficEstimates'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesResponse';
        $request = $this->getKeywordTrafficEstimatesRequest($GetKeywordTrafficEstimatesRequest, $contentType);

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
     * Create request for operation 'getKeywordTrafficEstimates'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetKeywordTrafficEstimatesRequest $GetKeywordTrafficEstimatesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getKeywordTrafficEstimates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getKeywordTrafficEstimatesRequest($GetKeywordTrafficEstimatesRequest, string $contentType = self::contentTypes['getKeywordTrafficEstimates'][0])
    {

        // verify the required parameter 'GetKeywordTrafficEstimatesRequest' is set
        if ($GetKeywordTrafficEstimatesRequest === null || (is_array($GetKeywordTrafficEstimatesRequest) && count($GetKeywordTrafficEstimatesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetKeywordTrafficEstimatesRequest when calling getKeywordTrafficEstimates'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordTrafficEstimates/query';
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
            $GetKeywordTrafficEstimatesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetKeywordTrafficEstimates',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getPerformanceInsightsDetailDataByAccountId
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdRequest $GetPerformanceInsightsDetailDataByAccountIdRequest GetPerformanceInsightsDetailDataByAccountIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPerformanceInsightsDetailDataByAccountId'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getPerformanceInsightsDetailDataByAccountId($GetPerformanceInsightsDetailDataByAccountIdRequest, string $contentType = self::contentTypes['getPerformanceInsightsDetailDataByAccountId'][0])
    {
        list($response) = $this->getPerformanceInsightsDetailDataByAccountIdWithHttpInfo($GetPerformanceInsightsDetailDataByAccountIdRequest, $contentType);
        return $response;
    }

    /**
     * Operation getPerformanceInsightsDetailDataByAccountIdWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdRequest $GetPerformanceInsightsDetailDataByAccountIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPerformanceInsightsDetailDataByAccountId'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPerformanceInsightsDetailDataByAccountIdWithHttpInfo($GetPerformanceInsightsDetailDataByAccountIdRequest, string $contentType = self::contentTypes['getPerformanceInsightsDetailDataByAccountId'][0])
    {
        $request = $this->getPerformanceInsightsDetailDataByAccountIdRequest($GetPerformanceInsightsDetailDataByAccountIdRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPerformanceInsightsDetailDataByAccountIdAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdRequest $GetPerformanceInsightsDetailDataByAccountIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPerformanceInsightsDetailDataByAccountId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPerformanceInsightsDetailDataByAccountIdAsync($GetPerformanceInsightsDetailDataByAccountIdRequest, string $contentType = self::contentTypes['getPerformanceInsightsDetailDataByAccountId'][0])
    {
        return $this->getPerformanceInsightsDetailDataByAccountIdAsyncWithHttpInfo($GetPerformanceInsightsDetailDataByAccountIdRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPerformanceInsightsDetailDataByAccountIdAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdRequest $GetPerformanceInsightsDetailDataByAccountIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPerformanceInsightsDetailDataByAccountId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPerformanceInsightsDetailDataByAccountIdAsyncWithHttpInfo($GetPerformanceInsightsDetailDataByAccountIdRequest, string $contentType = self::contentTypes['getPerformanceInsightsDetailDataByAccountId'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdResponse';
        $request = $this->getPerformanceInsightsDetailDataByAccountIdRequest($GetPerformanceInsightsDetailDataByAccountIdRequest, $contentType);

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
     * Create request for operation 'getPerformanceInsightsDetailDataByAccountId'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetPerformanceInsightsDetailDataByAccountIdRequest $GetPerformanceInsightsDetailDataByAccountIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPerformanceInsightsDetailDataByAccountId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPerformanceInsightsDetailDataByAccountIdRequest($GetPerformanceInsightsDetailDataByAccountIdRequest, string $contentType = self::contentTypes['getPerformanceInsightsDetailDataByAccountId'][0])
    {

        // verify the required parameter 'GetPerformanceInsightsDetailDataByAccountIdRequest' is set
        if ($GetPerformanceInsightsDetailDataByAccountIdRequest === null || (is_array($GetPerformanceInsightsDetailDataByAccountIdRequest) && count($GetPerformanceInsightsDetailDataByAccountIdRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetPerformanceInsightsDetailDataByAccountIdRequest when calling getPerformanceInsightsDetailDataByAccountId'
            );
        }


        $resourcePath = '/AdInsight/v13/PerformanceInsightsDetailData/queryByAccountId';
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
            $GetPerformanceInsightsDetailDataByAccountIdRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetPerformanceInsightsDetailDataByAccountId',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getRecommendations
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsRequest $GetRecommendationsRequest GetRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getRecommendations($GetRecommendationsRequest, string $contentType = self::contentTypes['getRecommendations'][0])
    {
        list($response) = $this->getRecommendationsWithHttpInfo($GetRecommendationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getRecommendationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsRequest $GetRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecommendationsWithHttpInfo($GetRecommendationsRequest, string $contentType = self::contentTypes['getRecommendations'][0])
    {
        $request = $this->getRecommendationsRequest($GetRecommendationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRecommendationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsRequest $GetRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecommendationsAsync($GetRecommendationsRequest, string $contentType = self::contentTypes['getRecommendations'][0])
    {
        return $this->getRecommendationsAsyncWithHttpInfo($GetRecommendationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRecommendationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsRequest $GetRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecommendationsAsyncWithHttpInfo($GetRecommendationsRequest, string $contentType = self::contentTypes['getRecommendations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsResponse';
        $request = $this->getRecommendationsRequest($GetRecommendationsRequest, $contentType);

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
     * Create request for operation 'getRecommendations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetRecommendationsRequest $GetRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRecommendationsRequest($GetRecommendationsRequest, string $contentType = self::contentTypes['getRecommendations'][0])
    {

        // verify the required parameter 'GetRecommendationsRequest' is set
        if ($GetRecommendationsRequest === null || (is_array($GetRecommendationsRequest) && count($GetRecommendationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetRecommendationsRequest when calling getRecommendations'
            );
        }


        $resourcePath = '/AdInsight/v13/Recommendations/query';
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
            $GetRecommendationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetRecommendations',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getTextAssetSuggestionsByFinalUrls
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsRequest $GetTextAssetSuggestionsByFinalUrlsRequest GetTextAssetSuggestionsByFinalUrlsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTextAssetSuggestionsByFinalUrls'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function getTextAssetSuggestionsByFinalUrls($GetTextAssetSuggestionsByFinalUrlsRequest, string $contentType = self::contentTypes['getTextAssetSuggestionsByFinalUrls'][0])
    {
        list($response) = $this->getTextAssetSuggestionsByFinalUrlsWithHttpInfo($GetTextAssetSuggestionsByFinalUrlsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getTextAssetSuggestionsByFinalUrlsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsRequest $GetTextAssetSuggestionsByFinalUrlsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTextAssetSuggestionsByFinalUrls'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTextAssetSuggestionsByFinalUrlsWithHttpInfo($GetTextAssetSuggestionsByFinalUrlsRequest, string $contentType = self::contentTypes['getTextAssetSuggestionsByFinalUrls'][0])
    {
        $request = $this->getTextAssetSuggestionsByFinalUrlsRequest($GetTextAssetSuggestionsByFinalUrlsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTextAssetSuggestionsByFinalUrlsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsRequest $GetTextAssetSuggestionsByFinalUrlsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTextAssetSuggestionsByFinalUrls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTextAssetSuggestionsByFinalUrlsAsync($GetTextAssetSuggestionsByFinalUrlsRequest, string $contentType = self::contentTypes['getTextAssetSuggestionsByFinalUrls'][0])
    {
        return $this->getTextAssetSuggestionsByFinalUrlsAsyncWithHttpInfo($GetTextAssetSuggestionsByFinalUrlsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTextAssetSuggestionsByFinalUrlsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsRequest $GetTextAssetSuggestionsByFinalUrlsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTextAssetSuggestionsByFinalUrls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTextAssetSuggestionsByFinalUrlsAsyncWithHttpInfo($GetTextAssetSuggestionsByFinalUrlsRequest, string $contentType = self::contentTypes['getTextAssetSuggestionsByFinalUrls'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsResponse';
        $request = $this->getTextAssetSuggestionsByFinalUrlsRequest($GetTextAssetSuggestionsByFinalUrlsRequest, $contentType);

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
     * Create request for operation 'getTextAssetSuggestionsByFinalUrls'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\GetTextAssetSuggestionsByFinalUrlsRequest $GetTextAssetSuggestionsByFinalUrlsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTextAssetSuggestionsByFinalUrls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTextAssetSuggestionsByFinalUrlsRequest($GetTextAssetSuggestionsByFinalUrlsRequest, string $contentType = self::contentTypes['getTextAssetSuggestionsByFinalUrls'][0])
    {

        // verify the required parameter 'GetTextAssetSuggestionsByFinalUrlsRequest' is set
        if ($GetTextAssetSuggestionsByFinalUrlsRequest === null || (is_array($GetTextAssetSuggestionsByFinalUrlsRequest) && count($GetTextAssetSuggestionsByFinalUrlsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetTextAssetSuggestionsByFinalUrlsRequest when calling getTextAssetSuggestionsByFinalUrls'
            );
        }


        $resourcePath = '/AdInsight/v13/TextAssetSuggestions/queryByFinalUrls';
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
            $GetTextAssetSuggestionsByFinalUrlsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetTextAssetSuggestionsByFinalUrls',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation retrieveRecommendations
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsRequest $RetrieveRecommendationsRequest RetrieveRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function retrieveRecommendations($RetrieveRecommendationsRequest, string $contentType = self::contentTypes['retrieveRecommendations'][0])
    {
        list($response) = $this->retrieveRecommendationsWithHttpInfo($RetrieveRecommendationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation retrieveRecommendationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsRequest $RetrieveRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveRecommendationsWithHttpInfo($RetrieveRecommendationsRequest, string $contentType = self::contentTypes['retrieveRecommendations'][0])
    {
        $request = $this->retrieveRecommendationsRequest($RetrieveRecommendationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveRecommendationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsRequest $RetrieveRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveRecommendationsAsync($RetrieveRecommendationsRequest, string $contentType = self::contentTypes['retrieveRecommendations'][0])
    {
        return $this->retrieveRecommendationsAsyncWithHttpInfo($RetrieveRecommendationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveRecommendationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsRequest $RetrieveRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveRecommendationsAsyncWithHttpInfo($RetrieveRecommendationsRequest, string $contentType = self::contentTypes['retrieveRecommendations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsResponse';
        $request = $this->retrieveRecommendationsRequest($RetrieveRecommendationsRequest, $contentType);

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
     * Create request for operation 'retrieveRecommendations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\RetrieveRecommendationsRequest $RetrieveRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function retrieveRecommendationsRequest($RetrieveRecommendationsRequest, string $contentType = self::contentTypes['retrieveRecommendations'][0])
    {

        // verify the required parameter 'RetrieveRecommendationsRequest' is set
        if ($RetrieveRecommendationsRequest === null || (is_array($RetrieveRecommendationsRequest) && count($RetrieveRecommendationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $RetrieveRecommendationsRequest when calling retrieveRecommendations'
            );
        }


        $resourcePath = '/AdInsight/v13/Recommendations/retrieve';
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
            $RetrieveRecommendationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForretrieveRecommendations',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation setAutoApplyOptInStatus
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusRequest $SetAutoApplyOptInStatusRequest SetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['setAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function setAutoApplyOptInStatus($SetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['setAutoApplyOptInStatus'][0])
    {
        list($response) = $this->setAutoApplyOptInStatusWithHttpInfo($SetAutoApplyOptInStatusRequest, $contentType);
        return $response;
    }

    /**
     * Operation setAutoApplyOptInStatusWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusRequest $SetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['setAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function setAutoApplyOptInStatusWithHttpInfo($SetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['setAutoApplyOptInStatus'][0])
    {
        $request = $this->setAutoApplyOptInStatusRequest($SetAutoApplyOptInStatusRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation setAutoApplyOptInStatusAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusRequest $SetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['setAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setAutoApplyOptInStatusAsync($SetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['setAutoApplyOptInStatus'][0])
    {
        return $this->setAutoApplyOptInStatusAsyncWithHttpInfo($SetAutoApplyOptInStatusRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setAutoApplyOptInStatusAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusRequest $SetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['setAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setAutoApplyOptInStatusAsyncWithHttpInfo($SetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['setAutoApplyOptInStatus'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusResponse';
        $request = $this->setAutoApplyOptInStatusRequest($SetAutoApplyOptInStatusRequest, $contentType);

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
     * Create request for operation 'setAutoApplyOptInStatus'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SetAutoApplyOptInStatusRequest $SetAutoApplyOptInStatusRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['setAutoApplyOptInStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function setAutoApplyOptInStatusRequest($SetAutoApplyOptInStatusRequest, string $contentType = self::contentTypes['setAutoApplyOptInStatus'][0])
    {

        // verify the required parameter 'SetAutoApplyOptInStatusRequest' is set
        if ($SetAutoApplyOptInStatusRequest === null || (is_array($SetAutoApplyOptInStatusRequest) && count($SetAutoApplyOptInStatusRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SetAutoApplyOptInStatusRequest when calling setAutoApplyOptInStatus'
            );
        }


        $resourcePath = '/AdInsight/v13/AutoApplyOptInStatus/set';
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
            $SetAutoApplyOptInStatusRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsetAutoApplyOptInStatus',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation suggestKeywordsForUrl
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlRequest $SuggestKeywordsForUrlRequest SuggestKeywordsForUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsForUrl'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function suggestKeywordsForUrl($SuggestKeywordsForUrlRequest, string $contentType = self::contentTypes['suggestKeywordsForUrl'][0])
    {
        list($response) = $this->suggestKeywordsForUrlWithHttpInfo($SuggestKeywordsForUrlRequest, $contentType);
        return $response;
    }

    /**
     * Operation suggestKeywordsForUrlWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlRequest $SuggestKeywordsForUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsForUrl'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function suggestKeywordsForUrlWithHttpInfo($SuggestKeywordsForUrlRequest, string $contentType = self::contentTypes['suggestKeywordsForUrl'][0])
    {
        $request = $this->suggestKeywordsForUrlRequest($SuggestKeywordsForUrlRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation suggestKeywordsForUrlAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlRequest $SuggestKeywordsForUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsForUrl'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suggestKeywordsForUrlAsync($SuggestKeywordsForUrlRequest, string $contentType = self::contentTypes['suggestKeywordsForUrl'][0])
    {
        return $this->suggestKeywordsForUrlAsyncWithHttpInfo($SuggestKeywordsForUrlRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation suggestKeywordsForUrlAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlRequest $SuggestKeywordsForUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsForUrl'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suggestKeywordsForUrlAsyncWithHttpInfo($SuggestKeywordsForUrlRequest, string $contentType = self::contentTypes['suggestKeywordsForUrl'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlResponse';
        $request = $this->suggestKeywordsForUrlRequest($SuggestKeywordsForUrlRequest, $contentType);

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
     * Create request for operation 'suggestKeywordsForUrl'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsForUrlRequest $SuggestKeywordsForUrlRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsForUrl'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function suggestKeywordsForUrlRequest($SuggestKeywordsForUrlRequest, string $contentType = self::contentTypes['suggestKeywordsForUrl'][0])
    {

        // verify the required parameter 'SuggestKeywordsForUrlRequest' is set
        if ($SuggestKeywordsForUrlRequest === null || (is_array($SuggestKeywordsForUrlRequest) && count($SuggestKeywordsForUrlRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SuggestKeywordsForUrlRequest when calling suggestKeywordsForUrl'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordSuggestions/queryByUrl';
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
            $SuggestKeywordsForUrlRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsuggestKeywordsForUrl',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation suggestKeywordsFromExistingKeywords
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsRequest $SuggestKeywordsFromExistingKeywordsRequest SuggestKeywordsFromExistingKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsFromExistingKeywords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function suggestKeywordsFromExistingKeywords($SuggestKeywordsFromExistingKeywordsRequest, string $contentType = self::contentTypes['suggestKeywordsFromExistingKeywords'][0])
    {
        list($response) = $this->suggestKeywordsFromExistingKeywordsWithHttpInfo($SuggestKeywordsFromExistingKeywordsRequest, $contentType);
        return $response;
    }

    /**
     * Operation suggestKeywordsFromExistingKeywordsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsRequest $SuggestKeywordsFromExistingKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsFromExistingKeywords'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function suggestKeywordsFromExistingKeywordsWithHttpInfo($SuggestKeywordsFromExistingKeywordsRequest, string $contentType = self::contentTypes['suggestKeywordsFromExistingKeywords'][0])
    {
        $request = $this->suggestKeywordsFromExistingKeywordsRequest($SuggestKeywordsFromExistingKeywordsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation suggestKeywordsFromExistingKeywordsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsRequest $SuggestKeywordsFromExistingKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsFromExistingKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suggestKeywordsFromExistingKeywordsAsync($SuggestKeywordsFromExistingKeywordsRequest, string $contentType = self::contentTypes['suggestKeywordsFromExistingKeywords'][0])
    {
        return $this->suggestKeywordsFromExistingKeywordsAsyncWithHttpInfo($SuggestKeywordsFromExistingKeywordsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation suggestKeywordsFromExistingKeywordsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsRequest $SuggestKeywordsFromExistingKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsFromExistingKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suggestKeywordsFromExistingKeywordsAsyncWithHttpInfo($SuggestKeywordsFromExistingKeywordsRequest, string $contentType = self::contentTypes['suggestKeywordsFromExistingKeywords'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsResponse';
        $request = $this->suggestKeywordsFromExistingKeywordsRequest($SuggestKeywordsFromExistingKeywordsRequest, $contentType);

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
     * Create request for operation 'suggestKeywordsFromExistingKeywords'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestKeywordsFromExistingKeywordsRequest $SuggestKeywordsFromExistingKeywordsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['suggestKeywordsFromExistingKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function suggestKeywordsFromExistingKeywordsRequest($SuggestKeywordsFromExistingKeywordsRequest, string $contentType = self::contentTypes['suggestKeywordsFromExistingKeywords'][0])
    {

        // verify the required parameter 'SuggestKeywordsFromExistingKeywordsRequest' is set
        if ($SuggestKeywordsFromExistingKeywordsRequest === null || (is_array($SuggestKeywordsFromExistingKeywordsRequest) && count($SuggestKeywordsFromExistingKeywordsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SuggestKeywordsFromExistingKeywordsRequest when calling suggestKeywordsFromExistingKeywords'
            );
        }


        $resourcePath = '/AdInsight/v13/KeywordSuggestions/queryByKeywords';
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
            $SuggestKeywordsFromExistingKeywordsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsuggestKeywordsFromExistingKeywords',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation tagRecommendations
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsRequest $TagRecommendationsRequest TagRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tagRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault
     */
    public function tagRecommendations($TagRecommendationsRequest, string $contentType = self::contentTypes['tagRecommendations'][0])
    {
        list($response) = $this->tagRecommendationsWithHttpInfo($TagRecommendationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation tagRecommendationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsRequest $TagRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tagRecommendations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsResponse|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault|\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function tagRecommendationsWithHttpInfo($TagRecommendationsRequest, string $contentType = self::contentTypes['tagRecommendations'][0])
    {
        $request = $this->tagRecommendationsRequest($TagRecommendationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\AdInsightService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tagRecommendationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsRequest $TagRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tagRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tagRecommendationsAsync($TagRecommendationsRequest, string $contentType = self::contentTypes['tagRecommendations'][0])
    {
        return $this->tagRecommendationsAsyncWithHttpInfo($TagRecommendationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tagRecommendationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsRequest $TagRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tagRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tagRecommendationsAsyncWithHttpInfo($TagRecommendationsRequest, string $contentType = self::contentTypes['tagRecommendations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsResponse';
        $request = $this->tagRecommendationsRequest($TagRecommendationsRequest, $contentType);

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
     * Create request for operation 'tagRecommendations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\AdInsightService\TagRecommendationsRequest $TagRecommendationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tagRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tagRecommendationsRequest($TagRecommendationsRequest, string $contentType = self::contentTypes['tagRecommendations'][0])
    {

        // verify the required parameter 'TagRecommendationsRequest' is set
        if ($TagRecommendationsRequest === null || (is_array($TagRecommendationsRequest) && count($TagRecommendationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $TagRecommendationsRequest when calling tagRecommendations'
            );
        }


        $resourcePath = '/AdInsight/v13/Recommendations/tag';
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
            $TagRecommendationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFortagRecommendations',
            null,
            [],
            $queryParams
        );
    }

}
