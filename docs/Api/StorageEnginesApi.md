# OpenAPI\Client\StorageEnginesApi



All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStorageEnginesById()**](StorageEnginesApi.md#getStorageEnginesById) | **GET** /cloud-providers/{provider_id}/storage-engines/{engine_id} | Get single storage engine by ID |
| [**listStorageEngines()**](StorageEnginesApi.md#listStorageEngines) | **GET** /cloud-providers/{provider_id}/storage-engines | Get a list of all storage engines |


## `getStorageEnginesById()`

```php
getStorageEnginesById($provider_id, $engine_id): \OpenAPI\Client\Model\GetStorageEnginesById200Response
```

Get single storage engine by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageEnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string | Unique identifier for the Provider
$engine_id = 'engine_id_example'; // string | Unique identifier for the Engine

try {
    $result = $apiInstance->getStorageEnginesById($provider_id, $engine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEnginesApi->getStorageEnginesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**| Unique identifier for the Provider | |
| **engine_id** | **string**| Unique identifier for the Engine | |

### Return type

[**\OpenAPI\Client\Model\GetStorageEnginesById200Response**](../Model/GetStorageEnginesById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStorageEngines()`

```php
listStorageEngines($provider_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListStorageEngines200Response
```

Get a list of all storage engines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageEnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string | Unique identifier for the Provider
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->listStorageEngines($provider_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEnginesApi->listStorageEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**| Unique identifier for the Provider | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListStorageEngines200Response**](../Model/ListStorageEngines200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
