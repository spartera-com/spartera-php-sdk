<?php
/**
 * Simple Spartera API PHP SDK Example
 * 
 * This example demonstrates basic SDK initialization and configuration.
 */

require_once(__DIR__ . '/vendor/autoload.php');

use SparteraApiSdk\Configuration;
use SparteraApiSdk\ApiClient;

function main() {
    echo "🚀 Spartera API PHP SDK Example\n";
    echo str_repeat("=", 40) . "\n";
    
    // Configure the client
    $config = Configuration::getDefaultConfiguration();
    
    // Set API base URL
    $apiBaseUrl = getenv('SPARTERA_API_BASE_URL') ?: 'https://api.spartera.com';
    $config->setHost($apiBaseUrl);
    
    // IMPORTANT: Spartera uses X-API-Key header authentication
    $apiKey = getenv('SPARTERA_API_KEY') ?: 'your-api-key-here';
    $config->setApiKey('X-API-Key', $apiKey);
    
    // Create API client
    $apiClient = new ApiClient($config);
    
    // Get company ID from environment
    $companyId = getenv('SPARTERA_COMPANY_ID') ?: 'your-company-id';
    
    // Check environment variables
    if ($apiKey === 'your-api-key-here') {
        echo "⚠️  Set SPARTERA_API_KEY environment variable with your actual API key\n";
    }
    if ($companyId === 'your-company-id') {
        echo "⚠️  Set SPARTERA_COMPANY_ID environment variable with your company ID\n";
    }
    
    echo "\n";
    echo "Configured client for: " . $apiBaseUrl . "\n";
    echo "Company ID: " . $companyId . "\n";
    echo "API Client created: " . (isset($apiClient) ? 'true' : 'false') . "\n";
    
    echo "\n✅ SDK basic initialization test completed successfully!\n";
    echo "\n📝 To test with real API calls, set your credentials and modify this example\n";
    echo "   export SPARTERA_API_KEY='your-actual-api-key'\n";
    echo "   export SPARTERA_COMPANY_ID='your-actual-company-id'\n";
}

// Run the example
main();
?>
