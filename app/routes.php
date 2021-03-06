<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('clients', 'HomeController');

Route::get('search' , 'SearchController@index');

Route::post('search', 'SearchController@clientsSearch');

Route::resource('payments', 'PaymentsController');
Route::resource('contacts', 'ContactsController');

