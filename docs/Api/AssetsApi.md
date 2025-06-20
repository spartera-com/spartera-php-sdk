# SparteraApiSdk\AssetsApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeCompanyHandleAssetsAssetSlugGet()**](AssetsApi.md#analyzeCompanyHandleAssetsAssetSlugGet) | **GET** /analyze/{company_handle}/assets/{asset_slug} | Process assets route that handles both owned and purchased assets.             Minimal route function that passes all logic to crudder.process_asset              Args:                 asset_path: The path after /analyze/ containing asset information                 company_handle: The subdomain from Flask&#39;s routing (if available) |
| [**companiesCompanyIdAssetsAssetIdDelete()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdDelete) | **DELETE** /companies/{company_id}/assets/{asset_id} | Delete single asset by ID |
| [**companiesCompanyIdAssetsAssetIdGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdGet) | **GET** /companies/{company_id}/assets/{asset_id} | Get single asset by ID |
| [**companiesCompanyIdAssetsAssetIdInfoschemaGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdInfoschemaGet) | **GET** /companies/{company_id}/assets/{asset_id}/infoschema | Get the information schema for a specific asset&#39;s table |
| [**companiesCompanyIdAssetsAssetIdInfoschemaSaveGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdInfoschemaSaveGet) | **GET** /companies/{company_id}/assets/{asset_id}/infoschema/save | Get the information schema for a specific asset and save it to the asset&#39;s asset_schema field |
| [**companiesCompanyIdAssetsAssetIdPatch()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdPatch) | **PATCH** /companies/{company_id}/assets/{asset_id} | Update an existing asset by ID |
| [**companiesCompanyIdAssetsAssetIdPredictedPriceGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdPredictedPriceGet) | **GET** /companies/{company_id}/assets/{asset_id}/predicted_price | Get AI-predicted pricing for a specific asset |
| [**companiesCompanyIdAssetsAssetIdRecommendationsExplainGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdRecommendationsExplainGet) | **GET** /companies/{company_id}/assets/{asset_id}/recommendations/explain | Get detailed explanation of how asset recommendations are calculated for debugging purposes. |
| [**companiesCompanyIdAssetsAssetIdRecommendationsGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdRecommendationsGet) | **GET** /companies/{company_id}/assets/{asset_id}/recommendations | Get asset recommendations for a specific asset using heuristic waterfall matching     Returns list of similar assets based on industry, company, connection, tags, etc.      Query Parameters:     - limit: Number of recommendations to return (default: 12, max: 50)     - min_score: Minimum similarity score threshold (default: 0.1)     - include_details: Include component similarity scores (default: false) |
| [**companiesCompanyIdAssetsAssetIdStatisticsGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdStatisticsGet) | **GET** /companies/{company_id}/assets/{asset_id}/statistics | Get statistics for a specific asset (public endpoint) |
| [**companiesCompanyIdAssetsAssetIdTestGet()**](AssetsApi.md#companiesCompanyIdAssetsAssetIdTestGet) | **GET** /companies/{company_id}/assets/{asset_id}/test | Test out an Asset (on a subset of data) |
| [**companiesCompanyIdAssetsGet()**](AssetsApi.md#companiesCompanyIdAssetsGet) | **GET** /companies/{company_id}/assets | Get all assets for a specific company |
| [**companiesCompanyIdAssetsPost()**](AssetsApi.md#companiesCompanyIdAssetsPost) | **POST** /companies/{company_id}/assets | Create a new asset |
| [**companiesCompanyIdAssetsRecommendationsBulkPost()**](AssetsApi.md#companiesCompanyIdAssetsRecommendationsBulkPost) | **POST** /companies/{company_id}/assets/recommendations/bulk | Get recommendations for multiple assets in a single request. Useful for pre-loading recommendations. |
| [**companiesCompanyIdAssetsRecommendationsHealthGet()**](AssetsApi.md#companiesCompanyIdAssetsRecommendationsHealthGet) | **GET** /companies/{company_id}/assets/recommendations/health | Health check for the recommendations system with sample data and performance metrics. |
| [**companiesCompanyIdAssetsStatisticsGet()**](AssetsApi.md#companiesCompanyIdAssetsStatisticsGet) | **GET** /companies/{company_id}/assets/statistics | Get statistics for all assets the user has access to |


## `analyzeCompanyHandleAssetsAssetSlugGet()`

```php
analyzeCompanyHandleAssetsAssetSlugGet($company_handle, $asset_slug): object
```

Process assets route that handles both owned and purchased assets.             Minimal route function that passes all logic to crudder.process_asset              Args:                 asset_path: The path after /analyze/ containing asset information                 company_handle: The subdomain from Flask's routing (if available)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_handle = 'company_handle_example'; // string
$asset_slug = 'asset_slug_example'; // string

try {
    $result = $apiInstance->analyzeCompanyHandleAssetsAssetSlugGet($company_handle, $asset_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->analyzeCompanyHandleAssetsAssetSlugGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_handle** | **string**|  | |
| **asset_slug** | **string**|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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

Get the information schema for a specific asset and save it to the asset's asset_schema field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdRecommendationsExplainGet()`

```php
companiesCompanyIdAssetsAssetIdRecommendationsExplainGet($company_id, $asset_id): object
```

Get detailed explanation of how asset recommendations are calculated for debugging purposes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdRecommendationsExplainGet($company_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdRecommendationsExplainGet: ', $e->getMessage(), PHP_EOL;
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsAssetIdRecommendationsGet()`

```php
companiesCompanyIdAssetsAssetIdRecommendationsGet($company_id, $asset_id, $limit, $min_score, $include_details): object
```

Get asset recommendations for a specific asset using heuristic waterfall matching     Returns list of similar assets based on industry, company, connection, tags, etc.      Query Parameters:     - limit: Number of recommendations to return (default: 12, max: 50)     - min_score: Minimum similarity score threshold (default: 0.1)     - include_details: Include component similarity scores (default: false)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset_id = 'asset_id_example'; // string
$limit = 'limit_example'; // string
$min_score = 'min_score_example'; // string
$include_details = 'include_details_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsAssetIdRecommendationsGet($company_id, $asset_id, $limit, $min_score, $include_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsAssetIdRecommendationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **asset_id** | **string**|  | |
| **limit** | **string**|  | [optional] |
| **min_score** | **string**|  | [optional] |
| **include_details** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsRecommendationsBulkPost()`

```php
companiesCompanyIdAssetsRecommendationsBulkPost($company_id, $asset): object
```

Get recommendations for multiple assets in a single request. Useful for pre-loading recommendations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$asset = new \SparteraApiSdk\Model\Asset(); // \SparteraApiSdk\Model\Asset

try {
    $result = $apiInstance->companiesCompanyIdAssetsRecommendationsBulkPost($company_id, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsRecommendationsBulkPost: ', $e->getMessage(), PHP_EOL;
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdAssetsRecommendationsHealthGet()`

```php
companiesCompanyIdAssetsRecommendationsHealthGet($company_id): object
```

Health check for the recommendations system with sample data and performance metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdAssetsRecommendationsHealthGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->companiesCompanyIdAssetsRecommendationsHealthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
