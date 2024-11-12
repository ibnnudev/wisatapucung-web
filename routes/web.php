<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AttractionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeographyController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('get-image/{filename}', [HomeController::class, 'getImage'])->name('user.home.get-image');

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
    // ::> Home - Home Item
    Route::post('/home/item', [AdminHomeController::class, 'storeItem'])->name('admin.home.item.store');
    Route::put('/home/item/{id}', [AdminHomeController::class, 'updateItem'])->name('admin.home.item.update');
    Route::delete('/home/item/{id}', [AdminHomeController::class, 'destroyItem'])->name('admin.home.item.destroy');

    Route::get('/home/get-image/{filename}', [AdminHomeController::class, 'getImage'])->name('admin.home.get-image');
    Route::resource('/home', AdminHomeController::class, ['as' => 'admin']);

    // About Us
    // ::> About Us - Bussiness
    Route::post('/about-us/bussiness', [AboutUsController::class, 'storeBussiness'])->name('admin.about-us.bussiness.store');
    Route::put('/about-us/bussiness/{id}', [AboutUsController::class, 'updateBussiness'])->name('admin.about-us.bussiness.update');
    Route::delete('/about-us/bussiness/{id}', [AboutUsController::class, 'destroyBussiness'])->name('admin.about-us.bussiness.destroy');

    // ::> About Us - Potential
    Route::post('/about-us/potential', [AboutUsController::class, 'storePotential'])->name('admin.about-us.potential.store');
    Route::put('/about-us/potential/{id}', [AboutUsController::class, 'updatePotential'])->name('admin.about-us.potential.update');
    Route::delete('/about-us/potential/{id}', [AboutUsController::class, 'destroyPotential'])->name('admin.about-us.potential.destroy');

    Route::get('/about-us/get-image/{filename}', [AboutUsController::class, 'getImage'])->name('admin.about-us.get-image');
    Route::resource('/about-us', AboutUsController::class, ['as' => 'admin']);

    // Geography
    // ::> Geography - Demography
    Route::post('/geography/demography', [GeographyController::class, 'storeDemography'])->name('admin.geography.demography.store');
    Route::put('/geography/demography/{id}', [GeographyController::class, 'updateDemography'])->name('admin.geography.demography.update');
    Route::delete('/geography/demography/{id}', [GeographyController::class, 'destroyDemography'])->name('admin.geography.demography.destroy');

    // ::> Geography - Topography
    Route::post('/geography/topography', [GeographyController::class, 'storeTopography'])->name('admin.geography.topography.store');
    Route::put('/geography/topography/{id}', [GeographyController::class, 'updateTopography'])->name('admin.geography.topography.update');
    Route::delete('/geography/topography/{id}', [GeographyController::class, 'destroyTopography'])->name('admin.geography.topography.destroy');

    // ::> Geography - Disaster
    Route::post('/geography/disaster', [GeographyController::class, 'storeDisaster'])->name('admin.geography.disaster.store');
    Route::put('/geography/disaster/{id}', [GeographyController::class, 'updateDisaster'])->name('admin.geography.disaster.update');
    Route::delete('/geography/disaster/{id}', [GeographyController::class, 'destroyDisaster'])->name('admin.geography.disaster.destroy');

    Route::get('/geography/get-image/{filename}', [GeographyController::class, 'getImage'])->name('admin.geography.get-image');
    Route::resource('/geography', GeographyController::class, ['as' => 'admin']);

    // Attraction
    // ::> Attraction - List Attraction
    Route::post('/attraction/list-attraction', [AttractionController::class, 'storeListAttraction'])->name('admin.attraction.list-attraction.store');
    Route::put('/attraction/list-attraction/{id}', [AttractionController::class, 'updateListAttraction'])->name('admin.attraction.list-attraction.update');
    Route::delete('/attraction/list-attraction/{id}', [AttractionController::class, 'destroyListAttraction'])->name('admin.attraction.list-attraction.destroy');

    Route::get('/attraction/get-image/{filename}', [AttractionController::class, 'getImage'])->name('admin.attraction.get-image');
    Route::resource('/attraction', AttractionController::class, ['as' => 'admin']);

    // Blog
    Route::get('/blog/get-image/{filename}', [BlogController::class, 'getImage'])->name('admin.blog.get-image');
    Route::resource('/blog', BlogController::class, ['as' => 'admin']);

    // Product
    // ::> Product - List Product
    Route::get('/product/list-product/create', [ProductController::class, 'createListProduct'])->name('admin.product.list-product.create');
    Route::post('/product/list-product', [ProductController::class, 'storeListProduct'])->name('admin.product.list-product.store');
    Route::get('/product/list-product/{id}/edit', [ProductController::class, 'editListProduct'])->name('admin.product.list-product.edit');
    Route::put('/product/list-product/{id}', [ProductController::class, 'updateListProduct'])->name('admin.product.list-product.update');
    Route::delete('/product/list-product/{id}', [ProductController::class, 'destroyListProduct'])->name('admin.product.list-product.destroy');

    Route::get('/product/get-image/{filename}', [ProductController::class, 'getImage'])->name('admin.product.get-image');
    Route::resource('/product', ProductController::class, ['as' => 'admin']);

    // Organization
    // ::> Organization - List Organization
    Route::post('/organization/list-organization', [OrganizationController::class, 'storeListOrganization'])->name('admin.organization.list-organization.store');
    Route::put('/organization/list-organization/{id}', [OrganizationController::class, 'updateListOrganization'])->name('admin.organization.list-organization.update');
    Route::delete('/organization/list-organization/{id}', [OrganizationController::class, 'destroyListOrganization'])->name('admin.organization.list-organization.destroy');

    Route::get('/organization/get-image/{filename}', [OrganizationController::class, 'getImage'])->name('admin.organization.get-image');
    Route::resource('/organization', OrganizationController::class, ['as' => 'admin']);
});

require __DIR__ . '/auth.php';
