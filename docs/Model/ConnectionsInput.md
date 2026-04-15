# ConnectionsInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | References users.user_id — An individual user account within a company. See GET /users for valid values. Optional. | [optional]
**engine_id** | **int** | References storage_engines.engine_id — Fact table of all the different storage engines we support. See GET /storage_engines for valid values. Required. |
**company_id** | **string** | References companies.company_id — A Spartera seller or buyer company account. See GET /companies for valid values. Required. |
**credential_type** | **string** | Optional. One of: SERVICE_ACCOUNT, USERNAME_PASSWORD, API_KEY, SERVICE_IDENTITY, ACCESS_KEY, … (8 total). | [optional]
**name** | **string** | Optional. | [optional]
**description** | **string** | Optional. | [optional]
**provider_domain** | **string** | Domain of the external API provider (e.g., &#39;api.weather.com&#39;) | [optional]
**verified_usage_ability** | **bool** | Optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
