# Provider

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider_code** | **string** | Uniquely identifies a provider | 
**country_iso** | **string** | The country within which the provider operates | 
**name** | **string** | The English trading name of the provider. | 
**short_name** | **string** | A shorter version of the Name suitable for use in space restricted UI elements | [optional] 
**validation_regex** | **string** | Account numbers must match the ValidationRegex | 
**customer_care_number** | **string** | Customer care number of the provider | [optional] 
**region_codes** | **string[]** | Regions supported by the provider within the country | 
**payment_types** | **string[]** | Indicates the supported payment types for all the products in this provider. Current possible values are: Prepaid and Postpaid | 
**logo_url** | **string** | Link to image of the provider logo | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


