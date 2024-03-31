<?php

use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\UsersController;
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

// User routes
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/tentangkami', [UserController::class, 'tentangkami'])->name('tentangkami');
Route::get('/paketmakanan', [MakananController::class, 'paketmakanan'])->name('paketmakanan');
Route::get('/voucher', [VoucherController::class, 'voucher'])->name('voucher');
Route::get('troli', [MakananController::class, 'troli'])->name('troli');

// Route Google
Route::get('/home', [UserController::class, 'index'])->name('home');

// Route CRUD Users
Route::resource('admin/users', 'AdminUserController');
Route::get('/admin/users', 'AdminUserController@index')->name('admin.users.index');
Route::get('/admin/users/create', 'AdminUserController@create')->name('admin.users.create');

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
});

<<<<<<< HEAD
require __DIR__ . '/auth.php';
=======
// Admin route
Route::get('/beranda', function () {
    return view('admin.beranda');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/produk', function () {
    return view('admin.produk');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/pembayaran', function () {
    return view('admin.pembayaran');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/orders', function () {
    return view('admin.orders');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/vouchers', function () {
    return view('admin.voucher');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/users', function () {
    return view('admin.users');
})->middleware(['auth', 'verified', 'role:admin']);

require __DIR__.'/auth.php';
>>>>>>> 0243b4b2c13155147af5e1698059180e3492e542
