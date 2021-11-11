# Swagger\Client\ExportApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ExportAssortmentsGet**](ExportApi.md#v1ExportAssortmentsGet) | **GET** /v1/export/assortments | Get Assortments Export
[**v1ExportMatrixProductsGet**](ExportApi.md#v1ExportMatrixProductsGet) | **GET** /v1/export/matrix-products | Get Matrix Products Export
[**v1ExportProductsGet**](ExportApi.md#v1ExportProductsGet) | **GET** /v1/export/products | Get Products Export


# **v1ExportAssortmentsGet**
> string v1ExportAssortmentsGet($assortment_id)

Get Assortments Export

You can export all the assortments, as well as filter by the ids.

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

$api_instance = new Swagger\Client\Api\ExportApi();
$assortment_id = 56; // int | export by assortment IDs. The parameter can contain up to 100 semicolon delimited ids.

try {
    $result = $api_instance->v1ExportAssortmentsGet($assortment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->v1ExportAssortmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assortment_id** | **int**| export by assortment IDs. The parameter can contain up to 100 semicolon delimited ids. | [optional]

### Return type

**string**

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ExportMatrixProductsGet**
> string v1ExportMatrixProductsGet($ids, $group_ids, $category_ids, $brand_ids, $supplier_ids, $priority_group_ids, $family_ids)

Get Matrix Products Export

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

$api_instance = new Swagger\Client\Api\ExportApi();
$ids = array(56); // int[] | filter by the matrix product ids. The parameter can contain up to 100 semicolon delimited ids.
$group_ids = array(56); // int[] | filter by the group ids. The parameter can contain up to 100 semicolon delimited ids.
$category_ids = array(56); // int[] | filter by the category ids. The parameter can contain up to 100 semicolon delimited ids.
$brand_ids = array(56); // int[] | filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids.
$supplier_ids = array(56); // int[] | filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids.
$priority_group_ids = array(56); // int[] | filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids.
$family_ids = array(56); // int[] | filter by the family ids. The parameter can contain up to 100 semicolon delimited ids.

try {
    $result = $api_instance->v1ExportMatrixProductsGet($ids, $group_ids, $category_ids, $brand_ids, $supplier_ids, $priority_group_ids, $family_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->v1ExportMatrixProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| filter by the matrix product ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **group_ids** | [**int[]**](../Model/int.md)| filter by the group ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **category_ids** | [**int[]**](../Model/int.md)| filter by the category ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **brand_ids** | [**int[]**](../Model/int.md)| filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **supplier_ids** | [**int[]**](../Model/int.md)| filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **priority_group_ids** | [**int[]**](../Model/int.md)| filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **family_ids** | [**int[]**](../Model/int.md)| filter by the family ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]

### Return type

**string**

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ExportProductsGet**
> string v1ExportProductsGet($ids, $group_ids, $unit_ids, $tax_rate_ids, $category_ids, $brand_ids, $supplier_ids, $priority_group_ids, $country_ids, $warehouse_location_ids, $parent_product_ids, $deposit_fee_ids, $family_ids)

Get Products Export

By default the endpoint exports all the products, but you can apply filtering with the parameters below

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

$api_instance = new Swagger\Client\Api\ExportApi();
$ids = array(56); // int[] | export only selected product IDs. The parameter can contain up to 100 semicolon delimited ids.
$group_ids = array(56); // int[] | filter by the group ids. The parameter can contain up to 100 semicolon delimited ids.
$unit_ids = array(56); // int[] | filter by the unit ids. The parameter can contain up to 100 semicolon delimited ids.
$tax_rate_ids = array(56); // int[] | filter by the tax rate ids. The parameter can contain up to 100 semicolon delimited ids.
$category_ids = array(56); // int[] | filter by the category ids. The parameter can contain up to 100 semicolon delimited ids.
$brand_ids = array(56); // int[] | filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids.
$supplier_ids = array(56); // int[] | filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids.
$priority_group_ids = array(56); // int[] | filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids.
$country_ids = array(56); // int[] | filter by the country ids. The parameter can contain up to 100 semicolon delimited ids.
$warehouse_location_ids = array(56); // int[] | filter by the warehouse location ids. The parameter can contain up to 100 semicolon delimited ids.
$parent_product_ids = array(56); // int[] | filter by the parent product ids. The parameter can contain up to 100 semicolon delimited ids.
$deposit_fee_ids = array(56); // int[] | filter by the deposit fee ids. The parameter can contain up to 100 semicolon delimited ids.
$family_ids = array(56); // int[] | filter by the family ids. The parameter can contain up to 100 semicolon delimited ids.

try {
    $result = $api_instance->v1ExportProductsGet($ids, $group_ids, $unit_ids, $tax_rate_ids, $category_ids, $brand_ids, $supplier_ids, $priority_group_ids, $country_ids, $warehouse_location_ids, $parent_product_ids, $deposit_fee_ids, $family_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->v1ExportProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| export only selected product IDs. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **group_ids** | [**int[]**](../Model/int.md)| filter by the group ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **unit_ids** | [**int[]**](../Model/int.md)| filter by the unit ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **tax_rate_ids** | [**int[]**](../Model/int.md)| filter by the tax rate ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **category_ids** | [**int[]**](../Model/int.md)| filter by the category ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **brand_ids** | [**int[]**](../Model/int.md)| filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **supplier_ids** | [**int[]**](../Model/int.md)| filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **priority_group_ids** | [**int[]**](../Model/int.md)| filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **country_ids** | [**int[]**](../Model/int.md)| filter by the country ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **warehouse_location_ids** | [**int[]**](../Model/int.md)| filter by the warehouse location ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **parent_product_ids** | [**int[]**](../Model/int.md)| filter by the parent product ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **deposit_fee_ids** | [**int[]**](../Model/int.md)| filter by the deposit fee ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **family_ids** | [**int[]**](../Model/int.md)| filter by the family ids. The parameter can contain up to 100 semicolon delimited ids. | [optional]

### Return type

**string**

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

