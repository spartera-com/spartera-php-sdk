# OpenAPI\Client\ConnectionsApi

Connections operations

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConnections()**](ConnectionsApi.md#createConnections) | **POST** /companies/{company_id}/connections | Create a new connection by ID |
| [**deleteConnections()**](ConnectionsApi.md#deleteConnections) | **DELETE** /companies/{company_id}/connections/{connection_id} | Delete single connection by ID |
| [**getConnectionsById()**](ConnectionsApi.md#getConnectionsById) | **GET** /companies/{company_id}/connections/{connection_id} | Get single connection by ID |
| [**getConnectionsById2()**](ConnectionsApi.md#getConnectionsById2) | **GET** /companies/{company_id}/connections/{connection_id}/test | Test the specified connection |
| [**getConnectionsByIdInfoschema()**](ConnectionsApi.md#getConnectionsByIdInfoschema) | **GET** /companies/{company_id}/connections/{connection_id}/infoschema | Retrieve the information schema for the specified connection |
| [**listConnections()**](ConnectionsApi.md#listConnections) | **GET** /companies/{company_id}/connections | Get all connections for a specific company |
| [**updateConnections()**](ConnectionsApi.md#updateConnections) | **PATCH** /companies/{company_id}/connections/{connection_id} | Update an existing connection by ID |


## `createConnections()`

```php
createConnections($company_id, $connections_input, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\CreateConnections200Response
```

Create a new connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connections_input = new \OpenAPI\Client\Model\ConnectionsInput(); // \OpenAPI\Client\Model\ConnectionsInput
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->createConnections($company_id, $connections_input, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->createConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connections_input** | [**\OpenAPI\Client\Model\ConnectionsInput**](../Model/ConnectionsInput.md)|  | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateConnections200Response**](../Model/CreateConnections200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConnections()`

```php
deleteConnections($company_id, $connection_id): \OpenAPI\Client\Model\DeleteConnections200Response
```

Delete single connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connection_id = 'connection_id_example'; // string | Unique identifier for the Connection

try {
    $result = $apiInstance->deleteConnections($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->deleteConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connection_id** | **string**| Unique identifier for the Connection | |

### Return type

[**\OpenAPI\Client\Model\DeleteConnections200Response**](../Model/DeleteConnections200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionsById()`

```php
getConnectionsById($company_id, $connection_id): \OpenAPI\Client\Model\GetConnectionsById200Response
```

Get single connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connection_id = 'connection_id_example'; // string | Unique identifier for the Connection

try {
    $result = $apiInstance->getConnectionsById($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnectionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connection_id** | **string**| Unique identifier for the Connection | |

### Return type

[**\OpenAPI\Client\Model\GetConnectionsById200Response**](../Model/GetConnectionsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionsById2()`

```php
getConnectionsById2($company_id, $connection_id): \OpenAPI\Client\Model\GetConnectionsById200Response
```

Test the specified connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connection_id = 'connection_id_example'; // string | Unique identifier for the Connection

try {
    $result = $apiInstance->getConnectionsById2($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnectionsById2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connection_id** | **string**| Unique identifier for the Connection | |

### Return type

[**\OpenAPI\Client\Model\GetConnectionsById200Response**](../Model/GetConnectionsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionsByIdInfoschema()`

```php
getConnectionsByIdInfoschema($company_id, $connection_id): \OpenAPI\Client\Model\GetConnectionsById200Response
```

Retrieve the information schema for the specified connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connection_id = 'connection_id_example'; // string | Unique identifier for the Connection

try {
    $result = $apiInstance->getConnectionsByIdInfoschema($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnectionsByIdInfoschema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connection_id** | **string**| Unique identifier for the Connection | |

### Return type

[**\OpenAPI\Client\Model\GetConnectionsById200Response**](../Model/GetConnectionsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnections()`

```php
listConnections($company_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListConnections200Response
```

Get all connections for a specific company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
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
    $result = $apiInstance->listConnections($company_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->listConnections: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListConnections200Response**](../Model/ListConnections200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConnections()`

```php
updateConnections($company_id, $connection_id, $connections_update): \OpenAPI\Client\Model\UpdateConnections200Response
```

Update an existing connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connection_id = 'connection_id_example'; // string | Unique identifier for the Connection
$connections_update = new \OpenAPI\Client\Model\ConnectionsUpdate(); // \OpenAPI\Client\Model\ConnectionsUpdate

try {
    $result = $apiInstance->updateConnections($company_id, $connection_id, $connections_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->updateConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connection_id** | **string**| Unique identifier for the Connection | |
| **connections_update** | [**\OpenAPI\Client\Model\ConnectionsUpdate**](../Model/ConnectionsUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateConnections200Response**](../Model/UpdateConnections200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
