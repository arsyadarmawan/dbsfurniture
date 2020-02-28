<?php

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

Route::get('/', 'ViewController@index')->name('home');

Route::prefix('home')->group(function () {
    Route::get('/about', 'ViewController@about')->name('aboutme');
    Route::get('/product', 'ViewController@product')->name('product');
    Route::get('/product/order/{id}','ViewController@orderForm')->name('order');
    Route::get('/contact', function () {
        return view('content.main.contact');
    });

    Route::get('/form', function () {
        return view('content.main.form');
    });

    Route::get('product/detail/{id}/', 'ViewController@showProduct')->name('detail');
    Route::post('product/','ViewController@orderStore')->name('store.order');
    // Route::get('order','CustomOrderController@index')->name('custom.index');
     Route::get('/ordercustom','ViewController@orderCustom')->name('orderCustom');
     Route::post('/subsc', 'ViewController@subscriber')->name('subscriber');

});




Auth::routes();
Route::prefix('backend')->group(function () {
    Route::resource('user','UserController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('desc', 'DescriptionController')->except(['destroy']);
    Route::resource('testi', 'TestimonialController')->only(['index', 'store','destroy']);
    Route::resource('feedback', 'FeedbackController')->only(['index', 'store']);
    Route::resource('order','OrderController')->only(['index','destroy']);
    Route::resource('custom','CustomOrderController')->except(['destroy','update']);
    Route::resource('category', 'CategoryController')->only(['index', 'store','destroy']);
    Route::resource('product', 'ProductController');
    Route::get('/profile', 'HomeController@profile')->name('profile');
});

