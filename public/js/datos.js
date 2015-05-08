console.log("Salve mundi!");

$('#estados_select').on('change', function() {
    //console.log( $(this).val() );

    var url_municipios = 'actualizaciones/municipios';
    var valor_estado = $(this).val();

    //console.log(token);

    //Lanzo petición ajax al controlador
    $.ajax({
        url: url_municipios,
        type: 'GET',
        data: { estado: valor_estado, "_token": token },
        cache: false,
        success: function(response_municipios)
        {
            //$('#something').html(response);
            console.log(response_municipios);
            $("#municipios_select").select2({
                data: response_municipios
            });

        }
    });

});


/*
function autocomplete_municipios(){
    $("municipios_select").select2({
        data: municipios
    });
}*/