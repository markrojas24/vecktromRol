$(buscar_datos());



function buscar_datos(consulta){
    $.ajax({
        url: 'App/busca.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},

    })
    .done(function(){
       $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");

    })
}