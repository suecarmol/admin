console.log("Salve mundi!");



$('#estados_select').on('change', function() {
    //console.log( $(this).val() );

    $('#municipios_select').empty();
    $('#colonias_select').empty();
    $('#zip_select').empty();


    var url_municipios = 'actualizaciones/municipios';
    var valor_estado = $(this).val();

    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_municipios,
        type: 'GET',
        data: { estado: valor_estado, "_token": token },
        cache: false,
        success: function(response_municipios)
        {
            //console.log(response_municipios);
            for(var i = 0; i < response_municipios.length; i++){
                var objeto = response_municipios[i];
                var nombre_municipio = objeto.municipality_name;

                var option = $('<option />');
                option.attr('value', objeto.municipality_name).text(nombre_municipio);

                $('#municipios_select').append(option);
            }


        }
    });

});


$('#municipios_select').on('change', function() {

    $('#colonias_select').empty();
    $('#zip_select').empty();

    var url_colonias = 'actualizaciones/colonias';
    var valor_municipio = $(this).val();

    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_colonias,
        type: 'GET',
        data: { municipio: valor_municipio, "_token": token },
        cache: false,
        success: function(response_colonias)
        {
            //console.log(response_municipios);
            for(var i = 0; i < response_colonias.length; i++){
                var objeto = response_colonias[i];
                var nombre_colonia = objeto.suburb_name;

                var option = $('<option />');
                option.attr('value', objeto.suburb_name).text(nombre_colonia);

                $('#colonias_select').append(option);
            }

        }
    });
});

var colonia;
$('#colonias_select').on('change', function() {

    $('#zip_select').empty();

    var url_zip = 'actualizaciones/zip';
    var valor_colonia = $(this).val();
    colonia = valor_colonia;

    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_zip,
        type: 'GET',
        data: { colonia: valor_colonia, "_token": token },
        cache: false,
        success: function(response_zip)
        {
            var opcion_vacia = $('<option />');
            $('#zip_select').append(opcion_vacia);

            //console.log(response_municipios);
            for(var i = 0; i < response_zip.length; i++){
                var objeto = response_zip[i];
                var nombre_colonia = objeto.zip_code;

                var option = $('<option />');
                option.attr('value', objeto.zip_code).text(nombre_colonia);

                $('#zip_select').append(option);
            }


            coordenadas_colonia();
        }
    });
});

var latitud = "";
var longitud = "";
function coordenadas_colonia(){
    var url_coordenadas_colonia = 'actualizaciones/coordenadas_colonia';
    var valor_colonia = colonia;

    console.log("Colonia seleccionada: "+colonia);

    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_coordenadas_colonia,
        type: 'GET',
        data: { colonia: valor_colonia, "_token": token },
        cache: false,
        success: function(response_coord)
        {
            console.log(response_coord);
            for(var i = 0; i < response_coord.length; i++){
                var objeto = response_coord[i];
                var coordenadas = objeto.loc.coordinates;

                console.log(coordenadas);

                $('#lat').html("Lat: "+coordenadas[1]);
                $('#long').html("Long: "+coordenadas[0]);
                latitud = coordenadas[1];
                longitud = coordenadas[0];
            }

        }
    });
}

$('#zip_select').on('change', function() {

    var url_coordenadas_zip = 'actualizaciones/coordenadas_zip';
    var valor_zip = $(this).val();

    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_coordenadas_zip,
        type: 'GET',
        data: { zip: valor_zip, "_token": token },
        cache: false,
        success: function(response_zip_coord)
        {

            //console.log(response_municipios);
            for(var i = 0; i < response_zip_coord.length; i++){
                var objeto = response_zip_coord[i];
                var coordenadas = objeto.loc.coordinates;

                console.log(coordenadas);

                $('#lat').html("Lat: "+coordenadas[1]);
                $('#long').html("Long: "+coordenadas[0]);
            }


            coordenadas_colonia();
        }
    });
});
