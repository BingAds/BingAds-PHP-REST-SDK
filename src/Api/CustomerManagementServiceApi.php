<?php
/**
 * CustomerManagementServiceApi
 * CustomerManagementService
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

class CustomerManagementServiceApi extends AbstractServiceApi
{
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'addAccount' => [
            'application/json',
        ],
        'addClientLinks' => [
            'application/json',
        ],
        'addPrepayAccount' => [
            'application/json',
        ],
        'deleteAccount' => [
            'application/json',
        ],
        'deleteCustomer' => [
            'application/json',
        ],
        'deleteUser' => [
            'application/json',
        ],
        'dismissNotifications' => [
            'application/json',
        ],
        'findAccounts' => [
            'application/json',
        ],
        'findAccountsOrCustomersInfo' => [
            'application/json',
        ],
        'getAccessibleCustomer' => [
            'application/json',
        ],
        'getAccount' => [
            'application/json',
        ],
        'getAccountPilotFeatures' => [
            'application/json',
        ],
        'getAccountsInfo' => [
            'application/json',
        ],
        'getCurrentUser' => [
            'application/json',
        ],
        'getCustomer' => [
            'application/json',
        ],
        'getCustomerPilotFeatures' => [
            'application/json',
        ],
        'getCustomersInfo' => [
            'application/json',
        ],
        'getLinkedAccountsAndCustomersInfo' => [
            'application/json',
        ],
        'getNotifications' => [
            'application/json',
        ],
        'getPilotFeaturesCountries' => [
            'application/json',
        ],
        'getUser' => [
            'application/json',
        ],
        'getUserMFAStatus' => [
            'application/json',
        ],
        'getUsersInfo' => [
            'application/json',
        ],
        'mapAccountIdToExternalAccountIds' => [
            'application/json',
        ],
        'mapCustomerIdToExternalCustomerId' => [
            'application/json',
        ],
        'searchAccounts' => [
            'application/json',
        ],
        'searchClientLinks' => [
            'application/json',
        ],
        'searchCustomers' => [
            'application/json',
        ],
        'searchUserInvitations' => [
            'application/json',
        ],
        'sendUserInvitation' => [
            'application/json',
        ],
        'signupCustomer' => [
            'application/json',
        ],
        'updateAccount' => [
            'application/json',
        ],
        'updateClientLinks' => [
            'application/json',
        ],
        'updateCustomer' => [
            'application/json',
        ],
        'updatePrepayAccount' => [
            'application/json',
        ],
        'updateUser' => [
            'application/json',
        ],
        'updateUserRoles' => [
            'application/json',
        ],
        'upgradeCustomerToAgency' => [
            'application/json',
        ],
        'validateAddress' => [
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
        $this->hostIndex = 'CustomerManagementService';
    }

    /**
     * Operation addAccount
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountRequest $AddAccountRequest AddAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function addAccount($AddAccountRequest, string $contentType = self::contentTypes['addAccount'][0])
    {
        list($response) = $this->addAccountWithHttpInfo($AddAccountRequest, $contentType);
        return $response;
    }

    /**
     * Operation addAccountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountRequest $AddAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function addAccountWithHttpInfo($AddAccountRequest, string $contentType = self::contentTypes['addAccount'][0])
    {
        $request = $this->addAccountRequest($AddAccountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addAccountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountRequest $AddAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAccountAsync($AddAccountRequest, string $contentType = self::contentTypes['addAccount'][0])
    {
        return $this->addAccountAsyncWithHttpInfo($AddAccountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addAccountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountRequest $AddAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAccountAsyncWithHttpInfo($AddAccountRequest, string $contentType = self::contentTypes['addAccount'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountResponse';
        $request = $this->addAccountRequest($AddAccountRequest, $contentType);

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
     * Create request for operation 'addAccount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddAccountRequest $AddAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addAccountRequest($AddAccountRequest, string $contentType = self::contentTypes['addAccount'][0])
    {

        // verify the required parameter 'AddAccountRequest' is set
        if ($AddAccountRequest === null || (is_array($AddAccountRequest) && count($AddAccountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $AddAccountRequest when calling addAccount'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Account';
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
            $AddAccountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForaddAccount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation addClientLinks
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksRequest $AddClientLinksRequest AddClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addClientLinks'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function addClientLinks($AddClientLinksRequest, string $contentType = self::contentTypes['addClientLinks'][0])
    {
        list($response) = $this->addClientLinksWithHttpInfo($AddClientLinksRequest, $contentType);
        return $response;
    }

    /**
     * Operation addClientLinksWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksRequest $AddClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addClientLinks'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function addClientLinksWithHttpInfo($AddClientLinksRequest, string $contentType = self::contentTypes['addClientLinks'][0])
    {
        $request = $this->addClientLinksRequest($AddClientLinksRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addClientLinksAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksRequest $AddClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addClientLinksAsync($AddClientLinksRequest, string $contentType = self::contentTypes['addClientLinks'][0])
    {
        return $this->addClientLinksAsyncWithHttpInfo($AddClientLinksRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addClientLinksAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksRequest $AddClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addClientLinksAsyncWithHttpInfo($AddClientLinksRequest, string $contentType = self::contentTypes['addClientLinks'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksResponse';
        $request = $this->addClientLinksRequest($AddClientLinksRequest, $contentType);

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
     * Create request for operation 'addClientLinks'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddClientLinksRequest $AddClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addClientLinksRequest($AddClientLinksRequest, string $contentType = self::contentTypes['addClientLinks'][0])
    {

        // verify the required parameter 'AddClientLinksRequest' is set
        if ($AddClientLinksRequest === null || (is_array($AddClientLinksRequest) && count($AddClientLinksRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $AddClientLinksRequest when calling addClientLinks'
            );
        }


        $resourcePath = '/CustomerManagement/v13/ClientLinks';
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
            $AddClientLinksRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForaddClientLinks',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation addPrepayAccount
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountRequest $AddPrepayAccountRequest AddPrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addPrepayAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function addPrepayAccount($AddPrepayAccountRequest, string $contentType = self::contentTypes['addPrepayAccount'][0])
    {
        list($response) = $this->addPrepayAccountWithHttpInfo($AddPrepayAccountRequest, $contentType);
        return $response;
    }

    /**
     * Operation addPrepayAccountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountRequest $AddPrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addPrepayAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function addPrepayAccountWithHttpInfo($AddPrepayAccountRequest, string $contentType = self::contentTypes['addPrepayAccount'][0])
    {
        $request = $this->addPrepayAccountRequest($AddPrepayAccountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addPrepayAccountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountRequest $AddPrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addPrepayAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPrepayAccountAsync($AddPrepayAccountRequest, string $contentType = self::contentTypes['addPrepayAccount'][0])
    {
        return $this->addPrepayAccountAsyncWithHttpInfo($AddPrepayAccountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addPrepayAccountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountRequest $AddPrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addPrepayAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPrepayAccountAsyncWithHttpInfo($AddPrepayAccountRequest, string $contentType = self::contentTypes['addPrepayAccount'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountResponse';
        $request = $this->addPrepayAccountRequest($AddPrepayAccountRequest, $contentType);

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
     * Create request for operation 'addPrepayAccount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\AddPrepayAccountRequest $AddPrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addPrepayAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addPrepayAccountRequest($AddPrepayAccountRequest, string $contentType = self::contentTypes['addPrepayAccount'][0])
    {

        // verify the required parameter 'AddPrepayAccountRequest' is set
        if ($AddPrepayAccountRequest === null || (is_array($AddPrepayAccountRequest) && count($AddPrepayAccountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $AddPrepayAccountRequest when calling addPrepayAccount'
            );
        }


        $resourcePath = '/CustomerManagement/v13/PrepayAccount';
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
            $AddPrepayAccountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForaddPrepayAccount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation deleteAccount
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteAccountRequest $DeleteAccountRequest DeleteAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function deleteAccount($DeleteAccountRequest, string $contentType = self::contentTypes['deleteAccount'][0])
    {
        list($response) = $this->deleteAccountWithHttpInfo($DeleteAccountRequest, $contentType);
        return $response;
    }

    /**
     * Operation deleteAccountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteAccountRequest $DeleteAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAccountWithHttpInfo($DeleteAccountRequest, string $contentType = self::contentTypes['deleteAccount'][0])
    {
        $request = $this->deleteAccountRequest($DeleteAccountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteAccountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteAccountRequest $DeleteAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAccountAsync($DeleteAccountRequest, string $contentType = self::contentTypes['deleteAccount'][0])
    {
        return $this->deleteAccountAsyncWithHttpInfo($DeleteAccountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAccountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteAccountRequest $DeleteAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAccountAsyncWithHttpInfo($DeleteAccountRequest, string $contentType = self::contentTypes['deleteAccount'][0])
    {
        $returnType = 'object';
        $request = $this->deleteAccountRequest($DeleteAccountRequest, $contentType);

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
     * Create request for operation 'deleteAccount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteAccountRequest $DeleteAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteAccountRequest($DeleteAccountRequest, string $contentType = self::contentTypes['deleteAccount'][0])
    {

        // verify the required parameter 'DeleteAccountRequest' is set
        if ($DeleteAccountRequest === null || (is_array($DeleteAccountRequest) && count($DeleteAccountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DeleteAccountRequest when calling deleteAccount'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Account';
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
            'DELETE',
            $resourcePath,
            $headers,
            $headerParams,
            $DeleteAccountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordeleteAccount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation deleteCustomer
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteCustomerRequest $DeleteCustomerRequest DeleteCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function deleteCustomer($DeleteCustomerRequest, string $contentType = self::contentTypes['deleteCustomer'][0])
    {
        list($response) = $this->deleteCustomerWithHttpInfo($DeleteCustomerRequest, $contentType);
        return $response;
    }

    /**
     * Operation deleteCustomerWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteCustomerRequest $DeleteCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomerWithHttpInfo($DeleteCustomerRequest, string $contentType = self::contentTypes['deleteCustomer'][0])
    {
        $request = $this->deleteCustomerRequest($DeleteCustomerRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteCustomerAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteCustomerRequest $DeleteCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCustomerAsync($DeleteCustomerRequest, string $contentType = self::contentTypes['deleteCustomer'][0])
    {
        return $this->deleteCustomerAsyncWithHttpInfo($DeleteCustomerRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteCustomerAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteCustomerRequest $DeleteCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCustomerAsyncWithHttpInfo($DeleteCustomerRequest, string $contentType = self::contentTypes['deleteCustomer'][0])
    {
        $returnType = 'object';
        $request = $this->deleteCustomerRequest($DeleteCustomerRequest, $contentType);

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
     * Create request for operation 'deleteCustomer'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteCustomerRequest $DeleteCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteCustomerRequest($DeleteCustomerRequest, string $contentType = self::contentTypes['deleteCustomer'][0])
    {

        // verify the required parameter 'DeleteCustomerRequest' is set
        if ($DeleteCustomerRequest === null || (is_array($DeleteCustomerRequest) && count($DeleteCustomerRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DeleteCustomerRequest when calling deleteCustomer'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Customer';
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
            'DELETE',
            $resourcePath,
            $headers,
            $headerParams,
            $DeleteCustomerRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordeleteCustomer',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation deleteUser
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteUserRequest $DeleteUserRequest DeleteUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function deleteUser($DeleteUserRequest, string $contentType = self::contentTypes['deleteUser'][0])
    {
        list($response) = $this->deleteUserWithHttpInfo($DeleteUserRequest, $contentType);
        return $response;
    }

    /**
     * Operation deleteUserWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteUserRequest $DeleteUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserWithHttpInfo($DeleteUserRequest, string $contentType = self::contentTypes['deleteUser'][0])
    {
        $request = $this->deleteUserRequest($DeleteUserRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteUserAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteUserRequest $DeleteUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteUserAsync($DeleteUserRequest, string $contentType = self::contentTypes['deleteUser'][0])
    {
        return $this->deleteUserAsyncWithHttpInfo($DeleteUserRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUserAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteUserRequest $DeleteUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteUserAsyncWithHttpInfo($DeleteUserRequest, string $contentType = self::contentTypes['deleteUser'][0])
    {
        $returnType = 'object';
        $request = $this->deleteUserRequest($DeleteUserRequest, $contentType);

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
     * Create request for operation 'deleteUser'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DeleteUserRequest $DeleteUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteUserRequest($DeleteUserRequest, string $contentType = self::contentTypes['deleteUser'][0])
    {

        // verify the required parameter 'DeleteUserRequest' is set
        if ($DeleteUserRequest === null || (is_array($DeleteUserRequest) && count($DeleteUserRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DeleteUserRequest when calling deleteUser'
            );
        }


        $resourcePath = '/CustomerManagement/v13/User';
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
            'DELETE',
            $resourcePath,
            $headers,
            $headerParams,
            $DeleteUserRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordeleteUser',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation dismissNotifications
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DismissNotificationsRequest $DismissNotificationsRequest DismissNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissNotifications'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function dismissNotifications($DismissNotificationsRequest, string $contentType = self::contentTypes['dismissNotifications'][0])
    {
        list($response) = $this->dismissNotificationsWithHttpInfo($DismissNotificationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation dismissNotificationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DismissNotificationsRequest $DismissNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissNotifications'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function dismissNotificationsWithHttpInfo($DismissNotificationsRequest, string $contentType = self::contentTypes['dismissNotifications'][0])
    {
        $request = $this->dismissNotificationsRequest($DismissNotificationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation dismissNotificationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DismissNotificationsRequest $DismissNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dismissNotificationsAsync($DismissNotificationsRequest, string $contentType = self::contentTypes['dismissNotifications'][0])
    {
        return $this->dismissNotificationsAsyncWithHttpInfo($DismissNotificationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dismissNotificationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DismissNotificationsRequest $DismissNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dismissNotificationsAsyncWithHttpInfo($DismissNotificationsRequest, string $contentType = self::contentTypes['dismissNotifications'][0])
    {
        $returnType = 'object';
        $request = $this->dismissNotificationsRequest($DismissNotificationsRequest, $contentType);

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
     * Create request for operation 'dismissNotifications'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\DismissNotificationsRequest $DismissNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['dismissNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function dismissNotificationsRequest($DismissNotificationsRequest, string $contentType = self::contentTypes['dismissNotifications'][0])
    {

        // verify the required parameter 'DismissNotificationsRequest' is set
        if ($DismissNotificationsRequest === null || (is_array($DismissNotificationsRequest) && count($DismissNotificationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $DismissNotificationsRequest when calling dismissNotifications'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Notifications/Dismiss';
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
            $DismissNotificationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFordismissNotifications',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation findAccounts
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsRequest $FindAccountsRequest FindAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccounts'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function findAccounts($FindAccountsRequest, string $contentType = self::contentTypes['findAccounts'][0])
    {
        list($response) = $this->findAccountsWithHttpInfo($FindAccountsRequest, $contentType);
        return $response;
    }

    /**
     * Operation findAccountsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsRequest $FindAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccounts'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function findAccountsWithHttpInfo($FindAccountsRequest, string $contentType = self::contentTypes['findAccounts'][0])
    {
        $request = $this->findAccountsRequest($FindAccountsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findAccountsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsRequest $FindAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAccountsAsync($FindAccountsRequest, string $contentType = self::contentTypes['findAccounts'][0])
    {
        return $this->findAccountsAsyncWithHttpInfo($FindAccountsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findAccountsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsRequest $FindAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAccountsAsyncWithHttpInfo($FindAccountsRequest, string $contentType = self::contentTypes['findAccounts'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsResponse';
        $request = $this->findAccountsRequest($FindAccountsRequest, $contentType);

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
     * Create request for operation 'findAccounts'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsRequest $FindAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findAccountsRequest($FindAccountsRequest, string $contentType = self::contentTypes['findAccounts'][0])
    {

        // verify the required parameter 'FindAccountsRequest' is set
        if ($FindAccountsRequest === null || (is_array($FindAccountsRequest) && count($FindAccountsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $FindAccountsRequest when calling findAccounts'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Accounts/Find';
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
            $FindAccountsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForfindAccounts',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation findAccountsOrCustomersInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoRequest $FindAccountsOrCustomersInfoRequest FindAccountsOrCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccountsOrCustomersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function findAccountsOrCustomersInfo($FindAccountsOrCustomersInfoRequest, string $contentType = self::contentTypes['findAccountsOrCustomersInfo'][0])
    {
        list($response) = $this->findAccountsOrCustomersInfoWithHttpInfo($FindAccountsOrCustomersInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation findAccountsOrCustomersInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoRequest $FindAccountsOrCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccountsOrCustomersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function findAccountsOrCustomersInfoWithHttpInfo($FindAccountsOrCustomersInfoRequest, string $contentType = self::contentTypes['findAccountsOrCustomersInfo'][0])
    {
        $request = $this->findAccountsOrCustomersInfoRequest($FindAccountsOrCustomersInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findAccountsOrCustomersInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoRequest $FindAccountsOrCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccountsOrCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAccountsOrCustomersInfoAsync($FindAccountsOrCustomersInfoRequest, string $contentType = self::contentTypes['findAccountsOrCustomersInfo'][0])
    {
        return $this->findAccountsOrCustomersInfoAsyncWithHttpInfo($FindAccountsOrCustomersInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findAccountsOrCustomersInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoRequest $FindAccountsOrCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccountsOrCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAccountsOrCustomersInfoAsyncWithHttpInfo($FindAccountsOrCustomersInfoRequest, string $contentType = self::contentTypes['findAccountsOrCustomersInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoResponse';
        $request = $this->findAccountsOrCustomersInfoRequest($FindAccountsOrCustomersInfoRequest, $contentType);

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
     * Create request for operation 'findAccountsOrCustomersInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\FindAccountsOrCustomersInfoRequest $FindAccountsOrCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAccountsOrCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findAccountsOrCustomersInfoRequest($FindAccountsOrCustomersInfoRequest, string $contentType = self::contentTypes['findAccountsOrCustomersInfo'][0])
    {

        // verify the required parameter 'FindAccountsOrCustomersInfoRequest' is set
        if ($FindAccountsOrCustomersInfoRequest === null || (is_array($FindAccountsOrCustomersInfoRequest) && count($FindAccountsOrCustomersInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $FindAccountsOrCustomersInfoRequest when calling findAccountsOrCustomersInfo'
            );
        }


        $resourcePath = '/CustomerManagement/v13/AccountsOrCustomersInfo/Find';
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
            $FindAccountsOrCustomersInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForfindAccountsOrCustomersInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAccessibleCustomer
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerRequest $GetAccessibleCustomerRequest GetAccessibleCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccessibleCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getAccessibleCustomer($GetAccessibleCustomerRequest, string $contentType = self::contentTypes['getAccessibleCustomer'][0])
    {
        list($response) = $this->getAccessibleCustomerWithHttpInfo($GetAccessibleCustomerRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAccessibleCustomerWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerRequest $GetAccessibleCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccessibleCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccessibleCustomerWithHttpInfo($GetAccessibleCustomerRequest, string $contentType = self::contentTypes['getAccessibleCustomer'][0])
    {
        $request = $this->getAccessibleCustomerRequest($GetAccessibleCustomerRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccessibleCustomerAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerRequest $GetAccessibleCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccessibleCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccessibleCustomerAsync($GetAccessibleCustomerRequest, string $contentType = self::contentTypes['getAccessibleCustomer'][0])
    {
        return $this->getAccessibleCustomerAsyncWithHttpInfo($GetAccessibleCustomerRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccessibleCustomerAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerRequest $GetAccessibleCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccessibleCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccessibleCustomerAsyncWithHttpInfo($GetAccessibleCustomerRequest, string $contentType = self::contentTypes['getAccessibleCustomer'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerResponse';
        $request = $this->getAccessibleCustomerRequest($GetAccessibleCustomerRequest, $contentType);

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
     * Create request for operation 'getAccessibleCustomer'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccessibleCustomerRequest $GetAccessibleCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccessibleCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAccessibleCustomerRequest($GetAccessibleCustomerRequest, string $contentType = self::contentTypes['getAccessibleCustomer'][0])
    {

        // verify the required parameter 'GetAccessibleCustomerRequest' is set
        if ($GetAccessibleCustomerRequest === null || (is_array($GetAccessibleCustomerRequest) && count($GetAccessibleCustomerRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAccessibleCustomerRequest when calling getAccessibleCustomer'
            );
        }


        $resourcePath = '/CustomerManagement/v13/AccessibleCustomer/Query';
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
            $GetAccessibleCustomerRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAccessibleCustomer',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAccount
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountRequest $GetAccountRequest GetAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getAccount($GetAccountRequest, string $contentType = self::contentTypes['getAccount'][0])
    {
        list($response) = $this->getAccountWithHttpInfo($GetAccountRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAccountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountRequest $GetAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountWithHttpInfo($GetAccountRequest, string $contentType = self::contentTypes['getAccount'][0])
    {
        $request = $this->getAccountRequest($GetAccountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountRequest $GetAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountAsync($GetAccountRequest, string $contentType = self::contentTypes['getAccount'][0])
    {
        return $this->getAccountAsyncWithHttpInfo($GetAccountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountRequest $GetAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountAsyncWithHttpInfo($GetAccountRequest, string $contentType = self::contentTypes['getAccount'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountResponse';
        $request = $this->getAccountRequest($GetAccountRequest, $contentType);

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
     * Create request for operation 'getAccount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountRequest $GetAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAccountRequest($GetAccountRequest, string $contentType = self::contentTypes['getAccount'][0])
    {

        // verify the required parameter 'GetAccountRequest' is set
        if ($GetAccountRequest === null || (is_array($GetAccountRequest) && count($GetAccountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAccountRequest when calling getAccount'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Account/Query';
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
            $GetAccountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAccount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAccountPilotFeatures
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesRequest $GetAccountPilotFeaturesRequest GetAccountPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountPilotFeatures'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getAccountPilotFeatures($GetAccountPilotFeaturesRequest, string $contentType = self::contentTypes['getAccountPilotFeatures'][0])
    {
        list($response) = $this->getAccountPilotFeaturesWithHttpInfo($GetAccountPilotFeaturesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAccountPilotFeaturesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesRequest $GetAccountPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountPilotFeatures'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountPilotFeaturesWithHttpInfo($GetAccountPilotFeaturesRequest, string $contentType = self::contentTypes['getAccountPilotFeatures'][0])
    {
        $request = $this->getAccountPilotFeaturesRequest($GetAccountPilotFeaturesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccountPilotFeaturesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesRequest $GetAccountPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountPilotFeatures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountPilotFeaturesAsync($GetAccountPilotFeaturesRequest, string $contentType = self::contentTypes['getAccountPilotFeatures'][0])
    {
        return $this->getAccountPilotFeaturesAsyncWithHttpInfo($GetAccountPilotFeaturesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccountPilotFeaturesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesRequest $GetAccountPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountPilotFeatures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountPilotFeaturesAsyncWithHttpInfo($GetAccountPilotFeaturesRequest, string $contentType = self::contentTypes['getAccountPilotFeatures'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesResponse';
        $request = $this->getAccountPilotFeaturesRequest($GetAccountPilotFeaturesRequest, $contentType);

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
     * Create request for operation 'getAccountPilotFeatures'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountPilotFeaturesRequest $GetAccountPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountPilotFeatures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAccountPilotFeaturesRequest($GetAccountPilotFeaturesRequest, string $contentType = self::contentTypes['getAccountPilotFeatures'][0])
    {

        // verify the required parameter 'GetAccountPilotFeaturesRequest' is set
        if ($GetAccountPilotFeaturesRequest === null || (is_array($GetAccountPilotFeaturesRequest) && count($GetAccountPilotFeaturesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAccountPilotFeaturesRequest when calling getAccountPilotFeatures'
            );
        }


        $resourcePath = '/CustomerManagement/v13/AccountPilotFeatures/Query';
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
            $GetAccountPilotFeaturesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAccountPilotFeatures',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getAccountsInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoRequest $GetAccountsInfoRequest GetAccountsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountsInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getAccountsInfo($GetAccountsInfoRequest, string $contentType = self::contentTypes['getAccountsInfo'][0])
    {
        list($response) = $this->getAccountsInfoWithHttpInfo($GetAccountsInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation getAccountsInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoRequest $GetAccountsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountsInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountsInfoWithHttpInfo($GetAccountsInfoRequest, string $contentType = self::contentTypes['getAccountsInfo'][0])
    {
        $request = $this->getAccountsInfoRequest($GetAccountsInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccountsInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoRequest $GetAccountsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountsInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountsInfoAsync($GetAccountsInfoRequest, string $contentType = self::contentTypes['getAccountsInfo'][0])
    {
        return $this->getAccountsInfoAsyncWithHttpInfo($GetAccountsInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccountsInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoRequest $GetAccountsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountsInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountsInfoAsyncWithHttpInfo($GetAccountsInfoRequest, string $contentType = self::contentTypes['getAccountsInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoResponse';
        $request = $this->getAccountsInfoRequest($GetAccountsInfoRequest, $contentType);

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
     * Create request for operation 'getAccountsInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetAccountsInfoRequest $GetAccountsInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAccountsInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAccountsInfoRequest($GetAccountsInfoRequest, string $contentType = self::contentTypes['getAccountsInfo'][0])
    {

        // verify the required parameter 'GetAccountsInfoRequest' is set
        if ($GetAccountsInfoRequest === null || (is_array($GetAccountsInfoRequest) && count($GetAccountsInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetAccountsInfoRequest when calling getAccountsInfo'
            );
        }


        $resourcePath = '/CustomerManagement/v13/AccountsInfo/Query';
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
            $GetAccountsInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetAccountsInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getCurrentUser
     *
     * @param  object $Body Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCurrentUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCurrentUserResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getCurrentUser($Body, string $contentType = self::contentTypes['getCurrentUser'][0])
    {
        list($response) = $this->getCurrentUserWithHttpInfo($Body, $contentType);
        return $response;
    }

    /**
     * Operation getCurrentUserWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCurrentUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCurrentUserResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCurrentUserWithHttpInfo($Body, string $contentType = self::contentTypes['getCurrentUser'][0])
    {
        $request = $this->getCurrentUserRequest($Body, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCurrentUserResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCurrentUserResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCurrentUserResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCurrentUserAsync
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCurrentUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrentUserAsync($Body, string $contentType = self::contentTypes['getCurrentUser'][0])
    {
        return $this->getCurrentUserAsyncWithHttpInfo($Body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCurrentUserAsyncWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCurrentUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrentUserAsyncWithHttpInfo($Body, string $contentType = self::contentTypes['getCurrentUser'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCurrentUserResponse';
        $request = $this->getCurrentUserRequest($Body, $contentType);

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
     * Create request for operation 'getCurrentUser'
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCurrentUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCurrentUserRequest($Body, string $contentType = self::contentTypes['getCurrentUser'][0])
    {

        // verify the required parameter 'Body' is set
        if ($Body === null || (is_array($Body) && count($Body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $Body when calling getCurrentUser'
            );
        }


        $resourcePath = '/CustomerManagement/v13/CurrentUser/Query';
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
            'getHostSettingsForgetCurrentUser',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getCustomer
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerRequest $GetCustomerRequest GetCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getCustomer($GetCustomerRequest, string $contentType = self::contentTypes['getCustomer'][0])
    {
        list($response) = $this->getCustomerWithHttpInfo($GetCustomerRequest, $contentType);
        return $response;
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerRequest $GetCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerWithHttpInfo($GetCustomerRequest, string $contentType = self::contentTypes['getCustomer'][0])
    {
        $request = $this->getCustomerRequest($GetCustomerRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerRequest $GetCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsync($GetCustomerRequest, string $contentType = self::contentTypes['getCustomer'][0])
    {
        return $this->getCustomerAsyncWithHttpInfo($GetCustomerRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerRequest $GetCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsyncWithHttpInfo($GetCustomerRequest, string $contentType = self::contentTypes['getCustomer'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerResponse';
        $request = $this->getCustomerRequest($GetCustomerRequest, $contentType);

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
     * Create request for operation 'getCustomer'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerRequest $GetCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomerRequest($GetCustomerRequest, string $contentType = self::contentTypes['getCustomer'][0])
    {

        // verify the required parameter 'GetCustomerRequest' is set
        if ($GetCustomerRequest === null || (is_array($GetCustomerRequest) && count($GetCustomerRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetCustomerRequest when calling getCustomer'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Customer/Query';
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
            $GetCustomerRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetCustomer',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getCustomerPilotFeatures
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesRequest $GetCustomerPilotFeaturesRequest GetCustomerPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerPilotFeatures'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getCustomerPilotFeatures($GetCustomerPilotFeaturesRequest, string $contentType = self::contentTypes['getCustomerPilotFeatures'][0])
    {
        list($response) = $this->getCustomerPilotFeaturesWithHttpInfo($GetCustomerPilotFeaturesRequest, $contentType);
        return $response;
    }

    /**
     * Operation getCustomerPilotFeaturesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesRequest $GetCustomerPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerPilotFeatures'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerPilotFeaturesWithHttpInfo($GetCustomerPilotFeaturesRequest, string $contentType = self::contentTypes['getCustomerPilotFeatures'][0])
    {
        $request = $this->getCustomerPilotFeaturesRequest($GetCustomerPilotFeaturesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerPilotFeaturesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesRequest $GetCustomerPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerPilotFeatures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerPilotFeaturesAsync($GetCustomerPilotFeaturesRequest, string $contentType = self::contentTypes['getCustomerPilotFeatures'][0])
    {
        return $this->getCustomerPilotFeaturesAsyncWithHttpInfo($GetCustomerPilotFeaturesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerPilotFeaturesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesRequest $GetCustomerPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerPilotFeatures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerPilotFeaturesAsyncWithHttpInfo($GetCustomerPilotFeaturesRequest, string $contentType = self::contentTypes['getCustomerPilotFeatures'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesResponse';
        $request = $this->getCustomerPilotFeaturesRequest($GetCustomerPilotFeaturesRequest, $contentType);

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
     * Create request for operation 'getCustomerPilotFeatures'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomerPilotFeaturesRequest $GetCustomerPilotFeaturesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerPilotFeatures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomerPilotFeaturesRequest($GetCustomerPilotFeaturesRequest, string $contentType = self::contentTypes['getCustomerPilotFeatures'][0])
    {

        // verify the required parameter 'GetCustomerPilotFeaturesRequest' is set
        if ($GetCustomerPilotFeaturesRequest === null || (is_array($GetCustomerPilotFeaturesRequest) && count($GetCustomerPilotFeaturesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetCustomerPilotFeaturesRequest when calling getCustomerPilotFeatures'
            );
        }


        $resourcePath = '/CustomerManagement/v13/CustomerPilotFeatures/Query';
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
            $GetCustomerPilotFeaturesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetCustomerPilotFeatures',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getCustomersInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoRequest $GetCustomersInfoRequest GetCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getCustomersInfo($GetCustomersInfoRequest, string $contentType = self::contentTypes['getCustomersInfo'][0])
    {
        list($response) = $this->getCustomersInfoWithHttpInfo($GetCustomersInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation getCustomersInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoRequest $GetCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersInfoWithHttpInfo($GetCustomersInfoRequest, string $contentType = self::contentTypes['getCustomersInfo'][0])
    {
        $request = $this->getCustomersInfoRequest($GetCustomersInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomersInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoRequest $GetCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomersInfoAsync($GetCustomersInfoRequest, string $contentType = self::contentTypes['getCustomersInfo'][0])
    {
        return $this->getCustomersInfoAsyncWithHttpInfo($GetCustomersInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomersInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoRequest $GetCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomersInfoAsyncWithHttpInfo($GetCustomersInfoRequest, string $contentType = self::contentTypes['getCustomersInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoResponse';
        $request = $this->getCustomersInfoRequest($GetCustomersInfoRequest, $contentType);

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
     * Create request for operation 'getCustomersInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetCustomersInfoRequest $GetCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomersInfoRequest($GetCustomersInfoRequest, string $contentType = self::contentTypes['getCustomersInfo'][0])
    {

        // verify the required parameter 'GetCustomersInfoRequest' is set
        if ($GetCustomersInfoRequest === null || (is_array($GetCustomersInfoRequest) && count($GetCustomersInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetCustomersInfoRequest when calling getCustomersInfo'
            );
        }


        $resourcePath = '/CustomerManagement/v13/CustomersInfo/Query';
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
            $GetCustomersInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetCustomersInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getLinkedAccountsAndCustomersInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoRequest $GetLinkedAccountsAndCustomersInfoRequest GetLinkedAccountsAndCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLinkedAccountsAndCustomersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getLinkedAccountsAndCustomersInfo($GetLinkedAccountsAndCustomersInfoRequest, string $contentType = self::contentTypes['getLinkedAccountsAndCustomersInfo'][0])
    {
        list($response) = $this->getLinkedAccountsAndCustomersInfoWithHttpInfo($GetLinkedAccountsAndCustomersInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation getLinkedAccountsAndCustomersInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoRequest $GetLinkedAccountsAndCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLinkedAccountsAndCustomersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLinkedAccountsAndCustomersInfoWithHttpInfo($GetLinkedAccountsAndCustomersInfoRequest, string $contentType = self::contentTypes['getLinkedAccountsAndCustomersInfo'][0])
    {
        $request = $this->getLinkedAccountsAndCustomersInfoRequest($GetLinkedAccountsAndCustomersInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLinkedAccountsAndCustomersInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoRequest $GetLinkedAccountsAndCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLinkedAccountsAndCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLinkedAccountsAndCustomersInfoAsync($GetLinkedAccountsAndCustomersInfoRequest, string $contentType = self::contentTypes['getLinkedAccountsAndCustomersInfo'][0])
    {
        return $this->getLinkedAccountsAndCustomersInfoAsyncWithHttpInfo($GetLinkedAccountsAndCustomersInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLinkedAccountsAndCustomersInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoRequest $GetLinkedAccountsAndCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLinkedAccountsAndCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLinkedAccountsAndCustomersInfoAsyncWithHttpInfo($GetLinkedAccountsAndCustomersInfoRequest, string $contentType = self::contentTypes['getLinkedAccountsAndCustomersInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoResponse';
        $request = $this->getLinkedAccountsAndCustomersInfoRequest($GetLinkedAccountsAndCustomersInfoRequest, $contentType);

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
     * Create request for operation 'getLinkedAccountsAndCustomersInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetLinkedAccountsAndCustomersInfoRequest $GetLinkedAccountsAndCustomersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLinkedAccountsAndCustomersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLinkedAccountsAndCustomersInfoRequest($GetLinkedAccountsAndCustomersInfoRequest, string $contentType = self::contentTypes['getLinkedAccountsAndCustomersInfo'][0])
    {

        // verify the required parameter 'GetLinkedAccountsAndCustomersInfoRequest' is set
        if ($GetLinkedAccountsAndCustomersInfoRequest === null || (is_array($GetLinkedAccountsAndCustomersInfoRequest) && count($GetLinkedAccountsAndCustomersInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetLinkedAccountsAndCustomersInfoRequest when calling getLinkedAccountsAndCustomersInfo'
            );
        }


        $resourcePath = '/CustomerManagement/v13/LinkedAccountsAndCustomersInfo/Query';
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
            $GetLinkedAccountsAndCustomersInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetLinkedAccountsAndCustomersInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getNotifications
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsRequest $GetNotificationsRequest GetNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNotifications'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getNotifications($GetNotificationsRequest, string $contentType = self::contentTypes['getNotifications'][0])
    {
        list($response) = $this->getNotificationsWithHttpInfo($GetNotificationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation getNotificationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsRequest $GetNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNotifications'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNotificationsWithHttpInfo($GetNotificationsRequest, string $contentType = self::contentTypes['getNotifications'][0])
    {
        $request = $this->getNotificationsRequest($GetNotificationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getNotificationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsRequest $GetNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNotificationsAsync($GetNotificationsRequest, string $contentType = self::contentTypes['getNotifications'][0])
    {
        return $this->getNotificationsAsyncWithHttpInfo($GetNotificationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNotificationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsRequest $GetNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNotificationsAsyncWithHttpInfo($GetNotificationsRequest, string $contentType = self::contentTypes['getNotifications'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsResponse';
        $request = $this->getNotificationsRequest($GetNotificationsRequest, $contentType);

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
     * Create request for operation 'getNotifications'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetNotificationsRequest $GetNotificationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getNotificationsRequest($GetNotificationsRequest, string $contentType = self::contentTypes['getNotifications'][0])
    {

        // verify the required parameter 'GetNotificationsRequest' is set
        if ($GetNotificationsRequest === null || (is_array($GetNotificationsRequest) && count($GetNotificationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetNotificationsRequest when calling getNotifications'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Notifications/Query';
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
            $GetNotificationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetNotifications',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getPilotFeaturesCountries
     *
     * @param  object $Body Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPilotFeaturesCountries'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetPilotFeaturesCountriesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getPilotFeaturesCountries($Body, string $contentType = self::contentTypes['getPilotFeaturesCountries'][0])
    {
        list($response) = $this->getPilotFeaturesCountriesWithHttpInfo($Body, $contentType);
        return $response;
    }

    /**
     * Operation getPilotFeaturesCountriesWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPilotFeaturesCountries'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetPilotFeaturesCountriesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPilotFeaturesCountriesWithHttpInfo($Body, string $contentType = self::contentTypes['getPilotFeaturesCountries'][0])
    {
        $request = $this->getPilotFeaturesCountriesRequest($Body, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetPilotFeaturesCountriesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetPilotFeaturesCountriesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetPilotFeaturesCountriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPilotFeaturesCountriesAsync
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPilotFeaturesCountries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPilotFeaturesCountriesAsync($Body, string $contentType = self::contentTypes['getPilotFeaturesCountries'][0])
    {
        return $this->getPilotFeaturesCountriesAsyncWithHttpInfo($Body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPilotFeaturesCountriesAsyncWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPilotFeaturesCountries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPilotFeaturesCountriesAsyncWithHttpInfo($Body, string $contentType = self::contentTypes['getPilotFeaturesCountries'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetPilotFeaturesCountriesResponse';
        $request = $this->getPilotFeaturesCountriesRequest($Body, $contentType);

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
     * Create request for operation 'getPilotFeaturesCountries'
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPilotFeaturesCountries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPilotFeaturesCountriesRequest($Body, string $contentType = self::contentTypes['getPilotFeaturesCountries'][0])
    {

        // verify the required parameter 'Body' is set
        if ($Body === null || (is_array($Body) && count($Body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $Body when calling getPilotFeaturesCountries'
            );
        }


        $resourcePath = '/CustomerManagement/v13/PilotFeaturesCountries/Query';
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
            'getHostSettingsForgetPilotFeaturesCountries',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getUser
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserRequest $GetUserRequest GetUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getUser($GetUserRequest, string $contentType = self::contentTypes['getUser'][0])
    {
        list($response) = $this->getUserWithHttpInfo($GetUserRequest, $contentType);
        return $response;
    }

    /**
     * Operation getUserWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserRequest $GetUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserWithHttpInfo($GetUserRequest, string $contentType = self::contentTypes['getUser'][0])
    {
        $request = $this->getUserRequest($GetUserRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUserAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserRequest $GetUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserAsync($GetUserRequest, string $contentType = self::contentTypes['getUser'][0])
    {
        return $this->getUserAsyncWithHttpInfo($GetUserRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserRequest $GetUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserAsyncWithHttpInfo($GetUserRequest, string $contentType = self::contentTypes['getUser'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse';
        $request = $this->getUserRequest($GetUserRequest, $contentType);

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
     * Create request for operation 'getUser'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserRequest $GetUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUserRequest($GetUserRequest, string $contentType = self::contentTypes['getUser'][0])
    {

        // verify the required parameter 'GetUserRequest' is set
        if ($GetUserRequest === null || (is_array($GetUserRequest) && count($GetUserRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetUserRequest when calling getUser'
            );
        }


        $resourcePath = '/CustomerManagement/v13/User/Query';
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
            $GetUserRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetUser',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getUserMFAStatus
     *
     * @param  object $Body Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserMFAStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserMFAStatusResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getUserMFAStatus($Body, string $contentType = self::contentTypes['getUserMFAStatus'][0])
    {
        list($response) = $this->getUserMFAStatusWithHttpInfo($Body, $contentType);
        return $response;
    }

    /**
     * Operation getUserMFAStatusWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserMFAStatus'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserMFAStatusResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserMFAStatusWithHttpInfo($Body, string $contentType = self::contentTypes['getUserMFAStatus'][0])
    {
        $request = $this->getUserMFAStatusRequest($Body, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserMFAStatusResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserMFAStatusResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserMFAStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUserMFAStatusAsync
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserMFAStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserMFAStatusAsync($Body, string $contentType = self::contentTypes['getUserMFAStatus'][0])
    {
        return $this->getUserMFAStatusAsyncWithHttpInfo($Body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserMFAStatusAsyncWithHttpInfo
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserMFAStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserMFAStatusAsyncWithHttpInfo($Body, string $contentType = self::contentTypes['getUserMFAStatus'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserMFAStatusResponse';
        $request = $this->getUserMFAStatusRequest($Body, $contentType);

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
     * Create request for operation 'getUserMFAStatus'
     *
     * @param  object $Body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserMFAStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUserMFAStatusRequest($Body, string $contentType = self::contentTypes['getUserMFAStatus'][0])
    {

        // verify the required parameter 'Body' is set
        if ($Body === null || (is_array($Body) && count($Body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $Body when calling getUserMFAStatus'
            );
        }


        $resourcePath = '/CustomerManagement/v13/UserMFAStatus/Query';
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
            'getHostSettingsForgetUserMFAStatus',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation getUsersInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoRequest $GetUsersInfoRequest GetUsersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function getUsersInfo($GetUsersInfoRequest, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        list($response) = $this->getUsersInfoWithHttpInfo($GetUsersInfoRequest, $contentType);
        return $response;
    }

    /**
     * Operation getUsersInfoWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoRequest $GetUsersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsersInfoWithHttpInfo($GetUsersInfoRequest, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        $request = $this->getUsersInfoRequest($GetUsersInfoRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsersInfoAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoRequest $GetUsersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsersInfoAsync($GetUsersInfoRequest, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        return $this->getUsersInfoAsyncWithHttpInfo($GetUsersInfoRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsersInfoAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoRequest $GetUsersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsersInfoAsyncWithHttpInfo($GetUsersInfoRequest, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoResponse';
        $request = $this->getUsersInfoRequest($GetUsersInfoRequest, $contentType);

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
     * Create request for operation 'getUsersInfo'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUsersInfoRequest $GetUsersInfoRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUsersInfoRequest($GetUsersInfoRequest, string $contentType = self::contentTypes['getUsersInfo'][0])
    {

        // verify the required parameter 'GetUsersInfoRequest' is set
        if ($GetUsersInfoRequest === null || (is_array($GetUsersInfoRequest) && count($GetUsersInfoRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $GetUsersInfoRequest when calling getUsersInfo'
            );
        }


        $resourcePath = '/CustomerManagement/v13/UsersInfo/Query';
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
            $GetUsersInfoRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForgetUsersInfo',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation mapAccountIdToExternalAccountIds
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapAccountIdToExternalAccountIdsRequest $MapAccountIdToExternalAccountIdsRequest MapAccountIdToExternalAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapAccountIdToExternalAccountIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function mapAccountIdToExternalAccountIds($MapAccountIdToExternalAccountIdsRequest, string $contentType = self::contentTypes['mapAccountIdToExternalAccountIds'][0])
    {
        list($response) = $this->mapAccountIdToExternalAccountIdsWithHttpInfo($MapAccountIdToExternalAccountIdsRequest, $contentType);
        return $response;
    }

    /**
     * Operation mapAccountIdToExternalAccountIdsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapAccountIdToExternalAccountIdsRequest $MapAccountIdToExternalAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapAccountIdToExternalAccountIds'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapAccountIdToExternalAccountIdsWithHttpInfo($MapAccountIdToExternalAccountIdsRequest, string $contentType = self::contentTypes['mapAccountIdToExternalAccountIds'][0])
    {
        $request = $this->mapAccountIdToExternalAccountIdsRequest($MapAccountIdToExternalAccountIdsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation mapAccountIdToExternalAccountIdsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapAccountIdToExternalAccountIdsRequest $MapAccountIdToExternalAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapAccountIdToExternalAccountIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapAccountIdToExternalAccountIdsAsync($MapAccountIdToExternalAccountIdsRequest, string $contentType = self::contentTypes['mapAccountIdToExternalAccountIds'][0])
    {
        return $this->mapAccountIdToExternalAccountIdsAsyncWithHttpInfo($MapAccountIdToExternalAccountIdsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapAccountIdToExternalAccountIdsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapAccountIdToExternalAccountIdsRequest $MapAccountIdToExternalAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapAccountIdToExternalAccountIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapAccountIdToExternalAccountIdsAsyncWithHttpInfo($MapAccountIdToExternalAccountIdsRequest, string $contentType = self::contentTypes['mapAccountIdToExternalAccountIds'][0])
    {
        $returnType = 'object';
        $request = $this->mapAccountIdToExternalAccountIdsRequest($MapAccountIdToExternalAccountIdsRequest, $contentType);

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
     * Create request for operation 'mapAccountIdToExternalAccountIds'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapAccountIdToExternalAccountIdsRequest $MapAccountIdToExternalAccountIdsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapAccountIdToExternalAccountIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function mapAccountIdToExternalAccountIdsRequest($MapAccountIdToExternalAccountIdsRequest, string $contentType = self::contentTypes['mapAccountIdToExternalAccountIds'][0])
    {

        // verify the required parameter 'MapAccountIdToExternalAccountIdsRequest' is set
        if ($MapAccountIdToExternalAccountIdsRequest === null || (is_array($MapAccountIdToExternalAccountIdsRequest) && count($MapAccountIdToExternalAccountIdsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $MapAccountIdToExternalAccountIdsRequest when calling mapAccountIdToExternalAccountIds'
            );
        }


        $resourcePath = '/CustomerManagement/v13/AccountId/MapToExternalAccountIds';
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
            $MapAccountIdToExternalAccountIdsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFormapAccountIdToExternalAccountIds',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation mapCustomerIdToExternalCustomerId
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapCustomerIdToExternalCustomerIdRequest $MapCustomerIdToExternalCustomerIdRequest MapCustomerIdToExternalCustomerIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapCustomerIdToExternalCustomerId'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function mapCustomerIdToExternalCustomerId($MapCustomerIdToExternalCustomerIdRequest, string $contentType = self::contentTypes['mapCustomerIdToExternalCustomerId'][0])
    {
        list($response) = $this->mapCustomerIdToExternalCustomerIdWithHttpInfo($MapCustomerIdToExternalCustomerIdRequest, $contentType);
        return $response;
    }

    /**
     * Operation mapCustomerIdToExternalCustomerIdWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapCustomerIdToExternalCustomerIdRequest $MapCustomerIdToExternalCustomerIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapCustomerIdToExternalCustomerId'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapCustomerIdToExternalCustomerIdWithHttpInfo($MapCustomerIdToExternalCustomerIdRequest, string $contentType = self::contentTypes['mapCustomerIdToExternalCustomerId'][0])
    {
        $request = $this->mapCustomerIdToExternalCustomerIdRequest($MapCustomerIdToExternalCustomerIdRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation mapCustomerIdToExternalCustomerIdAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapCustomerIdToExternalCustomerIdRequest $MapCustomerIdToExternalCustomerIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapCustomerIdToExternalCustomerId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapCustomerIdToExternalCustomerIdAsync($MapCustomerIdToExternalCustomerIdRequest, string $contentType = self::contentTypes['mapCustomerIdToExternalCustomerId'][0])
    {
        return $this->mapCustomerIdToExternalCustomerIdAsyncWithHttpInfo($MapCustomerIdToExternalCustomerIdRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapCustomerIdToExternalCustomerIdAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapCustomerIdToExternalCustomerIdRequest $MapCustomerIdToExternalCustomerIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapCustomerIdToExternalCustomerId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapCustomerIdToExternalCustomerIdAsyncWithHttpInfo($MapCustomerIdToExternalCustomerIdRequest, string $contentType = self::contentTypes['mapCustomerIdToExternalCustomerId'][0])
    {
        $returnType = 'object';
        $request = $this->mapCustomerIdToExternalCustomerIdRequest($MapCustomerIdToExternalCustomerIdRequest, $contentType);

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
     * Create request for operation 'mapCustomerIdToExternalCustomerId'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\MapCustomerIdToExternalCustomerIdRequest $MapCustomerIdToExternalCustomerIdRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mapCustomerIdToExternalCustomerId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function mapCustomerIdToExternalCustomerIdRequest($MapCustomerIdToExternalCustomerIdRequest, string $contentType = self::contentTypes['mapCustomerIdToExternalCustomerId'][0])
    {

        // verify the required parameter 'MapCustomerIdToExternalCustomerIdRequest' is set
        if ($MapCustomerIdToExternalCustomerIdRequest === null || (is_array($MapCustomerIdToExternalCustomerIdRequest) && count($MapCustomerIdToExternalCustomerIdRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $MapCustomerIdToExternalCustomerIdRequest when calling mapCustomerIdToExternalCustomerId'
            );
        }


        $resourcePath = '/CustomerManagement/v13/CustomerId/MapToExternalCustomerId';
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
            $MapCustomerIdToExternalCustomerIdRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsFormapCustomerIdToExternalCustomerId',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation searchAccounts
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsRequest $SearchAccountsRequest SearchAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAccounts'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function searchAccounts($SearchAccountsRequest, string $contentType = self::contentTypes['searchAccounts'][0])
    {
        list($response) = $this->searchAccountsWithHttpInfo($SearchAccountsRequest, $contentType);
        return $response;
    }

    /**
     * Operation searchAccountsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsRequest $SearchAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAccounts'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAccountsWithHttpInfo($SearchAccountsRequest, string $contentType = self::contentTypes['searchAccounts'][0])
    {
        $request = $this->searchAccountsRequest($SearchAccountsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchAccountsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsRequest $SearchAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAccountsAsync($SearchAccountsRequest, string $contentType = self::contentTypes['searchAccounts'][0])
    {
        return $this->searchAccountsAsyncWithHttpInfo($SearchAccountsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchAccountsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsRequest $SearchAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAccountsAsyncWithHttpInfo($SearchAccountsRequest, string $contentType = self::contentTypes['searchAccounts'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse';
        $request = $this->searchAccountsRequest($SearchAccountsRequest, $contentType);

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
     * Create request for operation 'searchAccounts'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsRequest $SearchAccountsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAccountsRequest($SearchAccountsRequest, string $contentType = self::contentTypes['searchAccounts'][0])
    {

        // verify the required parameter 'SearchAccountsRequest' is set
        if ($SearchAccountsRequest === null || (is_array($SearchAccountsRequest) && count($SearchAccountsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SearchAccountsRequest when calling searchAccounts'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Accounts/Search';
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
            $SearchAccountsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsearchAccounts',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation searchClientLinks
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksRequest $SearchClientLinksRequest SearchClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchClientLinks'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function searchClientLinks($SearchClientLinksRequest, string $contentType = self::contentTypes['searchClientLinks'][0])
    {
        list($response) = $this->searchClientLinksWithHttpInfo($SearchClientLinksRequest, $contentType);
        return $response;
    }

    /**
     * Operation searchClientLinksWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksRequest $SearchClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchClientLinks'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchClientLinksWithHttpInfo($SearchClientLinksRequest, string $contentType = self::contentTypes['searchClientLinks'][0])
    {
        $request = $this->searchClientLinksRequest($SearchClientLinksRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchClientLinksAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksRequest $SearchClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchClientLinksAsync($SearchClientLinksRequest, string $contentType = self::contentTypes['searchClientLinks'][0])
    {
        return $this->searchClientLinksAsyncWithHttpInfo($SearchClientLinksRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchClientLinksAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksRequest $SearchClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchClientLinksAsyncWithHttpInfo($SearchClientLinksRequest, string $contentType = self::contentTypes['searchClientLinks'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksResponse';
        $request = $this->searchClientLinksRequest($SearchClientLinksRequest, $contentType);

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
     * Create request for operation 'searchClientLinks'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchClientLinksRequest $SearchClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchClientLinksRequest($SearchClientLinksRequest, string $contentType = self::contentTypes['searchClientLinks'][0])
    {

        // verify the required parameter 'SearchClientLinksRequest' is set
        if ($SearchClientLinksRequest === null || (is_array($SearchClientLinksRequest) && count($SearchClientLinksRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SearchClientLinksRequest when calling searchClientLinks'
            );
        }


        $resourcePath = '/CustomerManagement/v13/ClientLinks/Search';
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
            $SearchClientLinksRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsearchClientLinks',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation searchCustomers
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersRequest $SearchCustomersRequest SearchCustomersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCustomers'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function searchCustomers($SearchCustomersRequest, string $contentType = self::contentTypes['searchCustomers'][0])
    {
        list($response) = $this->searchCustomersWithHttpInfo($SearchCustomersRequest, $contentType);
        return $response;
    }

    /**
     * Operation searchCustomersWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersRequest $SearchCustomersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCustomers'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchCustomersWithHttpInfo($SearchCustomersRequest, string $contentType = self::contentTypes['searchCustomers'][0])
    {
        $request = $this->searchCustomersRequest($SearchCustomersRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchCustomersAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersRequest $SearchCustomersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCustomers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCustomersAsync($SearchCustomersRequest, string $contentType = self::contentTypes['searchCustomers'][0])
    {
        return $this->searchCustomersAsyncWithHttpInfo($SearchCustomersRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchCustomersAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersRequest $SearchCustomersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCustomers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCustomersAsyncWithHttpInfo($SearchCustomersRequest, string $contentType = self::contentTypes['searchCustomers'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersResponse';
        $request = $this->searchCustomersRequest($SearchCustomersRequest, $contentType);

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
     * Create request for operation 'searchCustomers'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchCustomersRequest $SearchCustomersRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchCustomers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchCustomersRequest($SearchCustomersRequest, string $contentType = self::contentTypes['searchCustomers'][0])
    {

        // verify the required parameter 'SearchCustomersRequest' is set
        if ($SearchCustomersRequest === null || (is_array($SearchCustomersRequest) && count($SearchCustomersRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SearchCustomersRequest when calling searchCustomers'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Customers/Search';
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
            $SearchCustomersRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsearchCustomers',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation searchUserInvitations
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsRequest $SearchUserInvitationsRequest SearchUserInvitationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchUserInvitations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function searchUserInvitations($SearchUserInvitationsRequest, string $contentType = self::contentTypes['searchUserInvitations'][0])
    {
        list($response) = $this->searchUserInvitationsWithHttpInfo($SearchUserInvitationsRequest, $contentType);
        return $response;
    }

    /**
     * Operation searchUserInvitationsWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsRequest $SearchUserInvitationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchUserInvitations'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUserInvitationsWithHttpInfo($SearchUserInvitationsRequest, string $contentType = self::contentTypes['searchUserInvitations'][0])
    {
        $request = $this->searchUserInvitationsRequest($SearchUserInvitationsRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchUserInvitationsAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsRequest $SearchUserInvitationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchUserInvitations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchUserInvitationsAsync($SearchUserInvitationsRequest, string $contentType = self::contentTypes['searchUserInvitations'][0])
    {
        return $this->searchUserInvitationsAsyncWithHttpInfo($SearchUserInvitationsRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchUserInvitationsAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsRequest $SearchUserInvitationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchUserInvitations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchUserInvitationsAsyncWithHttpInfo($SearchUserInvitationsRequest, string $contentType = self::contentTypes['searchUserInvitations'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsResponse';
        $request = $this->searchUserInvitationsRequest($SearchUserInvitationsRequest, $contentType);

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
     * Create request for operation 'searchUserInvitations'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchUserInvitationsRequest $SearchUserInvitationsRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchUserInvitations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchUserInvitationsRequest($SearchUserInvitationsRequest, string $contentType = self::contentTypes['searchUserInvitations'][0])
    {

        // verify the required parameter 'SearchUserInvitationsRequest' is set
        if ($SearchUserInvitationsRequest === null || (is_array($SearchUserInvitationsRequest) && count($SearchUserInvitationsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SearchUserInvitationsRequest when calling searchUserInvitations'
            );
        }


        $resourcePath = '/CustomerManagement/v13/UserInvitations/Search';
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
            $SearchUserInvitationsRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsearchUserInvitations',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation sendUserInvitation
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationRequest $SendUserInvitationRequest SendUserInvitationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendUserInvitation'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function sendUserInvitation($SendUserInvitationRequest, string $contentType = self::contentTypes['sendUserInvitation'][0])
    {
        list($response) = $this->sendUserInvitationWithHttpInfo($SendUserInvitationRequest, $contentType);
        return $response;
    }

    /**
     * Operation sendUserInvitationWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationRequest $SendUserInvitationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendUserInvitation'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendUserInvitationWithHttpInfo($SendUserInvitationRequest, string $contentType = self::contentTypes['sendUserInvitation'][0])
    {
        $request = $this->sendUserInvitationRequest($SendUserInvitationRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendUserInvitationAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationRequest $SendUserInvitationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendUserInvitation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendUserInvitationAsync($SendUserInvitationRequest, string $contentType = self::contentTypes['sendUserInvitation'][0])
    {
        return $this->sendUserInvitationAsyncWithHttpInfo($SendUserInvitationRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendUserInvitationAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationRequest $SendUserInvitationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendUserInvitation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendUserInvitationAsyncWithHttpInfo($SendUserInvitationRequest, string $contentType = self::contentTypes['sendUserInvitation'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationResponse';
        $request = $this->sendUserInvitationRequest($SendUserInvitationRequest, $contentType);

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
     * Create request for operation 'sendUserInvitation'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SendUserInvitationRequest $SendUserInvitationRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendUserInvitation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sendUserInvitationRequest($SendUserInvitationRequest, string $contentType = self::contentTypes['sendUserInvitation'][0])
    {

        // verify the required parameter 'SendUserInvitationRequest' is set
        if ($SendUserInvitationRequest === null || (is_array($SendUserInvitationRequest) && count($SendUserInvitationRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SendUserInvitationRequest when calling sendUserInvitation'
            );
        }


        $resourcePath = '/CustomerManagement/v13/UserInvitation/Send';
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
            $SendUserInvitationRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsendUserInvitation',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation signupCustomer
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerRequest $SignupCustomerRequest SignupCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['signupCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function signupCustomer($SignupCustomerRequest, string $contentType = self::contentTypes['signupCustomer'][0])
    {
        list($response) = $this->signupCustomerWithHttpInfo($SignupCustomerRequest, $contentType);
        return $response;
    }

    /**
     * Operation signupCustomerWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerRequest $SignupCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['signupCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function signupCustomerWithHttpInfo($SignupCustomerRequest, string $contentType = self::contentTypes['signupCustomer'][0])
    {
        $request = $this->signupCustomerRequest($SignupCustomerRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation signupCustomerAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerRequest $SignupCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['signupCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function signupCustomerAsync($SignupCustomerRequest, string $contentType = self::contentTypes['signupCustomer'][0])
    {
        return $this->signupCustomerAsyncWithHttpInfo($SignupCustomerRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation signupCustomerAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerRequest $SignupCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['signupCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function signupCustomerAsyncWithHttpInfo($SignupCustomerRequest, string $contentType = self::contentTypes['signupCustomer'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerResponse';
        $request = $this->signupCustomerRequest($SignupCustomerRequest, $contentType);

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
     * Create request for operation 'signupCustomer'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\SignupCustomerRequest $SignupCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['signupCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function signupCustomerRequest($SignupCustomerRequest, string $contentType = self::contentTypes['signupCustomer'][0])
    {

        // verify the required parameter 'SignupCustomerRequest' is set
        if ($SignupCustomerRequest === null || (is_array($SignupCustomerRequest) && count($SignupCustomerRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $SignupCustomerRequest when calling signupCustomer'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Customer/Signup';
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
            $SignupCustomerRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForsignupCustomer',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updateAccount
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountRequest $UpdateAccountRequest UpdateAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function updateAccount($UpdateAccountRequest, string $contentType = self::contentTypes['updateAccount'][0])
    {
        list($response) = $this->updateAccountWithHttpInfo($UpdateAccountRequest, $contentType);
        return $response;
    }

    /**
     * Operation updateAccountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountRequest $UpdateAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateAccountWithHttpInfo($UpdateAccountRequest, string $contentType = self::contentTypes['updateAccount'][0])
    {
        $request = $this->updateAccountRequest($UpdateAccountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateAccountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountRequest $UpdateAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAccountAsync($UpdateAccountRequest, string $contentType = self::contentTypes['updateAccount'][0])
    {
        return $this->updateAccountAsyncWithHttpInfo($UpdateAccountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateAccountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountRequest $UpdateAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAccountAsyncWithHttpInfo($UpdateAccountRequest, string $contentType = self::contentTypes['updateAccount'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountResponse';
        $request = $this->updateAccountRequest($UpdateAccountRequest, $contentType);

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
     * Create request for operation 'updateAccount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateAccountRequest $UpdateAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateAccountRequest($UpdateAccountRequest, string $contentType = self::contentTypes['updateAccount'][0])
    {

        // verify the required parameter 'UpdateAccountRequest' is set
        if ($UpdateAccountRequest === null || (is_array($UpdateAccountRequest) && count($UpdateAccountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdateAccountRequest when calling updateAccount'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Account';
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
            $UpdateAccountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdateAccount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updateClientLinks
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksRequest $UpdateClientLinksRequest UpdateClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateClientLinks'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function updateClientLinks($UpdateClientLinksRequest, string $contentType = self::contentTypes['updateClientLinks'][0])
    {
        list($response) = $this->updateClientLinksWithHttpInfo($UpdateClientLinksRequest, $contentType);
        return $response;
    }

    /**
     * Operation updateClientLinksWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksRequest $UpdateClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateClientLinks'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateClientLinksWithHttpInfo($UpdateClientLinksRequest, string $contentType = self::contentTypes['updateClientLinks'][0])
    {
        $request = $this->updateClientLinksRequest($UpdateClientLinksRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateClientLinksAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksRequest $UpdateClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateClientLinksAsync($UpdateClientLinksRequest, string $contentType = self::contentTypes['updateClientLinks'][0])
    {
        return $this->updateClientLinksAsyncWithHttpInfo($UpdateClientLinksRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateClientLinksAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksRequest $UpdateClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateClientLinksAsyncWithHttpInfo($UpdateClientLinksRequest, string $contentType = self::contentTypes['updateClientLinks'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksResponse';
        $request = $this->updateClientLinksRequest($UpdateClientLinksRequest, $contentType);

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
     * Create request for operation 'updateClientLinks'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateClientLinksRequest $UpdateClientLinksRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateClientLinks'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateClientLinksRequest($UpdateClientLinksRequest, string $contentType = self::contentTypes['updateClientLinks'][0])
    {

        // verify the required parameter 'UpdateClientLinksRequest' is set
        if ($UpdateClientLinksRequest === null || (is_array($UpdateClientLinksRequest) && count($UpdateClientLinksRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdateClientLinksRequest when calling updateClientLinks'
            );
        }


        $resourcePath = '/CustomerManagement/v13/ClientLinks';
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
            $UpdateClientLinksRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdateClientLinks',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updateCustomer
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerRequest $UpdateCustomerRequest UpdateCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function updateCustomer($UpdateCustomerRequest, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        list($response) = $this->updateCustomerWithHttpInfo($UpdateCustomerRequest, $contentType);
        return $response;
    }

    /**
     * Operation updateCustomerWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerRequest $UpdateCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCustomerWithHttpInfo($UpdateCustomerRequest, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        $request = $this->updateCustomerRequest($UpdateCustomerRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateCustomerAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerRequest $UpdateCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCustomerAsync($UpdateCustomerRequest, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        return $this->updateCustomerAsyncWithHttpInfo($UpdateCustomerRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateCustomerAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerRequest $UpdateCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCustomerAsyncWithHttpInfo($UpdateCustomerRequest, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerResponse';
        $request = $this->updateCustomerRequest($UpdateCustomerRequest, $contentType);

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
     * Create request for operation 'updateCustomer'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateCustomerRequest $UpdateCustomerRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateCustomerRequest($UpdateCustomerRequest, string $contentType = self::contentTypes['updateCustomer'][0])
    {

        // verify the required parameter 'UpdateCustomerRequest' is set
        if ($UpdateCustomerRequest === null || (is_array($UpdateCustomerRequest) && count($UpdateCustomerRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdateCustomerRequest when calling updateCustomer'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Customer';
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
            $UpdateCustomerRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdateCustomer',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updatePrepayAccount
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountRequest $UpdatePrepayAccountRequest UpdatePrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatePrepayAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function updatePrepayAccount($UpdatePrepayAccountRequest, string $contentType = self::contentTypes['updatePrepayAccount'][0])
    {
        list($response) = $this->updatePrepayAccountWithHttpInfo($UpdatePrepayAccountRequest, $contentType);
        return $response;
    }

    /**
     * Operation updatePrepayAccountWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountRequest $UpdatePrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatePrepayAccount'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePrepayAccountWithHttpInfo($UpdatePrepayAccountRequest, string $contentType = self::contentTypes['updatePrepayAccount'][0])
    {
        $request = $this->updatePrepayAccountRequest($UpdatePrepayAccountRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updatePrepayAccountAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountRequest $UpdatePrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatePrepayAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePrepayAccountAsync($UpdatePrepayAccountRequest, string $contentType = self::contentTypes['updatePrepayAccount'][0])
    {
        return $this->updatePrepayAccountAsyncWithHttpInfo($UpdatePrepayAccountRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updatePrepayAccountAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountRequest $UpdatePrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatePrepayAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePrepayAccountAsyncWithHttpInfo($UpdatePrepayAccountRequest, string $contentType = self::contentTypes['updatePrepayAccount'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountResponse';
        $request = $this->updatePrepayAccountRequest($UpdatePrepayAccountRequest, $contentType);

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
     * Create request for operation 'updatePrepayAccount'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdatePrepayAccountRequest $UpdatePrepayAccountRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatePrepayAccount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updatePrepayAccountRequest($UpdatePrepayAccountRequest, string $contentType = self::contentTypes['updatePrepayAccount'][0])
    {

        // verify the required parameter 'UpdatePrepayAccountRequest' is set
        if ($UpdatePrepayAccountRequest === null || (is_array($UpdatePrepayAccountRequest) && count($UpdatePrepayAccountRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdatePrepayAccountRequest when calling updatePrepayAccount'
            );
        }


        $resourcePath = '/CustomerManagement/v13/PrepayAccount';
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
            $UpdatePrepayAccountRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdatePrepayAccount',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updateUser
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRequest $UpdateUserRequest UpdateUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function updateUser($UpdateUserRequest, string $contentType = self::contentTypes['updateUser'][0])
    {
        list($response) = $this->updateUserWithHttpInfo($UpdateUserRequest, $contentType);
        return $response;
    }

    /**
     * Operation updateUserWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRequest $UpdateUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUser'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserWithHttpInfo($UpdateUserRequest, string $contentType = self::contentTypes['updateUser'][0])
    {
        $request = $this->updateUserRequest($UpdateUserRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateUserAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRequest $UpdateUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateUserAsync($UpdateUserRequest, string $contentType = self::contentTypes['updateUser'][0])
    {
        return $this->updateUserAsyncWithHttpInfo($UpdateUserRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateUserAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRequest $UpdateUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateUserAsyncWithHttpInfo($UpdateUserRequest, string $contentType = self::contentTypes['updateUser'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserResponse';
        $request = $this->updateUserRequest($UpdateUserRequest, $contentType);

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
     * Create request for operation 'updateUser'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRequest $UpdateUserRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateUserRequest($UpdateUserRequest, string $contentType = self::contentTypes['updateUser'][0])
    {

        // verify the required parameter 'UpdateUserRequest' is set
        if ($UpdateUserRequest === null || (is_array($UpdateUserRequest) && count($UpdateUserRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdateUserRequest when calling updateUser'
            );
        }


        $resourcePath = '/CustomerManagement/v13/User';
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
            $UpdateUserRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdateUser',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation updateUserRoles
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesRequest $UpdateUserRolesRequest UpdateUserRolesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUserRoles'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function updateUserRoles($UpdateUserRolesRequest, string $contentType = self::contentTypes['updateUserRoles'][0])
    {
        list($response) = $this->updateUserRolesWithHttpInfo($UpdateUserRolesRequest, $contentType);
        return $response;
    }

    /**
     * Operation updateUserRolesWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesRequest $UpdateUserRolesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUserRoles'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserRolesWithHttpInfo($UpdateUserRolesRequest, string $contentType = self::contentTypes['updateUserRoles'][0])
    {
        $request = $this->updateUserRolesRequest($UpdateUserRolesRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateUserRolesAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesRequest $UpdateUserRolesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUserRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateUserRolesAsync($UpdateUserRolesRequest, string $contentType = self::contentTypes['updateUserRoles'][0])
    {
        return $this->updateUserRolesAsyncWithHttpInfo($UpdateUserRolesRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateUserRolesAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesRequest $UpdateUserRolesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUserRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateUserRolesAsyncWithHttpInfo($UpdateUserRolesRequest, string $contentType = self::contentTypes['updateUserRoles'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesResponse';
        $request = $this->updateUserRolesRequest($UpdateUserRolesRequest, $contentType);

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
     * Create request for operation 'updateUserRoles'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpdateUserRolesRequest $UpdateUserRolesRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateUserRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateUserRolesRequest($UpdateUserRolesRequest, string $contentType = self::contentTypes['updateUserRoles'][0])
    {

        // verify the required parameter 'UpdateUserRolesRequest' is set
        if ($UpdateUserRolesRequest === null || (is_array($UpdateUserRolesRequest) && count($UpdateUserRolesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpdateUserRolesRequest when calling updateUserRoles'
            );
        }


        $resourcePath = '/CustomerManagement/v13/UserRoles';
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
            $UpdateUserRolesRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupdateUserRoles',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation upgradeCustomerToAgency
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpgradeCustomerToAgencyRequest $UpgradeCustomerToAgencyRequest UpgradeCustomerToAgencyRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['upgradeCustomerToAgency'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function upgradeCustomerToAgency($UpgradeCustomerToAgencyRequest, string $contentType = self::contentTypes['upgradeCustomerToAgency'][0])
    {
        list($response) = $this->upgradeCustomerToAgencyWithHttpInfo($UpgradeCustomerToAgencyRequest, $contentType);
        return $response;
    }

    /**
     * Operation upgradeCustomerToAgencyWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpgradeCustomerToAgencyRequest $UpgradeCustomerToAgencyRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['upgradeCustomerToAgency'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function upgradeCustomerToAgencyWithHttpInfo($UpgradeCustomerToAgencyRequest, string $contentType = self::contentTypes['upgradeCustomerToAgency'][0])
    {
        $request = $this->upgradeCustomerToAgencyRequest($UpgradeCustomerToAgencyRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, 'object');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = 'object';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation upgradeCustomerToAgencyAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpgradeCustomerToAgencyRequest $UpgradeCustomerToAgencyRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['upgradeCustomerToAgency'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function upgradeCustomerToAgencyAsync($UpgradeCustomerToAgencyRequest, string $contentType = self::contentTypes['upgradeCustomerToAgency'][0])
    {
        return $this->upgradeCustomerToAgencyAsyncWithHttpInfo($UpgradeCustomerToAgencyRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation upgradeCustomerToAgencyAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpgradeCustomerToAgencyRequest $UpgradeCustomerToAgencyRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['upgradeCustomerToAgency'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function upgradeCustomerToAgencyAsyncWithHttpInfo($UpgradeCustomerToAgencyRequest, string $contentType = self::contentTypes['upgradeCustomerToAgency'][0])
    {
        $returnType = 'object';
        $request = $this->upgradeCustomerToAgencyRequest($UpgradeCustomerToAgencyRequest, $contentType);

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
     * Create request for operation 'upgradeCustomerToAgency'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\UpgradeCustomerToAgencyRequest $UpgradeCustomerToAgencyRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['upgradeCustomerToAgency'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function upgradeCustomerToAgencyRequest($UpgradeCustomerToAgencyRequest, string $contentType = self::contentTypes['upgradeCustomerToAgency'][0])
    {

        // verify the required parameter 'UpgradeCustomerToAgencyRequest' is set
        if ($UpgradeCustomerToAgencyRequest === null || (is_array($UpgradeCustomerToAgencyRequest) && count($UpgradeCustomerToAgencyRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UpgradeCustomerToAgencyRequest when calling upgradeCustomerToAgency'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Customer/UpgradeToAgency';
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
            $UpgradeCustomerToAgencyRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForupgradeCustomerToAgency',
            null,
            [],
            $queryParams
        );
    }

    /**
     * Operation validateAddress
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressRequest $ValidateAddressRequest ValidateAddressRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateAddress'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault
     */
    public function validateAddress($ValidateAddressRequest, string $contentType = self::contentTypes['validateAddress'][0])
    {
        list($response) = $this->validateAddressWithHttpInfo($ValidateAddressRequest, $contentType);
        return $response;
    }

    /**
     * Operation validateAddressWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressRequest $ValidateAddressRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateAddress'] to see the possible values for this operation
     *
     * @throws \Microsoft\MsAds\Rest\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressResponse|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault|\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateAddressWithHttpInfo($ValidateAddressRequest, string $contentType = self::contentTypes['validateAddress'][0])
    {
        $request = $this->validateAddressRequest($ValidateAddressRequest, $contentType);

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
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressResponse');
                case 400:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 500:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 401:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
                case 403:
                    return $this->getResponseContent($request, $response, '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault');
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

            $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressResponse';
            return $this->getResponseContent($request, $response, $returnType);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ApplicationFault',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation validateAddressAsync
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressRequest $ValidateAddressRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateAddressAsync($ValidateAddressRequest, string $contentType = self::contentTypes['validateAddress'][0])
    {
        return $this->validateAddressAsyncWithHttpInfo($ValidateAddressRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation validateAddressAsyncWithHttpInfo
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressRequest $ValidateAddressRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateAddressAsyncWithHttpInfo($ValidateAddressRequest, string $contentType = self::contentTypes['validateAddress'][0])
    {
        $returnType = '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressResponse';
        $request = $this->validateAddressRequest($ValidateAddressRequest, $contentType);

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
     * Create request for operation 'validateAddress'
     *
     * @param  \Microsoft\MsAds\Rest\Model\CustomerManagementService\ValidateAddressRequest $ValidateAddressRequest (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function validateAddressRequest($ValidateAddressRequest, string $contentType = self::contentTypes['validateAddress'][0])
    {

        // verify the required parameter 'ValidateAddressRequest' is set
        if ($ValidateAddressRequest === null || (is_array($ValidateAddressRequest) && count($ValidateAddressRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ValidateAddressRequest when calling validateAddress'
            );
        }


        $resourcePath = '/CustomerManagement/v13/Address/Validate';
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
            $ValidateAddressRequest,
            $formParams,
            $multipart,
            true,
            true,
            false,
            'getHostSettingsForvalidateAddress',
            null,
            [],
            $queryParams
        );
    }

}
