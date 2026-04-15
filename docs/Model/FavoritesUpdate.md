# FavoritesUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_id** | **string** | References assets.asset_id — A published analytics asset — a calculation or visualization built on a data connection. See GET /assets for valid values. Required. | [optional]
**user_id** | **string** | References users.user_id — An individual user account within a company. See GET /users for valid values. Optional. | [optional]
**company_id** | **string** | References companies.company_id — A Spartera seller or buyer company account. See GET /companies for valid values. Required. | [optional]
**notes** | **string** | Optional user notes about this favorite | [optional]
**category** | **string** | Optional category for organizing favorites (e.g., &#39;Work&#39;, &#39;Research&#39;) | [optional]
**priority** | **int** | User-defined priority for sorting (higher &#x3D; more important) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
