# SwaggerClient-php
The Ding API is a Level 0 REST web service.  We have used the <a href=\"http://swagger.io\">swagger</a> standard to describe this service. As a result, we are able to provide this interactive documentation page. For further information, you may view the <a href=\"/api/description\">additional documentation</a>; read our <a href=\"/api/faq\">FAQ</a> or contact partnersupport@ding.com

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: V1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancellation_requests = array(new \Swagger\Client\Model\CancellationRequest()); // \Swagger\Client\Model\CancellationRequest[] | An explicit list of records to cancel.

try {
    $result = $apiInstance->cancelTransfers($cancellation_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1Api->cancelTransfers: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.dingconnect.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*V1Api* | [**cancelTransfers**](docs/Api/V1Api.md#canceltransfers) | **POST** /api/V1/CancelTransfers | CancelTransfers
*V1Api* | [**estimatePrices**](docs/Api/V1Api.md#estimateprices) | **POST** /api/V1/EstimatePrices | EstimatePrices
*V1Api* | [**getAccountLookup**](docs/Api/V1Api.md#getaccountlookup) | **GET** /api/V1/GetAccountLookup | GetAccountLookup
*V1Api* | [**getBalance**](docs/Api/V1Api.md#getbalance) | **GET** /api/V1/GetBalance | GetBalance
*V1Api* | [**getCountries**](docs/Api/V1Api.md#getcountries) | **GET** /api/V1/GetCountries | GetCountries
*V1Api* | [**getCurrencies**](docs/Api/V1Api.md#getcurrencies) | **GET** /api/V1/GetCurrencies | GetCurrencies
*V1Api* | [**getErrorCodeDescriptions**](docs/Api/V1Api.md#geterrorcodedescriptions) | **GET** /api/V1/GetErrorCodeDescriptions | GetErrorCodeDescriptions
*V1Api* | [**getProductDescriptions**](docs/Api/V1Api.md#getproductdescriptions) | **GET** /api/V1/GetProductDescriptions | GetProductDescriptions
*V1Api* | [**getProducts**](docs/Api/V1Api.md#getproducts) | **GET** /api/V1/GetProducts | GetProducts
*V1Api* | [**getPromotionDescriptions**](docs/Api/V1Api.md#getpromotiondescriptions) | **GET** /api/V1/GetPromotionDescriptions | GetPromotionDescriptions
*V1Api* | [**getPromotions**](docs/Api/V1Api.md#getpromotions) | **GET** /api/V1/GetPromotions | GetPromotions
*V1Api* | [**getProviderStatus**](docs/Api/V1Api.md#getproviderstatus) | **GET** /api/V1/GetProviderStatus | GetProviderStatus
*V1Api* | [**getProviders**](docs/Api/V1Api.md#getproviders) | **GET** /api/V1/GetProviders | GetProviders
*V1Api* | [**getRegions**](docs/Api/V1Api.md#getregions) | **GET** /api/V1/GetRegions | GetRegions
*V1Api* | [**listTransferRecords**](docs/Api/V1Api.md#listtransferrecords) | **POST** /api/V1/ListTransferRecords | ListTransferRecords
*V1Api* | [**lookupBills**](docs/Api/V1Api.md#lookupbills) | **POST** /api/V1/LookupBills | LookupBills
*V1Api* | [**sendTransfer**](docs/Api/V1Api.md#sendtransfer) | **POST** /api/V1/SendTransfer | SendTransfer


## Documentation For Models

 - [AccountLookup](docs/Model/AccountLookup.md)
 - [Bill](docs/Model/Bill.md)
 - [CancelTransfersResponse](docs/Model/CancelTransfersResponse.md)
 - [CancellationRequest](docs/Model/CancellationRequest.md)
 - [Country](docs/Model/Country.md)
 - [Currency](docs/Model/Currency.md)
 - [Error](docs/Model/Error.md)
 - [ErrorDescription](docs/Model/ErrorDescription.md)
 - [EstimatePricesResponse](docs/Model/EstimatePricesResponse.md)
 - [EstimatedPrice](docs/Model/EstimatedPrice.md)
 - [EstimationRequest](docs/Model/EstimationRequest.md)
 - [GetAccountLookupResponse](docs/Model/GetAccountLookupResponse.md)
 - [GetBalanceResponse](docs/Model/GetBalanceResponse.md)
 - [GetCountriesResponse](docs/Model/GetCountriesResponse.md)
 - [GetCurrenciesResponse](docs/Model/GetCurrenciesResponse.md)
 - [GetErrorCodeDescriptionsResponse](docs/Model/GetErrorCodeDescriptionsResponse.md)
 - [GetProductDescriptionsResponse](docs/Model/GetProductDescriptionsResponse.md)
 - [GetProductsResponse](docs/Model/GetProductsResponse.md)
 - [GetPromotionDescriptionsResponse](docs/Model/GetPromotionDescriptionsResponse.md)
 - [GetPromotionsResponse](docs/Model/GetPromotionsResponse.md)
 - [GetProviderStatusResponse](docs/Model/GetProviderStatusResponse.md)
 - [GetProvidersResponse](docs/Model/GetProvidersResponse.md)
 - [GetRegionsResponse](docs/Model/GetRegionsResponse.md)
 - [IApiResponse](docs/Model/IApiResponse.md)
 - [InternationalDialingInfo](docs/Model/InternationalDialingInfo.md)
 - [ListTransferRecordsRequest](docs/Model/ListTransferRecordsRequest.md)
 - [ListTransferRecordsResponse](docs/Model/ListTransferRecordsResponse.md)
 - [LocalizedProductDescription](docs/Model/LocalizedProductDescription.md)
 - [LocalizedPromotionDescription](docs/Model/LocalizedPromotionDescription.md)
 - [LookupBillsRequest](docs/Model/LookupBillsRequest.md)
 - [LookupBillsResponse](docs/Model/LookupBillsResponse.md)
 - [Price](docs/Model/Price.md)
 - [Product](docs/Model/Product.md)
 - [Promotion](docs/Model/Promotion.md)
 - [Provider](docs/Model/Provider.md)
 - [ProviderStatus](docs/Model/ProviderStatus.md)
 - [Region](docs/Model/Region.md)
 - [SendTransferRequest](docs/Model/SendTransferRequest.md)
 - [SendTransferResponse](docs/Model/SendTransferResponse.md)
 - [Setting](docs/Model/Setting.md)
 - [SettingDefinition](docs/Model/SettingDefinition.md)
 - [TransferId](docs/Model/TransferId.md)
 - [TransferRecord](docs/Model/TransferRecord.md)
 - [TransferRecordWithErrorCodes](docs/Model/TransferRecordWithErrorCodes.md)
 - [TransferWithState](docs/Model/TransferWithState.md)


## Documentation For Authorization


## APIKeyHeader

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header


## Author




