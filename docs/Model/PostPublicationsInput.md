# PostPublicationsInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** | Post that was published |
**company_id** | **string** | Company this publication belongs to |
**integration_id** | **string** | Integration used for publishing | [optional]
**platform** | **string** | Platform identifier (beehiiv, wordpress, etc) |
**external_post_id** | **string** | ID of the post on the external platform | [optional]
**external_post_url** | **string** | URL to view the post on the external platform | [optional]
**published_at** | **\DateTime** | When the post was published to this platform | [optional]
**status** | **string** | Status: published, failed, deleted | [optional]
**error_message** | **string** | Error message if publication failed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
