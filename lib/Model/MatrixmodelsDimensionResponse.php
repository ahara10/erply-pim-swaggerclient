<?php
/**
 * MatrixmodelsDimensionResponse
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * MatrixmodelsDimensionResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MatrixmodelsDimensionResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'matrixmodels.DimensionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'added' => 'int',
        'addedby' => 'string',
        'changed' => 'int',
        'changedby' => 'string',
        'dimension_id' => 'int',
        'dimension_name' => '\Swagger\Client\Model\CommonmodelsTranslatable',
        'dimension_order' => 'int',
        'status' => 'string'
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
        'added' => 'added',
        'addedby' => 'addedby',
        'changed' => 'changed',
        'changedby' => 'changedby',
        'dimension_id' => 'dimension_id',
        'dimension_name' => 'dimension_name',
        'dimension_order' => 'dimension_order',
        'status' => 'status'
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
        'added' => 'setAdded',
        'addedby' => 'setAddedby',
        'changed' => 'setChanged',
        'changedby' => 'setChangedby',
        'dimension_id' => 'setDimensionId',
        'dimension_name' => 'setDimensionName',
        'dimension_order' => 'setDimensionOrder',
        'status' => 'setStatus'
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
        'added' => 'getAdded',
        'addedby' => 'getAddedby',
        'changed' => 'getChanged',
        'changedby' => 'getChangedby',
        'dimension_id' => 'getDimensionId',
        'dimension_name' => 'getDimensionName',
        'dimension_order' => 'getDimensionOrder',
        'status' => 'getStatus'
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
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['addedby'] = isset($data['addedby']) ? $data['addedby'] : null;
        $this->container['changed'] = isset($data['changed']) ? $data['changed'] : null;
        $this->container['changedby'] = isset($data['changedby']) ? $data['changedby'] : null;
        $this->container['dimension_id'] = isset($data['dimension_id']) ? $data['dimension_id'] : null;
        $this->container['dimension_name'] = isset($data['dimension_name']) ? $data['dimension_name'] : null;
        $this->container['dimension_order'] = isset($data['dimension_order']) ? $data['dimension_order'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets added
     * @return int
     */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
     * Sets added
     * @param int $added Unix timestamp
     * @return $this
     */
    public function setAdded($added)
    {
        $this->container['added'] = $added;

        return $this;
    }

    /**
     * Gets addedby
     * @return string
     */
    public function getAddedby()
    {
        return $this->container['addedby'];
    }

    /**
     * Sets addedby
     * @param string $addedby username
     * @return $this
     */
    public function setAddedby($addedby)
    {
        $this->container['addedby'] = $addedby;

        return $this;
    }

    /**
     * Gets changed
     * @return int
     */
    public function getChanged()
    {
        return $this->container['changed'];
    }

    /**
     * Sets changed
     * @param int $changed Unix timestamp
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->container['changed'] = $changed;

        return $this;
    }

    /**
     * Gets changedby
     * @return string
     */
    public function getChangedby()
    {
        return $this->container['changedby'];
    }

    /**
     * Sets changedby
     * @param string $changedby username
     * @return $this
     */
    public function setChangedby($changedby)
    {
        $this->container['changedby'] = $changedby;

        return $this;
    }

    /**
     * Gets dimension_id
     * @return int
     */
    public function getDimensionId()
    {
        return $this->container['dimension_id'];
    }

    /**
     * Sets dimension_id
     * @param int $dimension_id
     * @return $this
     */
    public function setDimensionId($dimension_id)
    {
        $this->container['dimension_id'] = $dimension_id;

        return $this;
    }

    /**
     * Gets dimension_name
     * @return \Swagger\Client\Model\CommonmodelsTranslatable
     */
    public function getDimensionName()
    {
        return $this->container['dimension_name'];
    }

    /**
     * Sets dimension_name
     * @param \Swagger\Client\Model\CommonmodelsTranslatable $dimension_name
     * @return $this
     */
    public function setDimensionName($dimension_name)
    {
        $this->container['dimension_name'] = $dimension_name;

        return $this;
    }

    /**
     * Gets dimension_order
     * @return int
     */
    public function getDimensionOrder()
    {
        return $this->container['dimension_order'];
    }

    /**
     * Sets dimension_order
     * @param int $dimension_order
     * @return $this
     */
    public function setDimensionOrder($dimension_order)
    {
        $this->container['dimension_order'] = $dimension_order;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status is a classifier with four possible values: 'ACTIVE' (DEFAULT), 'NO_LONGER_ORDERED', 'NOT_FOR_SALE' and 'ARCHIVED'.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


