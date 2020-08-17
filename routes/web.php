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
Route::middleware('role:admin')->group(function(){
Route::get('dashboard','BackendController@dashboard')->name('dashboard');
Route::resource('items','ItemController');//get-4 post-1 put-1 delete-1
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
});

Route::resource('orders','OrderController');

Route::get('itempage','FrontendController@itempage')->name('itempage');
Route::get('itemdetail/{id}','FrontendController@itemdetail')->name('itemdetail');
Route::get('register','FrontendController@register')->name('register');
Route::get('login','FrontendController@login')->name('login');
Route::get('checkout','FrontendController@checkout')->name('checkout');
Route::get('profile','FrontendController@profile')->name('profile');
Route::get('about','FrontendController@about')->name('about');
Route::get('/','FrontendController@home')->name('home');
Route::get('contact','FrontendController@contact')->name('contact');
Auth::routes();
Route::post('/getItem','FrontendController@getItem')->name('getItem');