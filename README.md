# SparteraApiSdk

Auto-generated API documentation for REST services of the Spartera platform


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/SparteraApiSdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Unique identifier for the Company
$api_keys_input = new \OpenAPI\Client\Model\ApiKeysInput(); // \OpenAPI\Client\Model\ApiKeysInput
$page = 1; // int | Page number for pagination
$limit = 20; // int | Number of items per page
$sort_by = 'sort_by_example'; // string | Field to sort by
$sort_order = 'desc'; // string | Sort order (ascending or descending)
$search = 'search_example'; // string | Search term to filter results

try {
    $result = $apiInstance->createApiKeys($company_id, $api_keys_input, $page, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKeys: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.spartera.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**createApiKeys**](docs/Api/APIKeysApi.md#createapikeys) | **POST** /companies/{company_id}/api-keys | Create single API key.     Returns the actual sk_ key (only time it&#39;s exposed) and api_key_id for future operations.
*APIKeysApi* | [**createApiKeysApiKeysRevoke**](docs/Api/APIKeysApi.md#createapikeysapikeysrevoke) | **POST** /companies/{company_id}/api-keys/{api_key_id}/revoke | Explicitly revoke an API key with reason tracking.     This is different from delete as it includes revocation metadata.
*APIKeysApi* | [**deleteApiKeys**](docs/Api/APIKeysApi.md#deleteapikeys) | **DELETE** /companies/{company_id}/api-keys/{api_key_id} | Delete (deactivate) single API key by api_key_id.     Uses the api_key_id returned during creation for clean identification.     Fixed to use correct primary key lookup.
*APIKeysApi* | [**getApiKeysById**](docs/Api/APIKeysApi.md#getapikeysbyid) | **GET** /companies/{company_id}/api-keys/{api_key_id} | Get single API key by ID.     Returns masked API key for security (sk_****1234).
*APIKeysApi* | [**getApiKeysByIdApiKeysStats**](docs/Api/APIKeysApi.md#getapikeysbyidapikeysstats) | **GET** /companies/{company_id}/api-keys/{api_key_id}/stats | Get usage statistics for a specific API key.     Returns usage count, last used date, failed attempts, etc.
*APIKeysApi* | [**listApiKeys**](docs/Api/APIKeysApi.md#listapikeys) | **GET** /companies/{company_id}/api-keys | Get all API keys for a company.     Returns masked API keys for security (sk_****1234).
*APIKeysApi* | [**updateApiKeys**](docs/Api/APIKeysApi.md#updateapikeys) | **PATCH** /companies/{company_id}/api-keys/{api_key_id} | Update an existing API key by ID.     Can update metadata like name, expiration, rate limits, etc.     Cannot update the actual key value (for security).
*AlertsApi* | [**createAlerts**](docs/Api/AlertsApi.md#createalerts) | **POST** /companies/{company_id}/users/{user_id}/alerts | POST /companies/{company_id}/users/{user_id}/alerts
*AlertsApi* | [**deleteAlerts**](docs/Api/AlertsApi.md#deletealerts) | **DELETE** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Delete single alert by ID
*AlertsApi* | [**getAlertsById**](docs/Api/AlertsApi.md#getalertsbyid) | **GET** /companies/{company_id}/users/{user_id}/alerts | Get a list of all alerts for a specific user
*AlertsApi* | [**getAlertsByIdAssetAll**](docs/Api/AlertsApi.md#getalertsbyidassetall) | **GET** /companies/{company_id}/users/{user_id}/alerts/asset/{asset_id}/all | Get all alerts for a specific asset
*AlertsApi* | [**getAlertsByIdUsers**](docs/Api/AlertsApi.md#getalertsbyidusers) | **GET** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Get single alert by ID
*AlertsApi* | [**getAlertsByIdUsersAsset**](docs/Api/AlertsApi.md#getalertsbyidusersasset) | **GET** /companies/{company_id}/users/{user_id}/alerts/asset/{asset_id} | Get all alerts for a specific asset (by user)
*AlertsApi* | [**updateAlerts**](docs/Api/AlertsApi.md#updatealerts) | **PATCH** /companies/{company_id}/users/{user_id}/alerts/{alert_id} | Update an existing alert by ID
*AssetPriceHistoryApi* | [**createAssetPriceHistory**](docs/Api/AssetPriceHistoryApi.md#createassetpricehistory) | **POST** /companies/{company_id}/assets/{asset_id}/prices | Create a new price history record for an asset
*AssetPriceHistoryApi* | [**createAssetPriceHistoryPricesCalculateCredits**](docs/Api/AssetPriceHistoryApi.md#createassetpricehistorypricescalculatecredits) | **POST** /companies/{company_id}/assets/{asset_id}/prices/calculate_credits | Calculate the credit equivalent for a given USD price without saving
*AssetPriceHistoryApi* | [**createAssetPriceHistoryPricesDiscount**](docs/Api/AssetPriceHistoryApi.md#createassetpricehistorypricesdiscount) | **POST** /companies/{company_id}/assets/{asset_id}/prices/discount | POST /companies/{company_id}/assets/{asset_id}/prices/discount
*AssetPriceHistoryApi* | [**deleteAssetPriceHistory**](docs/Api/AssetPriceHistoryApi.md#deleteassetpricehistory) | **DELETE** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Delete single price history record by ID
*AssetPriceHistoryApi* | [**getAssetPriceHistoryById**](docs/Api/AssetPriceHistoryApi.md#getassetpricehistorybyid) | **GET** /companies/{company_id}/assets/{asset_id}/prices | Get all price history records for a specific asset
*AssetPriceHistoryApi* | [**getAssetPriceHistoryByIdAssetsPrices**](docs/Api/AssetPriceHistoryApi.md#getassetpricehistorybyidassetsprices) | **GET** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Get single price history record by ID
*AssetPriceHistoryApi* | [**getAssetPriceHistoryByIdPricesActive**](docs/Api/AssetPriceHistoryApi.md#getassetpricehistorybyidpricesactive) | **GET** /companies/{company_id}/assets/{asset_id}/prices/active | Get the currently active price for an asset
*AssetPriceHistoryApi* | [**updateAssetPriceHistory**](docs/Api/AssetPriceHistoryApi.md#updateassetpricehistory) | **PATCH** /companies/{company_id}/assets/{asset_id}/prices/{aph_id} | Update an existing price history record by ID
*AssetUsecasesApi* | [**getAssetUsecasesById**](docs/Api/AssetUsecasesApi.md#getassetusecasesbyid) | **GET** /asset_usecases/{auc_id} | Get single asset use case by ID
*AssetUsecasesApi* | [**listAssetUsecases**](docs/Api/AssetUsecasesApi.md#listassetusecases) | **GET** /asset_usecases | Get a list of all asset use cases
*AssetsApi* | [**createAssets**](docs/Api/AssetsApi.md#createassets) | **POST** /companies/{company_id}/assets | Create a new asset
*AssetsApi* | [**createAssetsAnalyze**](docs/Api/AssetsApi.md#createassetsanalyze) | **POST** /analyze/{company_handle}/assets/{asset_slug} | Process (analyze) an asset with dynamic rate limiting applied via decorator.
*AssetsApi* | [**createAssetsScanColumn**](docs/Api/AssetsApi.md#createassetsscancolumn) | **POST** /companies/{company_id}/assets/{asset_id}/scan_column | Scan a column in the asset&#39;s table to retrieve distinct values      Request Body:         column (str): Column name to scan         limit (int, optional): Maximum distinct values to return (default 1000, max 5000)      Returns:         Flask Response with scan results
*AssetsApi* | [**createAssetsTest**](docs/Api/AssetsApi.md#createassetstest) | **POST** /companies/{company_id}/assets/{asset_id}/test | POST /companies/{company_id}/assets/{asset_id}/test
*AssetsApi* | [**deleteAssets**](docs/Api/AssetsApi.md#deleteassets) | **DELETE** /companies/{company_id}/assets/{asset_id} | Delete single asset by ID
*AssetsApi* | [**getAssetsById**](docs/Api/AssetsApi.md#getassetsbyid) | **GET** /companies/{company_id}/assets/{asset_id} | Get single asset by ID
*AssetsApi* | [**getAssetsById2**](docs/Api/AssetsApi.md#getassetsbyid2) | **GET** /companies/{company_id}/assets/{asset_id}/statistics | Get statistics for a specific asset (public endpoint)
*AssetsApi* | [**getAssetsByIdAnalyze**](docs/Api/AssetsApi.md#getassetsbyidanalyze) | **GET** /analyze/{company_handle}/assets/{asset_slug} | Process (analyze) an asset with dynamic rate limiting applied via decorator.
*AssetsApi* | [**getAssetsByIdInfoschema**](docs/Api/AssetsApi.md#getassetsbyidinfoschema) | **GET** /companies/{company_id}/assets/{asset_id}/infoschema | Get the information schema for a specific asset&#39;s table
*AssetsApi* | [**getAssetsByIdInfoschemaSave**](docs/Api/AssetsApi.md#getassetsbyidinfoschemasave) | **GET** /companies/{company_id}/assets/{asset_id}/infoschema/save | Retrieve and save an asset&#39;s information schema
*AssetsApi* | [**getAssetsByIdPredictedPrice**](docs/Api/AssetsApi.md#getassetsbyidpredictedprice) | **GET** /companies/{company_id}/assets/{asset_id}/predicted_price | Get AI-predicted pricing for a specific asset
*AssetsApi* | [**getAssetsByIdStatistics**](docs/Api/AssetsApi.md#getassetsbyidstatistics) | **GET** /companies/{company_id}/assets/statistics | Get statistics for all assets the user has access to
*AssetsApi* | [**getAssetsByIdTest**](docs/Api/AssetsApi.md#getassetsbyidtest) | **GET** /companies/{company_id}/assets/{asset_id}/test | GET /companies/{company_id}/assets/{asset_id}/test
*AssetsApi* | [**listAssets**](docs/Api/AssetsApi.md#listassets) | **GET** /companies/{company_id}/assets | Get all assets for a specific company
*AssetsApi* | [**listAssetsSearch**](docs/Api/AssetsApi.md#listassetssearch) | **GET** /companies/{company_id}/assets/search | Search and filter assets with advanced options      Query Parameters:         q: Search query string         category: Filter by category         sport: Filter by sport tag         sort_by: Sort field (name|recent|popular|trending)         limit: Number of results (default 20, max 100)         offset: Offset for pagination         include_recommended: Include recommendations (true/false)         include_schema: Include asset_schema in response (true/false, default false)
*AssetsApi* | [**updateAssets**](docs/Api/AssetsApi.md#updateassets) | **PATCH** /companies/{company_id}/assets/{asset_id} | Update an existing asset by ID
*CloudProvidersApi* | [**getCloudProvidersById**](docs/Api/CloudProvidersApi.md#getcloudprovidersbyid) | **GET** /cloud-providers/{provider_id} | Get single cloud provider by ID
*CloudProvidersApi* | [**listCloudProviders**](docs/Api/CloudProvidersApi.md#listcloudproviders) | **GET** /cloud-providers | Get a list of all cloud providers
*CompaniesApi* | [**getCompaniesById**](docs/Api/CompaniesApi.md#getcompaniesbyid) | **GET** /companies/{company_id} | Get details of the requestor&#39;s own company
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies/{company_id}/requests/plan | Get the total number of requests allocated in the company&#39;s current subscription plan.
*CompaniesApi* | [**listCompaniesAnalyticsAssets**](docs/Api/CompaniesApi.md#listcompaniesanalyticsassets) | **GET** /companies/{company_id}/analytics/assets | Get asset performance analytics.     Query params: start_date, end_date, limit, sort_by, include
*CompaniesApi* | [**listCompaniesAnalyticsCustomers**](docs/Api/CompaniesApi.md#listcompaniesanalyticscustomers) | **GET** /companies/{company_id}/analytics/customers | Get customer analytics including growth and segmentation.     Query params: start_date, end_date, group_by, segment_by
*CompaniesApi* | [**listCompaniesAnalyticsDashboard**](docs/Api/CompaniesApi.md#listcompaniesanalyticsdashboard) | **GET** /companies/{company_id}/analytics/dashboard | Get comprehensive dashboard analytics for seller dashboard.     Query params: start_date, end_date, period (day/week/month/quarter)
*CompaniesApi* | [**listCompaniesAnalyticsMetrics**](docs/Api/CompaniesApi.md#listcompaniesanalyticsmetrics) | **GET** /companies/{company_id}/analytics/metrics | Get summary metrics (counts only). No date params needed — returns all-time totals.     Performance: &lt; 0.1s
*CompaniesApi* | [**listCompaniesAnalyticsSales**](docs/Api/CompaniesApi.md#listcompaniesanalyticssales) | **GET** /companies/{company_id}/analytics/sales | Get sales over time analytics.     Query params: start_date, end_date, group_by (day/week/month/quarter), metrics
*CompaniesApi* | [**listCompaniesObjects**](docs/Api/CompaniesApi.md#listcompaniesobjects) | **GET** /companies/{company_id}/objects | Get all objects (connections, assets) of a single company
*CompaniesApi* | [**listCompaniesRequestsUsage**](docs/Api/CompaniesApi.md#listcompaniesrequestsusage) | **GET** /companies/{company_id}/requests/usage | Get company request usage data for a specific month.
*CompaniesApi* | [**updateCompanies**](docs/Api/CompaniesApi.md#updatecompanies) | **PATCH** /companies/{company_id} | Update an existing company by ID
*ConnectionsApi* | [**createConnections**](docs/Api/ConnectionsApi.md#createconnections) | **POST** /companies/{company_id}/connections | Create a new connection by ID
*ConnectionsApi* | [**deleteConnections**](docs/Api/ConnectionsApi.md#deleteconnections) | **DELETE** /companies/{company_id}/connections/{connection_id} | Delete single connection by ID
*ConnectionsApi* | [**getConnectionsById**](docs/Api/ConnectionsApi.md#getconnectionsbyid) | **GET** /companies/{company_id}/connections/{connection_id} | Get single connection by ID
*ConnectionsApi* | [**getConnectionsById2**](docs/Api/ConnectionsApi.md#getconnectionsbyid2) | **GET** /companies/{company_id}/connections/{connection_id}/test | Test the specified connection
*ConnectionsApi* | [**getConnectionsByIdInfoschema**](docs/Api/ConnectionsApi.md#getconnectionsbyidinfoschema) | **GET** /companies/{company_id}/connections/{connection_id}/infoschema | Retrieve the information schema for the specified connection
*ConnectionsApi* | [**listConnections**](docs/Api/ConnectionsApi.md#listconnections) | **GET** /companies/{company_id}/connections | Get all connections for a specific company
*ConnectionsApi* | [**updateConnections**](docs/Api/ConnectionsApi.md#updateconnections) | **PATCH** /companies/{company_id}/connections/{connection_id} | Update an existing connection by ID
*EndpointsApi* | [**createEndpoints**](docs/Api/EndpointsApi.md#createendpoints) | **POST** /companies/{company_id}/endpoints | Create a new endpoint
*EndpointsApi* | [**createEndpointsKeys**](docs/Api/EndpointsApi.md#createendpointskeys) | **POST** /companies/{company_id}/endpoints/{endpoint_id}/keys | POST /companies/{company_id}/endpoints/{endpoint_id}/keys
*EndpointsApi* | [**deleteEndpoints**](docs/Api/EndpointsApi.md#deleteendpoints) | **DELETE** /companies/{company_id}/endpoints/{endpoint_id} | Delete single endpoint by ID
*EndpointsApi* | [**deleteEndpointsKeys**](docs/Api/EndpointsApi.md#deleteendpointskeys) | **DELETE** /companies/{company_id}/endpoints/{endpoint_id}/keys/{api_key_id} | DELETE /companies/{company_id}/endpoints/{endpoint_id}/keys/{api_key_id}
*EndpointsApi* | [**getEndpointsById**](docs/Api/EndpointsApi.md#getendpointsbyid) | **GET** /companies/{company_id}/endpoints/{endpoint_id} | Get single endpoint by ID
*EndpointsApi* | [**getEndpointsByIdAvailableEndpoints**](docs/Api/EndpointsApi.md#getendpointsbyidavailableendpoints) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/available-endpoints | GET /companies/{company_id}/endpoints/{endpoint_id}/available-endpoints
*EndpointsApi* | [**getEndpointsByIdConnectionsDescribe**](docs/Api/EndpointsApi.md#getendpointsbyidconnectionsdescribe) | **GET** /companies/{company_id}/endpoints/../connections/{connection_id}/describe | Get schema information for a connection      Query parameters:         include_fields: Whether to include field information (default: true)         schemas: Optional comma-separated schemas to include         tables: Optional comma-separated tables to include
*EndpointsApi* | [**getEndpointsByIdExecute**](docs/Api/EndpointsApi.md#getendpointsbyidexecute) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/execute | Execute an endpoint with pagination support.      Customer-facing route that returns paginated data.     Query params: ?start&#x3D;0&amp;limit&#x3D;100
*EndpointsApi* | [**getEndpointsByIdKeys**](docs/Api/EndpointsApi.md#getendpointsbyidkeys) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/keys | GET /companies/{company_id}/endpoints/{endpoint_id}/keys
*EndpointsApi* | [**getEndpointsByIdStats**](docs/Api/EndpointsApi.md#getendpointsbyidstats) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/stats | Get usage statistics for an endpoint      Query parameters:         days: Number of days to analyze (default: 30)
*EndpointsApi* | [**getEndpointsByIdTest**](docs/Api/EndpointsApi.md#getendpointsbyidtest) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/test | Test an endpoint with sample data      Request body (optional):         limit: Number of sample rows to return (default: 10)
*EndpointsApi* | [**getEndpointsByIdUrl**](docs/Api/EndpointsApi.md#getendpointsbyidurl) | **GET** /companies/{company_id}/endpoints/{endpoint_id}/url | GET /companies/{company_id}/endpoints/{endpoint_id}/url
*EndpointsApi* | [**listEndpoints**](docs/Api/EndpointsApi.md#listendpoints) | **GET** /companies/{company_id}/endpoints | Get all endpoints for a specific company with pagination, filtering, and sorting
*EndpointsApi* | [**updateEndpoints**](docs/Api/EndpointsApi.md#updateendpoints) | **PATCH** /companies/{company_id}/endpoints/{endpoint_id} | Update an existing endpoint by ID
*FavoritesApi* | [**createFavorites**](docs/Api/FavoritesApi.md#createfavorites) | **POST** /companies/{company_id}/users/{user_id}/favorites | POST /companies/{company_id}/users/{user_id}/favorites
*FavoritesApi* | [**deleteFavorites**](docs/Api/FavoritesApi.md#deletefavorites) | **DELETE** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Delete single favorite by ID (unfavorite an asset)
*FavoritesApi* | [**getFavoritesById**](docs/Api/FavoritesApi.md#getfavoritesbyid) | **GET** /companies/{company_id}/users/{user_id}/favorites | Get a list of all favorites for a specific user
*FavoritesApi* | [**getFavoritesByIdUsers**](docs/Api/FavoritesApi.md#getfavoritesbyidusers) | **GET** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Get single favorite by ID
*FavoritesApi* | [**getFavoritesByIdUsersCategory**](docs/Api/FavoritesApi.md#getfavoritesbyiduserscategory) | **GET** /companies/{company_id}/users/{user_id}/favorites/category/{category} | Get all favorites for the specified user in a specific category
*FavoritesApi* | [**getFavoritesByIdUsersCheck**](docs/Api/FavoritesApi.md#getfavoritesbyiduserscheck) | **GET** /companies/{company_id}/users/{user_id}/favorites/check/{asset_id} | Check if the specified user has favorited a specific asset
*FavoritesApi* | [**getFavoritesByIdUsersUncategorized**](docs/Api/FavoritesApi.md#getfavoritesbyidusersuncategorized) | **GET** /companies/{company_id}/users/{user_id}/favorites/uncategorized | Get all favorites for the specified user that don&#39;t have a category
*FavoritesApi* | [**updateFavorites**](docs/Api/FavoritesApi.md#updatefavorites) | **PATCH** /companies/{company_id}/users/{user_id}/favorites/{favorite_id} | Update an existing favorite by ID
*IndustriesApi* | [**getIndustriesById**](docs/Api/IndustriesApi.md#getindustriesbyid) | **GET** /industries/{industry_id} | Get single industry by ID
*IndustriesApi* | [**listIndustries**](docs/Api/IndustriesApi.md#listindustries) | **GET** /industries | Get a list of all industries
*IndustriesApi* | [**listIndustriesActive**](docs/Api/IndustriesApi.md#listindustriesactive) | **GET** /industries/active | Get a list of industries that have active marketplace products
*JobFunctionsApi* | [**getJobFunctionsById**](docs/Api/JobFunctionsApi.md#getjobfunctionsbyid) | **GET** /job-functions/{function_id} | Get single job function by ID
*JobFunctionsApi* | [**listJobFunctions**](docs/Api/JobFunctionsApi.md#listjobfunctions) | **GET** /job-functions | Get a list of all job functions
*PostgenIntegrationsApi* | [**createPostgenIntegrations**](docs/Api/PostgenIntegrationsApi.md#createpostgenintegrations) | **POST** /companies/{company_id}/postgen_integrations | POST /companies/{company_id}/postgen_integrations
*PostgenIntegrationsApi* | [**createPostgenIntegrationsTest**](docs/Api/PostgenIntegrationsApi.md#createpostgenintegrationstest) | **POST** /companies/{company_id}/postgen_integrations/test | POST /companies/{company_id}/postgen_integrations/test
*PostgenIntegrationsApi* | [**deletePostgenIntegrations**](docs/Api/PostgenIntegrationsApi.md#deletepostgenintegrations) | **DELETE** /companies/{company_id}/postgen_integrations/{integration_id} | Delete single integration by ID.     Also deletes credentials from GCP Secret Manager.
*PostgenIntegrationsApi* | [**getPostgenIntegrationsById**](docs/Api/PostgenIntegrationsApi.md#getpostgenintegrationsbyid) | **GET** /companies/{company_id}/postgen_integrations/{integration_id} | Get single integration by ID.
*PostgenIntegrationsApi* | [**listPostgenIntegrations**](docs/Api/PostgenIntegrationsApi.md#listpostgenintegrations) | **GET** /companies/{company_id}/postgen_integrations | Get a list of all postgen integrations for the company.     All company users can view integrations.
*PostgenIntegrationsApi* | [**updatePostgenIntegrations**](docs/Api/PostgenIntegrationsApi.md#updatepostgenintegrations) | **PATCH** /companies/{company_id}/postgen_integrations/{integration_id} | Update an existing integration by ID.      Can update credentials, is_active status, etc.
*PostsApi* | [**createPosts**](docs/Api/PostsApi.md#createposts) | **POST** /companies/{company_id}/posts | POST /companies/{company_id}/posts
*PostsApi* | [**createPosts2**](docs/Api/PostsApi.md#createposts2) | **POST** /companies/{company_id}/posts/{post_id}/publish/{integration_id} | Publish a post to an external platform via an integration.      Args:         post_id: ID of the post to publish         integration_id: ID of the integration to use (from postgen_integrations)      Returns:         Publication record with external_url and external_post_id
*PostsApi* | [**createPostsPublish**](docs/Api/PostsApi.md#createpostspublish) | **POST** /companies/{company_id}/posts/{post_id}/publish | Publish a post (make it publicly visible).
*PostsApi* | [**createPostsUnpublish**](docs/Api/PostsApi.md#createpostsunpublish) | **POST** /companies/{company_id}/posts/{post_id}/unpublish | Unpublish a post (make it private/draft again).
*PostsApi* | [**createPostsView**](docs/Api/PostsApi.md#createpostsview) | **POST** /companies/{company_id}/posts/{post_id}/view | Increment view count for a post.     Public endpoint (no authentication required).
*PostsApi* | [**deletePosts**](docs/Api/PostsApi.md#deleteposts) | **DELETE** /companies/{company_id}/posts/{post_id} | Delete single post by ID.
*PostsApi* | [**getPostsById**](docs/Api/PostsApi.md#getpostsbyid) | **GET** /companies/{company_id}/posts/{post_id} | Get single post by ID.
*PostsApi* | [**getPostsByIdPublications**](docs/Api/PostsApi.md#getpostsbyidpublications) | **GET** /companies/{company_id}/posts/{post_id}/publications | Get all publications for a post.     Shows where this post has been published to external platforms.      Returns:         Array of publication records with platform, URL, status
*PostsApi* | [**listPosts**](docs/Api/PostsApi.md#listposts) | **GET** /companies/{company_id}/posts | Get a list of all posts for the user&#39;s company.     Supports filtering, sorting, pagination.
*PostsApi* | [**listPostsSummary**](docs/Api/PostsApi.md#listpostssummary) | **GET** /companies/{company_id}/posts/summary | GET /companies/{company_id}/posts/summary
*PostsApi* | [**updatePosts**](docs/Api/PostsApi.md#updateposts) | **PATCH** /companies/{company_id}/posts/{post_id} | Update an existing post by ID.      Note: last_edited_at is automatically updated.
*StorageEnginesApi* | [**getStorageEnginesById**](docs/Api/StorageEnginesApi.md#getstorageenginesbyid) | **GET** /cloud-providers/{provider_id}/storage-engines/{engine_id} | Get single storage engine by ID
*StorageEnginesApi* | [**listStorageEngines**](docs/Api/StorageEnginesApi.md#liststorageengines) | **GET** /cloud-providers/{provider_id}/storage-engines | Get a list of all storage engines
*UsersApi* | [**createUsers**](docs/Api/UsersApi.md#createusers) | **POST** /companies/{company_id}/users | Create a new user
*UsersApi* | [**createUsersGoogleOauth**](docs/Api/UsersApi.md#createusersgoogleoauth) | **POST** /companies/{company_id}/users/google-oauth | POST /companies/{company_id}/users/google-oauth
*UsersApi* | [**createUsersLogout**](docs/Api/UsersApi.md#createuserslogout) | **POST** /companies/{company_id}/users/logout | Logout current user by revoking their sessions
*UsersApi* | [**deleteUsers**](docs/Api/UsersApi.md#deleteusers) | **DELETE** /companies/{company_id}/users/{user_id} | Delete single user by ID
*UsersApi* | [**getUsersById**](docs/Api/UsersApi.md#getusersbyid) | **GET** /companies/{company_id}/users/{user_id} | Get single user by ID
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /companies/{company_id}/users | Get a list of all users in a company
*UsersApi* | [**listUsersMe**](docs/Api/UsersApi.md#listusersme) | **GET** /me | Get current authenticated user&#39;s profile.
*UsersApi* | [**updateUsers**](docs/Api/UsersApi.md#updateusers) | **PATCH** /companies/{company_id}/users/{user_id} | Update an existing user by ID

## Models

- [Alerts](docs/Model/Alerts.md)
- [AlertsInput](docs/Model/AlertsInput.md)
- [AlertsUpdate](docs/Model/AlertsUpdate.md)
- [ApiKeys](docs/Model/ApiKeys.md)
- [ApiKeysInput](docs/Model/ApiKeysInput.md)
- [ApiKeysUpdate](docs/Model/ApiKeysUpdate.md)
- [AssetPriceHistory](docs/Model/AssetPriceHistory.md)
- [AssetPriceHistoryInput](docs/Model/AssetPriceHistoryInput.md)
- [AssetPriceHistoryUpdate](docs/Model/AssetPriceHistoryUpdate.md)
- [AssetUsecases](docs/Model/AssetUsecases.md)
- [Assets](docs/Model/Assets.md)
- [AssetsInput](docs/Model/AssetsInput.md)
- [AssetsUpdate](docs/Model/AssetsUpdate.md)
- [CloudProviders](docs/Model/CloudProviders.md)
- [CloudProvidersInput](docs/Model/CloudProvidersInput.md)
- [CloudProvidersUpdate](docs/Model/CloudProvidersUpdate.md)
- [Companies](docs/Model/Companies.md)
- [CompaniesInput](docs/Model/CompaniesInput.md)
- [CompaniesUpdate](docs/Model/CompaniesUpdate.md)
- [Connections](docs/Model/Connections.md)
- [ConnectionsInput](docs/Model/ConnectionsInput.md)
- [ConnectionsUpdate](docs/Model/ConnectionsUpdate.md)
- [CreateAlerts200Response](docs/Model/CreateAlerts200Response.md)
- [CreateAlerts200ResponseData](docs/Model/CreateAlerts200ResponseData.md)
- [CreateApiKeys200Response](docs/Model/CreateApiKeys200Response.md)
- [CreateApiKeys200ResponseData](docs/Model/CreateApiKeys200ResponseData.md)
- [CreateAssetPriceHistory200Response](docs/Model/CreateAssetPriceHistory200Response.md)
- [CreateAssetPriceHistory200ResponseData](docs/Model/CreateAssetPriceHistory200ResponseData.md)
- [CreateAssetsAnalyze200Response](docs/Model/CreateAssetsAnalyze200Response.md)
- [CreateAssetsAnalyze200ResponseData](docs/Model/CreateAssetsAnalyze200ResponseData.md)
- [CreateConnections200Response](docs/Model/CreateConnections200Response.md)
- [CreateConnections200ResponseData](docs/Model/CreateConnections200ResponseData.md)
- [CreateEndpoints200Response](docs/Model/CreateEndpoints200Response.md)
- [CreateEndpoints200ResponseData](docs/Model/CreateEndpoints200ResponseData.md)
- [CreateFavorites200Response](docs/Model/CreateFavorites200Response.md)
- [CreateFavorites200ResponseData](docs/Model/CreateFavorites200ResponseData.md)
- [CreatePostgenIntegrations200Response](docs/Model/CreatePostgenIntegrations200Response.md)
- [CreatePostgenIntegrations200ResponseData](docs/Model/CreatePostgenIntegrations200ResponseData.md)
- [CreatePosts200Response](docs/Model/CreatePosts200Response.md)
- [CreatePosts200ResponseData](docs/Model/CreatePosts200ResponseData.md)
- [CreateUsers200Response](docs/Model/CreateUsers200Response.md)
- [CreateUsers200ResponseData](docs/Model/CreateUsers200ResponseData.md)
- [DeleteAlerts200Response](docs/Model/DeleteAlerts200Response.md)
- [DeleteAlerts200ResponseData](docs/Model/DeleteAlerts200ResponseData.md)
- [DeleteApiKeys200Response](docs/Model/DeleteApiKeys200Response.md)
- [DeleteApiKeys200ResponseData](docs/Model/DeleteApiKeys200ResponseData.md)
- [DeleteAssetPriceHistory200Response](docs/Model/DeleteAssetPriceHistory200Response.md)
- [DeleteAssetPriceHistory200ResponseData](docs/Model/DeleteAssetPriceHistory200ResponseData.md)
- [DeleteAssets200Response](docs/Model/DeleteAssets200Response.md)
- [DeleteAssets200ResponseData](docs/Model/DeleteAssets200ResponseData.md)
- [DeleteConnections200Response](docs/Model/DeleteConnections200Response.md)
- [DeleteConnections200ResponseData](docs/Model/DeleteConnections200ResponseData.md)
- [DeleteEndpoints200Response](docs/Model/DeleteEndpoints200Response.md)
- [DeleteEndpoints200ResponseData](docs/Model/DeleteEndpoints200ResponseData.md)
- [DeleteFavorites200Response](docs/Model/DeleteFavorites200Response.md)
- [DeleteFavorites200ResponseData](docs/Model/DeleteFavorites200ResponseData.md)
- [DeletePostgenIntegrations200Response](docs/Model/DeletePostgenIntegrations200Response.md)
- [DeletePostgenIntegrations200ResponseData](docs/Model/DeletePostgenIntegrations200ResponseData.md)
- [DeletePosts200Response](docs/Model/DeletePosts200Response.md)
- [DeletePosts200ResponseData](docs/Model/DeletePosts200ResponseData.md)
- [DeleteUsers200Response](docs/Model/DeleteUsers200Response.md)
- [DeleteUsers200ResponseData](docs/Model/DeleteUsers200ResponseData.md)
- [Endpoints](docs/Model/Endpoints.md)
- [EndpointsInput](docs/Model/EndpointsInput.md)
- [EndpointsUpdate](docs/Model/EndpointsUpdate.md)
- [Error](docs/Model/Error.md)
- [Favorites](docs/Model/Favorites.md)
- [FavoritesInput](docs/Model/FavoritesInput.md)
- [FavoritesUpdate](docs/Model/FavoritesUpdate.md)
- [GetAlertsById200Response](docs/Model/GetAlertsById200Response.md)
- [GetApiKeysById200Response](docs/Model/GetApiKeysById200Response.md)
- [GetAssetPriceHistoryById200Response](docs/Model/GetAssetPriceHistoryById200Response.md)
- [GetAssetUsecasesById200Response](docs/Model/GetAssetUsecasesById200Response.md)
- [GetAssetsByIdAnalyze200Response](docs/Model/GetAssetsByIdAnalyze200Response.md)
- [GetCloudProvidersById200Response](docs/Model/GetCloudProvidersById200Response.md)
- [GetCompaniesById200Response](docs/Model/GetCompaniesById200Response.md)
- [GetConnectionsById200Response](docs/Model/GetConnectionsById200Response.md)
- [GetEndpointsByIdConnectionsDescribe200Response](docs/Model/GetEndpointsByIdConnectionsDescribe200Response.md)
- [GetFavoritesById200Response](docs/Model/GetFavoritesById200Response.md)
- [GetIndustriesById200Response](docs/Model/GetIndustriesById200Response.md)
- [GetJobFunctionsById200Response](docs/Model/GetJobFunctionsById200Response.md)
- [GetPostgenIntegrationsById200Response](docs/Model/GetPostgenIntegrationsById200Response.md)
- [GetPostsById200Response](docs/Model/GetPostsById200Response.md)
- [GetStorageEnginesById200Response](docs/Model/GetStorageEnginesById200Response.md)
- [GetUsersById200Response](docs/Model/GetUsersById200Response.md)
- [Industries](docs/Model/Industries.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [JobFunctions](docs/Model/JobFunctions.md)
- [JobFunctionsInput](docs/Model/JobFunctionsInput.md)
- [JobFunctionsUpdate](docs/Model/JobFunctionsUpdate.md)
- [ListApiKeys200Response](docs/Model/ListApiKeys200Response.md)
- [ListAssetUsecases200Response](docs/Model/ListAssetUsecases200Response.md)
- [ListAssets200Response](docs/Model/ListAssets200Response.md)
- [ListCloudProviders200Response](docs/Model/ListCloudProviders200Response.md)
- [ListCompaniesAnalyticsAssets200Response](docs/Model/ListCompaniesAnalyticsAssets200Response.md)
- [ListConnections200Response](docs/Model/ListConnections200Response.md)
- [ListEndpoints200Response](docs/Model/ListEndpoints200Response.md)
- [ListIndustries200Response](docs/Model/ListIndustries200Response.md)
- [ListJobFunctions200Response](docs/Model/ListJobFunctions200Response.md)
- [ListPostgenIntegrations200Response](docs/Model/ListPostgenIntegrations200Response.md)
- [ListPosts200Response](docs/Model/ListPosts200Response.md)
- [ListStorageEngines200Response](docs/Model/ListStorageEngines200Response.md)
- [ListUsers200Response](docs/Model/ListUsers200Response.md)
- [PostPublications](docs/Model/PostPublications.md)
- [PostPublicationsInput](docs/Model/PostPublicationsInput.md)
- [PostPublicationsUpdate](docs/Model/PostPublicationsUpdate.md)
- [PostgenIntegrations](docs/Model/PostgenIntegrations.md)
- [PostgenIntegrationsInput](docs/Model/PostgenIntegrationsInput.md)
- [PostgenIntegrationsUpdate](docs/Model/PostgenIntegrationsUpdate.md)
- [Posts](docs/Model/Posts.md)
- [PostsInput](docs/Model/PostsInput.md)
- [PostsUpdate](docs/Model/PostsUpdate.md)
- [StorageEngines](docs/Model/StorageEngines.md)
- [UpdateAlerts200Response](docs/Model/UpdateAlerts200Response.md)
- [UpdateAlerts200ResponseData](docs/Model/UpdateAlerts200ResponseData.md)
- [UpdateApiKeys200Response](docs/Model/UpdateApiKeys200Response.md)
- [UpdateApiKeys200ResponseData](docs/Model/UpdateApiKeys200ResponseData.md)
- [UpdateAssetPriceHistory200Response](docs/Model/UpdateAssetPriceHistory200Response.md)
- [UpdateAssetPriceHistory200ResponseData](docs/Model/UpdateAssetPriceHistory200ResponseData.md)
- [UpdateAssets200Response](docs/Model/UpdateAssets200Response.md)
- [UpdateAssets200ResponseData](docs/Model/UpdateAssets200ResponseData.md)
- [UpdateCompanies200Response](docs/Model/UpdateCompanies200Response.md)
- [UpdateCompanies200ResponseData](docs/Model/UpdateCompanies200ResponseData.md)
- [UpdateConnections200Response](docs/Model/UpdateConnections200Response.md)
- [UpdateConnections200ResponseData](docs/Model/UpdateConnections200ResponseData.md)
- [UpdateEndpoints200Response](docs/Model/UpdateEndpoints200Response.md)
- [UpdateEndpoints200ResponseData](docs/Model/UpdateEndpoints200ResponseData.md)
- [UpdateFavorites200Response](docs/Model/UpdateFavorites200Response.md)
- [UpdateFavorites200ResponseData](docs/Model/UpdateFavorites200ResponseData.md)
- [UpdatePostgenIntegrations200Response](docs/Model/UpdatePostgenIntegrations200Response.md)
- [UpdatePostgenIntegrations200ResponseData](docs/Model/UpdatePostgenIntegrations200ResponseData.md)
- [UpdatePosts200Response](docs/Model/UpdatePosts200Response.md)
- [UpdatePosts200ResponseData](docs/Model/UpdatePosts200ResponseData.md)
- [UpdateUsers200Response](docs/Model/UpdateUsers200Response.md)
- [UpdateUsers200ResponseData](docs/Model/UpdateUsers200ResponseData.md)
- [Users](docs/Model/Users.md)
- [UsersInput](docs/Model/UsersInput.md)
- [UsersUpdate](docs/Model/UsersUpdate.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@spartera.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.25.0`
    - Generator version: `7.21.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
