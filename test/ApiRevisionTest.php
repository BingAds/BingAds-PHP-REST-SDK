<?php

namespace Microsoft\MsAds\Rest\Test;

use DateTime;
use Microsoft\MsAds\Rest\Api\AdInsightServiceApi;
use Microsoft\MsAds\Rest\Auth\ApiEnvironment;
use Microsoft\MsAds\Rest\Auth\AuthorizationData;
use Microsoft\MsAds\Rest\Auth\PasswordAuthentication;
use Microsoft\MsAds\Rest\Configuration;
use Microsoft\MsAds\Rest\Manifest;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the always-on Api-Revision HTTP header injection.
 *
 * Mirrors the Python REST SDK tests in python_rest/v13tests/test_api_revision.py
 * and the C# / Java strict-format guardrail + per-request-header parity tests.
 */
class ApiRevisionTest extends TestCase
{
    /**
     * Release-bump typo guardrail: SDK_API_REVISION must be a real, strict yyyy-MM-dd date.
     *
     * The server validates with DateTime::TryParseExact(DateTimeStyles.None), which
     * rejects `2026-5-1`, `26-05-20`, anything with whitespace, and out-of-range days.
     */
    public function testSdkApiRevisionIsStrictYyyyMmDd(): void
    {
        $value = Manifest::SDK_API_REVISION;
        self::assertSame(
            1,
            preg_match('/^\d{4}-\d{2}-\d{2}$/', $value),
            'SDK_API_REVISION must match strict YYYY-MM-DD: got ' . var_export($value, true)
        );
        $date = DateTime::createFromFormat('!Y-m-d', $value);
        self::assertNotFalse($date, 'SDK_API_REVISION must be a valid calendar date');
        self::assertSame(
            $value,
            $date->format('Y-m-d'),
            'SDK_API_REVISION round-trip mismatch (out-of-range day/month would surface here)'
        );
    }

    /**
     * End-to-end injection: every outgoing request built by setupAndSendRequest must
     * carry Api-Revision: <SDK_API_REVISION>, with no caller opt-in.
     */
    public function testEveryRequestCarriesApiRevisionHeader(): void
    {
        $request = $this->buildRequest();

        self::assertTrue(
            $request->hasHeader('Api-Revision'),
            'Every outgoing request must carry the Api-Revision HTTP header'
        );
        self::assertSame(
            Manifest::SDK_API_REVISION,
            $request->getHeaderLine('Api-Revision'),
            'Api-Revision header value must equal SDK_API_REVISION'
        );
    }

    public function testCallerCannotOverrideApiRevisionHeader(): void
    {
        $request = $this->buildRequest(
            ['api-revision' => '1900-01-01'],
            ['Api-Revision' => '1900-01-02']
        );

        self::assertSame(
            Manifest::SDK_API_REVISION,
            $request->getHeaderLine('Api-Revision'),
            'Caller-provided headers must not override the SDK API revision'
        );
    }

    /**
     * AuthorizationData has no api_revision-style property: the SDK cannot be configured
     * to send a different revision. This is the "always-on, no public knob" invariant.
     */
    public function testAuthorizationDataHasNoApiRevisionProperty(): void
    {
        $authData = new AuthorizationData();
        self::assertFalse(
            property_exists($authData, 'ApiRevision'),
            'AuthorizationData must not expose an ApiRevision property'
        );
        self::assertFalse(
            property_exists($authData, 'apiRevision'),
            'AuthorizationData must not expose an apiRevision property'
        );
    }

    /**
     * Configuration has no api_revision-style getter/setter: parallel guard for the
     * REST-side configuration object.
     */
    public function testConfigurationHasNoApiRevisionAccessor(): void
    {
        $config = new Configuration();
        self::assertFalse(method_exists($config, 'getApiRevision'));
        self::assertFalse(method_exists($config, 'setApiRevision'));
    }

    private function buildRequest(array $headers = [], array $headerParams = [])
    {
        $config = new Configuration();
        $config->setAuthorizationData(
            (new AuthorizationData())
                ->withAuthentication(
                    (new PasswordAuthentication())
                        ->withUserName('unit-test-user')
                        ->withPassword('unit-test-pass')
                )
                ->withAccountId('1')
                ->withCustomerId('1')
                ->withDeveloperToken('unit-test-token')
        );

        $api = new AdInsightServiceApi(null, $config, null, ApiEnvironment::SANDBOX);

        return $api->setupAndSendRequest(
            'GET',
            '/ping',
            $headers,
            $headerParams,
            null,
            [],
            false,
            false,
            false,
            false,
            null,
            null,
            null,
            []
        );
    }
}
