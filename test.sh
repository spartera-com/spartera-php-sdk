#!/bin/bash
# Test script for PHP SDK

echo "🧪 Testing PHP SDK..."

# Check if composer is installed
if ! command -v composer &> /dev/null; then
    echo "❌ Composer is not installed. Please install it first:"
    echo "   https://getcomposer.org/download/"
    exit 1
fi

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "❌ PHP is not installed. Please install PHP 7.4 or higher."
    exit 1
fi

# Install dependencies
echo "Installing dependencies..."
composer install --quiet

if [ $? -eq 0 ]; then
    echo "✅ Dependencies installed successfully"
    
    # Check PHP syntax
    echo "Checking PHP syntax..."
    php -l example.php > /dev/null
    
    if [ $? -eq 0 ]; then
        echo "✅ PHP syntax check passed"
        echo "📝 To test with real API calls:"
        echo "   export SPARTERA_API_KEY='your-api-key'"
        echo "   export SPARTERA_COMPANY_ID='your-company-id'"
        echo "   php example.php"
    else
        echo "❌ PHP syntax check failed"
        exit 1
    fi
else
    echo "❌ Dependencies installation failed"
    exit 1
fi
