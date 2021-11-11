<?php
/**
 * GroupmodelsGroupResponse
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
 * GroupmodelsGroupResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GroupmodelsGroupResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'groupmodels.GroupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'added' => 'int',
        'addedby' => 'string',
        'changed' => 'int',
        'changedby' => 'string',
        'description' => '\Swagger\Client\Model\CommonmodelsTranslatable',
        'id' => 'int',
        'location_tax_rates' => '\Swagger\Client\Model\GroupmodelsLocationTaxRate[]',
        'name' => '\Swagger\Client\Model\CommonmodelsTranslatable',
        'non_discountable' => 'int',
        'order' => 'int',
        'parent_id' => 'int',
        'quick_books_credit_account' => 'string',
        'quick_books_debit_account' => 'string',
        'reward_points' => 'float',
        'show_in_webshop' => 'int'
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
        'description' => 'description',
        'id' => 'id',
        'location_tax_rates' => 'location_tax_rates',
        'name' => 'name',
        'non_discountable' => 'non_discountable',
        'order' => 'order',
        'parent_id' => 'parent_id',
        'quick_books_credit_account' => 'quick_books_credit_account',
        'quick_books_debit_account' => 'quick_books_debit_account',
        'reward_points' => 'reward_points',
        'show_in_webshop' => 'show_in_webshop'
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
        'description' => 'setDescription',
        'id' => 'setId',
        'location_tax_rates' => 'setLocationTaxRates',
        'name' => 'setName',
        'non_discountable' => 'setNonDiscountable',
        'order' => 'setOrder',
        'parent_id' => 'setParentId',
        'quick_books_credit_account' => 'setQuickBooksCreditAccount',
        'quick_books_debit_account' => 'setQuickBooksDebitAccount',
        'reward_points' => 'setRewardPoints',
        'show_in_webshop' => 'setShowInWebshop'
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
        'description' => 'getDescription',
        'id' => 'getId',
        'location_tax_rates' => 'getLocationTaxRates',
        'name' => 'getName',
        'non_discountable' => 'getNonDiscountable',
        'order' => 'getOrder',
        'parent_id' => 'getParentId',
        'quick_books_credit_account' => 'getQuickBooksCreditAccount',
        'quick_books_debit_account' => 'getQuickBooksDebitAccount',
        'reward_points' => 'getRewardPoints',
        'show_in_webshop' => 'getShowInWebshop'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location_tax_rates'] = isset($data['location_tax_rates']) ? $data['location_tax_rates'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['non_discountable'] = isset($data['non_discountable']) ? $data['non_discountable'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['quick_books_credit_account'] = isset($data['quick_books_credit_account']) ? $data['quick_books_credit_account'] : null;
        $this->container['quick_books_debit_account'] = isset($data['quick_books_debit_account']) ? $data['quick_books_debit_account'] : null;
        $this->container['reward_points'] = isset($data['reward_points']) ? $data['reward_points'] : null;
        $this->container['show_in_webshop'] = isset($data['show_in_webshop']) ? $data['show_in_webshop'] : null;
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
     * Gets description
     * @return \Swagger\Client\Model\CommonmodelsTranslatable
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Swagger\Client\Model\CommonmodelsTranslatable $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location_tax_rates
     * @return \Swagger\Client\Model\GroupmodelsLocationTaxRate[]
     */
    public function getLocationTaxRates()
    {
        return $this->container['location_tax_rates'];
    }

    /**
     * Sets location_tax_rates
     * @param \Swagger\Client\Model\GroupmodelsLocationTaxRate[] $location_tax_rates
     * @return $this
     */
    public function setLocationTaxRates($location_tax_rates)
    {
        $this->container['location_tax_rates'] = $location_tax_rates;

        return $this;
    }

    /**
     * Gets name
     * @return \Swagger\Client\Model\CommonmodelsTranslatable
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Swagger\Client\Model\CommonmodelsTranslatable $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets non_discountable
     * @return int
     */
    public function getNonDiscountable()
    {
        return $this->container['non_discountable'];
    }

    /**
     * Sets non_discountable
     * @param int $non_discountable
     * @return $this
     */
    public function setNonDiscountable($non_discountable)
    {
        $this->container['non_discountable'] = $non_discountable;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets quick_books_credit_account
     * @return string
     */
    public function getQuickBooksCreditAccount()
    {
        return $this->container['quick_books_credit_account'];
    }

    /**
     * Sets quick_books_credit_account
     * @param string $quick_books_credit_account
     * @return $this
     */
    public function setQuickBooksCreditAccount($quick_books_credit_account)
    {
        $this->container['quick_books_credit_account'] = $quick_books_credit_account;

        return $this;
    }

    /**
     * Gets quick_books_debit_account
     * @return string
     */
    public function getQuickBooksDebitAccount()
    {
        return $this->container['quick_books_debit_account'];
    }

    /**
     * Sets quick_books_debit_account
     * @param string $quick_books_debit_account
     * @return $this
     */
    public function setQuickBooksDebitAccount($quick_books_debit_account)
    {
        $this->container['quick_books_debit_account'] = $quick_books_debit_account;

        return $this;
    }

    /**
     * Gets reward_points
     * @return float
     */
    public function getRewardPoints()
    {
        return $this->container['reward_points'];
    }

    /**
     * Sets reward_points
     * @param float $reward_points
     * @return $this
     */
    public function setRewardPoints($reward_points)
    {
        $this->container['reward_points'] = $reward_points;

        return $this;
    }

    /**
     * Gets show_in_webshop
     * @return int
     */
    public function getShowInWebshop()
    {
        return $this->container['show_in_webshop'];
    }

    /**
     * Sets show_in_webshop
     * @param int $show_in_webshop
     * @return $this
     */
    public function setShowInWebshop($show_in_webshop)
    {
        $this->container['show_in_webshop'] = $show_in_webshop;

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


