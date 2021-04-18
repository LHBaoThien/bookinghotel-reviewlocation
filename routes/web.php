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

Route::get('admincp/login', 'LoginController@getLogin')->name('authentication.login') ;
Route::post('admincp/login', 'LoginController@postLogin')->name('authentication.postlogin') ;
Route::get('admincp/register', 'LoginController@getRegister')->name('authentication.register') ;
Route::get('admincp/resetpassword', 'LoginController@getResetpassword')->name('authentication.resetpassword') ;
Route::get('admincp/logout', 'LoginController@getLogout')->name('authentication.logout') ;

Route::group(['middleware' => ['auth'], 'prefix' => 'admincp','namespace' => 'Admin'], function() {
	Route::get('dashboard', 'AdminController@index')->name('dashboard.index');
	// Quan ly tai khoan
	Route::prefix('account-manager')->group(function () {
		Route::get('list','AccountManagerController@getList')->name('account_manager.get_list');
		Route::get('add','AccountManagerController@getFormAccount')->name('account_manager.add_form_account');
		Route::post('add','AccountManagerController@postFormAccount')->name('account_manager.post_form_account');
        Route::get('edit/{id}', 'AccountManagerController@getEditAccount')->name('account_manager.get_edit_account');
        Route::post('edit/{id}', 'AccountManagerController@postEditAccount')->name('account_manager.post_edit_account');
        Route::get('delete/{id}', 'AccountManagerController@getDeleteAccount')->name('account_manager.get_delete_account');
	});
	// End Quan ly tai khoan
});
