<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\CompanyController;
use App\Http\Controllers\Website\AlbumController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\GetsettingController;
use App\Http\Controllers\Admin;

use LaravelLocalization;

use function App\Helpers\getsetting;

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

Route::get('website/master', function () {
    return view('website.layout.master');
})->name('Master');

Route::view('dashboard', 'website.layout.master');


Route::get('admin/home', function () {
    return view('admin.layout.index');
});

Route::group(['prefix'=>'admin','as'=>'admin.'], function () {

    Route::resource('albums', Admin\AlbumController::class);

    Route::resource('photos',  Admin\PhotoController::class);

    Route::resource('users', Admin\UserController::class);

    Route::resource('setting', Admin\SettingController::class);

    Route::resource('customer',  Admin\CustomerController::class);

    Route::resource('services',  Admin\ServicesController::class);

     Route::resource('contact',  Admin\ContactController::class);

   Route::resource('company', Website\CompanyController::class);

   Route::resource('menu', Website\MenuController::class);

});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('photomaker/about', function () {
            return view('website.about');
        })->name('About');

        Route::get('photomaker/gallery', [AlbumController::class,'index'])->name('Gallery');

        Route::get('photomaker/show/{id}', [AlbumController::class,'show'])->name('Show');

        Route::get('photomaker/about', [AboutController::class,'index'])->name('About');

        Route::get('photomaker/show/{id}/customer', [AboutController::class,'show'])->name('Show.customer');

        Route::get('photomaker/contact', [CompanyController::class,'create'])->name('Contact');

        Route::post('photomaker/contact', [CompanyController::class,'store'])->name('Contact.store');

        // Route::resource('company', CompanyController::class);

        // Route::resource('menu', MenuController::class);
        Route::resource('company', Website\CompanyController::class);

   Route::resource('menu', Website\MenuController::class);


        Route::get('photomaker/services', function () {
            return view('website.services');
        })->name('Services');

        Route::get('photomaker/category', function () {
            return view('website.category');
        })->name('Category');

        Route::get('photomaker/home', function () {
            return view('website.index');
        })->name('Index');

    });




