<?php

namespace Microsoft\MsAds\Rest\Test;

use GuzzleHttp\Client;
use Microsoft\MsAds\Rest\Api\CustomerManagementServiceApi;
use Microsoft\MsAds\Rest\Auth\UriOAuthService;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class TlsVerificationDefaultsTest extends TestCase
{
    public function testRestApiDefaultClientEnablesCertificateVerification(): void
    {
        $api = new CustomerManagementServiceApi();
        $reflection = new ReflectionClass($api);
        $property = $reflection->getParentClass()->getProperty('client');
        $property->setAccessible(true);

        $client = $property->getValue($api);

        self::assertInstanceOf(Client::class, $client);
        self::assertSame(true, $client->getConfig('verify'));
        self::assertSame(['https'], $client->getConfig('allow_redirects')['protocols']);
    }

    public function testOAuthDefaultClientEnablesCertificateVerification(): void
    {
        $service = new UriOAuthService();
        $reflection = new ReflectionClass($service);
        $property = $reflection->getProperty('httpClient');
        $property->setAccessible(true);

        $client = $property->getValue($service);

        self::assertInstanceOf(Client::class, $client);
        self::assertSame(true, $client->getConfig('verify'));
        self::assertSame(['https'], $client->getConfig('allow_redirects')['protocols']);
    }
}
