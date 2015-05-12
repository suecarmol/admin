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
            ->select('municipality_name')
            ->where('state_id','=',$estado)
            ->orderBy('municipality_name')
            ->get();

        return $municipios;
    }

    public function getColonias(PeticionRequest $request)
    {
        $municipio = $request->get('municipio');

        $colonias = \DB::collection('reach')
            ->select('suburb_name')
            ->where('municipality_id','=',$municipio)
            ->orderBy('name')
            ->get();

        return $colonias;
    }

    public function getCoordenadascolonia(PeticionRequest $request)
    {
        $colonia = $request->get('colonia');

        $coordenadas = \DB::collection('reach')
            ->select('loc.coordinates')
            ->where('suburb_id','=',$colonia)
            ->get();

        return $coordenadas;
    }

    public function getZip(PeticionRequest $request)
    {
        $colonia = $request->get('colonia');

        $zips = \DB::collection('reach')
            ->select('zip_code')
            ->where('suburb_id','=',$colonia)
            ->orderBy('zip_code')
            ->get();

        return $zips;
    }

    public function getCoordenadaszip(PeticionRequest $request)
    {
        $zip = $request->get('zip');

        $coordenadas = \DB::collection('reach')
            ->select('loc.coordinates')
            ->where('zip_code','=',$zip)
            ->get();

        return $coordenadas;
    }

    public function getBusqueda(PeticionRequest $request)
    {

        $mongodb = \DB::getMongoDB();

        $lat = $request->get('latitud');
        $lng = $request->get('longitud');
        $rango = $request->get('rango');

        $lat = floatval($lat);
        $lng = floatval($lng);
        $rango = intval($rango);

        $near = $mongodb->command(array(
            'geoNear' => "reach",
            'near' => array(
                'type' => "Point",
                'coordinates' => array(
                    $lng,
                    $lat
                )
            ),
            'spherical' => true,
            'maxDistance' => $rango ));

        return $near;
    }

}
