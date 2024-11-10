<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('user.about');
Route::get('/demografis', [HomeController::class, 'demography'])->name('user.demography');
Route::get('/atraksi', [HomeController::class, 'attraction'])->name('user.attraction');
Route::get('/informasi/{slug}', [HomeController::class, 'informationDetail'])->name('user.information.detail');
Route::get('/informasi', [HomeController::class, 'information'])->name('user.information');
Route::get('/kontak-kami', [HomeController::class, 'contact'])->name('user.contact');
Route::get('/produk', [HomeController::class, 'product'])->name('user.product');
Route::get('/organisasi', [HomeController::class, 'organization'])->name('user.organization');


Route::middleware('auth')->prefix('/dashboard')->group(function () {
    Route::get('/', DashboardController::class)->name('admin.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Home
    Route::group(['prefix' => '/home'], function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home.index');
    });
});

require __DIR__ . '/auth.php';
