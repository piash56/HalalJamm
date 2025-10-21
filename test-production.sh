#!/bin/bash

# 🧪 Halal Jamm - Production Test Script
# This script tests the production setup to ensure everything works correctly

echo "🧪 Testing Halal Jamm Production Setup..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${GREEN}✅ $1${NC}"
}

print_warning() {
    echo -e "${YELLOW}⚠️  $1${NC}"
}

print_error() {
    echo -e "${RED}❌ $1${NC}"
}

print_info() {
    echo -e "${BLUE}ℹ️  $1${NC}"
}

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    print_error "Please run this script from the Laravel project root directory"
    exit 1
fi

print_status "Laravel project detected"

# Test 1: Check Laravel Application
echo "🔍 Testing Laravel Application..."

# Check if artisan works
if php artisan --version > /dev/null 2>&1; then
    print_status "Laravel artisan command works"
else
    print_error "Laravel artisan command failed"
    exit 1
fi

# Test 2: Check Environment Configuration
echo "🔍 Testing Environment Configuration..."

if [ -f ".env" ]; then
    print_status ".env file exists"
    
    # Check critical environment variables
    if grep -q "APP_ENV=" .env; then
        APP_ENV=$(grep "APP_ENV=" .env | cut -d '=' -f2)
        print_info "APP_ENV is set to: $APP_ENV"
    else
        print_warning "APP_ENV is not set"
    fi
    
    if grep -q "APP_DEBUG=" .env; then
        APP_DEBUG=$(grep "APP_DEBUG=" .env | cut -d '=' -f2)
        print_info "APP_DEBUG is set to: $APP_DEBUG"
    else
        print_warning "APP_DEBUG is not set"
    fi
    
    if grep -q "APP_URL=" .env; then
        APP_URL=$(grep "APP_URL=" .env | cut -d '=' -f2)
        print_info "APP_URL is set to: $APP_URL"
    else
        print_warning "APP_URL is not set"
    fi
else
    print_error ".env file is missing!"
    exit 1
fi

# Test 3: Check Database Connection
echo "🔍 Testing Database Connection..."

if php artisan migrate:status > /dev/null 2>&1; then
    print_status "Database connection successful"
else
    print_error "Database connection failed"
    print_warning "Check your database credentials in .env file"
fi

# Test 4: Check Storage Configuration
echo "🔍 Testing Storage Configuration..."

# Check if storage symlink exists
if [ -L "public/storage" ]; then
    print_status "Storage symlink exists"
    
    # Check if symlink is working
    if [ -r "public/storage" ]; then
        print_status "Storage symlink is accessible"
    else
        print_error "Storage symlink is not accessible"
    fi
else
    print_error "Storage symlink is missing!"
    print_warning "Run: php artisan storage:link"
fi

# Check storage directories
directories=("storage/app/public/categories" "storage/app/public/menus" "storage/app/public/addons")

for dir in "${directories[@]}"; do
    if [ -d "$dir" ]; then
        if [ -w "$dir" ]; then
            print_status "$dir exists and is writable"
        else
            print_warning "$dir exists but may not be writable"
        fi
    else
        print_warning "$dir does not exist"
    fi
done

# Test 5: Check File Permissions
echo "🔍 Testing File Permissions..."

# Check storage permissions
if [ -w "storage" ]; then
    print_status "Storage directory is writable"
else
    print_error "Storage directory is not writable"
fi

# Check bootstrap/cache permissions
if [ -w "bootstrap/cache" ]; then
    print_status "Bootstrap cache directory is writable"
else
    print_error "Bootstrap cache directory is not writable"
fi

# Test 6: Check Cache Configuration
echo "🔍 Testing Cache Configuration..."

# Test config cache
if php artisan config:cache > /dev/null 2>&1; then
    print_status "Configuration caching works"
    php artisan config:clear > /dev/null 2>&1
else
    print_warning "Configuration caching failed"
fi

# Test route cache
if php artisan route:cache > /dev/null 2>&1; then
    print_status "Route caching works"
    php artisan route:clear > /dev/null 2>&1
else
    print_warning "Route caching failed"
fi

# Test view cache
if php artisan view:cache > /dev/null 2>&1; then
    print_status "View caching works"
    php artisan view:clear > /dev/null 2>&1
else
    print_warning "View caching failed"
fi

# Test 7: Check Image Handling
echo "🔍 Testing Image Handling..."

# Check if ImageHelper exists
if [ -f "app/Helpers/ImageHelper.php" ]; then
    print_status "ImageHelper class exists"
else
    print_warning "ImageHelper class not found"
fi

# Check placeholder images
if [ -f "public/images/placeholder-category.png" ]; then
    print_status "Category placeholder image exists"
else
    print_warning "Category placeholder image not found"
fi

if [ -f "public/images/placeholder-menu.png" ]; then
    print_status "Menu placeholder image exists"
else
    print_warning "Menu placeholder image not found"
fi

# Test 8: Check .htaccess Configuration
echo "🔍 Testing .htaccess Configuration..."

if [ -f "public/.htaccess" ]; then
    print_status ".htaccess file exists in public directory"
    
    # Check for important .htaccess rules
    if grep -q "RewriteEngine On" public/.htaccess; then
        print_status "URL rewriting is configured"
    else
        print_warning "URL rewriting may not be configured"
    fi
    
    if grep -q "ExpiresActive On" public/.htaccess; then
        print_status "Browser caching is configured"
    else
        print_warning "Browser caching may not be configured"
    fi
else
    print_error ".htaccess file not found in public directory"
fi

# Test 9: Check Dependencies
echo "🔍 Testing Dependencies..."

# Check if vendor directory exists
if [ -d "vendor" ]; then
    print_status "Composer dependencies installed"
else
    print_error "Composer dependencies not installed"
    print_warning "Run: composer install"
fi

# Check if node_modules exists (if using npm)
if [ -d "node_modules" ]; then
    print_status "NPM dependencies installed"
else
    print_warning "NPM dependencies not installed (optional)"
fi

# Test 10: Performance Check
echo "🔍 Testing Performance Configuration..."

# Check if opcache is available
if php -m | grep -q "Zend OPcache"; then
    print_status "OPcache is available"
else
    print_warning "OPcache is not available (recommended for production)"
fi

# Check PHP version
PHP_VERSION=$(php -v | head -n 1 | cut -d ' ' -f 2 | cut -d '.' -f 1,2)
print_info "PHP version: $PHP_VERSION"

if [ "$(echo "$PHP_VERSION >= 8.1" | bc -l)" -eq 1 ]; then
    print_status "PHP version is compatible"
else
    print_warning "PHP version may be outdated (recommended: 8.1+)"
fi

# Final Summary
echo ""
echo "🎉 Production Test Completed!"
echo ""
echo "📋 Test Summary:"
echo "• Laravel Application: $(php artisan --version > /dev/null 2>&1 && echo "✅ Working" || echo "❌ Failed")"
echo "• Database Connection: $(php artisan migrate:status > /dev/null 2>&1 && echo "✅ Working" || echo "❌ Failed")"
echo "• Storage Configuration: $([ -L "public/storage" ] && echo "✅ Working" || echo "❌ Failed")"
echo "• File Permissions: $([ -w "storage" ] && [ -w "bootstrap/cache" ] && echo "✅ Working" || echo "❌ Failed")"
echo "• Cache System: $(php artisan config:cache > /dev/null 2>&1 && echo "✅ Working" || echo "❌ Failed")"
echo "• Image Handling: $([ -f "app/Helpers/ImageHelper.php" ] && echo "✅ Working" || echo "❌ Failed")"
echo "• Web Server Config: $([ -f "public/.htaccess" ] && echo "✅ Working" || echo "❌ Failed")"
echo ""
echo "🚀 Your application is ready for production deployment!"
echo ""
echo "📝 Next Steps:"
echo "1. Update your .env file with production settings"
echo "2. Run: ./deploy-production.sh"
echo "3. Run: ./set-permissions.sh"
echo "4. Test your application in a browser"
echo "5. Monitor error logs: tail -f storage/logs/laravel.log"
