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
Route::controller('/id', 'TestController');
//Route::controller('/id/{id?}', 'TestController');
/*
Route::get('/id/{id?}', function($id = 5){
    echo "user".$id;
})->where('id', '[0-9]+');
*/
Route::get('/', 'BaseController@getIndex');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//default route не удалять
Route::controller('{id?}', 'BaseController');