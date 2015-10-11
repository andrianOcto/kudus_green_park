<?php

class UserController extends BaseController {

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
		$admin = Admin::all();
		return View::make('user/home')->with('admin', $admin);
	}

	public function create()
	{
		return View::make('user/create-user');
	}

	public function edit($id){
		$admin = Admin::find($id);
		Session::put('pathImage', $admin->foto);
		return View::make('user/edit-user')->with('admin', $admin);
	}

	public function show($id)
	{
		$admin = Admin::find($id);

		return View::make('user/view-user')->with('admin', $admin);
	}

	public function destroy($id)
	{
		$admin = Admin::find($id);
		$destinationPath  = public_path().'/files/photos/user';
		File::delete($destinationPath."/".$admin->foto);
		$admin->delete();

		return Redirect::to('user');
	}

	public function store(){
    	$admin 					= new Admin;

    	$input	 				= Input::all();
    	$nama					= (isset($input['nama'])) 		? $input['nama']:null;
    	$username				= (isset($input['username'])) 	? $input['username']:null;
		$password				= (isset($input['password'])) 	? $input['password']:null;

		$admin->nama_lengkap	= $nama;
		$admin->username	 	= $username;
		$admin->password	 	= Hash::make($password);

		$admin->save();
    }

    public function update($iduser)
    {
    	$input	 				= Input::all();
    	$iduser 				= (isset($input['iduser'])) 	? $input['iduser']:null;
    	$nama					= (isset($input['nama'])) 		? $input['nama']:null;
    	$username				= (isset($input['username'])) 	? $input['username']:null;
		$password				= (isset($input['password'])) 	? $input['password']:null;

		$admin 					= Admin::find($iduser);

		$admin->nama_lengkap	= $nama;
		$admin->username	 	= $username;
		$admin->password	 	= Hash::make($password);
		$admin->save();	
    }

	public function doLogin()
	{
		return Redirect::to('home');
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
