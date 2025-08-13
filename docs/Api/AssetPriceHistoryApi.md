# SparteraApiSdk\AssetPriceHistoryApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdAssetsAssetIdPricesActiveGet()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesActiveGet) | **GET** /companies/{company_id}/assets/{asset_id}/prices/active | Get the currently active price for an asset |
| [**companiesCompanyIdAssetsAssetIdPricesAphIdDelete()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesAphIdDelete) | **DELETE** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Delete single price history record by ID |
| [**companiesCompanyIdAssetsAssetIdPricesAphIdGet()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesAphIdGet) | **GET** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Get single price history record by ID |
| [**companiesCompanyIdAssetsAssetIdPricesAphIdPatch()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesAphIdPatch) | **PATCH** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Update an existing price history record by ID |
| [**companiesCompanyIdAssetsAssetIdPricesCalculateCreditsPost()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesCalculateCreditsPost) | **POST** /companies/{company_id}/assets/{asset_id}/prices/calculate_credits | Calculate the credit equivalent for a given USD price without saving |
| [**companiesCompanyIdAssetsAssetIdPricesDiscountPost()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesDiscountPost) | **POST** /companies/{company_id}/assets/{asset_id}/prices/discount | POST /companies/{company_id}/assets/{asset_id}/prices/discount |
| [**companiesCompanyIdAssetsAssetIdPricesGet()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesGet) | **GET** /companies/{company_id}/assets/{asset_id}/prices | Get all price history records for a specific asset |
| [**companiesCompanyIdAssetsAssetIdPricesPost()**](AssetPriceHistoryApi.md#companiesCompanyIdAssetsAssetIdPricesPost) | **POST** /companies/{company_id}/assets/{asset_id}/prices | Create a new price history record for an asset |


## `companiesCompanyIdAssetsAssetIdPricesActiveGet()`

```php
companiesCompanyIdAssetsAssetIdPricesActiveGet($company_id, $asset_id): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesGet200Response
```

Get the currently active price for an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesActiveGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesActiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesGet200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesAphIdDelete()`

```php
companiesCompanyIdAssetsAssetIdPricesAphIdDelete($company_id, $asset_id, $aph_id): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesAphIdDelete200Response
```

Delete single price history record by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$aph_id = 'aph_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesAphIdDelete($company_id, $asset_id, $aph_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesAphIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **aph_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesAphIdDelete200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesAphIdDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesAphIdGet()`

```php
companiesCompanyIdAssetsAssetIdPricesAphIdGet($company_id, $asset_id, $aph_id): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesAphIdGet200Response
```

Get single price history record by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$aph_id = 'aph_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesAphIdGet($company_id, $asset_id, $aph_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesAphIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **aph_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesAphIdGet200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesAphIdGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesAphIdPatch()`

```php
companiesCompanyIdAssetsAssetIdPricesAphIdPatch($company_id, $asset_id, $aph_id, $asset_price_history_update): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesAphIdPatch200Response
```

Update an existing price history record by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$aph_id = 'aph_id_example'; // string
$asset_price_history_update = new \SparteraApiSdk\Model\AssetPriceHistoryUpdate(); // \SparteraApiSdk\Model\AssetPriceHistoryUpdate

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesAphIdPatch($company_id, $asset_id, $aph_id, $asset_price_history_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesAphIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **aph_id** | **string**|  | |
| **asset_price_history_update** | [**\SparteraApiSdk\Model\AssetPriceHistoryUpdate**](../Model/AssetPriceHistoryUpdate.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesAphIdPatch200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesAphIdPatch200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesCalculateCreditsPost()`

```php
companiesCompanyIdAssetsAssetIdPricesCalculateCreditsPost($company_id, $asset_id, $asset_price_history_input): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesPost200Response
```

Calculate the credit equivalent for a given USD price without saving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_price_history_input = new \SparteraApiSdk\Model\AssetPriceHistoryInput(); // \SparteraApiSdk\Model\AssetPriceHistoryInput

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesCalculateCreditsPost($company_id, $asset_id, $asset_price_history_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesCalculateCreditsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_price_history_input** | [**\SparteraApiSdk\Model\AssetPriceHistoryInput**](../Model/AssetPriceHistoryInput.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesPost200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesDiscountPost()`

```php
companiesCompanyIdAssetsAssetIdPricesDiscountPost($company_id, $asset_id, $asset_price_history_input): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesPost200Response
```

POST /companies/{company_id}/assets/{asset_id}/prices/discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_price_history_input = new \SparteraApiSdk\Model\AssetPriceHistoryInput(); // \SparteraApiSdk\Model\AssetPriceHistoryInput

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesDiscountPost($company_id, $asset_id, $asset_price_history_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesDiscountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_price_history_input** | [**\SparteraApiSdk\Model\AssetPriceHistoryInput**](../Model/AssetPriceHistoryInput.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesPost200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesGet()`

```php
companiesCompanyIdAssetsAssetIdPricesGet($company_id, $asset_id): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesGet200Response
```

Get all price history records for a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesGet200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdPricesPost()`

```php
companiesCompanyIdAssetsAssetIdPricesPost($company_id, $asset_id, $asset_price_history_input): \SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesPost200Response
```

Create a new price history record for an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset_price_history_input = new \SparteraApiSdk\Model\AssetPriceHistoryInput(); // \SparteraApiSdk\Model\AssetPriceHistoryInput

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPricesPost($company_id, $asset_id, $asset_price_history_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->companiesCompanyIdAssetsAssetIdPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset_price_history_input** | [**\SparteraApiSdk\Model\AssetPriceHistoryInput**](../Model/AssetPriceHistoryInput.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdAssetsAssetIdPricesPost200Response**](../Model/CompaniesCompanyIdAssetsAssetIdPricesPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
