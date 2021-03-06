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
Route::post('/choisir-role','Roles\ChoixController@choice');
Route::get('/tableau-de-bord','DashboardController@show')->name('user.dashboard');
Route::get('/chercherDemandesDeStructure','Demandes\IndexController@rechercherDemandes');
Route::get('/mes-demandes','Demandes\User\IndexController@show')->name('user.mes-demandes');
Route::get('/chercherMesDemandes','Demandes\User\IndexController@rechercher');

Route::get('/demandes/fiche-demande','Demandes\CreateController@show')->name('user.demandes.fiche');
Route::post('/demandes/fiche-demande','Demandes\CreateController@create');
Route::get('/demandes/{id}','Demandes\ShowController@show')->name('user.demande.show');

Route::get('/demandes/{id}/approbation','Demandes\StatusController@approuver')->name('user.demande.approbation');
Route::get('/demandes/{id}/refus','Demandes\StatusController@refuser')->name('user.demande.refus');


Route::get('/demandes/{id}/modifier','Demandes\EditController@show')->name('user.demandes.edit');
Route::post('/demandes/{id}/modifier','Demandes\EditController@update');
Route::get('/demandes/{id}/supprimer','Demandes\DeleteController@delete')->name('user.demandes.delete');

Route::get('/demandes/{id}/generate-pdf','PDFController@generatePDF')->name('user.demande.pdf');
