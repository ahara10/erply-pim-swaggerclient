# Swagger\Client\SpecialEndpointsApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OfflineDbSyncPricelistPricesGet**](SpecialEndpointsApi.md#v1OfflineDbSyncPricelistPricesGet) | **GET** /v1/offline-db/sync/pricelist-prices | Get Pricelist Prices for Offline DB to sync
[**v1OfflineDbSyncProductGet**](SpecialEndpointsApi.md#v1OfflineDbSyncProductGet) | **GET** /v1/offline-db/sync/product | Get Products for Offline DB to sync, Product pictures: CDN API
[**v1UiProductGet**](SpecialEndpointsApi.md#v1UiProductGet) | **GET** /v1/ui/product | Get Products for UI, Product pictures: CDN API


# **v1OfflineDbSyncPricelistPricesGet**
> \Swagger\Client\Model\ModelsPriceListPrice[] v1OfflineDbSyncPricelistPricesGet($last_modified, $pricelist_id, $skip, $take)

Get Pricelist Prices for Offline DB to sync

Get products that have been added or modified since the specified timestamp. Fetches only the columns that are actually needed for ODB (Offline Database).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: cc
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('clientCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientCode', 'Bearer');
// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure API key authorization: sk
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionKey', 'Bearer');

$api_instance = new Swagger\Client\Api\SpecialEndpointsApi();
$last_modified = 56; // int | Last modification time (create/update)
$pricelist_id = 56; // int | price list ID
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000 for this special endpoint

try {
    $result = $api_instance->v1OfflineDbSyncPricelistPricesGet($last_modified, $pricelist_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecialEndpointsApi->v1OfflineDbSyncPricelistPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified** | **int**| Last modification time (create/update) |
 **pricelist_id** | **int**| price list ID |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 for this special endpoint | [optional]

### Return type

[**\Swagger\Client\Model\ModelsPriceListPrice[]**](../Model/ModelsPriceListPrice.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OfflineDbSyncProductGet**
> \Swagger\Client\Model\ModelsProductResponseForOfflineDB[] v1OfflineDbSyncProductGet($last_modified, $skip, $take, $with_total_count)

Get Products for Offline DB to sync, Product pictures: CDN API

Get products that have been added or modified since the specified timestamp. Fetches only the columns that are actually needed for ODB (Offline Database).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: cc
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('clientCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientCode', 'Bearer');
// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure API key authorization: sk
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionKey', 'Bearer');

$api_instance = new Swagger\Client\Api\SpecialEndpointsApi();
$last_modified = 56; // int | Last modification time (create/update)
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 8000 for this special endpoint
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1OfflineDbSyncProductGet($last_modified, $skip, $take, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecialEndpointsApi->v1OfflineDbSyncProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified** | **int**| Last modification time (create/update) |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 8000 for this special endpoint | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\ModelsProductResponseForOfflineDB[]**](../Model/ModelsProductResponseForOfflineDB.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UiProductGet**
> \Swagger\Client\Model\ProductsProductResponseForUI[] v1UiProductGet($skip, $take, $sort, $filter, $created_date, $with_total_count)

Get Products for UI, Product pictures: CDN API

Getting the products for the UI involves additional steps and the query is slower than the regular get products. NB: Filtering & sorting is not supported for the following fields: length, delivery_time, packaging_type, alcohol_registry_number, alcohol_percentage batches, excise_declaration_number, tax_free, is_regular_gift_card, reward_points_not_allowed, non_stock_product, cashier_must_enter_price, labels_not_needed, deposit_fee_amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: cc
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('clientCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientCode', 'Bearer');
// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure API key authorization: sk
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionKey', 'Bearer');

$api_instance = new Swagger\Client\Api\SpecialEndpointsApi();
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 1000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$created_date = "created_date_example"; // string | this is an alternative for the added field filter, the format is ISO 'yyyy-mm-dd'.
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1UiProductGet($skip, $take, $sort, $filter, $created_date, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecialEndpointsApi->v1UiProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 1000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **created_date** | **string**| this is an alternative for the added field filter, the format is ISO &#39;yyyy-mm-dd&#39;. | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\ProductsProductResponseForUI[]**](../Model/ProductsProductResponseForUI.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

