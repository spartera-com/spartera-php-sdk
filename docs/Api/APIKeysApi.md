# OpenAPI\Client\APIKeysApi



All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiKeys()**](APIKeysApi.md#createApiKeys) | **POST** /companies/{company_id}/api-keys | Create single API key.     Returns the actual sk_ key (only time it&#39;s exposed) and api_key_id for future operations. |
| [**createApiKeysApiKeysRevoke()**](APIKeysApi.md#createApiKeysApiKeysRevoke) | **POST** /companies/{company_id}/api-keys/{api_key_id}/revoke | Explicitly revoke an API key with reason tracking.     This is different from delete as it includes revocation metadata. |
| [**deleteApiKeys()**](APIKeysApi.md#deleteApiKeys) | **DELETE** /companies/{company_id}/api-keys/{api_key_id} | Delete (deactivate) single API key by api_key_id.     Uses the api_key_id returned during creation for clean identification.     Fixed to use correct primary key lookup. |
| [**getApiKeysById()**](APIKeysApi.md#getApiKeysById) | **GET** /companies/{company_id}/api-keys/{api_key_id} | Get single API key by ID.     Returns masked API key for security (sk_****1234). |
| [**getApiKeysByIdApiKeysStats()**](APIKeysApi.md#getApiKeysByIdApiKeysStats) | **GET** /companies/{company_id}/api-keys/{api_key_id}/stats | Get usage statistics for a specific API key.     Returns usage count, last used date, failed attempts, etc. |
| [**listApiKeys()**](APIKeysApi.md#listApiKeys) | **GET** /companies/{company_id}/api-keys | Get all API keys for a company.     Returns masked API keys for security (sk_****1234). |
| [**updateApiKeys()**](APIKeysApi.md#updateApiKeys) | **PATCH** /companies/{company_id}/api-keys/{api_key_id} | Update an existing API key by ID.     Can update metadata like name, expiration, rate limits, etc.     Cannot update the actual key value (for security). |


## `createApiKeys()`

```php
createApiKeys($company_id, $api_keys_input, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\CreateApiKeys200Response
```

Create single API key.     Returns the actual sk_ key (only time it's exposed) and api_key_id for future operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_keys_input = new \OpenAPI\Client\Model\ApiKeysInput(); // \OpenAPI\Client\Model\ApiKeysInput
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->createApiKeys($company_id, $api_keys_input, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **api_keys_input** | [**\OpenAPI\Client\Model\ApiKeysInput**](../Model/ApiKeysInput.md)|  | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateApiKeys200Response**](../Model/CreateApiKeys200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiKeysApiKeysRevoke()`

```php
createApiKeysApiKeysRevoke($company_id, $api_key_id, $api_keys_input): \OpenAPI\Client\Model\CreateApiKeys200Response
```

Explicitly revoke an API key with reason tracking.     This is different from delete as it includes revocation metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_key_id = 'api_key_id_example'; // string | Unique identifier for the Api Key
$api_keys_input = new \OpenAPI\Client\Model\ApiKeysInput(); // \OpenAPI\Client\Model\ApiKeysInput

try {
    $result = $apiInstance->createApiKeysApiKeysRevoke($company_id, $api_key_id, $api_keys_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKeysApiKeysRevoke: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **api_key_id** | **string**| Unique identifier for the Api Key | |
| **api_keys_input** | [**\OpenAPI\Client\Model\ApiKeysInput**](../Model/ApiKeysInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateApiKeys200Response**](../Model/CreateApiKeys200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKeys()`

```php
deleteApiKeys($company_id, $api_key_id): \OpenAPI\Client\Model\DeleteApiKeys200Response
```

Delete (deactivate) single API key by api_key_id.     Uses the api_key_id returned during creation for clean identification.     Fixed to use correct primary key lookup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_key_id = 'api_key_id_example'; // string | Unique identifier for the Api Key

try {
    $result = $apiInstance->deleteApiKeys($company_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->deleteApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **api_key_id** | **string**| Unique identifier for the Api Key | |

### Return type

[**\OpenAPI\Client\Model\DeleteApiKeys200Response**](../Model/DeleteApiKeys200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeysById()`

```php
getApiKeysById($company_id, $api_key_id): \OpenAPI\Client\Model\GetApiKeysById200Response
```

Get single API key by ID.     Returns masked API key for security (sk_****1234).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_key_id = 'api_key_id_example'; // string | Unique identifier for the Api Key

try {
    $result = $apiInstance->getApiKeysById($company_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->getApiKeysById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **api_key_id** | **string**| Unique identifier for the Api Key | |

### Return type

[**\OpenAPI\Client\Model\GetApiKeysById200Response**](../Model/GetApiKeysById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeysByIdApiKeysStats()`

```php
getApiKeysByIdApiKeysStats($company_id, $api_key_id): \OpenAPI\Client\Model\GetApiKeysById200Response
```

Get usage statistics for a specific API key.     Returns usage count, last used date, failed attempts, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_key_id = 'api_key_id_example'; // string | Unique identifier for the Api Key

try {
    $result = $apiInstance->getApiKeysByIdApiKeysStats($company_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->getApiKeysByIdApiKeysStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **api_key_id** | **string**| Unique identifier for the Api Key | |

### Return type

[**\OpenAPI\Client\Model\GetApiKeysById200Response**](../Model/GetApiKeysById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiKeys()`

```php
listApiKeys($company_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListApiKeys200Response
```

Get all API keys for a company.     Returns masked API keys for security (sk_****1234).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
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
    $result = $apiInstance->listApiKeys($company_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListApiKeys200Response**](../Model/ListApiKeys200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKeys()`

```php
updateApiKeys($company_id, $api_key_id, $api_keys_update): \OpenAPI\Client\Model\UpdateApiKeys200Response
```

Update an existing API key by ID.     Can update metadata like name, expiration, rate limits, etc.     Cannot update the actual key value (for security).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_key_id = 'api_key_id_example'; // string | Unique identifier for the Api Key
$api_keys_update = new \OpenAPI\Client\Model\ApiKeysUpdate(); // \OpenAPI\Client\Model\ApiKeysUpdate

try {
    $result = $apiInstance->updateApiKeys($company_id, $api_key_id, $api_keys_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->updateApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **api_key_id** | **string**| Unique identifier for the Api Key | |
| **api_keys_update** | [**\OpenAPI\Client\Model\ApiKeysUpdate**](../Model/ApiKeysUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateApiKeys200Response**](../Model/UpdateApiKeys200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
