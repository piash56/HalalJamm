#!/bin/bash

# 🔧 Halal Jamm - Fix Development Server After Moving Public Files
# This script creates a proper development setup while maintaining production structure

echo "🔧 Fixing Laravel Development Server..."

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

echo ""
echo "🔍 Current Directory Structure:"
echo "📁 $(pwd)"
echo ""

# Check if public directory exists
if [ ! -d "public" ]; then
    print_info "Public directory not found, creating it for development..."
    
    # Create public directory
    mkdir -p public
    
    # Move files back to public directory for development
    if [ -f "index.php" ]; then
        print_info "Moving index.php back to public directory..."
        mv index.php public/
        print_status "index.php moved to public/"
    fi
    
    if [ -d "assets" ]; then
        print_info "Moving assets back to public directory..."
        mv assets public/
        print_status "Assets moved to public/"
    fi
    
    if [ -f ".htaccess" ]; then
        print_info "Moving .htaccess back to public directory..."
        mv .htaccess public/
        print_status ".htaccess moved to public/"
    fi
    
    # Move any other files that should be in public
    for file in *.php *.css *.js *.png *.jpg *.jpeg *.gif *.svg; do
        if [ -f "$file" ] && [ "$file" != "artisan" ] && [ "$file" != "composer.json" ] && [ "$file" != "composer.lock" ]; then
            print_info "Moving $file back to public directory..."
            mv "$file" public/
        fi
    done 2>/dev/null || true
    
    print_status "Public directory recreated for development"
else
    print_info "Public directory already exists"
fi

# Create a production deployment script
print_info "Creating production deployment script..."

cat > deploy-to-production.sh << 'EOF'
#!/bin/bash

# 🚀 Deploy Laravel to Production (cPanel)
# This script prepares your Laravel app for production deployment

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
echo "🔧 Preparing for Production Deployment..."
echo ""

# Step 1: Create production structure
print_info "Creating production file structure..."

# Move public contents to root for production
if [ -d "public" ]; then
    print_info "Moving public contents to root for production..."
    
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
    
    # Move any other files from public
    for file in public/*; do
        if [ -f "$file" ] && [ "$(basename "$file")" != "index.php" ] && [ "$(basename "$file")" != ".htaccess" ]; then
            print_info "Copying $(basename "$file") to root..."
            cp "$file" ./
        fi
    done
    
    print_status "Production structure created"
fi

# Step 2: Create storage symlink
print_info "Creating storage symlink..."
php artisan storage:link
print_status "Storage symlink created"

# Step 3: Set proper permissions
print_info "Setting proper permissions..."
chmod 644 index.php
chmod 644 .htaccess
chmod -R 755 assets 2>/dev/null || true
chmod -R 755 storage 2>/dev/null || true
chmod -R 755 storage/app/public 2>/dev/null || true
chmod -R 755 bootstrap/cache

print_status "Permissions set"

# Step 4: Clear caches
print_info "Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

print_status "Caches cleared"

# Step 5: Create deployment package
print_info "Creating deployment package..."
tar -czf halaljamm-production.tar.gz \
  --exclude='node_modules' \
  --exclude='.git' \
  --exclude='storage/logs/*' \
  --exclude='storage/framework/cache/*' \
  --exclude='storage/framework/sessions/*' \
  --exclude='storage/framework/views/*' \
  --exclude='.env' \
  --exclude='public' \
  .

print_status "Deployment package created: halaljamm-production.tar.gz"

echo ""
print_status "✅ Production deployment package ready!"
echo ""
echo "📋 Next Steps:"
echo "1. Upload halaljamm-production.tar.gz to your cPanel"
echo "2. Extract it in your public_html directory"
echo "3. Copy your production .env file"
echo "4. Set proper permissions in cPanel"
echo "5. Your website will work correctly!"
echo ""
echo "🌐 Your Laravel app is now ready for production deployment!"
EOF

chmod +x deploy-to-production.sh
print_status "Production deployment script created"

# Create a development server script
print_info "Creating development server script..."

cat > start-dev-server.sh << 'EOF'
#!/bin/bash

# 🚀 Start Laravel Development Server
# This script starts the Laravel development server

echo "🚀 Starting Laravel Development Server..."

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo "❌ Please run this script from the Laravel project root directory"
    exit 1
fi

# Check if public directory exists
if [ ! -d "public" ]; then
    echo "❌ Public directory not found. Run fix-development-server.sh first."
    exit 1
fi

echo "✅ Starting development server..."
echo "🌐 Your app will be available at: http://localhost:8000"
echo ""

# Start the development server
php artisan serve
EOF

chmod +x start-dev-server.sh
print_status "Development server script created"

# Final verification
echo ""
echo "🔍 Final Verification..."
echo ""

# Check if key files exist
files_to_check=(
    "public/index.php"
    "public/assets"
    "artisan"
    "composer.json"
)

for file in "${files_to_check[@]}"; do
    if [ -e "$file" ]; then
        print_status "$file exists"
    else
        print_warning "$file not found"
    fi
done

echo ""
print_status "✅ Development server fixed!"
echo ""
echo "📋 What was done:"
echo "• Recreated public directory for development"
echo "• Moved files back to public directory"
echo "• Created production deployment script"
echo "• Created development server script"
echo ""
echo "🚀 Now you can:"
echo "• Run: ./start-dev-server.sh (for development)"
echo "• Run: ./deploy-to-production.sh (for production)"
echo ""
echo "🌐 For development: ./start-dev-server.sh"
echo "🚀 For production: ./deploy-to-production.sh"
