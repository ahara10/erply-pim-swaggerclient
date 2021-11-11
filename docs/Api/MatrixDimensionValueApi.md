# Swagger\Client\MatrixDimensionValueApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1MatrixDimensionValueBulkGetPost**](MatrixDimensionValueApi.md#v1MatrixDimensionValueBulkGetPost) | **POST** /v1/matrix/dimension/value/bulk/get | Get dimension values in bulk
[**v1MatrixDimensionValueBulkPost**](MatrixDimensionValueApi.md#v1MatrixDimensionValueBulkPost) | **POST** /v1/matrix/dimension/value/bulk | Create dimension values in bulk
[**v1MatrixDimensionValueGet**](MatrixDimensionValueApi.md#v1MatrixDimensionValueGet) | **GET** /v1/matrix/dimension/value | Get Matrix Dimension Values
[**v1MatrixDimensionValueIdMovePut**](MatrixDimensionValueApi.md#v1MatrixDimensionValueIdMovePut) | **PUT** /v1/matrix/dimension/value/{id}/move | Move Dimension Value
[**v1MatrixDimensionValueIdPut**](MatrixDimensionValueApi.md#v1MatrixDimensionValueIdPut) | **PUT** /v1/matrix/dimension/value/{id} | Update Matrix Dimension Value
[**v1MatrixDimensionValueIdsDelete**](MatrixDimensionValueApi.md#v1MatrixDimensionValueIdsDelete) | **DELETE** /v1/matrix/dimension/value/{ids} | Delete Matrix Dimension Values if not used by any active product
[**v1MatrixDimensionValuePost**](MatrixDimensionValueApi.md#v1MatrixDimensionValuePost) | **POST** /v1/matrix/dimension/value | Create Matrix Dimension Value


# **v1MatrixDimensionValueBulkGetPost**
> \Swagger\Client\Model\MatrixmodelsDimensionValueBulkReadResponse v1MatrixDimensionValueBulkGetPost($request)

Get dimension values in bulk

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$request = new \Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount(); // \Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1MatrixDimensionValueBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValueBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount**](../Model/\Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\MatrixmodelsDimensionValueBulkReadResponse**](../Model/MatrixmodelsDimensionValueBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionValueBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1MatrixDimensionValueBulkPost($request)

Create dimension values in bulk

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$request = new \Swagger\Client\Model\MatrixmodelsDimensionValueBulkCreateRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionValueBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1MatrixDimensionValueBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValueBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsDimensionValueBulkCreateRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionValueBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionValueGet**
> \Swagger\Client\Model\MatrixmodelsDimensionValueResponse[] v1MatrixDimensionValueGet($skip, $take, $sort, $filter, $with_total_count)

Get Matrix Dimension Values

Get Matrix Dimension Value

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1MatrixDimensionValueGet($skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValueGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\MatrixmodelsDimensionValueResponse[]**](../Model/MatrixmodelsDimensionValueResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionValueIdMovePut**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionValueIdMovePut($id, $move_request)

Move Dimension Value

position has to be one of the following:  `before` | `after`

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$id = 56; // int | ID
$move_request = new \Swagger\Client\Model\ModelsMoveRequest(); // \Swagger\Client\Model\ModelsMoveRequest | moveRequest

try {
    $result = $api_instance->v1MatrixDimensionValueIdMovePut($id, $move_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValueIdMovePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **move_request** | [**\Swagger\Client\Model\ModelsMoveRequest**](../Model/\Swagger\Client\Model\ModelsMoveRequest.md)| moveRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionValueIdPut**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionValueIdPut($id, $dimension_value_request)

Update Matrix Dimension Value

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$id = 56; // int | dimension value ID
$dimension_value_request = new \Swagger\Client\Model\MatrixmodelsDimensionValueUpdateRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionValueUpdateRequest | DimensionValueRequest

try {
    $result = $api_instance->v1MatrixDimensionValueIdPut($id, $dimension_value_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValueIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| dimension value ID |
 **dimension_value_request** | [**\Swagger\Client\Model\MatrixmodelsDimensionValueUpdateRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionValueUpdateRequest.md)| DimensionValueRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionValueIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionValueIdsDelete($ids)

Delete Matrix Dimension Values if not used by any active product

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited IDs

try {
    $result = $api_instance->v1MatrixDimensionValueIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValueIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionValuePost**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionValuePost($matrix_dimension_value_request)

Create Matrix Dimension Value

Create Matrix Dimension Value

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

$api_instance = new Swagger\Client\Api\MatrixDimensionValueApi();
$matrix_dimension_value_request = new \Swagger\Client\Model\MatrixmodelsDimensionValueRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionValueRequest | matrixDimensionValueRequest

try {
    $result = $api_instance->v1MatrixDimensionValuePost($matrix_dimension_value_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionValueApi->v1MatrixDimensionValuePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matrix_dimension_value_request** | [**\Swagger\Client\Model\MatrixmodelsDimensionValueRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionValueRequest.md)| matrixDimensionValueRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

