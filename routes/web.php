<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\MercbannerController;
use App\Http\Controllers\MerctutorController;
use App\Http\Controllers\WhitelabelController;
use App\Http\Controllers\DetailblogController;
use App\Models\Detailblog;
use App\Models\Merctutor;

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

Auth::routes();

// Rombakan route front end
Route::get('/', [HomeController::class, 'root'])->name('root');
Route::get('merchant', [HomeController::class, 'merchant'])->name('merchant');
Route::get('driver', [HomeController::class, 'driver'])->name('driver');
Route::get('layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
// Route::get('blog/{slug}', [HomeController::class, 'blog'])->name('blog');


Route::prefix('admin')->group(function () {
    // Rombakan route backend
    Route::get('/', [PanelController::class, 'index'])->name('dashboard');


    //Konfigurasi Blog
    Route::resource('panel/blog', BlogController::class);
    Route::post('blog/upload', [BlogController::class, 'upload'])->name('blog.upload');
});




Route::resource('blog-detail', DetailblogController::class);

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\PanelController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\PanelController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Index
// Route::get('/id', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

//Konfigurasi Header
Route::resource('panel/header', HeaderController::class);

//Konfigurasi About us
Route::resource('panel/about', AboutController::class);

//Konfigurasi Fasilitas
Route::resource('panel/banner', BannerController::class);

//Konfigurasi About 2
Route::resource('panel/profit', ProfitController::class);

//Konfigurasi Merchant
Route::resource('panel/merchant', MerchantController::class);

Route::resource('panel/mercbanner', MercbannerController::class);

Route::resource('panel/merctutor', MerctutorController::class);

Route::put('panel/{$id}', [MerctutorController::class, 'update']);

//Konfigurasi Service
Route::resource('panel/service', ServiceController::class);

//Konfigurasi Layanan
Route::resource('panel/category', CategoryController::class);

//Konfigurasi Layanan
Route::resource('panel/mitra', MitraController::class);

//Konfigurasi Layanan
Route::resource('panel/mercbanner', MercbannerController::class);


//Konfigurasi Blog
Route::resource('panel/faq', FaqController::class);
Route::post('faq/upload', [\App\Http\Controllers\FaqController::class, 'upload'])->name('faq.upload');

Route::resource('panel/layanan/logistic', LogisticController::class);

//Konfigurasi Layanan
Route::resource('panel/layanan', LayananController::class);
Route::resource('panel/whitelabel', WhitelabelController::class);
