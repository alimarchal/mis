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

Route::get('/', function () {
    return view('adminlte.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/customer', 'CustomerController');
Route::resource('/installment', 'InstallmentController');
Route::get('customer/{customer}/installment/create', 'InstallmentController@create');
Route::post('customer/{customer}/installment', 'InstallmentController@store');
Route::get('customer/{customer}/schedule', 'InstallmentController@show');
