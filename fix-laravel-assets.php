<?php

/**
 * Laravel Asset Fix Script
 * Run this script to fix asset loading issues
 */

echo "🔧 Fixing Laravel Asset Loading Issues...\n";

// 1. Clear all caches
echo "Clearing Laravel caches...\n";
exec('php artisan cache:clear');
exec('php artisan config:clear');
exec('php artisan route:clear');
exec('php artisan view:clear');
echo "✅ Caches cleared\n";

// 2. Create storage symlink
echo "Creating storage symlink...\n";
exec('php artisan storage:link');
echo "✅ Storage symlink created\n";

// 3. Set proper permissions
echo "Setting file permissions...\n";
exec('chmod -R 755 storage bootstrap/cache');
exec('chmod -R 755 public/assets 2>/dev/null || true');
exec('chmod -R 755 public/storage 2>/dev/null || true');
echo "✅ Permissions set\n";

// 4. Build assets if needed
if (file_exists('package.json') && file_exists('vite.config.js')) {
    echo "Building assets for production...\n";
    exec('npm run build');
    echo "✅ Assets built\n";
}

echo "\n🎉 Asset loading issues should now be fixed!\n";
echo "Visit your website to see the changes.\n";
