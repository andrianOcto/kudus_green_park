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
	
}
