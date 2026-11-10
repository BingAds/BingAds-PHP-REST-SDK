<?php

namespace Microsoft\MsAds\Rest\Test;

use Microsoft\MsAds\Rest\Model\BulkService\AdApiFaultDetail;
use Microsoft\MsAds\Rest\Model\BulkService\ApplicationFault;
use Microsoft\MsAds\Rest\Model\BulkService\CompressionType;
use Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByAccountIdsRequest;
use Microsoft\MsAds\Rest\Model\BulkService\DownloadCampaignsByCampaignIdsRequest;
use Microsoft\MsAds\Rest\Model\BulkService\DownloadFileType;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AIPromptAudience;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestion;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoSuggestion;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\Audience;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpcBiddingScheme;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\MaxClicksBiddingScheme;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\TargetCpmBiddingScheme;
use Microsoft\MsAds\Rest\ObjectSerializer;
use PHPUnit\Framework\TestCase;

class OpenApiParityTest extends TestCase
{
    /**
     * @dataProvider bulkDownloadRequests
     */
    public function testBulkEnumNullsAreDistinctFromOmittedValues(string $requestClass): void
    {
        $omitted = new $requestClass();
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($omitted);
        self::assertArrayNotHasKey('CompressionType', $serialized);
        self::assertArrayNotHasKey('DownloadFileType', $serialized);

        $request = new $requestClass();
        $request->setCompressionType(null);
        $request->setDownloadFileType(null);
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($request);
        self::assertArrayHasKey('CompressionType', $serialized);
        self::assertArrayHasKey('DownloadFileType', $serialized);
        self::assertNull($serialized['CompressionType']);
        self::assertNull($serialized['DownloadFileType']);

        $fromConstructor = new $requestClass([
            'CompressionType' => null,
            'DownloadFileType' => null,
        ]);
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($fromConstructor);
        self::assertArrayHasKey('CompressionType', $serialized);
        self::assertArrayHasKey('DownloadFileType', $serialized);
        self::assertNull($serialized['CompressionType']);
        self::assertNull($serialized['DownloadFileType']);

        $request->setCompressionType(CompressionType::G_ZIP);
        $request->setDownloadFileType(DownloadFileType::CSV);
        self::assertFalse($request->isNullableSetToNull('CompressionType'));
        self::assertFalse($request->isNullableSetToNull('DownloadFileType'));
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($request);
        self::assertSame('GZip', $serialized['CompressionType']);
        self::assertSame('Csv', $serialized['DownloadFileType']);
    }

    /**
     * @dataProvider invalidBulkEnums
     */
    public function testInvalidBulkEnumValuesAreRejected(string $requestClass, string $setter): void
    {
        $request = new $requestClass();
        $this->expectException(\InvalidArgumentException::class);
        $request->$setter('not-a-valid-enum-value');
    }

    /**
     * @dataProvider faultModels
     */
    public function testFaultTrackingIdRequirednessMatchesEachService(string $faultClass, bool $required): void
    {
        $fault = new $faultClass();
        $errors = $fault->listInvalidProperties();
        if ($required) {
            self::assertContains("'TrackingId' can't be null", $errors);
            $fault->setTrackingId('tracking-id');
            self::assertNotContains("'TrackingId' can't be null", $fault->listInvalidProperties());
        } else {
            self::assertNotContains("'TrackingId' can't be null", $errors);
        }
        self::assertSame('AdApiFaultDetail', $fault->getType());
        self::assertSame('AdApiFaultDetail', ((array) ObjectSerializer::sanitizeForSerialization($fault))['Type']);
    }

    /**
     * @dataProvider optionalErrorModels
     */
    public function testCandidateErrorModelsHaveNoRequiredFields(string $modelClass): void
    {
        $model = new $modelClass();
        self::assertSame([], $model->listInvalidProperties());
    }

    /**
     * @dataProvider polymorphicModels
     */
    public function testSubtypeWireTypeIsInitializedAndDeserialized(
        string $modelClass,
        string $baseClass,
        string $wireType
    ): void {
        $model = new $modelClass();
        self::assertSame($wireType, $model->getType());
        self::assertSame($wireType, ((array) ObjectSerializer::sanitizeForSerialization($model))['Type']);

        $deserialized = ObjectSerializer::deserialize((object) ['Type' => $wireType], $baseClass, []);
        self::assertInstanceOf($modelClass, $deserialized);
        self::assertSame($wireType, $deserialized->getType());

        $explicitType = new $modelClass(['Type' => 'CustomWireType']);
        self::assertSame('CustomWireType', $explicitType->getType());
    }

    public function testAiPromptAudienceRoundTripsItsPrompt(): void
    {
        $audience = ObjectSerializer::deserialize((object) [
            'Type' => 'AIPrompt',
            'Prompt' => 'test prompt',
        ], Audience::class, []);
        self::assertInstanceOf(AIPromptAudience::class, $audience);
        self::assertSame('test prompt', $audience->getPrompt());
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($audience);
        self::assertSame('AIPrompt', $serialized['Type']);
        self::assertSame('test prompt', $serialized['Prompt']);
    }

    public function testInternalRecommendationTemplatesAreNotExposed(): void
    {
        foreach ([AdRecommendationImageSuggestion::class, AdRecommendationVideoSuggestion::class] as $modelClass) {
            self::assertArrayNotHasKey('Internal_Template', $modelClass::openAPITypes());
            self::assertFalse(method_exists($modelClass, 'getInternalTemplate'));
        }
    }

    public function testUnknownSubtypeIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        ObjectSerializer::deserialize((object) ['Type' => 'UnknownWireType'], BiddingScheme::class, []);
    }

    public static function bulkDownloadRequests(): array
    {
        return [
            'account IDs' => [DownloadCampaignsByAccountIdsRequest::class],
            'campaign IDs' => [DownloadCampaignsByCampaignIdsRequest::class],
        ];
    }

    public static function faultModels(): array
    {
        return [
            'Bulk' => [AdApiFaultDetail::class, false],
            'Campaign Management' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdApiFaultDetail::class, false],
            'Reporting' => [\Microsoft\MsAds\Rest\Model\ReportingService\AdApiFaultDetail::class, false],
            'Customer Billing' => [\Microsoft\MsAds\Rest\Model\CustomerBillingService\AdApiFaultDetail::class, true],
            'Customer Management' => [\Microsoft\MsAds\Rest\Model\CustomerManagementService\AdApiFaultDetail::class, true],
        ];
    }

    public static function invalidBulkEnums(): array
    {
        return [
            'account compression' => [DownloadCampaignsByAccountIdsRequest::class, 'setCompressionType'],
            'account file type' => [DownloadCampaignsByAccountIdsRequest::class, 'setDownloadFileType'],
            'campaign compression' => [DownloadCampaignsByCampaignIdsRequest::class, 'setCompressionType'],
            'campaign file type' => [DownloadCampaignsByCampaignIdsRequest::class, 'setDownloadFileType'],
        ];
    }

    public static function optionalErrorModels(): array
    {
        return [
            'Bulk ad fault' => [AdApiFaultDetail::class],
            'Bulk application fault' => [ApplicationFault::class],
            'Bulk batch error' => [\Microsoft\MsAds\Rest\Model\BulkService\BatchError::class],
            'Bulk editorial error' => [\Microsoft\MsAds\Rest\Model\BulkService\EditorialError::class],
            'Campaign ad fault' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdApiFaultDetail::class],
            'Campaign application fault' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\ApplicationFault::class],
            'Campaign batch error' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\BatchError::class],
            'Campaign batch error collection' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\BatchErrorCollection::class],
            'Campaign editorial error' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\EditorialError::class],
            'Campaign editorial error collection' => [\Microsoft\MsAds\Rest\Model\CampaignManagementService\EditorialErrorCollection::class],
            'Reporting ad fault' => [\Microsoft\MsAds\Rest\Model\ReportingService\AdApiFaultDetail::class],
            'Reporting application fault' => [\Microsoft\MsAds\Rest\Model\ReportingService\ApplicationFault::class],
        ];
    }

    public static function polymorphicModels(): array
    {
        return [
            'manual CPC' => [ManualCpcBiddingScheme::class, BiddingScheme::class, 'ManualCpc'],
            'max clicks' => [MaxClicksBiddingScheme::class, BiddingScheme::class, 'MaxClicks'],
            'target CPM' => [TargetCpmBiddingScheme::class, BiddingScheme::class, 'TargetCpm'],
            'AI prompt audience' => [AIPromptAudience::class, Audience::class, 'AIPrompt'],
            'Bulk fault' => [AdApiFaultDetail::class, ApplicationFault::class, 'AdApiFaultDetail'],
        ];
    }
}
