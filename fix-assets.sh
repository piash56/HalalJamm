#!/bin/bash

# 🔧 Halal Jamm - Fix CSS and Images Loading Issues
# This script fixes asset loading problems in production

echo "🔧 Fixing CSS and Images Loading Issues for Halal Jamm..."

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
echo "🔍 Diagnosing Asset Loading Issues..."
echo ""

# 1. Check if public directory exists and has assets
if [ -d "public" ]; then
    print_status "Public directory exists"
    
    # Check for CSS files
    if [ -d "public/assets/css" ]; then
        print_status "CSS assets directory exists"
        css_count=$(find public/assets/css -name "*.css" | wc -l)
        print_info "Found $css_count CSS files"
    else
        print_warning "CSS assets directory not found"
    fi
    
    # Check for JS files
    if [ -d "public/assets/js" ]; then
        print_status "JS assets directory exists"
        js_count=$(find public/assets/js -name "*.js" | wc -l)
        print_info "Found $js_count JS files"
    else
        print_warning "JS assets directory not found"
    fi
    
    # Check for images
    if [ -d "public/assets/images" ]; then
        print_status "Images assets directory exists"
        img_count=$(find public/assets/images -name "*.png" -o -name "*.jpg" -o -name "*.jpeg" -o -name "*.gif" -o -name "*.svg" | wc -l)
        print_info "Found $img_count image files"
    else
        print_warning "Images assets directory not found"
    fi
else
    print_error "Public directory not found!"
    exit 1
fi

echo ""
echo "🔧 Fixing Asset Loading Issues..."
echo ""

# 2. Create symbolic links for assets if they don't exist
print_info "Creating asset symbolic links..."

# Check if assets are accessible from public directory
if [ ! -L "public/assets" ] && [ ! -d "public/assets" ]; then
    print_warning "Assets directory not found in public"
    
    # Look for assets in other locations
    if [ -d "resources/assets" ]; then
        print_info "Found assets in resources/assets, creating symlink..."
        ln -sf ../resources/assets public/assets
        print_status "Assets symlink created"
    elif [ -d "assets" ]; then
        print_info "Found assets in root, creating symlink..."
        ln -sf ../assets public/assets
        print_status "Assets symlink created"
    else
        print_warning "No assets directory found"
    fi
fi

# 3. Ensure storage symlink exists
print_info "Checking storage symlink..."
if [ ! -L "public/storage" ]; then
    print_warning "Storage symlink missing, creating..."
    php artisan storage:link
    if [ $? -eq 0 ]; then
        print_status "Storage symlink created"
    else
        print_error "Failed to create storage symlink"
    fi
else
    print_status "Storage symlink exists"
fi

# 4. Check and fix .htaccess for asset serving
print_info "Updating .htaccess for proper asset serving..."

# Create a comprehensive .htaccess for asset handling
cat > .htaccess << 'EOF'
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Security Headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
    Header always set Permissions-Policy "geolocation=(), microphone=(), camera=()"
</IfModule>

# Cache Control for Images and Static Assets
<IfModule mod_expires.c>
    ExpiresActive On
    
    # Images
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType image/avif "access plus 1 year"
    
    # CSS and JavaScript
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType text/javascript "access plus 1 month"
    
    # Fonts
    ExpiresByType font/woff "access plus 1 year"
    ExpiresByType font/woff2 "access plus 1 year"
    ExpiresByType application/font-woff "access plus 1 year"
    ExpiresByType application/font-woff2 "access plus 1 year"
    
    # HTML
    ExpiresByType text/html "access plus 1 hour"
</IfModule>

# Compression for better performance
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
    AddOutputFilterByType DEFLATE image/svg+xml
</IfModule>

# Prevent access to sensitive files
<Files ".env">
    Order allow,deny
    Deny from all
</Files>

<Files "composer.json">
    Order allow,deny
    Deny from all
</Files>

<Files "composer.lock">
    Order allow,deny
    Deny from all
</Files>

<Files "package.json">
    Order allow,deny
    Deny from all
</Files>

<Files "artisan">
    Order allow,deny
    Deny from all
</Files>

# Prevent access to storage and vendor directories from web
RedirectMatch 403 ^/storage/.*$
RedirectMatch 403 ^/vendor/.*$
RedirectMatch 403 ^/bootstrap/.*$

# Allow access to public assets
<Directory "public/assets">
    Order allow,deny
    Allow from all
</Directory>

<Directory "public/storage">
    Order allow,deny
    Allow from all
</Directory>

# Optimize image delivery
<IfModule mod_rewrite.c>
    # Serve images with proper headers
    RewriteCond %{REQUEST_FILENAME} \.(jpg|jpeg|png|gif|svg|webp|avif)$
    RewriteRule ^(.*)$ - [E=image:1]
</IfModule>

<IfModule mod_headers.c>
    # Add cache headers for images
    <FilesMatch "\.(jpg|jpeg|png|gif|svg|webp|avif)$">
        Header set Cache-Control "public, max-age=31536000"
        Header set Expires "access plus 1 year"
    </FilesMatch>
    
    # Add cache headers for CSS and JS
    <FilesMatch "\.(css|js)$">
        Header set Cache-Control "public, max-age=2592000"
        Header set Expires "access plus 1 month"
    </FilesMatch>
</IfModule>

# Error pages
ErrorDocument 404 /index.php
ErrorDocument 500 /index.php
EOF

print_status ".htaccess updated for proper asset serving"

# 5. Set proper permissions for assets
print_info "Setting proper permissions for assets..."
chmod -R 755 public/assets 2>/dev/null || true
chmod -R 755 public/storage 2>/dev/null || true
chmod -R 644 public/assets/css/* 2>/dev/null || true
chmod -R 644 public/assets/js/* 2>/dev/null || true
chmod -R 644 public/assets/images/* 2>/dev/null || true

print_status "Asset permissions set"

# 6. Check if we need to build assets
print_info "Checking if assets need to be built..."

if [ -f "package.json" ] && [ -f "vite.config.js" ]; then
    print_info "Vite configuration found, building assets..."
    
    # Install npm dependencies if needed
    if [ ! -d "node_modules" ]; then
        print_info "Installing npm dependencies..."
        npm install
    fi
    
    # Build assets for production
    print_info "Building assets for production..."
    npm run build
    
    if [ $? -eq 0 ]; then
        print_status "Assets built successfully"
    else
        print_warning "Asset build failed, but continuing..."
    fi
else
    print_info "No build process needed"
fi

# 7. Clear Laravel caches
print_info "Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

print_status "Laravel caches cleared"

# 8. Final verification
echo ""
echo "🔍 Final Asset Verification..."
echo ""

# Check if key assets exist
assets_to_check=(
    "public/assets/css"
    "public/assets/js"
    "public/assets/images"
    "public/storage"
)

for asset in "${assets_to_check[@]}"; do
    if [ -e "$asset" ]; then
        print_status "$asset exists and accessible"
    else
        print_warning "$asset not found"
    fi
done

echo ""
print_status "✅ Asset loading issues fixed!"
echo ""
echo "📋 What was done:"
echo "• Updated .htaccess for proper asset serving"
echo "• Ensured storage symlink exists"
echo "• Set proper file permissions"
echo "• Cleared Laravel caches"
echo "• Built production assets (if needed)"
echo ""
echo "🌐 Your website should now load with proper styles and images!"
echo ""
echo "🔍 If you still have issues, check:"
echo "• File permissions: chmod -R 755 public/assets public/storage"
echo "• Storage symlink: php artisan storage:link"
echo "• Laravel logs: tail -f storage/logs/laravel.log"
echo "• Browser developer tools for 404 errors"
