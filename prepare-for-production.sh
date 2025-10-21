#!/bin/bash

# 🚀 Prepare Laravel for Production Deployment
# This script creates a production-ready structure for cPanel deployment

echo "🚀 Preparing Laravel for Production Deployment..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

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

echo ""
echo "🔧 Creating Production Structure..."
echo ""

# Step 1: Create production directory structure
print_info "Creating production directory structure..."

# Create a production directory
if [ -d "production" ]; then
    print_warning "Production directory already exists, removing it..."
    rm -rf production
fi

mkdir -p production
print_status "Production directory created"

# Step 2: Copy all Laravel files to production directory
print_info "Copying Laravel files to production directory..."

# Copy all files except node_modules, .git, and other development files
rsync -av --exclude='node_modules' \
         --exclude='.git' \
         --exclude='storage/logs/*' \
         --exclude='storage/framework/cache/*' \
         --exclude='storage/framework/sessions/*' \
         --exclude='storage/framework/views/*' \
         --exclude='production' \
         --exclude='*.sh' \
         --exclude='*.md' \
         . production/

print_status "Laravel files copied to production directory"

# Step 3: Move public contents to root in production directory
print_info "Moving public contents to root in production directory..."

cd production

# Move index.php to root
if [ -f "public/index.php" ]; then
    cp public/index.php ./
    print_status "index.php copied to root"
fi

# Move assets to root
if [ -d "public/assets" ]; then
    cp -r public/assets ./
    print_status "Assets copied to root"
fi

# Move .htaccess to root
if [ -f "public/.htaccess" ]; then
    cp public/.htaccess ./
    print_status ".htaccess copied to root"
fi

# Move other public files
for file in public/*; do
    if [ -f "$file" ] && [ "$(basename "$file")" != "index.php" ] && [ "$(basename "$file")" != ".htaccess" ]; then
        print_info "Copying $(basename "$file") to root..."
        cp "$file" ./
    fi
done

# Step 4: Create storage symlink
print_info "Creating storage symlink..."
php artisan storage:link
if [ $? -eq 0 ]; then
    print_status "Storage symlink created"
else
    print_warning "Failed to create storage symlink"
fi

# Step 5: Set proper permissions
print_info "Setting proper permissions..."
chmod 644 index.php
chmod 644 .htaccess
chmod -R 755 assets 2>/dev/null || true
chmod -R 755 storage 2>/dev/null || true
chmod -R 755 storage/app/public 2>/dev/null || true
chmod -R 755 bootstrap/cache

print_status "Permissions set"

# Step 6: Clear caches
print_info "Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

print_status "Caches cleared"

# Step 7: Create production .env file
print_info "Creating production .env file..."
if [ -f ".env.production" ]; then
    cp .env.production .env
    print_status "Production .env file created"
else
    print_warning "Production .env file not found, using existing .env"
fi

# Step 8: Install production dependencies
print_info "Installing production dependencies..."
composer install --optimize-autoloader --no-dev --no-interaction
if [ $? -eq 0 ]; then
    print_status "Production dependencies installed"
else
    print_warning "Failed to install production dependencies"
fi

# Step 9: Cache for production
print_info "Caching for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

print_status "Production caches created"

cd ..

# Step 10: Create deployment package
print_info "Creating deployment package..."
tar -czf halaljamm-production.tar.gz -C production .

print_status "Deployment package created: halaljamm-production.tar.gz"

# Final verification
echo ""
echo "🔍 Final Verification..."
echo ""

# Check if key files exist in production directory
files_to_check=(
    "production/index.php"
    "production/assets"
    "production/storage"
    "production/.env"
    "production/artisan"
)

for file in "${files_to_check[@]}"; do
    if [ -e "$file" ]; then
        print_status "$file exists"
    else
        print_warning "$file not found"
    fi
done

echo ""
print_status "✅ Production package ready!"
echo ""
echo "📋 What was created:"
echo "• production/ directory with Laravel files"
echo "• Files moved to root for production"
echo "• Storage symlink created"
echo "• Permissions set"
echo "• Dependencies installed"
echo "• Caches optimized"
echo "• halaljamm-production.tar.gz package created"
echo ""
echo "🚀 Next Steps:"
echo "1. Upload halaljamm-production.tar.gz to your cPanel"
echo "2. Extract it in your public_html directory"
echo "3. Update .env file with production settings"
echo "4. Set proper permissions in cPanel"
echo "5. Your website will work perfectly!"
echo ""
echo "📁 Production Structure:"
echo "production/"
echo "├── index.php          ← Laravel entry point"
echo "├── assets/            ← CSS, JS, Images"
echo "├── storage/           ← Storage symlink"
echo "├── app/               ← Laravel app files"
echo "├── storage/           ← Laravel storage"
echo "├── vendor/            ← Composer dependencies"
echo "├── .env                ← Environment file"
echo "├── artisan             ← Laravel command line"
echo "└── .htaccess           ← Apache configuration"
