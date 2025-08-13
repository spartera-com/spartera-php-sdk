# SparteraApiSdk\APIKeysApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdApiKeysApiKeyIdDelete()**](APIKeysApi.md#companiesCompanyIdApiKeysApiKeyIdDelete) | **DELETE** /companies/{company_id}/api-keys/{api_key_id} | Delete (deactivate) single API key by api_key_id.     Uses the api_key_id returned during creation for clean identification.     Fixed to use correct primary key lookup. |
| [**companiesCompanyIdApiKeysApiKeyIdGet()**](APIKeysApi.md#companiesCompanyIdApiKeysApiKeyIdGet) | **GET** /companies/{company_id}/api-keys/{api_key_id} | Get single API key by ID.     Returns masked API key for security (sk_****1234). |
| [**companiesCompanyIdApiKeysApiKeyIdPatch()**](APIKeysApi.md#companiesCompanyIdApiKeysApiKeyIdPatch) | **PATCH** /companies/{company_id}/api-keys/{api_key_id} | Update an existing API key by ID.     Can update metadata like name, expiration, rate limits, etc.     Cannot update the actual key value (for security). |
| [**companiesCompanyIdApiKeysApiKeyIdRevokePost()**](APIKeysApi.md#companiesCompanyIdApiKeysApiKeyIdRevokePost) | **POST** /companies/{company_id}/api-keys/{api_key_id}/revoke | Explicitly revoke an API key with reason tracking.     This is different from delete as it includes revocation metadata. |
| [**companiesCompanyIdApiKeysApiKeyIdStatsGet()**](APIKeysApi.md#companiesCompanyIdApiKeysApiKeyIdStatsGet) | **GET** /companies/{company_id}/api-keys/{api_key_id}/stats | Get usage statistics for a specific API key.     Returns usage count, last used date, failed attempts, etc. |
| [**companiesCompanyIdApiKeysGet()**](APIKeysApi.md#companiesCompanyIdApiKeysGet) | **GET** /companies/{company_id}/api-keys | Get all API keys for a company.     Returns masked API keys for security (sk_****1234). |
| [**companiesCompanyIdApiKeysPost()**](APIKeysApi.md#companiesCompanyIdApiKeysPost) | **POST** /companies/{company_id}/api-keys | Create single API key.     Returns the actual sk_ key (only time it&#39;s exposed) and api_key_id for future operations. |


## `companiesCompanyIdApiKeysApiKeyIdDelete()`

```php
companiesCompanyIdApiKeysApiKeyIdDelete($company_id, $api_key_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysApiKeyIdDelete200Response
```

Delete (deactivate) single API key by api_key_id.     Uses the api_key_id returned during creation for clean identification.     Fixed to use correct primary key lookup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$api_key_id = 'api_key_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdApiKeysApiKeyIdDelete($company_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysApiKeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **api_key_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysApiKeyIdDelete200Response**](../Model/CompaniesCompanyIdApiKeysApiKeyIdDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdApiKeysApiKeyIdGet()`

```php
companiesCompanyIdApiKeysApiKeyIdGet($company_id, $api_key_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysApiKeyIdGet200Response
```

Get single API key by ID.     Returns masked API key for security (sk_****1234).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$api_key_id = 'api_key_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdApiKeysApiKeyIdGet($company_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysApiKeyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **api_key_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysApiKeyIdGet200Response**](../Model/CompaniesCompanyIdApiKeysApiKeyIdGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdApiKeysApiKeyIdPatch()`

```php
companiesCompanyIdApiKeysApiKeyIdPatch($company_id, $api_key_id, $api_keys_update): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysApiKeyIdPatch200Response
```

Update an existing API key by ID.     Can update metadata like name, expiration, rate limits, etc.     Cannot update the actual key value (for security).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$api_key_id = 'api_key_id_example'; // string
$api_keys_update = new \SparteraApiSdk\Model\ApiKeysUpdate(); // \SparteraApiSdk\Model\ApiKeysUpdate

try {
    $result = $apiInstance->companiesCompanyIdApiKeysApiKeyIdPatch($company_id, $api_key_id, $api_keys_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysApiKeyIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **api_key_id** | **string**|  | |
| **api_keys_update** | [**\SparteraApiSdk\Model\ApiKeysUpdate**](../Model/ApiKeysUpdate.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysApiKeyIdPatch200Response**](../Model/CompaniesCompanyIdApiKeysApiKeyIdPatch200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdApiKeysApiKeyIdRevokePost()`

```php
companiesCompanyIdApiKeysApiKeyIdRevokePost($company_id, $api_key_id, $api_keys_input): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysPost200Response
```

Explicitly revoke an API key with reason tracking.     This is different from delete as it includes revocation metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$api_key_id = 'api_key_id_example'; // string
$api_keys_input = new \SparteraApiSdk\Model\ApiKeysInput(); // \SparteraApiSdk\Model\ApiKeysInput

try {
    $result = $apiInstance->companiesCompanyIdApiKeysApiKeyIdRevokePost($company_id, $api_key_id, $api_keys_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysApiKeyIdRevokePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **api_key_id** | **string**|  | |
| **api_keys_input** | [**\SparteraApiSdk\Model\ApiKeysInput**](../Model/ApiKeysInput.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysPost200Response**](../Model/CompaniesCompanyIdApiKeysPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdApiKeysApiKeyIdStatsGet()`

```php
companiesCompanyIdApiKeysApiKeyIdStatsGet($company_id, $api_key_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get usage statistics for a specific API key.     Returns usage count, last used date, failed attempts, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$api_key_id = 'api_key_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdApiKeysApiKeyIdStatsGet($company_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysApiKeyIdStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **api_key_id** | **string**|  | |

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

## `companiesCompanyIdApiKeysGet()`

```php
companiesCompanyIdApiKeysGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get all API keys for a company.     Returns masked API keys for security (sk_****1234).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdApiKeysGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

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

## `companiesCompanyIdApiKeysPost()`

```php
companiesCompanyIdApiKeysPost($company_id, $api_keys_input): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysPost200Response
```

Create single API key.     Returns the actual sk_ key (only time it's exposed) and api_key_id for future operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$api_keys_input = new \SparteraApiSdk\Model\ApiKeysInput(); // \SparteraApiSdk\Model\ApiKeysInput

try {
    $result = $apiInstance->companiesCompanyIdApiKeysPost($company_id, $api_keys_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->companiesCompanyIdApiKeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **api_keys_input** | [**\SparteraApiSdk\Model\ApiKeysInput**](../Model/ApiKeysInput.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdApiKeysPost200Response**](../Model/CompaniesCompanyIdApiKeysPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
