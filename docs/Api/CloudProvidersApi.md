# OpenAPI\Client\CloudProvidersApi



All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCloudProvidersById()**](CloudProvidersApi.md#getCloudProvidersById) | **GET** /cloud-providers/{provider_id} | Get single cloud provider by ID |
| [**listCloudProviders()**](CloudProvidersApi.md#listCloudProviders) | **GET** /cloud-providers | Get a list of all cloud providers |


## `getCloudProvidersById()`

```php
getCloudProvidersById($provider_id): \OpenAPI\Client\Model\GetCloudProvidersById200Response
```

Get single cloud provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string | Unique identifier for the Provider

try {
    $result = $apiInstance->getCloudProvidersById($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->getCloudProvidersById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**| Unique identifier for the Provider | |

### Return type

[**\OpenAPI\Client\Model\GetCloudProvidersById200Response**](../Model/GetCloudProvidersById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCloudProviders()`

```php
listCloudProviders($page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListCloudProviders200Response
```

Get a list of all cloud providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->listCloudProviders($page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->listCloudProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListCloudProviders200Response**](../Model/ListCloudProviders200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
