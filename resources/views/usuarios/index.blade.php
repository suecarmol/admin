@extends('app')

@section('titulo')
    <h3><i class="fa fa-angle-right"></i> Usuarios</h3>
@stop

@section('content')
    <br><br>
    <div class="row mt">
        <div class="col-lg-12">
            <!--<a href="{{ url('auth/register') }}"><button class="btn btn-lg btn-primary">Registrar Usuario</button></a>-->
        </div>
    </div>

    <br>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-bordered table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Nombre</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Apellidos</th>
                        <th><i class="fa fa-bookmark"></i> E-Mail</th>
                        <th><i class=" fa fa-edit"></i> Password</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Gilberto</td>
                        <td class="hidden-phone">Silva González</td>
                        <td> 	A01018723@itesm.mx </td>
                        <td> 	$2y$10$RoyUJKWc8a2OvZBnOGTIs.O2ZlLh4G2Ds9kD/JMTOPPnpAKSHK4r6</td>

                    </tr>
                    <tr>
                        <td>Susana</td>
                        <td class="hidden-phone">Cárdenas Molinar</td>
                        <td> 	A01017722@itesm.mx </td>
                        <td> 	$2y$10$RoyUJKWc8a2OvZBnOGTIs.O2ZlLh4G2Ds9kD/JMTOPPnpAKSHK4r6</td>

                    </tr>
                    <tr>
                        <td>Eduardo</td>
                        <td class="hidden-phone">Garcia Posadas</td>
                        <td> 	A01167366@itesm.mx </td>
                        <td> 	$2y$10$RoyUJKWc8a2OvZBnOGTIs.O2ZlLh4G2Ds9kD/JMTOPPnpAKSHK4r6</td>

                    </tr>

                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->


@stop

@section('scripts')
    <script>
        $("#li-usuarios").addClass('active');
    </script>
@stop