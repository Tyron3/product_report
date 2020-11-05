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

Route::group([ 'as' => 'admin.', 'prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => ['auth', 'admin']],
function(){
    Route::get('/', 'ReviewController@index')->name('home');
    Route::get('/create', 'ReviewController@create')->name('create');
    Route::post('/store', 'ReviewController@store')->name('store');
    Route::get('/edit/{id}', 'ReviewController@edit')->name('edit');
    Route::post('/update/{id}', 'ReviewController@update')->name('update');
    Route::get('/report', 'ReviewController@report')->name('report');
});

Route::group([ 'as' => 'user.', 'prefix' => 'user' , 'namespace' => 'User' , 'middleware' => ['auth', 'user']],
function(){
    Route::get('home','HomeController@index')->name('home');
});



