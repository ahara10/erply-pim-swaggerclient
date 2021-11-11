# ParametermodelsValidationRuleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameter_id** | **int** |  | [optional] 
**rule** | **float** | Rule \&quot;value\&quot; or whatever to call this: the numeric qualifier that goes hand in hand with that particular rule type. Eg. I specify that my parameter must have at least a minimum number of characters and that minimum number is 5. For type REQUIRED, leave empty. For type MIN_LENGTH, input the required minimum length as an integer. For type MAX_LENGTH, input the required maximum length as an integer. For type MIN_VALUE, input the minimum allowed value as a signed integer or decimal (eg. “0”, “-1”, “25.6”, “-9.999999” etc.) For type MAX_VALUE, input the maximum allowed value as a signed integer or decimal. For type INPUT_CASE, input 0 for \&quot;LOWERCASE\&quot; or 1 for “UPPERCASE”. For type PRECISION, input the number of allowed decimal places as an integer (eg. “0”, “1”, or “2”) | [optional] 
**type** | **string** | Type of the validation rule. Can be REQUIRED, MIN_LENGTH, MAX_LENGTH, MIN_VALUE, MAX_VALUE, INPUT_CASE and PRECISION | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


