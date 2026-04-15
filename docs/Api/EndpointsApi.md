# OpenAPI\Client\EndpointsApi

Endpoints operations

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEndpoints()**](EndpointsApi.md#createEndpoints) | **POST** /companies/{company_id}/endpoints | Create a new endpoint |
| [**createEndpointsKeys()**](EndpointsApi.md#createEndpointsKeys) | **POST** /companies/{company_id}/endpoints/{endpoint_id}/keys | POST /companies/{company_id}/endpoints/{endpoint_id}/keys |
| [**deleteEndpoints()**](EndpointsApi.md#deleteEndpoints) | **DELETE** /companies/{company_id}/endpoints/{endpoint_id} | Delete single endpoint by ID |
| [**deleteEndpointsKeys()**](EndpointsApi.md#deleteEndpointsKeys) | **DELETE** /companies/{company_id}/endpoints/{endpoint_id}/keys/{api_key_id} | DELETE /companies/{company_id}/endpoints/{endpoint_id}/keys/{api_key_id} |
| [**getEndpointsById()**](EndpointsApi.md#getEndpointsById) | **GET** /companies/{company_id}/endpoints/{endpoint_id} | Get single endpoint by ID |
| [**getEndpointsByIdAvailableEndpoints()**](EndpointsApi.md#getEndpointsByIdAvailableEndpoints) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/available-endpoints | GET /companies/{company_id}/endpoints/{endpoint_id}/available-endpoints |
| [**getEndpointsByIdConnectionsDescribe()**](EndpointsApi.md#getEndpointsByIdConnectionsDescribe) | **GET** /companies/{company_id}/endpoints/../connections/{connection_id}/describe | Get schema information for a connection      Query parameters:         include_fields: Whether to include field information (default: true)         schemas: Optional comma-separated schemas to include         tables: Optional comma-separated tables to include |
| [**getEndpointsByIdExecute()**](EndpointsApi.md#getEndpointsByIdExecute) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/execute | Execute an endpoint with pagination support.      Customer-facing route that returns paginated data.     Query params: ?start&#x3D;0&amp;limit&#x3D;100 |
| [**getEndpointsByIdKeys()**](EndpointsApi.md#getEndpointsByIdKeys) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/keys | GET /companies/{company_id}/endpoints/{endpoint_id}/keys |
| [**getEndpointsByIdStats()**](EndpointsApi.md#getEndpointsByIdStats) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/stats | Get usage statistics for an endpoint      Query parameters:         days: Number of days to analyze (default: 30) |
| [**getEndpointsByIdTest()**](EndpointsApi.md#getEndpointsByIdTest) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/test | Test an endpoint with sample data      Request body (optional):         limit: Number of sample rows to return (default: 10) |
| [**getEndpointsByIdUrl()**](EndpointsApi.md#getEndpointsByIdUrl) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/url | GET /companies/{company_id}/endpoints/{endpoint_id}/url |
| [**listEndpoints()**](EndpointsApi.md#listEndpoints) | **GET** /companies/{company_id}/endpoints | Get all endpoints for a specific company with pagination, filtering, and sorting |
| [**updateEndpoints()**](EndpointsApi.md#updateEndpoints) | **PATCH** /companies/{company_id}/endpoints/{endpoint_id} | Update an existing endpoint by ID |


## `createEndpoints()`

```php
createEndpoints($company_id, $endpoints_input, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\CreateEndpoints200Response
```

Create a new endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoints_input = new \OpenAPI\Client\Model\EndpointsInput(); // \OpenAPI\Client\Model\EndpointsInput
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->createEndpoints($company_id, $endpoints_input, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->createEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoints_input** | [**\OpenAPI\Client\Model\EndpointsInput**](../Model/EndpointsInput.md)|  | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateEndpoints200Response**](../Model/CreateEndpoints200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEndpointsKeys()`

```php
createEndpointsKeys($company_id, $endpoint_id, $endpoints_input): \OpenAPI\Client\Model\CreateEndpoints200Response
```

POST /companies/{company_id}/endpoints/{endpoint_id}/keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint
$endpoints_input = new \OpenAPI\Client\Model\EndpointsInput(); // \OpenAPI\Client\Model\EndpointsInput

try {
    $result = $apiInstance->createEndpointsKeys($company_id, $endpoint_id, $endpoints_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->createEndpointsKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |
| **endpoints_input** | [**\OpenAPI\Client\Model\EndpointsInput**](../Model/EndpointsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateEndpoints200Response**](../Model/CreateEndpoints200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEndpoints()`

```php
deleteEndpoints($company_id, $endpoint_id): \OpenAPI\Client\Model\DeleteEndpoints200Response
```

Delete single endpoint by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->deleteEndpoints($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->deleteEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\DeleteEndpoints200Response**](../Model/DeleteEndpoints200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEndpointsKeys()`

```php
deleteEndpointsKeys($company_id, $endpoint_id, $api_key_id): \OpenAPI\Client\Model\DeleteEndpoints200Response
```

DELETE /companies/{company_id}/endpoints/{endpoint_id}/keys/{api_key_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint
$api_key_id = 'api_key_id_example'; // string | Unique identifier for the Api Key

try {
    $result = $apiInstance->deleteEndpointsKeys($company_id, $endpoint_id, $api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->deleteEndpointsKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |
| **api_key_id** | **string**| Unique identifier for the Api Key | |

### Return type

[**\OpenAPI\Client\Model\DeleteEndpoints200Response**](../Model/DeleteEndpoints200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsById()`

```php
getEndpointsById($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

Get single endpoint by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsById($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdAvailableEndpoints()`

```php
getEndpointsByIdAvailableEndpoints($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

GET /companies/{company_id}/endpoints/{endpoint_id}/available-endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsByIdAvailableEndpoints($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdAvailableEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdConnectionsDescribe()`

```php
getEndpointsByIdConnectionsDescribe($company_id, $connection_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

Get schema information for a connection      Query parameters:         include_fields: Whether to include field information (default: true)         schemas: Optional comma-separated schemas to include         tables: Optional comma-separated tables to include

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$connection_id = 'connection_id_example'; // string | Unique identifier for the Connection

try {
    $result = $apiInstance->getEndpointsByIdConnectionsDescribe($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdConnectionsDescribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **connection_id** | **string**| Unique identifier for the Connection | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdExecute()`

```php
getEndpointsByIdExecute($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

Execute an endpoint with pagination support.      Customer-facing route that returns paginated data.     Query params: ?start=0&limit=100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsByIdExecute($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdExecute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdKeys()`

```php
getEndpointsByIdKeys($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

GET /companies/{company_id}/endpoints/{endpoint_id}/keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsByIdKeys($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdStats()`

```php
getEndpointsByIdStats($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

Get usage statistics for an endpoint      Query parameters:         days: Number of days to analyze (default: 30)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsByIdStats($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdTest()`

```php
getEndpointsByIdTest($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

Test an endpoint with sample data      Request body (optional):         limit: Number of sample rows to return (default: 10)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsByIdTest($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpointsByIdUrl()`

```php
getEndpointsByIdUrl($company_id, $endpoint_id): \OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response
```

GET /companies/{company_id}/endpoints/{endpoint_id}/url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint

try {
    $result = $apiInstance->getEndpointsByIdUrl($company_id, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->getEndpointsByIdUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |

### Return type

[**\OpenAPI\Client\Model\GetEndpointsByIdConnectionsDescribe200Response**](../Model/GetEndpointsByIdConnectionsDescribe200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEndpoints()`

```php
listEndpoints($company_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListEndpoints200Response
```

Get all endpoints for a specific company with pagination, filtering, and sorting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
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
    $result = $apiInstance->listEndpoints($company_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->listEndpoints: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListEndpoints200Response**](../Model/ListEndpoints200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEndpoints()`

```php
updateEndpoints($company_id, $endpoint_id, $endpoints_update): \OpenAPI\Client\Model\UpdateEndpoints200Response
```

Update an existing endpoint by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$endpoint_id = 'endpoint_id_example'; // string | Unique identifier for the Endpoint
$endpoints_update = new \OpenAPI\Client\Model\EndpointsUpdate(); // \OpenAPI\Client\Model\EndpointsUpdate

try {
    $result = $apiInstance->updateEndpoints($company_id, $endpoint_id, $endpoints_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->updateEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **endpoint_id** | **string**| Unique identifier for the Endpoint | |
| **endpoints_update** | [**\OpenAPI\Client\Model\EndpointsUpdate**](../Model/EndpointsUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateEndpoints200Response**](../Model/UpdateEndpoints200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
