<?php

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



// Route::group([], function () {
//     Route::get('/h', 'HomeController@index')->name('home');
//  });

// Route::get('/', 'PagesController@index')->name('index');
// Route::get('/contact', 'PagesController@contact')->name('contact');

// Route::get('/products','PagesController@products')->name('products');

// Route::group(['prefix' => 'admin'], function(){
//     Route::get('/','AdminPagesController@index')->name('admin.index');
//     Route::get('/product/create','AdminPagesController@product_create')->name('admin.product.create');
// });

Route::get('/','PagesController@index');
