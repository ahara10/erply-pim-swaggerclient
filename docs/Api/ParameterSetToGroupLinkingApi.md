# Swagger\Client\ParameterSetToGroupLinkingApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductParameterSetGroupsIdsDelete**](ParameterSetToGroupLinkingApi.md#v1ProductParameterSetGroupsIdsDelete) | **DELETE** /v1/product/parameter/set/groups/{ids} | Delete Linked Groups
[**v1ProductParameterSetIdGroupsGet**](ParameterSetToGroupLinkingApi.md#v1ProductParameterSetIdGroupsGet) | **GET** /v1/product/parameter/set/{id}/groups | Get Linked Groups
[**v1ProductParameterSetIdGroupsPost**](ParameterSetToGroupLinkingApi.md#v1ProductParameterSetIdGroupsPost) | **POST** /v1/product/parameter/set/{id}/groups | Link Group


# **v1ProductParameterSetGroupsIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterSetGroupsIdsDelete($ids)

Delete Linked Groups

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

$api_instance = new Swagger\Client\Api\ParameterSetToGroupLinkingApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited link IDs

try {
    $result = $api_instance->v1ProductParameterSetGroupsIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterSetToGroupLinkingApi->v1ProductParameterSetGroupsIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited link IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterSetIdGroupsGet**
> \Swagger\Client\Model\ModelsSetToGroupResponse[] v1ProductParameterSetIdGroupsGet($id, $skip, $take)

Get Linked Groups

Get Linked Groups

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

$api_instance = new Swagger\Client\Api\ParameterSetToGroupLinkingApi();
$id = 56; // int | set ID
$skip = 56; // int | skip n records
$take = 56; // int | amount to take

try {
    $result = $api_instance->v1ProductParameterSetIdGroupsGet($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterSetToGroupLinkingApi->v1ProductParameterSetIdGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| set ID |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| amount to take | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSetToGroupResponse[]**](../Model/ModelsSetToGroupResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterSetIdGroupsPost**
> \Swagger\Client\Model\ResponsesMessageResponse v1ProductParameterSetIdGroupsPost($id, $id2)

Link Group

Link Group

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

$api_instance = new Swagger\Client\Api\ParameterSetToGroupLinkingApi();
$id = 56; // int | set ID
$id2 = new \Swagger\Client\Model\RequestsIDRequest(); // \Swagger\Client\Model\RequestsIDRequest | group ID

try {
    $result = $api_instance->v1ProductParameterSetIdGroupsPost($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterSetToGroupLinkingApi->v1ProductParameterSetIdGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| set ID |
 **id2** | [**\Swagger\Client\Model\RequestsIDRequest**](../Model/\Swagger\Client\Model\RequestsIDRequest.md)| group ID |

### Return type

[**\Swagger\Client\Model\ResponsesMessageResponse**](../Model/ResponsesMessageResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

