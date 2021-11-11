# Swagger\Client\ProductParameterOptionApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductParameterOptionIdProductsGet**](ProductParameterOptionApi.md#v1ProductParameterOptionIdProductsGet) | **GET** /v1/product/parameter/option/{id}/products | Get Parameter Option and Products associated with a parameter that has a Parameter Options
[**v1ProductParameterOptionIdPut**](ProductParameterOptionApi.md#v1ProductParameterOptionIdPut) | **PUT** /v1/product/parameter/option/{id} | Update Product Parameter Option
[**v1ProductParameterOptionIdsDelete**](ProductParameterOptionApi.md#v1ProductParameterOptionIdsDelete) | **DELETE** /v1/product/parameter/option/{ids} | Delete Product Parameter Options
[**v1ProductParameterOptionParameterIdGet**](ProductParameterOptionApi.md#v1ProductParameterOptionParameterIdGet) | **GET** /v1/product/parameter/option/{parameterId} | Get Product Parameter Options
[**v1ProductParameterOptionPost**](ProductParameterOptionApi.md#v1ProductParameterOptionPost) | **POST** /v1/product/parameter/option | Create Product Parameter Option


# **v1ProductParameterOptionIdProductsGet**
> \Swagger\Client\Model\ModelsParameterOptionWithProductsResponse v1ProductParameterOptionIdProductsGet($id, $skip, $take)

Get Parameter Option and Products associated with a parameter that has a Parameter Options

Get Parameter Option and Products associated with a parameter that has the Parameter Options

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

$api_instance = new Swagger\Client\Api\ProductParameterOptionApi();
$id = 56; // int | option ID
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductParameterOptionIdProductsGet($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterOptionApi->v1ProductParameterOptionIdProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| option ID |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\ModelsParameterOptionWithProductsResponse**](../Model/ModelsParameterOptionWithProductsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterOptionIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterOptionIdPut($name, $id)

Update Product Parameter Option

Update Product Parameter Option

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

$api_instance = new Swagger\Client\Api\ProductParameterOptionApi();
$name = new \Swagger\Client\Model\RequestsRequest(); // \Swagger\Client\Model\RequestsRequest | Parameter Option Name
$id = 56; // int | parameterOption ID

try {
    $result = $api_instance->v1ProductParameterOptionIdPut($name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterOptionApi->v1ProductParameterOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**\Swagger\Client\Model\RequestsRequest**](../Model/\Swagger\Client\Model\RequestsRequest.md)| Parameter Option Name |
 **id** | **int**| parameterOption ID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterOptionIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterOptionIdsDelete($ids)

Delete Product Parameter Options

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

$api_instance = new Swagger\Client\Api\ProductParameterOptionApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited parameter Option IDs

try {
    $result = $api_instance->v1ProductParameterOptionIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterOptionApi->v1ProductParameterOptionIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited parameter Option IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterOptionParameterIdGet**
> \Swagger\Client\Model\ParametermodelsOptionResponse[] v1ProductParameterOptionParameterIdGet($parameter_id, $skip, $take)

Get Product Parameter Options

Get Product Parameter Option

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

$api_instance = new Swagger\Client\Api\ProductParameterOptionApi();
$parameter_id = 56; // int | parameter ID
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductParameterOptionParameterIdGet($parameter_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterOptionApi->v1ProductParameterOptionParameterIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameter_id** | **int**| parameter ID |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\ParametermodelsOptionResponse[]**](../Model/ParametermodelsOptionResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterOptionPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterOptionPost($parameter_option)

Create Product Parameter Option

Create Product Parameter Option

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

$api_instance = new Swagger\Client\Api\ProductParameterOptionApi();
$parameter_option = new \Swagger\Client\Model\RequestsParameterOptionRequest(); // \Swagger\Client\Model\RequestsParameterOptionRequest | Parameter Option

try {
    $result = $api_instance->v1ProductParameterOptionPost($parameter_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterOptionApi->v1ProductParameterOptionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameter_option** | [**\Swagger\Client\Model\RequestsParameterOptionRequest**](../Model/\Swagger\Client\Model\RequestsParameterOptionRequest.md)| Parameter Option |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

