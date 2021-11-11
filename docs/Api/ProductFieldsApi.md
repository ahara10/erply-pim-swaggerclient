# Swagger\Client\ProductFieldsApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductFieldsInheritedGet**](ProductFieldsApi.md#v1ProductFieldsInheritedGet) | **GET** /v1/product/fields/inherited | Read product fields that will be inherited from matrix products
[**v1ProductFieldsInheritedPatch**](ProductFieldsApi.md#v1ProductFieldsInheritedPatch) | **PATCH** /v1/product/fields/inherited | Set product fields that will be inherited from matrix products
[**v1ProductFieldsPermissionsGet**](ProductFieldsApi.md#v1ProductFieldsPermissionsGet) | **GET** /v1/product/fields/permissions | Read permissions for product fields
[**v1ProductFieldsPermissionsPatch**](ProductFieldsApi.md#v1ProductFieldsPermissionsPatch) | **PATCH** /v1/product/fields/permissions | Set permissions for product fields, permissions are user group based


# **v1ProductFieldsInheritedGet**
> string[] v1ProductFieldsInheritedGet()

Read product fields that will be inherited from matrix products

There is an option to make matrix variations inherit specific field values from their parent product.

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

$api_instance = new Swagger\Client\Api\ProductFieldsApi();

try {
    $result = $api_instance->v1ProductFieldsInheritedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFieldsApi->v1ProductFieldsInheritedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFieldsInheritedPatch**
> \Swagger\Client\Model\ResponsesResponse v1ProductFieldsInheritedPatch($request)

Set product fields that will be inherited from matrix products

There is an option to make matrix variations inherit specific field values from their parent product.  This setting is followed when editing matrix products. The variation fields will be overwritten automatically.  Set field values for the fields you want to (re)configure only.

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

$api_instance = new Swagger\Client\Api\ProductFieldsApi();
$request = new \Swagger\Client\Model\ProductsProductInheritedFieldsRequest(); // \Swagger\Client\Model\ProductsProductInheritedFieldsRequest | request

try {
    $result = $api_instance->v1ProductFieldsInheritedPatch($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFieldsApi->v1ProductFieldsInheritedPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProductsProductInheritedFieldsRequest**](../Model/\Swagger\Client\Model\ProductsProductInheritedFieldsRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFieldsPermissionsGet**
> \Swagger\Client\Model\ProductsProductFieldsPermissions v1ProductFieldsPermissionsGet($user_group_id)

Read permissions for product fields

Read view, edit, add, delete permissions for product fields.

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

$api_instance = new Swagger\Client\Api\ProductFieldsApi();
$user_group_id = 56; // int | user group ID

try {
    $result = $api_instance->v1ProductFieldsPermissionsGet($user_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFieldsApi->v1ProductFieldsPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_group_id** | **int**| user group ID |

### Return type

[**\Swagger\Client\Model\ProductsProductFieldsPermissions**](../Model/ProductsProductFieldsPermissions.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFieldsPermissionsPatch**
> \Swagger\Client\Model\ResponsesResponse v1ProductFieldsPermissionsPatch($user_group_id, $request)

Set permissions for product fields, permissions are user group based

Set view, edit, add, delete permissions for product fields.  Set field values for the fields you want to (re)configure only.

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

$api_instance = new Swagger\Client\Api\ProductFieldsApi();
$user_group_id = 56; // int | user group ID
$request = new \Swagger\Client\Model\ProductsProductFieldsPermissions(); // \Swagger\Client\Model\ProductsProductFieldsPermissions | request

try {
    $result = $api_instance->v1ProductFieldsPermissionsPatch($user_group_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFieldsApi->v1ProductFieldsPermissionsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_group_id** | **int**| user group ID |
 **request** | [**\Swagger\Client\Model\ProductsProductFieldsPermissions**](../Model/\Swagger\Client\Model\ProductsProductFieldsPermissions.md)| request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

