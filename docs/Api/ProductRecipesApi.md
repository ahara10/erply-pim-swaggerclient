# Swagger\Client\ProductRecipesApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductRecipeBulkGetPost**](ProductRecipesApi.md#v1ProductRecipeBulkGetPost) | **POST** /v1/product/recipe/bulk/get | Get recipes in bulk
[**v1ProductRecipeBulkPost**](ProductRecipesApi.md#v1ProductRecipeBulkPost) | **POST** /v1/product/recipe/bulk | Create recipes in bulk
[**v1ProductRecipeGet**](ProductRecipesApi.md#v1ProductRecipeGet) | **GET** /v1/product/recipe | Get Product Recipes
[**v1ProductRecipeIdsDelete**](ProductRecipesApi.md#v1ProductRecipeIdsDelete) | **DELETE** /v1/product/recipe/{ids} | Delete Product Recipes
[**v1ProductRecipePost**](ProductRecipesApi.md#v1ProductRecipePost) | **POST** /v1/product/recipe | Create a Product Recipe


# **v1ProductRecipeBulkGetPost**
> \Swagger\Client\Model\RecipemodelsBulkReadResponse v1ProductRecipeBulkGetPost($request)

Get recipes in bulk

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

$api_instance = new Swagger\Client\Api\ProductRecipesApi();
$request = new \Swagger\Client\Model\ParammodelsBulkReadRequest(); // \Swagger\Client\Model\ParammodelsBulkReadRequest | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1ProductRecipeBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecipesApi->v1ProductRecipeBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ParammodelsBulkReadRequest**](../Model/\Swagger\Client\Model\ParammodelsBulkReadRequest.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\RecipemodelsBulkReadResponse**](../Model/RecipemodelsBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductRecipeBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductRecipeBulkPost($request)

Create recipes in bulk

each request contains the created resource data

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

$api_instance = new Swagger\Client\Api\ProductRecipesApi();
$request = new \Swagger\Client\Model\RecipemodelsBulkCreateRequest(); // \Swagger\Client\Model\RecipemodelsBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1ProductRecipeBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecipesApi->v1ProductRecipeBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RecipemodelsBulkCreateRequest**](../Model/\Swagger\Client\Model\RecipemodelsBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductRecipeGet**
> \Swagger\Client\Model\RecipemodelsResponse[] v1ProductRecipeGet($product_i_ds, $skip, $take, $sort, $filter, $with_total_count)

Get Product Recipes

Get Product Recipes. Filtering & Sorting by child product objects is not supported.

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

$api_instance = new Swagger\Client\Api\ProductRecipesApi();
$product_i_ds = array(56); // int[] | API client specifies one or more product IDs and wants components for these products. Can contain up to 100 semicolon delimited ids.
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1ProductRecipeGet($product_i_ds, $skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecipesApi->v1ProductRecipeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_i_ds** | [**int[]**](../Model/int.md)| API client specifies one or more product IDs and wants components for these products. Can contain up to 100 semicolon delimited ids. | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\RecipemodelsResponse[]**](../Model/RecipemodelsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductRecipeIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductRecipeIdsDelete($ids)

Delete Product Recipes

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

$api_instance = new Swagger\Client\Api\ProductRecipesApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited recipe IDs

try {
    $result = $api_instance->v1ProductRecipeIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecipesApi->v1ProductRecipeIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited recipe IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductRecipePost**
> \Swagger\Client\Model\ResponsesResponse v1ProductRecipePost($request)

Create a Product Recipe

Components can only be added to a product with type BUNDLE or ASSEMBLY. Amount must be a positive decimal quantity. Products with type BUNDLE and MATRIX are not allowed to be components. (ASSEMBLY products can.) A product is not allowed to be its own component.

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

$api_instance = new Swagger\Client\Api\ProductRecipesApi();
$request = new \Swagger\Client\Model\RecipemodelsRequest(); // \Swagger\Client\Model\RecipemodelsRequest | recipe

try {
    $result = $api_instance->v1ProductRecipePost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecipesApi->v1ProductRecipePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RecipemodelsRequest**](../Model/\Swagger\Client\Model\RecipemodelsRequest.md)| recipe |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

