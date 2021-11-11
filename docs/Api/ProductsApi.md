# Swagger\Client\ProductsApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductBulkGetPost**](ProductsApi.md#v1ProductBulkGetPost) | **POST** /v1/product/bulk/get | Get Products in bulk
[**v1ProductBulkPatch**](ProductsApi.md#v1ProductBulkPatch) | **PATCH** /v1/product/bulk | Update Product field by field in bulk
[**v1ProductBulkPost**](ProductsApi.md#v1ProductBulkPost) | **POST** /v1/product/bulk | Create Products in bulk
[**v1ProductBulkPut**](ProductsApi.md#v1ProductBulkPut) | **PUT** /v1/product/bulk | Update Products in bulk
[**v1ProductCodesGet**](ProductsApi.md#v1ProductCodesGet) | **GET** /v1/product/codes | Get product codes
[**v1ProductCodesPatch**](ProductsApi.md#v1ProductCodesPatch) | **PATCH** /v1/product/codes | Set/Update product codes
[**v1ProductDeletedIdsGet**](ProductsApi.md#v1ProductDeletedIdsGet) | **GET** /v1/product/deleted/ids | Get Deleted Product IDs
[**v1ProductFullTextLookupGet**](ProductsApi.md#v1ProductFullTextLookupGet) | **GET** /v1/product/full-text-lookup | Lookup products
[**v1ProductGet**](ProductsApi.md#v1ProductGet) | **GET** /v1/product | Get Products, Product pictures: CDN API
[**v1ProductIdPatch**](ProductsApi.md#v1ProductIdPatch) | **PATCH** /v1/product/{id} | Update Product field by field
[**v1ProductIdPut**](ProductsApi.md#v1ProductIdPut) | **PUT** /v1/product/{id} | Update Product
[**v1ProductIdsDelete**](ProductsApi.md#v1ProductIdsDelete) | **DELETE** /v1/product/{ids} | Delete Products
[**v1ProductIdsGet**](ProductsApi.md#v1ProductIdsGet) | **GET** /v1/product/{ids} | Get Products in batch
[**v1ProductPost**](ProductsApi.md#v1ProductPost) | **POST** /v1/product | Create a Product, Pictures: CDN API
[**v1ProductRestorePost**](ProductsApi.md#v1ProductRestorePost) | **POST** /v1/product/restore | Restore products by backup ID


# **v1ProductBulkGetPost**
> \Swagger\Client\Model\ProductsBulkReadProductResponse v1ProductBulkGetPost($product)

Get Products in bulk

Get Products in bulk, NB: Filtering & sorting is not supported for the following fields: length, delivery_time, packaging_type, alcohol_registry_number, alcohol_percentage batches, excise_declaration_number, tax_free, is_regular_gift_card, reward_points_not_allowed, non_stock_product, cashier_must_enter_price, labels_not_needed, deposit_fee_amount

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$product = new \Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount(); // \Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1ProductBulkGetPost($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount**](../Model/\Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\ProductsBulkReadProductResponse**](../Model/ProductsBulkReadProductResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductBulkPatch**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductBulkPatch($product)

Update Product field by field in bulk

This API endpoint is to update the product field by field in bulk. You must provide the fields you want to update only

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$product = new \Swagger\Client\Model\ProductsBulkPatchUpdateProductRequest(); // \Swagger\Client\Model\ProductsBulkPatchUpdateProductRequest | products

try {
    $result = $api_instance->v1ProductBulkPatch($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductBulkPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\ProductsBulkPatchUpdateProductRequest**](../Model/\Swagger\Client\Model\ProductsBulkPatchUpdateProductRequest.md)| products |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductBulkPost($products)

Create Products in bulk

Each request body is a product to create. The parameters to generate the product code/code2 automatically is embedded into the request body as the `generateCodeAutomatically` & `generateCode2Automatically` fields. The body can contain up to 100 requests.

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$products = new \Swagger\Client\Model\ProductsBulkCreateProductRequest(); // \Swagger\Client\Model\ProductsBulkCreateProductRequest | Create Product Requests

try {
    $result = $api_instance->v1ProductBulkPost($products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **products** | [**\Swagger\Client\Model\ProductsBulkCreateProductRequest**](../Model/\Swagger\Client\Model\ProductsBulkCreateProductRequest.md)| Create Product Requests |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductBulkPut**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductBulkPut($product)

Update Products in bulk

The resourceId request field should be used for the product id in each request for the bulk update.

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$product = new \Swagger\Client\Model\ProductsBulkUpdateProductRequest(); // \Swagger\Client\Model\ProductsBulkUpdateProductRequest | Products to update with IDs

try {
    $result = $api_instance->v1ProductBulkPut($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductBulkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\ProductsBulkUpdateProductRequest**](../Model/\Swagger\Client\Model\ProductsBulkUpdateProductRequest.md)| Products to update with IDs |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCodesGet**
> \Swagger\Client\Model\ProductsAutoCodes v1ProductCodesGet()

Get product codes

Get product codes

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

$api_instance = new Swagger\Client\Api\ProductsApi();

try {
    $result = $api_instance->v1ProductCodesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ProductsAutoCodes**](../Model/ProductsAutoCodes.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCodesPatch**
> \Swagger\Client\Model\ProductsAutoCodes v1ProductCodesPatch($codes)

Set/Update product codes

Set/Update product codes - pass only the code(s) you need to set/update. Returns updated codes if any were updated

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$codes = new \Swagger\Client\Model\ProductsCreateUpdateAutoCodes(); // \Swagger\Client\Model\ProductsCreateUpdateAutoCodes | codes

try {
    $result = $api_instance->v1ProductCodesPatch($codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductCodesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codes** | [**\Swagger\Client\Model\ProductsCreateUpdateAutoCodes**](../Model/\Swagger\Client\Model\ProductsCreateUpdateAutoCodes.md)| codes |

### Return type

[**\Swagger\Client\Model\ProductsAutoCodes**](../Model/ProductsAutoCodes.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductDeletedIdsGet**
> int[] v1ProductDeletedIdsGet($if_modified_since, $skip, $take)

Get Deleted Product IDs

Get Deleted Product IDs

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$if_modified_since = 56; // int | it' s a `UNIX timestamp`
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductDeletedIdsGet($if_modified_since, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductDeletedIdsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **int**| it&#39; s a &#x60;UNIX timestamp&#x60; | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

**int[]**

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFullTextLookupGet**
> \Swagger\Client\Model\ProductsProductResponse[] v1ProductFullTextLookupGet($lookup_phrase, $take, $sort)

Lookup products

Full text search is a more advanced way to search products

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$lookup_phrase = "lookup_phrase_example"; // string | text to lookup, must be at least 3 characters in length, if quotes are applied a string match is returned
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1ProductFullTextLookupGet($lookup_phrase, $take, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductFullTextLookupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookup_phrase** | **string**| text to lookup, must be at least 3 characters in length, if quotes are applied a string match is returned |
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\ProductsProductResponse[]**](../Model/ProductsProductResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGet**
> \Swagger\Client\Model\ProductsProductResponse[] v1ProductGet($fields, $skip, $take, $sort, $filter, $with_total_count)

Get Products, Product pictures: CDN API

Get Products, NB: Filtering & sorting is not supported for the following fields: length, delivery_time, packaging_type, alcohol_registry_number, alcohol_percentage batches, excise_declaration_number, tax_free, is_regular_gift_card, reward_points_not_allowed, non_stock_product, cashier_must_enter_price, labels_not_needed, deposit_fee_amount

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$fields = "fields_example"; // string | comma or semicolon separated list of fields to fetch
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1ProductGet($fields, $skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| comma or semicolon separated list of fields to fetch | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\ProductsProductResponse[]**](../Model/ProductsProductResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdPatch**
> \Swagger\Client\Model\ResponsesResponse v1ProductIdPatch($id, $product)

Update Product field by field

In this request you pass only the fields you want to update

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$id = 56; // int | product ID
$product = new \Swagger\Client\Model\ProductsPatchUpdateProductRequest(); // \Swagger\Client\Model\ProductsPatchUpdateProductRequest | Product

try {
    $result = $api_instance->v1ProductIdPatch($id, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| product ID |
 **product** | [**\Swagger\Client\Model\ProductsPatchUpdateProductRequest**](../Model/\Swagger\Client\Model\ProductsPatchUpdateProductRequest.md)| Product |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductIdPut($id, $product)

Update Product

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$id = 56; // int | product ID
$product = new \Swagger\Client\Model\ProductsProductRequest(); // \Swagger\Client\Model\ProductsProductRequest | Product

try {
    $result = $api_instance->v1ProductIdPut($id, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| product ID |
 **product** | [**\Swagger\Client\Model\ProductsProductRequest**](../Model/\Swagger\Client\Model\ProductsProductRequest.md)| Product |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductIdsDelete($ids)

Delete Products

Deleting Products will delete all links to assortments and parameter values.

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited product IDs

try {
    $result = $api_instance->v1ProductIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited product IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdsGet**
> \Swagger\Client\Model\ProductsProductResponse[] v1ProductIdsGet($ids, $skip, $take, $sort, $filter, $with_total_count)

Get Products in batch

Get Products in batch

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$ids = "ids_example"; // string | can contain up to 100 semicolon delimited ids.
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1ProductIdsGet($ids, $skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductIdsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| can contain up to 100 semicolon delimited ids. |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\ProductsProductResponse[]**](../Model/ProductsProductResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductPost($product, $generate_code_automatically, $generate_code2_automatically)

Create a Product, Pictures: CDN API

The field descriptions can be found under the model description. For that please click the Model button near the Example Value button under the product (body) parameter description. The group_id is a required field. Code, code2 must be unique or empty. Filtering won't work for the price_with_tax field.

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$product = new \Swagger\Client\Model\ProductsProductRequest(); // \Swagger\Client\Model\ProductsProductRequest | Product
$generate_code_automatically = true; // bool | generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override.
$generate_code2_automatically = true; // bool | generate code2 (EAN/UPC) automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override.

try {
    $result = $api_instance->v1ProductPost($product, $generate_code_automatically, $generate_code2_automatically);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\ProductsProductRequest**](../Model/\Swagger\Client\Model\ProductsProductRequest.md)| Product |
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

# **v1ProductRestorePost**
> \Swagger\Client\Model\ResponsesResponse v1ProductRestorePost($request)

Restore products by backup ID

The back-up ID can be passed to create product, update product & update product type endpoints as well as their bulk variants. Once passed, the system will keep a back-up of the products catalogue. To restore the catalogue, use this endpoint with the backupID. There can be only one back-up in the system.

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

$api_instance = new Swagger\Client\Api\ProductsApi();
$request = new \Swagger\Client\Model\ModelsBackupRequest(); // \Swagger\Client\Model\ModelsBackupRequest | request

try {
    $result = $api_instance->v1ProductRestorePost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v1ProductRestorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ModelsBackupRequest**](../Model/\Swagger\Client\Model\ModelsBackupRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

