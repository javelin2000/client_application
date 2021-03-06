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
    return redirect('dashboard');
});

Auth::routes();

Route::prefix('dashboard')->middleware('auth')->group(function (){
    Route::get('', 'UserController@create')->name('dashboard.create');
    Route::post('', 'UserController@store')->name('dashboard.store');
});
