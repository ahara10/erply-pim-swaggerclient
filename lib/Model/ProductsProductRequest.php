<?php
/**
 * ProductsProductRequest
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
 * ProductsProductRequest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductsProductRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'products.ProductRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'age_restriction' => 'int',
        'alcohol_percentage' => 'string',
        'alcohol_registry_number' => 'string',
        'backup_id' => 'int',
        'batches' => 'string',
        'brand_id' => 'int',
        'cashier_must_enter_price' => 'int',
        'category_id' => 'int',
        'code' => 'string',
        'code2' => 'string',
        'code3' => 'string',
        'code5' => 'string',
        'code6' => 'string',
        'code7' => 'string',
        'code8' => 'string',
        'cost' => 'float',
        'country_of_origin_id' => 'int',
        'delivery_time' => 'string',
        'deposit_fee_amount' => 'int',
        'deposit_fee_id' => 'int',
        'description' => '\Swagger\Client\Model\CommonmodelsDescription',
        'displayed_in_webshop' => 'int',
        'excise_declaration_number' => 'string',
        'extra_field1_id' => 'int',
        'extra_field2_id' => 'int',
        'extra_field3_id' => 'int',
        'extra_field4_id' => 'int',
        'family_id' => 'int',
        'gross_weight' => 'float',
        'group_id' => 'int',
        'has_serial_numbers' => 'int',
        'height' => 'float',
        'is_gift_card' => 'int',
        'is_regular_gift_card' => 'int',
        'labels_not_needed' => 'int',
        'length' => 'float',
        'location_in_warehouse_id' => 'int',
        'location_in_warehouse_text' => 'string',
        'manufacturer_name' => 'string',
        'name' => '\Swagger\Client\Model\CommonmodelsTranslatable',
        'net_weight' => 'float',
        'non_discountable' => 'int',
        'non_refundable' => 'int',
        'non_stock_product' => 'int',
        'packaging_type' => 'string',
        'packing_not_required' => 'int',
        'parent_product_id' => 'int',
        'price' => 'float',
        'priority_group_id' => 'int',
        'product_reorder_multiples' => 'int',
        'reward_points_not_allowed' => 'int',
        'sold_in_packages' => 'int',
        'status' => 'string',
        'suggested_retail_price' => 'float',
        'supplier_code' => 'string',
        'supplier_id' => 'int',
        'tax_free' => 'int',
        'tax_rate_id' => 'int',
        'type' => 'string',
        'unit_id' => 'int',
        'volume' => 'int',
        'width' => 'float'
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
        'age_restriction' => 'age_restriction',
        'alcohol_percentage' => 'alcohol_percentage',
        'alcohol_registry_number' => 'alcohol_registry_number',
        'backup_id' => 'backup_id',
        'batches' => 'batches',
        'brand_id' => 'brand_id',
        'cashier_must_enter_price' => 'cashier_must_enter_price',
        'category_id' => 'category_id',
        'code' => 'code',
        'code2' => 'code2',
        'code3' => 'code3',
        'code5' => 'code5',
        'code6' => 'code6',
        'code7' => 'code7',
        'code8' => 'code8',
        'cost' => 'cost',
        'country_of_origin_id' => 'country_of_origin_id',
        'delivery_time' => 'delivery_time',
        'deposit_fee_amount' => 'deposit_fee_amount',
        'deposit_fee_id' => 'deposit_fee_id',
        'description' => 'description',
        'displayed_in_webshop' => 'displayed_in_webshop',
        'excise_declaration_number' => 'excise_declaration_number',
        'extra_field1_id' => 'extra_field1_id',
        'extra_field2_id' => 'extra_field2_id',
        'extra_field3_id' => 'extra_field3_id',
        'extra_field4_id' => 'extra_field4_id',
        'family_id' => 'family_id',
        'gross_weight' => 'gross_weight',
        'group_id' => 'group_id',
        'has_serial_numbers' => 'has_serial_numbers',
        'height' => 'height',
        'is_gift_card' => 'is_gift_card',
        'is_regular_gift_card' => 'is_regular_gift_card',
        'labels_not_needed' => 'labels_not_needed',
        'length' => 'length',
        'location_in_warehouse_id' => 'location_in_warehouse_id',
        'location_in_warehouse_text' => 'location_in_warehouse_text',
        'manufacturer_name' => 'manufacturer_name',
        'name' => 'name',
        'net_weight' => 'net_weight',
        'non_discountable' => 'non_discountable',
        'non_refundable' => 'non_refundable',
        'non_stock_product' => 'non_stock_product',
        'packaging_type' => 'packaging_type',
        'packing_not_required' => 'packing_not_required',
        'parent_product_id' => 'parent_product_id',
        'price' => 'price',
        'priority_group_id' => 'priority_group_id',
        'product_reorder_multiples' => 'product_reorder_multiples',
        'reward_points_not_allowed' => 'reward_points_not_allowed',
        'sold_in_packages' => 'sold_in_packages',
        'status' => 'status',
        'suggested_retail_price' => 'suggested_retail_price',
        'supplier_code' => 'supplier_code',
        'supplier_id' => 'supplier_id',
        'tax_free' => 'tax_free',
        'tax_rate_id' => 'tax_rate_id',
        'type' => 'type',
        'unit_id' => 'unit_id',
        'volume' => 'volume',
        'width' => 'width'
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
        'age_restriction' => 'setAgeRestriction',
        'alcohol_percentage' => 'setAlcoholPercentage',
        'alcohol_registry_number' => 'setAlcoholRegistryNumber',
        'backup_id' => 'setBackupId',
        'batches' => 'setBatches',
        'brand_id' => 'setBrandId',
        'cashier_must_enter_price' => 'setCashierMustEnterPrice',
        'category_id' => 'setCategoryId',
        'code' => 'setCode',
        'code2' => 'setCode2',
        'code3' => 'setCode3',
        'code5' => 'setCode5',
        'code6' => 'setCode6',
        'code7' => 'setCode7',
        'code8' => 'setCode8',
        'cost' => 'setCost',
        'country_of_origin_id' => 'setCountryOfOriginId',
        'delivery_time' => 'setDeliveryTime',
        'deposit_fee_amount' => 'setDepositFeeAmount',
        'deposit_fee_id' => 'setDepositFeeId',
        'description' => 'setDescription',
        'displayed_in_webshop' => 'setDisplayedInWebshop',
        'excise_declaration_number' => 'setExciseDeclarationNumber',
        'extra_field1_id' => 'setExtraField1Id',
        'extra_field2_id' => 'setExtraField2Id',
        'extra_field3_id' => 'setExtraField3Id',
        'extra_field4_id' => 'setExtraField4Id',
        'family_id' => 'setFamilyId',
        'gross_weight' => 'setGrossWeight',
        'group_id' => 'setGroupId',
        'has_serial_numbers' => 'setHasSerialNumbers',
        'height' => 'setHeight',
        'is_gift_card' => 'setIsGiftCard',
        'is_regular_gift_card' => 'setIsRegularGiftCard',
        'labels_not_needed' => 'setLabelsNotNeeded',
        'length' => 'setLength',
        'location_in_warehouse_id' => 'setLocationInWarehouseId',
        'location_in_warehouse_text' => 'setLocationInWarehouseText',
        'manufacturer_name' => 'setManufacturerName',
        'name' => 'setName',
        'net_weight' => 'setNetWeight',
        'non_discountable' => 'setNonDiscountable',
        'non_refundable' => 'setNonRefundable',
        'non_stock_product' => 'setNonStockProduct',
        'packaging_type' => 'setPackagingType',
        'packing_not_required' => 'setPackingNotRequired',
        'parent_product_id' => 'setParentProductId',
        'price' => 'setPrice',
        'priority_group_id' => 'setPriorityGroupId',
        'product_reorder_multiples' => 'setProductReorderMultiples',
        'reward_points_not_allowed' => 'setRewardPointsNotAllowed',
        'sold_in_packages' => 'setSoldInPackages',
        'status' => 'setStatus',
        'suggested_retail_price' => 'setSuggestedRetailPrice',
        'supplier_code' => 'setSupplierCode',
        'supplier_id' => 'setSupplierId',
        'tax_free' => 'setTaxFree',
        'tax_rate_id' => 'setTaxRateId',
        'type' => 'setType',
        'unit_id' => 'setUnitId',
        'volume' => 'setVolume',
        'width' => 'setWidth'
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
        'age_restriction' => 'getAgeRestriction',
        'alcohol_percentage' => 'getAlcoholPercentage',
        'alcohol_registry_number' => 'getAlcoholRegistryNumber',
        'backup_id' => 'getBackupId',
        'batches' => 'getBatches',
        'brand_id' => 'getBrandId',
        'cashier_must_enter_price' => 'getCashierMustEnterPrice',
        'category_id' => 'getCategoryId',
        'code' => 'getCode',
        'code2' => 'getCode2',
        'code3' => 'getCode3',
        'code5' => 'getCode5',
        'code6' => 'getCode6',
        'code7' => 'getCode7',
        'code8' => 'getCode8',
        'cost' => 'getCost',
        'country_of_origin_id' => 'getCountryOfOriginId',
        'delivery_time' => 'getDeliveryTime',
        'deposit_fee_amount' => 'getDepositFeeAmount',
        'deposit_fee_id' => 'getDepositFeeId',
        'description' => 'getDescription',
        'displayed_in_webshop' => 'getDisplayedInWebshop',
        'excise_declaration_number' => 'getExciseDeclarationNumber',
        'extra_field1_id' => 'getExtraField1Id',
        'extra_field2_id' => 'getExtraField2Id',
        'extra_field3_id' => 'getExtraField3Id',
        'extra_field4_id' => 'getExtraField4Id',
        'family_id' => 'getFamilyId',
        'gross_weight' => 'getGrossWeight',
        'group_id' => 'getGroupId',
        'has_serial_numbers' => 'getHasSerialNumbers',
        'height' => 'getHeight',
        'is_gift_card' => 'getIsGiftCard',
        'is_regular_gift_card' => 'getIsRegularGiftCard',
        'labels_not_needed' => 'getLabelsNotNeeded',
        'length' => 'getLength',
        'location_in_warehouse_id' => 'getLocationInWarehouseId',
        'location_in_warehouse_text' => 'getLocationInWarehouseText',
        'manufacturer_name' => 'getManufacturerName',
        'name' => 'getName',
        'net_weight' => 'getNetWeight',
        'non_discountable' => 'getNonDiscountable',
        'non_refundable' => 'getNonRefundable',
        'non_stock_product' => 'getNonStockProduct',
        'packaging_type' => 'getPackagingType',
        'packing_not_required' => 'getPackingNotRequired',
        'parent_product_id' => 'getParentProductId',
        'price' => 'getPrice',
        'priority_group_id' => 'getPriorityGroupId',
        'product_reorder_multiples' => 'getProductReorderMultiples',
        'reward_points_not_allowed' => 'getRewardPointsNotAllowed',
        'sold_in_packages' => 'getSoldInPackages',
        'status' => 'getStatus',
        'suggested_retail_price' => 'getSuggestedRetailPrice',
        'supplier_code' => 'getSupplierCode',
        'supplier_id' => 'getSupplierId',
        'tax_free' => 'getTaxFree',
        'tax_rate_id' => 'getTaxRateId',
        'type' => 'getType',
        'unit_id' => 'getUnitId',
        'volume' => 'getVolume',
        'width' => 'getWidth'
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
        $this->container['age_restriction'] = isset($data['age_restriction']) ? $data['age_restriction'] : null;
        $this->container['alcohol_percentage'] = isset($data['alcohol_percentage']) ? $data['alcohol_percentage'] : null;
        $this->container['alcohol_registry_number'] = isset($data['alcohol_registry_number']) ? $data['alcohol_registry_number'] : null;
        $this->container['backup_id'] = isset($data['backup_id']) ? $data['backup_id'] : null;
        $this->container['batches'] = isset($data['batches']) ? $data['batches'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['cashier_must_enter_price'] = isset($data['cashier_must_enter_price']) ? $data['cashier_must_enter_price'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['code2'] = isset($data['code2']) ? $data['code2'] : null;
        $this->container['code3'] = isset($data['code3']) ? $data['code3'] : null;
        $this->container['code5'] = isset($data['code5']) ? $data['code5'] : null;
        $this->container['code6'] = isset($data['code6']) ? $data['code6'] : null;
        $this->container['code7'] = isset($data['code7']) ? $data['code7'] : null;
        $this->container['code8'] = isset($data['code8']) ? $data['code8'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['country_of_origin_id'] = isset($data['country_of_origin_id']) ? $data['country_of_origin_id'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['deposit_fee_amount'] = isset($data['deposit_fee_amount']) ? $data['deposit_fee_amount'] : null;
        $this->container['deposit_fee_id'] = isset($data['deposit_fee_id']) ? $data['deposit_fee_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayed_in_webshop'] = isset($data['displayed_in_webshop']) ? $data['displayed_in_webshop'] : null;
        $this->container['excise_declaration_number'] = isset($data['excise_declaration_number']) ? $data['excise_declaration_number'] : null;
        $this->container['extra_field1_id'] = isset($data['extra_field1_id']) ? $data['extra_field1_id'] : null;
        $this->container['extra_field2_id'] = isset($data['extra_field2_id']) ? $data['extra_field2_id'] : null;
        $this->container['extra_field3_id'] = isset($data['extra_field3_id']) ? $data['extra_field3_id'] : null;
        $this->container['extra_field4_id'] = isset($data['extra_field4_id']) ? $data['extra_field4_id'] : null;
        $this->container['family_id'] = isset($data['family_id']) ? $data['family_id'] : null;
        $this->container['gross_weight'] = isset($data['gross_weight']) ? $data['gross_weight'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['has_serial_numbers'] = isset($data['has_serial_numbers']) ? $data['has_serial_numbers'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['is_gift_card'] = isset($data['is_gift_card']) ? $data['is_gift_card'] : null;
        $this->container['is_regular_gift_card'] = isset($data['is_regular_gift_card']) ? $data['is_regular_gift_card'] : null;
        $this->container['labels_not_needed'] = isset($data['labels_not_needed']) ? $data['labels_not_needed'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['location_in_warehouse_id'] = isset($data['location_in_warehouse_id']) ? $data['location_in_warehouse_id'] : null;
        $this->container['location_in_warehouse_text'] = isset($data['location_in_warehouse_text']) ? $data['location_in_warehouse_text'] : null;
        $this->container['manufacturer_name'] = isset($data['manufacturer_name']) ? $data['manufacturer_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['net_weight'] = isset($data['net_weight']) ? $data['net_weight'] : null;
        $this->container['non_discountable'] = isset($data['non_discountable']) ? $data['non_discountable'] : null;
        $this->container['non_refundable'] = isset($data['non_refundable']) ? $data['non_refundable'] : null;
        $this->container['non_stock_product'] = isset($data['non_stock_product']) ? $data['non_stock_product'] : null;
        $this->container['packaging_type'] = isset($data['packaging_type']) ? $data['packaging_type'] : null;
        $this->container['packing_not_required'] = isset($data['packing_not_required']) ? $data['packing_not_required'] : null;
        $this->container['parent_product_id'] = isset($data['parent_product_id']) ? $data['parent_product_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['priority_group_id'] = isset($data['priority_group_id']) ? $data['priority_group_id'] : null;
        $this->container['product_reorder_multiples'] = isset($data['product_reorder_multiples']) ? $data['product_reorder_multiples'] : null;
        $this->container['reward_points_not_allowed'] = isset($data['reward_points_not_allowed']) ? $data['reward_points_not_allowed'] : null;
        $this->container['sold_in_packages'] = isset($data['sold_in_packages']) ? $data['sold_in_packages'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['suggested_retail_price'] = isset($data['suggested_retail_price']) ? $data['suggested_retail_price'] : null;
        $this->container['supplier_code'] = isset($data['supplier_code']) ? $data['supplier_code'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['tax_free'] = isset($data['tax_free']) ? $data['tax_free'] : null;
        $this->container['tax_rate_id'] = isset($data['tax_rate_id']) ? $data['tax_rate_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * Gets age_restriction
     * @return int
     */
    public function getAgeRestriction()
    {
        return $this->container['age_restriction'];
    }

    /**
     * Sets age_restriction
     * @param int $age_restriction
     * @return $this
     */
    public function setAgeRestriction($age_restriction)
    {
        $this->container['age_restriction'] = $age_restriction;

        return $this;
    }

    /**
     * Gets alcohol_percentage
     * @return string
     */
    public function getAlcoholPercentage()
    {
        return $this->container['alcohol_percentage'];
    }

    /**
     * Sets alcohol_percentage
     * @param string $alcohol_percentage
     * @return $this
     */
    public function setAlcoholPercentage($alcohol_percentage)
    {
        $this->container['alcohol_percentage'] = $alcohol_percentage;

        return $this;
    }

    /**
     * Gets alcohol_registry_number
     * @return string
     */
    public function getAlcoholRegistryNumber()
    {
        return $this->container['alcohol_registry_number'];
    }

    /**
     * Sets alcohol_registry_number
     * @param string $alcohol_registry_number
     * @return $this
     */
    public function setAlcoholRegistryNumber($alcohol_registry_number)
    {
        $this->container['alcohol_registry_number'] = $alcohol_registry_number;

        return $this;
    }

    /**
     * Gets backup_id
     * @return int
     */
    public function getBackupId()
    {
        return $this->container['backup_id'];
    }

    /**
     * Sets backup_id
     * @param int $backup_id
     * @return $this
     */
    public function setBackupId($backup_id)
    {
        $this->container['backup_id'] = $backup_id;

        return $this;
    }

    /**
     * Gets batches
     * @return string
     */
    public function getBatches()
    {
        return $this->container['batches'];
    }

    /**
     * Sets batches
     * @param string $batches
     * @return $this
     */
    public function setBatches($batches)
    {
        $this->container['batches'] = $batches;

        return $this;
    }

    /**
     * Gets brand_id
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     * @param int $brand_id ID of product brand. To get the list of brandmodels, use getBrands.
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets cashier_must_enter_price
     * @return int
     */
    public function getCashierMustEnterPrice()
    {
        return $this->container['cashier_must_enter_price'];
    }

    /**
     * Sets cashier_must_enter_price
     * @param int $cashier_must_enter_price boolean flag 0 or 1
     * @return $this
     */
    public function setCashierMustEnterPrice($cashier_must_enter_price)
    {
        $this->container['cashier_must_enter_price'] = $cashier_must_enter_price;

        return $this;
    }

    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Product's code. Must be UNIQUE, unless the account is configured otherwise.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets code2
     * @return string
     */
    public function getCode2()
    {
        return $this->container['code2'];
    }

    /**
     * Sets code2
     * @param string $code2 Product's second code (by convention, EAN barcode). Must be UNIQUE, unless the account is configured otherwise.
     * @return $this
     */
    public function setCode2($code2)
    {
        $this->container['code2'] = $code2;

        return $this;
    }

    /**
     * Gets code3
     * @return string
     */
    public function getCode3()
    {
        return $this->container['code3'];
    }

    /**
     * Sets code3
     * @param string $code3 Third code of the item (note that this field may not be visible on product card by default).
     * @return $this
     */
    public function setCode3($code3)
    {
        $this->container['code3'] = $code3;

        return $this;
    }

    /**
     * Gets code5
     * @return string
     */
    public function getCode5()
    {
        return $this->container['code5'];
    }

    /**
     * Sets code5
     * @param string $code5
     * @return $this
     */
    public function setCode5($code5)
    {
        $this->container['code5'] = $code5;

        return $this;
    }

    /**
     * Gets code6
     * @return string
     */
    public function getCode6()
    {
        return $this->container['code6'];
    }

    /**
     * Sets code6
     * @param string $code6
     * @return $this
     */
    public function setCode6($code6)
    {
        $this->container['code6'] = $code6;

        return $this;
    }

    /**
     * Gets code7
     * @return string
     */
    public function getCode7()
    {
        return $this->container['code7'];
    }

    /**
     * Sets code7
     * @param string $code7
     * @return $this
     */
    public function setCode7($code7)
    {
        $this->container['code7'] = $code7;

        return $this;
    }

    /**
     * Gets code8
     * @return string
     */
    public function getCode8()
    {
        return $this->container['code8'];
    }

    /**
     * Sets code8
     * @param string $code8
     * @return $this
     */
    public function setCode8($code8)
    {
        $this->container['code8'] = $code8;

        return $this;
    }

    /**
     * Gets cost
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param float $cost Cost is Product cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets country_of_origin_id
     * @return int
     */
    public function getCountryOfOriginId()
    {
        return $this->container['country_of_origin_id'];
    }

    /**
     * Sets country_of_origin_id
     * @param int $country_of_origin_id
     * @return $this
     */
    public function setCountryOfOriginId($country_of_origin_id)
    {
        $this->container['country_of_origin_id'] = $country_of_origin_id;

        return $this;
    }

    /**
     * Gets delivery_time
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     * @param string $delivery_time
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets deposit_fee_amount
     * @return int
     */
    public function getDepositFeeAmount()
    {
        return $this->container['deposit_fee_amount'];
    }

    /**
     * Sets deposit_fee_amount
     * @param int $deposit_fee_amount
     * @return $this
     */
    public function setDepositFeeAmount($deposit_fee_amount)
    {
        $this->container['deposit_fee_amount'] = $deposit_fee_amount;

        return $this;
    }

    /**
     * Gets deposit_fee_id
     * @return int
     */
    public function getDepositFeeId()
    {
        return $this->container['deposit_fee_id'];
    }

    /**
     * Sets deposit_fee_id
     * @param int $deposit_fee_id ContainerID is ID of another product, a beverage container that is always sold together with this item.
     * @return $this
     */
    public function setDepositFeeId($deposit_fee_id)
    {
        $this->container['deposit_fee_id'] = $deposit_fee_id;

        return $this;
    }

    /**
     * Gets description
     * @return \Swagger\Client\Model\CommonmodelsDescription
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Swagger\Client\Model\CommonmodelsDescription $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets displayed_in_webshop
     * @return int
     */
    public function getDisplayedInWebshop()
    {
        return $this->container['displayed_in_webshop'];
    }

    /**
     * Sets displayed_in_webshop
     * @param int $displayed_in_webshop 0 or 1
     * @return $this
     */
    public function setDisplayedInWebshop($displayed_in_webshop)
    {
        $this->container['displayed_in_webshop'] = $displayed_in_webshop;

        return $this;
    }

    /**
     * Gets excise_declaration_number
     * @return string
     */
    public function getExciseDeclarationNumber()
    {
        return $this->container['excise_declaration_number'];
    }

    /**
     * Sets excise_declaration_number
     * @param string $excise_declaration_number
     * @return $this
     */
    public function setExciseDeclarationNumber($excise_declaration_number)
    {
        $this->container['excise_declaration_number'] = $excise_declaration_number;

        return $this;
    }

    /**
     * Gets extra_field1_id
     * @return int
     */
    public function getExtraField1Id()
    {
        return $this->container['extra_field1_id'];
    }

    /**
     * Sets extra_field1_id
     * @param int $extra_field1_id
     * @return $this
     */
    public function setExtraField1Id($extra_field1_id)
    {
        $this->container['extra_field1_id'] = $extra_field1_id;

        return $this;
    }

    /**
     * Gets extra_field2_id
     * @return int
     */
    public function getExtraField2Id()
    {
        return $this->container['extra_field2_id'];
    }

    /**
     * Sets extra_field2_id
     * @param int $extra_field2_id
     * @return $this
     */
    public function setExtraField2Id($extra_field2_id)
    {
        $this->container['extra_field2_id'] = $extra_field2_id;

        return $this;
    }

    /**
     * Gets extra_field3_id
     * @return int
     */
    public function getExtraField3Id()
    {
        return $this->container['extra_field3_id'];
    }

    /**
     * Sets extra_field3_id
     * @param int $extra_field3_id
     * @return $this
     */
    public function setExtraField3Id($extra_field3_id)
    {
        $this->container['extra_field3_id'] = $extra_field3_id;

        return $this;
    }

    /**
     * Gets extra_field4_id
     * @return int
     */
    public function getExtraField4Id()
    {
        return $this->container['extra_field4_id'];
    }

    /**
     * Sets extra_field4_id
     * @param int $extra_field4_id
     * @return $this
     */
    public function setExtraField4Id($extra_field4_id)
    {
        $this->container['extra_field4_id'] = $extra_field4_id;

        return $this;
    }

    /**
     * Gets family_id
     * @return int
     */
    public function getFamilyId()
    {
        return $this->container['family_id'];
    }

    /**
     * Sets family_id
     * @param int $family_id
     * @return $this
     */
    public function setFamilyId($family_id)
    {
        $this->container['family_id'] = $family_id;

        return $this;
    }

    /**
     * Gets gross_weight
     * @return float
     */
    public function getGrossWeight()
    {
        return $this->container['gross_weight'];
    }

    /**
     * Sets gross_weight
     * @param float $gross_weight GrossWeight is Item's gross weight (with packaging). Unit depends on region, check your Erply account (typically lbs or kg).
     * @return $this
     */
    public function setGrossWeight($gross_weight)
    {
        $this->container['gross_weight'] = $gross_weight;

        return $this;
    }

    /**
     * Gets group_id
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     * @param int $group_id ID of product group. To get the list of product groups, use getProductGroups.
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets has_serial_numbers
     * @return int
     */
    public function getHasSerialNumbers()
    {
        return $this->container['has_serial_numbers'];
    }

    /**
     * Sets has_serial_numbers
     * @param int $has_serial_numbers
     * @return $this
     */
    public function setHasSerialNumbers($has_serial_numbers)
    {
        $this->container['has_serial_numbers'] = $has_serial_numbers;

        return $this;
    }

    /**
     * Gets height
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param float $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets is_gift_card
     * @return int
     */
    public function getIsGiftCard()
    {
        return $this->container['is_gift_card'];
    }

    /**
     * Sets is_gift_card
     * @param int $is_gift_card 0 or 1
     * @return $this
     */
    public function setIsGiftCard($is_gift_card)
    {
        $this->container['is_gift_card'] = $is_gift_card;

        return $this;
    }

    /**
     * Gets is_regular_gift_card
     * @return int
     */
    public function getIsRegularGiftCard()
    {
        return $this->container['is_regular_gift_card'];
    }

    /**
     * Sets is_regular_gift_card
     * @param int $is_regular_gift_card boolean flag 0 or 1
     * @return $this
     */
    public function setIsRegularGiftCard($is_regular_gift_card)
    {
        $this->container['is_regular_gift_card'] = $is_regular_gift_card;

        return $this;
    }

    /**
     * Gets labels_not_needed
     * @return int
     */
    public function getLabelsNotNeeded()
    {
        return $this->container['labels_not_needed'];
    }

    /**
     * Sets labels_not_needed
     * @param int $labels_not_needed boolean flag 0 or 1
     * @return $this
     */
    public function setLabelsNotNeeded($labels_not_needed)
    {
        $this->container['labels_not_needed'] = $labels_not_needed;

        return $this;
    }

    /**
     * Gets length
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     * @param float $length Length is Item's physical dimensions.
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets location_in_warehouse_id
     * @return int
     */
    public function getLocationInWarehouseId()
    {
        return $this->container['location_in_warehouse_id'];
    }

    /**
     * Sets location_in_warehouse_id
     * @param int $location_in_warehouse_id LocationInWarehouseID is ID of selected location in warehouse.
     * @return $this
     */
    public function setLocationInWarehouseId($location_in_warehouse_id)
    {
        $this->container['location_in_warehouse_id'] = $location_in_warehouse_id;

        return $this;
    }

    /**
     * Gets location_in_warehouse_text
     * @return string
     */
    public function getLocationInWarehouseText()
    {
        return $this->container['location_in_warehouse_text'];
    }

    /**
     * Sets location_in_warehouse_text
     * @param string $location_in_warehouse_text LocationInWarehouseText is Product's specific text added to location in warehouse.
     * @return $this
     */
    public function setLocationInWarehouseText($location_in_warehouse_text)
    {
        $this->container['location_in_warehouse_text'] = $location_in_warehouse_text;

        return $this;
    }

    /**
     * Gets manufacturer_name
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturer_name'];
    }

    /**
     * Sets manufacturer_name
     * @param string $manufacturer_name
     * @return $this
     */
    public function setManufacturerName($manufacturer_name)
    {
        $this->container['manufacturer_name'] = $manufacturer_name;

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
     * Gets net_weight
     * @return float
     */
    public function getNetWeight()
    {
        return $this->container['net_weight'];
    }

    /**
     * Sets net_weight
     * @param float $net_weight NetWeight is Item's net weight. Unit depends on region, check your Erply account (typically lbs or kg).
     * @return $this
     */
    public function setNetWeight($net_weight)
    {
        $this->container['net_weight'] = $net_weight;

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
     * @param int $non_discountable 0 or 1
     * @return $this
     */
    public function setNonDiscountable($non_discountable)
    {
        $this->container['non_discountable'] = $non_discountable;

        return $this;
    }

    /**
     * Gets non_refundable
     * @return int
     */
    public function getNonRefundable()
    {
        return $this->container['non_refundable'];
    }

    /**
     * Sets non_refundable
     * @param int $non_refundable 0 or 1
     * @return $this
     */
    public function setNonRefundable($non_refundable)
    {
        $this->container['non_refundable'] = $non_refundable;

        return $this;
    }

    /**
     * Gets non_stock_product
     * @return int
     */
    public function getNonStockProduct()
    {
        return $this->container['non_stock_product'];
    }

    /**
     * Sets non_stock_product
     * @param int $non_stock_product boolean flag 0 or 1
     * @return $this
     */
    public function setNonStockProduct($non_stock_product)
    {
        $this->container['non_stock_product'] = $non_stock_product;

        return $this;
    }

    /**
     * Gets packaging_type
     * @return string
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     * @param string $packaging_type
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets packing_not_required
     * @return int
     */
    public function getPackingNotRequired()
    {
        return $this->container['packing_not_required'];
    }

    /**
     * Sets packing_not_required
     * @param int $packing_not_required
     * @return $this
     */
    public function setPackingNotRequired($packing_not_required)
    {
        $this->container['packing_not_required'] = $packing_not_required;

        return $this;
    }

    /**
     * Gets parent_product_id
     * @return int
     */
    public function getParentProductId()
    {
        return $this->container['parent_product_id'];
    }

    /**
     * Sets parent_product_id
     * @param int $parent_product_id Parent product ID. Only for matrix variations (specific colors/sizes of a matrix item). See guidelines below.
     * @return $this
     */
    public function setParentProductId($parent_product_id)
    {
        $this->container['parent_product_id'] = $parent_product_id;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price is just the default price of a product and the actual price applied in a particular location, to a particular customer, depends on price lists and promotions: https://learn-api.erply.com/concepts/pricing
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets priority_group_id
     * @return int
     */
    public function getPriorityGroupId()
    {
        return $this->container['priority_group_id'];
    }

    /**
     * Sets priority_group_id
     * @param int $priority_group_id
     * @return $this
     */
    public function setPriorityGroupId($priority_group_id)
    {
        $this->container['priority_group_id'] = $priority_group_id;

        return $this;
    }

    /**
     * Gets product_reorder_multiples
     * @return int
     */
    public function getProductReorderMultiples()
    {
        return $this->container['product_reorder_multiples'];
    }

    /**
     * Sets product_reorder_multiples
     * @param int $product_reorder_multiples
     * @return $this
     */
    public function setProductReorderMultiples($product_reorder_multiples)
    {
        $this->container['product_reorder_multiples'] = $product_reorder_multiples;

        return $this;
    }

    /**
     * Gets reward_points_not_allowed
     * @return int
     */
    public function getRewardPointsNotAllowed()
    {
        return $this->container['reward_points_not_allowed'];
    }

    /**
     * Sets reward_points_not_allowed
     * @param int $reward_points_not_allowed boolean flag 0 or 1
     * @return $this
     */
    public function setRewardPointsNotAllowed($reward_points_not_allowed)
    {
        $this->container['reward_points_not_allowed'] = $reward_points_not_allowed;

        return $this;
    }

    /**
     * Gets sold_in_packages
     * @return int
     */
    public function getSoldInPackages()
    {
        return $this->container['sold_in_packages'];
    }

    /**
     * Sets sold_in_packages
     * @param int $sold_in_packages
     * @return $this
     */
    public function setSoldInPackages($sold_in_packages)
    {
        $this->container['sold_in_packages'] = $sold_in_packages;

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
     * Gets suggested_retail_price
     * @return float
     */
    public function getSuggestedRetailPrice()
    {
        return $this->container['suggested_retail_price'];
    }

    /**
     * Sets suggested_retail_price
     * @param float $suggested_retail_price
     * @return $this
     */
    public function setSuggestedRetailPrice($suggested_retail_price)
    {
        $this->container['suggested_retail_price'] = $suggested_retail_price;

        return $this;
    }

    /**
     * Gets supplier_code
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->container['supplier_code'];
    }

    /**
     * Sets supplier_code
     * @param string $supplier_code Supplier's product code
     * @return $this
     */
    public function setSupplierCode($supplier_code)
    {
        $this->container['supplier_code'] = $supplier_code;

        return $this;
    }

    /**
     * Gets supplier_id
     * @return int
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     * @param int $supplier_id
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets tax_free
     * @return int
     */
    public function getTaxFree()
    {
        return $this->container['tax_free'];
    }

    /**
     * Sets tax_free
     * @param int $tax_free boolean flag 0 or 1
     * @return $this
     */
    public function setTaxFree($tax_free)
    {
        $this->container['tax_free'] = $tax_free;

        return $this;
    }

    /**
     * Gets tax_rate_id
     * @return int
     */
    public function getTaxRateId()
    {
        return $this->container['tax_rate_id'];
    }

    /**
     * Sets tax_rate_id
     * @param int $tax_rate_id TaxRateID is just the default tax rate of a product and the actual tax applied in a particular location depends on multiple rules: https://learn-api.erply.com/concepts/taxes.
     * @return $this
     */
    public function setTaxRateId($tax_rate_id)
    {
        $this->container['tax_rate_id'] = $tax_rate_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Product type, possible types are 'PRODUCT', 'BUNDLE', 'MATRIX', 'ASSEMBLY'. By default 'PRODUCT'.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unit_id
     * @return int
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     * @param int $unit_id ID of product unit. To get the list of units, use getProductUnits.
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets volume
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param int $volume Volume is Item's fluid volume, eg. for beverages or perfumery. Unit depends on locale, check your Erply account (typically mL or fl oz).
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets width
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param float $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


