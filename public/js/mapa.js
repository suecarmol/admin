console.log("Salve mundi!");

var map;

map = new nokia.maps.map.Display(
    document.getElementById("mapContainer"),
    {
        'zoomLevel': 7, // Zoom level for the map
        'center': [19.43046, -99.1885223], // Center coordinates}
        components: [new nokia.maps.map.component.Behavior(),
            new nokia.maps.map.component.TypeSelector(),
            new nokia.maps.map.component.ZoomBar(),
            new nokia.maps.map.component.RightClick()
        ]
    }
);

$("#localidad").click(function() {

    if(latitud == ""){
        alert("No hay latitud");
        return;
    }
    if(longitud == ""){
        alert("No hay longitud");
        return;
    }

    var rango = $("#rango").val();

    //Ahora paso a la búsqueda

    var url_busqueda = 'actualizaciones/busqueda';



    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_busqueda,
        type: 'GET',
        data: { latitud: latitud, longitud: longitud, rango: rango, "_token": token },
        cache: false,
        success: function(response_busqueda)
        {
            //limpio tabla
            $("#resultados").empty();


            console.log(response_busqueda);
            var objeto = response_busqueda.results;

            //console.log(objeto[0].obj);
            //console.log(objeto[0].dis);

            for(var i = 0; i < objeto.length; i++){

                var resultado = objeto[i].obj;

                var coord_res = resultado.loc.coordinates;

                var coord = [coord_res[1], coord_res[0]];

                var marcador = new nokia.maps.map.StandardMarker(coord);
                map.objects.add(marcador);

            }


        }
    });


});
