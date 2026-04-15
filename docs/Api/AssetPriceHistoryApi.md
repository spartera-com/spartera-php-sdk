# OpenAPI\Client\AssetPriceHistoryApi



All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetPriceHistory()**](AssetPriceHistoryApi.md#createAssetPriceHistory) | **POST** /companies/{company_id}/assets/{asset_id}/prices | Create a new price history record for an asset |
| [**createAssetPriceHistoryPricesCalculateCredits()**](AssetPriceHistoryApi.md#createAssetPriceHistoryPricesCalculateCredits) | **POST** /companies/{company_id}/assets/{asset_id}/prices/calculate_credits | Calculate the credit equivalent for a given USD price without saving |
| [**createAssetPriceHistoryPricesDiscount()**](AssetPriceHistoryApi.md#createAssetPriceHistoryPricesDiscount) | **POST** /companies/{company_id}/assets/{asset_id}/prices/discount | POST /companies/{company_id}/assets/{asset_id}/prices/discount |
| [**deleteAssetPriceHistory()**](AssetPriceHistoryApi.md#deleteAssetPriceHistory) | **DELETE** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Delete single price history record by ID |
| [**getAssetPriceHistoryById()**](AssetPriceHistoryApi.md#getAssetPriceHistoryById) | **GET** /companies/{company_id}/assets/{asset_id}/prices | Get all price history records for a specific asset |
| [**getAssetPriceHistoryByIdAssetsPrices()**](AssetPriceHistoryApi.md#getAssetPriceHistoryByIdAssetsPrices) | **GET** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Get single price history record by ID |
| [**getAssetPriceHistoryByIdPricesActive()**](AssetPriceHistoryApi.md#getAssetPriceHistoryByIdPricesActive) | **GET** /companies/{company_id}/assets/{asset_id}/prices/active | Get the currently active price for an asset |
| [**updateAssetPriceHistory()**](AssetPriceHistoryApi.md#updateAssetPriceHistory) | **PATCH** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Update an existing price history record by ID |


## `createAssetPriceHistory()`

```php
createAssetPriceHistory($company_id, $asset_id, $asset_price_history_input): \OpenAPI\Client\Model\CreateAssetPriceHistory200Response
```

Create a new price history record for an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset
$asset_price_history_input = new \OpenAPI\Client\Model\AssetPriceHistoryInput(); // \OpenAPI\Client\Model\AssetPriceHistoryInput

try {
    $result = $apiInstance->createAssetPriceHistory($company_id, $asset_id, $asset_price_history_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->createAssetPriceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |
| **asset_price_history_input** | [**\OpenAPI\Client\Model\AssetPriceHistoryInput**](../Model/AssetPriceHistoryInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateAssetPriceHistory200Response**](../Model/CreateAssetPriceHistory200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetPriceHistoryPricesCalculateCredits()`

```php
createAssetPriceHistoryPricesCalculateCredits($company_id, $asset_id, $asset_price_history_input): \OpenAPI\Client\Model\CreateAssetPriceHistory200Response
```

Calculate the credit equivalent for a given USD price without saving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset
$asset_price_history_input = new \OpenAPI\Client\Model\AssetPriceHistoryInput(); // \OpenAPI\Client\Model\AssetPriceHistoryInput

try {
    $result = $apiInstance->createAssetPriceHistoryPricesCalculateCredits($company_id, $asset_id, $asset_price_history_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->createAssetPriceHistoryPricesCalculateCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |
| **asset_price_history_input** | [**\OpenAPI\Client\Model\AssetPriceHistoryInput**](../Model/AssetPriceHistoryInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateAssetPriceHistory200Response**](../Model/CreateAssetPriceHistory200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetPriceHistoryPricesDiscount()`

```php
createAssetPriceHistoryPricesDiscount($company_id, $asset_id, $asset_price_history_input): \OpenAPI\Client\Model\CreateAssetPriceHistory200Response
```

POST /companies/{company_id}/assets/{asset_id}/prices/discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset
$asset_price_history_input = new \OpenAPI\Client\Model\AssetPriceHistoryInput(); // \OpenAPI\Client\Model\AssetPriceHistoryInput

try {
    $result = $apiInstance->createAssetPriceHistoryPricesDiscount($company_id, $asset_id, $asset_price_history_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->createAssetPriceHistoryPricesDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |
| **asset_price_history_input** | [**\OpenAPI\Client\Model\AssetPriceHistoryInput**](../Model/AssetPriceHistoryInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateAssetPriceHistory200Response**](../Model/CreateAssetPriceHistory200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetPriceHistory()`

```php
deleteAssetPriceHistory($company_id, $asset_id, $aph_id): \OpenAPI\Client\Model\DeleteAssetPriceHistory200Response
```

Delete single price history record by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset
$aph_id = 'aph_id_example'; // string | Unique identifier for the Aph

try {
    $result = $apiInstance->deleteAssetPriceHistory($company_id, $asset_id, $aph_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->deleteAssetPriceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |
| **aph_id** | **string**| Unique identifier for the Aph | |

### Return type

[**\OpenAPI\Client\Model\DeleteAssetPriceHistory200Response**](../Model/DeleteAssetPriceHistory200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPriceHistoryById()`

```php
getAssetPriceHistoryById($company_id, $asset_id): \OpenAPI\Client\Model\GetAssetPriceHistoryById200Response
```

Get all price history records for a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset

try {
    $result = $apiInstance->getAssetPriceHistoryById($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->getAssetPriceHistoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |

### Return type

[**\OpenAPI\Client\Model\GetAssetPriceHistoryById200Response**](../Model/GetAssetPriceHistoryById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPriceHistoryByIdAssetsPrices()`

```php
getAssetPriceHistoryByIdAssetsPrices($company_id, $asset_id, $aph_id): \OpenAPI\Client\Model\GetAssetPriceHistoryById200Response
```

Get single price history record by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset
$aph_id = 'aph_id_example'; // string | Unique identifier for the Aph

try {
    $result = $apiInstance->getAssetPriceHistoryByIdAssetsPrices($company_id, $asset_id, $aph_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->getAssetPriceHistoryByIdAssetsPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |
| **aph_id** | **string**| Unique identifier for the Aph | |

### Return type

[**\OpenAPI\Client\Model\GetAssetPriceHistoryById200Response**](../Model/GetAssetPriceHistoryById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPriceHistoryByIdPricesActive()`

```php
getAssetPriceHistoryByIdPricesActive($company_id, $asset_id): \OpenAPI\Client\Model\GetAssetPriceHistoryById200Response
```

Get the currently active price for an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset

try {
    $result = $apiInstance->getAssetPriceHistoryByIdPricesActive($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->getAssetPriceHistoryByIdPricesActive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |

### Return type

[**\OpenAPI\Client\Model\GetAssetPriceHistoryById200Response**](../Model/GetAssetPriceHistoryById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetPriceHistory()`

```php
updateAssetPriceHistory($company_id, $asset_id, $aph_id, $asset_price_history_update): \OpenAPI\Client\Model\UpdateAssetPriceHistory200Response
```

Update an existing price history record by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetPriceHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset
$aph_id = 'aph_id_example'; // string | Unique identifier for the Aph
$asset_price_history_update = new \OpenAPI\Client\Model\AssetPriceHistoryUpdate(); // \OpenAPI\Client\Model\AssetPriceHistoryUpdate

try {
    $result = $apiInstance->updateAssetPriceHistory($company_id, $asset_id, $aph_id, $asset_price_history_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPriceHistoryApi->updateAssetPriceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **asset_id** | **string**| Unique identifier for the Asset | |
| **aph_id** | **string**| Unique identifier for the Aph | |
| **asset_price_history_update** | [**\OpenAPI\Client\Model\AssetPriceHistoryUpdate**](../Model/AssetPriceHistoryUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateAssetPriceHistory200Response**](../Model/UpdateAssetPriceHistory200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
