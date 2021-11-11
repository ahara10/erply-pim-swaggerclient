# ProductsBulkCreateProductRequestItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_restriction** | **int** |  | [optional] 
**alcohol_percentage** | **string** |  | [optional] 
**alcohol_registry_number** | **string** |  | [optional] 
**backup_id** | **int** |  | [optional] 
**batches** | **string** |  | [optional] 
**brand_id** | **int** | ID of product brand. To get the list of brandmodels, use getBrands. | [optional] 
**cashier_must_enter_price** | **int** | boolean flag 0 or 1 | [optional] 
**category_id** | **int** |  | [optional] 
**code** | **string** | Product&#39;s code. Must be UNIQUE, unless the account is configured otherwise. | [optional] 
**code2** | **string** | Product&#39;s second code (by convention, EAN barcode). Must be UNIQUE, unless the account is configured otherwise. | [optional] 
**code3** | **string** | Third code of the item (note that this field may not be visible on product card by default). | [optional] 
**code5** | **string** |  | [optional] 
**code6** | **string** |  | [optional] 
**code7** | **string** |  | [optional] 
**code8** | **string** |  | [optional] 
**cost** | **float** | Cost is Product cost | [optional] 
**country_of_origin_id** | **int** |  | [optional] 
**delivery_time** | **string** |  | [optional] 
**deposit_fee_amount** | **int** |  | [optional] 
**deposit_fee_id** | **int** | ContainerID is ID of another product, a beverage container that is always sold together with this item. | [optional] 
**description** | [**\Swagger\Client\Model\CommonmodelsDescription**](CommonmodelsDescription.md) |  | [optional] 
**displayed_in_webshop** | **int** | 0 or 1 | [optional] 
**excise_declaration_number** | **string** |  | [optional] 
**extra_field1_id** | **int** |  | [optional] 
**extra_field2_id** | **int** |  | [optional] 
**extra_field3_id** | **int** |  | [optional] 
**extra_field4_id** | **int** |  | [optional] 
**family_id** | **int** |  | [optional] 
**generate_code2_automatically** | **bool** | if true, the product code will be generated based on the user configuration or will generate the code in case there is none | [optional] 
**generate_code_automatically** | **bool** | if true, the product code will be generated based on the user configuration or will generate the code in case there is none | [optional] 
**gross_weight** | **float** | GrossWeight is Item&#39;s gross weight (with packaging). Unit depends on region, check your Erply account (typically lbs or kg). | [optional] 
**group_id** | **int** | ID of product group. To get the list of product groups, use getProductGroups. | [optional] 
**has_serial_numbers** | **int** |  | [optional] 
**height** | **float** |  | [optional] 
**is_gift_card** | **int** | 0 or 1 | [optional] 
**is_regular_gift_card** | **int** | boolean flag 0 or 1 | [optional] 
**labels_not_needed** | **int** | boolean flag 0 or 1 | [optional] 
**length** | **float** | Length is Item&#39;s physical dimensions. | [optional] 
**location_in_warehouse_id** | **int** | LocationInWarehouseID is ID of selected location in warehouse. | [optional] 
**location_in_warehouse_text** | **string** | LocationInWarehouseText is Product&#39;s specific text added to location in warehouse. | [optional] 
**manufacturer_name** | **string** |  | [optional] 
**name** | [**\Swagger\Client\Model\CommonmodelsTranslatable**](CommonmodelsTranslatable.md) |  | [optional] 
**net_weight** | **float** | NetWeight is Item&#39;s net weight. Unit depends on region, check your Erply account (typically lbs or kg). | [optional] 
**non_discountable** | **int** | 0 or 1 | [optional] 
**non_refundable** | **int** | 0 or 1 | [optional] 
**non_stock_product** | **int** | boolean flag 0 or 1 | [optional] 
**packaging_type** | **string** |  | [optional] 
**packing_not_required** | **int** |  | [optional] 
**parent_product_id** | **int** | Parent product ID. Only for matrix variations (specific colors/sizes of a matrix item). See guidelines below. | [optional] 
**price** | **float** | Price is just the default price of a product and the actual price applied in a particular location, to a particular customer, depends on price lists and promotions: https://learn-api.erply.com/concepts/pricing | [optional] 
**priority_group_id** | **int** |  | [optional] 
**product_reorder_multiples** | **int** |  | [optional] 
**reward_points_not_allowed** | **int** | boolean flag 0 or 1 | [optional] 
**sold_in_packages** | **int** |  | [optional] 
**status** | **string** | Status is a classifier with four possible values: &#39;ACTIVE&#39; (DEFAULT), &#39;NO_LONGER_ORDERED&#39;, &#39;NOT_FOR_SALE&#39; and &#39;ARCHIVED&#39;. | [optional] 
**suggested_retail_price** | **float** |  | [optional] 
**supplier_code** | **string** | Supplier&#39;s product code | [optional] 
**supplier_id** | **int** |  | [optional] 
**tax_free** | **int** | boolean flag 0 or 1 | [optional] 
**tax_rate_id** | **int** | TaxRateID is just the default tax rate of a product and the actual tax applied in a particular location depends on multiple rules: https://learn-api.erply.com/concepts/taxes. | [optional] 
**type** | **string** | Product type, possible types are &#39;PRODUCT&#39;, &#39;BUNDLE&#39;, &#39;MATRIX&#39;, &#39;ASSEMBLY&#39;. By default &#39;PRODUCT&#39;. | [optional] 
**unit_id** | **int** | ID of product unit. To get the list of units, use getProductUnits. | [optional] 
**volume** | **int** | Volume is Item&#39;s fluid volume, eg. for beverages or perfumery. Unit depends on locale, check your Erply account (typically mL or fl oz). | [optional] 
**width** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

