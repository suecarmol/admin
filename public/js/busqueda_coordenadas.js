
$("#buscar").click(function() {

    var latitud = $("#latitud").val();
    if(latitud == ""){
        alert("La latitud no puede estar vacía");
        return;
    }

    var longitud = $("#longitud").val();
    if(longitud == ""){
        alert("La longitud no puede estar vacía");
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
                var distancia = objeto[i].dis;

                var colonia = resultado.suburb_id;
                var zip_code = resultado.zip_code;
                console.log(colonia+" - "+zip_code+" - "+distancia);

                var datos_tabla = '';
                datos_tabla += '<tr>';
                datos_tabla += '<td>'+colonia+'</td>';
                datos_tabla += '<td>'+zip_code+'</td>';
                datos_tabla += '<td>'+distancia+'</td>';
                datos_tabla += '</tr>';

                $(datos_tabla).appendTo("#resultados");

            }


        }
    });


});