# OpenAPI\Client\PostgenIntegrationsApi



All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPostgenIntegrations()**](PostgenIntegrationsApi.md#createPostgenIntegrations) | **POST** /companies/{company_id}/postgen_integrations | POST /companies/{company_id}/postgen_integrations |
| [**createPostgenIntegrationsTest()**](PostgenIntegrationsApi.md#createPostgenIntegrationsTest) | **POST** /companies/{company_id}/postgen_integrations/test | POST /companies/{company_id}/postgen_integrations/test |
| [**deletePostgenIntegrations()**](PostgenIntegrationsApi.md#deletePostgenIntegrations) | **DELETE** /companies/{company_id}/postgen_integrations/{integration_id} | Delete single integration by ID.     Also deletes credentials from GCP Secret Manager. |
| [**getPostgenIntegrationsById()**](PostgenIntegrationsApi.md#getPostgenIntegrationsById) | **GET** /companies/{company_id}/postgen_integrations/{integration_id} | Get single integration by ID. |
| [**listPostgenIntegrations()**](PostgenIntegrationsApi.md#listPostgenIntegrations) | **GET** /companies/{company_id}/postgen_integrations | Get a list of all postgen integrations for the company.     All company users can view integrations. |
| [**updatePostgenIntegrations()**](PostgenIntegrationsApi.md#updatePostgenIntegrations) | **PATCH** /companies/{company_id}/postgen_integrations/{integration_id} | Update an existing integration by ID.      Can update credentials, is_active status, etc. |


## `createPostgenIntegrations()`

```php
createPostgenIntegrations($company_id, $postgen_integrations_input, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\CreatePostgenIntegrations200Response
```

POST /companies/{company_id}/postgen_integrations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostgenIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$postgen_integrations_input = new \OpenAPI\Client\Model\PostgenIntegrationsInput(); // \OpenAPI\Client\Model\PostgenIntegrationsInput
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->createPostgenIntegrations($company_id, $postgen_integrations_input, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgenIntegrationsApi->createPostgenIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **postgen_integrations_input** | [**\OpenAPI\Client\Model\PostgenIntegrationsInput**](../Model/PostgenIntegrationsInput.md)|  | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreatePostgenIntegrations200Response**](../Model/CreatePostgenIntegrations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPostgenIntegrationsTest()`

```php
createPostgenIntegrationsTest($company_id, $postgen_integrations_input): \OpenAPI\Client\Model\CreatePostgenIntegrations200Response
```

POST /companies/{company_id}/postgen_integrations/test

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostgenIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$postgen_integrations_input = new \OpenAPI\Client\Model\PostgenIntegrationsInput(); // \OpenAPI\Client\Model\PostgenIntegrationsInput

try {
    $result = $apiInstance->createPostgenIntegrationsTest($company_id, $postgen_integrations_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgenIntegrationsApi->createPostgenIntegrationsTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **postgen_integrations_input** | [**\OpenAPI\Client\Model\PostgenIntegrationsInput**](../Model/PostgenIntegrationsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatePostgenIntegrations200Response**](../Model/CreatePostgenIntegrations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePostgenIntegrations()`

```php
deletePostgenIntegrations($company_id, $integration_id): \OpenAPI\Client\Model\DeletePostgenIntegrations200Response
```

Delete single integration by ID.     Also deletes credentials from GCP Secret Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostgenIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$integration_id = 'integration_id_example'; // string | Unique identifier for the Integration

try {
    $result = $apiInstance->deletePostgenIntegrations($company_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgenIntegrationsApi->deletePostgenIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **integration_id** | **string**| Unique identifier for the Integration | |

### Return type

[**\OpenAPI\Client\Model\DeletePostgenIntegrations200Response**](../Model/DeletePostgenIntegrations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostgenIntegrationsById()`

```php
getPostgenIntegrationsById($company_id, $integration_id): \OpenAPI\Client\Model\GetPostgenIntegrationsById200Response
```

Get single integration by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostgenIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$integration_id = 'integration_id_example'; // string | Unique identifier for the Integration

try {
    $result = $apiInstance->getPostgenIntegrationsById($company_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgenIntegrationsApi->getPostgenIntegrationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **integration_id** | **string**| Unique identifier for the Integration | |

### Return type

[**\OpenAPI\Client\Model\GetPostgenIntegrationsById200Response**](../Model/GetPostgenIntegrationsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPostgenIntegrations()`

```php
listPostgenIntegrations($company_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListPostgenIntegrations200Response
```

Get a list of all postgen integrations for the company.     All company users can view integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostgenIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->listPostgenIntegrations($company_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgenIntegrationsApi->listPostgenIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPostgenIntegrations200Response**](../Model/ListPostgenIntegrations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePostgenIntegrations()`

```php
updatePostgenIntegrations($company_id, $integration_id, $postgen_integrations_update): \OpenAPI\Client\Model\UpdatePostgenIntegrations200Response
```

Update an existing integration by ID.      Can update credentials, is_active status, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostgenIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$integration_id = 'integration_id_example'; // string | Unique identifier for the Integration
$postgen_integrations_update = new \OpenAPI\Client\Model\PostgenIntegrationsUpdate(); // \OpenAPI\Client\Model\PostgenIntegrationsUpdate

try {
    $result = $apiInstance->updatePostgenIntegrations($company_id, $integration_id, $postgen_integrations_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgenIntegrationsApi->updatePostgenIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **integration_id** | **string**| Unique identifier for the Integration | |
| **postgen_integrations_update** | [**\OpenAPI\Client\Model\PostgenIntegrationsUpdate**](../Model/PostgenIntegrationsUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdatePostgenIntegrations200Response**](../Model/UpdatePostgenIntegrations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
