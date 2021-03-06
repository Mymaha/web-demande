<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "site" middleware group. Now create something great!
|
*/

Route::get('/connexion','Auth\LoginController@show')->name('login');
Route::post('/connexion','Auth\LoginController@auth');
Route::get('/deconnexion','Auth\LogoutController@logout')->name('logout');

