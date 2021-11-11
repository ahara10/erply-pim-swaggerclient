<?php
/**
 * MatrixProductApi
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
 * MatrixProductApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatrixProductApi
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
     * @return MatrixProductApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1MatrixProductBulkGetPost
     *
     * Get matrix variations in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsProductBulkReadRequest $request requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. (required)
     * @return \Swagger\Client\Model\MatrixmodelsProductBulkReadResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductBulkGetPost($request)
    {
        list($response) = $this->v1MatrixProductBulkGetPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1MatrixProductBulkGetPostWithHttpInfo
     *
     * Get matrix variations in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsProductBulkReadRequest $request requests have the parameters that the original get request has, but in json format. This way you can apply the parameters to each request separately. (required)
     * @return Array of \Swagger\Client\Model\MatrixmodelsProductBulkReadResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductBulkGetPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1MatrixProductBulkGetPost');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product/bulk/get";
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
                '\Swagger\Client\Model\MatrixmodelsProductBulkReadResponse',
                '/v1/matrix/product/bulk/get'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\MatrixmodelsProductBulkReadResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\MatrixmodelsProductBulkReadResponse', $e->getResponseHeaders());
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
     * Operation v1MatrixProductBulkPost
     *
     * Create matrix products in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsProductBulkCreateRequest $request bulk request (required)
     * @return \Swagger\Client\Model\ResponsesBulkResponseWithResults
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductBulkPost($request)
    {
        list($response) = $this->v1MatrixProductBulkPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1MatrixProductBulkPostWithHttpInfo
     *
     * Create matrix products in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsProductBulkCreateRequest $request bulk request (required)
     * @return Array of \Swagger\Client\Model\ResponsesBulkResponseWithResults, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductBulkPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1MatrixProductBulkPost');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product/bulk";
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
                '/v1/matrix/product/bulk'
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
     * Operation v1MatrixProductDimensionsBulkGetPost
     *
     * Read matrix products dimensions in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsDimensionsBulkReadRequest $request bulk request (required)
     * @return \Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductDimensionsBulkGetPost($request)
    {
        list($response) = $this->v1MatrixProductDimensionsBulkGetPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1MatrixProductDimensionsBulkGetPostWithHttpInfo
     *
     * Read matrix products dimensions in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsDimensionsBulkReadRequest $request bulk request (required)
     * @return Array of \Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductDimensionsBulkGetPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1MatrixProductDimensionsBulkGetPost');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product/dimensions/bulk/get";
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
                '\Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse',
                '/v1/matrix/product/dimensions/bulk/get'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1MatrixProductDimensionsBulkPut
     *
     * Update matrix products dimensions in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsDimensionsBulkUpdateRequest $request bulk request (required)
     * @return \Swagger\Client\Model\ResponsesBulkResponseWithResults
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductDimensionsBulkPut($request)
    {
        list($response) = $this->v1MatrixProductDimensionsBulkPutWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation v1MatrixProductDimensionsBulkPutWithHttpInfo
     *
     * Update matrix products dimensions in bulk
     *
     * @param \Swagger\Client\Model\MatrixmodelsDimensionsBulkUpdateRequest $request bulk request (required)
     * @return Array of \Swagger\Client\Model\ResponsesBulkResponseWithResults, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductDimensionsBulkPutWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling v1MatrixProductDimensionsBulkPut');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product/dimensions/bulk";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesBulkResponseWithResults',
                '/v1/matrix/product/dimensions/bulk'
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
     * Operation v1MatrixProductGet
     *
     * API call for retrieving matrix variations
     *
     * @param int[] $matrix_product_i_ds Limit: 1500 ids. Expected usage: API client has a matrix product ID and wants to get a complete list of variations. Format: 1 or many comma separated matrix product IDs. (optional)
     * @param int[] $product_i_ds Limit: 1500 ids. Expected usage: API client will get a bunch of products from GET /v1/product and will want to fetch variation descriptions for the same items. Format: 1 or many comma separated product IDs. (optional)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return \Swagger\Client\Model\MatrixmodelsProductVariationJSON[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductGet($matrix_product_i_ds = null, $product_i_ds = null, $skip = null, $take = null)
    {
        list($response) = $this->v1MatrixProductGetWithHttpInfo($matrix_product_i_ds, $product_i_ds, $skip, $take);
        return $response;
    }

    /**
     * Operation v1MatrixProductGetWithHttpInfo
     *
     * API call for retrieving matrix variations
     *
     * @param int[] $matrix_product_i_ds Limit: 1500 ids. Expected usage: API client has a matrix product ID and wants to get a complete list of variations. Format: 1 or many comma separated matrix product IDs. (optional)
     * @param int[] $product_i_ds Limit: 1500 ids. Expected usage: API client will get a bunch of products from GET /v1/product and will want to fetch variation descriptions for the same items. Format: 1 or many comma separated product IDs. (optional)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return Array of \Swagger\Client\Model\MatrixmodelsProductVariationJSON[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductGetWithHttpInfo($matrix_product_i_ds = null, $product_i_ds = null, $skip = null, $take = null)
    {
        // parse inputs
        $resourcePath = "/v1/matrix/product";
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
        if (is_array($matrix_product_i_ds)) {
            $matrix_product_i_ds = $this->apiClient->getSerializer()->serializeCollection($matrix_product_i_ds, 'csv', true);
        }
        if ($matrix_product_i_ds !== null) {
            $queryParams['matrixProductIDs'] = $this->apiClient->getSerializer()->toQueryValue($matrix_product_i_ds);
        }
        // query params
        if (is_array($product_i_ds)) {
            $product_i_ds = $this->apiClient->getSerializer()->serializeCollection($product_i_ds, 'csv', true);
        }
        if ($product_i_ds !== null) {
            $queryParams['productIDs'] = $this->apiClient->getSerializer()->toQueryValue($product_i_ds);
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
                '\Swagger\Client\Model\MatrixmodelsProductVariationJSON[]',
                '/v1/matrix/product'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\MatrixmodelsProductVariationJSON[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\MatrixmodelsProductVariationJSON[]', $e->getResponseHeaders());
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
     * Operation v1MatrixProductIdDimensionsGet
     *
     * Read Matrix Product Dimensions
     *
     * @param int $id matrix product id (required)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return \Swagger\Client\Model\MatrixmodelsDimensionIDs
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductIdDimensionsGet($id, $skip = null, $take = null)
    {
        list($response) = $this->v1MatrixProductIdDimensionsGetWithHttpInfo($id, $skip, $take);
        return $response;
    }

    /**
     * Operation v1MatrixProductIdDimensionsGetWithHttpInfo
     *
     * Read Matrix Product Dimensions
     *
     * @param int $id matrix product id (required)
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @return Array of \Swagger\Client\Model\MatrixmodelsDimensionIDs, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductIdDimensionsGetWithHttpInfo($id, $skip = null, $take = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1MatrixProductIdDimensionsGet');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product/{id}/dimensions";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Swagger\Client\Model\MatrixmodelsDimensionIDs',
                '/v1/matrix/product/{id}/dimensions'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\MatrixmodelsDimensionIDs', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\MatrixmodelsDimensionIDs', $e->getResponseHeaders());
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
     * Operation v1MatrixProductIdDimensionsPut
     *
     * Update Matrix Product Dimensions
     *
     * @param int $id matrix product id (required)
     * @param \Swagger\Client\Model\MatrixmodelsUpdateProductDimensionsRequest $product matrix dimension IDs (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductIdDimensionsPut($id, $product)
    {
        list($response) = $this->v1MatrixProductIdDimensionsPutWithHttpInfo($id, $product);
        return $response;
    }

    /**
     * Operation v1MatrixProductIdDimensionsPutWithHttpInfo
     *
     * Update Matrix Product Dimensions
     *
     * @param int $id matrix product id (required)
     * @param \Swagger\Client\Model\MatrixmodelsUpdateProductDimensionsRequest $product matrix dimension IDs (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductIdDimensionsPutWithHttpInfo($id, $product)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1MatrixProductIdDimensionsPut');
        }
        // verify the required parameter 'product' is set
        if ($product === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product when calling v1MatrixProductIdDimensionsPut');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product/{id}/dimensions";
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
                '/v1/matrix/product/{id}/dimensions'
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
     * Operation v1MatrixProductPost
     *
     * Create Matrix Product
     *
     * @param \Swagger\Client\Model\MatrixmodelsCreateProductRequest $product Product info &amp; matrix dimension IDs (required)
     * @param bool $generate_code_automatically generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override. (required)
     * @param bool $generate_code2_automatically generate code2 (UPC/EAN automatically based on the preconfigured starting code + user&#39;s country or based on a generated code. If the code is not blank in the request, will override. (required)
     * @return \Swagger\Client\Model\ResponsesResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductPost($product, $generate_code_automatically, $generate_code2_automatically)
    {
        list($response) = $this->v1MatrixProductPostWithHttpInfo($product, $generate_code_automatically, $generate_code2_automatically);
        return $response;
    }

    /**
     * Operation v1MatrixProductPostWithHttpInfo
     *
     * Create Matrix Product
     *
     * @param \Swagger\Client\Model\MatrixmodelsCreateProductRequest $product Product info &amp; matrix dimension IDs (required)
     * @param bool $generate_code_automatically generate code automatically based on the preconfigured starting code or based on a generated code. If the code is not blank in the request, will override. (required)
     * @param bool $generate_code2_automatically generate code2 (UPC/EAN automatically based on the preconfigured starting code + user&#39;s country or based on a generated code. If the code is not blank in the request, will override. (required)
     * @return Array of \Swagger\Client\Model\ResponsesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductPostWithHttpInfo($product, $generate_code_automatically, $generate_code2_automatically)
    {
        // verify the required parameter 'product' is set
        if ($product === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product when calling v1MatrixProductPost');
        }
        // verify the required parameter 'generate_code_automatically' is set
        if ($generate_code_automatically === null) {
            throw new \InvalidArgumentException('Missing the required parameter $generate_code_automatically when calling v1MatrixProductPost');
        }
        // verify the required parameter 'generate_code2_automatically' is set
        if ($generate_code2_automatically === null) {
            throw new \InvalidArgumentException('Missing the required parameter $generate_code2_automatically when calling v1MatrixProductPost');
        }
        // parse inputs
        $resourcePath = "/v1/matrix/product";
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
        if ($generate_code_automatically !== null) {
            $queryParams['generateCodeAutomatically'] = $this->apiClient->getSerializer()->toQueryValue($generate_code_automatically);
        }
        // query params
        if ($generate_code2_automatically !== null) {
            $queryParams['generateCode2Automatically'] = $this->apiClient->getSerializer()->toQueryValue($generate_code2_automatically);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ResponsesResponse',
                '/v1/matrix/product'
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
     * Operation v1MatrixProductWithVariationsGet
     *
     * API call for retrieving matrix products with variations
     *
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @param string $sort Sorting is applied to the matrix products only. The sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $filter Filtering is applied to the matrix products only. The filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @return \Swagger\Client\Model\MatrixmodelsProductWithVariations[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductWithVariationsGet($skip = null, $take = null, $sort = null, $filter = null)
    {
        list($response) = $this->v1MatrixProductWithVariationsGetWithHttpInfo($skip, $take, $sort, $filter);
        return $response;
    }

    /**
     * Operation v1MatrixProductWithVariationsGetWithHttpInfo
     *
     * API call for retrieving matrix products with variations
     *
     * @param int $skip skip n records (optional)
     * @param int $take items to take, default: 20, max: 100000 (optional)
     * @param string $sort Sorting is applied to the matrix products only. The sort parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @param string $filter Filtering is applied to the matrix products only. The filter parameter is explained in the &#x60;Filtering &amp; Sorting&#x60; section on top of the Swagger documentation (optional)
     * @return Array of \Swagger\Client\Model\MatrixmodelsProductWithVariations[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1MatrixProductWithVariationsGetWithHttpInfo($skip = null, $take = null, $sort = null, $filter = null)
    {
        // parse inputs
        $resourcePath = "/v1/matrix/product/with-variations";
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
                '\Swagger\Client\Model\MatrixmodelsProductWithVariations[]',
                '/v1/matrix/product/with-variations'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\MatrixmodelsProductWithVariations[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\MatrixmodelsProductWithVariations[]', $e->getResponseHeaders());
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
