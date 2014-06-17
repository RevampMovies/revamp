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

//Route::get('/', function()
//{
//	//return View::make('index');
//	Route::get('/', 'HomeController@showWelcome');
//});
Route::get('/', 'HomeController@showIndex');

//Route::get('cat/{id}', function($id)
//{
//    //Output: La route visualizzerà: Route dinamica - Cat 5
//    return 'Route dinamica - Cat'.$id;
//});

//Se non c'è la variabile ID quet'ultima assume il valore di default nullo
Route::get('cat/{id?}', function($cat= null)
{
    return "Categoria ".$cat;
});

//User Profile GET
Route::get('user/{user}', array('uses' => 'UserController@showProfile'))->where('user', '[A-Za-z]+');

//Login POST
Route::post('login', array('uses' => 'AuthController@postLogin'));

//Logout GET
Route::get('logout', 'AuthController@getLogout');

//Registration POST
Route::post('/register', array('uses' => 'AuthController@registration'));

//Film GET (single)
Route::get('film/{idfilm}', array('uses' => 'AppController@getfilm'))->where('idfilm', '[0-9]+');

//Search GET
Route::get('search', array('uses' => 'AppController@search'));

//Privacy GET
Route::get('privacy', function() {	return View::make('privacy'); });

//ToS GET
Route::get('terms', function() {	return View::make('tos'); });

//Fav POST
Route::post('addfav/{idfilm}', array('uses' => 'AppController@setFav'))->where('idfilm', '[0-9]+');

//Stream GET
Route::get('stream/{last}', array('uses' => 'AppController@stream'))->where('last', '[0-9]+');
