<?php

class ApiController extends BaseController {
	
	//Route to halaman index
	public function getIndex()
	{
		echo "welcome to Hidden Park api";
	}

	//get Image Source
	public function getImage($name)
	{
		$destinationPath  = public_path().'/files/photos/park/thumb';
	    $file = File::get($destinationPath."/".$name);
	    $response = Response::make($file, 200);
	    
	    $response->header('Content-Type', 'image/jpg');

	    return $response;
	}

	//Route to login API
	public function getLogin()
	{	
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$username			= (isset($input['username'])) ? $input['username']:null;
		$password			= (isset($input['password'])) ? $input['password']:null;

		//if username didn't set
		if(!isset($input['username'])){
			$missingParameter[] = "username";
		}

		//if password didn't set
		if(!isset($input['password'])){
			$missingParameter[] = "password";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$user = User::find($username);
			
			//user found
			if(isset($user))
			{
				//check password
				if (Hash::check($password, $user->password))
				{
					$response 	= "OK";
					$statusCode = 200;
					$message 	= "Login success.";
					Session::put('username',$user->username);
					Session::put('foto',$user->foto);
					Session::put('iduser',$user->iduser);
				}
				//if password did not match
				else
				{
					$response 	= "FAILED";
					$statusCode = 200;
					$message 	= "Username dan password tidak cocok.";
				}
			}
			//if username not found
			else
			{
				$response 	= "FAILED";
				$statusCode = 200;
				$message 	= "Username tidak ditemukan.";
			}
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');
	}

	public function getPark($idpark=-99)
	{
		$returnData       = array();
        $response         = "OK";
        $statusCode       = 200;
        $result           = null;
        $message          = "Get all park data success.";
        $isError          = FALSE;
        $missingParams    = null;

        if(!$isError){
            try {
            	$arrayImage		= array();
            	if($idpark==-99)
            	{
                	$result['park'] = Park::all();
	                $i=0;
	                foreach (Park::all() as $park)
					{ 
						$foto = Photo::where('idpark', '=', $park->idpark)->take(1)->get();

						foreach ($foto as $key => $value) {
							$arrayImage[$i]=$value->fileName;
						}
						$i++;
					}

                }
                else
                {
					$result['park'] = Park::find($idpark);                	
					$i=0;

					$foto = Photo::where('idpark', '=', $idpark)->get();
					foreach ($foto as $key => $value) {
						$arrayImage[$i]=$value->fileName;
						$i++;
					}
                }
				$result['image'] = $arrayImage;                
            } catch (Exception $e) {
                $response = "FAILED";
                $statusCode = 400;
                $message = $e->getMessage();
            } // */
        }

        $returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
            );

        return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');
	}



	public function getThumbImage($idpark)
	{
		$returnData       = array();
        $response         = "OK";
        $statusCode       = 200;
        $result           = null;
        $message          = "Get all image data success.";
        $isError          = FALSE;
        $missingParams    = null;

        if(!$isError){
            try {
			$arrayImage		= array();
			$i=0;
            $foto	= Photo::where('idpark', '=', $idpark)->get();
            foreach ($foto as $key => $value) {
			$arrayImage[$i] = $value->fileName;	
			$i++;
			}
            $result['image'] = $arrayImage;

            } catch (Exception $e) {
                $response = "FAILED";
                $statusCode = 400;
                $message = $e->getMessage();
            } // */
        }

        $returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
            );

        return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');
	}

	//handling missing method
	public function missingMethod($parameters = array()) {
        echo "API not found. \n";
    }

    public function getDesa($id){
    	$desa = Desa::where('id_kecamatan','=', $id)->get();
    	return Response::json($desa)->header('access-control-allow-origin', '*');
    }

    public function getDetailRTH($id){
    	// $rth = Park::find($id);
    	$rth = DB::table('m_info_rth')
    					->join('s_kecamatan', 'm_info_rth.kecamatan', '=', 's_kecamatan.id')
    					->join('s_desa', 'm_info_rth.desa', '=', 's_desa.id')
    					->join('s_status_lahan', 'm_info_rth.status_lahan', '=', 's_status_lahan.id')
    					->join('s_jenis_rth', 'm_info_rth.jenis', '=', 's_jenis_rth.id')
    					->where('m_info_rth.id_rth', '=', $id)
    					->select('m_info_rth.id_rth','m_info_rth.jenis_tanaman', 'm_info_rth.fungsi', 'm_info_rth.luas', 'm_info_rth.fungsi', 'm_info_rth.pengelola', 'm_info_rth.alamat', 'm_info_rth.nama as nama_rth', 's_jenis_rth.jenis', 's_desa.nama as desa', 's_kecamatan.nama as kecamatan', 's_status_lahan.status')
    					->first();
    	$kecamatan 	= Kecamatan::all();
		$desa 		= Desa::all();
		$jenis		= Jenis::all();
		$foto		= Photo::where('id_rth', '=', $id)->get();

    	return View::make('frontend/findrth')
    						->with('rth', $rth)
							->with('kecamatan', $kecamatan)
							->with('desa', $desa)
							->with('foto',$foto)
							->with('jenis', $jenis);
    					// return Response::json($mbuh);

    }

    public function getRTH(){
    	$input 			= Input::all();
    	$jenis				= (isset($input['jenis'])) 		? $input['jenis']:null;
        $kecamatan			= (isset($input['kecamatan'])) 	? $input['kecamatan']:null;
        $desa				= (isset($input['desa'])) 		? $input['desa']:null;

	    $query = DB::table('m_info_rth');
	    			if($jenis != "all"){
	    				$query->where('jenis', '=', $jenis);
	    			}
	    			if($kecamatan != "all"){
	    				$query->where('kecamatan', '=', $kecamatan);
	    			}

	    			if($desa != "all"){
	    				$query->where('desa', '=', $desa);	
	    			}
	    

	   	$park = $query->get();

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
							->with('jenis', $jenis);

	}
    
	public function getCreatekecamatan()
	{
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$idKecamatan		= (isset($input['id'])) ? $input['id']:null;
		$namaKecamatan		= (isset($input['nama'])) ? $input['nama']:null;

		//if username didn't set
		if(!isset($input['id'])){
			$missingParameter[] = "id";
		}

		//if password didn't set
		if(!isset($input['nama'])){
			$missingParameter[] = "nama";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$kecamatan = Kecamatan::find($idKecamatan);
			
			//Kecamatan sudah ada
			if(isset($kecamatan))
			{
					$response 	= "FAILED";
					$statusCode = 200;
					$message 	= "Kecamatan sudah ada dalam database.";
			}

			//kecamatan tidak ada dan dimasukkan kedalam database
			else 
			{
				$kecamatan = new Kecamatan;

				$kecamatan->id = $idKecamatan;
				$kecamatan->nama = $namaKecamatan;

				$kecamatan->save();
				$response 	= "OK";
				$statusCode = 200;
				$message 	= "Create success.";
			}
			
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');

	}

	public function getEditkecamatan()
	{
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$idKecamatan		= (isset($input['id'])) ? $input['id']:null;
		$namaKecamatan		= (isset($input['nama'])) ? $input['nama']:null;

		//if username didn't set
		if(!isset($input['id'])){
			$missingParameter[] = "id";
		}

		//if password didn't set
		if(!isset($input['nama'])){
			$missingParameter[] = "nama";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$kecamatan = Kecamatan::find($idKecamatan);
			

				$kecamatan->nama = $namaKecamatan;

				$kecamatan->save();
				$response 	= "OK";
				$statusCode = 200;
				$message 	= "Edit success.";
			
			
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');

	}

	//API create Jenis RTH

	public function getCreatejenis()
	{
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$idJenis		= (isset($input['id'])) ? $input['id']:null;
		$namaJenis		= (isset($input['nama'])) ? $input['nama']:null;

		//if username didn't set
		if(!isset($input['id'])){
			$missingParameter[] = "id";
		}

		//if password didn't set
		if(!isset($input['nama'])){
			$missingParameter[] = "nama";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$jenis = Jenis::find($idJenis);
			
			//Kecamatan sudah ada
			if(isset($jenis))
			{
					$response 	= "FAILED";
					$statusCode = 200;
					$message 	= "jenis RTH sudah ada dalam database.";
			}

			//kecamatan tidak ada dan dimasukkan kedalam database
			else 
			{
				$jenis = new Jenis;

				$jenis->id = $idJenis;
				$jenis->jenis = $namaJenis;

				$jenis->save();
				$response 	= "OK";
				$statusCode = 200;
				$message 	= "Create success.";
			}
			
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');

	}

	public function getEditjenis()
	{
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$idJenis			= (isset($input['id'])) ? $input['id']:null;
		$namaJenis			= (isset($input['nama'])) ? $input['nama']:null;

		//if username didn't set
		if(!isset($input['id'])){
			$missingParameter[] = "id";
		}

		//if password didn't set
		if(!isset($input['nama'])){
			$missingParameter[] = "nama";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$jenis = Jenis::find($idJenis);
			
	
				$jenis->jenis = $namaJenis	;

				$jenis->save();
				$response 	= "OK";
				$statusCode = 200;
				$message 	= "Edit success.";
			
			
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');

	}

	public function getEditvideo()
	{
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$url			= (isset($input['url'])) ? $input['url']:null;
		$oldUrl				= (isset($input['oldUrl'])) ? $input['oldUrl']:null;
		//if username didn't set
		if(!isset($input['url'])){
			$missingParameter[] = "url";
		}

		//if username didn't set
		if(!isset($input['oldUrl'])){
			$missingParameter[] = "url";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$jenis = Video::find($oldUrl);
			
	
				$jenis->url = $url	;

				$jenis->save();
				$response 	= "OK";
				$statusCode = 200;
				$message 	= "Edit success.";
			
			
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');

	}


    public function getTentangKami(){
        return View::make('frontend/tentangkami');
    }
    
    public function getTentangRTH(){
        return View::make('frontend/tentangrth');
    }
    
    public function getDetailEvent(){
        return View::make('frontend/detailevent');
    }
}

