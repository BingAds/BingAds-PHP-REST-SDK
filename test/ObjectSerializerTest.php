<?php

use GuzzleHttp\Utils;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AddCampaignsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\Campaign;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\CommissionBiddingScheme;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\Date;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpaBiddingScheme;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpcBiddingScheme;
use Microsoft\MsAds\Rest\ObjectSerializer;
use PHPUnit\Framework\TestCase;

class ObjectSerializerTest extends TestCase
{

    public function testSerializeTypeFlagEnum()
    {
        $request = new AddCampaignsRequest();
        $campaign = new Campaign();
        $request->setCampaigns([$campaign]);

        $campaign->setCampaignType(["Search"]);
        self::assertEquals('Search', $campaign->getCampaignType());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"CampaignType":"Search"}]}');

        $campaign->setCampaignType("Search,Shopping");
        self::assertEquals('Search,Shopping', $campaign->getCampaignType());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"CampaignType":"Search,Shopping"}]}');

        $campaign->setCampaignType(["Search", "Shopping"]);
        self::assertEquals('Search,Shopping', $campaign->getCampaignType());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"CampaignType":"Search,Shopping"}]}');

        $campaign->setCampaignType(new CampaignType("Shopping"));
        self::assertEquals('Shopping', $campaign->getCampaignType());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"CampaignType":"Shopping"}]}');
    }

    public function testDeserializeTypeEnum()
    {
        $campaignResponse = '{"CampaignType":"Search"}';
        $campaign = $this->DecodeAndDeserialize($campaignResponse, Campaign::class);
        self::assertEquals('Search', $campaign->getCampaignType());

        $campaignResponse = '{"CampaignType":"Search,Shopping"}';
        $campaign = $this->DecodeAndDeserialize($campaignResponse, Campaign::class);
        self::assertEquals('Search,Shopping', $campaign->getCampaignType());

        $campaignResponse = '{"CampaignType":["Search","Shopping"]}';
        $campaign = $this->DecodeAndDeserialize($campaignResponse, Campaign::class);
        self::assertEquals('Search,Shopping', $campaign->getCampaignType());
    }

    public function testSerializePolymorphicType()
    {
        $request = new AddCampaignsRequest();
        $campaign = new Campaign();
        $request->setCampaigns([$campaign]);

        $campaign->setBiddingScheme(null);
        self::assertEquals(null, $campaign->getBiddingScheme());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"BiddingScheme":null}]}');

        $campaign->setBiddingScheme(new BiddingScheme());
        self::assertEquals(new BiddingScheme(), $campaign->getBiddingScheme());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"BiddingScheme":{"Type":"BiddingScheme"}}]}');

        $campaign->setBiddingScheme((new BiddingScheme())->setType("ManualCpc"));
        self::assertEquals((new BiddingScheme())->setType("ManualCpc"), $campaign->getBiddingScheme());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"BiddingScheme":{"Type":"ManualCpc"}}]}');

        $campaign->setBiddingScheme(new ManualCpcBiddingScheme());
        self::assertEquals(new ManualCpcBiddingScheme(), $campaign->getBiddingScheme());
        $this->SerializeAndSanitize($request, '{"Campaigns":[{"BiddingScheme":{"Type":"ManualCpc"}}]}');
    }

    public function testDeserializePolymorphicType()
    {
        $campaignResponse = '{"BiddingScheme":{"Type":"ManualCpc"}}';
        $campaign = $this->DecodeAndDeserialize($campaignResponse, Campaign::class);
        self::assertEquals(ManualCpcBiddingScheme::class, get_class($campaign->getBiddingScheme()));

        $campaignResponse = '{"BiddingScheme":{"Type":"ManualCpaBiddingScheme"}}';
        $campaign = $this->DecodeAndDeserialize($campaignResponse, Campaign::class);
        self::assertEquals(ManualCpaBiddingScheme::class, get_class($campaign->getBiddingScheme()));

        $response = '{"Type":"CommissionBiddingScheme"}';
        $biddingScheme = $this->DecodeAndDeserialize($response, BiddingScheme::class);
        self::assertEquals(CommissionBiddingScheme::class, get_class($biddingScheme));
    }

    public function testSerializeDateObjects()
    {
        $date = new DateTime('2023-10-01T00:00:00Z');
        $this->SerializeAndSanitize($date, '"2023-10-01T00:00:00+00:00"');

        $date = new Date([
            'Year' => 2023,
            'Month' => 10,
            'Day' => 1
        ]);
        $this->SerializeAndSanitize($date, '{"Year":2023,"Month":10,"Day":1}');

        $date = new Date([
            'Year' => date('Y'),
            'Month' => "10",
            'Day' => 1
        ]);
        $this->SerializeAndSanitize($date, '{"Year":'.date('Y').',"Month":10,"Day":1}');
    }

    public function testDeserializeDateObjects()
    {
        $dateResponse = '"2023-10-01T00:00:00+00:00"';
        $date = $this->DecodeAndDeserialize($dateResponse, "\DateTime");
        self::assertEquals('2023-10-01T00:00:00+00:00', $date->format(DateTimeInterface::RFC3339));

        $dateResponse = '{"Year":2023,"Month":10,"Day":1}';
        $date = $this->DecodeAndDeserialize($dateResponse, Date::class);
        $date2 = new Date([
            'Year' => 2023,
            'Month' => "10",
            'Day' => 1
        ]);
        self::assertEquals($date2, $date);
    }

    public function DecodeAndDeserialize($str, $className): object
    {
        $encoded = json_decode($str);
        print("\r\nEncoded object:\r\n");
        print_r($encoded);
        $decoded = ObjectSerializer::deserialize($encoded, $className, []);
        print("\r\nDecoded object:\r\n");
        print_r($decoded);
        print("\r\n");
        return $decoded;
    }

    public function SerializeAndSanitize($object, $jsonValue): void
    {
        $sanitized = ObjectSerializer::sanitizeForSerialization($object);
        print("\r\nSanitized object:\r\n");
        print_r($sanitized);
        $httpBody = Utils::jsonEncode($sanitized);
        print("\r\nSerialized and sanitized object:\r\n");
        print_r($httpBody);
        self::assertEquals($jsonValue, $httpBody);
    }

}