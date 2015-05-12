@extends('app')

@section('titulo')
    <!--<h3><i class="fa fa-angle-right"></i> Actualizaciones</h3>-->
@endsection

@section('content')

    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-archive"></i>&nbsp;<span>Datos</span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th> Estados</th>
                            <th> Municipios/Delegaciones</th>
                            <th> Colonias</th>
                            <th> Códigos Postales</th>
                            <th> Coordenadas</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                <select class="form-control" name="states" id="estados_select">
                                    @for($i = 0; $i < sizeof($states); $i++)
                                        <option value="{{ $states[$i]['state_name'] }}">{{ $states[$i]['state_name'] }}</option>
                                    @endfor
                                </select>
                            </td>
                            <!-- <select name="op" id="op" class="js-example-data-array"></select> -->
                            <td id="municipios"><select id="municipios_select" class="form-control"></select></td>
                            <td id="colonias"><select id="colonias_select" class="form-control"></select></td>
                            <td id="zip_code"><select id="zip_select" class="form-control"></select></td>
                            <td id="coordenadas">
                                <p id="lat"></p>
                                <p id="long"></p>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


    <br><br>

    <div class="row">
        <div class="col-lg-6">
            <ul class="list-inline">
                <li><input type="text" id="latitud" placeholder="latitud..." /></li>
                <li><input type="text" id="longitud" placeholder="longitud..." /></li>
                <li>
                    <select id="rango" class="form-control">
                        <option value="100">100 m</option>
                        <option value="1000">1000 m</option>
                        <option value="5000">5000 m</option>
                        <option value="10000">10000 m</option>
                        <option value="20000">20000 m</option>
                    </select>
                </li>
                <li><input type="button" id="buscar" class="btn btn-primary" value="Buscar" /></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <i class="fa fa-map-marker"></i>&nbsp;<span>Búsqueda por coordenadas</span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Colonia</th>
                            <th>Código Postal</th>
                            <th>Distancia</th>
                        </tr>
                        </thead>

                        <tbody id="resultados">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('scripts')
    <script>
        var token = "{{ csrf_token() }}";
    </script>
    <script>
        $("#li-actualizaciones").addClass('active');
    </script>
    <script src="{{ asset('public/js/datos.js') }}" ></script>
    <script src="{{ asset('public/js/busqueda_coordenadas.js') }}" ></script>
@endsection