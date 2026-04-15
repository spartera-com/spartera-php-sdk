# PostgenIntegrations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | **\DateTime** | Optional. | [optional]
**last_updated** | **\DateTime** | Optional. | [optional]
**integration_id** | **string** | Unique identifier. | [optional]
**company_id** | **string** | Company this integration belongs to |
**user_id** | **string** | User who created this integration |
**platform** | **string** | Platform identifier (beehiiv, wordpress, medium, etc) |
**platform_name** | **string** | Display name of the platform |
**credentials_secret_name** | **string** | GCP Secret Manager secret name containing encrypted credentials |
**is_active** | **bool** | Whether this integration is currently active |
**last_used_at** | **\DateTime** | Last time this integration was used for publishing | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
