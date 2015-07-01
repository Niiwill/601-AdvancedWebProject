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

Route::get('', 'WelcomeController@index');
//Route::get('', 'HomeController@odbrojavanje');
Route::get('', 'WelcomeController@BrojUserPorudzbina');

Route::post('porudzbina', 'WelcomeController@store');
Route::get('porudzbina', 'WelcomeController@create');
//Route::get('home', 'HomeController@index');
//Route::get('articles', array('as'=>'articles','uses'=>'ArticlesController@index'));
//Route::get('create', 'ArticlesController@create');
//Route::post('articles', 'ArticlesController@store');

Route::group(array('prefix' => 'admin', 'before' => array('auth|admin')), function()
{
    Route::get('panel', 'AdminController@index');
    Route::post('panel', 'AdminController@store');
    Route::get('panel/{id}', array('as'=>'panel','uses'=>'AdminController@view'));

});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
