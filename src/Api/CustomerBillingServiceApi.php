<?php
/**
 * CustomerBillingServiceApi
 * CustomerBillingService
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

class CustomerBillingServiceApi extends AbstractServiceApi
{
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'addInsertionOrder' => [
            'application/json',
        ],
        'checkFeatureAdoptionCouponEligibility' => [
            'application/json',
        ],
        'claimFeatureAdoptionCoupons' => [
            'application/json',
        ],
        'dispatchCoupons' => [
            'application/json',
        ],
        'getAccountMonthlySpend' => [
            'application/json',
        ],
        'getBillingDocuments' => [
            'application/json',
        ],
        'getBillingDocumentsInfo' => [
            'application/json',
        ],
        'getCouponInfo' => [
            'application/json',
        ],
        'redeemCoupon' => [
            'application/json',
        ],
        'searchCoupons' => [
            'application/json',
        ],
        'searchInsertionOrders' => [
            'application/json',
        ],
        'updateInsertionOrder' => [
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
        $this->hostIndex = 'CustomerBillingService';
    }

    /**
     * Operation addInsertionOrder
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderRequest $AddInsertionOrderRequest AddInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addInsertionOrder'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function addInsertionOrder($AddInsertionOrderRequest, string $contentType = self::contentTypes['addInsertionOrder'][0])
    {
        list($response) = $this->addInsertionOrderWithHttpInfo($AddInsertionOrderRequest, $contentType);
        return $response;
    }

    /**
     * Operation addInsertionOrderWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderRequest $AddInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addInsertionOrder'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function addInsertionOrderWithHttpInfo($AddInsertionOrderRequest, string $contentType = self::contentTypes['addInsertionOrder'][0])
    {
        $request = $this->addInsertionOrderRequest($AddInsertionOrderRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addInsertionOrderAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderRequest $AddInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addInsertionOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addInsertionOrderAsync($AddInsertionOrderRequest, string $contentType = self::contentTypes['addInsertionOrder'][0])
    {
        return $this->addInsertionOrderAsyncWithHttpInfo($AddInsertionOrderRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addInsertionOrderAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderRequest $AddInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addInsertionOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addInsertionOrderAsyncWithHttpInfo($AddInsertionOrderRequest, string $contentType = self::contentTypes['addInsertionOrder'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderResponse';
        $request = $this->addInsertionOrderRequest($AddInsertionOrderRequest, $contentType);

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
     * Create request for operation 'addInsertionOrder'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\AddInsertionOrderRequest $AddInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addInsertionOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addInsertionOrderRequest($AddInsertionOrderRequest, string $contentType = self::contentTypes['addInsertionOrder'][0])
    {

        // verify the required parameter 'AddInsertionOrderRequest' is set
        if ($AddInsertionOrderRequest === null || (is_array($AddInsertionOrderRequest) && count($AddInsertionOrderRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $AddInsertionOrderRequest when calling addInsertionOrder'
            );
        }


        $resourcePath = '/CustomerBilling/v13/InsertionOrder';
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
            $AddInsertionOrderRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForaddInsertionOrder',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation checkFeatureAdoptionCouponEligibility
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityRequest $CheckFeatureAdoptionCouponEligibilityRequest CheckFeatureAdoptionCouponEligibilityRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkFeatureAdoptionCouponEligibility'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function checkFeatureAdoptionCouponEligibility($CheckFeatureAdoptionCouponEligibilityRequest, string $contentType = self::contentTypes['checkFeatureAdoptionCouponEligibility'][0])
    {
        list($response) = $this->checkFeatureAdoptionCouponEligibilityWithHttpInfo($CheckFeatureAdoptionCouponEligibilityRequest, $contentType);
        return $response;
    }

    /**
     * Operation checkFeatureAdoptionCouponEligibilityWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityRequest $CheckFeatureAdoptionCouponEligibilityRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkFeatureAdoptionCouponEligibility'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkFeatureAdoptionCouponEligibilityWithHttpInfo($CheckFeatureAdoptionCouponEligibilityRequest, string $contentType = self::contentTypes['checkFeatureAdoptionCouponEligibility'][0])
    {
        $request = $this->checkFeatureAdoptionCouponEligibilityRequest($CheckFeatureAdoptionCouponEligibilityRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkFeatureAdoptionCouponEligibilityAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityRequest $CheckFeatureAdoptionCouponEligibilityRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkFeatureAdoptionCouponEligibility'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkFeatureAdoptionCouponEligibilityAsync($CheckFeatureAdoptionCouponEligibilityRequest, string $contentType = self::contentTypes['checkFeatureAdoptionCouponEligibility'][0])
    {
        return $this->checkFeatureAdoptionCouponEligibilityAsyncWithHttpInfo($CheckFeatureAdoptionCouponEligibilityRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkFeatureAdoptionCouponEligibilityAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityRequest $CheckFeatureAdoptionCouponEligibilityRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkFeatureAdoptionCouponEligibility'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkFeatureAdoptionCouponEligibilityAsyncWithHttpInfo($CheckFeatureAdoptionCouponEligibilityRequest, string $contentType = self::contentTypes['checkFeatureAdoptionCouponEligibility'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityResponse';
        $request = $this->checkFeatureAdoptionCouponEligibilityRequest($CheckFeatureAdoptionCouponEligibilityRequest, $contentType);

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
     * Create request for operation 'checkFeatureAdoptionCouponEligibility'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\CheckFeatureAdoptionCouponEligibilityRequest $CheckFeatureAdoptionCouponEligibilityRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkFeatureAdoptionCouponEligibility'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function checkFeatureAdoptionCouponEligibilityRequest($CheckFeatureAdoptionCouponEligibilityRequest, string $contentType = self::contentTypes['checkFeatureAdoptionCouponEligibility'][0])
    {

        // verify the required parameter 'CheckFeatureAdoptionCouponEligibilityRequest' is set
        if ($CheckFeatureAdoptionCouponEligibilityRequest === null || (is_array($CheckFeatureAdoptionCouponEligibilityRequest) && count($CheckFeatureAdoptionCouponEligibilityRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $CheckFeatureAdoptionCouponEligibilityRequest when calling checkFeatureAdoptionCouponEligibility'
            );
        }


        $resourcePath = '/CustomerBilling/v13/FeatureAdoptionCouponEligibility/Check';
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
            $CheckFeatureAdoptionCouponEligibilityRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForcheckFeatureAdoptionCouponEligibility',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation claimFeatureAdoptionCoupons
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsRequest $ClaimFeatureAdoptionCouponsRequest ClaimFeatureAdoptionCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['claimFeatureAdoptionCoupons'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function claimFeatureAdoptionCoupons($ClaimFeatureAdoptionCouponsRequest, string $contentType = self::contentTypes['claimFeatureAdoptionCoupons'][0])
    {
        list($response) = $this->claimFeatureAdoptionCouponsWithHttpInfo($ClaimFeatureAdoptionCouponsRequest, $contentType);
        return $response;
    }

    /**
     * Operation claimFeatureAdoptionCouponsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsRequest $ClaimFeatureAdoptionCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['claimFeatureAdoptionCoupons'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function claimFeatureAdoptionCouponsWithHttpInfo($ClaimFeatureAdoptionCouponsRequest, string $contentType = self::contentTypes['claimFeatureAdoptionCoupons'][0])
    {
        $request = $this->claimFeatureAdoptionCouponsRequest($ClaimFeatureAdoptionCouponsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation claimFeatureAdoptionCouponsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsRequest $ClaimFeatureAdoptionCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['claimFeatureAdoptionCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function claimFeatureAdoptionCouponsAsync($ClaimFeatureAdoptionCouponsRequest, string $contentType = self::contentTypes['claimFeatureAdoptionCoupons'][0])
    {
        return $this->claimFeatureAdoptionCouponsAsyncWithHttpInfo($ClaimFeatureAdoptionCouponsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation claimFeatureAdoptionCouponsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsRequest $ClaimFeatureAdoptionCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['claimFeatureAdoptionCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function claimFeatureAdoptionCouponsAsyncWithHttpInfo($ClaimFeatureAdoptionCouponsRequest, string $contentType = self::contentTypes['claimFeatureAdoptionCoupons'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsResponse';
        $request = $this->claimFeatureAdoptionCouponsRequest($ClaimFeatureAdoptionCouponsRequest, $contentType);

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
     * Create request for operation 'claimFeatureAdoptionCoupons'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\ClaimFeatureAdoptionCouponsRequest $ClaimFeatureAdoptionCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['claimFeatureAdoptionCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function claimFeatureAdoptionCouponsRequest($ClaimFeatureAdoptionCouponsRequest, string $contentType = self::contentTypes['claimFeatureAdoptionCoupons'][0])
    {

        // verify the required parameter 'ClaimFeatureAdoptionCouponsRequest' is set
        if ($ClaimFeatureAdoptionCouponsRequest === null || (is_array($ClaimFeatureAdoptionCouponsRequest) && count($ClaimFeatureAdoptionCouponsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ClaimFeatureAdoptionCouponsRequest when calling claimFeatureAdoptionCoupons'
            );
        }


        $resourcePath = '/CustomerBilling/v13/FeatureAdoptionCoupons/Claim';
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
            $ClaimFeatureAdoptionCouponsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForclaimFeatureAdoptionCoupons',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation dispatchCoupons
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsRequest $DispatchCouponsRequest DispatchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dispatchCoupons'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function dispatchCoupons($DispatchCouponsRequest, string $contentType = self::contentTypes['dispatchCoupons'][0])
    {
        list($response) = $this->dispatchCouponsWithHttpInfo($DispatchCouponsRequest, $contentType);
        return $response;
    }

    /**
     * Operation dispatchCouponsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsRequest $DispatchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dispatchCoupons'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function dispatchCouponsWithHttpInfo($DispatchCouponsRequest, string $contentType = self::contentTypes['dispatchCoupons'][0])
    {
        $request = $this->dispatchCouponsRequest($DispatchCouponsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation dispatchCouponsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsRequest $DispatchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dispatchCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dispatchCouponsAsync($DispatchCouponsRequest, string $contentType = self::contentTypes['dispatchCoupons'][0])
    {
        return $this->dispatchCouponsAsyncWithHttpInfo($DispatchCouponsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dispatchCouponsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsRequest $DispatchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dispatchCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dispatchCouponsAsyncWithHttpInfo($DispatchCouponsRequest, string $contentType = self::contentTypes['dispatchCoupons'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsResponse';
        $request = $this->dispatchCouponsRequest($DispatchCouponsRequest, $contentType);

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
     * Create request for operation 'dispatchCoupons'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\DispatchCouponsRequest $DispatchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dispatchCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function dispatchCouponsRequest($DispatchCouponsRequest, string $contentType = self::contentTypes['dispatchCoupons'][0])
    {

        // verify the required parameter 'DispatchCouponsRequest' is set
        if ($DispatchCouponsRequest === null || (is_array($DispatchCouponsRequest) && count($DispatchCouponsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DispatchCouponsRequest when calling dispatchCoupons'
            );
        }


        $resourcePath = '/CustomerBilling/v13/Coupons/Dispatch';
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
            $DispatchCouponsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordispatchCoupons',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAccountMonthlySpend
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendRequest $GetAccountMonthlySpendRequest GetAccountMonthlySpendRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountMonthlySpend'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function getAccountMonthlySpend($GetAccountMonthlySpendRequest, string $contentType = self::contentTypes['getAccountMonthlySpend'][0])
    {
        list($response) = $this->getAccountMonthlySpendWithHttpInfo($GetAccountMonthlySpendRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAccountMonthlySpendWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendRequest $GetAccountMonthlySpendRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountMonthlySpend'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountMonthlySpendWithHttpInfo($GetAccountMonthlySpendRequest, string $contentType = self::contentTypes['getAccountMonthlySpend'][0])
    {
        $request = $this->getAccountMonthlySpendRequest($GetAccountMonthlySpendRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccountMonthlySpendAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendRequest $GetAccountMonthlySpendRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountMonthlySpend'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountMonthlySpendAsync($GetAccountMonthlySpendRequest, string $contentType = self::contentTypes['getAccountMonthlySpend'][0])
    {
        return $this->getAccountMonthlySpendAsyncWithHttpInfo($GetAccountMonthlySpendRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccountMonthlySpendAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendRequest $GetAccountMonthlySpendRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountMonthlySpend'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountMonthlySpendAsyncWithHttpInfo($GetAccountMonthlySpendRequest, string $contentType = self::contentTypes['getAccountMonthlySpend'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendResponse';
        $request = $this->getAccountMonthlySpendRequest($GetAccountMonthlySpendRequest, $contentType);

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
     * Create request for operation 'getAccountMonthlySpend'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetAccountMonthlySpendRequest $GetAccountMonthlySpendRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountMonthlySpend'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAccountMonthlySpendRequest($GetAccountMonthlySpendRequest, string $contentType = self::contentTypes['getAccountMonthlySpend'][0])
    {

        // verify the required parameter 'GetAccountMonthlySpendRequest' is set
        if ($GetAccountMonthlySpendRequest === null || (is_array($GetAccountMonthlySpendRequest) && count($GetAccountMonthlySpendRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAccountMonthlySpendRequest when calling getAccountMonthlySpend'
            );
        }


        $resourcePath = '/CustomerBilling/v13/AccountMonthlySpend/Query';
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
            $GetAccountMonthlySpendRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAccountMonthlySpend',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBillingDocuments
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsRequest $GetBillingDocumentsRequest GetBillingDocumentsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocuments'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function getBillingDocuments($GetBillingDocumentsRequest, string $contentType = self::contentTypes['getBillingDocuments'][0])
    {
        list($response) = $this->getBillingDocumentsWithHttpInfo($GetBillingDocumentsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBillingDocumentsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsRequest $GetBillingDocumentsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocuments'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingDocumentsWithHttpInfo($GetBillingDocumentsRequest, string $contentType = self::contentTypes['getBillingDocuments'][0])
    {
        $request = $this->getBillingDocumentsRequest($GetBillingDocumentsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBillingDocumentsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsRequest $GetBillingDocumentsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocuments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingDocumentsAsync($GetBillingDocumentsRequest, string $contentType = self::contentTypes['getBillingDocuments'][0])
    {
        return $this->getBillingDocumentsAsyncWithHttpInfo($GetBillingDocumentsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingDocumentsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsRequest $GetBillingDocumentsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocuments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingDocumentsAsyncWithHttpInfo($GetBillingDocumentsRequest, string $contentType = self::contentTypes['getBillingDocuments'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsResponse';
        $request = $this->getBillingDocumentsRequest($GetBillingDocumentsRequest, $contentType);

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
     * Create request for operation 'getBillingDocuments'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsRequest $GetBillingDocumentsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocuments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBillingDocumentsRequest($GetBillingDocumentsRequest, string $contentType = self::contentTypes['getBillingDocuments'][0])
    {

        // verify the required parameter 'GetBillingDocumentsRequest' is set
        if ($GetBillingDocumentsRequest === null || (is_array($GetBillingDocumentsRequest) && count($GetBillingDocumentsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBillingDocumentsRequest when calling getBillingDocuments'
            );
        }


        $resourcePath = '/CustomerBilling/v13/BillingDocuments/Query';
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
            $GetBillingDocumentsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBillingDocuments',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getBillingDocumentsInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoRequest $GetBillingDocumentsInfoRequest GetBillingDocumentsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocumentsInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function getBillingDocumentsInfo($GetBillingDocumentsInfoRequest, string $contentType = self::contentTypes['getBillingDocumentsInfo'][0])
    {
        list($response) = $this->getBillingDocumentsInfoWithHttpInfo($GetBillingDocumentsInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation getBillingDocumentsInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoRequest $GetBillingDocumentsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocumentsInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingDocumentsInfoWithHttpInfo($GetBillingDocumentsInfoRequest, string $contentType = self::contentTypes['getBillingDocumentsInfo'][0])
    {
        $request = $this->getBillingDocumentsInfoRequest($GetBillingDocumentsInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBillingDocumentsInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoRequest $GetBillingDocumentsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocumentsInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingDocumentsInfoAsync($GetBillingDocumentsInfoRequest, string $contentType = self::contentTypes['getBillingDocumentsInfo'][0])
    {
        return $this->getBillingDocumentsInfoAsyncWithHttpInfo($GetBillingDocumentsInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingDocumentsInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoRequest $GetBillingDocumentsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocumentsInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingDocumentsInfoAsyncWithHttpInfo($GetBillingDocumentsInfoRequest, string $contentType = self::contentTypes['getBillingDocumentsInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoResponse';
        $request = $this->getBillingDocumentsInfoRequest($GetBillingDocumentsInfoRequest, $contentType);

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
     * Create request for operation 'getBillingDocumentsInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetBillingDocumentsInfoRequest $GetBillingDocumentsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingDocumentsInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBillingDocumentsInfoRequest($GetBillingDocumentsInfoRequest, string $contentType = self::contentTypes['getBillingDocumentsInfo'][0])
    {

        // verify the required parameter 'GetBillingDocumentsInfoRequest' is set
        if ($GetBillingDocumentsInfoRequest === null || (is_array($GetBillingDocumentsInfoRequest) && count($GetBillingDocumentsInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetBillingDocumentsInfoRequest when calling getBillingDocumentsInfo'
            );
        }


        $resourcePath = '/CustomerBilling/v13/BillingDocumentsInfo/Query';
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
            $GetBillingDocumentsInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetBillingDocumentsInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getCouponInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoRequest $GetCouponInfoRequest GetCouponInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCouponInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function getCouponInfo($GetCouponInfoRequest, string $contentType = self::contentTypes['getCouponInfo'][0])
    {
        list($response) = $this->getCouponInfoWithHttpInfo($GetCouponInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation getCouponInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoRequest $GetCouponInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCouponInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCouponInfoWithHttpInfo($GetCouponInfoRequest, string $contentType = self::contentTypes['getCouponInfo'][0])
    {
        $request = $this->getCouponInfoRequest($GetCouponInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCouponInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoRequest $GetCouponInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCouponInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCouponInfoAsync($GetCouponInfoRequest, string $contentType = self::contentTypes['getCouponInfo'][0])
    {
        return $this->getCouponInfoAsyncWithHttpInfo($GetCouponInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCouponInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoRequest $GetCouponInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCouponInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCouponInfoAsyncWithHttpInfo($GetCouponInfoRequest, string $contentType = self::contentTypes['getCouponInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoResponse';
        $request = $this->getCouponInfoRequest($GetCouponInfoRequest, $contentType);

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
     * Create request for operation 'getCouponInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\GetCouponInfoRequest $GetCouponInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCouponInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCouponInfoRequest($GetCouponInfoRequest, string $contentType = self::contentTypes['getCouponInfo'][0])
    {

        // verify the required parameter 'GetCouponInfoRequest' is set
        if ($GetCouponInfoRequest === null || (is_array($GetCouponInfoRequest) && count($GetCouponInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetCouponInfoRequest when calling getCouponInfo'
            );
        }


        $resourcePath = '/CustomerBilling/v13/CouponInfo/Query';
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
            $GetCouponInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetCouponInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation redeemCoupon
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponRequest $RedeemCouponRequest RedeemCouponRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['redeemCoupon'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function redeemCoupon($RedeemCouponRequest, string $contentType = self::contentTypes['redeemCoupon'][0])
    {
        list($response) = $this->redeemCouponWithHttpInfo($RedeemCouponRequest, $contentType);
        return $response;
    }

    /**
     * Operation redeemCouponWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponRequest $RedeemCouponRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['redeemCoupon'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function redeemCouponWithHttpInfo($RedeemCouponRequest, string $contentType = self::contentTypes['redeemCoupon'][0])
    {
        $request = $this->redeemCouponRequest($RedeemCouponRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation redeemCouponAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponRequest $RedeemCouponRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['redeemCoupon'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function redeemCouponAsync($RedeemCouponRequest, string $contentType = self::contentTypes['redeemCoupon'][0])
    {
        return $this->redeemCouponAsyncWithHttpInfo($RedeemCouponRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation redeemCouponAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponRequest $RedeemCouponRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['redeemCoupon'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function redeemCouponAsyncWithHttpInfo($RedeemCouponRequest, string $contentType = self::contentTypes['redeemCoupon'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponResponse';
        $request = $this->redeemCouponRequest($RedeemCouponRequest, $contentType);

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
     * Create request for operation 'redeemCoupon'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\RedeemCouponRequest $RedeemCouponRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['redeemCoupon'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function redeemCouponRequest($RedeemCouponRequest, string $contentType = self::contentTypes['redeemCoupon'][0])
    {

        // verify the required parameter 'RedeemCouponRequest' is set
        if ($RedeemCouponRequest === null || (is_array($RedeemCouponRequest) && count($RedeemCouponRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $RedeemCouponRequest when calling redeemCoupon'
            );
        }


        $resourcePath = '/CustomerBilling/v13/Coupon/Redeem';
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
            $RedeemCouponRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForredeemCoupon',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation searchCoupons
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsRequest $SearchCouponsRequest SearchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCoupons'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function searchCoupons($SearchCouponsRequest, string $contentType = self::contentTypes['searchCoupons'][0])
    {
        list($response) = $this->searchCouponsWithHttpInfo($SearchCouponsRequest, $contentType);
        return $response;
    }

    /**
     * Operation searchCouponsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsRequest $SearchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCoupons'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchCouponsWithHttpInfo($SearchCouponsRequest, string $contentType = self::contentTypes['searchCoupons'][0])
    {
        $request = $this->searchCouponsRequest($SearchCouponsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchCouponsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsRequest $SearchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCouponsAsync($SearchCouponsRequest, string $contentType = self::contentTypes['searchCoupons'][0])
    {
        return $this->searchCouponsAsyncWithHttpInfo($SearchCouponsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchCouponsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsRequest $SearchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCouponsAsyncWithHttpInfo($SearchCouponsRequest, string $contentType = self::contentTypes['searchCoupons'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsResponse';
        $request = $this->searchCouponsRequest($SearchCouponsRequest, $contentType);

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
     * Create request for operation 'searchCoupons'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchCouponsRequest $SearchCouponsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCoupons'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchCouponsRequest($SearchCouponsRequest, string $contentType = self::contentTypes['searchCoupons'][0])
    {

        // verify the required parameter 'SearchCouponsRequest' is set
        if ($SearchCouponsRequest === null || (is_array($SearchCouponsRequest) && count($SearchCouponsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SearchCouponsRequest when calling searchCoupons'
            );
        }


        $resourcePath = '/CustomerBilling/v13/Coupons/Search';
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
            $SearchCouponsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsearchCoupons',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation searchInsertionOrders
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersRequest $SearchInsertionOrdersRequest SearchInsertionOrdersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchInsertionOrders'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function searchInsertionOrders($SearchInsertionOrdersRequest, string $contentType = self::contentTypes['searchInsertionOrders'][0])
    {
        list($response) = $this->searchInsertionOrdersWithHttpInfo($SearchInsertionOrdersRequest, $contentType);
        return $response;
    }

    /**
     * Operation searchInsertionOrdersWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersRequest $SearchInsertionOrdersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchInsertionOrders'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchInsertionOrdersWithHttpInfo($SearchInsertionOrdersRequest, string $contentType = self::contentTypes['searchInsertionOrders'][0])
    {
        $request = $this->searchInsertionOrdersRequest($SearchInsertionOrdersRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchInsertionOrdersAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersRequest $SearchInsertionOrdersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchInsertionOrders'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchInsertionOrdersAsync($SearchInsertionOrdersRequest, string $contentType = self::contentTypes['searchInsertionOrders'][0])
    {
        return $this->searchInsertionOrdersAsyncWithHttpInfo($SearchInsertionOrdersRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchInsertionOrdersAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersRequest $SearchInsertionOrdersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchInsertionOrders'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchInsertionOrdersAsyncWithHttpInfo($SearchInsertionOrdersRequest, string $contentType = self::contentTypes['searchInsertionOrders'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersResponse';
        $request = $this->searchInsertionOrdersRequest($SearchInsertionOrdersRequest, $contentType);

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
     * Create request for operation 'searchInsertionOrders'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\SearchInsertionOrdersRequest $SearchInsertionOrdersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchInsertionOrders'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchInsertionOrdersRequest($SearchInsertionOrdersRequest, string $contentType = self::contentTypes['searchInsertionOrders'][0])
    {

        // verify the required parameter 'SearchInsertionOrdersRequest' is set
        if ($SearchInsertionOrdersRequest === null || (is_array($SearchInsertionOrdersRequest) && count($SearchInsertionOrdersRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SearchInsertionOrdersRequest when calling searchInsertionOrders'
            );
        }


        $resourcePath = '/CustomerBilling/v13/InsertionOrders/Search';
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
            $SearchInsertionOrdersRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsearchInsertionOrders',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updateInsertionOrder
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderRequest $UpdateInsertionOrderRequest UpdateInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInsertionOrder'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault
     */
    public function updateInsertionOrder($UpdateInsertionOrderRequest, string $contentType = self::contentTypes['updateInsertionOrder'][0])
    {
        list($response) = $this->updateInsertionOrderWithHttpInfo($UpdateInsertionOrderRequest, $contentType);
        return $response;
    }

    /**
     * Operation updateInsertionOrderWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderRequest $UpdateInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInsertionOrder'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderResponse|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInsertionOrderWithHttpInfo($UpdateInsertionOrderRequest, string $contentType = self::contentTypes['updateInsertionOrder'][0])
    {
        $request = $this->updateInsertionOrderRequest($UpdateInsertionOrderRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerBillingService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateInsertionOrderAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderRequest $UpdateInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInsertionOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInsertionOrderAsync($UpdateInsertionOrderRequest, string $contentType = self::contentTypes['updateInsertionOrder'][0])
    {
        return $this->updateInsertionOrderAsyncWithHttpInfo($UpdateInsertionOrderRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateInsertionOrderAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderRequest $UpdateInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInsertionOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInsertionOrderAsyncWithHttpInfo($UpdateInsertionOrderRequest, string $contentType = self::contentTypes['updateInsertionOrder'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderResponse';
        $request = $this->updateInsertionOrderRequest($UpdateInsertionOrderRequest, $contentType);

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
     * Create request for operation 'updateInsertionOrder'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerBillingService\UpdateInsertionOrderRequest $UpdateInsertionOrderRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInsertionOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateInsertionOrderRequest($UpdateInsertionOrderRequest, string $contentType = self::contentTypes['updateInsertionOrder'][0])
    {

        // verify the required parameter 'UpdateInsertionOrderRequest' is set
        if ($UpdateInsertionOrderRequest === null || (is_array($UpdateInsertionOrderRequest) && count($UpdateInsertionOrderRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdateInsertionOrderRequest when calling updateInsertionOrder'
            );
        }


        $resourcePath = '/CustomerBilling/v13/InsertionOrder';
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
            'PUT',
            $resourcePath,
            $headers,
            $headerParams,
            $UpdateInsertionOrderRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdateInsertionOrder',
            null,
            [],
            $queryParams
        );
    }

}
