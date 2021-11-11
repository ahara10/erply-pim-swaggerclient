# Swagger\Client\ProductParameterValidationRuleApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductParameterIdValidationRuleGet**](ProductParameterValidationRuleApi.md#v1ProductParameterIdValidationRuleGet) | **GET** /v1/product/parameter/{id}/validation/rule | Get Product Parameter Validation Rules
[**v1ProductParameterValidationRuleIdPut**](ProductParameterValidationRuleApi.md#v1ProductParameterValidationRuleIdPut) | **PUT** /v1/product/parameter/validation/rule/{id} | Update Product Parameter Validation Rule
[**v1ProductParameterValidationRuleIdsDelete**](ProductParameterValidationRuleApi.md#v1ProductParameterValidationRuleIdsDelete) | **DELETE** /v1/product/parameter/validation/rule/{ids} | Delete Product Parameter Validation Rules by IDs
[**v1ProductParameterValidationRulePost**](ProductParameterValidationRuleApi.md#v1ProductParameterValidationRulePost) | **POST** /v1/product/parameter/validation/rule | Create Product Parameter Validation Rule


# **v1ProductParameterIdValidationRuleGet**
> \Swagger\Client\Model\ParametermodelsValidationRuleResponse[] v1ProductParameterIdValidationRuleGet($id, $skip, $take)

Get Product Parameter Validation Rules

Get Product Parameter Validation Rule

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

$api_instance = new Swagger\Client\Api\ProductParameterValidationRuleApi();
$id = 56; // int | parameter ID
$skip = 56; // int | skip n records
$take = 56; // int | amount to take

try {
    $result = $api_instance->v1ProductParameterIdValidationRuleGet($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValidationRuleApi->v1ProductParameterIdValidationRuleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| parameter ID |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| amount to take | [optional]

### Return type

[**\Swagger\Client\Model\ParametermodelsValidationRuleResponse[]**](../Model/ParametermodelsValidationRuleResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterValidationRuleIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterValidationRuleIdPut($rule, $id)

Update Product Parameter Validation Rule

Update Product Parameter Validation Rule

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

$api_instance = new Swagger\Client\Api\ProductParameterValidationRuleApi();
$rule = new \Swagger\Client\Model\ParametermodelsValidationRuleUpdateRequest(); // \Swagger\Client\Model\ParametermodelsValidationRuleUpdateRequest | Validation Rule value
$id = 56; // int | ValidationRule ID

try {
    $result = $api_instance->v1ProductParameterValidationRuleIdPut($rule, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValidationRuleApi->v1ProductParameterValidationRuleIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule** | [**\Swagger\Client\Model\ParametermodelsValidationRuleUpdateRequest**](../Model/\Swagger\Client\Model\ParametermodelsValidationRuleUpdateRequest.md)| Validation Rule value |
 **id** | **int**| ValidationRule ID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterValidationRuleIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterValidationRuleIdsDelete($ids)

Delete Product Parameter Validation Rules by IDs

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

$api_instance = new Swagger\Client\Api\ProductParameterValidationRuleApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited validation rule IDs

try {
    $result = $api_instance->v1ProductParameterValidationRuleIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValidationRuleApi->v1ProductParameterValidationRuleIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited validation rule IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductParameterValidationRulePost**
> \Swagger\Client\Model\ResponsesResponse v1ProductParameterValidationRulePost($rule)

Create Product Parameter Validation Rule

The validation rule types are: REQUIRED,  MIN_LENGTH, MAX_LENGTH, MIN_VALUE, MAX_VALUE, INPUT_CASE, PRECISION Rule \"value\" or whatever to call this: the numeric qualifier that goes hand in hand with that particular rule type. Eg. I specify that my parameter must have at least a minimum number of characters and that minimum number is 5. For type REQUIRED, leave empty. For type MIN_LENGTH, input the required minimum length as an integer. For type MAX_LENGTH, input the required maximum length as an integer. For type MIN_VALUE, input the minimum allowed value as a signed integer or decimal (eg. “0”, “-1”, “25.6”, “-9.999999” etc.) For type MAX_VALUE, input the maximum allowed value as a signed integer or decimal. For type INPUT_CASE, input 0 for \"LOWERCASE\" or 1 for “UPPERCASE”. For type PRECISION, input the number of allowed decimal places as an integer (eg. “0”, “1”, or “2”)

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

$api_instance = new Swagger\Client\Api\ProductParameterValidationRuleApi();
$rule = new \Swagger\Client\Model\ParametermodelsValidationRuleRequest(); // \Swagger\Client\Model\ParametermodelsValidationRuleRequest | Parameter Validation Rule

try {
    $result = $api_instance->v1ProductParameterValidationRulePost($rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductParameterValidationRuleApi->v1ProductParameterValidationRulePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule** | [**\Swagger\Client\Model\ParametermodelsValidationRuleRequest**](../Model/\Swagger\Client\Model\ParametermodelsValidationRuleRequest.md)| Parameter Validation Rule |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

