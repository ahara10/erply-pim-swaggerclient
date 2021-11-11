<?php
/**
 * CommonmodelsTranslatable
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
 * CommonmodelsTranslatable Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommonmodelsTranslatable implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'commonmodels.Translatable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'ar' => 'string',
        'cs' => 'string',
        'da' => 'string',
        'de' => 'string',
        'el' => 'string',
        'en' => 'string',
        'es' => 'string',
        'et' => 'string',
        'fi' => 'string',
        'fo' => 'string',
        'fr' => 'string',
        'he' => 'string',
        'it' => 'string',
        'lt' => 'string',
        'lv' => 'string',
        'nl' => 'string',
        'no' => 'string',
        'pl' => 'string',
        'ru' => 'string',
        'sv' => 'string',
        'th' => 'string',
        'tr' => 'string',
        'vi' => 'string',
        'zh_hans' => 'string',
        'zh_hant' => 'string'
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
        'ar' => 'ar',
        'cs' => 'cs',
        'da' => 'da',
        'de' => 'de',
        'el' => 'el',
        'en' => 'en',
        'es' => 'es',
        'et' => 'et',
        'fi' => 'fi',
        'fo' => 'fo',
        'fr' => 'fr',
        'he' => 'he',
        'it' => 'it',
        'lt' => 'lt',
        'lv' => 'lv',
        'nl' => 'nl',
        'no' => 'no',
        'pl' => 'pl',
        'ru' => 'ru',
        'sv' => 'sv',
        'th' => 'th',
        'tr' => 'tr',
        'vi' => 'vi',
        'zh_hans' => 'zh_Hans',
        'zh_hant' => 'zh_Hant'
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
        'ar' => 'setAr',
        'cs' => 'setCs',
        'da' => 'setDa',
        'de' => 'setDe',
        'el' => 'setEl',
        'en' => 'setEn',
        'es' => 'setEs',
        'et' => 'setEt',
        'fi' => 'setFi',
        'fo' => 'setFo',
        'fr' => 'setFr',
        'he' => 'setHe',
        'it' => 'setIt',
        'lt' => 'setLt',
        'lv' => 'setLv',
        'nl' => 'setNl',
        'no' => 'setNo',
        'pl' => 'setPl',
        'ru' => 'setRu',
        'sv' => 'setSv',
        'th' => 'setTh',
        'tr' => 'setTr',
        'vi' => 'setVi',
        'zh_hans' => 'setZhHans',
        'zh_hant' => 'setZhHant'
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
        'ar' => 'getAr',
        'cs' => 'getCs',
        'da' => 'getDa',
        'de' => 'getDe',
        'el' => 'getEl',
        'en' => 'getEn',
        'es' => 'getEs',
        'et' => 'getEt',
        'fi' => 'getFi',
        'fo' => 'getFo',
        'fr' => 'getFr',
        'he' => 'getHe',
        'it' => 'getIt',
        'lt' => 'getLt',
        'lv' => 'getLv',
        'nl' => 'getNl',
        'no' => 'getNo',
        'pl' => 'getPl',
        'ru' => 'getRu',
        'sv' => 'getSv',
        'th' => 'getTh',
        'tr' => 'getTr',
        'vi' => 'getVi',
        'zh_hans' => 'getZhHans',
        'zh_hant' => 'getZhHant'
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
        $this->container['ar'] = isset($data['ar']) ? $data['ar'] : null;
        $this->container['cs'] = isset($data['cs']) ? $data['cs'] : null;
        $this->container['da'] = isset($data['da']) ? $data['da'] : null;
        $this->container['de'] = isset($data['de']) ? $data['de'] : null;
        $this->container['el'] = isset($data['el']) ? $data['el'] : null;
        $this->container['en'] = isset($data['en']) ? $data['en'] : null;
        $this->container['es'] = isset($data['es']) ? $data['es'] : null;
        $this->container['et'] = isset($data['et']) ? $data['et'] : null;
        $this->container['fi'] = isset($data['fi']) ? $data['fi'] : null;
        $this->container['fo'] = isset($data['fo']) ? $data['fo'] : null;
        $this->container['fr'] = isset($data['fr']) ? $data['fr'] : null;
        $this->container['he'] = isset($data['he']) ? $data['he'] : null;
        $this->container['it'] = isset($data['it']) ? $data['it'] : null;
        $this->container['lt'] = isset($data['lt']) ? $data['lt'] : null;
        $this->container['lv'] = isset($data['lv']) ? $data['lv'] : null;
        $this->container['nl'] = isset($data['nl']) ? $data['nl'] : null;
        $this->container['no'] = isset($data['no']) ? $data['no'] : null;
        $this->container['pl'] = isset($data['pl']) ? $data['pl'] : null;
        $this->container['ru'] = isset($data['ru']) ? $data['ru'] : null;
        $this->container['sv'] = isset($data['sv']) ? $data['sv'] : null;
        $this->container['th'] = isset($data['th']) ? $data['th'] : null;
        $this->container['tr'] = isset($data['tr']) ? $data['tr'] : null;
        $this->container['vi'] = isset($data['vi']) ? $data['vi'] : null;
        $this->container['zh_hans'] = isset($data['zh_hans']) ? $data['zh_hans'] : null;
        $this->container['zh_hant'] = isset($data['zh_hant']) ? $data['zh_hant'] : null;
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
     * Gets ar
     * @return string
     */
    public function getAr()
    {
        return $this->container['ar'];
    }

    /**
     * Sets ar
     * @param string $ar
     * @return $this
     */
    public function setAr($ar)
    {
        $this->container['ar'] = $ar;

        return $this;
    }

    /**
     * Gets cs
     * @return string
     */
    public function getCs()
    {
        return $this->container['cs'];
    }

    /**
     * Sets cs
     * @param string $cs
     * @return $this
     */
    public function setCs($cs)
    {
        $this->container['cs'] = $cs;

        return $this;
    }

    /**
     * Gets da
     * @return string
     */
    public function getDa()
    {
        return $this->container['da'];
    }

    /**
     * Sets da
     * @param string $da
     * @return $this
     */
    public function setDa($da)
    {
        $this->container['da'] = $da;

        return $this;
    }

    /**
     * Gets de
     * @return string
     */
    public function getDe()
    {
        return $this->container['de'];
    }

    /**
     * Sets de
     * @param string $de
     * @return $this
     */
    public function setDe($de)
    {
        $this->container['de'] = $de;

        return $this;
    }

    /**
     * Gets el
     * @return string
     */
    public function getEl()
    {
        return $this->container['el'];
    }

    /**
     * Sets el
     * @param string $el
     * @return $this
     */
    public function setEl($el)
    {
        $this->container['el'] = $el;

        return $this;
    }

    /**
     * Gets en
     * @return string
     */
    public function getEn()
    {
        return $this->container['en'];
    }

    /**
     * Sets en
     * @param string $en
     * @return $this
     */
    public function setEn($en)
    {
        $this->container['en'] = $en;

        return $this;
    }

    /**
     * Gets es
     * @return string
     */
    public function getEs()
    {
        return $this->container['es'];
    }

    /**
     * Sets es
     * @param string $es
     * @return $this
     */
    public function setEs($es)
    {
        $this->container['es'] = $es;

        return $this;
    }

    /**
     * Gets et
     * @return string
     */
    public function getEt()
    {
        return $this->container['et'];
    }

    /**
     * Sets et
     * @param string $et
     * @return $this
     */
    public function setEt($et)
    {
        $this->container['et'] = $et;

        return $this;
    }

    /**
     * Gets fi
     * @return string
     */
    public function getFi()
    {
        return $this->container['fi'];
    }

    /**
     * Sets fi
     * @param string $fi
     * @return $this
     */
    public function setFi($fi)
    {
        $this->container['fi'] = $fi;

        return $this;
    }

    /**
     * Gets fo
     * @return string
     */
    public function getFo()
    {
        return $this->container['fo'];
    }

    /**
     * Sets fo
     * @param string $fo
     * @return $this
     */
    public function setFo($fo)
    {
        $this->container['fo'] = $fo;

        return $this;
    }

    /**
     * Gets fr
     * @return string
     */
    public function getFr()
    {
        return $this->container['fr'];
    }

    /**
     * Sets fr
     * @param string $fr
     * @return $this
     */
    public function setFr($fr)
    {
        $this->container['fr'] = $fr;

        return $this;
    }

    /**
     * Gets he
     * @return string
     */
    public function getHe()
    {
        return $this->container['he'];
    }

    /**
     * Sets he
     * @param string $he
     * @return $this
     */
    public function setHe($he)
    {
        $this->container['he'] = $he;

        return $this;
    }

    /**
     * Gets it
     * @return string
     */
    public function getIt()
    {
        return $this->container['it'];
    }

    /**
     * Sets it
     * @param string $it
     * @return $this
     */
    public function setIt($it)
    {
        $this->container['it'] = $it;

        return $this;
    }

    /**
     * Gets lt
     * @return string
     */
    public function getLt()
    {
        return $this->container['lt'];
    }

    /**
     * Sets lt
     * @param string $lt
     * @return $this
     */
    public function setLt($lt)
    {
        $this->container['lt'] = $lt;

        return $this;
    }

    /**
     * Gets lv
     * @return string
     */
    public function getLv()
    {
        return $this->container['lv'];
    }

    /**
     * Sets lv
     * @param string $lv
     * @return $this
     */
    public function setLv($lv)
    {
        $this->container['lv'] = $lv;

        return $this;
    }

    /**
     * Gets nl
     * @return string
     */
    public function getNl()
    {
        return $this->container['nl'];
    }

    /**
     * Sets nl
     * @param string $nl
     * @return $this
     */
    public function setNl($nl)
    {
        $this->container['nl'] = $nl;

        return $this;
    }

    /**
     * Gets no
     * @return string
     */
    public function getNo()
    {
        return $this->container['no'];
    }

    /**
     * Sets no
     * @param string $no
     * @return $this
     */
    public function setNo($no)
    {
        $this->container['no'] = $no;

        return $this;
    }

    /**
     * Gets pl
     * @return string
     */
    public function getPl()
    {
        return $this->container['pl'];
    }

    /**
     * Sets pl
     * @param string $pl
     * @return $this
     */
    public function setPl($pl)
    {
        $this->container['pl'] = $pl;

        return $this;
    }

    /**
     * Gets ru
     * @return string
     */
    public function getRu()
    {
        return $this->container['ru'];
    }

    /**
     * Sets ru
     * @param string $ru
     * @return $this
     */
    public function setRu($ru)
    {
        $this->container['ru'] = $ru;

        return $this;
    }

    /**
     * Gets sv
     * @return string
     */
    public function getSv()
    {
        return $this->container['sv'];
    }

    /**
     * Sets sv
     * @param string $sv
     * @return $this
     */
    public function setSv($sv)
    {
        $this->container['sv'] = $sv;

        return $this;
    }

    /**
     * Gets th
     * @return string
     */
    public function getTh()
    {
        return $this->container['th'];
    }

    /**
     * Sets th
     * @param string $th
     * @return $this
     */
    public function setTh($th)
    {
        $this->container['th'] = $th;

        return $this;
    }

    /**
     * Gets tr
     * @return string
     */
    public function getTr()
    {
        return $this->container['tr'];
    }

    /**
     * Sets tr
     * @param string $tr
     * @return $this
     */
    public function setTr($tr)
    {
        $this->container['tr'] = $tr;

        return $this;
    }

    /**
     * Gets vi
     * @return string
     */
    public function getVi()
    {
        return $this->container['vi'];
    }

    /**
     * Sets vi
     * @param string $vi
     * @return $this
     */
    public function setVi($vi)
    {
        $this->container['vi'] = $vi;

        return $this;
    }

    /**
     * Gets zh_hans
     * @return string
     */
    public function getZhHans()
    {
        return $this->container['zh_hans'];
    }

    /**
     * Sets zh_hans
     * @param string $zh_hans
     * @return $this
     */
    public function setZhHans($zh_hans)
    {
        $this->container['zh_hans'] = $zh_hans;

        return $this;
    }

    /**
     * Gets zh_hant
     * @return string
     */
    public function getZhHant()
    {
        return $this->container['zh_hant'];
    }

    /**
     * Sets zh_hant
     * @param string $zh_hant
     * @return $this
     */
    public function setZhHant($zh_hant)
    {
        $this->container['zh_hant'] = $zh_hant;

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


