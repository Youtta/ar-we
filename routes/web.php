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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@redirect')->name('home.redirect');
Route::get('/{code?}','HomeController@index')->name('home');

Route::get('/{code?}/about-us', 'FrontendController@about')->name('about-us');
// Route::get('/{code?}/products/{slug}', 'FrontendController@product')->name('product');
Route::get('/{code?}/product-detail/{slug}', 'FrontendController@productDetail')->name('product-detail');

Route::get('/{code?}/contact-us', 'FrontendController@contact')->name('contact-us');
Route::post('{code?}/contact-us/message', 'FrontendController@contact_store')->name('contact.store');


// Route::get('/{code?}/product', 'FrontendController@about')->name('about-us');

Route::get('/{code?}/products', 'FrontendController@products')->name('product');


// Route::get('/{code?}/product', function () {
//   return view('product');
// });



