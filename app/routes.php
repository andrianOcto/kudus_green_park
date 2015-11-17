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
Route::post('event/upload', array('uses' => 'EventController@upload'));
Route::post('park/upload', array('uses' => 'ParkController@upload'));
Route::post('event/{id_event}/updateImage', array('uses' => 'EventController@updateImage'));
Route::post('park/{iduser}/updateImage', array('uses' => 'ParkController@upload'));
Route::post('park/{iduser}/updateImageRencana', array('uses' => 'ParkController@uploadRencana'));
Route::get('desa/{id}', array('uses' => 'ApiController@getDesa'));
Route::get('rth/{id}', array('uses' => 'ApiController@getDetailRTH'));
Route::get('/findrth', array('uses' => 'ApiController@getRTH'));
Route::get('/getKecamatan', array('uses' => 'ApiController@getKecamatan'));
Route::get('detailevent/{id}', array('uses' => 'ApiController@getDetailEvent'));

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
		$kecamatan = Kecamatan::all()->count();
		$desa = Desa::all()->count();
		$jenis = Jenis::all()->count();
		$park = Park::all()->count();

		return View::make('home')->with('kecamatan',$kecamatan)
								->with('desa',$desa)
								->with('jenis',$jenis)
								->with('park',$park)


		;
	});
	Route::get('/quote', function()
	{
		return View::make('edit-quote');
	});
	Route::get('logout', 'AuthController@doLogout');

	// resource route user
	Route::resource('user','UserController');

	// resource route event
	Route::resource('event','EventController');

	// resource route park
	Route::resource('park', 'ParkController');

	// submit user's data route
	Route::post('/submit', array('uses' => 'EventController@store'));
	// update user's data route
	Route::post('/updateEvent/{id_event}', array('uses' => 'EventController@update'));
	// submit park's data route
	Route::post('/submitPark', array('uses' => 'ParkController@store'));
	// update park's data route
	Route::post('/updatePark/{idpark}', array('uses' => 'ParkController@update'));
	//update rencana park
	Route::post('/updateRencana/{idpark}', array('uses' => 'ParkController@updateRencana'));
	// user delete route
	Route::get('event/{id}/destroy',['as'=>'event.delete','uses'=>'EventController@destroy']);
	// park delete route
	Route::get('park/{id}/destroy',['as'=>'park.delete','uses'=>'ParkController@destroy']);
	//park edit rencana/realisasi
	Route::get('park/{id}/rencana',array('uses' => 'ParkController@rencana'));
	//Route Kecamatan
	Route::resource('kecamatan','KecamatanController');
	Route::get('kecamatan/{id}/destroy',['as'=>'kecamatan.delete','uses'=>'KecamatanController@destroy']);

	//Route Kecamatan
	Route::resource('sdesa','DesaController');
	Route::get('sdesa/{id}/destroy',['as'=>'sdesa.delete','uses'=>'DesaController@destroy']);
	//Route Jenis RTH
	Route::resource('jenis','JenisRTHController');
	Route::get('jenis/{id}/destroy',['as'=>'jenis.delete','uses'=>'JenisRTHController@destroy']);

	//Route Setting Video
	Route::resource('video','VideoController');

	// Route delete user
	Route::get('user/{id}/destroy',['as'=>'user.delete','uses'=>'UserController@destroy']);
    
    // Route export excel desa/kelurahan
    Route::get('export', array('uses' => 'DesaController@exportToExcel', 'as' => 'desa.export'));
    
    // Route export excel kecamatan
    Route::get('export', array('uses' => 'KecamatanController@exportToExcel', 'as' => 'kecamatan.export'));
    
    // Route export excel jenis rth
    Route::get('export', array('uses' => 'JenisRTHController@exportToExcel', 'as' => 'jenisrth.export'));
    
    // Route export excel event
    Route::get('export', array('uses' => 'EventController@exportToExcel', 'as' => 'event.export'));
    
    // Route export excel data rth
    Route::get('export', array('uses' => 'ParkController@exportToExcel', 'as' => 'rth.export'));
});

App::missing(function($exception)
{
    return View::make('login');
});

Route::get('/', function(){
	$video = Video::all();
	$post  = Kegiatan::where('kategori', '=', 1)->take(6)->get();
	$testimoni = Kegiatan::where('kategori', '=', 2)->get();
	$url="";
	foreach ($video as $item)
	{
	    $url=$item->url;
	}

	return View::make('frontend/homepage')
							->with('url',$url)
							->with('post',$post)
							->with('testimoni',$testimoni);
});

Route::get('/rth', function(){
	$id=1;
	$parkPage	= Park::paginate(10);
	$park 		= Park::paginate(10);
	$kecamatan 	= Kecamatan::all();
	$desa 		= Desa::all();
	$jenis		= Jenis::all();
	$i=0;
	$arrayPhoto = array();
	foreach ($park as $key => $value) {
		$foto	= Photo::where('id_rth', '=', $value->id_rth)->first();
		if($foto!=null)
			$arrayPhoto[$i] = $foto->fileName;
		else 
			$arrayPhoto[$i] = "default.jpg";

		$i++;
	}

	return View::make('frontend/generalrth')->with('park', $park)
						->with('foto',$arrayPhoto)
						->with('kecamatan', $kecamatan)
						->with('desa', $desa)
						->with('jenis', $jenis)
						->with('id',$id);
});


Route::get('/tentangkami',function(){
	return View::make('frontend/tentangkami');
});
Route::get('/tentangrth', function(){
	return View::make('frontend/tentangrth');
});
Route::get('/detailevent', function(){
	return View::make('frontend/detailevent');
});




