@extends('app')

@section('titulo')
    <h3><i class="fa fa-angle-right"></i> Base de Datos</h3>
@stop

@section('content')

    <br>

    <div class="row mt">
        <div class="col-md-8">
            <div class="content-panel">
                <table class="table table-bordered table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> Estados</th>
                        <th> Municipios/Delegaciones</th>
                        <th> Colonias</th>
                        <th> Zip Code</th>
                        <th> Coordenadas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Distrito Federal</td>
                        <td>
                            <select class="form-control" name="municipios" id="municipios">
                                <option value="Alvaro_Obregon">Álvaro Obregón</option>
                                <option value="Cuauhtemoc">Cuauhtémoc</option>
                                <option value="Iztapalapa">Iztapalapa</option>
                                <option value="Miguel_Hidalgo">Miguel Hidalgo</option>
                                <option value="Tlahuac">Tlahuac</option>
                                <option value="XOchimilco">Xochimilco</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="colonias" id="colonias">
                                <option value=""></option>
                                <option value="colonia1">Colonia 1</option>
                                <option value="colonia2">Colonia 2</option>
                                <option value="colonia3">Colonia 3</option>
                                <option value="colonia4">Colonia 4</option>
                                <option value="colonia5">Colonia 5</option>
                            </select>
                        </td>
                        <td><!-- <input type="text" disabled="" size="5" id="zip"> --></td>
                        <td>
                            <label>Latitud:</label><!--<input disabled="" type="text" size="12" id="latitud">--><br>
                            <label>Longitud:</label><!--<input disabled="" type="text" size="12" id="longitud">-->
                        </td>
                    </tr>

                    <tr>
                        <td>Oaxaca</td>
                        <td>
                            <select class="form-control" name="municipios" id="municipios">
                                <option value="">Santa Lucía del camino</option>
                                <option value="">San Bartolo Toyotepec</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="colonias" id="colonias">
                                <option value=""></option>
                                <option value="colonia1">Colonia 1</option>
                                <option value="colonia2">Colonia 2</option>
                                <option value="colonia3">Colonia 3</option>
                                <option value="colonia4">Colonia 4</option>
                                <option value="colonia5">Colonia 5</option>
                            </select>
                        </td>
                        <td><!--<input type="text" disabled="" size="5" id="zip">--></td>
                        <td>
                            <label>Latitud:</label><!--<input disabled="" type="text" size="12" id="latitud">--><br>
                            <label>Longitud:</label><!--<input disabled="" type="text" size="12" id="longitud">-->
                        </td>
                    </tr>

                    <tr>
                        <td>Coahuila</td>
                        <td>
                            <select class="form-control" name="municipios" id="municipios">
                                <option value="">Saltillo</option>
                                <option value="">Torreón</option>
                                <option value="">Piedras Negras</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="colonias" id="colonias">
                                <option value=""></option>
                                <option value="colonia1">Colonia 1</option>
                                <option value="colonia2">Colonia 2</option>
                                <option value="colonia3">Colonia 3</option>
                                <option value="colonia4">Colonia 4</option>
                                <option value="colonia5">Colonia 5</option>
                            </select>
                        </td>
                        <td><!--<input type="text" disabled="" size="5" id="zip">--></td>
                        <td>
                            <label>Latitud:</label><!--<input disabled="" type="text" size="12" id="latitud">--><br>
                            <label>Longitud:</label><!--<input disabled="" type="text" size="12" id="longitud">-->
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
@stop

@section('scripts')
    <script>
        $("#li-datos").addClass('active');
    </script>
@stop