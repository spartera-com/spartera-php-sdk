# StorageEngines

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | **\DateTime** | Optional. | [optional]
**last_updated** | **\DateTime** | Optional. | [optional]
**engine_id** | **int** | Unique identifier. | [optional]
**provider_id** | **int** | References cloud_providers.provider_id — Supported cloud platforms and database engines available for connections. See GET /cloud_providers for valid values. Required. |
**service_name** | **string** | Required. |
**engine_type** | **string** | Required. One of: EDW, LLM, RDBMS, OBJ, API_MODEL, … (6 total). |
**integration_complete** | **bool** | Optional. | [optional]
**test_func_complete** | **bool** | Optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
