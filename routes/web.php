<?php

use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\OrderUserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// User routes
Route::get('/', [App\Http\Controllers\User\BerandaController::class, 'index'])->name('index');
Route::get('/tentangkami', [App\Http\Controllers\User\TentangKamiController::class, 'index'])->name('user.product');
Route::get('/paketmakanan', [App\Http\Controllers\User\PaketMakananController::class, 'index'])->middleware(['auth', 'verified'])->name('user.paketmakanan');
Route::post('/orders/store', [OrderUserController::class, 'store' ])->name('orders.store');
Route::get('/voucher', [VoucherController::class, 'voucher'])->name('voucher');
Route::get('/troli', [CartController::class, 'index'])->name('user.troli');
Route::delete('/troli/{troli}', [CartController::class, 'destroy'])->name('cart.destroy');

// Route Google
Route::get('/home', [UserController::class, 'index'])->name('home');

// Route CRUD Users
Route::resource('admin/users', 'AdminUserController');
Route::get('/admin/users', 'AdminUserController@index')->name('admin.users.index');
Route::get('/admin/users/create', 'AdminUserController@create')->name('admin.users.create');

// Route CRUD Products
// Route::resource('products', 'ProductController');
// Route::get('products', 'ProductController@index')->name('admin.products.index');
// Route::get('products/create', 'ProductController@create')->name('admin.products.create');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Google login
Route::middleware('guest')->group(function () {
    Route::get('/auth/google/redirect', [UserAuthController::class, 'redirect'])->name('auth.google.login');
    Route::get('/auth/google/callback', [UserAuthController::class, 'handleGoogleCallback']);
});

// Admin routes
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/create', [AdminUsersController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [AdminUsersController::class, 'store'])->name('admin.users.store');
    Route::get('/users', [AdminUsersController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{id}/edit', [AdminUsersController::class, 'edit'])->name('admin.users.edit');
    Route::delete('/admin/users/{user}', [AdminUsersController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/product/create', [AdminProductsController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [AdminProductsController::class, 'store'])->name('admin.products.store');
    Route::get('/products', [AdminProductsController::class, 'index'])->name('admin.products.index');
    Route::get('/products/{id}/edit', [AdminProductsController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [AdminProductsController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [AdminProductsController::class, 'destroy'])->name('admin.products.destroy');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('admin.orders.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('admin.orders.edit');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
});


require __DIR__ . '/auth.php';
