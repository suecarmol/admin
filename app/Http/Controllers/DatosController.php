<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DatosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$states = \DB::collection('reach')
		->select('state_name')
		->groupBy('state_name')
		->orderBy('state_name')
		->get();

		$municipalities = \DB::collection('reach')
		->select('municipality_name')
		->groupBy('municipality_name')
		->orderBy('municipality_name')
		->get();


		for ($i=0; $i < sizeof($municipalities); $i++) { 
			if($municipalities[$i]['municipality_name'] != NULL)
			{
				 $municipalities_array [] = $municipalities[$i]['municipality_name'];
			}
		}

		$zip_codes = \DB::collection('reach')
		->select('zip_code')
		->groupBy('zip_code')
		->orderBy('zip_code')
		->get();

		for ($i=0; $i < sizeof($zip_codes); $i++) { 
			if($zip_codes[$i]['zip_code'] != NULL)
			{
				 $zip_codes_array [] = $zip_codes[$i]['zip_code'];
			}
		}
		
		$suburbs = \DB::collection('reach')
		->select('suburb_name')
		->groupBy('suburb_name')
		->orderBy('suburb_name')
		->get();

		for ($i=0; $i < sizeof($suburbs); $i++) { 
			if($suburbs[$i]['suburb_name'] != NULL)
			{
				 $suburbs_array [] = $suburbs[$i]['suburb_name'];
			}
		}

		//var_dump($states);
		//var_dump($municipalities);
		//print_r($municipalities_array);
		//var_dump($zip_codes);
		//var_dump($suburbs);

		return view('datos.index')
		->with('states', $states)
		->with('municipalities_array', $municipalities_array)
		->with('zip_codes_array', $zip_codes_array)
		->with('suburbs_array', $suburbs_array);
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
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
