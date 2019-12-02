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
Route::resource('purchase', 'PurchaseController');
Route::POST('filter', 'ItemController@filter')->name('filter');
Route::resource('/department', 'DepartmentController');
Route::resource('/brand', 'BrandController');
Route::post('/purchase/fetch', 'PurchaseController@fetch')->name('fetch');
Route::post('/purchase/updateQty', 'PurchaseController@updateQty')->name('updateQty');
//Route::get('/displayItems', 'PurchaseController@displayItems')->name('displayItems');

/*$cat_id = 01;
$unit_id = 02;
$cat = str_pad($cat_id, 2, '0', STR_PAD_LEFT);
$unit = str_pad($unit_id, 2, '0', STR_PAD_LEFT);
$item = str_pad($cat_id, 4, '0', STR_PAD_LEFT);
echo $cat.$unit.$item;
//printf("%02d", $cat_id).printf("%02d", $unit_id).printf("%04d", $cat_id);*/