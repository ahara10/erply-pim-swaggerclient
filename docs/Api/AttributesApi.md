# Swagger\Client\AttributesApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AttributeGet**](AttributesApi.md#v1AttributeGet) | **GET** /v1/attribute | Read Attributes
[**v1AttributeIdsDelete**](AttributesApi.md#v1AttributeIdsDelete) | **DELETE** /v1/attribute/{ids} | Delete Attributes by ID
[**v1AttributePut**](AttributesApi.md#v1AttributePut) | **PUT** /v1/attribute | Attach / Update an Attribute


# **v1AttributeGet**
> \Swagger\Client\Model\ModelsAttributeResponse[] v1AttributeGet($entity_name, $record_i_ds, $skip, $take, $sort, $filter)

Read Attributes

API client specifies record ID or multiple IDs and fetches attributes for all those records. Filtering & Sorting by Value is not supported.

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

$api_instance = new Swagger\Client\Api\AttributesApi();
$entity_name = "entity_name_example"; // string | attributes entity
$record_i_ds = array(56); // int[] | records are the objects that have the attributes. The parameter can contain up to 100 semicolon delimited ids.
$skip = 56; // int | skip n records
$take = 56; // int | amount to take
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1AttributeGet($entity_name, $record_i_ds, $skip, $take, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->v1AttributeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_name** | **string**| attributes entity |
 **record_i_ds** | [**int[]**](../Model/int.md)| records are the objects that have the attributes. The parameter can contain up to 100 semicolon delimited ids. | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| amount to take | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **filter** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAttributeResponse[]**](../Model/ModelsAttributeResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AttributeIdsDelete**
> \Swagger\Client\Model\ResponsesBulkResponse v1AttributeIdsDelete($ids)

Delete Attributes by ID

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

$api_instance = new Swagger\Client\Api\AttributesApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited IDs

try {
    $result = $api_instance->v1AttributeIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->v1AttributeIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited IDs |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponse**](../Model/ResponsesBulkResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AttributePut**
> \Swagger\Client\Model\ResponsesResponse v1AttributePut($request)

Attach / Update an Attribute

To Create an attribute you must leave the id field empty. To Update you must specify the ID field. RecordID refers to the object that the attribute will be attached to. Product / invoice / customer, etc. Name cannot have spaces and is limited to 50 characters. One database record must not have multiple attributes with the same name. 3 `types` are available - int, double, text. Based on the type the `value` should be number of text.

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

$api_instance = new Swagger\Client\Api\AttributesApi();
$request = new \Swagger\Client\Model\ModelsAttributeRequest(); // \Swagger\Client\Model\ModelsAttributeRequest | request

try {
    $result = $api_instance->v1AttributePut($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->v1AttributePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ModelsAttributeRequest**](../Model/\Swagger\Client\Model\ModelsAttributeRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

