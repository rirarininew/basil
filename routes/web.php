<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('basil', 'BackendCustomerController@index');
Route::get('basil/dashboard', 'BackendCustomerController@dashboard')->name ('dashboard');
Route::get('basil/billings', 'BackendCustomerController@billings');

Route::get('basil/account', 'BackendCustomerController@account');
Route::get('basil/editAccount', 'BackendCustomerController@EditAccount');
Route::get('basil/editPassword', 'BackendCustomerController@EditPassword');

Route::get('basil/contactUs', 'BackendCustomerController@contactUs');


Route::get('basil/outlets', 'OutletController@index')->name ('outlets.index');
Route::get('basil/outlets/{outletModel}/edit', 'OutletController@edit')->name ('outlets.edit');
Route::get('basil/EditOutlets/{outletModel}', 'OutletController@show')->name ('outlets.show');
Route::put('basil/outlets/{outletModel}', 'OutletController@update')->name ('outlets.update');
Route::put('basil/outletsatus/{outletModel}', 'OutletController@updateStatus')->name ('outletsatus.update');
Route::post('basil/outlets', 'OutletController@store')->name ('outlets.store');
Route::get('basil/outlets/create', 'OutletController@create')->name ('outlets.create');
Route::get('/outlets/cari','OutletController@cari')->name ('outlets.cari');

Route::resource('basil/billings', 'SubsController');

Route::get('basil/account/CreateUserInOutlet', 'UserController@create')->name ('user.create');
Route::put('basil/account/{userModel}', 'UserController@update')->name ('user.update');
Route::put('basil/account/{userModel}/editpass', 'UserController@updatepassword')->name ('user.updatepassword');
Route::post('basil/accountStore', 'UserController@store')->name ('user.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {
	echo Hash::make('123123');
});
