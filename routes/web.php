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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('vendor', 'VendorController');
Route::resource('/um', 'UnitofmeasurementController');
Route::resource('/category', 'ItemCategoryController');
Route::resource('/location', 'LocationController');
Route::resource('item', 'ItemController');
Route::POST('filter', 'ItemController@filter')->name('filter');
Route::resource('/department', 'DepartmentController');
Route::resource('/brand', 'BrandController');