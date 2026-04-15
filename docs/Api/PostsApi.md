# OpenAPI\Client\PostsApi

Posts operations

All URIs are relative to https://api.spartera.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPosts()**](PostsApi.md#createPosts) | **POST** /companies/{company_id}/posts | POST /companies/{company_id}/posts |
| [**createPosts2()**](PostsApi.md#createPosts2) | **POST** /companies/{company_id}/posts/{post_id}/publish/{integration_id} | Publish a post to an external platform via an integration.      Args:         post_id: ID of the post to publish         integration_id: ID of the integration to use (from postgen_integrations)      Returns:         Publication record with external_url and external_post_id |
| [**createPostsPublish()**](PostsApi.md#createPostsPublish) | **POST** /companies/{company_id}/posts/{post_id}/publish | Publish a post (make it publicly visible). |
| [**createPostsUnpublish()**](PostsApi.md#createPostsUnpublish) | **POST** /companies/{company_id}/posts/{post_id}/unpublish | Unpublish a post (make it private/draft again). |
| [**createPostsView()**](PostsApi.md#createPostsView) | **POST** /companies/{company_id}/posts/{post_id}/view | Increment view count for a post.     Public endpoint (no authentication required). |
| [**deletePosts()**](PostsApi.md#deletePosts) | **DELETE** /companies/{company_id}/posts/{post_id} | Delete single post by ID. |
| [**getPostsById()**](PostsApi.md#getPostsById) | **GET** /companies/{company_id}/posts/{post_id} | Get single post by ID. |
| [**getPostsByIdPublications()**](PostsApi.md#getPostsByIdPublications) | **GET** /companies/{company_id}/posts/{post_id}/publications | Get all publications for a post.     Shows where this post has been published to external platforms.      Returns:         Array of publication records with platform, URL, status |
| [**listPosts()**](PostsApi.md#listPosts) | **GET** /companies/{company_id}/posts | Get a list of all posts for the user&#39;s company.     Supports filtering, sorting, pagination. |
| [**listPostsSummary()**](PostsApi.md#listPostsSummary) | **GET** /companies/{company_id}/posts/summary | GET /companies/{company_id}/posts/summary |
| [**updatePosts()**](PostsApi.md#updatePosts) | **PATCH** /companies/{company_id}/posts/{post_id} | Update an existing post by ID.      Note: last_edited_at is automatically updated. |


## `createPosts()`

```php
createPosts($company_id, $posts_input, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\CreatePosts200Response
```

POST /companies/{company_id}/posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$posts_input = new \OpenAPI\Client\Model\PostsInput(); // \OpenAPI\Client\Model\PostsInput
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->createPosts($company_id, $posts_input, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **posts_input** | [**\OpenAPI\Client\Model\PostsInput**](../Model/PostsInput.md)|  | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreatePosts200Response**](../Model/CreatePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPosts2()`

```php
createPosts2($company_id, $post_id, $integration_id, $posts_input): \OpenAPI\Client\Model\CreatePosts200Response
```

Publish a post to an external platform via an integration.      Args:         post_id: ID of the post to publish         integration_id: ID of the integration to use (from postgen_integrations)      Returns:         Publication record with external_url and external_post_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post
$integration_id = 'integration_id_example'; // string | Unique identifier for the Integration
$posts_input = new \OpenAPI\Client\Model\PostsInput(); // \OpenAPI\Client\Model\PostsInput

try {
    $result = $apiInstance->createPosts2($company_id, $post_id, $integration_id, $posts_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPosts2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |
| **integration_id** | **string**| Unique identifier for the Integration | |
| **posts_input** | [**\OpenAPI\Client\Model\PostsInput**](../Model/PostsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatePosts200Response**](../Model/CreatePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPostsPublish()`

```php
createPostsPublish($company_id, $post_id, $posts_input): \OpenAPI\Client\Model\CreatePosts200Response
```

Publish a post (make it publicly visible).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post
$posts_input = new \OpenAPI\Client\Model\PostsInput(); // \OpenAPI\Client\Model\PostsInput

try {
    $result = $apiInstance->createPostsPublish($company_id, $post_id, $posts_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPostsPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |
| **posts_input** | [**\OpenAPI\Client\Model\PostsInput**](../Model/PostsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatePosts200Response**](../Model/CreatePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPostsUnpublish()`

```php
createPostsUnpublish($company_id, $post_id, $posts_input): \OpenAPI\Client\Model\CreatePosts200Response
```

Unpublish a post (make it private/draft again).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post
$posts_input = new \OpenAPI\Client\Model\PostsInput(); // \OpenAPI\Client\Model\PostsInput

try {
    $result = $apiInstance->createPostsUnpublish($company_id, $post_id, $posts_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPostsUnpublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |
| **posts_input** | [**\OpenAPI\Client\Model\PostsInput**](../Model/PostsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatePosts200Response**](../Model/CreatePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPostsView()`

```php
createPostsView($company_id, $post_id, $posts_input): \OpenAPI\Client\Model\CreatePosts200Response
```

Increment view count for a post.     Public endpoint (no authentication required).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post
$posts_input = new \OpenAPI\Client\Model\PostsInput(); // \OpenAPI\Client\Model\PostsInput

try {
    $result = $apiInstance->createPostsView($company_id, $post_id, $posts_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPostsView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |
| **posts_input** | [**\OpenAPI\Client\Model\PostsInput**](../Model/PostsInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatePosts200Response**](../Model/CreatePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePosts()`

```php
deletePosts($company_id, $post_id): \OpenAPI\Client\Model\DeletePosts200Response
```

Delete single post by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post

try {
    $result = $apiInstance->deletePosts($company_id, $post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |

### Return type

[**\OpenAPI\Client\Model\DeletePosts200Response**](../Model/DeletePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostsById()`

```php
getPostsById($company_id, $post_id): \OpenAPI\Client\Model\GetPostsById200Response
```

Get single post by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post

try {
    $result = $apiInstance->getPostsById($company_id, $post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPostsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |

### Return type

[**\OpenAPI\Client\Model\GetPostsById200Response**](../Model/GetPostsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostsByIdPublications()`

```php
getPostsByIdPublications($company_id, $post_id): \OpenAPI\Client\Model\GetPostsById200Response
```

Get all publications for a post.     Shows where this post has been published to external platforms.      Returns:         Array of publication records with platform, URL, status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post

try {
    $result = $apiInstance->getPostsByIdPublications($company_id, $post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPostsByIdPublications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |

### Return type

[**\OpenAPI\Client\Model\GetPostsById200Response**](../Model/GetPostsById200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPosts()`

```php
listPosts($company_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListPosts200Response
```

Get a list of all posts for the user's company.     Supports filtering, sorting, pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->listPosts($company_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->listPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPosts200Response**](../Model/ListPosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPostsSummary()`

```php
listPostsSummary($company_id, $page, $limit, $sort_by, $sort_order, $search): \OpenAPI\Client\Model\ListPosts200Response
```

GET /companies/{company_id}/posts/summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->listPostsSummary($company_id, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->listPostsSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **limit** | **int**| Number of items per page | [optional] [default to 20] |
| **sort_by** | **string**| Field to sort by | [optional] |
| **sort_order** | **string**| Sort order (ascending or descending) | [optional] [default to &#39;desc&#39;] |
| **search** | **string**| Search term to filter results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPosts200Response**](../Model/ListPosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePosts()`

```php
updatePosts($company_id, $post_id, $posts_update): \OpenAPI\Client\Model\UpdatePosts200Response
```

Update an existing post by ID.      Note: last_edited_at is automatically updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$post_id = 'post_id_example'; // string | Unique identifier for the Post
$posts_update = new \OpenAPI\Client\Model\PostsUpdate(); // \OpenAPI\Client\Model\PostsUpdate

try {
    $result = $apiInstance->updatePosts($company_id, $post_id, $posts_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->updatePosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Unique identifier for the Company | |
| **post_id** | **string**| Unique identifier for the Post | |
| **posts_update** | [**\OpenAPI\Client\Model\PostsUpdate**](../Model/PostsUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdatePosts200Response**](../Model/UpdatePosts200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
