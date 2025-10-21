#!/bin/bash

# 🚀 Halal Jamm Production Deployment Script
# This script prepares your Laravel application for production deployment

echo "🚀 Starting Halal Jamm Production Deployment..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
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

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    print_error "Please run this script from the Laravel project root directory"
    exit 1
fi

print_status "Laravel project detected"

# 1. Install/Update Dependencies
echo "📦 Installing production dependencies..."
composer install --optimize-autoloader --no-dev --no-interaction
if [ $? -eq 0 ]; then
    print_status "Dependencies installed successfully"
else
    print_error "Failed to install dependencies"
    exit 1
fi

# 2. Generate Application Key (if needed)
if [ -z "$(grep 'APP_KEY=' .env | cut -d '=' -f2)" ] || [ "$(grep 'APP_KEY=' .env | cut -d '=' -f2)" = "" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force
    print_status "Application key generated"
else
    print_status "Application key already exists"
fi

# 3. Run Database Migrations
echo "🗄️  Running database migrations..."
php artisan migrate --force
if [ $? -eq 0 ]; then
    print_status "Database migrations completed"
else
    print_error "Database migration failed"
    exit 1
fi

# 4. Create Storage Symlink
echo "🔗 Creating storage symlink..."
php artisan storage:link
if [ $? -eq 0 ]; then
    print_status "Storage symlink created"
else
    print_warning "Storage symlink may already exist or failed to create"
fi

# 5. Set Proper Permissions
echo "🔐 Setting file permissions..."
chmod -R 755 storage bootstrap/cache
chmod -R 644 storage/app/public/*
if [ $? -eq 0 ]; then
    print_status "File permissions set"
else
    print_warning "Some permission changes may have failed"
fi

# 6. Clear and Cache Configuration
echo "⚡ Optimizing application for production..."

# Clear all caches first
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Then cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

if [ $? -eq 0 ]; then
    print_status "Application optimized for production"
else
    print_error "Failed to optimize application"
    exit 1
fi

# 7. Verify Storage Structure
echo "📁 Verifying storage structure..."
if [ -d "storage/app/public/categories" ] && [ -d "storage/app/public/menus" ] && [ -d "storage/app/public/addons" ]; then
    print_status "Storage directories exist"
else
    print_warning "Creating missing storage directories..."
    mkdir -p storage/app/public/categories
    mkdir -p storage/app/public/menus
    mkdir -p storage/app/public/addons
    print_status "Storage directories created"
fi

# 8. Check .htaccess file
if [ -f "public/.htaccess" ]; then
    print_status ".htaccess file exists"
else
    print_warning ".htaccess file not found in public directory"
    print_warning "Make sure to copy .htaccess from project root to public directory"
fi

# 9. Final Checks
echo "🔍 Running final checks..."

# Check if storage symlink exists
if [ -L "public/storage" ]; then
    print_status "Storage symlink is properly configured"
else
    print_error "Storage symlink is missing - this will cause image issues!"
    print_warning "Run: php artisan storage:link"
fi

# Check if .env file exists
if [ -f ".env" ]; then
    print_status ".env file exists"
    
    # Check critical environment variables
    if grep -q "APP_ENV=production" .env; then
        print_status "Application is set to production mode"
    else
        print_warning "APP_ENV is not set to production"
    fi
    
    if grep -q "APP_DEBUG=false" .env; then
        print_status "Debug mode is disabled"
    else
        print_warning "APP_DEBUG is not set to false"
    fi
else
    print_error ".env file is missing!"
    print_warning "Copy .env.example to .env and configure your settings"
fi

echo ""
echo "🎉 Production deployment completed!"
echo ""
echo "📋 Next Steps:"
echo "1. Update your .env file with production database credentials"
echo "2. Set APP_URL to your domain (e.g., https://yourdomain.com)"
echo "3. Configure your web server to point to the 'public' directory"
echo "4. Test your application thoroughly"
echo ""
echo "🔧 Important Commands for Production:"
echo "• php artisan config:cache    # Cache configuration"
echo "• php artisan route:cache     # Cache routes"
echo "• php artisan view:cache      # Cache views"
echo "• php artisan storage:link    # Create storage symlink"
echo ""
echo "🚨 Security Checklist:"
echo "• Ensure APP_DEBUG=false"
echo "• Set strong database passwords"
echo "• Configure proper file permissions"
echo "• Enable SSL/HTTPS"
echo "• Keep dependencies updated"
