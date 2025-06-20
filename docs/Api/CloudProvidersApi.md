# SparteraApiSdk\CloudProvidersApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudProvidersGet()**](CloudProvidersApi.md#cloudProvidersGet) | **GET** /cloud-providers | Get a list of all cloud providers |
| [**cloudProvidersProviderIdGet()**](CloudProvidersApi.md#cloudProvidersProviderIdGet) | **GET** /cloud-providers/{provider_id} | Get single cloud provider by ID |


## `cloudProvidersGet()`

```php
cloudProvidersGet(): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get a list of all cloud providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudProvidersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response**](../Model/CompaniesCompanyIdApiKeysGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudProvidersProviderIdGet()`

```php
cloudProvidersProviderIdGet($provider_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get single cloud provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string

try {
    $result = $apiInstance->cloudProvidersProviderIdGet($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response**](../Model/CompaniesCompanyIdApiKeysGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
