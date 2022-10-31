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

Route::group(['middleware' => 'auth', 'verified', 'password.confirm', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('users', 'UserController@index')->name('users');
    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::get('doctors', 'DoctorController@index')->name('doctors');
    Route::impersonate();
});

require __DIR__ . '/auth.php';
