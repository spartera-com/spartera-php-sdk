# PostgenIntegrationsUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Company this integration belongs to | [optional]
**user_id** | **string** | User who created this integration | [optional]
**platform** | **string** | Platform identifier (beehiiv, wordpress, medium, etc) | [optional]
**platform_name** | **string** | Display name of the platform | [optional]
**credentials_secret_name** | **string** | GCP Secret Manager secret name containing encrypted credentials | [optional]
**is_active** | **bool** | Whether this integration is currently active | [optional]
**last_used_at** | **\DateTime** | Last time this integration was used for publishing | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
