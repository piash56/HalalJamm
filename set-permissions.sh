#!/bin/bash

# 🔐 Halal Jamm - Production Permissions Script
# This script sets proper file permissions for production deployment

echo "🔐 Setting Production Permissions for Halal Jamm..."

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

# 1. Set directory permissions (755)
echo "📁 Setting directory permissions..."
find . -type d -exec chmod 755 {} \;
if [ $? -eq 0 ]; then
    print_status "Directory permissions set to 755"
else
    print_warning "Some directory permissions may have failed"
fi

# 2. Set file permissions (644)
echo "📄 Setting file permissions..."
find . -type f -exec chmod 644 {} \;
if [ $? -eq 0 ]; then
    print_status "File permissions set to 644"
else
    print_warning "Some file permissions may have failed"
fi

# 3. Set special permissions for storage and cache directories
echo "🗄️  Setting storage and cache permissions..."
chmod -R 775 storage bootstrap/cache
if [ $? -eq 0 ]; then
    print_status "Storage and cache permissions set to 775"
else
    print_warning "Storage/cache permissions may have failed"
fi

# 4. Set executable permissions for scripts
echo "🔧 Setting executable permissions..."
chmod +x artisan
chmod +x deploy-production.sh
chmod +x set-permissions.sh
if [ $? -eq 0 ]; then
    print_status "Script permissions set"
else
    print_warning "Some script permissions may have failed"
fi

# 5. Set specific permissions for storage subdirectories
echo "📂 Setting storage subdirectory permissions..."
if [ -d "storage/app/public" ]; then
    chmod -R 775 storage/app/public
    print_status "Storage app/public permissions set"
fi

if [ -d "storage/logs" ]; then
    chmod -R 775 storage/logs
    print_status "Storage logs permissions set"
fi

if [ -d "storage/framework" ]; then
    chmod -R 775 storage/framework
    print_status "Storage framework permissions set"
fi

# 6. Ensure storage symlink has correct permissions
if [ -L "public/storage" ]; then
    chmod 755 public/storage
    print_status "Storage symlink permissions set"
else
    print_warning "Storage symlink not found - run: php artisan storage:link"
fi

# 7. Set permissions for .htaccess files
if [ -f ".htaccess" ]; then
    chmod 644 .htaccess
    print_status ".htaccess permissions set"
fi

if [ -f "public/.htaccess" ]; then
    chmod 644 public/.htaccess
    print_status "public/.htaccess permissions set"
fi

# 8. Verify critical directories exist and have correct permissions
echo "🔍 Verifying critical directories..."

directories=("storage/app/public/categories" "storage/app/public/menus" "storage/app/public/addons" "storage/logs" "storage/framework/cache" "storage/framework/sessions" "storage/framework/views" "bootstrap/cache")

for dir in "${directories[@]}"; do
    if [ -d "$dir" ]; then
        if [ -w "$dir" ]; then
            print_status "$dir exists and is writable"
        else
            print_warning "$dir exists but may not be writable"
            chmod 775 "$dir"
        fi
    else
        print_warning "$dir does not exist - creating..."
        mkdir -p "$dir"
        chmod 775 "$dir"
        print_status "$dir created with proper permissions"
    fi
done

# 9. Final permission check
echo "🔍 Running final permission checks..."

# Check if storage is writable
if [ -w "storage" ]; then
    print_status "Storage directory is writable"
else
    print_error "Storage directory is not writable!"
    chmod 775 storage
fi

# Check if bootstrap/cache is writable
if [ -w "bootstrap/cache" ]; then
    print_status "Bootstrap cache directory is writable"
else
    print_error "Bootstrap cache directory is not writable!"
    chmod 775 bootstrap/cache
fi

# Check if public/storage symlink exists and is accessible
if [ -L "public/storage" ] && [ -r "public/storage" ]; then
    print_status "Storage symlink is properly configured and accessible"
else
    print_error "Storage symlink is missing or not accessible!"
    print_warning "Run: php artisan storage:link"
fi

echo ""
echo "🎉 Permission setup completed!"
echo ""
echo "📋 Permission Summary:"
echo "• Directories: 755 (rwxr-xr-x)"
echo "• Files: 644 (rw-r--r--)"
echo "• Storage: 775 (rwxrwxr-x)"
echo "• Cache: 775 (rwxrwxr-x)"
echo ""
echo "🔧 If you encounter permission issues:"
echo "• Run: sudo chown -R www-data:www-data storage bootstrap/cache"
echo "• Run: sudo chmod -R 775 storage bootstrap/cache"
echo ""
echo "🚨 Security Notes:"
echo "• Never set 777 permissions in production"
echo "• Use proper user/group ownership"
echo "• Regularly audit file permissions"
