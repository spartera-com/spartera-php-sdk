# SparteraApiSdk\AlertsApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdUsersUserIdAlertsAlertIdDelete()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsAlertIdDelete) | **DELETE** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Delete single alert by ID |
| [**companiesCompanyIdUsersUserIdAlertsAlertIdGet()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsAlertIdGet) | **GET** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Get single alert by ID |
| [**companiesCompanyIdUsersUserIdAlertsAlertIdPatch()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsAlertIdPatch) | **PATCH** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Update an existing alert by ID |
| [**companiesCompanyIdUsersUserIdAlertsAssetAssetIdAllGet()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsAssetAssetIdAllGet) | **GET** /companies/{company_id}/users/{user_id}/alerts/asset/{asset_id}/all | Get all alerts for a specific asset |
| [**companiesCompanyIdUsersUserIdAlertsAssetAssetIdGet()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsAssetAssetIdGet) | **GET** /companies/{company_id}/users/{user_id}/alerts/asset/{asset_id} | Get all alerts for a specific asset (by user) |
| [**companiesCompanyIdUsersUserIdAlertsGet()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsGet) | **GET** /companies/{company_id}/users/{user_id}/alerts | Get a list of all alerts for a specific user |
| [**companiesCompanyIdUsersUserIdAlertsPost()**](AlertsApi.md#companiesCompanyIdUsersUserIdAlertsPost) | **POST** /companies/{company_id}/users/{user_id}/alerts | POST /companies/{company_id}/users/{user_id}/alerts |


## `companiesCompanyIdUsersUserIdAlertsAlertIdDelete()`

```php
companiesCompanyIdUsersUserIdAlertsAlertIdDelete($company_id, $user_id, $alert_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdDelete200Response
```

Delete single alert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$alert_id = 'alert_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsAlertIdDelete($company_id, $user_id, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsAlertIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **alert_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdDelete200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsAlertIdDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdAlertsAlertIdGet()`

```php
companiesCompanyIdUsersUserIdAlertsAlertIdGet($company_id, $user_id, $alert_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdGet200Response
```

Get single alert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$alert_id = 'alert_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsAlertIdGet($company_id, $user_id, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsAlertIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **alert_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdGet200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsAlertIdGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdAlertsAlertIdPatch()`

```php
companiesCompanyIdUsersUserIdAlertsAlertIdPatch($company_id, $user_id, $alert_id, $alert): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdPatch200Response
```

Update an existing alert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$alert_id = 'alert_id_example'; // string
$alert = new \SparteraApiSdk\Model\Alert(); // \SparteraApiSdk\Model\Alert

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsAlertIdPatch($company_id, $user_id, $alert_id, $alert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsAlertIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **alert_id** | **string**|  | |
| **alert** | [**\SparteraApiSdk\Model\Alert**](../Model/Alert.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdPatch200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsAlertIdPatch200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdAlertsAssetAssetIdAllGet()`

```php
companiesCompanyIdUsersUserIdAlertsAssetAssetIdAllGet($company_id, $user_id, $asset_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsGet200Response
```

Get all alerts for a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsAssetAssetIdAllGet($company_id, $user_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsAssetAssetIdAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsGet200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdAlertsAssetAssetIdGet()`

```php
companiesCompanyIdUsersUserIdAlertsAssetAssetIdGet($company_id, $user_id, $asset_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdGet200Response
```

Get all alerts for a specific asset (by user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsAssetAssetIdGet($company_id, $user_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsAssetAssetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsAlertIdGet200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsAlertIdGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdAlertsGet()`

```php
companiesCompanyIdUsersUserIdAlertsGet($company_id, $user_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsGet200Response
```

Get a list of all alerts for a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsGet($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsGet200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdAlertsPost()`

```php
companiesCompanyIdUsersUserIdAlertsPost($company_id, $user_id, $alert): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsPost200Response
```

POST /companies/{company_id}/users/{user_id}/alerts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$alert = new \SparteraApiSdk\Model\Alert(); // \SparteraApiSdk\Model\Alert

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdAlertsPost($company_id, $user_id, $alert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->companiesCompanyIdUsersUserIdAlertsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **alert** | [**\SparteraApiSdk\Model\Alert**](../Model/Alert.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdAlertsPost200Response**](../Model/CompaniesCompanyIdUsersUserIdAlertsPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
