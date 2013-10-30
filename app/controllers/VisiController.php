<?php

class VisiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$script = '<script src="'.URL::asset('assets/js/modules/visi.script.js').'"></script>';
		$visis 	= DB::table('visi')->orderBy('tahun')->paginate(10);
		$tahuns = DB::table('tahun')->orderBy('tahun')->get();
		return View::make('visi',array('title'=>'Visi'))->with(array('visis' => $visis, 'script' => $script, 'tahuns' => $tahuns));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	    $rules = array(
	    	'visi'		=> 'required',
    		'tahun' 	=> 'required|min:4'
    	);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{	
			return 'error';
		} 
		else 
		{
			$visi		= Input::get('visi');
			$tahun		= Input::get('tahun');
			DB::table('visi')->insert(
				array(
					'visi' 	=> $visi,
					'tahun' => $tahun
				)
			);
			return 'success';				
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$visi = DB::table('visi')->where('id_visi', '=', $id)->first();
		return '{"id":"'.$visi->id_visi.'","visi":"'.$visi->visi.'","tahun":"'.$visi->tahun.'"}';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$visi		= Input::get('visi');
		$tahun		= Input::get('tahun');
		DB::table('visi')->where('id_visi', '=', $id)->update(array('visi' => $visi, 'tahun' => $tahun));
		return 'success';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::table('visi')->where('id_visi', '=', $id)->delete();
		return 'success';
	}

}