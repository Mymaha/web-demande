<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/


Route::get('/','RedirectToDashboard@redirect')->name('user.redirect.dashboard');
Route::get('/choisir-role','Roles\ChoixController@show')->name('user.role.choix');
Route::get('/tableau-de-bord','DashboardController@show')->name('user.dashboard');
Route::get('/fiche-demande','Demandes\CreateController@show')->name('user.demandes.fiche');
Route::get('/fiche-demande','Demandes\CreateController@show')->name('user.demandes.edit');