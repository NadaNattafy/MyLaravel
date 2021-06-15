<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\CompanyController;
use App\Http\Controllers\Website\AlbumController;
use LaravelLocalization;

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


// Route::resource('albums', AlbumController::class);


// Route::resource('posts', PostController::class);

// Route::get('/user', function(){

//     $users = \App\Models\User::with('album')->get();
//     foreach ($users as $user) {
//     return view('welcome');
//     }
// });

// Route::get('/user/{id}/albums', function($id){

//    $user = User::findOrFail($id);
//    return view('welcome');
// });

// Route::get('/album', function(){

//    $albums = \App\Models\Album::with('photo')->get();
//    foreach ($albums as $album) {
//        return view('welcome');
//    }
// });

// Route::get('/album/{id}/photos', function($id){

//    $album = Album::findOrFail($id);
//      return view('welcome');
// });

//Route::post('/user', 'UserController@store');

// Route::get('pictures', 'PictureController@index');
// Route::post('pictures', 'PictureController@store')->name('pictures.store');
// Route::get('website/about', function () {
//     return view('website.about');
// })->name('About');

// Route::get('website/contact', function () {
//     return view('website.contact');
// })->name('Contact');


// Route::get('website/services', function () {
//     return view('website.services');
// })->name('Services');

// Route::get('website/category', function () {
//     return view('website.category');
// })->name('Category');

// Route::get('website/home', function () {
//     return view('website.index');
// })->name('Index');


Route::get('admin/home', function () {
    return view('admin.layout.index');
});

Route::group(['prefix'=>'admin','as'=>'admin.'], function () {

    Route::resource('albums', Admin\AlbumController::class);

    Route::resource('photos',  Admin\PhotoController::class);

    Route::resource('users', Admin\UserController::class);

    Route::resource('services',  Admin\ServicesController::class);

   Route::resource('company', Website\CompanyController::class);

   Route::resource('menu', Website\MenuController::class);

});

    // //Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    // Route::group(['namespace' => 'App\Http\Controllers\Website'], function () {

    //     Route::resource('company', CompanyController::class);

    //     Route::resource('menu', MenuController::class);

    //     Route::get('website/gallery', 'AlbumController@index')->name('Gallery');

    //     Route::get('website/show/{id}', 'AlbumController@show')->name('Show');

    //     Route::get('website/contact', 'CompanyController@create')->name('Contact');

    // //Route::post('website/contact', 'CompanyController@store')->name('Contact.store');

    // Route::get('website/about', function () {
    //     return view('website.about');
    // })->name('About');

    // Route::get('website/services', function () {
    //     return view('website.services');
    // })->name('Services');

    // Route::get('website/category', function () {
    //     return view('website.category');
    // })->name('Category');

    // Route::get('website/home', function () {
    //     return view('website.index');
    // })->name('Index');


    //     Route::resource('laravellocalization', LaravelLocalizationController::class);

    // });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('website/about', function () {
            return view('website.about');
        })->name('About');

        Route::get('website/gallery', [AlbumController::class,'index'])->name('Gallery');

        Route::get('website/show/{id}', [AlbumController::class,'show'])->name('Show');

        Route::get('website/contact', [CompanyController::class,'create'])->name('Contact');

        Route::post('website/contact', [CompanyController::class,'store'])->name('Contact.store');

        // Route::resource('company', CompanyController::class);

        // Route::resource('menu', MenuController::class);
        Route::resource('company', Website\CompanyController::class);

   Route::resource('menu', Website\MenuController::class);


        Route::get('website/services', function () {
            return view('website.services');
        })->name('Services');

        Route::get('website/category', function () {
            return view('website.category');
        })->name('Category');

        Route::get('website/home', function () {
            return view('website.index');
        })->name('Index');

    });
