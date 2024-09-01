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
});
