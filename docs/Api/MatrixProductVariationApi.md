# Swagger\Client\MatrixProductVariationApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1MatrixProductIdVariationPost**](MatrixProductVariationApi.md#v1MatrixProductIdVariationPost) | **POST** /v1/matrix/product/{id}/variation | Create Matrix Product Variation
[**v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch**](MatrixProductVariationApi.md#v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch) | **PATCH** /v1/matrix/product/{productID}/variation/{variationID}/dimension-values | Update a matrix product variation&#39;s dimension values
[**v1MatrixProductProductIDVariationVariationIDParentPatch**](MatrixProductVariationApi.md#v1MatrixProductProductIDVariationVariationIDParentPatch) | **PATCH** /v1/matrix/product/{productID}/variation/{variationID}/parent | Change Matrix Product Variation Parent
[**v1MatrixProductVariationBulkPatch**](MatrixProductVariationApi.md#v1MatrixProductVariationBulkPatch) | **PATCH** /v1/matrix/product/variation/bulk | Change variation parents in bulk
[**v1MatrixProductVariationBulkPost**](MatrixProductVariationApi.md#v1MatrixProductVariationBulkPost) | **POST** /v1/matrix/product/variation/bulk | Create variations in bulk


# **v1MatrixProductIdVariationPost**
> \Swagger\Client\Model\ResponsesResponse v1MatrixProductIdVariationPost($id, $product, $generate_code_automatically, $generate_code2_automatically)

Create Matrix Product Variation

Create specific variations (color/size combinations), each one as a separate product.

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

$api_instance = new Swagger\Client\Api\MatrixProductVariationApi();
$id = 56; // int | matrix product ID
$product = new \Swagger\Client\Model\MatrixmodelsCreateVariationRequest(); // \Swagger\Client\Model\MatrixmodelsCreateVariationRequest | Variation product and dimension value IDs
$generate_code_automatically = true; // bool | generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override.
$generate_code2_automatically = true; // bool | generate code2 (EAN/UPC) automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override.

try {
    $result = $api_instance->v1MatrixProductIdVariationPost($id, $product, $generate_code_automatically, $generate_code2_automatically);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductVariationApi->v1MatrixProductIdVariationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| matrix product ID |
 **product** | [**\Swagger\Client\Model\MatrixmodelsCreateVariationRequest**](../Model/\Swagger\Client\Model\MatrixmodelsCreateVariationRequest.md)| Variation product and dimension value IDs |
 **generate_code_automatically** | **bool**| generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override. |
 **generate_code2_automatically** | **bool**| generate code2 (EAN/UPC) automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override. |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch**
> \Swagger\Client\Model\ResponsesResponse v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch($product_id, $variation_id, $product)

Update a matrix product variation's dimension values

Update variation's dimensions values

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

$api_instance = new Swagger\Client\Api\MatrixProductVariationApi();
$product_id = 56; // int | matrix product ID
$variation_id = 56; // int | matrix product variation ID
$product = new \Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest(); // \Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest | dimension value IDs

try {
    $result = $api_instance->v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch($product_id, $variation_id, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductVariationApi->v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| matrix product ID |
 **variation_id** | **int**| matrix product variation ID |
 **product** | [**\Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest**](../Model/\Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest.md)| dimension value IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductProductIDVariationVariationIDParentPatch**
> \Swagger\Client\Model\ResponsesResponse v1MatrixProductProductIDVariationVariationIDParentPatch($product_id, $variation_id, $dimension_value_i_ds)

Change Matrix Product Variation Parent

This endpoint solves 3 problems: 1) the user can modify a variation product and REMOVE it's matrix product (set it to 0), 2) the user can move the variation to different matrix product, in that case attach dimension values (same or new) 3) the user can associate a regular product with a matrix one (turn it into a variation) - in this case attach dimension values

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

$api_instance = new Swagger\Client\Api\MatrixProductVariationApi();
$product_id = 56; // int | matrix product ID
$variation_id = 56; // int | matrix product variation ID
$dimension_value_i_ds = new \Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest(); // \Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest | dimension value IDs - the same as were on the variation, or new

try {
    $result = $api_instance->v1MatrixProductProductIDVariationVariationIDParentPatch($product_id, $variation_id, $dimension_value_i_ds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductVariationApi->v1MatrixProductProductIDVariationVariationIDParentPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| matrix product ID |
 **variation_id** | **int**| matrix product variation ID |
 **dimension_value_i_ds** | [**\Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest**](../Model/\Swagger\Client\Model\MatrixmodelsChangeVariationParentRequest.md)| dimension value IDs - the same as were on the variation, or new |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductVariationBulkPatch**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1MatrixProductVariationBulkPatch($request)

Change variation parents in bulk

each request item contains the updated resource data

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

$api_instance = new Swagger\Client\Api\MatrixProductVariationApi();
$request = new \Swagger\Client\Model\MatrixmodelsVariationBulkChangeParentRequest(); // \Swagger\Client\Model\MatrixmodelsVariationBulkChangeParentRequest | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1MatrixProductVariationBulkPatch($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductVariationApi->v1MatrixProductVariationBulkPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsVariationBulkChangeParentRequest**](../Model/\Swagger\Client\Model\MatrixmodelsVariationBulkChangeParentRequest.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductVariationBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1MatrixProductVariationBulkPost($request)

Create variations in bulk

Each request body is a variation to create. The parameters to generate the product code/code2 automatically is embedded into the request body as the `generateCodeAutomatically` & `generateCode2Automatically` fields.

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

$api_instance = new Swagger\Client\Api\MatrixProductVariationApi();
$request = new \Swagger\Client\Model\MatrixmodelsVariationBulkCreateRequest(); // \Swagger\Client\Model\MatrixmodelsVariationBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1MatrixProductVariationBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductVariationApi->v1MatrixProductVariationBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsVariationBulkCreateRequest**](../Model/\Swagger\Client\Model\MatrixmodelsVariationBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

