#!/bin/bash

# 🔧 Move Files to Public Directory for Development
# This script moves the necessary files from root to public directory

echo "🔧 Moving Files to Public Directory for Development..."

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

# Check what files exist in root that should be moved to public
print_info "Checking files in root directory..."

# Move index.php to public
if [ -f "index.php" ]; then
    print_info "Moving index.php to public directory..."
    mv index.php public/
    print_status "index.php moved to public/"
else
    print_warning "index.php not found in root"
fi

# Move assets directory to public
if [ -d "assets" ]; then
    print_info "Moving assets directory to public..."
    mv assets public/
    print_status "Assets moved to public/"
else
    print_warning "Assets directory not found in root"
fi

# Move .htaccess to public
if [ -f ".htaccess" ]; then
    print_info "Moving .htaccess to public directory..."
    mv .htaccess public/
    print_status ".htaccess moved to public/"
else
    print_warning ".htaccess not found in root"
fi

# Move other files that should be in public
if [ -f "robots.txt" ]; then
    print_info "Moving robots.txt to public directory..."
    mv robots.txt public/
    print_status "robots.txt moved to public/"
fi

if [ -f "favicon.ico" ]; then
    print_info "Moving favicon.ico to public directory..."
    mv favicon.ico public/
    print_status "favicon.ico moved to public/"
fi

# Move images directory if it exists
if [ -d "images" ]; then
    print_info "Moving images directory to public..."
    mv images public/
    print_status "Images moved to public/"
fi

# Move fonts directory if it exists
if [ -d "fonts" ]; then
    print_info "Moving fonts directory to public..."
    mv fonts public/
    print_status "Fonts moved to public/"
fi

# Final verification
echo ""
echo "🔍 Final Verification..."
echo ""

# Check if key files exist in public
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

if [ -f "public/.htaccess" ]; then
    print_status "public/.htaccess exists"
else
    print_warning "public/.htaccess not found"
fi

if [ -L "public/storage" ]; then
    print_status "public/storage symlink exists"
else
    print_warning "public/storage symlink not found"
fi

echo ""
print_status "✅ Files moved to public directory!"
echo ""
echo "🚀 Now you can run:"
echo "• php artisan serve"
echo ""
echo "🌐 Your development server will be available at: http://localhost:8000"
echo ""
echo "📁 Public directory now contains:"
ls -la public/
