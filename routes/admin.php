<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/connexion','Auth\LoginController@show')->name('admin.login');
Route::post('/connexion','Auth\LoginController@auth');

Route::get('/tableau-de-bord','DashboardController@show')->name('admin.dashboard');