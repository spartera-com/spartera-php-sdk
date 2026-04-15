# CompaniesInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**industry_id** | **int** | References industries.industry_id — Available industry categories for asset classification. Based on US NAISC codes.. See GET /industries for valid values. Optional. | [optional]
**country_id** | **int** | References countries.country_id — List of countries of the world. See GET /countries for valid values. Optional. | [optional]
**company_name** | **string** | Optional. | [optional]
**company_description** | **string** | Optional. | [optional]
**company_handle** | **string** | Required. Must be unique. |
**company_domain** | **string** | Required. Must be unique. |
**credits_balance** | **int** | Current balance of credits for this company (buyer) | [optional]
**accepted_eula** | **bool** | Optional. | [optional]
**stripe_account_id** | **string** | Stripe Connect account ID for marketplace sellers | [optional]
**stripe_account_status** | **string** | Status of the Stripe account (verified, pending, etc.) | [optional]
**vendor_share_percent** | **float** | Negotiated vendor revenue share (e.g. 0.85 &#x3D; 85%). NULL &#x3D; system default 80%. | [optional]
**partnership_type** | **string** | Partnership type: SELF_MANAGED, CUSTODIAN, or null | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
