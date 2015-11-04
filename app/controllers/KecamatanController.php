<?php

class KecamatanController extends BaseController {

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
		$admin = Kecamatan::all();
		return View::make('kecamatan/home')->with('admin', $admin);
	}

	public function create()
	{
		return View::make('kecamatan/create-kecamatan');
	}

	public function edit($id){
		$admin = Kecamatan::find($id);
		return View::make('kecamatan/edit-kecamatan')->with('admin', $admin);
	}

	public function show($id)
	{
		$admin = Admin::find($id);

		return View::make('user/view-user')->with('admin', $admin);
	}

	public function destroy($id)
	{
		$admin = Kecamatan::find($id);
		$admin->delete();

		return Redirect::to('kecamatan');
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
	
    public function exportToExcel(){
        $query = Kecamatan::all();
        
        $i=0;
        $datatabel = array();
        foreach($query as $data1){
            $result['id'] = $data1->id;
            $result['nama'] = $data1->nama;
            
            $datatabel[$i] = $result;
            $i++;
        }
        
        $data = array(
            //title
            array('DAFTAR KECAMATAN DI KABUPATEN KUDUS'),
            array(''),
            //tabel header
            array('Kode Kecamatan','Nama Kecamatan')
            //tabel data
        );

        $i=0;
        $startArray = 3;
        foreach ($datatabel as $key) {
            $data[$startArray] =$datatabel[$i]; 
        $i++;
        $startArray++;
        }
        
        Excel::create('Daftar Kecamatan', function($excel) use($data) {
            $excel->sheet('kecamatan', function($sheet) use($data){
                
                //document manipulation
                $sheet->setOrientation('portrait');
                $sheet->setAutoSize(true);
                
                //cells manupulation
                $sheet->mergeCells('A1:C1');
                $sheet->cells('A1:B1', function($cells){
                    $cells->setFontSize(14);
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                });
                $sheet->cells('A3:B3', function($cells){
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                    $cells->setBorder('solid','solid','solid','solid');
                });
                $sheet->cells('A4:B4', function($cells){
                    $cells->setBorder('solid','solid','solid','solid');
                });
                
                //data
                $sheet->fromArray($data, null, 'A1', false, false);
                
            });
        })->download('xlsx');
    }
}
