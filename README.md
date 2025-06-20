# PHP SDK Documentation

## Overview
The PHP SDK for Spartera API provides a convenient way to interact with the Spartera platform from PHP applications.

**Install:** `composer require spartera/api-sdk`

## Requirements
- PHP 7.4 or higher
- Composer

## 🚀 Sell Your First Data Product in 4 API Calls

Transform your data into revenue in under 5 minutes! Here's how to create and sell a data product on the Spartera marketplace:

```php
<?php
require_once 'vendor/autoload.php';

use SparteraApiSdk\Configuration;
use SparteraApiSdk\ApiClient;
use SparteraApiSdk\Api\CloudProvidersApi;
use SparteraApiSdk\Api\ConnectionsApi;
use SparteraApiSdk\Api\AssetsApi;
use SparteraApiSdk\Api\AssetPriceHistoryApi;
use SparteraApiSdk\Model\Connection;
use SparteraApiSdk\Model\Asset;
use SparteraApiSdk\Model\Assetpricehistory;

// Configure client
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://api.spartera.com');
$config->setApiKey('X-API-Key', 'your-api-key-here');

$apiClient = new ApiClient($config);

const COMPANY_ID = 'your-company-id';
const USER_ID = 'your-user-id';

function sellDataProduct($apiClient) {
    try {
        // Step 1: Discover available data platforms
        echo "🔍 Step 1: Discovering available platforms...\n";
        $cloudProvidersApi = new CloudProvidersApi($apiClient);
        
        $engines = $cloudProvidersApi->cloudProvidersGet();
        $bigqueryEngineId = 1; // BigQuery engine ID
        echo "✅ Found " . count($engines) . " supported platforms\n";

        // Step 2: Create a data connection (with credentials in one call!)
        echo "🔗 Step 2: Creating BigQuery connection...\n";
        $connectionsApi = new ConnectionsApi($apiClient);
        
        // Your BigQuery service account JSON (replace with your actual credentials)
        $serviceAccountJson = [
            'type' => 'service_account',
            'project_id' => 'your-project-id',
            'private_key_id' => 'key-id',
            'private_key' => "-----BEGIN PRIVATE KEY-----\nYOUR_PRIVATE_KEY\n-----END PRIVATE KEY-----\n",
            'client_email' => 'your-service@your-project.iam.gserviceaccount.com',
            'client_id' => 'client-id',
            'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
            'token_uri' => 'https://oauth2.googleapis.com/token'
        ];

        $connectionData = new Connection([
            'company_id' => COMPANY_ID,
            'user_id' => USER_ID,
            'engine_id' => $bigqueryEngineId,
            'name' => 'My BigQuery Data Warehouse',
            'description' => 'Connection to our company\'s analytics data',
            'visibility' => 'PRIVATE',
            'credential_type' => 'SERVICE_ACCOUNT',
            'credentials' => json_encode($serviceAccountJson),
            'verified_usage_ability' => true // Legal compliance - you have rights to this data
        ]);

        $connection = $connectionsApi->companiesCompanyIdConnectionsPost(COMPANY_ID, $connectionData);
        $connectionId = $connection->getConnectionId();
        echo "✅ Created connection: {$connectionId}\n";

        // Step 3: Create a marketplace asset
        echo "📊 Step 3: Creating marketplace asset...\n";
        $assetsApi = new AssetsApi($apiClient);

        $assetData = new Asset([
            'name' => 'Average Temperature Analytics',
            'description' => 'Real-time weather temperature analytics from our IoT sensors across major cities',
            'company_id' => COMPANY_ID,
            'connection_id' => $connectionId,
            'asset_type' => 'CALCULATION',
            'sql_logic' => 'SELECT AVERAGE(temperature) AS avg_temp, city, COUNT(*) AS readings FROM `your-project.weather.sensor_data` WHERE timestamp >= TIMESTAMP_SUB(CURRENT_TIMESTAMP(), INTERVAL 24 HOUR) GROUP BY city ORDER BY avg_temp DESC',
            'sell_in_marketplace' => true, // 🔥 This makes it available for purchase!
            'source' => 'MANUAL',
            'visibility' => 'PUBLIC'
        ]);

        $asset = $assetsApi->companiesCompanyIdAssetsPost(COMPANY_ID, $assetData);
        $assetId = $asset->getAssetId();
        echo "✅ Created marketplace asset: {$assetId}\n";

        // Step 4: Set your price and start earning!
        echo "💰 Step 4: Setting price...\n";
        $pricingApi = new AssetPriceHistoryApi($apiClient);

        $priceData = new Assetpricehistory([
            'price_usd' => 2.00 // $2.00 per analysis (credits calculated automatically)
        ]);

        $price = $pricingApi->companiesCompanyIdAssetsAssetIdPricesPost(COMPANY_ID, $assetId, $priceData);
        echo "✅ Price set: $" . $price->getPriceUsd() . " (≈" . $price->getPriceCredits() . " credits)\n";

        echo "\n🎉 SUCCESS! Your data product is now live on the Spartera marketplace!\n";
        echo "📈 Asset URL: https://marketplace.spartera.com/assets/{$assetId}\n";
        echo "💡 Customers can now discover and purchase your analytics!\n";
        
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
        throw $e;
    }
}

// Run the function
sellDataProduct($apiClient);
?>
```

**That's it!** You're now selling data analytics. Every time someone runs your analysis, you earn money! 

### 🎯 What You Just Built
- **Data Connection**: Secure link to your BigQuery warehouse
- **Analytics Product**: Temperature analysis that buyers can purchase
- **Marketplace Listing**: Your product is discoverable by thousands of potential customers
- **Automated Pricing**: Credits are calculated automatically based on your USD price

### 💰 Revenue Model
- You set the price ($2.00 in this example)
- Customers pay in credits (auto-converted)
- You earn revenue each time someone uses your analytics
- Spartera handles billing, payments, and customer support

---

## 📚 Detailed Documentation

### Authentication

Get your API key from the [Spartera Dashboard](https://app.spartera.com/settings/api-keys):

```php
<?php
require_once 'vendor/autoload.php';

use SparteraApiSdk\Configuration;
use SparteraApiSdk\ApiClient;

// Option 1: Direct configuration
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://api.spartera.com');
$config->setApiKey('X-API-Key', 'your-api-key-here');

// Option 2: Environment variables (recommended)
$_ENV['SPARTERA_API_KEY'] = 'your-api-key';
$_ENV['SPARTERA_COMPANY_ID'] = 'your-company-id';

$config = Configuration::getDefaultConfiguration();
$config->setHost('https://api.spartera.com');
$config->setApiKey('X-API-Key', $_ENV['SPARTERA_API_KEY']);

$apiClient = new ApiClient($config);
?>
```

### Environment Variables

```bash
export SPARTERA_API_KEY="your-api-key"
export SPARTERA_COMPANY_ID="your-company-id"
export SPARTERA_API_BASE_URL="https://api.spartera.com"
```

### Connection Types

Create connections to different data platforms:

```php
use SparteraApiSdk\Model\Connection;

// BigQuery
$bigqueryCredentials = [
    'type' => 'service_account',
    'project_id' => 'your-project',
    // ... your service account JSON
];

// Snowflake
$snowflakeConnection = new Connection([
    'credential_type' => 'USERNAME_PASSWORD',
    'username' => 'your-username',
    'password' => 'your-password'
]);

// API Data Source
$apiConnection = new Connection([
    'credential_type' => 'API_KEY',
    'api_endpoint' => 'https://api.yourcompany.com/data',
    'api_key_param' => 'x-api-key',
    'credentials' => 'your-api-key-value'
]);
```

### Asset Types

Create different types of marketplace products:

```php
use SparteraApiSdk\Model\Asset;

// SQL-based Analytics
$calculationAsset = new Asset([
    'asset_type' => 'CALCULATION',
    'sql_logic' => 'SELECT COUNT(*) as total_sales, AVG(amount) as avg_order FROM sales WHERE date >= CURRENT_DATE()'
]);

// Visualization/Dashboard
$visualizationAsset = new Asset([
    'asset_type' => 'VISUALIZATION',
    'viz_chart_type' => 'BAR',
    'viz_dep_var_col_name' => 'sales_amount',
    'viz_indep_var_col_name' => 'month'
]);
```

### Pricing Strategies

Set different pricing models:

```php
use SparteraApiSdk\Model\Assetpricehistory;

// Fixed price per analysis
$basicPricing = new Assetpricehistory(['price_usd' => 1.50]);

// Premium analytics
$premiumPricing = new Assetpricehistory(['price_usd' => 10.00]);

// Bulk discount with sales
$salePricing = new Assetpricehistory([
    'price_usd' => 5.00,
    'discount_percentage' => 20.0,
    'sale_start_date' => '2024-01-01T00:00:00Z',
    'sale_end_date' => '2024-01-31T23:59:59Z'
]);
```

### Marketplace Management

Manage your products after launch:

```php
// Update asset details
$updateData = new Asset([
    'description' => 'Updated description with new features'
]);
$assetsApi->companiesCompanyIdAssetsAssetIdPatch(COMPANY_ID, $assetId, $updateData);

// Change pricing
$newPrice = new Assetpricehistory(['price_usd' => 3.00]);
$pricingApi->companiesCompanyIdAssetsAssetIdPricesPost(COMPANY_ID, $assetId, $newPrice);

// Remove from marketplace (but keep private)
$marketplaceUpdate = new Asset(['sell_in_marketplace' => false]);
$assetsApi->companiesCompanyIdAssetsAssetIdPatch(COMPANY_ID, $assetId, $marketplaceUpdate);

// Get sales analytics
$analytics = $companiesApi->companiesCompanyIdAnalyticsSalesGet(COMPANY_ID);
echo "Total revenue: $" . $analytics->getTotalRevenue();
```

### Error Handling

```php
use SparteraApiSdk\ApiException;

try {
    $asset = $assetsApi->companiesCompanyIdAssetsPost(COMPANY_ID, $assetData);
} catch (ApiException $e) {
    echo "API Error: " . $e->getMessage() . "\n";
    echo "Status: " . $e->getCode() . "\n";
    echo "Response: " . $e->getResponseBody() . "\n";
    
    // Handle specific errors
    switch ($e->getCode()) {
        case 400:
            echo "Check your asset data format\n";
            break;
        case 401:
            echo "Check your API key\n";
            break;
        case 403:
            echo "Check your permissions\n";
            break;
        case 404:
            echo "Check your IDs\n";
            break;
        default:
            echo "HTTP " . $e->getCode() . ": " . $e->getMessage() . "\n";
    }
    
    throw $e;
}
```

### Advanced Features

```php
// Batch operations
$connectionIds = [];
$platforms = ['bigquery', 'snowflake', 'redshift'];

foreach ($platforms as $platform) {
    $conn = $connectionsApi->companiesCompanyIdConnectionsPost(COMPANY_ID, $platformConfig);
    $connectionIds[] = $conn->getConnectionId();
}

// Asset recommendations
$recommendations = $assetsApi->companiesCompanyIdAssetsAssetIdRecommendationsGet(
    COMPANY_ID, 
    $assetId, 
    10  // limit
);

// Performance analytics
$performance = $companiesApi->companiesCompanyIdAnalyticsAssetsGet(
    COMPANY_ID,
    '2024-01-01',  // start_date
    '2024-12-31'   // end_date
);
```

### Laravel Integration

For Laravel applications:

```php
// config/services.php
'spartera' => [
    'api_url' => env('SPARTERA_API_URL', 'https://api.spartera.com'),
    'api_key' => env('SPARTERA_API_KEY'),
],

// app/Services/SparteraService.php
<?php

namespace App\Services;

use SparteraApiSdk\Configuration;
use SparteraApiSdk\ApiClient;
use SparteraApiSdk\Api\CompaniesApi;
use SparteraApiSdk\Api\AssetsApi;
use SparteraApiSdk\ApiException;
use Illuminate\Support\Facades\Log;

class SparteraService
{
    private $apiClient;
    private $companiesApi;
    private $assetsApi;
    
    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration();
        $config->setHost(config('services.spartera.api_url'));
        $config->setApiKey('X-API-Key', config('services.spartera.api_key'));
        
        $this->apiClient = new ApiClient($config);
        $this->companiesApi = new CompaniesApi($this->apiClient);
        $this->assetsApi = new AssetsApi($this->apiClient);
    }
    
    public function getCompany($companyId)
    {
        try {
            return $this->companiesApi->companiesCompanyIdGet($companyId);
        } catch (ApiException $e) {
            Log::error('Spartera API Error: ' . $e->getMessage());
            return null;
        }
    }
    
    public function getAssets($companyId)
    {
        try {
            return $this->assetsApi->companiesCompanyIdAssetsGet($companyId);
        } catch (ApiException $e) {
            Log::error('Spartera API Error: ' . $e->getMessage());
            return [];
        }
    }
}

// Usage in controllers
class AssetController extends Controller
{
    private $sparteraService;
    
    public function __construct(SparteraService $sparteraService)
    {
        $this->sparteraService = $sparteraService;
    }
    
    public function index($companyId)
    {
        $company = $this->sparteraService->getCompany($companyId);
        $assets = $this->sparteraService->getAssets($companyId);
        
        return view('assets.index', compact('company', 'assets'));
    }
}
```

### WordPress Integration

For WordPress plugins:

```php
// spartera-plugin.php
<?php
/*
Plugin Name: Spartera Integration
Description: Integrate Spartera API with WordPress
Version: 1.0.0
*/

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

use SparteraApiSdk\Configuration;
use SparteraApiSdk\ApiClient;
use SparteraApiSdk\Api\AssetsApi;

class SparteraPlugin {
    private $apiClient;
    private $assetsApi;
    
    public function __construct() {
        add_action('init', [$this, 'init']);
        add_shortcode('spartera_assets', [$this, 'display_assets_shortcode']);
    }
    
    public function init() {
        $config = Configuration::getDefaultConfiguration();
        $config->setHost('https://api.spartera.com');
        $config->setApiKey('X-API-Key', get_option('spartera_api_key'));
        
        $this->apiClient = new ApiClient($config);
        $this->assetsApi = new AssetsApi($this->apiClient);
    }
    
    public function display_assets_shortcode($atts) {
        $atts = shortcode_atts([
            'company_id' => get_option('spartera_company_id')
        ], $atts);
        
        try {
            $assets = $this->assetsApi->companiesCompanyIdAssetsGet($atts['company_id']);
            
            $output = '<div class="spartera-assets">';
            foreach ($assets as $asset) {
                $output .= '<div class="asset">';
                $output .= '<h3>' . esc_html($asset->getName()) . '</h3>';
                $output .= '<p>' . esc_html($asset->getDescription()) . '</p>';
                $output .= '</div>';
            }
            $output .= '</div>';
            
            return $output;
        } catch (Exception $e) {
            return '<p>Error loading assets: ' . esc_html($e->getMessage()) . '</p>';
        }
    }
}

new SparteraPlugin();
```

## Package Manager
- **Platform**: Packagist/Composer
- **Install**: `composer require spartera/api-sdk`
- **Import**: `use SparteraApiSdk\ApiClient;`

## Publishing
1. Tag: `git tag v1.0.0`
2. Push: `git push origin v1.0.0`
3. Submit to Packagist (first time only)
4. Install: `composer require spartera/api-sdk`