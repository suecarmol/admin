@extends('app')

@section('head')
    <script src="http://api.maps.nokia.com/2.1.1/jsl.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">

        #mapContainer {
            overflow:hidden;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            position: absolute;
        }
    </style>
@stop

@section('titulo')
    <h3><i class="fa fa-angle-right"></i> Anuncios</h3>
@stop

@section('content')
    <div class="row mt">
        <div class="col-lg-12">

            <!--<h4 class="mb"><i class="fa fa-angle-right"></i> Ingresa datos:</h4>-->
            <form class="form-inline" role="form">

                <div class="form-group">
                    <label class="sr-only" for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="Distrito_Federal">Distrito Federal</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Monterrey">Monterrey</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="municipio">Municipio</label>
                    <select class="form-control" name="municipio" id="municipio">
                        <option value=""></option>
                        <option value="Miguel_Hidalgo">Miguel_Hidalgo</option>
                        <option value="Xochimilco">Xochimilco</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="colonia">Colonia</label>
                    <select class="form-control" name="colonia" id="colonia">
                        <option value=""></option>
                        <option value="">Polanco</option>
                        <option value="">Anzures</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="rango">Rango</label>
                    <select class="form-control" name="rango" id="rango">
                        <option value="1">1 Km</option>
                        <option value="5">5 Km</option>
                        <option value="10">10 Km</option>
                        <option value="20">20 Km</option>
                        <option value="50">50 Km</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="zip">Zip Code</label>
                    <select class="form-control" name="zip" id="zip">
                        <option value="11560">11560</option>
                        <option value="11580">11580</option>
                    </select>
                </div>
                <button type="button" id="button1" class="btn btn-success">Buscar</button>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <label class="sr-only" for="latitud">Latitud</label>
                    <input type="text" id="latitud" size="12" class="form-control" placeholder="latitud...">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="longitud">Longitud</label>
                    <input type="text" id="longitud" size="12" class="form-control" placeholder="longitud...">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="rango">Rango</label>
                    <select class="form-control" name="rango" id="rango">
                        <option value="1">1 Km</option>
                        <option value="5">5 Km</option>
                        <option value="10">10 Km</option>
                        <option value="20">20 Km</option>
                        <option value="50">50 Km</option>
                    </select>
                </div>
                <button type="button" id="button2" class="btn btn-success">Buscar</button>

            </form>

            <form class="form-inline" role="form">

            </form>






        </div><!-- /col-lg-12 -->
    </div><!-- /row -->

    <div class="row mt">
        <div class="col-lg-12">
            <div id="mapContainer" style="height: 800px;"></div>
        </div>

    </div>

@stop

@section('scripts')
    <script>
        $("#li-anuncios").addClass('active');
    </script>
    <script type="text/javascript">
        var map = new nokia.maps.map.Display(
                document.getElementById("mapContainer"),
                {
                    'zoomLevel': 6, // Zoom level for the map
                    'center': [23.945376138076245, -102.53750054999995], // Center coordinates}
                    components: [new nokia.maps.map.component.Behavior(),
                        new nokia.maps.map.component.TypeSelector(),
                        new nokia.maps.map.component.ZoomBar(),
                        new nokia.maps.map.component.RightClick()
                    ]
                }
        );
    </script>
@stop
