# BingAdsApiSDK PHP REST OpenAPI Generator

This project provides a PHP SDK for the Microsoft Bing Ads API, generated from OpenAPI specifications. It enables developers to interact with Bing Ads services using RESTful APIs in a modern, type-safe, and convenient way.

## Features

- **Auto-generated PHP client** for Bing Ads REST APIs using OpenAPI specs.
- Generator Installation: [OpenAPI Generator CLI](https://openapi-generator.tech/docs/installation)
- Currently available Bing Ads services:
  - CustomerManagementService
  - CustomerBillingService
  - CampaignManagementService
  - BulkService
  - ReportingService
- Includes authentication helpers for OAuth2 flows.
- PSR-compliant, compatible with modern PHP frameworks.
- Unit tests and example usage included.

## Project Structure

```
php_rest_openapi_gen/
├── OpenApiSpecs/                 # OpenAPI JSON specs for each Bing Ads service
├── php_templates/                # Mustache templates used for code generation
├── php-rest/                     # Generated PHP SDK (src/api, src/model, etc.)
│   ├── src/                      # SDK source code
│   │   ├── Api/                  # API client classes for each service
│   │   ├── Auth/                 # Authentication classes (OAuth2)
│   │   ├── Model/                # Data models for requests/responses and other entities
│   │   ├── Configuration.php     # API configuration and setup
│   │   └── ObjectSerializer.php  # Serializer for API requests/responses
│   ├── test/                     # Unit test and sample code
│   ├── LICENSE.md                # License file
│   ├── composer.json             # Composer configuration
│   ├── composer.lock             # Composer lock file
│   ├── phpunit.xml               # PHPUnit configuration
│   └── README.md                 # SDK usage documentation
├── openapitools.json             # OpenAPI Generator config
├── php-config.yaml               # PHP codegen config specific to php generator
├── generate-all.ps1              # PowerShell script to generate sdks for all specs in a folder
└── README.md                     # This file
```

## Code Generation

To regenerate the SDK from updated OpenAPI specs, select the right spec json and `modelPackage` name, for example:

```powershell
openapi-generator-cli generate -g php -o .\php-rest `
    -i .\OpenApiSpecs\CustomerBillingService.json `
    -c .\php-config.yaml `
    -p modelPackage="Model\CustomerBillingService" `
    --global-property="models,apis,supportingFiles,apiDocs=false,modelDocs=false,apiTests=false,modelTests=false";
```

Repeat for each service spec as needed.

Or, you can use the provided powershell script to generate **all services** at once:

```powershell
.\generate-all.ps1 # uses default paths below, or you can specify custom paths
# .\generate-all.ps1 -specsFolder "./OpenApiSpecs" -outputFolder "./php-rest" -configFile "./php-config.yaml"
```

## Resources
- [Bing Ads API Documentation](https://learn.microsoft.com/en-us/advertising/guides/)
- OpenAPI Generator Documentation:
  - [CLI Installation](https://openapi-generator.tech/docs/installation)
  - [Using Templates](https://openapi-generator.tech/docs/templating)
  - [Customizing Code Generation](https://openapi-generator.tech/docs/customization)
  - [Configuration Options](https://openapi-generator.tech/docs/generators/php#configuration-options)

---

*Generated with OpenAPI Generator and custom templates.*

