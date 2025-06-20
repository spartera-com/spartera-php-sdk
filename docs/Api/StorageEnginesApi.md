# SparteraApiSdk\StorageEnginesApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudProvidersProviderIdStorageEnginesEngineIdGet()**](StorageEnginesApi.md#cloudProvidersProviderIdStorageEnginesEngineIdGet) | **GET** /cloud-providers/{provider_id}/storage-engines/{engine_id} | Get single storage engine by ID |
| [**cloudProvidersProviderIdStorageEnginesGet()**](StorageEnginesApi.md#cloudProvidersProviderIdStorageEnginesGet) | **GET** /cloud-providers/{provider_id}/storage-engines | Get a list of all storage engines |


## `cloudProvidersProviderIdStorageEnginesEngineIdGet()`

```php
cloudProvidersProviderIdStorageEnginesEngineIdGet($provider_id, $engine_id): object
```

Get single storage engine by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\StorageEnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string
$engine_id = 'engine_id_example'; // string

try {
    $result = $apiInstance->cloudProvidersProviderIdStorageEnginesEngineIdGet($provider_id, $engine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEnginesApi->cloudProvidersProviderIdStorageEnginesEngineIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**|  | |
| **engine_id** | **string**|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudProvidersProviderIdStorageEnginesGet()`

```php
cloudProvidersProviderIdStorageEnginesGet($provider_id): object
```

Get a list of all storage engines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\StorageEnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string

try {
    $result = $apiInstance->cloudProvidersProviderIdStorageEnginesGet($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEnginesApi->cloudProvidersProviderIdStorageEnginesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
