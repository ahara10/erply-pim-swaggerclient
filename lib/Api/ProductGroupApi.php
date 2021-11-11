<?php
/**
 * ProductGroupApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PIM API
 *
 * Product information management API -------  <details><summary>Summary</summary>  It is built top of Erply's current product database.  Its goal is to allow user to:  * Extend the dataset (ie., users can decide what fields a product can have, and can themselves define an arbitrary number of categorizations); * Get data in and out of the system easily (ie. an API must support imports and integrations); * Easily make large-scale updates (ie., recategorize items in bulk, make whole catalogs or groups active or inactive) * Support omni-channel organization (allow specifying which products should be available in which sales channels) * Enrich data (see which items have a certain property missing, fill missing fields)  Product information management API is compatible with Erply's current data model, and the existing API calls </details>  <details><summary>Auth with Cookies</summary>  Add `apisession_<yourClientCode>` cookie with your session key + `clientCode` HTTP header </details>  <details><summary>Bulk operations</summary>  The bulk operations are processed concurrently, therefore the response items order is not the same as the request items one.   Each bulk response item has its own identifier:  **resultID**.  The **resourceID** field refer to the REST resource being worker with. </details>  <details><summary>Response headers on every endpoint</summary>  * **Request-Time-Unix** header contains server time in a format of unix timestamp. </details>  <details><summary>Filtering & Sorting</summary> The filtering and sorting parameters provide flexibility to the user to accelerate user's performance and increase efficiency.  ### Filtering:  The 'filter' query parameter represents a JSON array of arrays of length 3 and a string. Each array represents a filter and the string - operand: **and**, **or**. For the array, 1st string is the field name, 2nd string is the operands, and the 3rd object is the value (can be any type). Supported operands: **=**, **!=**, **>=**, **<=**, **in**, **contains** and **startswith**.  <details><summary>general filtering JSON example</summary> a filter to fetch actively sold burgers with groupID more than 2. > <blockquote> > <pre><code> > [ >    [ >        &quot;id&quot;, >        &quot;in&quot;, >        [1, 2, 3] >    ], >    [ >        &quot;group_id&quot;, >        &quot;>=&quot;, >        &quot;2&quot; >    ], >    &quot;and&quot;, >    [ >        &quot;status&quot;, >        &quot;!=&quot;, >        &quot;ACTIVE&quot; >    ], >    &quot;and&quot;, >    [ >        &quot;name.en&quot;, >        &quot;contains&quot;, >        &quot;burger&quot; >    ] > ] > </code></pre> > </blockquote> </details>  <details><summary>single filter JSON example</summary> The single filter must be still an array of arrays. For example a filter to fetch active records. > <blockquote> > <pre><code> > [ >    [ >        &quot;status&quot;, >        &quot;=&quot;, >        &quot;ACTIVE&quot; >    ] > ] > </code></pre> > </blockquote> </details>  #### 'or' operand <details><summary>filtering 'or' operand JSON example</summary> for example a filter to fetch matrix or bundle products:  > <blockquote> > <pre><code> > [ >   [ >       &quot;type&quot;, >       &quot;=&quot;, >       &quot;MATRIX&quot; >   ] >   &quot;or&quot;, >   [ >       &quot;type&quot;, >       &quot;=&quot;, >       &quot;BUNDLE&quot; >   ] > ] > </code></pre> > </blockquote> </details>   In the previous example we have used the same classifier 'type' multiple times - in two filters.   **NB!** Translatable classifiers such as name and description, etc **cannot be used** multiple times,  For example you cannot lookup products that have english name 'apple' and/or greek name 'μήλο'.  ### Sorting  The sorting parameter is the 'sort' query parameter. It's a JSON object with 3 fields: 1. selector - field name, example value:added, 2. desc - short for descending, value: true or false, 3. language: example value: gr, is used to sort by translatable fields such as name.  <details><summary>sorting JSON example</summary>  > <blockquote> > <pre><code> > { >    &quot;selector&quot;: &quot;added&quot;, >    &quot;desc&quot;: true, >    &quot;language&quot;: &quot;gr&quot; > } > </code></pre> > </blockquote> </details>  </details>  <details><summary>Backup & Restore</summary>  With PIM API you can create a backup of the product catalogue  and then restore it when needed. ### Creating a backup To **create a backup** you need to specify the **backup_id** field on the product when creating or updating it one by one or in bulk.   It is allowed to have only one backup at a time. All new backups will override the previous ones. For example, if you created and updated some products specifying with backup_id equals 3, then the  first **create or update** operation with the backup_id equals 7 will delete all the backups associated with the backup_id equals 3.  ### Restoring To **restore** you should request the ```/product/restore``` endpoint with the **backup_id**.  </details>  ------- **[Go SDK](https://github.com/erply/pim-go-wrapper)** - make the API requests from your Go service with comfort.   -------
 *
 * OpenAPI spec version: 1.103.0
 * Contact: david.zingerman@erply.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ProductGroupApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductGroupApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ProductGroupApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1ProductGroupBulkGetPost
     *
     * Get groups in bulk
     *
     * @param \Swagger\Client\Model\ParammodelsBulkReadRequest $request requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. (required)
     * @return \Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupBulkGetPost($request)
    {
        list($response) = $this->v1ProductGroupBulkGetPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1ProductGroupBulkGetPostWithHttpInfo
     *
     * Get groups in bulk
     *
     * @param \Swagger\Client\Model\ParammodelsBulkReadRequest $request requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. (required)
     * @return Array of \Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupBulkGetPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1ProductGroupBulkGetPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/bulk/get";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse',
                '/v1/product/group/bulk/get'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GroupmodelsBulkReadGroupsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupBulkPost
     *
     * Create groups in bulk
     *
     * @param \Swagger\Client\Model\GroupmodelsBulkCreateGroupsRequest $request bulk create request (required)
     * @return \Swagger\Client\Model\ResponsesBulkResponseWithResults
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupBulkPost($request)
    {
        list($response) = $this->v1ProductGroupBulkPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1ProductGroupBulkPostWithHttpInfo
     *
     * Create groups in bulk
     *
     * @param \Swagger\Client\Model\GroupmodelsBulkCreateGroupsRequest $request bulk create request (required)
     * @return Array of \Swagger\Client\Model\ResponsesBulkResponseWithResults, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupBulkPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1ProductGroupBulkPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/bulk";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesBulkResponseWithResults',
                '/v1/product/group/bulk'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesBulkResponseWithResults', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesBulkResponseWithResults', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupExternalIdsGet
     *
     * Read external group IDs of Product Groups
     *
     * @param string[] $external_i_ds up to 100 external IDs. Cannot be provided with the product group ID parameter (optional)
     * @param string[] $group_i_ds up to 100 product group IDs. Cannot be provided with the external ID parameter (optional)
     * @param string $integration_name integration name (optional)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return \Swagger\Client\Model\GroupmodelsExternalIDResponse[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGet($external_i_ds = null, $group_i_ds = null, $integration_name = null, $skip = null, $take = null)
    {
        list($response) = $this->v1ProductGroupExternalIdsGetWithHttpInfo($external_i_ds, $group_i_ds, $integration_name, $skip, $take);
        return $response;
    }

    /**
     * Operation v1ProductGroupExternalIdsGetWithHttpInfo
     *
     * Read external group IDs of Product Groups
     *
     * @param string[] $external_i_ds up to 100 external IDs. Cannot be provided with the product group ID parameter (optional)
     * @param string[] $group_i_ds up to 100 product group IDs. Cannot be provided with the external ID parameter (optional)
     * @param string $integration_name integration name (optional)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return Array of \Swagger\Client\Model\GroupmodelsExternalIDResponse[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGetWithHttpInfo($external_i_ds = null, $group_i_ds = null, $integration_name = null, $skip = null, $take = null)
    {
        // parse inputs
        $resourcePath = "/v1/product/group/external-ids";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if (is_array($external_i_ds)) {
            $external_i_ds = $this->apiClient->getSerializer()->serializeCollection($external_i_ds, 'csv', true);
        }
        if ($external_i_ds !== null) {
            $queryParams['externalIDs'] = $this->apiClient->getSerializer()->toQueryValue($external_i_ds);
        }
        // query params
        if (is_array($group_i_ds)) {
            $group_i_ds = $this->apiClient->getSerializer()->serializeCollection($group_i_ds, 'csv', true);
        }
        if ($group_i_ds !== null) {
            $queryParams['groupIDs'] = $this->apiClient->getSerializer()->toQueryValue($group_i_ds);
        }
        // query params
        if ($integration_name !== null) {
            $queryParams['integrationName'] = $this->apiClient->getSerializer()->toQueryValue($integration_name);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = $this->apiClient->getSerializer()->toQueryValue($take);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GroupmodelsExternalIDResponse[]',
                '/v1/product/group/external-ids'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GroupmodelsExternalIDResponse[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GroupmodelsExternalIDResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupExternalIdsGroupIdPatch
     *
     * Update external group ID of a Product Group
     *
     * @param \Swagger\Client\Model\GroupmodelsExternalIDRequest $external_id_with_integration_name external ID with the integration name (required)
     * @param int $group_id Group ID (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGroupIdPatch($external_id_with_integration_name, $group_id)
    {
        list($response) = $this->v1ProductGroupExternalIdsGroupIdPatchWithHttpInfo($external_id_with_integration_name, $group_id);
        return $response;
    }

    /**
     * Operation v1ProductGroupExternalIdsGroupIdPatchWithHttpInfo
     *
     * Update external group ID of a Product Group
     *
     * @param \Swagger\Client\Model\GroupmodelsExternalIDRequest $external_id_with_integration_name external ID with the integration name (required)
     * @param int $group_id Group ID (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGroupIdPatchWithHttpInfo($external_id_with_integration_name, $group_id)
    {
        // verify the required parameter 'external_id_with_integration_name' is set
        if ($external_id_with_integration_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $external_id_with_integration_name when calling v1ProductGroupExternalIdsGroupIdPatch');
        }
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling v1ProductGroupExternalIdsGroupIdPatch');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/external-ids/{groupId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "groupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($external_id_with_integration_name)) {
            $_tempBody = $external_id_with_integration_name;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/external-ids/{groupId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupExternalIdsGroupIdPost
     *
     * Attach external group ID to a Product Group
     *
     * @param \Swagger\Client\Model\GroupmodelsExternalIDRequest $external_id_with_integration_name external ID with the integration name (required)
     * @param int $group_id Group ID (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGroupIdPost($external_id_with_integration_name, $group_id)
    {
        list($response) = $this->v1ProductGroupExternalIdsGroupIdPostWithHttpInfo($external_id_with_integration_name, $group_id);
        return $response;
    }

    /**
     * Operation v1ProductGroupExternalIdsGroupIdPostWithHttpInfo
     *
     * Attach external group ID to a Product Group
     *
     * @param \Swagger\Client\Model\GroupmodelsExternalIDRequest $external_id_with_integration_name external ID with the integration name (required)
     * @param int $group_id Group ID (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGroupIdPostWithHttpInfo($external_id_with_integration_name, $group_id)
    {
        // verify the required parameter 'external_id_with_integration_name' is set
        if ($external_id_with_integration_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $external_id_with_integration_name when calling v1ProductGroupExternalIdsGroupIdPost');
        }
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling v1ProductGroupExternalIdsGroupIdPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/external-ids/{groupId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "groupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($external_id_with_integration_name)) {
            $_tempBody = $external_id_with_integration_name;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/external-ids/{groupId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupExternalIdsGroupIdsDelete
     *
     * Delete external group IDs of Product Groups
     *
     * @param string $group_ids up to 100 semicolon delimited Group IDs (required)
     * @param string $integration_name Specify the integration name to delete the external ID associated with the integration only. (optional)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGroupIdsDelete($group_ids, $integration_name = null)
    {
        list($response) = $this->v1ProductGroupExternalIdsGroupIdsDeleteWithHttpInfo($group_ids, $integration_name);
        return $response;
    }

    /**
     * Operation v1ProductGroupExternalIdsGroupIdsDeleteWithHttpInfo
     *
     * Delete external group IDs of Product Groups
     *
     * @param string $group_ids up to 100 semicolon delimited Group IDs (required)
     * @param string $integration_name Specify the integration name to delete the external ID associated with the integration only. (optional)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupExternalIdsGroupIdsDeleteWithHttpInfo($group_ids, $integration_name = null)
    {
        // verify the required parameter 'group_ids' is set
        if ($group_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_ids when calling v1ProductGroupExternalIdsGroupIdsDelete');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/external-ids/{groupIds}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($integration_name !== null) {
            $queryParams['integrationName'] = $this->apiClient->getSerializer()->toQueryValue($integration_name);
        }
        // path params
        if ($group_ids !== null) {
            $resourcePath = str_replace(
                "{" . "groupIds" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_ids),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/external-ids/{groupIds}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupGet
     *
     * Get Groups
     *
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @param string $sort the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $filter the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param bool $with_total_count optionally return total number of records in the X-Total-Count response header (optional)
     * @return \Swagger\Client\Model\GroupmodelsGroupResponse[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupGet($skip = null, $take = null, $sort = null, $filter = null, $with_total_count = null)
    {
        list($response) = $this->v1ProductGroupGetWithHttpInfo($skip, $take, $sort, $filter, $with_total_count);
        return $response;
    }

    /**
     * Operation v1ProductGroupGetWithHttpInfo
     *
     * Get Groups
     *
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @param string $sort the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $filter the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param bool $with_total_count optionally return total number of records in the X-Total-Count response header (optional)
     * @return Array of \Swagger\Client\Model\GroupmodelsGroupResponse[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupGetWithHttpInfo($skip = null, $take = null, $sort = null, $filter = null, $with_total_count = null)
    {
        // parse inputs
        $resourcePath = "/v1/product/group";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = $this->apiClient->getSerializer()->toQueryValue($take);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // query params
        if ($with_total_count !== null) {
            $queryParams['withTotalCount'] = $this->apiClient->getSerializer()->toQueryValue($with_total_count);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GroupmodelsGroupResponse[]',
                '/v1/product/group'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GroupmodelsGroupResponse[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GroupmodelsGroupResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupGroupIdLocationTaxWarehouseIdDelete
     *
     * Delete Location Specific Tax From Product Group
     *
     * @param string $group_id group ID (required)
     * @param string $warehouse_id warehouse ID (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupGroupIdLocationTaxWarehouseIdDelete($group_id, $warehouse_id)
    {
        list($response) = $this->v1ProductGroupGroupIdLocationTaxWarehouseIdDeleteWithHttpInfo($group_id, $warehouse_id);
        return $response;
    }

    /**
     * Operation v1ProductGroupGroupIdLocationTaxWarehouseIdDeleteWithHttpInfo
     *
     * Delete Location Specific Tax From Product Group
     *
     * @param string $group_id group ID (required)
     * @param string $warehouse_id warehouse ID (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupGroupIdLocationTaxWarehouseIdDeleteWithHttpInfo($group_id, $warehouse_id)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling v1ProductGroupGroupIdLocationTaxWarehouseIdDelete');
        }
        // verify the required parameter 'warehouse_id' is set
        if ($warehouse_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $warehouse_id when calling v1ProductGroupGroupIdLocationTaxWarehouseIdDelete');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/{groupId}/location-tax/{warehouseId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "groupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
                $resourcePath
            );
        }
        // path params
        if ($warehouse_id !== null) {
            $resourcePath = str_replace(
                "{" . "warehouseId" . "}",
                $this->apiClient->getSerializer()->toPathValue($warehouse_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/{groupId}/location-tax/{warehouseId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupIdLocationTaxPatch
     *
     * Add Location Specific Tax
     *
     * @param string $id group ID (required)
     * @param \Swagger\Client\Model\GroupmodelsLocationSpecificTaxRequest $request productGroupRequest (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdLocationTaxPatch($id, $request)
    {
        list($response) = $this->v1ProductGroupIdLocationTaxPatchWithHttpInfo($id, $request);
        return $response;
    }

    /**
     * Operation v1ProductGroupIdLocationTaxPatchWithHttpInfo
     *
     * Add Location Specific Tax
     *
     * @param string $id group ID (required)
     * @param \Swagger\Client\Model\GroupmodelsLocationSpecificTaxRequest $request productGroupRequest (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdLocationTaxPatchWithHttpInfo($id, $request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1ProductGroupIdLocationTaxPatch');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1ProductGroupIdLocationTaxPatch');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/{id}/location-tax";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/{id}/location-tax'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupIdMovePut
     *
     * Move Product Group
     *
     * @param int $id Group ID (required)
     * @param \Swagger\Client\Model\ModelsMoveRequest $move_request moveRequest (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdMovePut($id, $move_request)
    {
        list($response) = $this->v1ProductGroupIdMovePutWithHttpInfo($id, $move_request);
        return $response;
    }

    /**
     * Operation v1ProductGroupIdMovePutWithHttpInfo
     *
     * Move Product Group
     *
     * @param int $id Group ID (required)
     * @param \Swagger\Client\Model\ModelsMoveRequest $move_request moveRequest (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdMovePutWithHttpInfo($id, $move_request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1ProductGroupIdMovePut');
        }
        // verify the required parameter 'move_request' is set
        if ($move_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $move_request when calling v1ProductGroupIdMovePut');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/{id}/move";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($move_request)) {
            $_tempBody = $move_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/{id}/move'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupIdPut
     *
     * Update Product Group
     *
     * @param int $id Group ID (required)
     * @param \Swagger\Client\Model\GroupmodelsGroupRequest $product_group_request productGroupRequest (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdPut($id, $product_group_request)
    {
        list($response) = $this->v1ProductGroupIdPutWithHttpInfo($id, $product_group_request);
        return $response;
    }

    /**
     * Operation v1ProductGroupIdPutWithHttpInfo
     *
     * Update Product Group
     *
     * @param int $id Group ID (required)
     * @param \Swagger\Client\Model\GroupmodelsGroupRequest $product_group_request productGroupRequest (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdPutWithHttpInfo($id, $product_group_request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1ProductGroupIdPut');
        }
        // verify the required parameter 'product_group_request' is set
        if ($product_group_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_group_request when calling v1ProductGroupIdPut');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($product_group_request)) {
            $_tempBody = $product_group_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupIdsDelete
     *
     * Delete Product Groups
     *
     * @param string $ids up to 100 semicolon delimited Group IDs (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdsDelete($ids)
    {
        list($response) = $this->v1ProductGroupIdsDeleteWithHttpInfo($ids);
        return $response;
    }

    /**
     * Operation v1ProductGroupIdsDeleteWithHttpInfo
     *
     * Delete Product Groups
     *
     * @param string $ids up to 100 semicolon delimited Group IDs (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIdsDeleteWithHttpInfo($ids)
    {
        // verify the required parameter 'ids' is set
        if ($ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ids when calling v1ProductGroupIdsDelete');
        }
        // parse inputs
        $resourcePath = "/v1/product/group/{ids}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ids !== null) {
            $resourcePath = str_replace(
                "{" . "ids" . "}",
                $this->apiClient->getSerializer()->toPathValue($ids),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group/{ids}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupIndentedGet
     *
     * Get Indented List of Groups
     *
     * @return \Swagger\Client\Model\IndentationResult[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIndentedGet()
    {
        list($response) = $this->v1ProductGroupIndentedGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation v1ProductGroupIndentedGetWithHttpInfo
     *
     * Get Indented List of Groups
     *
     * @return Array of \Swagger\Client\Model\IndentationResult[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupIndentedGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/product/group/indented";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\IndentationResult[]',
                '/v1/product/group/indented'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\IndentationResult[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\IndentationResult[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupPost
     *
     * Create Product Group
     *
     * @param \Swagger\Client\Model\GroupmodelsGroupRequest $product_group_request productGroupRequest (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupPost($product_group_request)
    {
        list($response) = $this->v1ProductGroupPostWithHttpInfo($product_group_request);
        return $response;
    }

    /**
     * Operation v1ProductGroupPostWithHttpInfo
     *
     * Create Product Group
     *
     * @param \Swagger\Client\Model\GroupmodelsGroupRequest $product_group_request productGroupRequest (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupPostWithHttpInfo($product_group_request)
    {
        // verify the required parameter 'product_group_request' is set
        if ($product_group_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_group_request when calling v1ProductGroupPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/group";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($product_group_request)) {
            $_tempBody = $product_group_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/group'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductGroupTreeGet
     *
     * Get Tree of product groups
     *
     * @param string[] $group_fields You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product) (optional)
     * @param string[] $product_fields You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product) (optional)
     * @param bool $with_products Optionally you can get products that belong to each group (optional)
     * @param string $language_code Optionally specify the language ISO 639-1 code for the translatable fields. Default is the default language of the account. (optional)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @param bool $with_total_count optionally return total number of records in the X-Total-Count response header (optional)
     * @param string $sort the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $item_filters the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $product_filters the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @return \Swagger\Client\Model\IndentationGroupTreeResultSample[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupTreeGet($group_fields = null, $product_fields = null, $with_products = null, $language_code = null, $skip = null, $take = null, $with_total_count = null, $sort = null, $item_filters = null, $product_filters = null)
    {
        list($response) = $this->v1ProductGroupTreeGetWithHttpInfo($group_fields, $product_fields, $with_products, $language_code, $skip, $take, $with_total_count, $sort, $item_filters, $product_filters);
        return $response;
    }

    /**
     * Operation v1ProductGroupTreeGetWithHttpInfo
     *
     * Get Tree of product groups
     *
     * @param string[] $group_fields You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product) (optional)
     * @param string[] $product_fields You must specify the fields to you want to get from the groups and products (models can be found under GET /product/group and GET /product) (optional)
     * @param bool $with_products Optionally you can get products that belong to each group (optional)
     * @param string $language_code Optionally specify the language ISO 639-1 code for the translatable fields. Default is the default language of the account. (optional)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @param bool $with_total_count optionally return total number of records in the X-Total-Count response header (optional)
     * @param string $sort the sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $item_filters the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $product_filters the filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @return Array of \Swagger\Client\Model\IndentationGroupTreeResultSample[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductGroupTreeGetWithHttpInfo($group_fields = null, $product_fields = null, $with_products = null, $language_code = null, $skip = null, $take = null, $with_total_count = null, $sort = null, $item_filters = null, $product_filters = null)
    {
        // parse inputs
        $resourcePath = "/v1/product/group/tree";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if (is_array($group_fields)) {
            $group_fields = $this->apiClient->getSerializer()->serializeCollection($group_fields, 'csv', true);
        }
        if ($group_fields !== null) {
            $queryParams['groupFields'] = $this->apiClient->getSerializer()->toQueryValue($group_fields);
        }
        // query params
        if (is_array($product_fields)) {
            $product_fields = $this->apiClient->getSerializer()->serializeCollection($product_fields, 'csv', true);
        }
        if ($product_fields !== null) {
            $queryParams['productFields'] = $this->apiClient->getSerializer()->toQueryValue($product_fields);
        }
        // query params
        if ($with_products !== null) {
            $queryParams['withProducts'] = $this->apiClient->getSerializer()->toQueryValue($with_products);
        }
        // query params
        if ($language_code !== null) {
            $queryParams['languageCode'] = $this->apiClient->getSerializer()->toQueryValue($language_code);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = $this->apiClient->getSerializer()->toQueryValue($take);
        }
        // query params
        if ($with_total_count !== null) {
            $queryParams['withTotalCount'] = $this->apiClient->getSerializer()->toQueryValue($with_total_count);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($item_filters !== null) {
            $queryParams['itemFilters'] = $this->apiClient->getSerializer()->toQueryValue($item_filters);
        }
        // query params
        if ($product_filters !== null) {
            $queryParams['productFilters'] = $this->apiClient->getSerializer()->toQueryValue($product_filters);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\IndentationGroupTreeResultSample[]',
                '/v1/product/group/tree'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\IndentationGroupTreeResultSample[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\IndentationGroupTreeResultSample[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductIdAdditionalGroupsPut
     *
     * Attach Additional Groups to Product
     *
     * @param int $id product ID (required)
     * @param \Swagger\Client\Model\GroupmodelsAdditionalGroupRequest $product group IDs (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductIdAdditionalGroupsPut($id, $product)
    {
        list($response) = $this->v1ProductIdAdditionalGroupsPutWithHttpInfo($id, $product);
        return $response;
    }

    /**
     * Operation v1ProductIdAdditionalGroupsPutWithHttpInfo
     *
     * Attach Additional Groups to Product
     *
     * @param int $id product ID (required)
     * @param \Swagger\Client\Model\GroupmodelsAdditionalGroupRequest $product group IDs (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductIdAdditionalGroupsPutWithHttpInfo($id, $product)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1ProductIdAdditionalGroupsPut');
        }
        // verify the required parameter 'product' is set
        if ($product === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product when calling v1ProductIdAdditionalGroupsPut');
        }
        // parse inputs
        $resourcePath = "/v1/product/{id}/additional-groups";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($product)) {
            $_tempBody = $product;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/product/{id}/additional-groups'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResponsesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1ProductIdsAdditionalGroupsGet
     *
     * Get Product's Additional Groups
     *
     * @param string $ids up to 100 semicolon delimited product IDs (required)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return \Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductIdsAdditionalGroupsGet($ids, $skip = null, $take = null)
    {
        list($response) = $this->v1ProductIdsAdditionalGroupsGetWithHttpInfo($ids, $skip, $take);
        return $response;
    }

    /**
     * Operation v1ProductIdsAdditionalGroupsGetWithHttpInfo
     *
     * Get Product's Additional Groups
     *
     * @param string $ids up to 100 semicolon delimited product IDs (required)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return Array of \Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductIdsAdditionalGroupsGetWithHttpInfo($ids, $skip = null, $take = null)
    {
        // verify the required parameter 'ids' is set
        if ($ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ids when calling v1ProductIdsAdditionalGroupsGet');
        }
        // parse inputs
        $resourcePath = "/v1/product/{ids}/additional-groups";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = $this->apiClient->getSerializer()->toQueryValue($take);
        }
        // path params
        if ($ids !== null) {
            $resourcePath = str_replace(
                "{" . "ids" . "}",
                $this->apiClient->getSerializer()->toPathValue($ids),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('clientCode');
        if (strlen($apiKey) !== 0) {
            $headerParams['clientCode'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $headerParams['jwt'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('sessionKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['sessionKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse',
                '/v1/product/{ids}/additional-groups'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GroupmodelsAdditionalGroupsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResponsesMessageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
