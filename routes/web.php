<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\bannerAdmin;
use App\Http\Controllers\admin\newsAdmin;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\pages\ieltsController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/beranda', [indexController::class, 'index'])->name('index.beranda');
Route::get('/service', [indexController::class, 'programs'])->name('index.programs');
Route::get('/informasi-visa', [indexController::class, 'information'])->name('index.information');
Route::get('/tentang-kami', [indexController::class, 'aboutus'])->name('index.aboutus');
Route::get('/formulir', [ieltsController::class, 'register'])->name('ielts.register');

// news Routing
Route::get('/berita', [newsController::class, 'index'])->name('index.news');
Route::get('/berita/{slug}+{id}', [newsController::class, 'detail'])->name('index.news.detail');

/* Routes Admin */
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.index');
    //Route::get('/profile', [profileAdmin::class, 'index'])->name('admin.profile');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');

});

// banners routing admin
Route::get('/banners', [bannerAdmin::class, 'index'])->name('admin.banners');
Route::get('/banners/create', [bannerAdmin::class, 'create'])->name('admin.banners.create');

// Routing news
Route::get('/news', [newsAdmin::class, 'index'])->name('admin.news');
Route::get('/news/create', [newsAdmin::class, 'create'])->name('admin.news.create');
Route::post('/news/create/store', [newsAdmin::class, 'store'])->name('admin.news.create.store');
Route::get('/news/edit/{id}', [newsAdmin::class, 'edit'])->name('admin.news.edit');
Route::put('/news/update/{id}', [newsAdmin::class, 'update'])->name('admin.news.update');
Route::get('/news/upload/editore', [newsAdmin::class, 'editor'])->name('admin.news.upload.editor');