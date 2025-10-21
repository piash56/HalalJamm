#!/bin/bash

# 🔧 Halal Jamm - Fix 403 Forbidden Error
# This script fixes the common Laravel deployment issue

echo "🔧 Fixing 403 Forbidden Error for Halal Jamm..."

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

# Check if we're in public_html or need to navigate
if [ -d "public" ] && [ -f "public/index.php" ]; then
    print_info "Found Laravel public directory with index.php"
    
    echo ""
    echo "🔧 Fixing Laravel Deployment Structure..."
    echo ""
    
    # Method 1: Create a new index.php in root that points to public/index.php
    print_info "Creating root index.php that points to public directory..."
    
    cat > index.php << 'EOF'
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
EOF

    print_status "Root index.php created"
    
    # Method 2: Update .htaccess to handle the routing
    print_info "Updating .htaccess for proper routing..."
    
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

# Prevent access to storage and vendor directories
RedirectMatch 403 ^/storage/.*$
RedirectMatch 403 ^/vendor/.*$
RedirectMatch 403 ^/bootstrap/.*$

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
</IfModule>

# Error pages
ErrorDocument 404 /index.php
ErrorDocument 500 /index.php
EOF

    print_status ".htaccess updated for root directory"
    
    # Ensure storage symlink exists
    if [ ! -L "public/storage" ]; then
        print_info "Creating storage symlink..."
        php artisan storage:link
        print_status "Storage symlink created"
    else
        print_status "Storage symlink already exists"
    fi
    
    # Set proper permissions
    print_info "Setting proper permissions..."
    chmod 644 index.php
    chmod 644 .htaccess
    chmod -R 755 storage bootstrap/cache
    chmod -R 644 storage/app/public/*
    
    print_status "Permissions set"
    
    echo ""
    print_status "✅ Laravel deployment structure fixed!"
    echo ""
    echo "📋 What was done:"
    echo "• Created root index.php that points to public/index.php"
    echo "• Updated .htaccess for proper routing"
    echo "• Ensured storage symlink exists"
    echo "• Set proper file permissions"
    echo ""
    echo "🌐 Your website should now work at: https://halaljamm.com"
    echo ""
    echo "🔍 If you still get errors, check:"
    echo "• File permissions: chmod 755 storage bootstrap/cache"
    echo "• Storage symlink: php artisan storage:link"
    echo "• Laravel logs: tail -f storage/logs/laravel.log"
    
else
    print_error "Laravel public directory not found!"
    print_warning "Make sure you're in the correct Laravel project directory"
    exit 1
fi
