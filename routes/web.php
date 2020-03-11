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

Route::get('basil', 'BackendCustomerController@index');
Route::get('basil/dashboard', 'BackendCustomerController@dashboard');

Route::get('basil/outlets', 'BackendCustomerController@outlets');
Route::get('basil/CreateOutlets', 'BackendCustomerController@CreateOutlets');
Route::get('basil/EditOutlets', 'BackendCustomerController@EditOutlets');

Route::get('basil/billings', 'BackendCustomerController@billings');

Route::get('basil/account', 'BackendCustomerController@account');
Route::get('basil/editAccount', 'BackendCustomerController@EditAccount');
Route::get('basil/editPassword', 'BackendCustomerController@EditPassword');

Route::get('basil/contactUs', 'BackendCustomerController@contactUs');
