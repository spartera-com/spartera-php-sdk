# OpenAPI\Client\AlertsApi

Alerts operations

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAlerts()**](AlertsApi.md#createAlerts) | **POST** /companies/{company_id}/users/{user_id}/alerts | POST /companies/{company_id}/users/{user_id}/alerts |
| [**deleteAlerts()**](AlertsApi.md#deleteAlerts) | **DELETE** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Delete single alert by ID |
| [**getAlertsById()**](AlertsApi.md#getAlertsById) | **GET** /companies/{company_id}/users/{user_id}/alerts | Get a list of all alerts for a specific user |
| [**getAlertsByIdAssetAll()**](AlertsApi.md#getAlertsByIdAssetAll) | **GET** /companies/{company_id}/users/{user_id}/alerts/asset/{asset_id}/all | Get all alerts for a specific asset |
| [**getAlertsByIdUsers()**](AlertsApi.md#getAlertsByIdUsers) | **GET** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Get single alert by ID |
| [**getAlertsByIdUsersAsset()**](AlertsApi.md#getAlertsByIdUsersAsset) | **GET** /companies/{company_id}/users/{user_id}/alerts/asset/{asset_id} | Get all alerts for a specific asset (by user) |
| [**updateAlerts()**](AlertsApi.md#updateAlerts) | **PATCH** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Update an existing alert by ID |


## `createAlerts()`

```php
createAlerts($company_id, $user_id, $alerts_input): \OpenAPI\Client\Model\CreateAlerts200Response
```

POST /companies/{company_id}/users/{user_id}/alerts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$alerts_input = new \OpenAPI\Client\Model\AlertsInput(); // \OpenAPI\Client\Model\AlertsInput

try {
    $result = $apiInstance->createAlerts($company_id, $user_id, $alerts_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **alerts_input** | [**\OpenAPI\Client\Model\AlertsInput**](../Model/AlertsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateAlerts200Response**](../Model/CreateAlerts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAlerts()`

```php
deleteAlerts($company_id, $user_id, $alert_id): \OpenAPI\Client\Model\DeleteAlerts200Response
```

Delete single alert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$alert_id = 'alert_id_example'; // string | Unique identifier for the Alert

try {
    $result = $apiInstance->deleteAlerts($company_id, $user_id, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **alert_id** | **string**| Unique identifier for the Alert | |

### Return type

[**\OpenAPI\Client\Model\DeleteAlerts200Response**](../Model/DeleteAlerts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlertsById()`

```php
getAlertsById($company_id, $user_id): \OpenAPI\Client\Model\GetAlertsById200Response
```

Get a list of all alerts for a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User

try {
    $result = $apiInstance->getAlertsById($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |

### Return type

[**\OpenAPI\Client\Model\GetAlertsById200Response**](../Model/GetAlertsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlertsByIdAssetAll()`

```php
getAlertsByIdAssetAll($company_id, $user_id, $asset_id): \OpenAPI\Client\Model\GetAlertsById200Response
```

Get all alerts for a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset

try {
    $result = $apiInstance->getAlertsByIdAssetAll($company_id, $user_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertsByIdAssetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **asset_id** | **string**| Unique identifier for the Asset | |

### Return type

[**\OpenAPI\Client\Model\GetAlertsById200Response**](../Model/GetAlertsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlertsByIdUsers()`

```php
getAlertsByIdUsers($company_id, $user_id, $alert_id): \OpenAPI\Client\Model\GetAlertsById200Response
```

Get single alert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$alert_id = 'alert_id_example'; // string | Unique identifier for the Alert

try {
    $result = $apiInstance->getAlertsByIdUsers($company_id, $user_id, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertsByIdUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **alert_id** | **string**| Unique identifier for the Alert | |

### Return type

[**\OpenAPI\Client\Model\GetAlertsById200Response**](../Model/GetAlertsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlertsByIdUsersAsset()`

```php
getAlertsByIdUsersAsset($company_id, $user_id, $asset_id): \OpenAPI\Client\Model\GetAlertsById200Response
```

Get all alerts for a specific asset (by user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset

try {
    $result = $apiInstance->getAlertsByIdUsersAsset($company_id, $user_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertsByIdUsersAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **asset_id** | **string**| Unique identifier for the Asset | |

### Return type

[**\OpenAPI\Client\Model\GetAlertsById200Response**](../Model/GetAlertsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAlerts()`

```php
updateAlerts($company_id, $user_id, $alert_id, $alerts_update): \OpenAPI\Client\Model\UpdateAlerts200Response
```

Update an existing alert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$alert_id = 'alert_id_example'; // string | Unique identifier for the Alert
$alerts_update = new \OpenAPI\Client\Model\AlertsUpdate(); // \OpenAPI\Client\Model\AlertsUpdate

try {
    $result = $apiInstance->updateAlerts($company_id, $user_id, $alert_id, $alerts_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->updateAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **alert_id** | **string**| Unique identifier for the Alert | |
| **alerts_update** | [**\OpenAPI\Client\Model\AlertsUpdate**](../Model/AlertsUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateAlerts200Response**](../Model/UpdateAlerts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
