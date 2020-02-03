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
/*Rutas del HOME*/
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

/*Rutas de los Clientes (CUSTOMERS)*/
Route::resource('customer', 'Admin\CustomerController');
Route::post('customer/search', 'Admin\CustomerController@search')->name('customer.search');

/*Rutas de HOTEL*/
Route::get('hotel/detalle/{hotel}', 'Admin\HotelController@getDatos')->name('hotel.detalle');
Route::get('hotel/edit/{hotel}', 'Admin\HotelController@editHotel')->name('hotel.edit');
Route::put('hotel/{hotel}', 'Admin\HotelController@updateHotel')->name('hotel.update');

/*Rutas de Servicios*/
Route::resource('service', 'Admin\ServiceController');

/*Rutas de Tipos de Habitación*/
Route::resource('room-types', 'Admin\RoomTypesController');

/*Rutas de Habitación*/
Route::resource('rooms', 'Admin\RoomController');

/*Rutas de Reservas (BOOKING)*/
Route::resource('booking', 'Admin\BookingController')->except('create');
Route::get('booking/create/{id}', 'Admin\BookingController@create')->where('id', '[1-9]+')->name('booking.create');