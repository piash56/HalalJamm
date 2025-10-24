<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;
use App\Http\Controllers\FrontendController\CartController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\AdminController\AuthController;
use App\Http\Controllers\AdminController\RoutingController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\MenuController;
use App\Http\Controllers\AdminController\AddonController;
use App\Http\Controllers\AdminController\SettingsController;
use App\Http\Controllers\AdminController\OrderController;
use App\Http\Controllers\AdminController\ProfileController;
use App\Http\Controllers\AdminController\OfferController;

/**
 *    Frontend
 */

// Test route for 404 page (remove in production)
Route::get('/test-404', function () {
    abort(404);
});

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home'); // index
    Route::get('index2', 'indexTwo')->name('indexTwo');
    Route::get('index3', 'indexThree')->name('indexThree');
    Route::get('index4', 'indexFour')->name('indexFour');
    Route::get('index5', 'indexFive')->name('indexFive');
    Route::get('index6', 'indexSix')->name('indexSix');
});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    Route::get('about', 'about')->name('about');
    Route::get('menus', 'allMenus')->name('allMenus');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('cart', 'cart')->name('cart');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::post('checkout', 'processOrder')->name('checkout.process');
    Route::get('order/success', 'orderSuccess')->name('order.success');
    Route::get('chef-details', 'chefDetails')->name('chefDetails');
    Route::get('chef', 'chef')->name('chef');
    Route::get('contact', 'contact')->name('contact');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('history', 'history')->name('history');
    Route::get('menu-burger', 'menuBurger')->name('menuBurger');
    Route::get('menu-chicken', 'menuChicken')->name('menuChicken');
    Route::get('menu-grill', 'menuGrill')->name('menuGrill');
    Route::get('menu-pizza', 'menuPizza')->name('menuPizza');
    Route::get('menu-restaurant', 'menuRestaurant')->name('menuRestaurant');
    Route::get('menu-sea', 'menuSea')->name('menuSea');
    Route::get('product-details', 'productDetails')->name('productDetails');
    Route::get('shop', 'shop')->name('shop');
    Route::get('product-details', 'productDetails')->name('productDetails');
});

// Cart Routes
Route::controller(CartController::class)->group(function () {
    Route::post('cart/add', 'addToCart')->name('cart.add');
    Route::get('cart/count', 'getCartCount')->name('cart.count');
    Route::delete('cart/remove/{itemId}', 'removeFromCart')->name('cart.remove');
    Route::put('cart/update/{itemId}', 'updateQuantity')->name('cart.update');
    Route::post('cart/clear', 'clearCart')->name('cart.clear');
});

// Admin Authentication Routes (without auth middleware)
Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Password reset routes
    Route::get('password/reset', [AuthController::class, 'showPasswordResetForm'])->name('admin.password.request');
    Route::post('password/email', [AuthController::class, 'sendPasswordResetLink'])->name('admin.password.email');
    Route::get('password/reset/{token}', [AuthController::class, 'showNewPasswordForm'])->name('admin.password.reset');
    Route::post('password/reset', [AuthController::class, 'updatePassword'])->name('admin.password.update');
});

// Protected Admin Routes (with admin.auth middleware)
Route::prefix('admin')->middleware(['admin.auth'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Category routes with professional URLs
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/add', [CategoryController::class, 'create'])->name('admin.categories.add');
    Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('category/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    // Foods (Menu) routes with professional URLs
    Route::get('foods', [MenuController::class, 'index'])->name('admin.foods.index');
    Route::get('foods/add', [MenuController::class, 'create'])->name('admin.foods.add');
    Route::post('foods', [MenuController::class, 'store'])->name('admin.foods.store');
    Route::get('food/{menu}/edit', [MenuController::class, 'edit'])->name('admin.food.edit');
    Route::put('food/{menu}', [MenuController::class, 'update'])->name('admin.food.update');
    Route::delete('food/{menu}', [MenuController::class, 'destroy'])->name('admin.food.destroy');

    // Addon routes with professional URLs
    Route::get('addons', [AddonController::class, 'index'])->name('admin.addons.index');
    Route::get('addons/add', [AddonController::class, 'create'])->name('admin.addons.add');
    Route::post('addons', [AddonController::class, 'store'])->name('admin.addons.store');
    Route::get('addon/{addon}/edit', [AddonController::class, 'edit'])->name('admin.addon.edit');
    Route::put('addon/{addon}', [AddonController::class, 'update'])->name('admin.addon.update');
    Route::delete('addon/{addon}', [AddonController::class, 'destroy'])->name('admin.addon.destroy');
    Route::get('addons/search-foods', [AddonController::class, 'searchFoods'])->name('admin.addons.search-foods');

    // Settings routes
    Route::get('apps/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
    Route::post('apps/settings', [SettingsController::class, 'update'])->name('admin.settings.update');

    // Order routes
    Route::get('apps/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('order/{order}', [OrderController::class, 'show'])->name('admin.order.view');
    Route::get('order/{order}/edit', [OrderController::class, 'edit'])->name('admin.order.edit');
    Route::put('order/{order}', [OrderController::class, 'update'])->name('admin.order.update');
    Route::delete('order/{order}', [OrderController::class, 'destroy'])->name('admin.order.destroy');

    // Profile routes
    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('admin.profile.password');

    // Offer routes with professional URLs (must be before catch-all routes)
    Route::get('offers', [OfferController::class, 'index'])->name('admin.offers.index');
    Route::get('offers/add', [OfferController::class, 'create'])->name('admin.offers.add');
    Route::post('offers', [OfferController::class, 'store'])->name('admin.offers.store');
    Route::get('offer/{offer}/edit', [OfferController::class, 'edit'])->name('admin.offer.edit');
    Route::put('offer/{offer}', [OfferController::class, 'update'])->name('admin.offer.update');
    Route::delete('offer/{offer}', [OfferController::class, 'destroy'])->name('admin.offer.destroy');

    // Catch-all routes (must be last)
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('admin.third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('admin.second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('admin.any');
});
