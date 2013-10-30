<?php

class MisiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$script = '<script src="'.URL::asset('assets/js/modules/misi.script.js').'"></script>';
		$misis = DB::table('misi')
						->join('visi','visi.id_visi','=','misi.id_visi')
						->orderBy('misi.id_misi')
						->paginate(10);
		
		/* Show available Visi*/
		$visis = DB::table('visi')->orderBy('id_visi')->get();
		return View::make('misi',array('title'=>'Misi'))->with(array('misis' => $misis, 'script' => $script, 'visis' => $visis));
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
	    	'misi'		=> 'required',
    		'id_visi' 	=> 'required'
    	);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{	
			return 'error';
		} 
		else 
		{
			$misi		= Input::get('misi');
			$id_visi	= Input::get('id_visi');
			DB::table('misi')->insert(
				array(
					'misi' 		=> $misi,
					'id_visi' 	=> $id_visi
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
		$misi = DB::table('misi')
						->join('visi','visi.id_visi', '=', 'misi.id_visi')
						->where('misi.id_misi', '=', $id)
						->first();
		return '{"id":"'.$misi->id_misi.'","misi":"'.$misi->misi.'","visi":"'.$misi->visi.'","id_visi":"'.$misi->id_visi.'","tahun" : "'.$misi->tahun.'"}';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$misi		= Input::get('misi');
		$id_visi	= Input::get('id_visi');
		DB::table('misi')
					->where('id_misi', '=', $id)
					->update(array('misi' => $misi, 'id_visi' => $id_visi));
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
		DB::table('misi')->where('id_misi', '=', $id)->delete();
		return 'success';
	}

}