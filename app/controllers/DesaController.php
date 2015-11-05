<?php

class DesaController extends BaseController {



	public function index()
	{
		$desa = DB::table('s_desa')
						->join('s_kecamatan', 's_desa.id_kecamatan', '=', 's_kecamatan.id')
						->select('s_desa.id', 's_desa.nama as desa', 's_kecamatan.nama as kecamatan')
						->orderBy('s_kecamatan.nama', 'asc')
						->get();
		return View::make('desa/home')->with('desa', $desa);
	}

	public function create()
	{
		$kecamatan = Kecamatan::all();
		return View::make('desa/create-desa')->with('kecamatan', $kecamatan);
	}

	public function edit($id){
		$desa = Desa::find($id);
		$kecamatan = Kecamatan::all();
		return View::make('desa/edit-desa')->with('desa', $desa)
										->with('kecamatan', $kecamatan);
	}

	public function show($id)
	{
		
	}

	public function destroy($id)
	{
		$desa = Desa::find($id);
		$desa->delete();

		return Redirect::to('sdesa');
	}

	public function store(){
    }

    public function update($iduser)
    {
 
    }
	
    public function exportToExcel(){
        $query = DB::table('s_desa')
						->join('s_kecamatan', 's_desa.id_kecamatan', '=', 's_kecamatan.id')
						->select('s_desa.id', 's_desa.nama as desa', 's_kecamatan.nama as kecamatan')
						->orderBy('s_kecamatan.nama', 'asc')
						->get();
        
        $i=0;
        $datatabel = array();
        foreach($query as $data1){
            $result['id'] = $data1->id;
            $result['desa'] = $data1->desa;
            $result['kecamatan'] = $data1->kecamatan;
            
            $datatabel[$i] = $result;
            $i++;
        }
        
        $data = array(
            //title
            array('DAFTAR DESA/KELURAHAN DI KABUPATEN KUDUS'),
            array(''),
            //tabel header
            array('Kode Desa/Kelurahan','Nama Desa/Kelurahan','Kecamatan'),
            //tabel data
        );

        $i=0;
        $startArray = 3;
        foreach ($datatabel as $key) {
            $data[$startArray] =$datatabel[$i]; 
        $i++;
        $startArray++;
        }
        
        Excel::create('Daftar Desa Kelurahan', function($excel) use($data) {
            $excel->sheet('desa kelurahan', function($sheet) use($data){
                
                //document manipulation
                $sheet->setOrientation('portrait');
                $sheet->setAutoSize(true);
                
                //cells manupulation
                $sheet->mergeCells('A1:C1');
                $sheet->cells('A1:C1', function($cells){
                    $cells->setFontSize(14);
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                });
                $sheet->cells('A3:C3', function($cells){
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                    $cells->setBorder('solid','solid','solid','solid');
                });
                $sheet->cells('A4:C4', function($cells){
                    $cells->setBorder('solid','solid','solid','solid');
                });
                
                //data
                $sheet->fromArray($data, null, 'A1', false, false);
                
            });
        })->download('xlsx');
    }
}
