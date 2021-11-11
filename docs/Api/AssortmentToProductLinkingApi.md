# Swagger\Client\AssortmentToProductLinkingApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AssortmentIdProductsBulkPost**](AssortmentToProductLinkingApi.md#v1AssortmentIdProductsBulkPost) | **POST** /v1/assortment/{id}/products/bulk | Add Products to Assortment
[**v1AssortmentIdProductsDataGet**](AssortmentToProductLinkingApi.md#v1AssortmentIdProductsDataGet) | **GET** /v1/assortment/{id}/products/data | Get Assortment&#39;s Products Data
[**v1AssortmentIdProductsDeletedGet**](AssortmentToProductLinkingApi.md#v1AssortmentIdProductsDeletedGet) | **GET** /v1/assortment/{id}/products/deleted | Get Deleted Assortment&#39;s Products IDs
[**v1AssortmentIdProductsGet**](AssortmentToProductLinkingApi.md#v1AssortmentIdProductsGet) | **GET** /v1/assortment/{id}/products | Get Assortment&#39;s Products Link Data
[**v1AssortmentIdProductsPost**](AssortmentToProductLinkingApi.md#v1AssortmentIdProductsPost) | **POST** /v1/assortment/{id}/products | Add Product to Assortment
[**v1AssortmentProductsIdPatch**](AssortmentToProductLinkingApi.md#v1AssortmentProductsIdPatch) | **PATCH** /v1/assortment/products/{id} | Update Assortment&#39;s Products Link Data
[**v1AssortmentProductsIdsBulkDelete**](AssortmentToProductLinkingApi.md#v1AssortmentProductsIdsBulkDelete) | **DELETE** /v1/assortment/products/{ids}/bulk | Delete product to assortment links by link IDs
[**v1AssortmentProductsIdsDelete**](AssortmentToProductLinkingApi.md#v1AssortmentProductsIdsDelete) | **DELETE** /v1/assortment/products/{ids} | Delete Assortment Product Links
[**v1AssortmentProductsLinksProductIDsDelete**](AssortmentToProductLinkingApi.md#v1AssortmentProductsLinksProductIDsDelete) | **DELETE** /v1/assortment/products/links/{productIDs} | Delete products from all assortments
[**v1ProductIdAssortmentsGet**](AssortmentToProductLinkingApi.md#v1ProductIdAssortmentsGet) | **GET** /v1/product/{id}/assortments | Get Assortments for Product


# **v1AssortmentIdProductsBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1AssortmentIdProductsBulkPost($assortment_request, $id)

Add Products to Assortment

Add Products to Assortment in bulk.  Status can be ACTIVE, ARCHIVED, NO_LONGER_ORDERED, NOT_FOR_SALE

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$assortment_request = new \Swagger\Client\Model\ModelsAssortmentToProductBulkRequest(); // \Swagger\Client\Model\ModelsAssortmentToProductBulkRequest | bulk add request
$id = 56; // int | Assortment ID

try {
    $result = $api_instance->v1AssortmentIdProductsBulkPost($assortment_request, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentIdProductsBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assortment_request** | [**\Swagger\Client\Model\ModelsAssortmentToProductBulkRequest**](../Model/\Swagger\Client\Model\ModelsAssortmentToProductBulkRequest.md)| bulk add request |
 **id** | **int**| Assortment ID |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentIdProductsDataGet**
> \Swagger\Client\Model\ProductsProductsResponseWithCount[] v1AssortmentIdProductsDataGet($id, $if_modified_since, $skip, $take, $sort, $filter, $with_total_count)

Get Assortment's Products Data

Get Assortment's Products Data with total count. The assortment to product link status is in the `linkStatus` field under each product's data. The `linkStatus` field is filterable and sortable.  Status can be ACTIVE, ARCHIVED, NO_LONGER_ORDERED, NOT_FOR_SALE The `product_name_in_assortment` field is filterable.  just put [['product_name_in_assortment.en','=','bla-bla-bla'],'or','product_name_in_assortment.fr','=','yada-yada] the 'and' operand is not supported for the  `product_name_in_assortment`

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$id = 56; // int | Assortment ID
$if_modified_since = 56; // int | it' s a `UNIX timestamp`
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1AssortmentIdProductsDataGet($id, $if_modified_since, $skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentIdProductsDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Assortment ID |
 **if_modified_since** | **int**| it&#39; s a &#x60;UNIX timestamp&#x60; | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]

### Return type

[**\Swagger\Client\Model\ProductsProductsResponseWithCount[]**](../Model/ProductsProductsResponseWithCount.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentIdProductsDeletedGet**
> \Swagger\Client\Model\ModelsAssortmentToProductLinkResponse[] v1AssortmentIdProductsDeletedGet($id, $if_deleted_since)

Get Deleted Assortment's Products IDs

Input the assortment ID and optionally a header with the unix timestamp, responds with the found product IDs in the IDs field

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$id = 56; // int | Assortment ID
$if_deleted_since = 56; // int | it' s a `UNIX timestamp`

try {
    $result = $api_instance->v1AssortmentIdProductsDeletedGet($id, $if_deleted_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentIdProductsDeletedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Assortment ID |
 **if_deleted_since** | **int**| it&#39; s a &#x60;UNIX timestamp&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAssortmentToProductLinkResponse[]**](../Model/ModelsAssortmentToProductLinkResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentIdProductsGet**
> \Swagger\Client\Model\ModelsAssortmentToProductLinkResponse[] v1AssortmentIdProductsGet($id, $if_modified_since, $skip, $take)

Get Assortment's Products Link Data

Get Assortment's Products Link Data only for active links.  Status can be ACTIVE, ARCHIVED, NO_LONGER_ORDERED, NOT_FOR_SALE

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$id = 56; // int | Assortment ID
$if_modified_since = 56; // int | it' s a `UNIX timestamp`
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1AssortmentIdProductsGet($id, $if_modified_since, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentIdProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Assortment ID |
 **if_modified_since** | **int**| it&#39; s a &#x60;UNIX timestamp&#x60; | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAssortmentToProductLinkResponse[]**](../Model/ModelsAssortmentToProductLinkResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentIdProductsPost**
> \Swagger\Client\Model\ResponsesResponse v1AssortmentIdProductsPost($id, $assortment_request)

Add Product to Assortment

Add Product to Assortment. Status can be ACTIVE, ARCHIVED, NO_LONGER_ORDERED, NOT_FOR_SALE

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$id = 56; // int | Assortment ID
$assortment_request = new \Swagger\Client\Model\ModelsAssortmentToProductRequest(); // \Swagger\Client\Model\ModelsAssortmentToProductRequest | product ID, link status, product name

try {
    $result = $api_instance->v1AssortmentIdProductsPost($id, $assortment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentIdProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Assortment ID |
 **assortment_request** | [**\Swagger\Client\Model\ModelsAssortmentToProductRequest**](../Model/\Swagger\Client\Model\ModelsAssortmentToProductRequest.md)| product ID, link status, product name |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentProductsIdPatch**
> \Swagger\Client\Model\ResponsesResponse v1AssortmentProductsIdPatch($id, $link)

Update Assortment's Products Link Data

Status can be ACTIVE, ARCHIVED, NO_LONGER_ORDERED, NOT_FOR_SALE

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$id = 56; // int | link ID
$link = new \Swagger\Client\Model\ModelsAssortmentToProductUpdateRequest(); // \Swagger\Client\Model\ModelsAssortmentToProductUpdateRequest | link status is mandatory, product name translations only if you want to update some language name

try {
    $result = $api_instance->v1AssortmentProductsIdPatch($id, $link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentProductsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| link ID |
 **link** | [**\Swagger\Client\Model\ModelsAssortmentToProductUpdateRequest**](../Model/\Swagger\Client\Model\ModelsAssortmentToProductUpdateRequest.md)| link status is mandatory, product name translations only if you want to update some language name |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentProductsIdsBulkDelete**
> \Swagger\Client\Model\ResponsesResponse v1AssortmentProductsIdsBulkDelete($ids)

Delete product to assortment links by link IDs

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$ids = "ids_example"; // string | can contain up to 100 semicolon delimited link IDs.

try {
    $result = $api_instance->v1AssortmentProductsIdsBulkDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentProductsIdsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| can contain up to 100 semicolon delimited link IDs. |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AssortmentProductsIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1AssortmentProductsIdsDelete($ids)

Delete Assortment Product Links

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited link IDs

try {
    $result = $api_instance->v1AssortmentProductsIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentProductsIdsDelete: ', $e->getMessage(), PHP_EOL;
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

# **v1AssortmentProductsLinksProductIDsDelete**
> \Swagger\Client\Model\ResponsesResponse v1AssortmentProductsLinksProductIDsDelete($product_i_ds)

Delete products from all assortments

Delete products from all assortments providing product IDs responds with link IDs that were deleted

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$product_i_ds = "product_i_ds_example"; // string | can contain up to 100 semicolon delimited product IDs.

try {
    $result = $api_instance->v1AssortmentProductsLinksProductIDsDelete($product_i_ds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1AssortmentProductsLinksProductIDsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_i_ds** | **string**| can contain up to 100 semicolon delimited product IDs. |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdAssortmentsGet**
> \Swagger\Client\Model\ModelsAssortmentToProductLinkResponse[] v1ProductIdAssortmentsGet($id, $skip, $take)

Get Assortments for Product

Get Assortments for Product

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

$api_instance = new Swagger\Client\Api\AssortmentToProductLinkingApi();
$id = 56; // int | product ID
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductIdAssortmentsGet($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentToProductLinkingApi->v1ProductIdAssortmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| product ID |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAssortmentToProductLinkResponse[]**](../Model/ModelsAssortmentToProductLinkResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

