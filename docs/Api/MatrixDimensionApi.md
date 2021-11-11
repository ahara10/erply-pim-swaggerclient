# Swagger\Client\MatrixDimensionApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1MatrixDimensionBulkGetPost**](MatrixDimensionApi.md#v1MatrixDimensionBulkGetPost) | **POST** /v1/matrix/dimension/bulk/get | Get dimensions in bulk
[**v1MatrixDimensionBulkPost**](MatrixDimensionApi.md#v1MatrixDimensionBulkPost) | **POST** /v1/matrix/dimension/bulk | Create dimensions in bulk
[**v1MatrixDimensionGet**](MatrixDimensionApi.md#v1MatrixDimensionGet) | **GET** /v1/matrix/dimension | Get Matrix Dimensions
[**v1MatrixDimensionIdMovePut**](MatrixDimensionApi.md#v1MatrixDimensionIdMovePut) | **PUT** /v1/matrix/dimension/{id}/move | Move Dimension
[**v1MatrixDimensionIdPut**](MatrixDimensionApi.md#v1MatrixDimensionIdPut) | **PUT** /v1/matrix/dimension/{id} | Update Matrix Dimension
[**v1MatrixDimensionIdsDelete**](MatrixDimensionApi.md#v1MatrixDimensionIdsDelete) | **DELETE** /v1/matrix/dimension/{ids} | Delete Matrix Dimensions
[**v1MatrixDimensionPost**](MatrixDimensionApi.md#v1MatrixDimensionPost) | **POST** /v1/matrix/dimension | Create Matrix Dimension


# **v1MatrixDimensionBulkGetPost**
> \Swagger\Client\Model\MatrixmodelsDimensionBulkReadResponse v1MatrixDimensionBulkGetPost($request)

Get dimensions in bulk

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$request = new \Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount(); // \Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1MatrixDimensionBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount**](../Model/\Swagger\Client\Model\ParammodelsBulkReadRequestNoTotalCount.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\MatrixmodelsDimensionBulkReadResponse**](../Model/MatrixmodelsDimensionBulkReadResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1MatrixDimensionBulkPost($request)

Create dimensions in bulk

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$request = new \Swagger\Client\Model\MatrixmodelsDimensionBulkCreateRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionBulkCreateRequest | bulk create request

try {
    $result = $api_instance->v1MatrixDimensionBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MatrixmodelsDimensionBulkCreateRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionBulkCreateRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionGet**
> \Swagger\Client\Model\MatrixmodelsDimensionResponse[] v1MatrixDimensionGet($skip, $take, $sort, $filter)

Get Matrix Dimensions

Get Matrix Dimension

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$skip = 56; // int | skip n records
$take = 56; // int | amount to take
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1MatrixDimensionGet($skip, $take, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| amount to take | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\MatrixmodelsDimensionResponse[]**](../Model/MatrixmodelsDimensionResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionIdMovePut**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionIdMovePut($id, $move_request)

Move Dimension

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$id = 56; // int | ID
$move_request = new \Swagger\Client\Model\ModelsMoveRequest(); // \Swagger\Client\Model\ModelsMoveRequest | moveRequest

try {
    $result = $api_instance->v1MatrixDimensionIdMovePut($id, $move_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionIdMovePut: ', $e->getMessage(), PHP_EOL;
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

# **v1MatrixDimensionIdPut**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionIdPut($id, $matrix_dimension_request)

Update Matrix Dimension

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$id = 56; // int | dimension id
$matrix_dimension_request = new \Swagger\Client\Model\MatrixmodelsDimensionRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionRequest | DimensionRequest

try {
    $result = $api_instance->v1MatrixDimensionIdPut($id, $matrix_dimension_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| dimension id |
 **matrix_dimension_request** | [**\Swagger\Client\Model\MatrixmodelsDimensionRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionRequest.md)| DimensionRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MatrixDimensionIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionIdsDelete($ids)

Delete Matrix Dimensions

Deleting a matrix dimension is not allowed if there are products using that dimension. Deleting a matrix dimension will also delete all the values of that dimension.

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited IDs

try {
    $result = $api_instance->v1MatrixDimensionIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionIdsDelete: ', $e->getMessage(), PHP_EOL;
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

# **v1MatrixDimensionPost**
> \Swagger\Client\Model\ResponsesResponse v1MatrixDimensionPost($matrix_dimension_request)

Create Matrix Dimension

Create Matrix Dimension

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

$api_instance = new Swagger\Client\Api\MatrixDimensionApi();
$matrix_dimension_request = new \Swagger\Client\Model\MatrixmodelsDimensionRequest(); // \Swagger\Client\Model\MatrixmodelsDimensionRequest | matrixDimensionRequest

try {
    $result = $api_instance->v1MatrixDimensionPost($matrix_dimension_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixDimensionApi->v1MatrixDimensionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matrix_dimension_request** | [**\Swagger\Client\Model\MatrixmodelsDimensionRequest**](../Model/\Swagger\Client\Model\MatrixmodelsDimensionRequest.md)| matrixDimensionRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

