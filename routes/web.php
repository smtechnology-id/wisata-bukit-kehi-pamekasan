<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');

// Navbar
Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/about', [AuthController::class, 'about'])->name('landing.about');
Route::get('/statistik', [AuthController::class, 'statistik'])->name('landing.statistik');
Route::get('/destination', [AuthController::class, 'destination'])->name('landing.destination');
Route::get('/gallery', [AuthController::class, 'gallery'])->name('landing.gallery');
Route::get('/product', [AuthController::class, 'product'])->name('landing.product');
Route::get('/news', [AuthController::class, 'news'])->name('landing.news');
Route::get('/contact', [AuthController::class, 'contact'])->name('landing.contact');
Route::get('/sejarah', [AuthController::class, 'sejarah'])->name('landing.sejarah');

// Destination Detail
Route::get('/destination/{slug}', [AuthController::class, 'destinationDetail'])->name('destination.detail');

// News Detail
Route::get('/news/{slug}', [AuthController::class, 'newsDetail'])->name('landing.news.detail');

// Produk Detail
Route::get('/product-show/{slug}', [AuthController::class, 'productShow'])->name('product.show');

// Ticket
Route::get('/ticket', [AuthController::class, 'ticket'])->name('ticket');
Route::get('/ticket/{id}', [AuthController::class, 'ticketShow'])->name('ticket.show');

// Checkout



// User
Route::group(['middleware' => ['auth.middleware:user']], function () {
    Route::get('/cart/add/{id}', [UserController::class, 'cartAdd'])->name('cart.add');
    Route::get('/cart', [UserController::class, 'cart'])->name('cart');
    Route::get('/cart/destroy/{id}', [UserController::class, 'cartDestroy'])->name('cart.destroy');

    // Checkout
    Route::get('/checkout/{id}', [UserController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/process', [UserController::class, 'checkoutProcess'])->name('checkout.process');

    // Order
    Route::get('/order', [UserController::class, 'order'])->name('user.order');
    Route::get('/order/{id}', [UserController::class, 'orderShow'])->name('user.order.show');
});

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


    // Ticket
    Route::get('/admin/ticket', [AdminController::class, 'ticket'])->name('admin.ticket');
    Route::get('/admin/ticket/create', [AdminController::class, 'ticketCreate'])->name('admin.ticket.create');
    Route::post('/admin/ticket/store', [AdminController::class, 'ticketStore'])->name('admin.ticket.store');
    Route::get('/admin/ticket/edit/{id}', [AdminController::class, 'ticketEdit'])->name('admin.ticket.edit');
    Route::post('/admin/ticket/update/', [AdminController::class, 'ticketUpdate'])->name('admin.ticket.update');
    Route::get('/admin/ticket/destroy/{id}', [AdminController::class, 'ticketDestroy'])->name('admin.ticket.destroy');
});
