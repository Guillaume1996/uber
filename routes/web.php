<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
});

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
('dashboard');
});

//Pour le client
Route::group(['middleware' => ['auth', 'role:client']], function() {
    Route::get('/dashboard/clientprofile', 'App\Http\Controllers\DashboardController@clientprofile')->name
('dashboard.clientprofile');
});

//Pour le restaurant
Route::group(['middleware' => ['auth', 'role:restaurant']], function() {
    Route::get('/dashboard/restaurantprofile', 'App\Http\Controllers\DashboardController@restaurantprofile')->name
('dashboard.restaurantprofile');
});

//Pour le livreur
Route::group(['middleware' => ['auth', 'role:livreur']], function() {
    Route::get('/dashboard/livreurprofile', 'App\Http\Controllers\DashboardController@livreurprofile')->name
('dashboard.livreurprofile');
});

//Pour l'administrateur
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/dashboard/adminprofile', 'App\Http\Controllers\DashboardController@adminprofile')->name
('dashboard.adminprofile');
});




require __DIR__.'/auth.php';
