@extends('app')

@section('titulo')
    <h3><i class="fa fa-angle-right"></i> Base de Datos</h3>
@stop

@section('content')
    <br>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-bordered table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> Estados</th>
                        <th>Bot&oacute;n</th>
                        <th> Municipios/Delegaciones</th>
                        <th> Colonias</th>
                        <th> C&oacute;digo Postal</th>
                        <th> Coordenadas</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>    
                                <select class="form-control" name="states" id="states"> 
                                    @for($i = 0; $i < sizeof($states); $i++)
                                        <option value="{{ $states[$i]['state_name'] }}">{{ $states[$i]['state_name'] }}</option>  
                                    @endfor
                                </select>  
                            </td>
                            <td>
                              <button id="update_municipality" class="btn btn-success">Actualizar</button>
                            </td>
                            <td>
                                <input id="municipalities" class="form-control js-example-data-array
">
                            </td>
                            <td>
                                <input id="suburbs" class="form-control js-example-data-array
">
                            </td>
                            <td>
                                <input id="zip_codes" class="form-control js-example-data-array
">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h3>Localidades cercanas a las coordenadas [{{$lat}}, {{$lng}}]</h3>
                  <table class="table table-bordered table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>Localidad</th>
                        <th>C&oacute;digo Postal</th>
                        <th>Distancia</th>
                      </tr>
                    </thead>
                    <tbody>
                    @for($j = 0; $j < sizeof($near['results']); $j++)
                      <tr>
                        <td> {{ $near['results'][$j]['obj']['suburb_id'] }} </td>
                        <td> {{ $near['results'][$j]['obj']['zip_code'] }} </td>
                        <td> {{ round($near['results'][$j]['dis'], 2) }} metros </td> 
                      </tr>  
                    @endfor
                    </tbody>
                  </table>
                  <h3>Estad&iacute;sticas</h3>
                  <h5>Distancia promedio</h5>
                  <p>{{ round($near['stats']['avgDistance'], 2) }} metros</p>
                  <h5>Distancia m&aacute;xima</h5>
                  <p>{{ round($near['stats']['maxDistance'], 2) }} metros</p>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
@stop

@section('scripts')
    <script>
        $("#li-datos").addClass('active');
    </script>

    <script>
      $(function() {
        var mun = [];
        @for($i = 0; $i < sizeof($municipalities_array); $i++)
            mun[{{$i}}] = '{{$municipalities_array[$i]}}';
        @endfor
        var availableTags = mun;
        $( "#municipalities" ).autocomplete({
          source: availableTags
        });
      });
    </script>

    <script>
      $(function() {
        var sub = [];
        @for($i = 0; $i < sizeof($suburbs_array); $i++)
            sub[{{$i}}] = '{{$suburbs_array[$i]}}';
        @endfor
        var availableTags = sub;
        $( "#suburbs" ).autocomplete({
          source: availableTags
        });
        $(".js-example-data-array").select2({
            data: sub
        });

      });
    </script>

    <script>      
      $(function() {
        var zc = []; 
        @for($i = 0; $i < sizeof($zip_codes_array); $i++)
            zc[{{$i}}] = '{{$zip_codes_array[$i]}}';
        @endfor 
        var availableTags = zc;
        $( "#zip_codes" ).autocomplete({
          source: availableTags
        });
      });
    </script>

@stop