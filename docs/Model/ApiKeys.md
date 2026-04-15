# ApiKeys

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | **\DateTime** | Optional. | [optional]
**last_updated** | **\DateTime** | Optional. | [optional]
**api_key_id** | **int** | Unique identifier. |
**user_id** | **string** | User who owns this API key | [optional]
**company_id** | **string** | Company this API key belongs to |
**role_id** | **int** | Role/permission level for this API key |
**key_type** | **string** | Type of API key (analytics, mcp, or endpoint) |
**is_system_generated** | **bool** | True if key was auto-generated for MCP deployment |
**mcp_deployment_id** | **string** | MCP deployment this key is tied to (NULL for analytics/endpoint keys) | [optional]
**endpoint_id** | **string** | Endpoint this key is tied to (NULL for analytics/mcp keys) | [optional]
**name** | **string** | Human-readable name for this API key | [optional]
**expiration_date_utc** | **\DateTime** | When this API key expires (NULL &#x3D; never expires) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
