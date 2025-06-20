# SparteraApiSdk\FavoritesApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdUsersUserIdFavoritesCategoryCategoryGet()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesCategoryCategoryGet) | **GET** /companies/{company_id}/users/{user_id}/favorites/category/{category} | Get all favorites for the specified user in a specific category |
| [**companiesCompanyIdUsersUserIdFavoritesCheckAssetIdGet()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesCheckAssetIdGet) | **GET** /companies/{company_id}/users/{user_id}/favorites/check/{asset_id} | Check if the specified user has favorited a specific asset     Returns the favorite record if it exists, or empty result if not     Useful for UI to show/hide favorite button states |
| [**companiesCompanyIdUsersUserIdFavoritesFavoriteIdDelete()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesFavoriteIdDelete) | **DELETE** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Delete single favorite by ID (unfavorite an asset) |
| [**companiesCompanyIdUsersUserIdFavoritesFavoriteIdGet()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesFavoriteIdGet) | **GET** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Get single favorite by ID |
| [**companiesCompanyIdUsersUserIdFavoritesFavoriteIdPatch()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesFavoriteIdPatch) | **PATCH** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Update an existing favorite by ID     Can update notes, category, priority |
| [**companiesCompanyIdUsersUserIdFavoritesGet()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesGet) | **GET** /companies/{company_id}/users/{user_id}/favorites | Get a list of all favorites for a specific user     Query params:     - category: filter by category     - sort: sort field (priority, date_created, etc.)     - order: sort direction (asc, desc) |
| [**companiesCompanyIdUsersUserIdFavoritesPost()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesPost) | **POST** /companies/{company_id}/users/{user_id}/favorites | POST /companies/{company_id}/users/{user_id}/favorites |
| [**companiesCompanyIdUsersUserIdFavoritesUncategorizedGet()**](FavoritesApi.md#companiesCompanyIdUsersUserIdFavoritesUncategorizedGet) | **GET** /companies/{company_id}/users/{user_id}/favorites/uncategorized | Get all favorites for the specified user that don&#39;t have a category |


## `companiesCompanyIdUsersUserIdFavoritesCategoryCategoryGet()`

```php
companiesCompanyIdUsersUserIdFavoritesCategoryCategoryGet($company_id, $user_id, $category): object
```

Get all favorites for the specified user in a specific category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$category = 'category_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesCategoryCategoryGet($company_id, $user_id, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesCategoryCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **category** | **string**|  | |

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

## `companiesCompanyIdUsersUserIdFavoritesCheckAssetIdGet()`

```php
companiesCompanyIdUsersUserIdFavoritesCheckAssetIdGet($company_id, $user_id, $asset_id): object
```

Check if the specified user has favorited a specific asset     Returns the favorite record if it exists, or empty result if not     Useful for UI to show/hide favorite button states

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesCheckAssetIdGet($company_id, $user_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesCheckAssetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
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

## `companiesCompanyIdUsersUserIdFavoritesFavoriteIdDelete()`

```php
companiesCompanyIdUsersUserIdFavoritesFavoriteIdDelete($company_id, $user_id, $favorite_id): object
```

Delete single favorite by ID (unfavorite an asset)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$favorite_id = 'favorite_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesFavoriteIdDelete($company_id, $user_id, $favorite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesFavoriteIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **favorite_id** | **string**|  | |

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

## `companiesCompanyIdUsersUserIdFavoritesFavoriteIdGet()`

```php
companiesCompanyIdUsersUserIdFavoritesFavoriteIdGet($company_id, $user_id, $favorite_id): object
```

Get single favorite by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$favorite_id = 'favorite_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesFavoriteIdGet($company_id, $user_id, $favorite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesFavoriteIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **favorite_id** | **string**|  | |

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

## `companiesCompanyIdUsersUserIdFavoritesFavoriteIdPatch()`

```php
companiesCompanyIdUsersUserIdFavoritesFavoriteIdPatch($company_id, $user_id, $favorite_id, $favorite): object
```

Update an existing favorite by ID     Can update notes, category, priority

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$favorite_id = 'favorite_id_example'; // string
$favorite = new \SparteraApiSdk\Model\Favorite(); // \SparteraApiSdk\Model\Favorite

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesFavoriteIdPatch($company_id, $user_id, $favorite_id, $favorite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesFavoriteIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **favorite_id** | **string**|  | |
| **favorite** | [**\SparteraApiSdk\Model\Favorite**](../Model/Favorite.md)|  | |

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

## `companiesCompanyIdUsersUserIdFavoritesGet()`

```php
companiesCompanyIdUsersUserIdFavoritesGet($company_id, $user_id): object
```

Get a list of all favorites for a specific user     Query params:     - category: filter by category     - sort: sort field (priority, date_created, etc.)     - order: sort direction (asc, desc)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesGet($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |

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

## `companiesCompanyIdUsersUserIdFavoritesPost()`

```php
companiesCompanyIdUsersUserIdFavoritesPost($company_id, $user_id, $favorite): object
```

POST /companies/{company_id}/users/{user_id}/favorites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$favorite = new \SparteraApiSdk\Model\Favorite(); // \SparteraApiSdk\Model\Favorite

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesPost($company_id, $user_id, $favorite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **favorite** | [**\SparteraApiSdk\Model\Favorite**](../Model/Favorite.md)|  | |

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

## `companiesCompanyIdUsersUserIdFavoritesUncategorizedGet()`

```php
companiesCompanyIdUsersUserIdFavoritesUncategorizedGet($company_id, $user_id): object
```

Get all favorites for the specified user that don't have a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdFavoritesUncategorizedGet($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->companiesCompanyIdUsersUserIdFavoritesUncategorizedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |

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
