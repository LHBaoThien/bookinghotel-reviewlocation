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
    return view('welcome');
});

Route::get('/login', 'LoginController@getLogin')->name('authentication.login') ;
Route::get('/register', 'LoginController@getRegister')->name('authentication.register') ;
Route::get('/resetpassword', 'LoginController@getResetpassword')->name('authentication.resetpassword') ;

