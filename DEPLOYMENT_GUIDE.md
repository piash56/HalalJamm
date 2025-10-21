# 🚀 Halal Jamm - Production Deployment Guide

## 📋 **Pre-Deployment Checklist**

### ✅ **Application Status: READY FOR PRODUCTION**

-   ✅ All features implemented and tested
-   ✅ Popular foods system working
-   ✅ Admin authentication system complete
-   ✅ Order Now buttons linked to external menu
-   ✅ 404 page configured
-   ✅ All logos updated to use correct paths
-   ✅ **NEW: Production-ready image handling**
-   ✅ **NEW: Optimized .htaccess configuration**
-   ✅ **NEW: Automated deployment scripts**
-   ✅ **NEW: Security and performance optimizations**

## 🔧 **1. cPanel Deployment Steps**

### **Step 1: Upload Application Files**

```bash
# Option A: Git Clone (Recommended)
git clone https://github.com/your-repo/halal-jamm.git
cd halal-jamm

# Option B: Upload via cPanel File Manager
# Upload the entire project folder to public_html
```

### **Step 2: Database Setup**

1. **Export Local Database:**

    ```bash
    mysqldump -u root -p halal_jamm > halal_jamm_backup.sql
    ```

2. **Import to cPanel Database:**
    - Go to cPanel → phpMyAdmin
    - Create new database (e.g., `yourdomain_halaljamm`)
    - Import the `halal_jamm_backup.sql` file

### **Step 3: Environment Configuration**

Create `.env` file in root directory with production settings:

```env
APP_NAME="Halal Jamm"
APP_ENV=production
APP_KEY=base64:1vInsn05punF7+Gy37X/mShhx6TU6y+kA7x+e/CV8oA=
APP_DEBUG=false
APP_TIMEZONE=UTC
APP_URL=https://yourdomain.com

APP_LOCALE=en
APP_FALLBACK_LOCALE=en

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=yourdomain_halaljamm
DB_USERNAME=yourdomain_dbuser
DB_PASSWORD=your_strong_password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_PATH=/
SESSION_DOMAIN=yourdomain.com

CACHE_STORE=database
QUEUE_CONNECTION=database

MAIL_MAILER=smtp
MAIL_HOST=mail.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="Halal Jamm"
```

### **Step 4: Run Production Commands**

#### **Option A: Automated Deployment (Recommended)**

```bash
# Run the automated deployment script
./deploy-production.sh

# Set proper permissions
./set-permissions.sh

# Test the production setup
./test-production.sh
```

#### **Option B: Manual Commands**

```bash
# Install dependencies
composer install --optimize-autoloader --no-dev

# Generate application key (if needed)
php artisan key:generate

# Run migrations
php artisan migrate --force

# Seed database (if needed)
php artisan db:seed --force

# Create storage symlink
php artisan storage:link

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### **Step 5: Configure Web Server**

#### **For Apache (.htaccess)**

Create `.htaccess` in public directory:

```apache
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
```

#### **For Nginx**

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/your/project/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## 🔒 **2. Security Checklist**

### **Production Security Settings**

-   ✅ `APP_DEBUG=false`
-   ✅ `APP_ENV=production`
-   ✅ Strong database passwords
-   ✅ SSL certificate installed
-   ✅ File permissions set correctly
-   ✅ `.env` file not accessible via web

### **Additional Security Measures**

```bash
# Set secure file permissions
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chmod -R 775 storage bootstrap/cache
```

## 📊 **3. Performance Optimization**

### **Enable Caching**

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

### **Database Optimization**

```sql
-- Add indexes for better performance
ALTER TABLE menus ADD INDEX idx_status (status);
ALTER TABLE menus ADD INDEX idx_popular (is_popular);
ALTER TABLE orders ADD INDEX idx_created_at (created_at);
```

## 🖼️ **4. Image Handling & Optimization**

### **Production-Ready Image System**

Your application now includes advanced image handling features:

#### **ImageHelper Class**

-   **Automatic image optimization** (resize, compress)
-   **Responsive image URLs** for different screen sizes
-   **Fallback placeholder images** for missing images
-   **Secure file validation** and upload handling
-   **Automatic cleanup** of old images

#### **Image Storage Structure**

```
storage/app/public/
├── categories/     # Category images
├── menus/         # Menu item images
└── addons/        # Addon images
```

#### **Image Optimization Features**

-   **Automatic resizing** (max 1920px width)
-   **Quality compression** (85% quality)
-   **Multiple format support** (JPEG, PNG, GIF, WebP)
-   **Browser caching** (1 year cache headers)
-   **CDN-ready URLs**

#### **Usage Examples**

```php
// In your controllers
$filename = ImageHelper::uploadImage($request->file('image'), 'categories', 'cat_');

// In your models (already implemented)
$category->image_url; // Returns optimized image URL
$category->responsive_image_urls; // Returns responsive URLs
```

## 🚨 **5. Common Issues & Solutions**

### **Issue 1: 500 Internal Server Error**

```bash
# Check Laravel logs
tail -f storage/logs/laravel.log

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### **Issue 2: Database Connection Error**

-   Verify database credentials in `.env`
-   Check if database exists
-   Ensure user has proper permissions

### **Issue 3: File Permission Issues**

```bash
# Use the automated script
./set-permissions.sh

# Or manually:
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### **Issue 4: Image Loading Issues**

```bash
# Check if storage symlink exists
ls -la public/storage

# If missing, create it:
php artisan storage:link

# Check storage permissions
ls -la storage/app/public/

# Ensure directories exist
mkdir -p storage/app/public/{categories,menus,addons}
chmod -R 775 storage/app/public
```

### **Issue 5: Performance Issues**

```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Re-cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

## 📧 **5. Email Configuration**

### **SMTP Settings for cPanel**

```env
MAIL_MAILER=smtp
MAIL_HOST=mail.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
```

## 🔄 **6. Backup Strategy**

### **Database Backup**

```bash
# Create automated backup script
#!/bin/bash
mysqldump -u username -p database_name > backup_$(date +%Y%m%d_%H%M%S).sql
```

### **File Backup**

```bash
# Backup application files
tar -czf halal_jamm_backup_$(date +%Y%m%d).tar.gz /path/to/application
```

## ✅ **7. Post-Deployment Testing**

### **Test Checklist**

-   [ ] Homepage loads correctly
-   [ ] Popular foods display properly
-   [ ] Admin login works
-   [ ] Admin dashboard accessible
-   [ ] Order Now buttons work
-   [ ] 404 page displays for invalid URLs
-   [ ] Email functionality works
-   [ ] Database operations work

## 🎯 **8. Monitoring & Maintenance**

### **Regular Tasks**

-   Monitor error logs
-   Update dependencies
-   Backup database regularly
-   Check SSL certificate expiry
-   Monitor disk space

---

## 🚀 **Ready for Production!**

Your Halal Jamm application is production-ready with:

-   ✅ Complete admin system
-   ✅ Popular foods functionality
-   ✅ External menu integration
-   ✅ Proper error handling
-   ✅ Security configurations
-   ✅ Performance optimizations

**Deployment Time: ~30-45 minutes**
**Maintenance: Minimal after setup**
