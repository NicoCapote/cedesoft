$(document).ready(function(){

    console.log('Nicole es lo mas');

    $('#buscador').keyup(function(e){
        let busca = $('#buscador').val();
        $.ajax({
            url: "./busquedas.php",
            type: "POST",
            data: {busca},
            success: function(respuesta){
                console.log(respuesta);
            }
        })
    })

    $('#contrato').submit(function(e){
        const datos = {
            Ref: $('#referencia').val(),
            Empleado: $('#empleado').val(),
            Titulo: $('#tit_trabajo').val(),
            Servicio: $('#nom_servicio').val(),
            Salario: $('#salario').val(),
            Comentarios: $('#comentario').val(),
            Tipo_de_Contrato: $('#tipo_contrato').val(),
            Duracion: $('#duracion').val(),
            Pago: $('#forma_pago').val(),
            EPS: $('#salud').val(),
            Pension: $('#pension').val()
        };
        $.post('../php/info_contratos.php', datos, function(respuesta){
            console.log(respuesta)
        });
        e.preventDefault();
    });


});

