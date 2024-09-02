<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth.middleware:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Destination
    Route::get('/admin/destination', [AdminController::class, 'destination'])->name('admin.destination');
    Route::get('/admin/destination/create', [AdminController::class, 'destinationCreate'])->name('admin.destination.create');
    Route::post('/admin/destination/store', [AdminController::class, 'destinationStore'])->name('admin.destination.store');
    Route::get('/admin/destination/edit/{id}', [AdminController::class, 'destinationEdit'])->name('admin.destination.edit');
    Route::post('/admin/destination/update/', [AdminController::class, 'destinationUpdate'])->name('admin.destination.update');
    Route::get('/admin/destination/destroy/{id}', [AdminController::class, 'destinationDestroy'])->name('admin.destination.destroy');

    // Gallery
    Route::get('/admin/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
    Route::get('/admin/gallery/create', [AdminController::class, 'galleryCreate'])->name('admin.gallery.create');
    Route::post('/admin/gallery/store', [AdminController::class, 'galleryStore'])->name('admin.gallery.store');
    Route::get('/admin/gallery/destroy/{id}', [AdminController::class, 'galleryDestroy'])->name('admin.gallery.destroy');

    // News
    Route::get('/admin/news', [AdminController::class, 'news'])->name('admin.news');
    Route::get('/admin/news/create', [AdminController::class, 'newsCreate'])->name('admin.news.create');
    Route::post('/admin/news/store', [AdminController::class, 'newsStore'])->name('admin.news.store');
    Route::get('/admin/news/edit/{id}', [AdminController::class, 'newsEdit'])->name('admin.news.edit');
    Route::post('/admin/news/update/', [AdminController::class, 'newsUpdate'])->name('admin.news.update');
    Route::get('/admin/news/destroy/{id}', [AdminController::class, 'newsDestroy'])->name('admin.news.destroy');

    // Product
    Route::get('/admin/product', [AdminController::class, 'product'])->name('admin.product');
    Route::get('/admin/product/create', [AdminController::class, 'productCreate'])->name('admin.product.create');
    Route::post('/admin/product/store', [AdminController::class, 'productStore'])->name('admin.product.store');
    Route::get('/admin/product/edit/{id}', [AdminController::class, 'productEdit'])->name('admin.product.edit');
    Route::post('/admin/product/update/', [AdminController::class, 'productUpdate'])->name('admin.product.update');
    Route::get('/admin/product/destroy/{id}', [AdminController::class, 'productDestroy'])->name('admin.product.destroy');

    // Facility
    Route::get('/admin/facility', [AdminController::class, 'facility'])->name('admin.facility');
    Route::get('/admin/facility/create', [AdminController::class, 'facilityCreate'])->name('admin.facility.create');
    Route::post('/admin/facility/store', [AdminController::class, 'facilityStore'])->name('admin.facility.store');
    Route::get('/admin/facility/edit/{id}', [AdminController::class, 'facilityEdit'])->name('admin.facility.edit');
    Route::post('/admin/facility/update/', [AdminController::class, 'facilityUpdate'])->name('admin.facility.update');
    Route::get('/admin/facility/destroy/{id}', [AdminController::class, 'facilityDestroy'])->name('admin.facility.destroy');

    // Aparatur
    Route::get('/admin/aparatur', [AdminController::class, 'aparatur'])->name('admin.aparatur');
    Route::get('/admin/aparatur/create', [AdminController::class, 'aparaturCreate'])->name('admin.aparatur.create');
    Route::post('/admin/aparatur/store', [AdminController::class, 'aparaturStore'])->name('admin.aparatur.store');
    Route::get('/admin/aparatur/edit/{id}', [AdminController::class, 'aparaturEdit'])->name('admin.aparatur.edit');
    Route::post('/admin/aparatur/update/', [AdminController::class, 'aparaturUpdate'])->name('admin.aparatur.update');
    Route::get('/admin/aparatur/destroy/{id}', [AdminController::class, 'aparaturDestroy'])->name('admin.aparatur.destroy');
});
