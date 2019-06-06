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
<<<<<<< HEAD
Route::post('/connexion','Auth\LoginController@auth');
=======
Route::post('/connexion','Auth\LoginController@auth');
Route::get('/deconnexion','Auth\LogoutController@logout')->name('logout');
>>>>>>> b4711315de1d17eded290ae94d1170e355ec6a78
