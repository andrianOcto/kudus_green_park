<?php

class EventController extends BaseController {


	public function index()
	{
		$event = Kegiatan::all();
		return View::make('event/home')->with('event', $event);
	}

	public function create()
	{
		return View::make('event/create-event');
	}

	public function edit($id){
		$event = Kegiatan::find($id);
		Session::put('pathImage', $event->foto);
		return View::make('event/edit-event')->with('event', $event);
	}

	public function show($id)
	{
		$admin = Admin::find($id);

		return View::make('user/view-user')->with('admin', $admin);
	}

	public function destroy($id)
	{
		$event = Kegiatan::find($id);
		$destinationPath  = public_path().'/files/photos/user';
		File::delete($destinationPath."/".$event->foto);
		$event->delete();

		return Redirect::to('event');
	}

	public function store(){
    	$event 					= new Kegiatan;

    	$input	 				= Input::all();
    	$judul					= (isset($input['judul'])) 		? $input['judul']:null;
    	$kategori				= (isset($input['kategori'])) 	? $input['kategori']:null;
    	$deskripsi				= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;


		$event->judul			= $judul;
		$event->kategori		= $kategori;
		$event->deskripsi	 	= $deskripsi;
		$event->foto 			= Session::get('pathImage');

		$event->save();
    }

    public function update($id_event)
    {
    	$input	 				= Input::all();
    	$id_event				= (isset($input['id_event'])) 	? $input['id_event']:null;
    	$judul					= (isset($input['judul'])) 		? $input['judul']:null;
    	$kategori				= (isset($input['kategori'])) 	? $input['kategori']:null;
    	$deskripsi				= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;

		$event 					= Kegiatan::find($id_event);

		$event->judul			= $judul;
		$event->kategori		= $kategori;
		$event->deskripsi	 	= $deskripsi;
		$event->foto 			= Session::get('pathImage');
		Session::put('foto',$event->foto);

		$event->save();	
    }


	public function upload()
	{

		//Save image to server
		$foto             = Input::file('file') ;    
		$destinationPath  = public_path().'/files/photos/user';
        $extension        = $foto->getClientOriginalExtension();
        $filename         = time()."_".str_random(12).".".$extension;
        Session::put('pathImage', $filename);
        $foto->move($destinationPath, $filename);

        //create thumbnail
        $img = Image::make($destinationPath."/".$filename)->resize(300, 200)->save($destinationPath."/thumb/".$filename);

	}

	public function updateImage()
	{
		$name 			  = Session::get('pathImage');
		$destinationPath  = public_path().'/files/photos/user';
		File::delete($destinationPath."/".$name);
		File::delete($destinationPath."/thumb/".$name);
		
		//Save image to server
		$foto             = Input::file('file') ;    
		
        $extension        = $foto->getClientOriginalExtension();
        $filename         = time()."_".str_random(12).".".$extension;
        Session::put('pathImage', $filename);
        $foto->move($destinationPath, $filename);

        //create thumbnail
        $img = Image::make($destinationPath."/".$filename)->resize(300, 200)->save($destinationPath."/thumb/".$filename);

	}
	

}
