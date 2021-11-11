<?php
/**
 * ExportApi
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
 * ExportApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportApi
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
     * @return ExportApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1ExportAssortmentsGet
     *
     * Get Assortments Export
     *
     * @param int $assortment_id export by assortment IDs. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @return string
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ExportAssortmentsGet($assortment_id = null)
    {
        list($response) = $this->v1ExportAssortmentsGetWithHttpInfo($assortment_id);
        return $response;
    }

    /**
     * Operation v1ExportAssortmentsGetWithHttpInfo
     *
     * Get Assortments Export
     *
     * @param int $assortment_id export by assortment IDs. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ExportAssortmentsGetWithHttpInfo($assortment_id = null)
    {
        // parse inputs
        $resourcePath = "/v1/export/assortments";
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
        if ($assortment_id !== null) {
            $queryParams['assortmentID'] = $this->apiClient->getSerializer()->toQueryValue($assortment_id);
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
                'string',
                '/v1/export/assortments'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
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
     * Operation v1ExportMatrixProductsGet
     *
     * Get Matrix Products Export
     *
     * @param int[] $ids filter by the matrix product ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $group_ids filter by the group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $category_ids filter by the category ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $brand_ids filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $supplier_ids filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $priority_group_ids filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $family_ids filter by the family ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @return string
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ExportMatrixProductsGet($ids = null, $group_ids = null, $category_ids = null, $brand_ids = null, $supplier_ids = null, $priority_group_ids = null, $family_ids = null)
    {
        list($response) = $this->v1ExportMatrixProductsGetWithHttpInfo($ids, $group_ids, $category_ids, $brand_ids, $supplier_ids, $priority_group_ids, $family_ids);
        return $response;
    }

    /**
     * Operation v1ExportMatrixProductsGetWithHttpInfo
     *
     * Get Matrix Products Export
     *
     * @param int[] $ids filter by the matrix product ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $group_ids filter by the group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $category_ids filter by the category ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $brand_ids filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $supplier_ids filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $priority_group_ids filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $family_ids filter by the family ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ExportMatrixProductsGetWithHttpInfo($ids = null, $group_ids = null, $category_ids = null, $brand_ids = null, $supplier_ids = null, $priority_group_ids = null, $family_ids = null)
    {
        // parse inputs
        $resourcePath = "/v1/export/matrix-products";
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
        if (is_array($ids)) {
            $ids = $this->apiClient->getSerializer()->serializeCollection($ids, 'csv', true);
        }
        if ($ids !== null) {
            $queryParams['ids'] = $this->apiClient->getSerializer()->toQueryValue($ids);
        }
        // query params
        if (is_array($group_ids)) {
            $group_ids = $this->apiClient->getSerializer()->serializeCollection($group_ids, 'csv', true);
        }
        if ($group_ids !== null) {
            $queryParams['groupIds'] = $this->apiClient->getSerializer()->toQueryValue($group_ids);
        }
        // query params
        if (is_array($category_ids)) {
            $category_ids = $this->apiClient->getSerializer()->serializeCollection($category_ids, 'csv', true);
        }
        if ($category_ids !== null) {
            $queryParams['categoryIds'] = $this->apiClient->getSerializer()->toQueryValue($category_ids);
        }
        // query params
        if (is_array($brand_ids)) {
            $brand_ids = $this->apiClient->getSerializer()->serializeCollection($brand_ids, 'csv', true);
        }
        if ($brand_ids !== null) {
            $queryParams['brandIds'] = $this->apiClient->getSerializer()->toQueryValue($brand_ids);
        }
        // query params
        if (is_array($supplier_ids)) {
            $supplier_ids = $this->apiClient->getSerializer()->serializeCollection($supplier_ids, 'csv', true);
        }
        if ($supplier_ids !== null) {
            $queryParams['supplierIds'] = $this->apiClient->getSerializer()->toQueryValue($supplier_ids);
        }
        // query params
        if (is_array($priority_group_ids)) {
            $priority_group_ids = $this->apiClient->getSerializer()->serializeCollection($priority_group_ids, 'csv', true);
        }
        if ($priority_group_ids !== null) {
            $queryParams['priorityGroupIds'] = $this->apiClient->getSerializer()->toQueryValue($priority_group_ids);
        }
        // query params
        if (is_array($family_ids)) {
            $family_ids = $this->apiClient->getSerializer()->serializeCollection($family_ids, 'csv', true);
        }
        if ($family_ids !== null) {
            $queryParams['familyIds'] = $this->apiClient->getSerializer()->toQueryValue($family_ids);
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
                'string',
                '/v1/export/matrix-products'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
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
     * Operation v1ExportProductsGet
     *
     * Get Products Export
     *
     * @param int[] $ids export only selected product IDs. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $group_ids filter by the group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $unit_ids filter by the unit ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $tax_rate_ids filter by the tax rate ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $category_ids filter by the category ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $brand_ids filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $supplier_ids filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $priority_group_ids filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $country_ids filter by the country ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $warehouse_location_ids filter by the warehouse location ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $parent_product_ids filter by the parent product ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $deposit_fee_ids filter by the deposit fee ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $family_ids filter by the family ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @return string
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ExportProductsGet($ids = null, $group_ids = null, $unit_ids = null, $tax_rate_ids = null, $category_ids = null, $brand_ids = null, $supplier_ids = null, $priority_group_ids = null, $country_ids = null, $warehouse_location_ids = null, $parent_product_ids = null, $deposit_fee_ids = null, $family_ids = null)
    {
        list($response) = $this->v1ExportProductsGetWithHttpInfo($ids, $group_ids, $unit_ids, $tax_rate_ids, $category_ids, $brand_ids, $supplier_ids, $priority_group_ids, $country_ids, $warehouse_location_ids, $parent_product_ids, $deposit_fee_ids, $family_ids);
        return $response;
    }

    /**
     * Operation v1ExportProductsGetWithHttpInfo
     *
     * Get Products Export
     *
     * @param int[] $ids export only selected product IDs. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $group_ids filter by the group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $unit_ids filter by the unit ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $tax_rate_ids filter by the tax rate ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $category_ids filter by the category ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $brand_ids filter by the brand ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $supplier_ids filter by the supplier ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $priority_group_ids filter by the priority group ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $country_ids filter by the country ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $warehouse_location_ids filter by the warehouse location ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $parent_product_ids filter by the parent product ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $deposit_fee_ids filter by the deposit fee ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @param int[] $family_ids filter by the family ids. The parameter can contain up to 100 semicolon delimited ids. (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ExportProductsGetWithHttpInfo($ids = null, $group_ids = null, $unit_ids = null, $tax_rate_ids = null, $category_ids = null, $brand_ids = null, $supplier_ids = null, $priority_group_ids = null, $country_ids = null, $warehouse_location_ids = null, $parent_product_ids = null, $deposit_fee_ids = null, $family_ids = null)
    {
        // parse inputs
        $resourcePath = "/v1/export/products";
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
        if (is_array($ids)) {
            $ids = $this->apiClient->getSerializer()->serializeCollection($ids, 'csv', true);
        }
        if ($ids !== null) {
            $queryParams['ids'] = $this->apiClient->getSerializer()->toQueryValue($ids);
        }
        // query params
        if (is_array($group_ids)) {
            $group_ids = $this->apiClient->getSerializer()->serializeCollection($group_ids, 'csv', true);
        }
        if ($group_ids !== null) {
            $queryParams['groupIds'] = $this->apiClient->getSerializer()->toQueryValue($group_ids);
        }
        // query params
        if (is_array($unit_ids)) {
            $unit_ids = $this->apiClient->getSerializer()->serializeCollection($unit_ids, 'csv', true);
        }
        if ($unit_ids !== null) {
            $queryParams['unitIds'] = $this->apiClient->getSerializer()->toQueryValue($unit_ids);
        }
        // query params
        if (is_array($tax_rate_ids)) {
            $tax_rate_ids = $this->apiClient->getSerializer()->serializeCollection($tax_rate_ids, 'csv', true);
        }
        if ($tax_rate_ids !== null) {
            $queryParams['taxRateIds'] = $this->apiClient->getSerializer()->toQueryValue($tax_rate_ids);
        }
        // query params
        if (is_array($category_ids)) {
            $category_ids = $this->apiClient->getSerializer()->serializeCollection($category_ids, 'csv', true);
        }
        if ($category_ids !== null) {
            $queryParams['categoryIds'] = $this->apiClient->getSerializer()->toQueryValue($category_ids);
        }
        // query params
        if (is_array($brand_ids)) {
            $brand_ids = $this->apiClient->getSerializer()->serializeCollection($brand_ids, 'csv', true);
        }
        if ($brand_ids !== null) {
            $queryParams['brandIds'] = $this->apiClient->getSerializer()->toQueryValue($brand_ids);
        }
        // query params
        if (is_array($supplier_ids)) {
            $supplier_ids = $this->apiClient->getSerializer()->serializeCollection($supplier_ids, 'csv', true);
        }
        if ($supplier_ids !== null) {
            $queryParams['supplierIds'] = $this->apiClient->getSerializer()->toQueryValue($supplier_ids);
        }
        // query params
        if (is_array($priority_group_ids)) {
            $priority_group_ids = $this->apiClient->getSerializer()->serializeCollection($priority_group_ids, 'csv', true);
        }
        if ($priority_group_ids !== null) {
            $queryParams['priorityGroupIds'] = $this->apiClient->getSerializer()->toQueryValue($priority_group_ids);
        }
        // query params
        if (is_array($country_ids)) {
            $country_ids = $this->apiClient->getSerializer()->serializeCollection($country_ids, 'csv', true);
        }
        if ($country_ids !== null) {
            $queryParams['countryIds'] = $this->apiClient->getSerializer()->toQueryValue($country_ids);
        }
        // query params
        if (is_array($warehouse_location_ids)) {
            $warehouse_location_ids = $this->apiClient->getSerializer()->serializeCollection($warehouse_location_ids, 'csv', true);
        }
        if ($warehouse_location_ids !== null) {
            $queryParams['warehouseLocationIds'] = $this->apiClient->getSerializer()->toQueryValue($warehouse_location_ids);
        }
        // query params
        if (is_array($parent_product_ids)) {
            $parent_product_ids = $this->apiClient->getSerializer()->serializeCollection($parent_product_ids, 'csv', true);
        }
        if ($parent_product_ids !== null) {
            $queryParams['parentProductIds'] = $this->apiClient->getSerializer()->toQueryValue($parent_product_ids);
        }
        // query params
        if (is_array($deposit_fee_ids)) {
            $deposit_fee_ids = $this->apiClient->getSerializer()->serializeCollection($deposit_fee_ids, 'csv', true);
        }
        if ($deposit_fee_ids !== null) {
            $queryParams['depositFeeIds'] = $this->apiClient->getSerializer()->toQueryValue($deposit_fee_ids);
        }
        // query params
        if (is_array($family_ids)) {
            $family_ids = $this->apiClient->getSerializer()->serializeCollection($family_ids, 'csv', true);
        }
        if ($family_ids !== null) {
            $queryParams['familyIds'] = $this->apiClient->getSerializer()->toQueryValue($family_ids);
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
                'string',
                '/v1/export/products'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
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
