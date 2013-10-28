<?php

class TahunController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$script = '<script src="'.URL::asset('assets/js/modules/tahun.script.js').'"></script>';
		$tahun = DB::table('tahun')->orderBy('tahun')->paginate(10);
		return View::make('tahun',array('title'=>'Tahun'))->with(array('tahuns' => $tahun, 'script' => $script));
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
    		'tahun' 	=> 'required|min:4');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{	
			return 'error';
		} 
		else 
		{
			$tahun		= Input::get('tahun');
			DB::table('tahun')->insert(
				array(
					'tahun' 	=> $tahun
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
		$tahun = DB::table('tahun')->where('id_tahun', '=', $id)->first();
		return '{"id":"'.$tahun->id_tahun.'","tahun":"'.$tahun->tahun.'"}';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tahun		= Input::get('tahun');
		DB::table('tahun')->where('id_tahun', '=', $id)->update(array('tahun' => $tahun));
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
		DB::table('tahun')->where('id_tahun', '=', $id)->delete();
		return 'success';
	}

	/**
	 * Set default actived data.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function actived($id)
	{
		//set all tahun as unactive
		DB::table('tahun')->update(array('active' => '0'));
		DB::table('tahun')->where('id_tahun', '=', $id)->update(array('active' => '1'));
		return 'success';
	}

}