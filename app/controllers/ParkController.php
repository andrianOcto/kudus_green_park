<?php

class ParkController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$park = Park::all();
		$i=0;
		$arrayPhoto = array();
		foreach ($park as $key => $value) {
			$foto	= Photo::where('idpark', '=', $value->idpark)->first();
			if($foto!=null)
				$arrayPhoto[$i] = $foto->fileName;
			else 
				$arrayPhoto[$i] = "default.jpg";

			$i++;
		}

		return View::make('park/home')->with('park', $park)->with('foto',$arrayPhoto);
	}

	public function create()
	{
		return View::make('park/add-park');
	}

	public function edit($id)
	{
		$park = Park::find($id);
		$foto	= Photo::where('idpark', '=', $id)->get();
		return View::make('park/edit-park')->with('park', $park)->with('foto',$foto);
	}

	public function show($id)
	{
		$park 	= Park::find($id);
		$foto	= Photo::where('idpark', '=', $id)->get();
		// print_r($foto);
		return View::make('park/view-park')->with('park', $park)->with('foto',$foto);
	}

	public function store()
    {
    	$park 				= new Park;

    	$input 				= Input::all();
    	$nama				= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$longitude			= (isset($input['longitude'])) 	? $input['longitude']:null;
    	$latitude			= (isset($input['latitude'])) 	? $input['latitude']:null;
    	$deskripsi			= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;
    	$photos				= (isset($input['foto'])) 		? $input['foto']:null;

    	$park->nama_park	= $nama;
    	$park->alamat		= $alamat;
    	$park->longitude	= $longitude;
    	$park->latitude		= $latitude;
    	$park->deskripsi	= $deskripsi;

    	$park->save();
		
		$arrayPhoto			= json_decode($photos, true);

		for($i=0;$i<count($arrayPhoto);$i++)
		{
			$Photo 				= new Photo;
			$Photo->idpark		= $park->idpark;
			$Photo->fileName 	= $arrayPhoto[$i]."";
			$Photo->save();
		}

		//Log::info($input['foto']);    	
    }

    public function update($idpark)
    {
    	$input 				= Input::all();
    	$idpark				= (isset($input['idpark'])) 	? $input['idpark']:null;
    	$nama_park			= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$longitude			= (isset($input['longitude'])) 	? $input['longitude']:null;
    	$latitude			= (isset($input['latitude'])) 	? $input['latitude']:null;
    	$deskripsi			= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;
    	$listDel			= (isset($input['listDel'])) 	? $input['listDel']:null;
    	$photos				= (isset($input['foto'])) 		? $input['foto']:null;


    	$park 				= Park::find($idpark);

    	$park->nama_park	= $nama_park;
    	$park->alamat		= $alamat;
    	$park->longitude	= $longitude;
    	$park->latitude		= $latitude;
    	$park->deskripsi	= $deskripsi;

    	$park->save();

    	$arrayPhoto			= json_decode($listDel, true);
    	$arrayPhotoAdd			= json_decode($photos, true);

		$destinationPath  = public_path().'/files/photos/park';
    	
    	for($i=0;$i<count($arrayPhoto);$i++)
    	{
	    	$Photo 				= Photo::find($arrayPhoto[$i]);
	    			
			File::delete($destinationPath."/".$Photo->filename);
			File::delete($destinationPath."/thumb/".$Photo->filename);
			$Photo->delete();
	    }

   		$arrayPhoto			= json_decode($photos, true);

		for($i=0;$i<count($arrayPhotoAdd);$i++)
		{
			$Photo 				= new Photo;
			$Photo->idpark		= $park->idpark;
			$Photo->fileName 	= $arrayPhotoAdd[$i]."";
			$Photo->save();
		}


    }

	public function destroy($id)
	{
		$park = Park::find($id);
		$destinationPath  = public_path().'/files/photos/park';
		$foto	= Photo::where('idpark', '=', $id)->get();

		foreach ($foto as $key => $value) {
			File::delete($destinationPath."/".$value->fileName);
			File::delete($destinationPath."/thumb/".$value->fileName);
		}

		$park->delete();

		return Redirect::to('park');
	}

	public function upload()
	{

		$foto             = Input::file('file') ;    
		$destinationPath  = public_path().'/files/photos/park';
        $extension        = $foto->getClientOriginalExtension();
        $filename         = time()."_".str_random(12).".".$extension;
       	Session::put('pathImage', $filename);
        $foto->move($destinationPath, $filename);


        $img = Image::make($destinationPath."/".$filename)->resize(300, 200)->save($destinationPath."/thumb/".$filename);
        
        $answer = array( 'aaa' => $filename );
    	$json = json_encode( $answer );

    	echo $json;

	}
}
