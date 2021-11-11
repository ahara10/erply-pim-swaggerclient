# ProductsProductFieldsPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_restriction** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**alcohol_percentage** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**alcohol_registry_number** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**batches** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**brand_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | ID of product brand. To get the list of brandmodels, use getBrands. | [optional] 
**cashier_must_enter_price** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | boolean flag 0 or 1 | [optional] 
**category_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**code** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Product&#39;s code. Must be UNIQUE, unless the account is configured otherwise. | [optional] 
**code2** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**code3** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Third code of the item (note that this field may not be visible on product card by default). | [optional] 
**code5** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**code6** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**code7** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**code8** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**cost** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Cost is Product cost | [optional] 
**country_of_origin_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**delivery_time** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**deposit_fee_amount** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**deposit_fee_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | ContainerID is ID of another product, a beverage container that is always sold together with this item. | [optional] 
**description** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | //PlainTextDescription is translatable plain text description PlainTextDescription map[string]string &#x60;json:\&quot;plain_text_description,omitempty\&quot;&#x60; //HTMLDescription is translatable html description HTMLDescription map[string]string &#x60;json:\&quot;html_description,omitempty\&quot;&#x60; Description is translatable and of 2 types: plain text, HTML. Languages should be in ISO 639-1 Code | [optional] 
**displayed_in_webshop** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | 0 or 1 | [optional] 
**excise_declaration_number** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**extra_field1_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**extra_field2_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**extra_field3_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**extra_field4_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**family_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**gross_weight** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | GrossWeight is Item&#39;s gross weight (with packaging). Unit depends on region, check your Erply account (typically lbs or kg). | [optional] 
**group_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | ID of product group. To get the list of product groups, use getProductGroups. | [optional] 
**has_serial_numbers** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**height** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**is_gift_card** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | 0 or 1 | [optional] 
**is_regular_gift_card** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | boolean flag 0 or 1 | [optional] 
**labels_not_needed** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | boolean flag 0 or 1 | [optional] 
**length** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Length is Item&#39;s physical dimensions. | [optional] 
**location_in_warehouse_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | LocationInWarehouseID is ID of selected location in warehouse. | [optional] 
**location_in_warehouse_text** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | LocationInWarehouseText is Product&#39;s specific text added to location in warehouse. | [optional] 
**manufacturer_name** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**name** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**net_weight** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | NetWeight is Item&#39;s net weight. Unit depends on region, check your Erply account (typically lbs or kg). | [optional] 
**non_discountable** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | 0 or 1 | [optional] 
**non_refundable** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | 0 or 1 | [optional] 
**non_stock_product** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | boolean flag 0 or 1 | [optional] 
**packaging_type** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**packing_not_required** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**price** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Price is just the default price of a product and the actual price applied in a particular location, to a particular customer, depends on price lists and promotions: https://learn-api.erply.com/concepts/pricing | [optional] 
**price_with_tax** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**priority_group_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**product_reorder_multiples** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**reward_points_not_allowed** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | boolean flag 0 or 1 | [optional] 
**sold_in_packages** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**status** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**suggested_retail_price** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**supplier_code** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Supplier&#39;s product code | [optional] 
**supplier_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**supplier_name** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**tax_free** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | boolean flag 0 or 1 | [optional] 
**tax_rate_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | TaxRateID is just the default tax rate of a product and the actual tax applied in a particular location depends on multiple rules: https://learn-api.erply.com/concepts/taxes. | [optional] 
**type** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 
**unit_id** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | ID of product unit. To get the list of units, use getProductUnits. | [optional] 
**volume** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) | Volume is Item&#39;s fluid volume, eg. for beverages or perfumery. Unit depends on locale, check your Erply account (typically mL or fl oz). | [optional] 
**width** | [**\Swagger\Client\Model\ProductsPermissionSet**](ProductsPermissionSet.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

