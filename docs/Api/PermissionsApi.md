# Swagger\Client\PermissionsApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PermissionsPatch**](PermissionsApi.md#v1PermissionsPatch) | **PATCH** /v1/permissions | Set / Update a permission
[**v1PermissionsUserIDGet**](PermissionsApi.md#v1PermissionsUserIDGet) | **GET** /v1/permissions/{userID} | Get user permissions


# **v1PermissionsPatch**
> \Swagger\Client\Model\ResponsesResponse v1PermissionsPatch($entity, $request)

Set / Update a permission

Some entities support setting up permissions on the user level. They include product groups and categpries. Response is the userID of the updated user

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

$api_instance = new Swagger\Client\Api\PermissionsApi();
$entity = "entity_example"; // string | values: 'product group' or 'product category'
$request = new \Swagger\Client\Model\PermissionsSetUserPermissionRequest(); // \Swagger\Client\Model\PermissionsSetUserPermissionRequest | request

try {
    $result = $api_instance->v1PermissionsPatch($entity, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->v1PermissionsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | **string**| values: &#39;product group&#39; or &#39;product category&#39; |
 **request** | [**\Swagger\Client\Model\PermissionsSetUserPermissionRequest**](../Model/\Swagger\Client\Model\PermissionsSetUserPermissionRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PermissionsUserIDGet**
> \Swagger\Client\Model\PermissionsUserPermission v1PermissionsUserIDGet($user_id, $entity)

Get user permissions

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

$api_instance = new Swagger\Client\Api\PermissionsApi();
$user_id = 56; // int | user ID
$entity = "entity_example"; // string | values: 'product group' or 'product category'

try {
    $result = $api_instance->v1PermissionsUserIDGet($user_id, $entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->v1PermissionsUserIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| user ID |
 **entity** | **string**| values: &#39;product group&#39; or &#39;product category&#39; |

### Return type

[**\Swagger\Client\Model\PermissionsUserPermission**](../Model/PermissionsUserPermission.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

