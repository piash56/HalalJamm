#!/bin/bash

# 🏗️ Halal Jamm - Fix Laravel Production Structure
# This script reorganizes your Laravel application for proper production deployment

echo "🏗️ Fixing Laravel Production Structure for Halal Jamm..."

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

# Check current structure
if [ -d "public" ] && [ -f "public/index.php" ]; then
    print_info "Found Laravel public directory with index.php"
    
    echo ""
    echo "🔧 Reorganizing Laravel Structure for Production..."
    echo ""
    
    # Step 1: Create backup
    print_info "Creating backup of current structure..."
    if [ ! -d "backup_$(date +%Y%m%d_%H%M%S)" ]; then
        mkdir -p "backup_$(date +%Y%m%d_%H%M%S)"
        cp -r public "backup_$(date +%Y%m%d_%H%M%S)/public_backup"
        print_status "Backup created"
    fi
    
    # Step 2: Move public contents to root
    print_info "Moving public directory contents to root..."
    
    # Move all files from public to root
    if [ -d "public/assets" ]; then
        print_info "Moving assets directory..."
        mv public/assets ./
        print_status "Assets moved to root"
    fi
    
    if [ -f "public/index.php" ]; then
        print_info "Moving index.php..."
        mv public/index.php ./
        print_status "index.php moved to root"
    fi
    
    if [ -f "public/.htaccess" ]; then
        print_info "Moving .htaccess..."
        mv public/.htaccess ./
        print_status ".htaccess moved to root"
    fi
    
    # Move any other files from public
    for file in public/*; do
        if [ -f "$file" ] && [ "$(basename "$file")" != "index.php" ] && [ "$(basename "$file")" != ".htaccess" ]; then
            print_info "Moving $(basename "$file")..."
            mv "$file" ./
        fi
    done
    
    # Step 3: Remove empty public directory
    if [ -d "public" ] && [ -z "$(ls -A public 2>/dev/null)" ]; then
        print_info "Removing empty public directory..."
        rmdir public
        print_status "Empty public directory removed"
    else
        print_warning "Public directory not empty, keeping it"
    fi
    
    # Step 4: Create storage symlink
    print_info "Creating storage symlink..."
    if [ ! -L "storage" ]; then
        php artisan storage:link
        if [ $? -eq 0 ]; then
            print_status "Storage symlink created"
        else
            print_error "Failed to create storage symlink"
        fi
    else
        print_status "Storage symlink already exists"
    fi
    
    # Step 5: Update .htaccess for root directory
    print_info "Updating .htaccess for root directory..."
    
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

# Allow access to assets
<Directory "assets">
    Order allow,deny
    Allow from all
</Directory>

<Directory "storage">
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

    print_status ".htaccess updated for root directory"
    
    # Step 6: Set proper permissions
    print_info "Setting proper permissions..."
    chmod 644 index.php
    chmod 644 .htaccess
    chmod -R 755 assets 2>/dev/null || true
    chmod -R 755 storage 2>/dev/null || true
    chmod -R 755 storage/app/public 2>/dev/null || true
    chmod -R 755 bootstrap/cache
    
    print_status "Permissions set"
    
    # Step 7: Clear Laravel caches
    print_info "Clearing Laravel caches..."
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan view:clear
    
    print_status "Laravel caches cleared"
    
    # Step 8: Final verification
    echo ""
    echo "🔍 Final Structure Verification..."
    echo ""
    
    # Check if key files exist in root
    files_to_check=(
        "index.php"
        ".htaccess"
        "assets"
        "storage"
    )
    
    for file in "${files_to_check[@]}"; do
        if [ -e "$file" ]; then
            print_status "$file exists in root"
        else
            print_warning "$file not found in root"
        fi
    done
    
    echo ""
    print_status "✅ Laravel structure fixed for production!"
    echo ""
    echo "📋 What was done:"
    echo "• Moved public/index.php to root"
    echo "• Moved public/assets to root"
    echo "• Moved public/.htaccess to root"
    echo "• Created storage symlink"
    echo "• Updated .htaccess for root directory"
    echo "• Set proper file permissions"
    echo "• Cleared Laravel caches"
    echo ""
    echo "🌐 Your website should now work correctly!"
    echo ""
    echo "📁 New Structure:"
    echo "public_html/"
    echo "├── index.php          ← Laravel entry point"
    echo "├── assets/            ← CSS, JS, Images"
    echo "├── storage/           ← Storage symlink"
    echo "├── app/               ← Laravel app files"
    echo "├── storage/           ← Laravel storage"
    echo "├── vendor/            ← Composer dependencies"
    echo "├── .env                ← Environment file"
    echo "├── artisan             ← Laravel command line"
    echo "└── .htaccess           ← Apache configuration"
    echo ""
    echo "🚀 Ready for production deployment!"
    
else
    print_error "Laravel public directory not found!"
    print_warning "Make sure you're in the correct Laravel project directory"
    exit 1
fi
