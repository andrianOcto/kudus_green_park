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
		$park 		= Park::all();
		$kecamatan 	= Kecamatan::all();
		$desa 		= Desa::all();
        $jenisrth   = Jenis::all();
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

		return View::make('park/home')->with('park', $park)
							->with('foto',$arrayPhoto);
	}

	public function create()
	{
		$kecamatan 	= Kecamatan::all();
		$desa 		= Desa::all();
        $jenisrth   = Jenis::all();
        $status     = StatusTanah::all();
		return View::make('park/add-park')
							->with('kecamatan',$kecamatan)
							->with('desa',$desa)
                            ->with('jenisrth',$jenisrth)
                            ->with('status',$status);
	}

	public function edit($id)
	{
		$park = Park::find($id);
		$foto	= Photo::where('id_rth', '=', $id)->get();
		$kecamatan 	= Kecamatan::all();
		$desa 		= Desa::all();
        $jenisrth   = Jenis::all();
        $status     = StatusTanah::all();
		return View::make('park/edit-park')->with('park', $park)->with('foto',$foto)
											->with('kecamatan',$kecamatan)
											->with('desa',$desa)
				                            ->with('jenisrth',$jenisrth)
				                            ->with('status',$status);
	}

	public function show($id)
	{
		$park 	= Park::find($id);
		$foto	= Photo::where('id_rth', '=', $id)->get();
		// print_r($foto);
		return View::make('park/view-park')->with('park', $park)->with('foto',$foto);
	}

	public function store()
    {
    	$park 				= new Park;

    	$input 				= Input::all();
    	$id_rth				= (isset($input['id_rth'])) 	? $input['id_rth']:null; 
    	$nama				= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$jenis				= (isset($input['jenis'])) 		? $input['jenis']:null;
        $kecamatan			= (isset($input['kecamatan'])) 	? $input['kecamatan']:null;
        $desa				= (isset($input['desa'])) 		? $input['desa']:null;
        $status_lahan		= (isset($input['status_lahan'])) ? $input['status_lahan']:null;
        $luas				= (isset($input['luas'])) 		? $input['luas']:null;
        $longitude			= (isset($input['longitude'])) 		? $input['longitude']:null;
        $latitude			= (isset($input['latitude'])) 		? $input['latitude']:null;
        $jenis_tanaman		= (isset($input['jenis_tanaman'])) ? $input['jenis_tanaman']:null;
        $pengelola			= (isset($input['pengelola'])) 	? $input['pengelola']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$fungsi				= (isset($input['fungsi'])) 	? $input['fungsi']:null;
    	$photos				= (isset($input['foto'])) 		? $input['foto']:null;

    	$park->id_rth		= $desa.".".$jenis.".".$id_rth;
    	$park->nama	 		= $nama;
    	$park->jenis 		= $jenis;
		$park->kecamatan 	= $kecamatan;
		$park->desa 		= $desa;
		$park->status_lahan = $status_lahan;
		$park->luas 		= $luas;
		$park->longitude 	= $longitude;
		$park->latitude 	= $latitude;
		$park->jenis_tanaman= $jenis_tanaman;
		$park->pengelola 	= $pengelola;
    	$park->alamat		= $alamat;
    	$park->fungsi		= $fungsi;

    	$park->save();
		
		$arrayPhoto			= json_decode($photos, true);

		for($i=0;$i<count($arrayPhoto);$i++)
		{
			$Photo 				= new Photo;
			$Photo->id_rth		= $id_rth;
			$Photo->fileName 	= $arrayPhoto[$i]."";
			$Photo->save();
		}

		//Log::info($input['foto']);    	
    }

    public function update($idpark)
    {
    	$input 				= Input::all();
    	$id_rth				= (isset($input['id_rth'])) 	? $input['id_rth']:null; 
    	$nama				= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$jenis				= (isset($input['jenis'])) 		? $input['jenis']:null;
        $kecamatan			= (isset($input['kecamatan'])) 	? $input['kecamatan']:null;
        $desa				= (isset($input['desa'])) 		? $input['desa']:null;
        $status_lahan		= (isset($input['status_lahan'])) ? $input['status_lahan']:null;
        $luas				= (isset($input['luas'])) 		? $input['luas']:null;
        $longitude			= (isset($input['longitude'])) 		? $input['longitude']:null;
		$latitude			= (isset($input['latitude'])) 		? $input['latitude']:null;
        $jenis_tanaman		= (isset($input['jenis_tanaman'])) ? $input['jenis_tanaman']:null;
        $pengelola			= (isset($input['pengelola'])) 	? $input['pengelola']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$fungsi				= (isset($input['fungsi'])) 	? $input['fungsi']:null;
    	$listDel			= (isset($input['listDel'])) 	? $input['listDel']:null;
    	$photos				= (isset($input['foto'])) 		? $input['foto']:null;


    	$park 				= Park::find($id_rth);

    	$park->nama	 		= $nama;
    	$park->jenis 		= $jenis;
		$park->kecamatan 	= $kecamatan;
		$park->desa 		= $desa;
		$park->status_lahan = $status_lahan;
		$park->luas 		= $luas;
		$park->longitude 	= $longitude;
		$park->latitude 	= $latitude;
		$park->jenis_tanaman= $jenis_tanaman;
		$park->pengelola 	= $pengelola;
    	$park->alamat		= $alamat;
    	$park->fungsi		= $fungsi;

    	$park->save();

    	$arrayPhoto				= json_decode($listDel, true);
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
			$Photo->id_rth		= $id_rth;
			$Photo->fileName 	= $arrayPhotoAdd[$i]."";
			$Photo->save();
		}


    }

	public function destroy($id)
	{
		$park = Park::find($id);
		$destinationPath  = public_path().'/files/photos/park';
		$foto	= Photo::where('id_rth', '=', $id)->get();

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
    
    public function exportToExcel(){
        $query = DB::table('m_info_rth')
                    -> join('s_kecamatan','s_kecamatan.id','=','m_info_rth.kecamatan')
                    -> join('s_desa','s_desa.id','=','m_info_rth.desa')
                    -> join('s_status_lahan','s_status_lahan.id','=','m_info_rth.status_lahan')
                    -> join('s_jenis_rth','s_jenis_rth.id','=','m_info_rth.jenis')
                    -> select('m_info_rth.id_rth', 's_jenis_rth.jenis', 's_kecamatan.nama as kecamatan', 's_desa.nama as desa', 'm_info_rth.nama as rth', 'm_info_rth.alamat', 's_status_lahan.status', 'm_info_rth.luas', 'm_info_rth.jenis_tanaman', 'm_info_rth.fungsi', 'm_info_rth.pengelola')
                    -> orderBy('s_jenis_rth.jenis', 'asc')
                    -> get();
        
        $i=0;
        $datatabel = array();
        foreach($query as $data1){
            $result['id_rth'] = $data1->id_rth;
            $result['jenis'] = $data1->jenis;
            $result['kecamatan'] = $data1->kecamatan;
            $result['desa'] = $data1->desa;
            $result['rth'] = $data1->rth;
            $result['alamat'] = $data1->alamat;
            $result['luas'] = $data1->luas;
            $result['status'] = $data1->jenis;
            $result['jenis_tanaman'] = $data1->jenis_tanaman;
            $result['fungsi'] = $data1->fungsi;
            $result['pengelola'] = $data1->pengelola;
            
            $datatabel[$i] = $result;
            $i++;
        }
        
        $data = array(
            //title
            array('DATA RUANG TERBUKA HIJAU DI KABUPATEN KUDUS'),
            array(''),
            //tabel header
            array('Kode RTH','Jenis RTH','Kecamatan','Desa/Kelurahan','Nama RTH','Alamat RTH','Luas RTH','Status Lahan','Jenis Tanaman','Fungsi RTH','Pengelola')
            //tabel data
        );

        $i=0;
        $startArray = 3;
        foreach ($datatabel as $key) {
            $data[$startArray] =$datatabel[$i]; 
        $i++;
        $startArray++;
        }
        
        Excel::create('Data RTH Kab Kudus', function($excel) use($data) {
            $excel->sheet('Data RTH', function($sheet) use($data){
                
                //document manipulation
                $sheet->setOrientation('landscape');
                $sheet->setAutoSize(true);
                
                //cells manupulation
                $sheet->mergeCells('A1:K1');
                $sheet->cells('A1:K1', function($cells){
                    $cells->setFontSize(14);
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                });
                $sheet->cells('A3:K3', function($cells){
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                    $cells->setBorder('solid','solid','solid','solid');
                });
                $sheet->cells('A4:K4', function($cells){
                    $cells->setBorder('solid','solid','solid','solid');
                });
                
                //data
                $sheet->fromArray($data, null, 'A1', false, false);
                
            });
        })->download('xlsx');
    }
}
