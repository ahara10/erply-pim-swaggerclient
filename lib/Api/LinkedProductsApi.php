<?php
/**
 * LinkedProductsApi
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
 * Product information management API -------  <details><summary>Summary</summary>  It is built top of Erply's current product database.  Its goal is to allow user to:  * Extend the dataset (ie., users can decide what fields a product can have, and can themselves define an arbitrary number of categorizations); * Get data in and out of the system easily (ie. an API must support imports and integrations); * Easily make large-scale updates (ie., recategorize items in bulk, make whole catalogs or groups active or inactive) * Support omni-channel organization (allow specifying which products should be available in which sales channels) * Enrich data (see which items have a certain property missing, fill missing fields)  Product information management API is compatible with Erply's current data model, and the existing API calls </details>  <details><summary>Auth with Cookies</summary>  Add `apisession_<yourClientCode>` cookie with your session key + `clientCode` HTTP header </details>  <details><summary>Bulk operations</summary>  The bulk operations are processed concurrently, therefore the response items order is not the same as the request items one.   Each bulk response item has its own identifier:  **resultID**.  The **resourceID** field refer to the REST resource being worker with. </details>  <details><summary>Response headers on every endpoint</summary>  * **Request-Time-Unix** header contains server time in a format of unix timestamp. </details>  <details><summary>Filtering & Sorting</summary> The filtering and sorting parameters provide flexibility to the user to accelerate user's performance and increase efficiency.  ### Filtering:  The 'filter' query parameter represents a JSON array of arrays of length 3 and a string. Each array represents a filter and the string - operand: **and**, **or**. For the array, 1st string is the field name, 2nd string is the operands, and the 3rd object is the value (can be any type). Supported operands: **=**, **!=**, **>=**, **<=**, **in**, **contains** and **startswith**.  <details><summary>general filtering JSON example</summary> a filter to fetch actively sold burgers with groupID more than 2. > <blockquote> > <pre><code> > [ >    [ >        &quot;id&quot;, >        &quot;in&quot;, >        [1, 2, 3] >    ], >    [ >        &quot;group_id&quot;, >        &quot;>=&quot;, >        &quot;2&quot; >    ], >    &quot;and&quot;, >    [ >        &quot;status&quot;, >        &quot;!=&quot;, >        &quot;ACTIVE&quot; >    ], >    &quot;and&quot;, >    [ >        &quot;name.en&quot;, >        &quot;contains&quot;, >        &quot;burger&quot; >    ] > ] > </code></pre> > </blockquote> </details>  <details><summary>single filter JSON example</summary> The single filter must be still an array of arrays. For example a filter to fetch active records. > <blockquote> > <pre><code> > [ >    [ >        &quot;status&quot;, >        &quot;=&quot;, >        &quot;ACTIVE&quot; >    ] > ] > </code></pre> > </blockquote> </details>  #### 'or' operand <details><summary>filtering 'or' operand JSON example</summary> for example a filter to fetch matrix or bundle products:  > <blockquote> > <pre><code> > [ >   [ >       &quot;type&quot;, >       &quot;=&quot;, >       &quot;MATRIX&quot; >   ] >   &quot;or&quot;, >   [ >       &quot;type&quot;, >       &quot;=&quot;, >       &quot;BUNDLE&quot; >   ] > ] > </code></pre> > </blockquote> </details>   In the previous example we have used the same classifier 'type' multiple times - in two filters.   **NB!** Translatable classifiers such as name and description, etc **cannot be used** multiple times,  For example you cannot lookup products that have english name 'apple' and/or greek name '????????'.  ### Sorting  The sorting parameter is the 'sort' query parameter. It's a JSON object with 3 fields: 1. selector - field name, example value:added, 2. desc - short for descending, value: true or false, 3. language: example value: gr, is used to sort by translatable fields such as name.  <details><summary>sorting JSON example</summary>  > <blockquote> > <pre><code> > { >    &quot;selector&quot;: &quot;added&quot;, >    &quot;desc&quot;: true, >    &quot;language&quot;: &quot;gr&quot; > } > </code></pre> > </blockquote> </details>  </details>  <details><summary>Backup & Restore</summary>  With PIM API you can create a backup of the product catalogue  and then restore it when needed. ### Creating a backup To **create a backup** you need to specify the **backup_id** field on the product when creating or updating it one by one or in bulk.   It is allowed to have only one backup at a time. All new backups will override the previous ones. For example, if you created and updated some products specifying with backup_id equals 3, then the  first **create or update** operation with the backup_id equals 7 will delete all the backups associated with the backup_id equals 3.  ### Restoring To **restore** you should request the ```/product/restore``` endpoint with the **backup_id**.  </details>  ------- **[Go SDK](https://github.com/erply/pim-go-wrapper)** - make the API requests from your Go service with comfort.   -------
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
 * LinkedProductsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkedProductsApi
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
     * @return LinkedProductsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1ProductLinkedProductsBulkGetPost
     *
     * Read all products linked products and the link types
     *
     * @param \Swagger\Client\Model\ProductsBulkReadRequest $request request (required)
     * @return \Swagger\Client\Model\ProductsBulkReadResponse[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsBulkGetPost($request)
    {
        list($response) = $this->v1ProductLinkedProductsBulkGetPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1ProductLinkedProductsBulkGetPostWithHttpInfo
     *
     * Read all products linked products and the link types
     *
     * @param \Swagger\Client\Model\ProductsBulkReadRequest $request request (required)
     * @return Array of \Swagger\Client\Model\ProductsBulkReadResponse[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsBulkGetPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1ProductLinkedProductsBulkGetPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/linked-products/bulk/get";
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
                '\Swagger\Client\Model\ProductsBulkReadResponse[]',
                '/v1/product/linked-products/bulk/get'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProductsBulkReadResponse[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProductsBulkReadResponse[]', $e->getResponseHeaders());
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
     * Operation v1ProductLinkedProductsBulkPost
     *
     * Create product links in bulk
     *
     * @param \Swagger\Client\Model\LinkedproductmodelsBulkCreateRequest $request bulk create request (required)
     * @return \Swagger\Client\Model\ResponsesBulkResponseWithResults
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsBulkPost($request)
    {
        list($response) = $this->v1ProductLinkedProductsBulkPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1ProductLinkedProductsBulkPostWithHttpInfo
     *
     * Create product links in bulk
     *
     * @param \Swagger\Client\Model\LinkedproductmodelsBulkCreateRequest $request bulk create request (required)
     * @return Array of \Swagger\Client\Model\ResponsesBulkResponseWithResults, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsBulkPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1ProductLinkedProductsBulkPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/linked-products/bulk";
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
                '/v1/product/linked-products/bulk'
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
     * Operation v1ProductLinkedProductsIdPut
     *
     * Update a link between 2 products
     *
     * @param int $id link ID (required)
     * @param \Swagger\Client\Model\LinkedproductmodelsUpdateRequest $update_request update request (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsIdPut($id, $update_request)
    {
        list($response) = $this->v1ProductLinkedProductsIdPutWithHttpInfo($id, $update_request);
        return $response;
    }

    /**
     * Operation v1ProductLinkedProductsIdPutWithHttpInfo
     *
     * Update a link between 2 products
     *
     * @param int $id link ID (required)
     * @param \Swagger\Client\Model\LinkedproductmodelsUpdateRequest $update_request update request (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsIdPutWithHttpInfo($id, $update_request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1ProductLinkedProductsIdPut');
        }
        // verify the required parameter 'update_request' is set
        if ($update_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $update_request when calling v1ProductLinkedProductsIdPut');
        }
        // parse inputs
        $resourcePath = "/v1/product/linked-products/{id}";
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
        if (isset($update_request)) {
            $_tempBody = $update_request;
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
                '/v1/product/linked-products/{id}'
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
     * Operation v1ProductLinkedProductsIdsDelete
     *
     * Delete links between 2 products
     *
     * @param string $ids up to 100 semicolon delimited link IDs (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsIdsDelete($ids)
    {
        list($response) = $this->v1ProductLinkedProductsIdsDeleteWithHttpInfo($ids);
        return $response;
    }

    /**
     * Operation v1ProductLinkedProductsIdsDeleteWithHttpInfo
     *
     * Delete links between 2 products
     *
     * @param string $ids up to 100 semicolon delimited link IDs (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsIdsDeleteWithHttpInfo($ids)
    {
        // verify the required parameter 'ids' is set
        if ($ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ids when calling v1ProductLinkedProductsIdsDelete');
        }
        // parse inputs
        $resourcePath = "/v1/product/linked-products/{ids}";
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
                '/v1/product/linked-products/{ids}'
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
     * Operation v1ProductLinkedProductsPost
     *
     * Link 2 products for cross-sell or substitute purposes
     *
     * @param \Swagger\Client\Model\LinkedproductmodelsCreateRequest $create_request link ID and type of the link &#x60;cross-sell | substitute&#x60; (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsPost($create_request)
    {
        list($response) = $this->v1ProductLinkedProductsPostWithHttpInfo($create_request);
        return $response;
    }

    /**
     * Operation v1ProductLinkedProductsPostWithHttpInfo
     *
     * Link 2 products for cross-sell or substitute purposes
     *
     * @param \Swagger\Client\Model\LinkedproductmodelsCreateRequest $create_request link ID and type of the link &#x60;cross-sell | substitute&#x60; (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductLinkedProductsPostWithHttpInfo($create_request)
    {
        // verify the required parameter 'create_request' is set
        if ($create_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_request when calling v1ProductLinkedProductsPost');
        }
        // parse inputs
        $resourcePath = "/v1/product/linked-products";
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
        if (isset($create_request)) {
            $_tempBody = $create_request;
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
                '/v1/product/linked-products'
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
     * Operation v1ProductProductIDLinkedProductsGet
     *
     * Read all product's linked products and the link types
     *
     * @param int $product_id product ID (required)
     * @param string $type link type (values: &#x60;cross-sell&#x60; or &#x60;substitute&#x60;) (required)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return \Swagger\Client\Model\LinkedproductmodelsResponse[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductProductIDLinkedProductsGet($product_id, $type, $skip = null, $take = null)
    {
        list($response) = $this->v1ProductProductIDLinkedProductsGetWithHttpInfo($product_id, $type, $skip, $take);
        return $response;
    }

    /**
     * Operation v1ProductProductIDLinkedProductsGetWithHttpInfo
     *
     * Read all product's linked products and the link types
     *
     * @param int $product_id product ID (required)
     * @param string $type link type (values: &#x60;cross-sell&#x60; or &#x60;substitute&#x60;) (required)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return Array of \Swagger\Client\Model\LinkedproductmodelsResponse[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ProductProductIDLinkedProductsGetWithHttpInfo($product_id, $type, $skip = null, $take = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling v1ProductProductIDLinkedProductsGet');
        }
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling v1ProductProductIDLinkedProductsGet');
        }
        // parse inputs
        $resourcePath = "/v1/product/{productID}/linked-products";
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
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "productID" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
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
                '\Swagger\Client\Model\LinkedproductmodelsResponse[]',
                '/v1/product/{productID}/linked-products'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LinkedproductmodelsResponse[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LinkedproductmodelsResponse[]', $e->getResponseHeaders());
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
