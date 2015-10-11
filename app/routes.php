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
Route::get('api/image/{name}', array('uses' => 'ApiController@getImage'));
Route::get('api/imageAll/{idpark}', array('uses' => 'ApiController@getThumbImage'));
Route::get('api/park/{idpark}', array('uses' => 'ApiController@getPark'));
Route::controller('api','ApiController');
Route::post('/', array('uses' => 'UserController@doLogin'));
Route::post('setSession', array('uses' => 'AuthController@postSetsession'));
Route::post('user/upload', array('uses' => 'UserController@upload'));
Route::post('park/upload', array('uses' => 'ParkController@upload'));
Route::post('user/{iduser}/updateImage', array('uses' => 'UserController@updateImage'));
Route::post('park/{iduser}/updateImage', array('uses' => 'ParkController@upload'));

// Route::group(array('before' => 'guest'), function() {
// 	Route::get('/', function()
// 	{
// 		return View::make('login');
// 	});
// });

Route::group(array('before' => 'auth'), function() {

	//menu utama
	Route::get('/home', function()
	{
		return View::make('home');
	});
	Route::get('/quote', function()
	{
		return View::make('edit-quote');
	});
	Route::get('logout', 'AuthController@doLogout');

	// resource route user
	Route::resource('user','UserController');

	// resource route park
	Route::resource('park', 'ParkController');

	// submit user's data route
	Route::post('/submit', array('uses' => 'UserController@store'));
	// update user's data route
	Route::post('/updateUser/{iduser}', array('uses' => 'UserController@update'));
	// submit park's data route
	Route::post('/submitPark', array('uses' => 'ParkController@store'));
	// update park's data route
	Route::post('/updatePark/{idpark}', array('uses' => 'ParkController@update'));
	// user delete route
	Route::get('user/{id}/destroy',['as'=>'user.delete','uses'=>'UserController@destroy']);
	// park delete route
	Route::get('park/{id}/destroy',['as'=>'park.delete','uses'=>'ParkController@destroy']);
});

App::missing(function($exception)
{
    return View::make('login');
});

Route::get('/', function(){
	return View::make('frontend/homepage');
});

Route::get('/rth', function(){
	return View::make('frontend/findrth');
});




