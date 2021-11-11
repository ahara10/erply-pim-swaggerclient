# Swagger\Client\ProductGroupApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductGroupBulkGetPost**](ProductGroupApi.md#v1ProductGroupBulkGetPost) | **POST** /v1/product/group/bulk/get | Get groups in bulk
[**v1ProductGroupBulkPost**](ProductGroupApi.md#v1ProductGroupBulkPost) | **POST** /v1/product/group/bulk | Create groups in bulk
[**v1ProductGroupExternalIdsGet**](ProductGroupApi.md#v1ProductGroupExternalIdsGet) | **GET** /v1/product/group/external-ids | Read external group IDs of Product Groups
[**v1ProductGroupExternalIdsGroupIdPatch**](ProductGroupApi.md#v1ProductGroupExternalIdsGroupIdPatch) | **PATCH** /v1/product/group/external-ids/{groupId} | Update external group ID of a Product Group
[**v1ProductGroupExternalIdsGroupIdPost**](ProductGroupApi.md#v1ProductGroupExternalIdsGroupIdPost) | **POST** /v1/product/group/external-ids/{groupId} | Attach external group ID to a Product Group
[**v1ProductGroupExternalIdsGroupIdsDelete**](ProductGroupApi.md#v1ProductGroupExternalIdsGroupIdsDelete) | **DELETE** /v1/product/group/external-ids/{groupIds} | Delete external group IDs of Product Groups
[**v1ProductGroupGet**](ProductGroupApi.md#v1ProductGroupGet) | **GET** /v1/product/group | Get Groups
[**v1ProductGroupGroupIdLocationTaxWarehouseIdDelete**](ProductGroupApi.md#v1ProductGroupGroupIdLocationTaxWarehouseIdDelete) | **DELETE** /v1/product/group/{groupId}/location-tax/{warehouseId} | Delete Location Specific Tax From Product Group
[**v1ProductGroupIdLocationTaxPatch**](ProductGroupApi.md#v1ProductGroupIdLocationTaxPatch) | **PATCH** /v1/product/group/{id}/location-tax | Add Location Specific Tax
[**v1ProductGroupIdMovePut**](ProductGroupApi.md#v1ProductGroupIdMovePut) | **PUT** /v1/product/group/{id}/move | Move Product Group
[**v1ProductGroupIdPut**](ProductGroupApi.md#v1ProductGroupIdPut) | **PUT** /v1/product/group/{id} | Update Product Group
[**v1ProductGroupIdsDelete**](ProductGroupApi.md#v1ProductGroupIdsDelete) | **DELETE** /v1/product/group/{ids} | Delete Product Groups
[**v1ProductGroupIndentedGet**](ProductGroupApi.md#v1ProductGroupIndentedGet) | **GET** /v1/product/group/indented | Get Indented List of Groups
[**v1ProductGroupPost**](ProductGroupApi.md#v1ProductGroupPost) | **POST** /v1/product/group | Create Product Group
[**v1ProductGroupTreeGet**](ProductGroupApi.md#v1ProductGroupTreeGet) | **GET** /v1/product/group/tree | Get Tree of product groups
[**v1ProductIdAdditionalGroupsPut**](ProductGroupApi.md#v1ProductIdAdditionalGroupsPut) | **PUT** /v1/product/{id}/additional-groups | Attach Additional Groups to Product
[**v1ProductIdsAdditionalGroupsGet**](ProductGroupApi.md#v1ProductIdsAdditionalGroupsGet) | **GET** /v1/product/{ids}/additional-groups | Get Product&#39;s Additional Groups


# **v1ProductGroupBulkGetPost**
> \Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse v1ProductGroupBulkGetPost($request)

Get groups in bulk

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$request = new \Swagger\Client\Model\ParammodelsBulkReadRequest(); // \Swagger\Client\Model\ParammodelsBulkReadRequest | requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately.

try {
    $result = $api_instance->v1ProductGroupBulkGetPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupBulkGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ParammodelsBulkReadRequest**](../Model/\Swagger\Client\Model\ParammodelsBulkReadRequest.md)| requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. |

### Return type

[**\Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse**](../Model/GroupmodelsBulkReadGroupsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupBulkPost**
> \Swagger\Client\Model\ResponsesBulkResponseWithResults v1ProductGroupBulkPost($request)

Create groups in bulk

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$request = new \Swagger\Client\Model\GroupmodelsBulkCreateGroupsRequest(); // \Swagger\Client\Model\GroupmodelsBulkCreateGroupsRequest | bulk create request

try {
    $result = $api_instance->v1ProductGroupBulkPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\GroupmodelsBulkCreateGroupsRequest**](../Model/\Swagger\Client\Model\GroupmodelsBulkCreateGroupsRequest.md)| bulk create request |

### Return type

[**\Swagger\Client\Model\ResponsesBulkResponseWithResults**](../Model/ResponsesBulkResponseWithResults.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupExternalIdsGet**
> \Swagger\Client\Model\GroupmodelsExternalIDResponse[] v1ProductGroupExternalIdsGet($external_i_ds, $group_i_ds, $integration_name, $skip, $take)

Read external group IDs of Product Groups

External IDs are the ones from different commerce systems. This endpoint enables the API user to read the external IDs of the Erply product groups.

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$external_i_ds = array("external_i_ds_example"); // string[] | up to 100 external IDs. Cannot be provided with the product group ID parameter
$group_i_ds = array("group_i_ds_example"); // string[] | up to 100 product group IDs. Cannot be provided with the external ID parameter
$integration_name = "integration_name_example"; // string | integration name
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductGroupExternalIdsGet($external_i_ds, $group_i_ds, $integration_name, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupExternalIdsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_i_ds** | [**string[]**](../Model/string.md)| up to 100 external IDs. Cannot be provided with the product group ID parameter | [optional]
 **group_i_ds** | [**string[]**](../Model/string.md)| up to 100 product group IDs. Cannot be provided with the external ID parameter | [optional]
 **integration_name** | **string**| integration name | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\GroupmodelsExternalIDResponse[]**](../Model/GroupmodelsExternalIDResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupExternalIdsGroupIdPatch**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupExternalIdsGroupIdPatch($external_id_with_integration_name, $group_id)

Update external group ID of a Product Group

External IDs are the ones from different commerce systems that have to be stored in ERPLY This call allows to update the external ID using the integration name and group ID.

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$external_id_with_integration_name = new \Swagger\Client\Model\GroupmodelsExternalIDRequest(); // \Swagger\Client\Model\GroupmodelsExternalIDRequest | external ID with the integration name
$group_id = 56; // int | Group ID

try {
    $result = $api_instance->v1ProductGroupExternalIdsGroupIdPatch($external_id_with_integration_name, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupExternalIdsGroupIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id_with_integration_name** | [**\Swagger\Client\Model\GroupmodelsExternalIDRequest**](../Model/\Swagger\Client\Model\GroupmodelsExternalIDRequest.md)| external ID with the integration name |
 **group_id** | **int**| Group ID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupExternalIdsGroupIdPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupExternalIdsGroupIdPost($external_id_with_integration_name, $group_id)

Attach external group ID to a Product Group

External IDs are the ones from different commerce systems. This endpoint enables the API user to attach the external IDs to the Erply product groups.

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$external_id_with_integration_name = new \Swagger\Client\Model\GroupmodelsExternalIDRequest(); // \Swagger\Client\Model\GroupmodelsExternalIDRequest | external ID with the integration name
$group_id = 56; // int | Group ID

try {
    $result = $api_instance->v1ProductGroupExternalIdsGroupIdPost($external_id_with_integration_name, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupExternalIdsGroupIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id_with_integration_name** | [**\Swagger\Client\Model\GroupmodelsExternalIDRequest**](../Model/\Swagger\Client\Model\GroupmodelsExternalIDRequest.md)| external ID with the integration name |
 **group_id** | **int**| Group ID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupExternalIdsGroupIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupExternalIdsGroupIdsDelete($group_ids, $integration_name)

Delete external group IDs of Product Groups

Requesting the endpoint will delete all the external IDs of selected product groups. With the integrationName parameter you can delete only integration-specific external IDs.

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$group_ids = "group_ids_example"; // string | up to 100 semicolon delimited Group IDs
$integration_name = "integration_name_example"; // string | Specify the integration name to delete the external ID associated with the integration only.

try {
    $result = $api_instance->v1ProductGroupExternalIdsGroupIdsDelete($group_ids, $integration_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupExternalIdsGroupIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_ids** | **string**| up to 100 semicolon delimited Group IDs |
 **integration_name** | **string**| Specify the integration name to delete the external ID associated with the integration only. | [optional]

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupGet**
> \Swagger\Client\Model\GroupmodelsGroupResponse[] v1ProductGroupGet($skip, $take, $sort, $filter, $with_total_count)

Get Groups

Get Product Groups. The fields `quick_books_debit_account`, `quick_books_credit_account`, `reward_points` and `location_tax_rates` will be on the object only if there are values for them

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$filter = "filter_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header

try {
    $result = $api_instance->v1ProductGroupGet($skip, $take, $sort, $filter, $with_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GroupmodelsGroupResponse[]**](../Model/GroupmodelsGroupResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupGroupIdLocationTaxWarehouseIdDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupGroupIdLocationTaxWarehouseIdDelete($group_id, $warehouse_id)

Delete Location Specific Tax From Product Group

Delete Location Specific Tax To Product Group

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$group_id = "group_id_example"; // string | group ID
$warehouse_id = "warehouse_id_example"; // string | warehouse ID

try {
    $result = $api_instance->v1ProductGroupGroupIdLocationTaxWarehouseIdDelete($group_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupGroupIdLocationTaxWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| group ID |
 **warehouse_id** | **string**| warehouse ID |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupIdLocationTaxPatch**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupIdLocationTaxPatch($id, $request)

Add Location Specific Tax

Add Location Specific Tax To Product Group

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$id = "id_example"; // string | group ID
$request = new \Swagger\Client\Model\GroupmodelsLocationSpecificTaxRequest(); // \Swagger\Client\Model\GroupmodelsLocationSpecificTaxRequest | productGroupRequest

try {
    $result = $api_instance->v1ProductGroupIdLocationTaxPatch($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupIdLocationTaxPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| group ID |
 **request** | [**\Swagger\Client\Model\GroupmodelsLocationSpecificTaxRequest**](../Model/\Swagger\Client\Model\GroupmodelsLocationSpecificTaxRequest.md)| productGroupRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupIdMovePut**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupIdMovePut($id, $move_request)

Move Product Group

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$id = 56; // int | Group ID
$move_request = new \Swagger\Client\Model\ModelsMoveRequest(); // \Swagger\Client\Model\ModelsMoveRequest | moveRequest

try {
    $result = $api_instance->v1ProductGroupIdMovePut($id, $move_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupIdMovePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Group ID |
 **move_request** | [**\Swagger\Client\Model\ModelsMoveRequest**](../Model/\Swagger\Client\Model\ModelsMoveRequest.md)| moveRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupIdPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupIdPut($id, $product_group_request)

Update Product Group

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$id = 56; // int | Group ID
$product_group_request = new \Swagger\Client\Model\GroupmodelsGroupRequest(); // \Swagger\Client\Model\GroupmodelsGroupRequest | productGroupRequest

try {
    $result = $api_instance->v1ProductGroupIdPut($id, $product_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Group ID |
 **product_group_request** | [**\Swagger\Client\Model\GroupmodelsGroupRequest**](../Model/\Swagger\Client\Model\GroupmodelsGroupRequest.md)| productGroupRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupIdsDelete**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupIdsDelete($ids)

Delete Product Groups

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited Group IDs

try {
    $result = $api_instance->v1ProductGroupIdsDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited Group IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupIndentedGet**
> \Swagger\Client\Model\IndentationResult[] v1ProductGroupIndentedGet()

Get Indented List of Groups

The result is a indented list of group ids and names sorted by orders and prefixed by the dash (―) sign if is a parent

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();

try {
    $result = $api_instance->v1ProductGroupIndentedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupIndentedGet: ', $e->getMessage(), PHP_EOL;
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

# **v1ProductGroupPost**
> \Swagger\Client\Model\ResponsesResponse v1ProductGroupPost($product_group_request)

Create Product Group

Create Product Group

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$product_group_request = new \Swagger\Client\Model\GroupmodelsGroupRequest(); // \Swagger\Client\Model\GroupmodelsGroupRequest | productGroupRequest

try {
    $result = $api_instance->v1ProductGroupPost($product_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_group_request** | [**\Swagger\Client\Model\GroupmodelsGroupRequest**](../Model/\Swagger\Client\Model\GroupmodelsGroupRequest.md)| productGroupRequest |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductGroupTreeGet**
> \Swagger\Client\Model\IndentationGroupTreeResultSample[] v1ProductGroupTreeGet($group_fields, $product_fields, $with_products, $language_code, $skip, $take, $with_total_count, $sort, $item_filters, $product_filters)

Get Tree of product groups

Optionally you can get products that belong to each group You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product)

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$group_fields = array("group_fields_example"); // string[] | You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product)
$product_fields = array("product_fields_example"); // string[] | You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product)
$with_products = true; // bool | Optionally you can get products that belong to each group
$language_code = "language_code_example"; // string | Optionally specify the language ISO 639-1 code for the translatable fields. Default is the default language of the account.
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000
$with_total_count = true; // bool | optionally return total number of records in the X-Total-Count response header
$sort = "sort_example"; // string | the sort parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$item_filters = "item_filters_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation
$product_filters = "product_filters_example"; // string | the filter parameter is explained in the `Filtering & Sorting` section on top of the Swagger documentation

try {
    $result = $api_instance->v1ProductGroupTreeGet($group_fields, $product_fields, $with_products, $language_code, $skip, $take, $with_total_count, $sort, $item_filters, $product_filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductGroupTreeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_fields** | [**string[]**](../Model/string.md)| You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product) | [optional]
 **product_fields** | [**string[]**](../Model/string.md)| You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product) | [optional]
 **with_products** | **bool**| Optionally you can get products that belong to each group | [optional]
 **language_code** | **string**| Optionally specify the language ISO 639-1 code for the translatable fields. Default is the default language of the account. | [optional]
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]
 **with_total_count** | **bool**| optionally return total number of records in the X-Total-Count response header | [optional]
 **sort** | **string**| the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **item_filters** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]
 **product_filters** | **string**| the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation | [optional]

### Return type

[**\Swagger\Client\Model\IndentationGroupTreeResultSample[]**](../Model/IndentationGroupTreeResultSample.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdAdditionalGroupsPut**
> \Swagger\Client\Model\ResponsesResponse v1ProductIdAdditionalGroupsPut($id, $product)

Attach Additional Groups to Product

this request allows you to attach or delete additional groups to the product. To delete just pass an empty IDs array

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$id = 56; // int | product ID
$product = new \Swagger\Client\Model\GroupmodelsAdditionalGroupRequest(); // \Swagger\Client\Model\GroupmodelsAdditionalGroupRequest | group IDs

try {
    $result = $api_instance->v1ProductIdAdditionalGroupsPut($id, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductIdAdditionalGroupsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| product ID |
 **product** | [**\Swagger\Client\Model\GroupmodelsAdditionalGroupRequest**](../Model/\Swagger\Client\Model\GroupmodelsAdditionalGroupRequest.md)| group IDs |

### Return type

[**\Swagger\Client\Model\ResponsesResponse**](../Model/ResponsesResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductIdsAdditionalGroupsGet**
> \Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse v1ProductIdsAdditionalGroupsGet($ids, $skip, $take)

Get Product's Additional Groups

Get Product's Additional Groups

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

$api_instance = new Swagger\Client\Api\ProductGroupApi();
$ids = "ids_example"; // string | up to 100 semicolon delimited product IDs
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1ProductIdsAdditionalGroupsGet($ids, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->v1ProductIdsAdditionalGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| up to 100 semicolon delimited product IDs |
 **skip** | **int**| skip n records | [optional]
 **take** | **int**| items to take, default: 20, max: 100000 | [optional]

### Return type

[**\Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse**](../Model/GroupmodelsAdditionalGroupsResponse.md)

### Authorization

[cc](../../README.md#cc), [jwt](../../README.md#jwt), [sk](../../README.md#sk)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

