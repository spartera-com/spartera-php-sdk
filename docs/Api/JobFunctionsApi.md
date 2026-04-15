# OpenAPI\Client\JobFunctionsApi



All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getJobFunctionsById()**](JobFunctionsApi.md#getJobFunctionsById) | **GET** /job-functions/{function_id} | Get single job function by ID |
| [**listJobFunctions()**](JobFunctionsApi.md#listJobFunctions) | **GET** /job-functions | Get a list of all job functions |


## `getJobFunctionsById()`

```php
getJobFunctionsById($function_id): \OpenAPI\Client\Model\GetJobFunctionsById200Response
```

Get single job function by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function_id = 'function_id_example'; // string | Unique identifier for the Function

try {
    $result = $apiInstance->getJobFunctionsById($function_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobFunctionsApi->getJobFunctionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **function_id** | **string**| Unique identifier for the Function | |

### Return type

[**\OpenAPI\Client\Model\GetJobFunctionsById200Response**](../Model/GetJobFunctionsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listJobFunctions()`

```php
listJobFunctions($page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListJobFunctions200Response
```

Get a list of all job functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobFunctionsApi(
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
    $result = $apiInstance->listJobFunctions($page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobFunctionsApi->listJobFunctions: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListJobFunctions200Response**](../Model/ListJobFunctions200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
