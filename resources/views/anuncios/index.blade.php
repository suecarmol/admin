@extends('app')

@section('head')
    <script src="http://api.maps.nokia.com/2.1.1/jsl.js" type="text/javascript" charset="utf-8"></script>
@stop

@section('titulo')
    <!--<h3><i class="fa fa-angle-right"></i> Anuncios</h3>-->
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-inline">
                <li>Búsqueda por localidad: &nbsp;</li>
                <li>
                    <div class="form-group">
                        <label class="sr-only" for="estado">Estado</label>
                        <select class="form-control" name="states" id="estados_select">
                            @for($i = 0; $i < sizeof($states); $i++)
                                <option value="{{ $states[$i]['state_name'] }}">{{ $states[$i]['state_name'] }}</option>
                            @endfor
                        </select>
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <label class="sr-only" for="municipio">Municipio</label>
                        <select class="form-control" id="municipios_select">
                        </select>
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <label class="sr-only" for="colonia">Colonia</label>
                        <select class="form-control" id="colonias_select">
                        </select>
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <select id="zip_select" class="form-control"></select>
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <label class="sr-only" for="rango">Rango</label>
                        <select class="form-control" name="rango" id="rango">
                            <option value="1000">1000 m</option>
                            <option value="2000">2000 m</option>
                            <option value="5000">5000 m</option>
                            <option value="10000">10000 m</option>
                            <option value="20000">20000 m</option>
                        </select>
                    </div>
                </li>

                <li>
                    <button type="button" id="localidad" class="btn btn-success">Buscar</button>
                </li>

            </ul>
        </div><!-- /col-lg-12 -->
    </div><!-- /row -->

    <!--
    <div class="row">
        <div class="col-lg-12">

            <ul class="list-inline">

                <li>Búsqueda por coordenadas: &nbsp;</li>

                <li><label class="sr-only" for="latitud">Latitud</label></li>
                <li><input type="text" id="latitud" size="12" class="form-control" placeholder="latitud..." /></li>


                <li><label class="sr-only" for="longitud">Longitud</label></li>
                <li><input type="text" id="longitud" size="12" class="form-control" placeholder="longitud..." /></li>
                <li>
                    <label class="sr-only" for="rango">Rango</label>
                </li>
                <li>
                    <select class="form-control" name="rango" id="rango">
                        <option value="1000">1000 m</option>
                        <option value="2000">2000 m</option>
                        <option value="5000">5000 m</option>
                        <option value="10000">10000 m</option>
                        <option value="20000">20000 m</option>
                    </select>
                </li>
                <li>
                    <button type="button" id="coordenadas" class="btn btn-success">Buscar</button>
                </li>

            </ul>
        </div>
    </div><!-- /row -->

    <div id="coordenadas" style="display: none;">
        <p id="lat"></p>
        <p id="long"></p>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div id="mapContainer" style="height: 800px;"></div>
        </div>

    </div>

@stop

@section('scripts')
    <script>
        $("#li-anuncios").addClass('active');
    </script>

    <script>
        var token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('js/datos.js') }}" ></script>
    <script src="{{ asset('js/mapa.js') }}" ></script>


@stop
