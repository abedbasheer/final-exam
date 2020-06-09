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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/','productController@index')->name('index');
 Route::post('/store','productController@store')->name('product.save');
 Route::get('/edit/{id}','productController@edit')->name('product.edit');
 Route::post('/update/{id}','productController@update')->name('product.update');
 Route::get('/delete/{id}','productController@destroy')->name('product.delete');
