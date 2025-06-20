# SparteraApiSdk\CloudProvidersApi

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudProvidersGet()**](CloudProvidersApi.md#cloudProvidersGet) | **GET** /cloud-providers | Get a list of all cloud providers |
| [**cloudProvidersPost()**](CloudProvidersApi.md#cloudProvidersPost) | **POST** /cloud-providers | Create single cloud provider |
| [**cloudProvidersProviderIdDelete()**](CloudProvidersApi.md#cloudProvidersProviderIdDelete) | **DELETE** /cloud-providers/{provider_id} | Delete single cloud provider by ID |
| [**cloudProvidersProviderIdGet()**](CloudProvidersApi.md#cloudProvidersProviderIdGet) | **GET** /cloud-providers/{provider_id} | Get single cloud provider by ID |
| [**cloudProvidersProviderIdPatch()**](CloudProvidersApi.md#cloudProvidersProviderIdPatch) | **PATCH** /cloud-providers/{provider_id} | Update an existing cloud provider by ID |


## `cloudProvidersGet()`

```php
cloudProvidersGet(): object
```

Get a list of all cloud providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudProvidersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `cloudProvidersPost()`

```php
cloudProvidersPost(): object
```

Create single cloud provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudProvidersPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `cloudProvidersProviderIdDelete()`

```php
cloudProvidersProviderIdDelete($provider_id): object
```

Delete single cloud provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string

try {
    $result = $apiInstance->cloudProvidersProviderIdDelete($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersProviderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**|  | |

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

## `cloudProvidersProviderIdGet()`

```php
cloudProvidersProviderIdGet($provider_id): object
```

Get single cloud provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string

try {
    $result = $apiInstance->cloudProvidersProviderIdGet($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**|  | |

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

## `cloudProvidersProviderIdPatch()`

```php
cloudProvidersProviderIdPatch($provider_id): object
```

Update an existing cloud provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = SparteraApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SparteraApiSdk\Api\CloudProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string

try {
    $result = $apiInstance->cloudProvidersProviderIdPatch($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudProvidersApi->cloudProvidersProviderIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**|  | |

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
