# SparteraApiSdk\AssetsApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeCompanyHandleAssetsAssetSlugGet()**](AssetsApi.md#analyzeCompanyHandleAssetsAssetSlugGet) | **GET** /analyze/{company_handle}/assets/{asset_slug} | Process (analyze) an asset. Attempt to process an analytic on a backend warehouse/AI model. |
| [**companiesCompanyIdAssetsAssetIdDelete()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdDelete) | **DELETE** /companies/{company_id}/assets/{asset_id} | Delete single asset by ID |
| [**companiesCompanyIdAssetsAssetIdGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdGet) | **GET** /companies/{company_id}/assets/{asset_id} | Get single asset by ID |
| [**companiesCompanyIdAssetsAssetIdInfoschemaGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdInfoschemaGet) | **GET** /companies/{company_id}/assets/{asset_id}/infoschema | Get the information schema for a specific asset&#39;s table |
| [**companiesCompanyIdAssetsAssetIdInfoschemaSaveGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdInfoschemaSaveGet) | **GET** /companies/{company_id}/assets/{asset_id}/infoschema/save | Retrieve and save an asset&#39;s information schema |
| [**companiesCompanyIdAssetsAssetIdPatch()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdPatch) | **PATCH** /companies/{company_id}/assets/{asset_id} | Update an existing asset by ID |
| [**companiesCompanyIdAssetsAssetIdPredictedPriceGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdPredictedPriceGet) | **GET** /companies/{company_id}/assets/{asset_id}/predicted_price | Get AI-predicted pricing for a specific asset |
| [**companiesCompanyIdAssetsAssetIdStatisticsGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdStatisticsGet) | **GET** /companies/{company_id}/assets/{asset_id}/statistics | Get statistics for a specific asset (public endpoint) |
| [**companiesCompanyIdAssetsAssetIdTestGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdTestGet) | **GET** /companies/{company_id}/assets/{asset_id}/test | Test out an Asset (on a subset of data) |
| [**companiesCompanyIdAssetsGet()**](AssetsApi.md#companiesCompanyIdAssetsGet) | **GET** /companies/{company_id}/assets | Get all assets for a specific company |
| [**companiesCompanyIdAssetsPost()**](AssetsApi.md#companiesCompanyIdAssetsPost) | **POST** /companies/{company_id}/assets | Create a new asset |
| [**companiesCompanyIdAssetsStatisticsGet()**](AssetsApi.md#companiesCompanyIdAssetsStatisticsGet) | **GET** /companies/{company_id}/assets/statistics | Get statistics for all assets the user has access to |


## `analyzeCompanyHandleAssetsAssetSlugGet()`

```php
analyzeCompanyHandleAssetsAssetSlugGet($asset_slug, $company_handle): object
```

Process (analyze) an asset. Attempt to process an analytic on a backend warehouse/AI model.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_slug = 'asset_slug_example'; // string
$company_handle = 'company_handle_example'; // string

try {
    $result = $apiInstance->analyzeCompanyHandleAssetsAssetSlugGet($asset_slug, $company_handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->analyzeCompanyHandleAssetsAssetSlugGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_slug** | **string**|  | |
| **company_handle** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdDelete()`

```php
companiesCompanyIdAssetsAssetIdDelete($company_id, $asset_id): object
```

Delete single asset by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdDelete($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdGet()`

```php
companiesCompanyIdAssetsAssetIdGet($company_id, $asset_id): object
```

Get single asset by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdInfoschemaGet()`

```php
companiesCompanyIdAssetsAssetIdInfoschemaGet($company_id, $asset_id): object
```

Get the information schema for a specific asset's table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdInfoschemaGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdInfoschemaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdInfoschemaSaveGet()`

```php
companiesCompanyIdAssetsAssetIdInfoschemaSaveGet($company_id, $asset_id): object
```

Retrieve and save an asset's information schema

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdInfoschemaSaveGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdInfoschemaSaveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdPatch()`

```php
companiesCompanyIdAssetsAssetIdPatch($company_id, $asset_id, $asset): object
```

Update an existing asset by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$asset = new \SparteraApiSdk\Model\Asset(); // \SparteraApiSdk\Model\Asset

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPatch($company_id, $asset_id, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **asset** | [**\SparteraApiSdk\Model\Asset**](../Model/Asset.md)|  | |

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

## `companiesCompanyIdAssetsAssetIdPredictedPriceGet()`

```php
companiesCompanyIdAssetsAssetIdPredictedPriceGet($company_id, $asset_id): object
```

Get AI-predicted pricing for a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdPredictedPriceGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdPredictedPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdStatisticsGet()`

```php
companiesCompanyIdAssetsAssetIdStatisticsGet($company_id, $asset_id): object
```

Get statistics for a specific asset (public endpoint)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdStatisticsGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsAssetIdTestGet()`

```php
companiesCompanyIdAssetsAssetIdTestGet($company_id, $asset_id): object
```

Test out an Asset (on a subset of data)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdTestGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdTestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |

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

## `companiesCompanyIdAssetsGet()`

```php
companiesCompanyIdAssetsGet($company_id): object
```

Get all assets for a specific company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdAssetsPost()`

```php
companiesCompanyIdAssetsPost($company_id, $asset): object
```

Create a new asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset = new \SparteraApiSdk\Model\Asset(); // \SparteraApiSdk\Model\Asset

try {
    $result = $apiInstance->companiesCompanyIdAssetsPost($company_id, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset** | [**\SparteraApiSdk\Model\Asset**](../Model/Asset.md)|  | |

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

## `companiesCompanyIdAssetsStatisticsGet()`

```php
companiesCompanyIdAssetsStatisticsGet($company_id): object
```

Get statistics for all assets the user has access to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsStatisticsGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsStatisticsGet: ', $e->getMessage(), PHP_EOL;
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
