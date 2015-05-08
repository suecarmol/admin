<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PeticionRequest;
use App\Http\Controllers\Controller;

use Request;

class ActualizacionesController extends Controller {

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

        return view('actualizaciones.index')
            ->with('states', $states);

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

    public function getMunicipios(PeticionRequest $request)
    {
        $estado = $request->get('estado');

        $municipios = \DB::collection('reach')
            ->select('municipality_name as text')
            ->where('state_id','=',$estado)
            ->orderBy('text')
            ->get();



            //->select('municipality_id AS id', 'municipality_name AS text')
            //->where('state_id', '=', $estado)
            //////->groupBy('municipality_name')
            //->orderBy('text')
            //->get();

        return $municipios;
    }

}
