# Swagger\Client\ProductCategoryApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductCategoryBulkGetPost**](ProductCategoryApi.md#v1ProductCategoryBulkGetPost) | **POST** /v1/product/category/bulk/get | Get categories in bulk
[**v1ProductCategoryBulkPost**](ProductCategoryApi.md#v1ProductCategoryBulkPost) | **POST** /v1/product/category/bulk | Create categories in bulk
[**v1ProductCategoryGet**](ProductCategoryApi.md#v1ProductCategoryGet) | **GET** /v1/product/category | Get Categories
[**v1ProductCategoryIdMovePut**](ProductCategoryApi.md#v1ProductCategoryIdMovePut) | **PUT** /v1/product/category/{id}/move | Move Product Category
[**v1ProductCategoryIdPut**](ProductCategoryApi.md#v1ProductCategoryIdPut) | **PUT** /v1/product/category/{id} | Update Product Category
[**v1ProductCategoryIdsDelete**](ProductCategoryApi.md#v1ProductCategoryIdsDelete) | **DELETE** /v1/product/category/{ids} | Delete Product Categories
[**v1ProductCategoryIndentedGet**](ProductCategoryApi.md#v1ProductCategoryIndentedGet) | **GET** /v1/product/category/indented | Get Indented List of Categories
[**v1ProductCategoryPost**](ProductCategoryApi.md#v1ProductCategoryPost) | **POST** /v1/product/category | Create Product Category
[**v1ProductCategoryTreeGet**](ProductCategoryApi.md#v1ProductCategoryTreeGet) | **GET** /v1/product/category/tree | Get Tree of product categories


# **v1ProductCategoryBulkGetPost**
> \Swagger\Client\Model\CategorymodelsBulkReadResponse v1ProductCategoryBulkGetPost($request)

Get categories in bulk

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$request = new \Swagger\Client\Model\ParammodelsBulkReadRequest(); // \Swagger\Client\Model\ParammodelsBulkReadRequest | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1ProductCategoryBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ParammodelsBulkReadRequest**](../Model/\Swagger\Client\Model\ParammodelsBulkReadRequest.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\CategorymodelsBulkReadResponse**](../Model/CategorymodelsBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductCategoryBulkPost($request)

Create categories in bulk

each request contains the category data

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$request = new \Swagger\Client\Model\CategorymodelsBulkCreateRequest(); // \Swagger\Client\Model\CategorymodelsBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1ProductCategoryBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CategorymodelsBulkCreateRequest**](../Model/\Swagger\Client\Model\CategorymodelsBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryGet**
> \Swagger\Client\Model\CategorymodelsResponse[] v1ProductCategoryGet($skip, $take, $sort, $filter, $with_total_count)

Get Categories

Get Product Categories

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1ProductCategoryGet($skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\CategorymodelsResponse[]**](../Model/CategorymodelsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryIdMovePut**
> \Swagger\Client\Model\ResponsesResponse v1ProductCategoryIdMovePut($id, $move_request)

Move Product Category

position has to be one of the following:  `lastChild` | `before` | `after`

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$id = 56; // int | Category ID
$move_request = new \Swagger\Client\Model\ModelsMoveRequest(); // \Swagger\Client\Model\ModelsMoveRequest | moveRequest

try {
    $result = $api_instance->v1ProductCategoryIdMovePut($id, $move_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryIdMovePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Category ID |
 **move_request** | [**\Swagger\Client\Model\ModelsMoveRequest**](../Model/\Swagger\Client\Model\ModelsMoveRequest.md)| moveRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductCategoryIdPut($id, $name_with_parent)

Update Product Category

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$id = 56; // int | category ID
$name_with_parent = new \Swagger\Client\Model\CategorymodelsRequest(); // \Swagger\Client\Model\CategorymodelsRequest | Name and ParentID

try {
    $result = $api_instance->v1ProductCategoryIdPut($id, $name_with_parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| category ID |
 **name_with_parent** | [**\Swagger\Client\Model\CategorymodelsRequest**](../Model/\Swagger\Client\Model\CategorymodelsRequest.md)| Name and ParentID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductCategoryIdsDelete($ids)

Delete Product Categories

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited category IDs

try {
    $result = $api_instance->v1ProductCategoryIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited category IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryIndentedGet**
> \Swagger\Client\Model\IndentationResult[] v1ProductCategoryIndentedGet()

Get Indented List of Categories

The result is a indented list of category ids and names sorted by orders and  prefixed by the dash (―) sign if is a parent

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();

try {
    $result = $api_instance->v1ProductCategoryIndentedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryIndentedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\IndentationResult[]**](../Model/IndentationResult.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductCategoryPost($name_with_parent)

Create Product Category

Create Product Category

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$name_with_parent = new \Swagger\Client\Model\CategorymodelsRequest(); // \Swagger\Client\Model\CategorymodelsRequest | Name and ParentID

try {
    $result = $api_instance->v1ProductCategoryPost($name_with_parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_with_parent** | [**\Swagger\Client\Model\CategorymodelsRequest**](../Model/\Swagger\Client\Model\CategorymodelsRequest.md)| Name and ParentID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCategoryTreeGet**
> \Swagger\Client\Model\IndentationCategoryTreeResultSample[] v1ProductCategoryTreeGet($category_fields, $product_fields, $with_products, $language_code, $skip, $take, $with_total_count, $sort, $item_filters, $product_filters)

Get Tree of product categories

Optionally you can get products that belong to each category You must specify the fields to you want to get from the categories and products (models can be found under GET /product/category and GET /product)

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

$api_instance = new Swagger\Client\Api\ProductCategoryApi();
$category_fields = array("category_fields_example"); // string[] | You must specify the fields to you want to get from the categories and products (models can be found under GET /product/group and GET /product)
$product_fields = array("product_fields_example"); // string[] | You must specify the fields to you want to get from the categories and products (models can be found under GET /product/group and GET /product)
$with_products = true; // bool | Optionally you can get products that belong to each category
$language_code = "language_code_example"; // string | Optionally specify the language ISO 639-1 code for the translatable fields. Default is the default language of the account.
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$item_filters = "item_filters_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$product_filters = "product_filters_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1ProductCategoryTreeGet($category_fields, $product_fields, $with_products, $language_code, $skip, $take, $with_total_count, $sort, $item_filters, $product_filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->v1ProductCategoryTreeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_fields** | [**string[]**](../Model/string.md)| You must specify the fields to you want to get from the categories and products (models can be found under GET /product/group and GET /product) | [optional]
 **product_fields** | [**string[]**](../Model/string.md)| You must specify the fields to you want to get from the categories and products (models can be found under GET /product/group and GET /product) | [optional]
 **with_products** | **bool**| Optionally you can get products that belong to each category | [optional]
 **language_code** | **string**| Optionally specify the language ISO 639-1 code for the translatable fields. Default is the default language of the account. | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **item_filters** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **product_filters** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\IndentationCategoryTreeResultSample[]**](../Model/IndentationCategoryTreeResultSample.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

