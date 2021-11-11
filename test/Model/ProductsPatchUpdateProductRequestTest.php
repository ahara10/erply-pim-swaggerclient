<?php
/**
 * ProductsPatchUpdateProductRequestTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * ProductsPatchUpdateProductRequestTest Class Doc Comment
 *
 * @category    Class */
// * @description ProductsPatchUpdateProductRequest
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductsPatchUpdateProductRequestTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "ProductsPatchUpdateProductRequest"
     */
    public function testProductsPatchUpdateProductRequest()
    {

    }

    /**
     * Test attribute "age_restriction"
     */
    public function testPropertyAgeRestriction()
    {

    }

    /**
     * Test attribute "alcohol_percentage"
     */
    public function testPropertyAlcoholPercentage()
    {

    }

    /**
     * Test attribute "alcohol_registry_number"
     */
    public function testPropertyAlcoholRegistryNumber()
    {

    }

    /**
     * Test attribute "backup_id"
     */
    public function testPropertyBackupId()
    {

    }

    /**
     * Test attribute "batches"
     */
    public function testPropertyBatches()
    {

    }

    /**
     * Test attribute "brand_id"
     */
    public function testPropertyBrandId()
    {

    }

    /**
     * Test attribute "cashier_must_enter_price"
     */
    public function testPropertyCashierMustEnterPrice()
    {

    }

    /**
     * Test attribute "category_id"
     */
    public function testPropertyCategoryId()
    {

    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {

    }

    /**
     * Test attribute "code2"
     */
    public function testPropertyCode2()
    {

    }

    /**
     * Test attribute "code3"
     */
    public function testPropertyCode3()
    {

    }

    /**
     * Test attribute "code5"
     */
    public function testPropertyCode5()
    {

    }

    /**
     * Test attribute "code6"
     */
    public function testPropertyCode6()
    {

    }

    /**
     * Test attribute "code7"
     */
    public function testPropertyCode7()
    {

    }

    /**
     * Test attribute "code8"
     */
    public function testPropertyCode8()
    {

    }

    /**
     * Test attribute "cost"
     */
    public function testPropertyCost()
    {

    }

    /**
     * Test attribute "country_of_origin_id"
     */
    public function testPropertyCountryOfOriginId()
    {

    }

    /**
     * Test attribute "delivery_time"
     */
    public function testPropertyDeliveryTime()
    {

    }

    /**
     * Test attribute "deposit_fee_amount"
     */
    public function testPropertyDepositFeeAmount()
    {

    }

    /**
     * Test attribute "deposit_fee_id"
     */
    public function testPropertyDepositFeeId()
    {

    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {

    }

    /**
     * Test attribute "displayed_in_webshop"
     */
    public function testPropertyDisplayedInWebshop()
    {

    }

    /**
     * Test attribute "excise_declaration_number"
     */
    public function testPropertyExciseDeclarationNumber()
    {

    }

    /**
     * Test attribute "extra_field1_id"
     */
    public function testPropertyExtraField1Id()
    {

    }

    /**
     * Test attribute "extra_field2_id"
     */
    public function testPropertyExtraField2Id()
    {

    }

    /**
     * Test attribute "extra_field3_id"
     */
    public function testPropertyExtraField3Id()
    {

    }

    /**
     * Test attribute "extra_field4_id"
     */
    public function testPropertyExtraField4Id()
    {

    }

    /**
     * Test attribute "family_id"
     */
    public function testPropertyFamilyId()
    {

    }

    /**
     * Test attribute "gross_weight"
     */
    public function testPropertyGrossWeight()
    {

    }

    /**
     * Test attribute "group_id"
     */
    public function testPropertyGroupId()
    {

    }

    /**
     * Test attribute "has_serial_numbers"
     */
    public function testPropertyHasSerialNumbers()
    {

    }

    /**
     * Test attribute "height"
     */
    public function testPropertyHeight()
    {

    }

    /**
     * Test attribute "is_gift_card"
     */
    public function testPropertyIsGiftCard()
    {

    }

    /**
     * Test attribute "is_regular_gift_card"
     */
    public function testPropertyIsRegularGiftCard()
    {

    }

    /**
     * Test attribute "labels_not_needed"
     */
    public function testPropertyLabelsNotNeeded()
    {

    }

    /**
     * Test attribute "length"
     */
    public function testPropertyLength()
    {

    }

    /**
     * Test attribute "location_in_warehouse_id"
     */
    public function testPropertyLocationInWarehouseId()
    {

    }

    /**
     * Test attribute "location_in_warehouse_text"
     */
    public function testPropertyLocationInWarehouseText()
    {

    }

    /**
     * Test attribute "manufacturer_name"
     */
    public function testPropertyManufacturerName()
    {

    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {

    }

    /**
     * Test attribute "net_weight"
     */
    public function testPropertyNetWeight()
    {

    }

    /**
     * Test attribute "non_discountable"
     */
    public function testPropertyNonDiscountable()
    {

    }

    /**
     * Test attribute "non_refundable"
     */
    public function testPropertyNonRefundable()
    {

    }

    /**
     * Test attribute "non_stock_product"
     */
    public function testPropertyNonStockProduct()
    {

    }

    /**
     * Test attribute "packaging_type"
     */
    public function testPropertyPackagingType()
    {

    }

    /**
     * Test attribute "packing_not_required"
     */
    public function testPropertyPackingNotRequired()
    {

    }

    /**
     * Test attribute "parent_product_id"
     */
    public function testPropertyParentProductId()
    {

    }

    /**
     * Test attribute "price"
     */
    public function testPropertyPrice()
    {

    }

    /**
     * Test attribute "priority_group_id"
     */
    public function testPropertyPriorityGroupId()
    {

    }

    /**
     * Test attribute "product_reorder_multiples"
     */
    public function testPropertyProductReorderMultiples()
    {

    }

    /**
     * Test attribute "reward_points_not_allowed"
     */
    public function testPropertyRewardPointsNotAllowed()
    {

    }

    /**
     * Test attribute "sold_in_packages"
     */
    public function testPropertySoldInPackages()
    {

    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {

    }

    /**
     * Test attribute "suggested_retail_price"
     */
    public function testPropertySuggestedRetailPrice()
    {

    }

    /**
     * Test attribute "supplier_code"
     */
    public function testPropertySupplierCode()
    {

    }

    /**
     * Test attribute "supplier_id"
     */
    public function testPropertySupplierId()
    {

    }

    /**
     * Test attribute "tax_free"
     */
    public function testPropertyTaxFree()
    {

    }

    /**
     * Test attribute "tax_rate_id"
     */
    public function testPropertyTaxRateId()
    {

    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {

    }

    /**
     * Test attribute "unit_id"
     */
    public function testPropertyUnitId()
    {

    }

    /**
     * Test attribute "volume"
     */
    public function testPropertyVolume()
    {

    }

    /**
     * Test attribute "width"
     */
    public function testPropertyWidth()
    {

    }

}
