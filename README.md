# SwaggerClient-php
Product information management API -------  <details><summary>Summary</summary>  It is built top of Erply's current product database.  Its goal is to allow user to:  * Extend the dataset (ie., users can decide what fields a product can have, and can themselves define an arbitrary number of categorizations); * Get data in and out of the system easily (ie. an API must support imports and integrations); * Easily make large-scale updates (ie., recategorize items in bulk, make whole catalogs or groups active or inactive) * Support omni-channel organization (allow specifying which products should be available in which sales channels) * Enrich data (see which items have a certain property missing, fill missing fields)  Product information management API is compatible with Erply's current data model, and the existing API calls </details>  <details><summary>Auth with Cookies</summary>  Add `apisession_<yourClientCode>` cookie with your session key + `clientCode` HTTP header </details>  <details><summary>Bulk operations</summary>  The bulk operations are processed concurrently, therefore the response items order is not the same as the request items one.   Each bulk response item has its own identifier:  **resultID**.  The **resourceID** field refer to the REST resource being worker with. </details>  <details><summary>Response headers on every endpoint</summary>  * **Request-Time-Unix** header contains server time in a format of unix timestamp. </details>  <details><summary>Filtering & Sorting</summary> The filtering and sorting parameters provide flexibility to the user to accelerate user's performance and increase efficiency.  ### Filtering:  The 'filter' query parameter represents a JSON array of arrays of length 3 and a string. Each array represents a filter and the string - operand: **and**, **or**. For the array, 1st string is the field name, 2nd string is the operands, and the 3rd object is the value (can be any type). Supported operands: **=**, **!=**, **>=**, **<=**, **in**, **contains** and **startswith**.  <details><summary>general filtering JSON example</summary> a filter to fetch actively sold burgers with groupID more than 2. > <blockquote> > <pre><code> > [ >    [ >        &quot;id&quot;, >        &quot;in&quot;, >        [1, 2, 3] >    ], >    [ >        &quot;group_id&quot;, >        &quot;>=&quot;, >        &quot;2&quot; >    ], >    &quot;and&quot;, >    [ >        &quot;status&quot;, >        &quot;!=&quot;, >        &quot;ACTIVE&quot; >    ], >    &quot;and&quot;, >    [ >        &quot;name.en&quot;, >        &quot;contains&quot;, >        &quot;burger&quot; >    ] > ] > </code></pre> > </blockquote> </details>  <details><summary>single filter JSON example</summary> The single filter must be still an array of arrays. For example a filter to fetch active records. > <blockquote> > <pre><code> > [ >    [ >        &quot;status&quot;, >        &quot;=&quot;, >        &quot;ACTIVE&quot; >    ] > ] > </code></pre> > </blockquote> </details>  #### 'or' operand <details><summary>filtering 'or' operand JSON example</summary> for example a filter to fetch matrix or bundle products:  > <blockquote> > <pre><code> > [ >   [ >       &quot;type&quot;, >       &quot;=&quot;, >       &quot;MATRIX&quot; >   ] >   &quot;or&quot;, >   [ >       &quot;type&quot;, >       &quot;=&quot;, >       &quot;BUNDLE&quot; >   ] > ] > </code></pre> > </blockquote> </details>   In the previous example we have used the same classifier 'type' multiple times - in two filters.   **NB!** Translatable classifiers such as name and description, etc **cannot be used** multiple times,  For example you cannot lookup products that have english name 'apple' and/or greek name 'μήλο'.  ### Sorting  The sorting parameter is the 'sort' query parameter. It's a JSON object with 3 fields: 1. selector - field name, example value:added, 2. desc - short for descending, value: true or false, 3. language: example value: gr, is used to sort by translatable fields such as name.  <details><summary>sorting JSON example</summary>  > <blockquote> > <pre><code> > { >    &quot;selector&quot;: &quot;added&quot;, >    &quot;desc&quot;: true, >    &quot;language&quot;: &quot;gr&quot; > } > </code></pre> > </blockquote> </details>  </details>  <details><summary>Backup & Restore</summary>  With PIM API you can create a backup of the product catalogue  and then restore it when needed. ### Creating a backup To **create a backup** you need to specify the **backup_id** field on the product when creating or updating it one by one or in bulk.   It is allowed to have only one backup at a time. All new backups will override the previous ones. For example, if you created and updated some products specifying with backup_id equals 3, then the  first **create or update** operation with the backup_id equals 7 will delete all the backups associated with the backup_id equals 3.  ### Restoring To **restore** you should request the ```/product/restore``` endpoint with the **backup_id**.  </details>  ------- **[Go SDK](https://github.com/erply/pim-go-wrapper)** - make the API requests from your Go service with comfort.   -------

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.103.0
- Build date: 2021-11-11T06:48:50.936+02:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/ahara10/erply-pim-swaggerclient.git"
    }
  ],
  "require": {
    "ahara10/erply-pim-swaggerclient": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: cc
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('clientCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientCode', 'Bearer');
// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure API key authorization: sk
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionKey', 'Bearer');

$api_instance = new Swagger\Client\Api\AssortmentApi();
$skip = 56; // int | skip n records
$take = 56; // int | items to take, default: 20, max: 100000

try {
    $result = $api_instance->v1AssortmentGet($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentApi->v1AssortmentGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssortmentApi* | [**v1AssortmentGet**](docs/Api/AssortmentApi.md#v1assortmentget) | **GET** /v1/assortment | Get Assortments
*AssortmentApi* | [**v1AssortmentIdPut**](docs/Api/AssortmentApi.md#v1assortmentidput) | **PUT** /v1/assortment/{id} | Update Assortment
*AssortmentApi* | [**v1AssortmentIdsDelete**](docs/Api/AssortmentApi.md#v1assortmentidsdelete) | **DELETE** /v1/assortment/{ids} | Delete Assortments &amp; the related links to products and products.
*AssortmentApi* | [**v1AssortmentPost**](docs/Api/AssortmentApi.md#v1assortmentpost) | **POST** /v1/assortment | Create Assortment
*AssortmentToProductLinkingApi* | [**v1AssortmentIdProductsBulkPost**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentidproductsbulkpost) | **POST** /v1/assortment/{id}/products/bulk | Add Products to Assortment
*AssortmentToProductLinkingApi* | [**v1AssortmentIdProductsDataGet**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentidproductsdataget) | **GET** /v1/assortment/{id}/products/data | Get Assortment&#39;s Products Data
*AssortmentToProductLinkingApi* | [**v1AssortmentIdProductsDeletedGet**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentidproductsdeletedget) | **GET** /v1/assortment/{id}/products/deleted | Get Deleted Assortment&#39;s Products IDs
*AssortmentToProductLinkingApi* | [**v1AssortmentIdProductsGet**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentidproductsget) | **GET** /v1/assortment/{id}/products | Get Assortment&#39;s Products Link Data
*AssortmentToProductLinkingApi* | [**v1AssortmentIdProductsPost**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentidproductspost) | **POST** /v1/assortment/{id}/products | Add Product to Assortment
*AssortmentToProductLinkingApi* | [**v1AssortmentProductsIdPatch**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentproductsidpatch) | **PATCH** /v1/assortment/products/{id} | Update Assortment&#39;s Products Link Data
*AssortmentToProductLinkingApi* | [**v1AssortmentProductsIdsBulkDelete**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentproductsidsbulkdelete) | **DELETE** /v1/assortment/products/{ids}/bulk | Delete product to assortment links by link IDs
*AssortmentToProductLinkingApi* | [**v1AssortmentProductsIdsDelete**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentproductsidsdelete) | **DELETE** /v1/assortment/products/{ids} | Delete Assortment Product Links
*AssortmentToProductLinkingApi* | [**v1AssortmentProductsLinksProductIDsDelete**](docs/Api/AssortmentToProductLinkingApi.md#v1assortmentproductslinksproductidsdelete) | **DELETE** /v1/assortment/products/links/{productIDs} | Delete products from all assortments
*AssortmentToProductLinkingApi* | [**v1ProductIdAssortmentsGet**](docs/Api/AssortmentToProductLinkingApi.md#v1productidassortmentsget) | **GET** /v1/product/{id}/assortments | Get Assortments for Product
*AttributesApi* | [**v1AttributeGet**](docs/Api/AttributesApi.md#v1attributeget) | **GET** /v1/attribute | Read Attributes
*AttributesApi* | [**v1AttributeIdsDelete**](docs/Api/AttributesApi.md#v1attributeidsdelete) | **DELETE** /v1/attribute/{ids} | Delete Attributes by ID
*AttributesApi* | [**v1AttributePut**](docs/Api/AttributesApi.md#v1attributeput) | **PUT** /v1/attribute | Attach / Update an Attribute
*BrandApi* | [**v1BrandBulkGetPost**](docs/Api/BrandApi.md#v1brandbulkgetpost) | **POST** /v1/brand/bulk/get | Get brands in bulk
*BrandApi* | [**v1BrandBulkPost**](docs/Api/BrandApi.md#v1brandbulkpost) | **POST** /v1/brand/bulk | Create brands in bulk
*BrandApi* | [**v1BrandGet**](docs/Api/BrandApi.md#v1brandget) | **GET** /v1/brand | Get brands
*BrandApi* | [**v1BrandIdPut**](docs/Api/BrandApi.md#v1brandidput) | **PUT** /v1/brand/{id} | Update brand
*BrandApi* | [**v1BrandIdsDelete**](docs/Api/BrandApi.md#v1brandidsdelete) | **DELETE** /v1/brand/{ids} | Delete brands
*BrandApi* | [**v1BrandPost**](docs/Api/BrandApi.md#v1brandpost) | **POST** /v1/brand | Create brand
*CountryApi* | [**v1ProductCountryGet**](docs/Api/CountryApi.md#v1productcountryget) | **GET** /v1/product/country | Get Countries
*CountryApi* | [**v1ProductCountryIdPut**](docs/Api/CountryApi.md#v1productcountryidput) | **PUT** /v1/product/country/{id} | Update a Country
*CountryApi* | [**v1ProductCountryIdsDelete**](docs/Api/CountryApi.md#v1productcountryidsdelete) | **DELETE** /v1/product/country/{ids} | Delete countries by IDs
*CountryApi* | [**v1ProductCountryPost**](docs/Api/CountryApi.md#v1productcountrypost) | **POST** /v1/product/country | Create a Country
*ExportApi* | [**v1ExportAssortmentsGet**](docs/Api/ExportApi.md#v1exportassortmentsget) | **GET** /v1/export/assortments | Get Assortments Export
*ExportApi* | [**v1ExportMatrixProductsGet**](docs/Api/ExportApi.md#v1exportmatrixproductsget) | **GET** /v1/export/matrix-products | Get Matrix Products Export
*ExportApi* | [**v1ExportProductsGet**](docs/Api/ExportApi.md#v1exportproductsget) | **GET** /v1/export/products | Get Products Export
*LinkedProductsApi* | [**v1ProductLinkedProductsBulkGetPost**](docs/Api/LinkedProductsApi.md#v1productlinkedproductsbulkgetpost) | **POST** /v1/product/linked-products/bulk/get | Read all products linked products and the link types
*LinkedProductsApi* | [**v1ProductLinkedProductsBulkPost**](docs/Api/LinkedProductsApi.md#v1productlinkedproductsbulkpost) | **POST** /v1/product/linked-products/bulk | Create product links in bulk
*LinkedProductsApi* | [**v1ProductLinkedProductsIdPut**](docs/Api/LinkedProductsApi.md#v1productlinkedproductsidput) | **PUT** /v1/product/linked-products/{id} | Update a link between 2 products
*LinkedProductsApi* | [**v1ProductLinkedProductsIdsDelete**](docs/Api/LinkedProductsApi.md#v1productlinkedproductsidsdelete) | **DELETE** /v1/product/linked-products/{ids} | Delete links between 2 products
*LinkedProductsApi* | [**v1ProductLinkedProductsPost**](docs/Api/LinkedProductsApi.md#v1productlinkedproductspost) | **POST** /v1/product/linked-products | Link 2 products for cross-sell or substitute purposes
*LinkedProductsApi* | [**v1ProductProductIDLinkedProductsGet**](docs/Api/LinkedProductsApi.md#v1productproductidlinkedproductsget) | **GET** /v1/product/{productID}/linked-products | Read all product&#39;s linked products and the link types
*LocationsInWarehouseApi* | [**v1WarehouseLocationsGet**](docs/Api/LocationsInWarehouseApi.md#v1warehouselocationsget) | **GET** /v1/warehouse/locations | Read Locations in warehouse
*MatrixDimensionApi* | [**v1MatrixDimensionBulkGetPost**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionbulkgetpost) | **POST** /v1/matrix/dimension/bulk/get | Get dimensions in bulk
*MatrixDimensionApi* | [**v1MatrixDimensionBulkPost**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionbulkpost) | **POST** /v1/matrix/dimension/bulk | Create dimensions in bulk
*MatrixDimensionApi* | [**v1MatrixDimensionGet**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionget) | **GET** /v1/matrix/dimension | Get Matrix Dimensions
*MatrixDimensionApi* | [**v1MatrixDimensionIdMovePut**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionidmoveput) | **PUT** /v1/matrix/dimension/{id}/move | Move Dimension
*MatrixDimensionApi* | [**v1MatrixDimensionIdPut**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionidput) | **PUT** /v1/matrix/dimension/{id} | Update Matrix Dimension
*MatrixDimensionApi* | [**v1MatrixDimensionIdsDelete**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionidsdelete) | **DELETE** /v1/matrix/dimension/{ids} | Delete Matrix Dimensions
*MatrixDimensionApi* | [**v1MatrixDimensionPost**](docs/Api/MatrixDimensionApi.md#v1matrixdimensionpost) | **POST** /v1/matrix/dimension | Create Matrix Dimension
*MatrixDimensionValueApi* | [**v1MatrixDimensionValueBulkGetPost**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvaluebulkgetpost) | **POST** /v1/matrix/dimension/value/bulk/get | Get dimension values in bulk
*MatrixDimensionValueApi* | [**v1MatrixDimensionValueBulkPost**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvaluebulkpost) | **POST** /v1/matrix/dimension/value/bulk | Create dimension values in bulk
*MatrixDimensionValueApi* | [**v1MatrixDimensionValueGet**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvalueget) | **GET** /v1/matrix/dimension/value | Get Matrix Dimension Values
*MatrixDimensionValueApi* | [**v1MatrixDimensionValueIdMovePut**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvalueidmoveput) | **PUT** /v1/matrix/dimension/value/{id}/move | Move Dimension Value
*MatrixDimensionValueApi* | [**v1MatrixDimensionValueIdPut**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvalueidput) | **PUT** /v1/matrix/dimension/value/{id} | Update Matrix Dimension Value
*MatrixDimensionValueApi* | [**v1MatrixDimensionValueIdsDelete**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvalueidsdelete) | **DELETE** /v1/matrix/dimension/value/{ids} | Delete Matrix Dimension Values if not used by any active product
*MatrixDimensionValueApi* | [**v1MatrixDimensionValuePost**](docs/Api/MatrixDimensionValueApi.md#v1matrixdimensionvaluepost) | **POST** /v1/matrix/dimension/value | Create Matrix Dimension Value
*MatrixProductApi* | [**v1MatrixProductBulkGetPost**](docs/Api/MatrixProductApi.md#v1matrixproductbulkgetpost) | **POST** /v1/matrix/product/bulk/get | Get matrix variations in bulk
*MatrixProductApi* | [**v1MatrixProductBulkPost**](docs/Api/MatrixProductApi.md#v1matrixproductbulkpost) | **POST** /v1/matrix/product/bulk | Create matrix products in bulk
*MatrixProductApi* | [**v1MatrixProductDimensionsBulkGetPost**](docs/Api/MatrixProductApi.md#v1matrixproductdimensionsbulkgetpost) | **POST** /v1/matrix/product/dimensions/bulk/get | Read matrix products dimensions in bulk
*MatrixProductApi* | [**v1MatrixProductDimensionsBulkPut**](docs/Api/MatrixProductApi.md#v1matrixproductdimensionsbulkput) | **PUT** /v1/matrix/product/dimensions/bulk | Update matrix products dimensions in bulk
*MatrixProductApi* | [**v1MatrixProductGet**](docs/Api/MatrixProductApi.md#v1matrixproductget) | **GET** /v1/matrix/product | API call for retrieving matrix variations
*MatrixProductApi* | [**v1MatrixProductIdDimensionsGet**](docs/Api/MatrixProductApi.md#v1matrixproductiddimensionsget) | **GET** /v1/matrix/product/{id}/dimensions | Read Matrix Product Dimensions
*MatrixProductApi* | [**v1MatrixProductIdDimensionsPut**](docs/Api/MatrixProductApi.md#v1matrixproductiddimensionsput) | **PUT** /v1/matrix/product/{id}/dimensions | Update Matrix Product Dimensions
*MatrixProductApi* | [**v1MatrixProductPost**](docs/Api/MatrixProductApi.md#v1matrixproductpost) | **POST** /v1/matrix/product | Create Matrix Product
*MatrixProductApi* | [**v1MatrixProductWithVariationsGet**](docs/Api/MatrixProductApi.md#v1matrixproductwithvariationsget) | **GET** /v1/matrix/product/with-variations | API call for retrieving matrix products with variations
*MatrixProductVariationApi* | [**v1MatrixProductIdVariationPost**](docs/Api/MatrixProductVariationApi.md#v1matrixproductidvariationpost) | **POST** /v1/matrix/product/{id}/variation | Create Matrix Product Variation
*MatrixProductVariationApi* | [**v1MatrixProductProductIDVariationVariationIDDimensionValuesPatch**](docs/Api/MatrixProductVariationApi.md#v1matrixproductproductidvariationvariationiddimensionvaluespatch) | **PATCH** /v1/matrix/product/{productID}/variation/{variationID}/dimension-values | Update a matrix product variation&#39;s dimension values
*MatrixProductVariationApi* | [**v1MatrixProductProductIDVariationVariationIDParentPatch**](docs/Api/MatrixProductVariationApi.md#v1matrixproductproductidvariationvariationidparentpatch) | **PATCH** /v1/matrix/product/{productID}/variation/{variationID}/parent | Change Matrix Product Variation Parent
*MatrixProductVariationApi* | [**v1MatrixProductVariationBulkPatch**](docs/Api/MatrixProductVariationApi.md#v1matrixproductvariationbulkpatch) | **PATCH** /v1/matrix/product/variation/bulk | Change variation parents in bulk
*MatrixProductVariationApi* | [**v1MatrixProductVariationBulkPost**](docs/Api/MatrixProductVariationApi.md#v1matrixproductvariationbulkpost) | **POST** /v1/matrix/product/variation/bulk | Create variations in bulk
*ParameterSetToGroupLinkingApi* | [**v1ProductParameterSetGroupsIdsDelete**](docs/Api/ParameterSetToGroupLinkingApi.md#v1productparametersetgroupsidsdelete) | **DELETE** /v1/product/parameter/set/groups/{ids} | Delete Linked Groups
*ParameterSetToGroupLinkingApi* | [**v1ProductParameterSetIdGroupsGet**](docs/Api/ParameterSetToGroupLinkingApi.md#v1productparametersetidgroupsget) | **GET** /v1/product/parameter/set/{id}/groups | Get Linked Groups
*ParameterSetToGroupLinkingApi* | [**v1ProductParameterSetIdGroupsPost**](docs/Api/ParameterSetToGroupLinkingApi.md#v1productparametersetidgroupspost) | **POST** /v1/product/parameter/set/{id}/groups | Link Group
*ParameterSetToProductLinkingApi* | [**v1ProductParameterSetIdProductsGet**](docs/Api/ParameterSetToProductLinkingApi.md#v1productparametersetidproductsget) | **GET** /v1/product/parameter/set/{id}/products | Get products that have values for this set
*PermissionsApi* | [**v1PermissionsPatch**](docs/Api/PermissionsApi.md#v1permissionspatch) | **PATCH** /v1/permissions | Set / Update a permission
*PermissionsApi* | [**v1PermissionsUserIDGet**](docs/Api/PermissionsApi.md#v1permissionsuseridget) | **GET** /v1/permissions/{userID} | Get user permissions
*ProductCategoryApi* | [**v1ProductCategoryBulkGetPost**](docs/Api/ProductCategoryApi.md#v1productcategorybulkgetpost) | **POST** /v1/product/category/bulk/get | Get categories in bulk
*ProductCategoryApi* | [**v1ProductCategoryBulkPost**](docs/Api/ProductCategoryApi.md#v1productcategorybulkpost) | **POST** /v1/product/category/bulk | Create categories in bulk
*ProductCategoryApi* | [**v1ProductCategoryGet**](docs/Api/ProductCategoryApi.md#v1productcategoryget) | **GET** /v1/product/category | Get Categories
*ProductCategoryApi* | [**v1ProductCategoryIdMovePut**](docs/Api/ProductCategoryApi.md#v1productcategoryidmoveput) | **PUT** /v1/product/category/{id}/move | Move Product Category
*ProductCategoryApi* | [**v1ProductCategoryIdPut**](docs/Api/ProductCategoryApi.md#v1productcategoryidput) | **PUT** /v1/product/category/{id} | Update Product Category
*ProductCategoryApi* | [**v1ProductCategoryIdsDelete**](docs/Api/ProductCategoryApi.md#v1productcategoryidsdelete) | **DELETE** /v1/product/category/{ids} | Delete Product Categories
*ProductCategoryApi* | [**v1ProductCategoryIndentedGet**](docs/Api/ProductCategoryApi.md#v1productcategoryindentedget) | **GET** /v1/product/category/indented | Get Indented List of Categories
*ProductCategoryApi* | [**v1ProductCategoryPost**](docs/Api/ProductCategoryApi.md#v1productcategorypost) | **POST** /v1/product/category | Create Product Category
*ProductCategoryApi* | [**v1ProductCategoryTreeGet**](docs/Api/ProductCategoryApi.md#v1productcategorytreeget) | **GET** /v1/product/category/tree | Get Tree of product categories
*ProductExtraFieldApi* | [**v1ProductExtraField1BulkGetPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1bulkgetpost) | **POST** /v1/product/extra/field-1/bulk/get | Get Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField1BulkPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1bulkpost) | **POST** /v1/product/extra/field-1/bulk | Create Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField1Get**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1get) | **GET** /v1/product/extra/field-1 | Get Product Extra Field 1
*ProductExtraFieldApi* | [**v1ProductExtraField1IdMovePatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1idmovepatch) | **PATCH** /v1/product/extra/field-1/{id}/move | Move Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField1IdPatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1idpatch) | **PATCH** /v1/product/extra/field-1/{id} | Update a Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField1IdsDelete**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1idsdelete) | **DELETE** /v1/product/extra/field-1/{ids} | Delete Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField1Post**](docs/Api/ProductExtraFieldApi.md#v1productextrafield1post) | **POST** /v1/product/extra/field-1 | Create an extra field
*ProductExtraFieldApi* | [**v1ProductExtraField2BulkGetPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2bulkgetpost) | **POST** /v1/product/extra/field-2/bulk/get | Get Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField2BulkPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2bulkpost) | **POST** /v1/product/extra/field-2/bulk | Create Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField2Get**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2get) | **GET** /v1/product/extra/field-2 | Get Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField2IdMovePatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2idmovepatch) | **PATCH** /v1/product/extra/field-2/{id}/move | Move Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField2IdPatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2idpatch) | **PATCH** /v1/product/extra/field-2/{id} | Update a Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField2IdsDelete**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2idsdelete) | **DELETE** /v1/product/extra/field-2/{ids} | Delete Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField2Post**](docs/Api/ProductExtraFieldApi.md#v1productextrafield2post) | **POST** /v1/product/extra/field-2 | Create an extra field
*ProductExtraFieldApi* | [**v1ProductExtraField3BulkGetPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3bulkgetpost) | **POST** /v1/product/extra/field-3/bulk/get | Get Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField3BulkPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3bulkpost) | **POST** /v1/product/extra/field-3/bulk | Create Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField3Get**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3get) | **GET** /v1/product/extra/field-3 | Get Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField3IdMovePatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3idmovepatch) | **PATCH** /v1/product/extra/field-3/{id}/move | Move Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField3IdPatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3idpatch) | **PATCH** /v1/product/extra/field-3/{id} | Update a Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField3IdsDelete**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3idsdelete) | **DELETE** /v1/product/extra/field-3/{ids} | Delete Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField3Post**](docs/Api/ProductExtraFieldApi.md#v1productextrafield3post) | **POST** /v1/product/extra/field-3 | Create an extra field
*ProductExtraFieldApi* | [**v1ProductExtraField4BulkGetPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4bulkgetpost) | **POST** /v1/product/extra/field-4/bulk/get | Get Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField4BulkPost**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4bulkpost) | **POST** /v1/product/extra/field-4/bulk | Create Extra Fields in bulk
*ProductExtraFieldApi* | [**v1ProductExtraField4Get**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4get) | **GET** /v1/product/extra/field-4 | Get Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField4IdMovePatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4idmovepatch) | **PATCH** /v1/product/extra/field-4/{id}/move | Move Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField4IdPatch**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4idpatch) | **PATCH** /v1/product/extra/field-4/{id} | Update a Product Extra Field
*ProductExtraFieldApi* | [**v1ProductExtraField4IdsDelete**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4idsdelete) | **DELETE** /v1/product/extra/field-4/{ids} | Delete Product Extra Fields
*ProductExtraFieldApi* | [**v1ProductExtraField4Post**](docs/Api/ProductExtraFieldApi.md#v1productextrafield4post) | **POST** /v1/product/extra/field-4 | Create an extra field
*ProductFamilyApi* | [**v1ProductFamilyBulkGetPost**](docs/Api/ProductFamilyApi.md#v1productfamilybulkgetpost) | **POST** /v1/product/family/bulk/get | Get families in bulk
*ProductFamilyApi* | [**v1ProductFamilyBulkPost**](docs/Api/ProductFamilyApi.md#v1productfamilybulkpost) | **POST** /v1/product/family/bulk | Create families in bulk
*ProductFamilyApi* | [**v1ProductFamilyGet**](docs/Api/ProductFamilyApi.md#v1productfamilyget) | **GET** /v1/product/family | Get Families
*ProductFamilyApi* | [**v1ProductFamilyIdPut**](docs/Api/ProductFamilyApi.md#v1productfamilyidput) | **PUT** /v1/product/family/{id} | Update Family
*ProductFamilyApi* | [**v1ProductFamilyPost**](docs/Api/ProductFamilyApi.md#v1productfamilypost) | **POST** /v1/product/family | Create Family
*ProductFieldsApi* | [**v1ProductFieldsInheritedGet**](docs/Api/ProductFieldsApi.md#v1productfieldsinheritedget) | **GET** /v1/product/fields/inherited | Read product fields that will be inherited from matrix products
*ProductFieldsApi* | [**v1ProductFieldsInheritedPatch**](docs/Api/ProductFieldsApi.md#v1productfieldsinheritedpatch) | **PATCH** /v1/product/fields/inherited | Set product fields that will be inherited from matrix products
*ProductFieldsApi* | [**v1ProductFieldsPermissionsGet**](docs/Api/ProductFieldsApi.md#v1productfieldspermissionsget) | **GET** /v1/product/fields/permissions | Read permissions for product fields
*ProductFieldsApi* | [**v1ProductFieldsPermissionsPatch**](docs/Api/ProductFieldsApi.md#v1productfieldspermissionspatch) | **PATCH** /v1/product/fields/permissions | Set permissions for product fields, permissions are user group based
*ProductGroupApi* | [**v1ProductGroupBulkGetPost**](docs/Api/ProductGroupApi.md#v1productgroupbulkgetpost) | **POST** /v1/product/group/bulk/get | Get groups in bulk
*ProductGroupApi* | [**v1ProductGroupBulkPost**](docs/Api/ProductGroupApi.md#v1productgroupbulkpost) | **POST** /v1/product/group/bulk | Create groups in bulk
*ProductGroupApi* | [**v1ProductGroupExternalIdsGet**](docs/Api/ProductGroupApi.md#v1productgroupexternalidsget) | **GET** /v1/product/group/external-ids | Read external group IDs of Product Groups
*ProductGroupApi* | [**v1ProductGroupExternalIdsGroupIdPatch**](docs/Api/ProductGroupApi.md#v1productgroupexternalidsgroupidpatch) | **PATCH** /v1/product/group/external-ids/{groupId} | Update external group ID of a Product Group
*ProductGroupApi* | [**v1ProductGroupExternalIdsGroupIdPost**](docs/Api/ProductGroupApi.md#v1productgroupexternalidsgroupidpost) | **POST** /v1/product/group/external-ids/{groupId} | Attach external group ID to a Product Group
*ProductGroupApi* | [**v1ProductGroupExternalIdsGroupIdsDelete**](docs/Api/ProductGroupApi.md#v1productgroupexternalidsgroupidsdelete) | **DELETE** /v1/product/group/external-ids/{groupIds} | Delete external group IDs of Product Groups
*ProductGroupApi* | [**v1ProductGroupGet**](docs/Api/ProductGroupApi.md#v1productgroupget) | **GET** /v1/product/group | Get Groups
*ProductGroupApi* | [**v1ProductGroupGroupIdLocationTaxWarehouseIdDelete**](docs/Api/ProductGroupApi.md#v1productgroupgroupidlocationtaxwarehouseiddelete) | **DELETE** /v1/product/group/{groupId}/location-tax/{warehouseId} | Delete Location Specific Tax From Product Group
*ProductGroupApi* | [**v1ProductGroupIdLocationTaxPatch**](docs/Api/ProductGroupApi.md#v1productgroupidlocationtaxpatch) | **PATCH** /v1/product/group/{id}/location-tax | Add Location Specific Tax
*ProductGroupApi* | [**v1ProductGroupIdMovePut**](docs/Api/ProductGroupApi.md#v1productgroupidmoveput) | **PUT** /v1/product/group/{id}/move | Move Product Group
*ProductGroupApi* | [**v1ProductGroupIdPut**](docs/Api/ProductGroupApi.md#v1productgroupidput) | **PUT** /v1/product/group/{id} | Update Product Group
*ProductGroupApi* | [**v1ProductGroupIdsDelete**](docs/Api/ProductGroupApi.md#v1productgroupidsdelete) | **DELETE** /v1/product/group/{ids} | Delete Product Groups
*ProductGroupApi* | [**v1ProductGroupIndentedGet**](docs/Api/ProductGroupApi.md#v1productgroupindentedget) | **GET** /v1/product/group/indented | Get Indented List of Groups
*ProductGroupApi* | [**v1ProductGroupPost**](docs/Api/ProductGroupApi.md#v1productgrouppost) | **POST** /v1/product/group | Create Product Group
*ProductGroupApi* | [**v1ProductGroupTreeGet**](docs/Api/ProductGroupApi.md#v1productgrouptreeget) | **GET** /v1/product/group/tree | Get Tree of product groups
*ProductGroupApi* | [**v1ProductIdAdditionalGroupsPut**](docs/Api/ProductGroupApi.md#v1productidadditionalgroupsput) | **PUT** /v1/product/{id}/additional-groups | Attach Additional Groups to Product
*ProductGroupApi* | [**v1ProductIdsAdditionalGroupsGet**](docs/Api/ProductGroupApi.md#v1productidsadditionalgroupsget) | **GET** /v1/product/{ids}/additional-groups | Get Product&#39;s Additional Groups
*ProductPackageApi* | [**v1ProductPackageCategoryGet**](docs/Api/ProductPackageApi.md#v1productpackagecategoryget) | **GET** /v1/product/package/category | Get Package Categories
*ProductPackageApi* | [**v1ProductPackageGet**](docs/Api/ProductPackageApi.md#v1productpackageget) | **GET** /v1/product/package | Get Packages
*ProductPackageApi* | [**v1ProductPackageIdPut**](docs/Api/ProductPackageApi.md#v1productpackageidput) | **PUT** /v1/product/package/{id} | Update Package
*ProductPackageApi* | [**v1ProductPackageIdsDelete**](docs/Api/ProductPackageApi.md#v1productpackageidsdelete) | **DELETE** /v1/product/package/{ids} | Delete Packages
*ProductPackageApi* | [**v1ProductPackagePost**](docs/Api/ProductPackageApi.md#v1productpackagepost) | **POST** /v1/product/package | Create Package
*ProductParameterApi* | [**v1ProductIdParametersGet**](docs/Api/ProductParameterApi.md#v1productidparametersget) | **GET** /v1/product/{id}/parameters | Get All Parameters for the Product by ID
*ProductParameterApi* | [**v1ProductParameterGet**](docs/Api/ProductParameterApi.md#v1productparameterget) | **GET** /v1/product/parameter | Get Product Parameters
*ProductParameterApi* | [**v1ProductParameterIdProductsGet**](docs/Api/ProductParameterApi.md#v1productparameteridproductsget) | **GET** /v1/product/parameter/{id}/products | Get products that have values for this parameter
*ProductParameterApi* | [**v1ProductParameterIdPut**](docs/Api/ProductParameterApi.md#v1productparameteridput) | **PUT** /v1/product/parameter/{id} | Update Product Parameter
*ProductParameterApi* | [**v1ProductParameterIdsDelete**](docs/Api/ProductParameterApi.md#v1productparameteridsdelete) | **DELETE** /v1/product/parameter/{ids} | Delete Product Parameters
*ProductParameterApi* | [**v1ProductParameterPost**](docs/Api/ProductParameterApi.md#v1productparameterpost) | **POST** /v1/product/parameter | A parameter always belongs to exactly one data set (not multiple data sets at the same time, and a parameter cannot exist without a set). A parameter has a name and a type.
*ProductParameterOptionApi* | [**v1ProductParameterOptionIdProductsGet**](docs/Api/ProductParameterOptionApi.md#v1productparameteroptionidproductsget) | **GET** /v1/product/parameter/option/{id}/products | Get Parameter Option and Products associated with a parameter that has a Parameter Options
*ProductParameterOptionApi* | [**v1ProductParameterOptionIdPut**](docs/Api/ProductParameterOptionApi.md#v1productparameteroptionidput) | **PUT** /v1/product/parameter/option/{id} | Update Product Parameter Option
*ProductParameterOptionApi* | [**v1ProductParameterOptionIdsDelete**](docs/Api/ProductParameterOptionApi.md#v1productparameteroptionidsdelete) | **DELETE** /v1/product/parameter/option/{ids} | Delete Product Parameter Options
*ProductParameterOptionApi* | [**v1ProductParameterOptionParameterIdGet**](docs/Api/ProductParameterOptionApi.md#v1productparameteroptionparameteridget) | **GET** /v1/product/parameter/option/{parameterId} | Get Product Parameter Options
*ProductParameterOptionApi* | [**v1ProductParameterOptionPost**](docs/Api/ProductParameterOptionApi.md#v1productparameteroptionpost) | **POST** /v1/product/parameter/option | Create Product Parameter Option
*ProductParameterSetApi* | [**v1ProductParameterSetGet**](docs/Api/ProductParameterSetApi.md#v1productparametersetget) | **GET** /v1/product/parameter/set | Get Parameter Sets
*ProductParameterSetApi* | [**v1ProductParameterSetIdPut**](docs/Api/ProductParameterSetApi.md#v1productparametersetidput) | **PUT** /v1/product/parameter/set/{id} | Update Set&#39;s Name
*ProductParameterSetApi* | [**v1ProductParameterSetIdsDelete**](docs/Api/ProductParameterSetApi.md#v1productparametersetidsdelete) | **DELETE** /v1/product/parameter/set/{ids} | Delete Parameter Sets
*ProductParameterSetApi* | [**v1ProductParameterSetPost**](docs/Api/ProductParameterSetApi.md#v1productparametersetpost) | **POST** /v1/product/parameter/set | Create Parameter Set
*ProductParameterValidationRuleApi* | [**v1ProductParameterIdValidationRuleGet**](docs/Api/ProductParameterValidationRuleApi.md#v1productparameteridvalidationruleget) | **GET** /v1/product/parameter/{id}/validation/rule | Get Product Parameter Validation Rules
*ProductParameterValidationRuleApi* | [**v1ProductParameterValidationRuleIdPut**](docs/Api/ProductParameterValidationRuleApi.md#v1productparametervalidationruleidput) | **PUT** /v1/product/parameter/validation/rule/{id} | Update Product Parameter Validation Rule
*ProductParameterValidationRuleApi* | [**v1ProductParameterValidationRuleIdsDelete**](docs/Api/ProductParameterValidationRuleApi.md#v1productparametervalidationruleidsdelete) | **DELETE** /v1/product/parameter/validation/rule/{ids} | Delete Product Parameter Validation Rules by IDs
*ProductParameterValidationRuleApi* | [**v1ProductParameterValidationRulePost**](docs/Api/ProductParameterValidationRuleApi.md#v1productparametervalidationrulepost) | **POST** /v1/product/parameter/validation/rule | Create Product Parameter Validation Rule
*ProductParameterValueApi* | [**v1ProductIdsParameterValueGet**](docs/Api/ProductParameterValueApi.md#v1productidsparametervalueget) | **GET** /v1/product/{ids}/parameter/value | Get Product Parameter Values by Product IDs
*ProductParameterValueApi* | [**v1ProductParameterValueIdPut**](docs/Api/ProductParameterValueApi.md#v1productparametervalueidput) | **PUT** /v1/product/parameter/value/{id} | Update Product Parameter Value
*ProductParameterValueApi* | [**v1ProductParameterValueIdsDelete**](docs/Api/ProductParameterValueApi.md#v1productparametervalueidsdelete) | **DELETE** /v1/product/parameter/value/{ids} | Delete product parameter values
*ProductParameterValueApi* | [**v1ProductProductIdParameterParameterIdValuePost**](docs/Api/ProductParameterValueApi.md#v1productproductidparameterparameteridvaluepost) | **POST** /v1/product/{productId}/parameter/{parameterId}/value | Assign Value to Product&#39;s Parameter
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupBulkGetPost**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygroupbulkgetpost) | **POST** /v1/product/priority/group/bulk/get | Get priority groups in bulk
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupBulkPost**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygroupbulkpost) | **POST** /v1/product/priority/group/bulk | Create priority groups in bulk
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupGet**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygroupget) | **GET** /v1/product/priority/group | Read Priority Groups
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupIdMovePut**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygroupidmoveput) | **PUT** /v1/product/priority/group/{id}/move | Move Priority Group
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupIdPut**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygroupidput) | **PUT** /v1/product/priority/group/{id} | Update a Priority Group
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupIdsDelete**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygroupidsdelete) | **DELETE** /v1/product/priority/group/{ids} | Delete Priority Groups
*ProductPriorityGroupsApi* | [**v1ProductPriorityGroupPost**](docs/Api/ProductPriorityGroupsApi.md#v1productprioritygrouppost) | **POST** /v1/product/priority/group | Create a Priority Group
*ProductRecipesApi* | [**v1ProductRecipeBulkGetPost**](docs/Api/ProductRecipesApi.md#v1productrecipebulkgetpost) | **POST** /v1/product/recipe/bulk/get | Get recipes in bulk
*ProductRecipesApi* | [**v1ProductRecipeBulkPost**](docs/Api/ProductRecipesApi.md#v1productrecipebulkpost) | **POST** /v1/product/recipe/bulk | Create recipes in bulk
*ProductRecipesApi* | [**v1ProductRecipeGet**](docs/Api/ProductRecipesApi.md#v1productrecipeget) | **GET** /v1/product/recipe | Get Product Recipes
*ProductRecipesApi* | [**v1ProductRecipeIdsDelete**](docs/Api/ProductRecipesApi.md#v1productrecipeidsdelete) | **DELETE** /v1/product/recipe/{ids} | Delete Product Recipes
*ProductRecipesApi* | [**v1ProductRecipePost**](docs/Api/ProductRecipesApi.md#v1productrecipepost) | **POST** /v1/product/recipe | Create a Product Recipe
*ProductUnitsApi* | [**v1ProductUnitBulkGetPost**](docs/Api/ProductUnitsApi.md#v1productunitbulkgetpost) | **POST** /v1/product/unit/bulk/get | Get units in bulk
*ProductUnitsApi* | [**v1ProductUnitBulkPost**](docs/Api/ProductUnitsApi.md#v1productunitbulkpost) | **POST** /v1/product/unit/bulk | Create units in bulk
*ProductUnitsApi* | [**v1ProductUnitGet**](docs/Api/ProductUnitsApi.md#v1productunitget) | **GET** /v1/product/unit | Get Units
*ProductUnitsApi* | [**v1ProductUnitIdMovePut**](docs/Api/ProductUnitsApi.md#v1productunitidmoveput) | **PUT** /v1/product/unit/{id}/move | Move Product Unit
*ProductUnitsApi* | [**v1ProductUnitIdPut**](docs/Api/ProductUnitsApi.md#v1productunitidput) | **PUT** /v1/product/unit/{id} | Update a Product Unit
*ProductUnitsApi* | [**v1ProductUnitIdsDelete**](docs/Api/ProductUnitsApi.md#v1productunitidsdelete) | **DELETE** /v1/product/unit/{ids} | Delete Product Units
*ProductUnitsApi* | [**v1ProductUnitPost**](docs/Api/ProductUnitsApi.md#v1productunitpost) | **POST** /v1/product/unit | Create a Product Unit
*ProductsApi* | [**v1ProductBulkGetPost**](docs/Api/ProductsApi.md#v1productbulkgetpost) | **POST** /v1/product/bulk/get | Get Products in bulk
*ProductsApi* | [**v1ProductBulkPatch**](docs/Api/ProductsApi.md#v1productbulkpatch) | **PATCH** /v1/product/bulk | Update Product field by field in bulk
*ProductsApi* | [**v1ProductBulkPost**](docs/Api/ProductsApi.md#v1productbulkpost) | **POST** /v1/product/bulk | Create Products in bulk
*ProductsApi* | [**v1ProductBulkPut**](docs/Api/ProductsApi.md#v1productbulkput) | **PUT** /v1/product/bulk | Update Products in bulk
*ProductsApi* | [**v1ProductCodesGet**](docs/Api/ProductsApi.md#v1productcodesget) | **GET** /v1/product/codes | Get product codes
*ProductsApi* | [**v1ProductCodesPatch**](docs/Api/ProductsApi.md#v1productcodespatch) | **PATCH** /v1/product/codes | Set/Update product codes
*ProductsApi* | [**v1ProductDeletedIdsGet**](docs/Api/ProductsApi.md#v1productdeletedidsget) | **GET** /v1/product/deleted/ids | Get Deleted Product IDs
*ProductsApi* | [**v1ProductFullTextLookupGet**](docs/Api/ProductsApi.md#v1productfulltextlookupget) | **GET** /v1/product/full-text-lookup | Lookup products
*ProductsApi* | [**v1ProductGet**](docs/Api/ProductsApi.md#v1productget) | **GET** /v1/product | Get Products, Product pictures: CDN API
*ProductsApi* | [**v1ProductIdPatch**](docs/Api/ProductsApi.md#v1productidpatch) | **PATCH** /v1/product/{id} | Update Product field by field
*ProductsApi* | [**v1ProductIdPut**](docs/Api/ProductsApi.md#v1productidput) | **PUT** /v1/product/{id} | Update Product
*ProductsApi* | [**v1ProductIdsDelete**](docs/Api/ProductsApi.md#v1productidsdelete) | **DELETE** /v1/product/{ids} | Delete Products
*ProductsApi* | [**v1ProductIdsGet**](docs/Api/ProductsApi.md#v1productidsget) | **GET** /v1/product/{ids} | Get Products in batch
*ProductsApi* | [**v1ProductPost**](docs/Api/ProductsApi.md#v1productpost) | **POST** /v1/product | Create a Product, Pictures: CDN API
*ProductsApi* | [**v1ProductRestorePost**](docs/Api/ProductsApi.md#v1productrestorepost) | **POST** /v1/product/restore | Restore products by backup ID
*SpecialEndpointsApi* | [**v1OfflineDbSyncPricelistPricesGet**](docs/Api/SpecialEndpointsApi.md#v1offlinedbsyncpricelistpricesget) | **GET** /v1/offline-db/sync/pricelist-prices | Get Pricelist Prices for Offline DB to sync
*SpecialEndpointsApi* | [**v1OfflineDbSyncProductGet**](docs/Api/SpecialEndpointsApi.md#v1offlinedbsyncproductget) | **GET** /v1/offline-db/sync/product | Get Products for Offline DB to sync, Product pictures: CDN API
*SpecialEndpointsApi* | [**v1UiProductGet**](docs/Api/SpecialEndpointsApi.md#v1uiproductget) | **GET** /v1/ui/product | Get Products for UI, Product pictures: CDN API
*SupplierApi* | [**v1SupplierBulkGetPost**](docs/Api/SupplierApi.md#v1supplierbulkgetpost) | **POST** /v1/supplier/bulk/get | Get suppliers in bulk
*SupplierApi* | [**v1SupplierBulkPost**](docs/Api/SupplierApi.md#v1supplierbulkpost) | **POST** /v1/supplier/bulk | Create suppliers in bulk
*SupplierApi* | [**v1SupplierGet**](docs/Api/SupplierApi.md#v1supplierget) | **GET** /v1/supplier | Get Suppliers
*SupplierApi* | [**v1SupplierIdPut**](docs/Api/SupplierApi.md#v1supplieridput) | **PUT** /v1/supplier/{id} | Update Supplier
*SupplierApi* | [**v1SupplierIdsDelete**](docs/Api/SupplierApi.md#v1supplieridsdelete) | **DELETE** /v1/supplier/{ids} | Delete suppliers
*SupplierApi* | [**v1SupplierPost**](docs/Api/SupplierApi.md#v1supplierpost) | **POST** /v1/supplier | Create Supplier
*SupplierApi* | [**v1SupplierTypeGet**](docs/Api/SupplierApi.md#v1suppliertypeget) | **GET** /v1/supplier/type | Get Supplier Types
*WarehouseLocationsApi* | [**v1WarehouseLocationsIdPatch**](docs/Api/WarehouseLocationsApi.md#v1warehouselocationsidpatch) | **PATCH** /v1/warehouse/locations/{id} | Update a warehouse location
*WarehouseLocationsApi* | [**v1WarehouseLocationsIdsDelete**](docs/Api/WarehouseLocationsApi.md#v1warehouselocationsidsdelete) | **DELETE** /v1/warehouse/locations/{ids} | Delete Warehouse Locations by IDs
*WarehouseLocationsApi* | [**v1WarehouseLocationsPost**](docs/Api/WarehouseLocationsApi.md#v1warehouselocationspost) | **POST** /v1/warehouse/locations | Create a Warehouse Location


## Documentation For Models

 - [BrandmodelsBulkCreateRequest](docs/Model/BrandmodelsBulkCreateRequest.md)
 - [BrandmodelsBulkResponse](docs/Model/BrandmodelsBulkResponse.md)
 - [BrandmodelsBulkResponseItem](docs/Model/BrandmodelsBulkResponseItem.md)
 - [BrandmodelsRequest](docs/Model/BrandmodelsRequest.md)
 - [BrandmodelsResponse](docs/Model/BrandmodelsResponse.md)
 - [CategorymodelsBulkCreateRequest](docs/Model/CategorymodelsBulkCreateRequest.md)
 - [CategorymodelsBulkReadResponse](docs/Model/CategorymodelsBulkReadResponse.md)
 - [CategorymodelsBulkReadResponseItem](docs/Model/CategorymodelsBulkReadResponseItem.md)
 - [CategorymodelsRequest](docs/Model/CategorymodelsRequest.md)
 - [CategorymodelsResponse](docs/Model/CategorymodelsResponse.md)
 - [CommonmodelsDescription](docs/Model/CommonmodelsDescription.md)
 - [CommonmodelsProductDescription](docs/Model/CommonmodelsProductDescription.md)
 - [CommonmodelsTranslatable](docs/Model/CommonmodelsTranslatable.md)
 - [CountriesCountryRequest](docs/Model/CountriesCountryRequest.md)
 - [CountriesCountryResponse](docs/Model/CountriesCountryResponse.md)
 - [FamilymodelsBulkCreateRequest](docs/Model/FamilymodelsBulkCreateRequest.md)
 - [FamilymodelsBulkReadRequest](docs/Model/FamilymodelsBulkReadRequest.md)
 - [FamilymodelsBulkReadResponse](docs/Model/FamilymodelsBulkReadResponse.md)
 - [FamilymodelsBulkReadResponseItem](docs/Model/FamilymodelsBulkReadResponseItem.md)
 - [FamilymodelsReadRequest](docs/Model/FamilymodelsReadRequest.md)
 - [FamilymodelsResponse](docs/Model/FamilymodelsResponse.md)
 - [GroupmodelsAdditionalGroupJSON](docs/Model/GroupmodelsAdditionalGroupJSON.md)
 - [GroupmodelsAdditionalGroupRequest](docs/Model/GroupmodelsAdditionalGroupRequest.md)
 - [GroupmodelsAdditionalGroupsResponse](docs/Model/GroupmodelsAdditionalGroupsResponse.md)
 - [GroupmodelsBulkCreateGroupsRequest](docs/Model/GroupmodelsBulkCreateGroupsRequest.md)
 - [GroupmodelsBulkCreatePriorityGroupRequest](docs/Model/GroupmodelsBulkCreatePriorityGroupRequest.md)
 - [GroupmodelsBulkReadGroupsResponse](docs/Model/GroupmodelsBulkReadGroupsResponse.md)
 - [GroupmodelsBulkReadGroupsResponseItem](docs/Model/GroupmodelsBulkReadGroupsResponseItem.md)
 - [GroupmodelsBulkReadPriorityGroupsResponse](docs/Model/GroupmodelsBulkReadPriorityGroupsResponse.md)
 - [GroupmodelsBulkReadPriorityGroupsResponseItem](docs/Model/GroupmodelsBulkReadPriorityGroupsResponseItem.md)
 - [GroupmodelsExternalIDRequest](docs/Model/GroupmodelsExternalIDRequest.md)
 - [GroupmodelsExternalIDResponse](docs/Model/GroupmodelsExternalIDResponse.md)
 - [GroupmodelsGroupRequest](docs/Model/GroupmodelsGroupRequest.md)
 - [GroupmodelsGroupResponse](docs/Model/GroupmodelsGroupResponse.md)
 - [GroupmodelsLocationSpecificTaxRequest](docs/Model/GroupmodelsLocationSpecificTaxRequest.md)
 - [GroupmodelsLocationTaxRate](docs/Model/GroupmodelsLocationTaxRate.md)
 - [GroupmodelsPriorityGroupCreateRequest](docs/Model/GroupmodelsPriorityGroupCreateRequest.md)
 - [GroupmodelsPriorityGroupResponse](docs/Model/GroupmodelsPriorityGroupResponse.md)
 - [IndentationCategoryTreeResultSample](docs/Model/IndentationCategoryTreeResultSample.md)
 - [IndentationCategoryTreeResultSampleNoChildren](docs/Model/IndentationCategoryTreeResultSampleNoChildren.md)
 - [IndentationGroupTreeResultSample](docs/Model/IndentationGroupTreeResultSample.md)
 - [IndentationGroupTreeResultSampleNoChildren](docs/Model/IndentationGroupTreeResultSampleNoChildren.md)
 - [IndentationResult](docs/Model/IndentationResult.md)
 - [LinkedproductmodelsBulkCreateRequest](docs/Model/LinkedproductmodelsBulkCreateRequest.md)
 - [LinkedproductmodelsCreateRequest](docs/Model/LinkedproductmodelsCreateRequest.md)
 - [LinkedproductmodelsResponse](docs/Model/LinkedproductmodelsResponse.md)
 - [LinkedproductmodelsUpdateRequest](docs/Model/LinkedproductmodelsUpdateRequest.md)
 - [MatrixmodelsChangeVariationParentRequest](docs/Model/MatrixmodelsChangeVariationParentRequest.md)
 - [MatrixmodelsCreateProductRequest](docs/Model/MatrixmodelsCreateProductRequest.md)
 - [MatrixmodelsCreateVariationRequest](docs/Model/MatrixmodelsCreateVariationRequest.md)
 - [MatrixmodelsDimensionBulkCreateRequest](docs/Model/MatrixmodelsDimensionBulkCreateRequest.md)
 - [MatrixmodelsDimensionBulkReadResponse](docs/Model/MatrixmodelsDimensionBulkReadResponse.md)
 - [MatrixmodelsDimensionBulkReadResponseItem](docs/Model/MatrixmodelsDimensionBulkReadResponseItem.md)
 - [MatrixmodelsDimensionIDs](docs/Model/MatrixmodelsDimensionIDs.md)
 - [MatrixmodelsDimensionRequest](docs/Model/MatrixmodelsDimensionRequest.md)
 - [MatrixmodelsDimensionResponse](docs/Model/MatrixmodelsDimensionResponse.md)
 - [MatrixmodelsDimensionValueBulkCreateRequest](docs/Model/MatrixmodelsDimensionValueBulkCreateRequest.md)
 - [MatrixmodelsDimensionValueBulkReadResponse](docs/Model/MatrixmodelsDimensionValueBulkReadResponse.md)
 - [MatrixmodelsDimensionValueBulkReadResponseItem](docs/Model/MatrixmodelsDimensionValueBulkReadResponseItem.md)
 - [MatrixmodelsDimensionValueRequest](docs/Model/MatrixmodelsDimensionValueRequest.md)
 - [MatrixmodelsDimensionValueResponse](docs/Model/MatrixmodelsDimensionValueResponse.md)
 - [MatrixmodelsDimensionValueUpdateRequest](docs/Model/MatrixmodelsDimensionValueUpdateRequest.md)
 - [MatrixmodelsDimensionsBulkReadRequest](docs/Model/MatrixmodelsDimensionsBulkReadRequest.md)
 - [MatrixmodelsDimensionsBulkUpdateRequest](docs/Model/MatrixmodelsDimensionsBulkUpdateRequest.md)
 - [MatrixmodelsDimensionsBulkUpdateRequestItem](docs/Model/MatrixmodelsDimensionsBulkUpdateRequestItem.md)
 - [MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse](docs/Model/MatrixmodelsDimensionsByMatrixProductIDBulkReadResponse.md)
 - [MatrixmodelsDimensionsByMatrixProductIDBulkReadResponseItem](docs/Model/MatrixmodelsDimensionsByMatrixProductIDBulkReadResponseItem.md)
 - [MatrixmodelsProductBulkCreateRequest](docs/Model/MatrixmodelsProductBulkCreateRequest.md)
 - [MatrixmodelsProductBulkCreateRequestItem](docs/Model/MatrixmodelsProductBulkCreateRequestItem.md)
 - [MatrixmodelsProductBulkReadRequest](docs/Model/MatrixmodelsProductBulkReadRequest.md)
 - [MatrixmodelsProductBulkReadRequestItem](docs/Model/MatrixmodelsProductBulkReadRequestItem.md)
 - [MatrixmodelsProductBulkReadResponse](docs/Model/MatrixmodelsProductBulkReadResponse.md)
 - [MatrixmodelsProductBulkReadResponseItem](docs/Model/MatrixmodelsProductBulkReadResponseItem.md)
 - [MatrixmodelsProductVariationJSON](docs/Model/MatrixmodelsProductVariationJSON.md)
 - [MatrixmodelsProductWithVariations](docs/Model/MatrixmodelsProductWithVariations.md)
 - [MatrixmodelsUpdateProductDimensionsRequest](docs/Model/MatrixmodelsUpdateProductDimensionsRequest.md)
 - [MatrixmodelsVariationBulkChangeParentRequest](docs/Model/MatrixmodelsVariationBulkChangeParentRequest.md)
 - [MatrixmodelsVariationBulkChangeParentRequestItem](docs/Model/MatrixmodelsVariationBulkChangeParentRequestItem.md)
 - [MatrixmodelsVariationBulkCreateRequest](docs/Model/MatrixmodelsVariationBulkCreateRequest.md)
 - [MatrixmodelsVariationBulkCreateRequestItem](docs/Model/MatrixmodelsVariationBulkCreateRequestItem.md)
 - [MatrixmodelsVariationDescription](docs/Model/MatrixmodelsVariationDescription.md)
 - [ModelsAssortmentRequest](docs/Model/ModelsAssortmentRequest.md)
 - [ModelsAssortmentResponse](docs/Model/ModelsAssortmentResponse.md)
 - [ModelsAssortmentToProductBulkRequest](docs/Model/ModelsAssortmentToProductBulkRequest.md)
 - [ModelsAssortmentToProductLinkResponse](docs/Model/ModelsAssortmentToProductLinkResponse.md)
 - [ModelsAssortmentToProductRequest](docs/Model/ModelsAssortmentToProductRequest.md)
 - [ModelsAssortmentToProductUpdateRequest](docs/Model/ModelsAssortmentToProductUpdateRequest.md)
 - [ModelsAttributeRequest](docs/Model/ModelsAttributeRequest.md)
 - [ModelsAttributeResponse](docs/Model/ModelsAttributeResponse.md)
 - [ModelsBackupRequest](docs/Model/ModelsBackupRequest.md)
 - [ModelsBulkCreateSupplierRequest](docs/Model/ModelsBulkCreateSupplierRequest.md)
 - [ModelsBulkReadSuppliersResponse](docs/Model/ModelsBulkReadSuppliersResponse.md)
 - [ModelsBulkReadSuppliersResponseItem](docs/Model/ModelsBulkReadSuppliersResponseItem.md)
 - [ModelsMoveRequest](docs/Model/ModelsMoveRequest.md)
 - [ModelsParameterOptionWithProductsResponse](docs/Model/ModelsParameterOptionWithProductsResponse.md)
 - [ModelsPriceListPrice](docs/Model/ModelsPriceListPrice.md)
 - [ModelsProductResponseForOfflineDB](docs/Model/ModelsProductResponseForOfflineDB.md)
 - [ModelsSetResponse](docs/Model/ModelsSetResponse.md)
 - [ModelsSetToGroupResponse](docs/Model/ModelsSetToGroupResponse.md)
 - [ModelsSupplierRequest](docs/Model/ModelsSupplierRequest.md)
 - [ModelsSupplierResponse](docs/Model/ModelsSupplierResponse.md)
 - [ModelsSupplierTypeResponse](docs/Model/ModelsSupplierTypeResponse.md)
 - [PackagesPackageCategoryResponse](docs/Model/PackagesPackageCategoryResponse.md)
 - [PackagesPackageRequest](docs/Model/PackagesPackageRequest.md)
 - [PackagesPackageResponse](docs/Model/PackagesPackageResponse.md)
 - [PackagesPackageUpdateRequest](docs/Model/PackagesPackageUpdateRequest.md)
 - [ParametermodelsOptionResponse](docs/Model/ParametermodelsOptionResponse.md)
 - [ParametermodelsParameterResponse](docs/Model/ParametermodelsParameterResponse.md)
 - [ParametermodelsParameterWithOptionsResponse](docs/Model/ParametermodelsParameterWithOptionsResponse.md)
 - [ParametermodelsValidationRuleRequest](docs/Model/ParametermodelsValidationRuleRequest.md)
 - [ParametermodelsValidationRuleResponse](docs/Model/ParametermodelsValidationRuleResponse.md)
 - [ParametermodelsValidationRuleUpdateRequest](docs/Model/ParametermodelsValidationRuleUpdateRequest.md)
 - [ParametermodelsValueResponse](docs/Model/ParametermodelsValueResponse.md)
 - [ParammodelsBulkReadRequest](docs/Model/ParammodelsBulkReadRequest.md)
 - [ParammodelsBulkReadRequestNoTotalCount](docs/Model/ParammodelsBulkReadRequestNoTotalCount.md)
 - [ParammodelsFilterJSON](docs/Model/ParammodelsFilterJSON.md)
 - [ParammodelsPaginationParameters](docs/Model/ParammodelsPaginationParameters.md)
 - [ParammodelsReadRequest](docs/Model/ParammodelsReadRequest.md)
 - [ParammodelsReadRequestWithTotalCount](docs/Model/ParammodelsReadRequestWithTotalCount.md)
 - [ParammodelsSortRequest](docs/Model/ParammodelsSortRequest.md)
 - [PermissionsSetUserPermissionRequest](docs/Model/PermissionsSetUserPermissionRequest.md)
 - [PermissionsUserPermission](docs/Model/PermissionsUserPermission.md)
 - [ProductsAutoCodes](docs/Model/ProductsAutoCodes.md)
 - [ProductsBulkCreateExtraFieldsRequest](docs/Model/ProductsBulkCreateExtraFieldsRequest.md)
 - [ProductsBulkCreateProductRequest](docs/Model/ProductsBulkCreateProductRequest.md)
 - [ProductsBulkCreateProductRequestItem](docs/Model/ProductsBulkCreateProductRequestItem.md)
 - [ProductsBulkCreateUnitsRequest](docs/Model/ProductsBulkCreateUnitsRequest.md)
 - [ProductsBulkPatchUpdateProductRequest](docs/Model/ProductsBulkPatchUpdateProductRequest.md)
 - [ProductsBulkPatchUpdateProductRequestItem](docs/Model/ProductsBulkPatchUpdateProductRequestItem.md)
 - [ProductsBulkReadExtraFieldsResponse](docs/Model/ProductsBulkReadExtraFieldsResponse.md)
 - [ProductsBulkReadExtraFieldsResponseItem](docs/Model/ProductsBulkReadExtraFieldsResponseItem.md)
 - [ProductsBulkReadProductResponse](docs/Model/ProductsBulkReadProductResponse.md)
 - [ProductsBulkReadProductResponseItem](docs/Model/ProductsBulkReadProductResponseItem.md)
 - [ProductsBulkReadRequest](docs/Model/ProductsBulkReadRequest.md)
 - [ProductsBulkReadRequestItem](docs/Model/ProductsBulkReadRequestItem.md)
 - [ProductsBulkReadResponse](docs/Model/ProductsBulkReadResponse.md)
 - [ProductsBulkReadResponseItem](docs/Model/ProductsBulkReadResponseItem.md)
 - [ProductsBulkReadUnitsResponse](docs/Model/ProductsBulkReadUnitsResponse.md)
 - [ProductsBulkReadUnitsResponseItem](docs/Model/ProductsBulkReadUnitsResponseItem.md)
 - [ProductsBulkUpdateProductRequest](docs/Model/ProductsBulkUpdateProductRequest.md)
 - [ProductsBulkUpdateProductRequestItem](docs/Model/ProductsBulkUpdateProductRequestItem.md)
 - [ProductsCreateExtraFieldRequest](docs/Model/ProductsCreateExtraFieldRequest.md)
 - [ProductsCreateUpdateAutoCodes](docs/Model/ProductsCreateUpdateAutoCodes.md)
 - [ProductsExtraFieldResponse](docs/Model/ProductsExtraFieldResponse.md)
 - [ProductsPatchUpdateProductRequest](docs/Model/ProductsPatchUpdateProductRequest.md)
 - [ProductsPermissionSet](docs/Model/ProductsPermissionSet.md)
 - [ProductsProductFieldsPermissions](docs/Model/ProductsProductFieldsPermissions.md)
 - [ProductsProductInheritedFieldsRequest](docs/Model/ProductsProductInheritedFieldsRequest.md)
 - [ProductsProductRequest](docs/Model/ProductsProductRequest.md)
 - [ProductsProductResponse](docs/Model/ProductsProductResponse.md)
 - [ProductsProductResponseForUI](docs/Model/ProductsProductResponseForUI.md)
 - [ProductsProductResponseWithLinkStatus](docs/Model/ProductsProductResponseWithLinkStatus.md)
 - [ProductsProductResponseWithParameters](docs/Model/ProductsProductResponseWithParameters.md)
 - [ProductsProductResponseWithParametersRecord](docs/Model/ProductsProductResponseWithParametersRecord.md)
 - [ProductsProductsResponseWithCount](docs/Model/ProductsProductsResponseWithCount.md)
 - [ProductsUnitRequest](docs/Model/ProductsUnitRequest.md)
 - [ProductsUnitResponse](docs/Model/ProductsUnitResponse.md)
 - [ProductsUpdateExtraFieldRequest](docs/Model/ProductsUpdateExtraFieldRequest.md)
 - [RecipemodelsBulkCreateRequest](docs/Model/RecipemodelsBulkCreateRequest.md)
 - [RecipemodelsBulkReadResponse](docs/Model/RecipemodelsBulkReadResponse.md)
 - [RecipemodelsBulkReadResponseItem](docs/Model/RecipemodelsBulkReadResponseItem.md)
 - [RecipemodelsRequest](docs/Model/RecipemodelsRequest.md)
 - [RecipemodelsResponse](docs/Model/RecipemodelsResponse.md)
 - [RequestsArchivable](docs/Model/RequestsArchivable.md)
 - [RequestsIDRequest](docs/Model/RequestsIDRequest.md)
 - [RequestsParameterOptionRequest](docs/Model/RequestsParameterOptionRequest.md)
 - [RequestsParameterRequest](docs/Model/RequestsParameterRequest.md)
 - [RequestsRequest](docs/Model/RequestsRequest.md)
 - [RequestsValueRequest](docs/Model/RequestsValueRequest.md)
 - [ResponsesBulkResponse](docs/Model/ResponsesBulkResponse.md)
 - [ResponsesBulkResponseWithResults](docs/Model/ResponsesBulkResponseWithResults.md)
 - [ResponsesBulkResult](docs/Model/ResponsesBulkResult.md)
 - [ResponsesMessageResponse](docs/Model/ResponsesMessageResponse.md)
 - [ResponsesResponse](docs/Model/ResponsesResponse.md)
 - [WarehousesCreateLocationRequest](docs/Model/WarehousesCreateLocationRequest.md)
 - [WarehousesLocationJSON](docs/Model/WarehousesLocationJSON.md)
 - [WarehousesUpdateLocationRequest](docs/Model/WarehousesUpdateLocationRequest.md)


## Documentation For Authorization


## cc

- **Type**: API key
- **API key parameter name**: clientCode
- **Location**: HTTP header

## jwt

- **Type**: API key
- **API key parameter name**: jwt
- **Location**: HTTP header

## sk

- **Type**: API key
- **API key parameter name**: sessionKey
- **Location**: HTTP header


## Author

david.zingerman@erply.com


