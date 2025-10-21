#!/bin/bash

# 🔧 Simple Laravel Development Server Fix
# This script fixes the development server after moving public files

echo "🔧 Fixing Laravel Development Server (Simple Version)..."

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
echo "🔍 Current Directory Structure:"
echo "📁 $(pwd)"
echo ""

# Check if public directory exists
if [ ! -d "public" ]; then
    print_info "Public directory not found, creating it for development..."
    
    # Create public directory
    mkdir -p public
    print_status "Public directory created"
    
    # Move index.php back to public directory
    if [ -f "index.php" ]; then
        print_info "Moving index.php back to public directory..."
        mv index.php public/
        print_status "index.php moved to public/"
    else
        print_warning "index.php not found in root"
    fi
    
    # Move assets back to public directory
    if [ -d "assets" ]; then
        print_info "Moving assets back to public directory..."
        mv assets public/
        print_status "Assets moved to public/"
    else
        print_warning "Assets directory not found in root"
    fi
    
    # Move .htaccess back to public directory
    if [ -f ".htaccess" ]; then
        print_info "Moving .htaccess back to public directory..."
        mv .htaccess public/
        print_status ".htaccess moved to public/"
    else
        print_warning ".htaccess not found in root"
    fi
    
    # Move any other PHP files (except artisan)
    if [ -f "*.php" ]; then
        for file in *.php; do
            if [ -f "$file" ] && [ "$file" != "artisan" ]; then
                print_info "Moving $file back to public directory..."
                mv "$file" public/
            fi
        done
    fi
    
    print_status "Public directory recreated for development"
else
    print_info "Public directory already exists"
fi

# Create storage symlink if it doesn't exist
if [ ! -L "public/storage" ]; then
    print_info "Creating storage symlink..."
    php artisan storage:link
    if [ $? -eq 0 ]; then
        print_status "Storage symlink created"
    else
        print_warning "Failed to create storage symlink"
    fi
else
    print_status "Storage symlink already exists"
fi

# Final verification
echo ""
echo "🔍 Final Verification..."
echo ""

# Check if key files exist
if [ -f "public/index.php" ]; then
    print_status "public/index.php exists"
else
    print_warning "public/index.php not found"
fi

if [ -d "public/assets" ]; then
    print_status "public/assets directory exists"
else
    print_warning "public/assets directory not found"
fi

if [ -f "artisan" ]; then
    print_status "artisan file exists"
else
    print_warning "artisan file not found"
fi

echo ""
print_status "✅ Development server should now work!"
echo ""
echo "🚀 Now you can run:"
echo "• php artisan serve"
echo "• or: ./start-dev-server.sh"
echo ""
echo "🌐 Your development server will be available at: http://localhost:8000"
