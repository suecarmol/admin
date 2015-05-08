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
                            <th> Código Postal</th>
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
                            <td id="colonias"></td>
                            <td id="zip_code"></td>
                            <td id="coordenadas"></td>
                        </tr>
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
@endsection