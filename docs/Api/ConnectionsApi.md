# SparteraApiSdk\ConnectionsApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDelete()**](ConnectionsApi.md#companiesCompanyIdConnectionsConnectionIdDelete) | **DELETE** /companies/{company_id}/connections/{connection_id} | Delete single connection by ID |
| [**companiesCompanyIdConnectionsConnectionIdGet()**](ConnectionsApi.md#companiesCompanyIdConnectionsConnectionIdGet) | **GET** /companies/{company_id}/connections/{connection_id} | Get single connection by ID |
| [**companiesCompanyIdConnectionsConnectionIdInfoschemaGet()**](ConnectionsApi.md#companiesCompanyIdConnectionsConnectionIdInfoschemaGet) | **GET** /companies/{company_id}/connections/{connection_id}/infoschema | Retrieve the information schema for the specified connection |
| [**companiesCompanyIdConnectionsConnectionIdPatch()**](ConnectionsApi.md#companiesCompanyIdConnectionsConnectionIdPatch) | **PATCH** /companies/{company_id}/connections/{connection_id} | Update an existing connection by ID |
| [**companiesCompanyIdConnectionsConnectionIdTestGet()**](ConnectionsApi.md#companiesCompanyIdConnectionsConnectionIdTestGet) | **GET** /companies/{company_id}/connections/{connection_id}/test | Test the specified connection |
| [**companiesCompanyIdConnectionsGet()**](ConnectionsApi.md#companiesCompanyIdConnectionsGet) | **GET** /companies/{company_id}/connections | Get all connections for a specific company |
| [**companiesCompanyIdConnectionsPost()**](ConnectionsApi.md#companiesCompanyIdConnectionsPost) | **POST** /companies/{company_id}/connections | Create a new connection by ID |


## `companiesCompanyIdConnectionsConnectionIdDelete()`

```php
companiesCompanyIdConnectionsConnectionIdDelete($company_id, $connection_id): object
```

Delete single connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDelete($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsConnectionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdGet($company_id, $connection_id): object
```

Get single connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsConnectionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdInfoschemaGet()`

```php
companiesCompanyIdConnectionsConnectionIdInfoschemaGet($company_id, $connection_id): object
```

Retrieve the information schema for the specified connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdInfoschemaGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsConnectionIdInfoschemaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPatch()`

```php
companiesCompanyIdConnectionsConnectionIdPatch($company_id, $connection_id, $connection): object
```

Update an existing connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$connection = new \SparteraApiSdk\Model\Connection(); // \SparteraApiSdk\Model\Connection

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPatch($company_id, $connection_id, $connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsConnectionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **connection** | [**\SparteraApiSdk\Model\Connection**](../Model/Connection.md)|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdTestGet()`

```php
companiesCompanyIdConnectionsConnectionIdTestGet($company_id, $connection_id): object
```

Test the specified connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdTestGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsConnectionIdTestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsGet()`

```php
companiesCompanyIdConnectionsGet($company_id): object
```

Get all connections for a specific company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsPost()`

```php
companiesCompanyIdConnectionsPost($company_id, $connection): object
```

Create a new connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection = new \SparteraApiSdk\Model\Connection(); // \SparteraApiSdk\Model\Connection

try {
    $result = $apiInstance->companiesCompanyIdConnectionsPost($company_id, $connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->companiesCompanyIdConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection** | [**\SparteraApiSdk\Model\Connection**](../Model/Connection.md)|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
