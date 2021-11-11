# Swagger\Client\MatrixProductApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1MatrixProductBulkGetPost**](MatrixProductApi.md#v1MatrixProductBulkGetPost) | **POST** /v1/matrix/product/bulk/get | Get matrix variations in bulk
[**v1MatrixProductBulkPost**](MatrixProductApi.md#v1MatrixProductBulkPost) | **POST** /v1/matrix/product/bulk | Create matrix products in bulk
[**v1MatrixProductDimensionsBulkGetPost**](MatrixProductApi.md#v1MatrixProductDimensionsBulkGetPost) | **POST** /v1/matrix/product/dimensions/bulk/get | Read matrix products dimensions in bulk
[**v1MatrixProductDimensionsBulkPut**](MatrixProductApi.md#v1MatrixProductDimensionsBulkPut) | **PUT** /v1/matrix/product/dimensions/bulk | Update matrix products dimensions in bulk
[**v1MatrixProductGet**](MatrixProductApi.md#v1MatrixProductGet) | **GET** /v1/matrix/product | API call for retrieving matrix variations
[**v1MatrixProductIdDimensionsGet**](MatrixProductApi.md#v1MatrixProductIdDimensionsGet) | **GET** /v1/matrix/product/{id}/dimensions | Read Matrix Product Dimensions
[**v1MatrixProductIdDimensionsPut**](MatrixProductApi.md#v1MatrixProductIdDimensionsPut) | **PUT** /v1/matrix/product/{id}/dimensions | Update Matrix Product Dimensions
[**v1MatrixProductPost**](MatrixProductApi.md#v1MatrixProductPost) | **POST** /v1/matrix/product | Create Matrix Product
[**v1MatrixProductWithVariationsGet**](MatrixProductApi.md#v1MatrixProductWithVariationsGet) | **GET** /v1/matrix/product/with-variations | API call for retrieving matrix products with variations


# **v1MatrixProductBulkGetPost**
> \Swagger\Client\Model\MatrixmodelsProductBulkReadResponse v1MatrixProductBulkGetPost($request)

Get matrix variations in bulk

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$request = new \Swagger\Client\Model\MatrixmodelsProductBulkReadRequest(); // \Swagger\Client\Model\MatrixmodelsProductBulkReadRequest | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1MatrixProductBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsProductBulkReadRequest**](../Model/\Swagger\Client\Model\MatrixmodelsProductBulkReadRequest.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\MatrixmodelsProductBulkReadResponse**](../Model/MatrixmodelsProductBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1MatrixProductBulkPost($request)

Create matrix products in bulk

Matrix items have 1...3 dimensions - color, size etc. Matrix dimensions can be defined in Erply backend A dimension has a name (eg. \"Letter Sizes\" or Spring 2013 Colors\") and a list of possible values (eg. S, M, L or Lime, Yellow, Fuchsia). To create a matrix product, first pick the dimension(s) that apply to this particular product, eg \"Waist Size\" and \"Length\" for jeans. A matrix can have up to 3 dimensions. Each request contains the created resource data. The parameters to generate the product code/code2 automatically is embedded into the request body as the `generateCodeAutomatically` & `generateCode2Automatically` fields.

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$request = new \Swagger\Client\Model\MatrixmodelsProductBulkCreateRequest(); // \Swagger\Client\Model\MatrixmodelsProductBulkCreateRequest | bulk request

try {
    $result = $api_instance->v1MatrixProductBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsProductBulkCreateRequest**](../Model/\Swagger\Client\Model\MatrixmodelsProductBulkCreateRequest.md)| bulk request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductDimensionsBulkGetPost**
> \Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse v1MatrixProductDimensionsBulkGetPost($request)

Read matrix products dimensions in bulk

each request contains the matrix product ID

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$request = new \Swagger\Client\Model\MatrixmodelsDimensionsBulkReadRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionsBulkReadRequest | bulk request

try {
    $result = $api_instance->v1MatrixProductDimensionsBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductDimensionsBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsDimensionsBulkReadRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionsBulkReadRequest.md)| bulk request |

### Return type

[**\Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse**](../Model/MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductDimensionsBulkPut**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1MatrixProductDimensionsBulkPut($request)

Update matrix products dimensions in bulk

each request contains the updated resource data

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$request = new \Swagger\Client\Model\MatrixmodelsDimensionsBulkUpdateRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionsBulkUpdateRequest | bulk request

try {
    $result = $api_instance->v1MatrixProductDimensionsBulkPut($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductDimensionsBulkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsDimensionsBulkUpdateRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionsBulkUpdateRequest.md)| bulk request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductGet**
> \Swagger\Client\Model\MatrixmodelsProductVariationJSON[] v1MatrixProductGet($matrix_product_i_ds, $product_i_ds, $skip, $take)

API call for retrieving matrix variations

Products are returned from the request only if they are a matrix variation. As an input there are 2 options. You can provide One or more product IDs, or one or more matrix product IDs.

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$matrix_product_i_ds = array(56); // int[] | Limit: 1500 ids. Expected usage: API client has a matrix product ID and wants to get a complete list of variations. Format: 1 or many comma separated matrix product IDs.
$product_i_ds = array(56); // int[] | Limit: 1500 ids. Expected usage: API client will get a bunch of products from GET /v1/product and will want to fetch variation descriptions for the same items. Format: 1 or many comma separated product IDs.
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1MatrixProductGet($matrix_product_i_ds, $product_i_ds, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matrix_product_i_ds** | [**int[]**](../Model/int.md)| Limit: 1500 ids. Expected usage: API client has a matrix product ID and wants to get a complete list of variations. Format: 1 or many comma separated matrix product IDs. | [optional]
 **product_i_ds** | [**int[]**](../Model/int.md)| Limit: 1500 ids. Expected usage: API client will get a bunch of products from GET /v1/product and will want to fetch variation descriptions for the same items. Format: 1 or many comma separated product IDs. | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\MatrixmodelsProductVariationJSON[]**](../Model/MatrixmodelsProductVariationJSON.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductIdDimensionsGet**
> \Swagger\Client\Model\MatrixmodelsDimensionIDs v1MatrixProductIdDimensionsGet($id, $skip, $take)

Read Matrix Product Dimensions

Matrix items have 1...3 dimensions - color, size etc. Matrix dimensions can be defined in Erply backend A dimension has a name (eg. \"Letter Sizes\" or Spring 2013 Colors\") and a list of possible values (eg. S, M, L or Lime, Yellow, Fuchsia).

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$id = 56; // int | matrix product id
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1MatrixProductIdDimensionsGet($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductIdDimensionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| matrix product id |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\MatrixmodelsDimensionIDs**](../Model/MatrixmodelsDimensionIDs.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductIdDimensionsPut**
> \Swagger\Client\Model\ResponsesResponse v1MatrixProductIdDimensionsPut($id, $product)

Update Matrix Product Dimensions

Matrix items have 1...3 dimensions - color, size etc. Matrix dimensions can be defined in Erply backend. A dimension has a name (eg. \"Letter Sizes\" or Spring 2013 Colors\") and a list of possible values (eg. S, M, L or Lime, Yellow, Fuchsia). To update the matrix product dimensions, first pick the dimension(s) that apply to this particular product, eg \"Waist Size\" and \"Length\" for jeans and pass them to the request body. A matrix can have up to 3 dimensions

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$id = 56; // int | matrix product id
$product = new \Swagger\Client\Model\MatrixmodelsUpdateProductDimensionsRequest(); // \Swagger\Client\Model\MatrixmodelsUpdateProductDimensionsRequest | matrix dimension IDs

try {
    $result = $api_instance->v1MatrixProductIdDimensionsPut($id, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductIdDimensionsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| matrix product id |
 **product** | [**\Swagger\Client\Model\MatrixmodelsUpdateProductDimensionsRequest**](../Model/\Swagger\Client\Model\MatrixmodelsUpdateProductDimensionsRequest.md)| matrix dimension IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductPost**
> \Swagger\Client\Model\ResponsesResponse v1MatrixProductPost($product, $generate_code_automatically, $generate_code2_automatically)

Create Matrix Product

Matrix items have 1...3 dimensions - color, size etc. Matrix dimensions can be defined in Erply backend A dimension has a name (eg. \"Letter Sizes\" or Spring 2013 Colors\") and a list of possible values (eg. S, M, L or Lime, Yellow, Fuchsia). To create a matrix product, first pick the dimension(s) that apply to this particular product, eg \"Waist Size\" and \"Length\" for jeans. A matrix can have up to 3 dimensions.

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$product = new \Swagger\Client\Model\MatrixmodelsCreateProductRequest(); // \Swagger\Client\Model\MatrixmodelsCreateProductRequest | Product info & matrix dimension IDs
$generate_code_automatically = true; // bool | generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override.
$generate_code2_automatically = true; // bool | generate code2 (UPC/EAN automatically based on the preconfigured starting code + user's country or based on a generated code. If the code is not blank in the request, will override.

try {
    $result = $api_instance->v1MatrixProductPost($product, $generate_code_automatically, $generate_code2_automatically);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\MatrixmodelsCreateProductRequest**](../Model/\Swagger\Client\Model\MatrixmodelsCreateProductRequest.md)| Product info &amp; matrix dimension IDs |
 **generate_code_automatically** | **bool**| generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override. |
 **generate_code2_automatically** | **bool**| generate code2 (UPC/EAN automatically based on the preconfigured starting code + user&#39;s country or based on a generated code. If the code is not blank in the request, will override. |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixProductWithVariationsGet**
> \Swagger\Client\Model\MatrixmodelsProductWithVariations[] v1MatrixProductWithVariationsGet($skip, $take, $sort, $filter)

API call for retrieving matrix products with variations

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

$api_instance = new Swagger\Client\Api\MatrixProductApi();
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | Sorting is applied to the matrix products only. The sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | Filtering is applied to the matrix products only. The filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1MatrixProductWithVariationsGet($skip, $take, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixProductApi->v1MatrixProductWithVariationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| Sorting is applied to the matrix products only. The sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| Filtering is applied to the matrix products only. The filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\MatrixmodelsProductWithVariations[]**](../Model/MatrixmodelsProductWithVariations.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

