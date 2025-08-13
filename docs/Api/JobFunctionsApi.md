# SparteraApiSdk\JobFunctionsApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**jobFunctionsFunctionIdGet()**](JobFunctionsApi.md#jobFunctionsFunctionIdGet) | **GET** /job-functions/{function_id} | Get single job function by ID |
| [**jobFunctionsGet()**](JobFunctionsApi.md#jobFunctionsGet) | **GET** /job-functions | Get a list of all job functions |


## `jobFunctionsFunctionIdGet()`

```php
jobFunctionsFunctionIdGet($function_id): \SparteraApiSdk\Model\JobFunctionsFunctionIdGet200Response
```

Get single job function by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\JobFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function_id = 'function_id_example'; // string

try {
    $result = $apiInstance->jobFunctionsFunctionIdGet($function_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobFunctionsApi->jobFunctionsFunctionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **function_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\JobFunctionsFunctionIdGet200Response**](../Model/JobFunctionsFunctionIdGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobFunctionsGet()`

```php
jobFunctionsGet(): \SparteraApiSdk\Model\JobFunctionsGet200Response
```

Get a list of all job functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\JobFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->jobFunctionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobFunctionsApi->jobFunctionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SparteraApiSdk\Model\JobFunctionsGet200Response**](../Model/JobFunctionsGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
