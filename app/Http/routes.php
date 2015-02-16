<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' =>'PagesController@index']);
Route::get('products', ['as' => 'products', 'uses' => 'PagesController@products']);
Route::get('services', ['as' => 'services', 'uses' => 'PagesController@services']);
Route::get('quote', ['as' => 'quote', 'uses' => 'PagesController@quote']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('thanks', ['as' => 'thanks', 'uses' => 'PagesController@thanks']);

Route::post('quoterequest', ['as' => 'quoterequest', 'uses' => 'QuoteRequestController@submitQuote']);
Route::post('quoteuploads', 'QuoteFileUploadsController@receiveFile');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
