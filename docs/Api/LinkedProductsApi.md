# Swagger\Client\LinkedProductsApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductLinkedProductsBulkGetPost**](LinkedProductsApi.md#v1ProductLinkedProductsBulkGetPost) | **POST** /v1/product/linked-products/bulk/get | Read all products linked products and the link types
[**v1ProductLinkedProductsBulkPost**](LinkedProductsApi.md#v1ProductLinkedProductsBulkPost) | **POST** /v1/product/linked-products/bulk | Create product links in bulk
[**v1ProductLinkedProductsIdPut**](LinkedProductsApi.md#v1ProductLinkedProductsIdPut) | **PUT** /v1/product/linked-products/{id} | Update a link between 2 products
[**v1ProductLinkedProductsIdsDelete**](LinkedProductsApi.md#v1ProductLinkedProductsIdsDelete) | **DELETE** /v1/product/linked-products/{ids} | Delete links between 2 products
[**v1ProductLinkedProductsPost**](LinkedProductsApi.md#v1ProductLinkedProductsPost) | **POST** /v1/product/linked-products | Link 2 products for cross-sell or substitute purposes
[**v1ProductProductIDLinkedProductsGet**](LinkedProductsApi.md#v1ProductProductIDLinkedProductsGet) | **GET** /v1/product/{productID}/linked-products | Read all product&#39;s linked products and the link types


# **v1ProductLinkedProductsBulkGetPost**
> \Swagger\Client\Model\ProductsBulkReadResponse[] v1ProductLinkedProductsBulkGetPost($request)

Read all products linked products and the link types

Each product can have zero or more substitute products (items that the cashier could offer as alternatives if the original is out of stock) and zero or more cross-sell products (items that are often sold along the main item). link type (values: cross-sell or substitute)

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

$api_instance = new Swagger\Client\Api\LinkedProductsApi();
$request = new \Swagger\Client\Model\ProductsBulkReadRequest(); // \Swagger\Client\Model\ProductsBulkReadRequest | request

try {
    $result = $api_instance->v1ProductLinkedProductsBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedProductsApi->v1ProductLinkedProductsBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProductsBulkReadRequest**](../Model/\Swagger\Client\Model\ProductsBulkReadRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ProductsBulkReadResponse[]**](../Model/ProductsBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductLinkedProductsBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductLinkedProductsBulkPost($request)

Create product links in bulk

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

$api_instance = new Swagger\Client\Api\LinkedProductsApi();
$request = new \Swagger\Client\Model\LinkedproductmodelsBulkCreateRequest(); // \Swagger\Client\Model\LinkedproductmodelsBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1ProductLinkedProductsBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedProductsApi->v1ProductLinkedProductsBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\LinkedproductmodelsBulkCreateRequest**](../Model/\Swagger\Client\Model\LinkedproductmodelsBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductLinkedProductsIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductLinkedProductsIdPut($id, $update_request)

Update a link between 2 products

Each product can have zero or more substitute products (items that the cashier could offer as alternatives if the original is out of stock) and zero or more cross-sell products (items that are often sold along the main item).

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

$api_instance = new Swagger\Client\Api\LinkedProductsApi();
$id = 56; // int | link ID
$update_request = new \Swagger\Client\Model\LinkedproductmodelsUpdateRequest(); // \Swagger\Client\Model\LinkedproductmodelsUpdateRequest | update request

try {
    $result = $api_instance->v1ProductLinkedProductsIdPut($id, $update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedProductsApi->v1ProductLinkedProductsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| link ID |
 **update_request** | [**\Swagger\Client\Model\LinkedproductmodelsUpdateRequest**](../Model/\Swagger\Client\Model\LinkedproductmodelsUpdateRequest.md)| update request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductLinkedProductsIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductLinkedProductsIdsDelete($ids)

Delete links between 2 products

Each product can have zero or more substitute products (items that the cashier could offer as alternatives if the original is out of stock) and zero or more cross-sell products (items that are often sold along the main item).

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

$api_instance = new Swagger\Client\Api\LinkedProductsApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited link IDs

try {
    $result = $api_instance->v1ProductLinkedProductsIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedProductsApi->v1ProductLinkedProductsIdsDelete: ', $e->getMessage(), PHP_EOL;
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

# **v1ProductLinkedProductsPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductLinkedProductsPost($create_request)

Link 2 products for cross-sell or substitute purposes

Each product can have zero or more substitute products (items that the cashier could offer as alternatives if the original is out of stock) and zero or more cross-sell products (items that are often sold along the main item).

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

$api_instance = new Swagger\Client\Api\LinkedProductsApi();
$create_request = new \Swagger\Client\Model\LinkedproductmodelsCreateRequest(); // \Swagger\Client\Model\LinkedproductmodelsCreateRequest | link ID and type of the link `cross-sell | substitute`

try {
    $result = $api_instance->v1ProductLinkedProductsPost($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedProductsApi->v1ProductLinkedProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\LinkedproductmodelsCreateRequest**](../Model/\Swagger\Client\Model\LinkedproductmodelsCreateRequest.md)| link ID and type of the link &#x60;cross-sell | substitute&#x60; |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductProductIDLinkedProductsGet**
> \Swagger\Client\Model\LinkedproductmodelsResponse[] v1ProductProductIDLinkedProductsGet($product_id, $type, $skip, $take)

Read all product's linked products and the link types

Each product can have zero or more substitute products (items that the cashier could offer as alternatives if the original is out of stock) and zero or more cross-sell products (items that are often sold along the main item).

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

$api_instance = new Swagger\Client\Api\LinkedProductsApi();
$product_id = 56; // int | product ID
$type = "type_example"; // string | link type (values: `cross-sell` or `substitute`)
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductProductIDLinkedProductsGet($product_id, $type, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedProductsApi->v1ProductProductIDLinkedProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| product ID |
 **type** | **string**| link type (values: &#x60;cross-sell&#x60; or &#x60;substitute&#x60;) |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\LinkedproductmodelsResponse[]**](../Model/LinkedproductmodelsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

