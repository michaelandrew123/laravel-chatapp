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

Route::prefix('auth')->group(function(){
    Route::get('init', 'ChatAppController@init');

    Route::post('login', 'ChatAppController@login');
    Route::post('register', 'ChatAppController@register');
    Route::post('logout', 'ChatAppController@logout');

});
