# UsersUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | References companies.company_id — A Spartera seller or buyer company account. See GET /companies for valid values. Required. | [optional]
**role_id** | **int** | User&#39;s role for RBAC - single source of truth | [optional]
**function_id** | **int** | User&#39;s job function/title | [optional]
**status** | **string** | Required. One of: ACTIVE, PENDING, INACTIVE, BANNED. | [optional]
**email_address** | **string** | Optional. Must be unique. | [optional]
**timezone** | **string** | Optional. | [optional]
**marketing_opt_out** | **bool** | Whether user has opted out of marketing communications. Default false &#x3D; opted in per ToS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
