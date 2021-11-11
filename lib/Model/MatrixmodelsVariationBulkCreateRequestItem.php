<?php
/**
 * MatrixmodelsVariationBulkCreateRequestItem
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * MatrixmodelsVariationBulkCreateRequestItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MatrixmodelsVariationBulkCreateRequestItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'matrixmodels.VariationBulkCreateRequestItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'dimension_value_ids' => 'int[]',
        'generate_code2_automatically' => 'bool',
        'generate_code_automatically' => 'bool',
        'matrix_product_id' => 'int',
        'variation_product' => '\Swagger\Client\Model\ProductsProductRequest'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'dimension_value_ids' => 'dimension_value_ids',
        'generate_code2_automatically' => 'generateCode2Automatically',
        'generate_code_automatically' => 'generateCodeAutomatically',
        'matrix_product_id' => 'matrixProductID',
        'variation_product' => 'variation_product'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'dimension_value_ids' => 'setDimensionValueIds',
        'generate_code2_automatically' => 'setGenerateCode2Automatically',
        'generate_code_automatically' => 'setGenerateCodeAutomatically',
        'matrix_product_id' => 'setMatrixProductId',
        'variation_product' => 'setVariationProduct'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'dimension_value_ids' => 'getDimensionValueIds',
        'generate_code2_automatically' => 'getGenerateCode2Automatically',
        'generate_code_automatically' => 'getGenerateCodeAutomatically',
        'matrix_product_id' => 'getMatrixProductId',
        'variation_product' => 'getVariationProduct'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['dimension_value_ids'] = isset($data['dimension_value_ids']) ? $data['dimension_value_ids'] : null;
        $this->container['generate_code2_automatically'] = isset($data['generate_code2_automatically']) ? $data['generate_code2_automatically'] : null;
        $this->container['generate_code_automatically'] = isset($data['generate_code_automatically']) ? $data['generate_code_automatically'] : null;
        $this->container['matrix_product_id'] = isset($data['matrix_product_id']) ? $data['matrix_product_id'] : null;
        $this->container['variation_product'] = isset($data['variation_product']) ? $data['variation_product'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets dimension_value_ids
     * @return int[]
     */
    public function getDimensionValueIds()
    {
        return $this->container['dimension_value_ids'];
    }

    /**
     * Sets dimension_value_ids
     * @param int[] $dimension_value_ids Matrix variation can have up to 3 dimension values
     * @return $this
     */
    public function setDimensionValueIds($dimension_value_ids)
    {
        $this->container['dimension_value_ids'] = $dimension_value_ids;

        return $this;
    }

    /**
     * Gets generate_code2_automatically
     * @return bool
     */
    public function getGenerateCode2Automatically()
    {
        return $this->container['generate_code2_automatically'];
    }

    /**
     * Sets generate_code2_automatically
     * @param bool $generate_code2_automatically if true, the product code1 will be generated based on the user configuration or will generate the conde in case there is none
     * @return $this
     */
    public function setGenerateCode2Automatically($generate_code2_automatically)
    {
        $this->container['generate_code2_automatically'] = $generate_code2_automatically;

        return $this;
    }

    /**
     * Gets generate_code_automatically
     * @return bool
     */
    public function getGenerateCodeAutomatically()
    {
        return $this->container['generate_code_automatically'];
    }

    /**
     * Sets generate_code_automatically
     * @param bool $generate_code_automatically if true, the product code will be generated based on the user configuration or will generate the conde in case there is none
     * @return $this
     */
    public function setGenerateCodeAutomatically($generate_code_automatically)
    {
        $this->container['generate_code_automatically'] = $generate_code_automatically;

        return $this;
    }

    /**
     * Gets matrix_product_id
     * @return int
     */
    public function getMatrixProductId()
    {
        return $this->container['matrix_product_id'];
    }

    /**
     * Sets matrix_product_id
     * @param int $matrix_product_id
     * @return $this
     */
    public function setMatrixProductId($matrix_product_id)
    {
        $this->container['matrix_product_id'] = $matrix_product_id;

        return $this;
    }

    /**
     * Gets variation_product
     * @return \Swagger\Client\Model\ProductsProductRequest
     */
    public function getVariationProduct()
    {
        return $this->container['variation_product'];
    }

    /**
     * Sets variation_product
     * @param \Swagger\Client\Model\ProductsProductRequest $variation_product product, type must be PRODUCT
     * @return $this
     */
    public function setVariationProduct($variation_product)
    {
        $this->container['variation_product'] = $variation_product;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


