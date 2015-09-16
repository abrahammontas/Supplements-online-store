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

Route::get('/', function()
{
	return View::make('views/index');
});

/*Restful Controllers*/

Route::resource('perfiles','ProfileController');
Route::resource('articulos','ArticleController');
Route::resource('ofertas','DealsController');
Route::resource('productos','ProductsController');
Route::resource('usuarios','UsersController');
Route::resource('tipoproducto','TipoController');
Route::resource('marca','BrandController');
Route::resource('home','HomeController');
Route::resource('banner','BannerController');

/*Login Route*/

Route::group(array('prefix' => 'admin'), function()
{

    Route::controller('login','LoginController');
});

Route::group(array('prefix' => 'inicio'), function()
{

    Route::controller('home','HomeController');
});

Route::get('contacto', 'HomeController@getContacto');
Route::post('contacto', 'HomeController@postContacto');

Route::get('contacto_email', 'HomeController@getContactoEmail');
Route::post('contacto_email', 'HomeController@postContactoEmail');