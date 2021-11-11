# Swagger\Client\ProductFamilyApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductFamilyBulkGetPost**](ProductFamilyApi.md#v1ProductFamilyBulkGetPost) | **POST** /v1/product/family/bulk/get | Get families in bulk
[**v1ProductFamilyBulkPost**](ProductFamilyApi.md#v1ProductFamilyBulkPost) | **POST** /v1/product/family/bulk | Create families in bulk
[**v1ProductFamilyGet**](ProductFamilyApi.md#v1ProductFamilyGet) | **GET** /v1/product/family | Get Families
[**v1ProductFamilyIdPut**](ProductFamilyApi.md#v1ProductFamilyIdPut) | **PUT** /v1/product/family/{id} | Update Family
[**v1ProductFamilyPost**](ProductFamilyApi.md#v1ProductFamilyPost) | **POST** /v1/product/family | Create Family


# **v1ProductFamilyBulkGetPost**
> \Swagger\Client\Model\FamilymodelsBulkReadResponse v1ProductFamilyBulkGetPost($request)

Get families in bulk

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

$api_instance = new Swagger\Client\Api\ProductFamilyApi();
$request = new \Swagger\Client\Model\FamilymodelsBulkReadRequest(); // \Swagger\Client\Model\FamilymodelsBulkReadRequest | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1ProductFamilyBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFamilyApi->v1ProductFamilyBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FamilymodelsBulkReadRequest**](../Model/\Swagger\Client\Model\FamilymodelsBulkReadRequest.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\FamilymodelsBulkReadResponse**](../Model/FamilymodelsBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFamilyBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductFamilyBulkPost($request)

Create families in bulk

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

$api_instance = new Swagger\Client\Api\ProductFamilyApi();
$request = new \Swagger\Client\Model\FamilymodelsBulkCreateRequest(); // \Swagger\Client\Model\FamilymodelsBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1ProductFamilyBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFamilyApi->v1ProductFamilyBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FamilymodelsBulkCreateRequest**](../Model/\Swagger\Client\Model\FamilymodelsBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFamilyGet**
> \Swagger\Client\Model\FamilymodelsResponse[] v1ProductFamilyGet($with_archived, $skip, $take, $sort, $filter)

Get Families

Get Product Family

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

$api_instance = new Swagger\Client\Api\ProductFamilyApi();
$with_archived = true; // bool | show archived families?
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1ProductFamilyGet($with_archived, $skip, $take, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFamilyApi->v1ProductFamilyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_archived** | **bool**| show archived families? |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\FamilymodelsResponse[]**](../Model/FamilymodelsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFamilyIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductFamilyIdPut($name, $id)

Update Family

By updating a product family you can \"delete\" it by archiving

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

$api_instance = new Swagger\Client\Api\ProductFamilyApi();
$name = new \Swagger\Client\Model\RequestsArchivable(); // \Swagger\Client\Model\RequestsArchivable | Name
$id = 56; // int | family ID

try {
    $result = $api_instance->v1ProductFamilyIdPut($name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFamilyApi->v1ProductFamilyIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**\Swagger\Client\Model\RequestsArchivable**](../Model/\Swagger\Client\Model\RequestsArchivable.md)| Name |
 **id** | **int**| family ID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductFamilyPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductFamilyPost($name)

Create Family

Create Product Family

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

$api_instance = new Swagger\Client\Api\ProductFamilyApi();
$name = new \Swagger\Client\Model\RequestsArchivable(); // \Swagger\Client\Model\RequestsArchivable | Name

try {
    $result = $api_instance->v1ProductFamilyPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFamilyApi->v1ProductFamilyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**\Swagger\Client\Model\RequestsArchivable**](../Model/\Swagger\Client\Model\RequestsArchivable.md)| Name |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

