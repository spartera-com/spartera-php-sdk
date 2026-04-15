# OpenAPI\Client\FavoritesApi

Favorites operations

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFavorites()**](FavoritesApi.md#createFavorites) | **POST** /companies/{company_id}/users/{user_id}/favorites | POST /companies/{company_id}/users/{user_id}/favorites |
| [**deleteFavorites()**](FavoritesApi.md#deleteFavorites) | **DELETE** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Delete single favorite by ID (unfavorite an asset) |
| [**getFavoritesById()**](FavoritesApi.md#getFavoritesById) | **GET** /companies/{company_id}/users/{user_id}/favorites | Get a list of all favorites for a specific user |
| [**getFavoritesByIdUsers()**](FavoritesApi.md#getFavoritesByIdUsers) | **GET** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Get single favorite by ID |
| [**getFavoritesByIdUsersCategory()**](FavoritesApi.md#getFavoritesByIdUsersCategory) | **GET** /companies/{company_id}/users/{user_id}/favorites/category/{category} | Get all favorites for the specified user in a specific category |
| [**getFavoritesByIdUsersCheck()**](FavoritesApi.md#getFavoritesByIdUsersCheck) | **GET** /companies/{company_id}/users/{user_id}/favorites/check/{asset_id} | Check if the specified user has favorited a specific asset |
| [**getFavoritesByIdUsersUncategorized()**](FavoritesApi.md#getFavoritesByIdUsersUncategorized) | **GET** /companies/{company_id}/users/{user_id}/favorites/uncategorized | Get all favorites for the specified user that don&#39;t have a category |
| [**updateFavorites()**](FavoritesApi.md#updateFavorites) | **PATCH** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Update an existing favorite by ID |


## `createFavorites()`

```php
createFavorites($company_id, $user_id, $favorites_input): \OpenAPI\Client\Model\CreateFavorites200Response
```

POST /companies/{company_id}/users/{user_id}/favorites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$favorites_input = new \OpenAPI\Client\Model\FavoritesInput(); // \OpenAPI\Client\Model\FavoritesInput

try {
    $result = $apiInstance->createFavorites($company_id, $user_id, $favorites_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->createFavorites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **favorites_input** | [**\OpenAPI\Client\Model\FavoritesInput**](../Model/FavoritesInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateFavorites200Response**](../Model/CreateFavorites200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFavorites()`

```php
deleteFavorites($company_id, $user_id, $favorite_id): \OpenAPI\Client\Model\DeleteFavorites200Response
```

Delete single favorite by ID (unfavorite an asset)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$favorite_id = 'favorite_id_example'; // string | Unique identifier for the Favorite

try {
    $result = $apiInstance->deleteFavorites($company_id, $user_id, $favorite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->deleteFavorites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **favorite_id** | **string**| Unique identifier for the Favorite | |

### Return type

[**\OpenAPI\Client\Model\DeleteFavorites200Response**](../Model/DeleteFavorites200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavoritesById()`

```php
getFavoritesById($company_id, $user_id): \OpenAPI\Client\Model\GetFavoritesById200Response
```

Get a list of all favorites for a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User

try {
    $result = $apiInstance->getFavoritesById($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavoritesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |

### Return type

[**\OpenAPI\Client\Model\GetFavoritesById200Response**](../Model/GetFavoritesById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavoritesByIdUsers()`

```php
getFavoritesByIdUsers($company_id, $user_id, $favorite_id): \OpenAPI\Client\Model\GetFavoritesById200Response
```

Get single favorite by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$favorite_id = 'favorite_id_example'; // string | Unique identifier for the Favorite

try {
    $result = $apiInstance->getFavoritesByIdUsers($company_id, $user_id, $favorite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavoritesByIdUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **favorite_id** | **string**| Unique identifier for the Favorite | |

### Return type

[**\OpenAPI\Client\Model\GetFavoritesById200Response**](../Model/GetFavoritesById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavoritesByIdUsersCategory()`

```php
getFavoritesByIdUsersCategory($company_id, $user_id, $category): \OpenAPI\Client\Model\GetFavoritesById200Response
```

Get all favorites for the specified user in a specific category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$category = 'category_example'; // string | Parameter for category

try {
    $result = $apiInstance->getFavoritesByIdUsersCategory($company_id, $user_id, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavoritesByIdUsersCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **category** | **string**| Parameter for category | |

### Return type

[**\OpenAPI\Client\Model\GetFavoritesById200Response**](../Model/GetFavoritesById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavoritesByIdUsersCheck()`

```php
getFavoritesByIdUsersCheck($company_id, $user_id, $asset_id): \OpenAPI\Client\Model\GetFavoritesById200Response
```

Check if the specified user has favorited a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$asset_id = 'asset_id_example'; // string | Unique identifier for the Asset

try {
    $result = $apiInstance->getFavoritesByIdUsersCheck($company_id, $user_id, $asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavoritesByIdUsersCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **asset_id** | **string**| Unique identifier for the Asset | |

### Return type

[**\OpenAPI\Client\Model\GetFavoritesById200Response**](../Model/GetFavoritesById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavoritesByIdUsersUncategorized()`

```php
getFavoritesByIdUsersUncategorized($company_id, $user_id): \OpenAPI\Client\Model\GetFavoritesById200Response
```

Get all favorites for the specified user that don't have a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User

try {
    $result = $apiInstance->getFavoritesByIdUsersUncategorized($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavoritesByIdUsersUncategorized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |

### Return type

[**\OpenAPI\Client\Model\GetFavoritesById200Response**](../Model/GetFavoritesById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFavorites()`

```php
updateFavorites($company_id, $user_id, $favorite_id, $favorites_update): \OpenAPI\Client\Model\UpdateFavorites200Response
```

Update an existing favorite by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$user_id = 'user_id_example'; // string | Unique identifier for the User
$favorite_id = 'favorite_id_example'; // string | Unique identifier for the Favorite
$favorites_update = new \OpenAPI\Client\Model\FavoritesUpdate(); // \OpenAPI\Client\Model\FavoritesUpdate

try {
    $result = $apiInstance->updateFavorites($company_id, $user_id, $favorite_id, $favorites_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->updateFavorites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **user_id** | **string**| Unique identifier for the User | |
| **favorite_id** | **string**| Unique identifier for the Favorite | |
| **favorites_update** | [**\OpenAPI\Client\Model\FavoritesUpdate**](../Model/FavoritesUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateFavorites200Response**](../Model/UpdateFavorites200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
