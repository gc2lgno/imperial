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
Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::resource('customer', 'Admin\CustomerController');

Route::get('hotel/detalle/{hotel}', 'Admin\HotelController@getDatos')->name('hotel.detalle');
Route::get('hotel/edit/{hotel}', 'Admin\HotelController@editHotel')->name('hotel.edit');
Route::put('hotel/{hotel}', 'Admin\HotelController@updateHotel')->name('hotel.update');

Route::resource('service', 'Admin\ServiceController');
Route::resource('room-types', 'Admin\RoomTypesController');
Route::resource('rooms', 'Admin\RoomController');