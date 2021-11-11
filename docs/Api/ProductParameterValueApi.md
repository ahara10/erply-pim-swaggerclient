# Swagger\Client\ProductParameterValueApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductIdsParameterValueGet**](ProductParameterValueApi.md#v1ProductIdsParameterValueGet) | **GET** /v1/product/{ids}/parameter/value | Get Product Parameter Values by Product IDs
[**v1ProductParameterValueIdPut**](ProductParameterValueApi.md#v1ProductParameterValueIdPut) | **PUT** /v1/product/parameter/value/{id} | Update Product Parameter Value
[**v1ProductParameterValueIdsDelete**](ProductParameterValueApi.md#v1ProductParameterValueIdsDelete) | **DELETE** /v1/product/parameter/value/{ids} | Delete product parameter values
[**v1ProductProductIdParameterParameterIdValuePost**](ProductParameterValueApi.md#v1ProductProductIdParameterParameterIdValuePost) | **POST** /v1/product/{productId}/parameter/{parameterId}/value | Assign Value to Product&#39;s Parameter


# **v1ProductIdsParameterValueGet**
> \Swagger\Client\Model\ParametermodelsValueResponse[] v1ProductIdsParameterValueGet($ids, $skip, $take)

Get Product Parameter Values by Product IDs

Get Product Parameter Values by Product IDs (ids parameter)

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

$api_instance = new Swagger\Client\Api\ProductParameterValueApi();
$ids = "ids_example"; // string | can contain up to 100 semicolon delimited ids.
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductIdsParameterValueGet($ids, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValueApi->v1ProductIdsParameterValueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| can contain up to 100 semicolon delimited ids. |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\ParametermodelsValueResponse[]**](../Model/ParametermodelsValueResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterValueIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterValueIdPut($value, $id, $apply_validation_rules)

Update Product Parameter Value

Update Product Parameter Value

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

$api_instance = new Swagger\Client\Api\ProductParameterValueApi();
$value = new \Swagger\Client\Model\RequestsValueRequest(); // \Swagger\Client\Model\RequestsValueRequest | Parameter Value
$id = 56; // int | value ID
$apply_validation_rules = true; // bool | Apply-Validation-Rules flag

try {
    $result = $api_instance->v1ProductParameterValueIdPut($value, $id, $apply_validation_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValueApi->v1ProductParameterValueIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\Swagger\Client\Model\RequestsValueRequest**](../Model/\Swagger\Client\Model\RequestsValueRequest.md)| Parameter Value |
 **id** | **int**| value ID |
 **apply_validation_rules** | **bool**| Apply-Validation-Rules flag |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterValueIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterValueIdsDelete($ids)

Delete product parameter values

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

$api_instance = new Swagger\Client\Api\ProductParameterValueApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited value IDs

try {
    $result = $api_instance->v1ProductParameterValueIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValueApi->v1ProductParameterValueIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited value IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductProductIdParameterParameterIdValuePost**
> \Swagger\Client\Model\ResponsesResponse v1ProductProductIdParameterParameterIdValuePost($product_id, $parameter_id, $value, $apply_validation_rules)

Assign Value to Product's Parameter

Type `TEXT`: \"value\":\"your_text\" Type `BOOLEAN` : \"value\":true Type `INTEGER`: \"value\":1 Type `DECIMAL`: \"value\": 1.01 Type `LIST`: \"value\": 1 (1 is option ID) Type `MULTILIST`: \"value\": [1,2,3] (arrray of option IDs)

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

$api_instance = new Swagger\Client\Api\ProductParameterValueApi();
$product_id = 56; // int | product ID
$parameter_id = 56; // int | parameter ID
$value = new \Swagger\Client\Model\RequestsValueRequest(); // \Swagger\Client\Model\RequestsValueRequest | Value
$apply_validation_rules = true; // bool | Apply-Validation-Rules flag

try {
    $result = $api_instance->v1ProductProductIdParameterParameterIdValuePost($product_id, $parameter_id, $value, $apply_validation_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValueApi->v1ProductProductIdParameterParameterIdValuePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| product ID |
 **parameter_id** | **int**| parameter ID |
 **value** | [**\Swagger\Client\Model\RequestsValueRequest**](../Model/\Swagger\Client\Model\RequestsValueRequest.md)| Value |
 **apply_validation_rules** | **bool**| Apply-Validation-Rules flag |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

