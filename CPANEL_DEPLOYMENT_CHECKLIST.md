# 🚀 **cPanel Production Deployment Checklist**

## ✅ **Your Application is PRODUCTION READY!**

Your Laravel application is fully prepared for production deployment. Here's your complete deployment guide:

---

## 📋 **Step-by-Step cPanel Deployment**

### **Step 1: Git Clone to cPanel**

```bash
# In your cPanel File Manager or SSH
cd public_html
git clone https://github.com/your-repo/halal-jamm.git .
# OR if cloning to subdirectory
git clone https://github.com/your-repo/halal-jamm.git halal-jamm
```

### **Step 2: Database Setup**

1. **Create Database in cPanel:**

    - Go to cPanel → MySQL Databases
    - Create new database: `yourdomain_halaljamm`
    - Create database user with strong password
    - Assign user to database with ALL PRIVILEGES

2. **Export Local Database:**

    ```bash
    mysqldump -u root -p halal_jamm > halal_jamm_backup.sql
    ```

3. **Import to cPanel:**
    - Go to cPanel → phpMyAdmin
    - Select your database
    - Import the `halal_jamm_backup.sql` file

### **Step 3: Environment Configuration**

Create `.env` file in your project root:

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

# 🗄️ DATABASE CONFIGURATION
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=yourdomain_halaljamm
DB_USERNAME=yourdomain_dbuser
DB_PASSWORD=your_strong_database_password

# 🔐 SESSION CONFIGURATION
SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_PATH=/
SESSION_DOMAIN=yourdomain.com

CACHE_STORE=database
QUEUE_CONNECTION=database

# 📧 EMAIL CONFIGURATION
MAIL_MAILER=smtp
MAIL_HOST=mail.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="Halal Jamm"

VITE_APP_NAME="${APP_NAME}"
```

---

## 🔧 **CRITICAL: Commands to Run After Deployment**

### **Step 4: Essential Commands (Run These!)**

```bash
# 1. Install dependencies
composer install --optimize-autoloader --no-dev

# 2. Generate application key (if needed)
php artisan key:generate

# 3. Run database migrations
php artisan migrate --force

# 4. Seed database (if needed)
php artisan db:seed --force

# 5. Create storage link
php artisan storage:link

# 6. Build frontend assets
npm install
npm run build

# 7. Clear and cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan cache:clear

# 8. Set proper permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

## 🌐 **Step 5: Web Server Configuration**

### **For Apache (.htaccess)**

Create `.htaccess` in `public` directory:

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

### **For cPanel (Point Document Root)**

1. **Go to cPanel → Subdomains or Addon Domains**
2. **Point document root to:** `/public_html/halal-jamm/public`
3. **OR create symlink:** `ln -s public_html/halal-jamm/public public_html`

---

## 🔒 **Step 6: Security Configuration**

### **File Permissions:**

```bash
# Set secure permissions
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chmod -R 775 storage bootstrap/cache
```

### **Environment Security:**

-   ✅ `APP_DEBUG=false`
-   ✅ `APP_ENV=production`
-   ✅ Strong database passwords
-   ✅ SSL certificate enabled
-   ✅ `.env` file not accessible via web

---

## 📧 **Step 7: Email Configuration**

### **cPanel Email Setup:**

1. **Create email account:** `noreply@yourdomain.com`
2. **Use cPanel SMTP settings:**
    - Host: `mail.yourdomain.com`
    - Port: `587`
    - Encryption: `TLS`

---

## 🧪 **Step 8: Testing Checklist**

### **Test These URLs:**

-   ✅ `https://yourdomain.com/` - Homepage loads
-   ✅ `https://yourdomain.com/admin/login` - Admin login works
-   ✅ `https://yourdomain.com/admin/dashboard` - Dashboard loads
-   ✅ `https://yourdomain.com/admin/foods` - Food management works
-   ✅ `https://yourdomain.com/admin/categories` - Categories work
-   ✅ Image uploads work
-   ✅ Popular foods display correctly
-   ✅ Order Now buttons work

---

## 🚨 **Common Issues & Solutions**

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

### **Issue 2: Images Not Loading**

```bash
# Recreate storage link
php artisan storage:link

# Check permissions
chmod -R 755 storage
```

### **Issue 3: Database Connection Error**

-   Verify database credentials in `.env`
-   Check database exists in cPanel
-   Ensure user has proper permissions

---

## 📊 **Performance Optimization**

### **Enable Caching:**

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache
```

### **Database Optimization:**

```sql
-- Add indexes for better performance
ALTER TABLE menus ADD INDEX idx_status (status);
ALTER TABLE menus ADD INDEX idx_popular (is_popular);
ALTER TABLE orders ADD INDEX idx_created_at (created_at);
```

---

## 🎯 **Final Checklist**

### **Before Going Live:**

-   [ ] All commands executed successfully
-   [ ] Database imported and working
-   `.env` file configured with production settings
-   [ ] Storage link created
-   [ ] Frontend assets built
-   [ ] File permissions set correctly
-   [ ] SSL certificate installed
-   [ ] Email configuration working
-   [ ] All URLs tested and working

---

## 🏆 **Your Application Status: PRODUCTION READY!**

### **✅ What's Working:**

-   ✅ All features implemented and tested
-   ✅ Popular foods system working
-   ✅ Admin authentication system complete
-   ✅ Order Now buttons linked to external menu
-   ✅ 404 page configured
-   ✅ Professional image structure
-   ✅ Clean, optimized codebase
-   ✅ Security measures in place

### **🚀 Deployment Time: ~30-45 minutes**

### **📈 Maintenance: Minimal after setup**

**You're ready to deploy! Follow the checklist above and your application will be live and working perfectly.**
