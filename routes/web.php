<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// route backend
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DriveController;
use App\Http\Controllers\Admin\GalleriShowcase;
use App\Http\Controllers\Admin\ProfitController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LogisticController;
use App\Http\Controllers\Admin\MercbannerController;
use App\Http\Controllers\Admin\MerchantController;
use App\Http\Controllers\Admin\MerctutorController;
use App\Http\Controllers\Admin\ShowcaseController;
use App\Http\Controllers\Admin\MitraController;

// route frontend
use App\Http\Controllers\Admin\WhitelabelController;
use App\Http\Controllers\BlogController as ControllersBlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\FaqController as ControllersFaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Models\Merctutor;


Auth::routes();

// Rombakan route front end
Route::get('/', [HomeController::class, 'root'])->name('root');
Route::get('merchant', [HomeController::class, 'merchant'])->name('merchant');
Route::get('driver', [HomeController::class, 'driver'])->name('driver');
Route::get('layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('detailfaq', [HomeController::class, 'detailfaq'])->name('detailfaq');
Route::get('faq', [ControllersFaqController::class, 'faq'])->name('faq');
Route::get('blog', [ControllersBlogController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [BlogDetailsController::class, 'details'])->name('detail');


Route::prefix('admin')->group(function () {
    // Rombakan route backend
    Route::get('/', [PanelController::class, 'index'])->name('dashboard');

    //Konfigurasi Blog
    Route::resource('blog', BlogController::class);
    Route::post('blog/upload', [BlogController::class, 'upload'])->name('blog.upload');
    Route::resource('faq', FaqController::class);
    Route::post('faq/upload', [FaqController::class, 'upload'])->name('faq.upload');

    //Konfigurasi Header
    Route::resource('header', HeaderController::class);

    //Route Home Page
    Route::resource('about', AboutController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('category-page', CategoryController::class);
    Route::resource('profit', ProfitController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('logistic', LogisticController::class);
    Route::resource('mitra', MitraController::class);
    Route::resource('show-case', ShowcaseController::class);
    Route::resource('show-case.galery', GalleriShowcase::class);

    //Konfigurasi Mercbanner
    Route::resource('mercbanner', MercbannerController::class);
    Route::resource('merchant', MerchantController::class);
    Route::resource('merctutor', MerctutorController::class);
});


Route::resource('whitelabel', WhitelabelController::class);


Route::resource('whitelabel', WhitelabelController::class);
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\PanelController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\PanelController::class, 'updatePassword'])->name('updatePassword');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::put('panel/{$id}', [MerctutorController::class, 'update']);

//Konfigurasi Layanan
