# Swagger\Client\WarehouseLocationsApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1WarehouseLocationsIdPatch**](WarehouseLocationsApi.md#v1WarehouseLocationsIdPatch) | **PATCH** /v1/warehouse/locations/{id} | Update a warehouse location
[**v1WarehouseLocationsIdsDelete**](WarehouseLocationsApi.md#v1WarehouseLocationsIdsDelete) | **DELETE** /v1/warehouse/locations/{ids} | Delete Warehouse Locations by IDs
[**v1WarehouseLocationsPost**](WarehouseLocationsApi.md#v1WarehouseLocationsPost) | **POST** /v1/warehouse/locations | Create a Warehouse Location


# **v1WarehouseLocationsIdPatch**
> \Swagger\Client\Model\ResponsesResponse v1WarehouseLocationsIdPatch($id, $update_request)

Update a warehouse location

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

$api_instance = new Swagger\Client\Api\WarehouseLocationsApi();
$id = 56; // int | location ID
$update_request = new \Swagger\Client\Model\WarehousesUpdateLocationRequest(); // \Swagger\Client\Model\WarehousesUpdateLocationRequest | update request

try {
    $result = $api_instance->v1WarehouseLocationsIdPatch($id, $update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseLocationsApi->v1WarehouseLocationsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| location ID |
 **update_request** | [**\Swagger\Client\Model\WarehousesUpdateLocationRequest**](../Model/\Swagger\Client\Model\WarehousesUpdateLocationRequest.md)| update request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WarehouseLocationsIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1WarehouseLocationsIdsDelete($ids)

Delete Warehouse Locations by IDs

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

$api_instance = new Swagger\Client\Api\WarehouseLocationsApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited Warehouse Location IDs

try {
    $result = $api_instance->v1WarehouseLocationsIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseLocationsApi->v1WarehouseLocationsIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited Warehouse Location IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WarehouseLocationsPost**
> \Swagger\Client\Model\ResponsesResponse v1WarehouseLocationsPost($request)

Create a Warehouse Location

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

$api_instance = new Swagger\Client\Api\WarehouseLocationsApi();
$request = new \Swagger\Client\Model\WarehousesCreateLocationRequest(); // \Swagger\Client\Model\WarehousesCreateLocationRequest | request

try {
    $result = $api_instance->v1WarehouseLocationsPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseLocationsApi->v1WarehouseLocationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WarehousesCreateLocationRequest**](../Model/\Swagger\Client\Model\WarehousesCreateLocationRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

