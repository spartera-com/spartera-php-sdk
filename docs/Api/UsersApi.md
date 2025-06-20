# SparteraApiSdk\UsersApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdUsersGet()**](UsersApi.md#companiesCompanyIdUsersGet) | **GET** /companies/{company_id}/users | Get a list of all users in a company |
| [**companiesCompanyIdUsersPost()**](UsersApi.md#companiesCompanyIdUsersPost) | **POST** /companies/{company_id}/users | Create a new user |
| [**companiesCompanyIdUsersUserIdDelete()**](UsersApi.md#companiesCompanyIdUsersUserIdDelete) | **DELETE** /companies/{company_id}/users/{user_id} | Delete single user by ID |
| [**companiesCompanyIdUsersUserIdGet()**](UsersApi.md#companiesCompanyIdUsersUserIdGet) | **GET** /companies/{company_id}/users/{user_id} | Get single user by ID |
| [**companiesCompanyIdUsersUserIdPatch()**](UsersApi.md#companiesCompanyIdUsersUserIdPatch) | **PATCH** /companies/{company_id}/users/{user_id} | Update an existing user by ID |
| [**meGet()**](UsersApi.md#meGet) | **GET** /me | Get current authenticated user&#39;s profile information.              Returns:                 JSON response with user profile data from database |


## `companiesCompanyIdUsersGet()`

```php
companiesCompanyIdUsersGet($company_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersGet200Response
```

Get a list of all users in a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->companiesCompanyIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersGet200Response**](../Model/CompaniesCompanyIdUsersGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersPost()`

```php
companiesCompanyIdUsersPost($company_id, $user): \SparteraApiSdk\Model\CompaniesCompanyIdUsersPost200Response
```

Create a new user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user = new \SparteraApiSdk\Model\User(); // \SparteraApiSdk\Model\User

try {
    $result = $apiInstance->companiesCompanyIdUsersPost($company_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->companiesCompanyIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user** | [**\SparteraApiSdk\Model\User**](../Model/User.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersPost200Response**](../Model/CompaniesCompanyIdUsersPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdDelete()`

```php
companiesCompanyIdUsersUserIdDelete($company_id, $user_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdDelete200Response
```

Delete single user by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdDelete($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->companiesCompanyIdUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdDelete200Response**](../Model/CompaniesCompanyIdUsersUserIdDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdGet()`

```php
companiesCompanyIdUsersUserIdGet($company_id, $user_id): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdGet200Response
```

Get single user by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdGet($company_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->companiesCompanyIdUsersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdGet200Response**](../Model/CompaniesCompanyIdUsersUserIdGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdUsersUserIdPatch()`

```php
companiesCompanyIdUsersUserIdPatch($company_id, $user_id, $user): \SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdPatch200Response
```

Update an existing user by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$user = new \SparteraApiSdk\Model\User(); // \SparteraApiSdk\Model\User

try {
    $result = $apiInstance->companiesCompanyIdUsersUserIdPatch($company_id, $user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->companiesCompanyIdUsersUserIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **user_id** | **string**|  | |
| **user** | [**\SparteraApiSdk\Model\User**](../Model/User.md)|  | |

### Return type

[**\SparteraApiSdk\Model\CompaniesCompanyIdUsersUserIdPatch200Response**](../Model/CompaniesCompanyIdUsersUserIdPatch200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meGet()`

```php
meGet(): \SparteraApiSdk\Model\MeGet200Response
```

Get current authenticated user's profile information.              Returns:                 JSON response with user profile data from database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SparteraApiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->meGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SparteraApiSdk\Model\MeGet200Response**](../Model/MeGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
