# Alerts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | **\DateTime** | Optional. | [optional]
**last_updated** | **\DateTime** | Optional. | [optional]
**alert_id** | **int** | Auto-generated unique identifier. | [optional]
**asset_id** | **string** | References assets.asset_id — A published analytics asset — a calculation or visualization built on a data connection. See GET /assets for valid values. Required. |
**user_id** | **string** | References users.user_id — An individual user account within a company. See GET /users for valid values. Optional. | [optional]
**company_id** | **string** | References companies.company_id — A Spartera seller or buyer company account. See GET /companies for valid values. Required. |
**is_active** | **bool** | Whether this alert is currently active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
