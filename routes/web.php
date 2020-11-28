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

// Route::get('/', "MasteringController@index");
// Route::get('/contact', "MasteringController@contact")->name('contact');

// Route::group(['namespace'=>'Frontend'],function(){
//  Route::get('/', "MasteringController@index");
//  Route::get('/contact', "MasteringController@contact")->name('contact');
// });

Route::get('/', "MasteringController@index")->name('index');
Route::get('/about', "MasteringController@about")->name('about');
Route::get('/product', "MasteringController@product")->name('product');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/create', "MasteringController@index");
    Route::get('/list', "MasteringController@index");
    Route::get('/users/1', "MasteringController@index");
});