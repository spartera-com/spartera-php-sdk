# SparteraApiSdk\CompaniesApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdAnalyticsAssetsGet()**](CompaniesApi.md#companiesCompanyIdAnalyticsAssetsGet) | **GET** /companies/{company_id}/analytics/assets | Get asset performance analytics     Query params: start_date, end_date, limit, sort_by, include |
| [**companiesCompanyIdAnalyticsCustomersGet()**](CompaniesApi.md#companiesCompanyIdAnalyticsCustomersGet) | **GET** /companies/{company_id}/analytics/customers | Get customer analytics including growth and segmentation     Query params: start_date, end_date, group_by, segment_by |
| [**companiesCompanyIdAnalyticsDashboardGet()**](CompaniesApi.md#companiesCompanyIdAnalyticsDashboardGet) | **GET** /companies/{company_id}/analytics/dashboard | Get comprehensive dashboard analytics for seller dashboard     Includes all metrics needed for dashboard charts in one call     Query params: start_date, end_date, period (day/week/month/quarter) |
| [**companiesCompanyIdAnalyticsSalesGet()**](CompaniesApi.md#companiesCompanyIdAnalyticsSalesGet) | **GET** /companies/{company_id}/analytics/sales | Get sales over time analytics     Query params: start_date, end_date, group_by (day/week/month/quarter), metrics |
| [**companiesCompanyIdGet()**](CompaniesApi.md#companiesCompanyIdGet) | **GET** /companies/{company_id} | Get details of the requestor&#39;s own company |
| [**companiesCompanyIdObjectsGet()**](CompaniesApi.md#companiesCompanyIdObjectsGet) | **GET** /companies/{company_id}/objects | Get all objects (connections, assets) of a single company |
| [**companiesCompanyIdPatch()**](CompaniesApi.md#companiesCompanyIdPatch) | **PATCH** /companies/{company_id} | Update an existing company by ID |
| [**companiesCompanyIdRequestsPlanGet()**](CompaniesApi.md#companiesCompanyIdRequestsPlanGet) | **GET** /companies/{company_id}/requests/plan | Get the total number of requests allocated in the company&#39;s current subscription plan. |
| [**companiesCompanyIdRequestsUsageGet()**](CompaniesApi.md#companiesCompanyIdRequestsUsageGet) | **GET** /companies/{company_id}/requests/usage | Get company request usage data for a specific month. Returns JSON metrics by default or CSV logs when download parameter is included. |


## `companiesCompanyIdAnalyticsAssetsGet()`

```php
companiesCompanyIdAnalyticsAssetsGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get asset performance analytics     Query params: start_date, end_date, limit, sort_by, include

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAnalyticsAssetsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdAnalyticsAssetsGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdAnalyticsCustomersGet()`

```php
companiesCompanyIdAnalyticsCustomersGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get customer analytics including growth and segmentation     Query params: start_date, end_date, group_by, segment_by

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAnalyticsCustomersGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdAnalyticsCustomersGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdAnalyticsDashboardGet()`

```php
companiesCompanyIdAnalyticsDashboardGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get comprehensive dashboard analytics for seller dashboard     Includes all metrics needed for dashboard charts in one call     Query params: start_date, end_date, period (day/week/month/quarter)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAnalyticsDashboardGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdAnalyticsDashboardGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdAnalyticsSalesGet()`

```php
companiesCompanyIdAnalyticsSalesGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get sales over time analytics     Query params: start_date, end_date, group_by (day/week/month/quarter), metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAnalyticsSalesGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdAnalyticsSalesGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdGet()`

```php
companiesCompanyIdGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get details of the requestor's own company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdObjectsGet()`

```php
companiesCompanyIdObjectsGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get all objects (connections, assets) of a single company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdObjectsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdObjectsGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdPatch()`

```php
companiesCompanyIdPatch($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Update an existing company by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdPatch($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdPatch: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdRequestsPlanGet()`

```php
companiesCompanyIdRequestsPlanGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get the total number of requests allocated in the company's current subscription plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdRequestsPlanGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdRequestsPlanGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdRequestsUsageGet()`

```php
companiesCompanyIdRequestsUsageGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdApiKeysGet200Response
```

Get company request usage data for a specific month. Returns JSON metrics by default or CSV logs when download parameter is included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdRequestsUsageGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesCompanyIdRequestsUsageGet: ', $e->getMessage(), PHP_EOL;
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
