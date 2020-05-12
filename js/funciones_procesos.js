var dt;

function proceso() {


    $('#contenido').on('click', 'a.borrar', function () {

        var id = $(this).data('id');

        swal.fire({

            title: '¿Continuar?',
            text: '¿Realmente desea borrar este registro?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuar'

        }).then((e) => {

            if (e.value) {

                var request = $.ajax({

                    method: 'get',
                    url: './gestionprocesos/controlador_procesos.php',
                    data: {
                        id: id,
                        accion: 'borrar'
                    },
                    dataType: 'json'

                })

                request.done(function (e) {

                    if (e.respuesta == 'correcto') {

                        swal.fire(
                            'Borrado',
                            'El registro se ha eliminado con exito',
                            'success'
                        )

                        dt.ajax.reload();

                    } else {

                        swal.fire({
                            type: 'error',
                            title: 'Error',
                            text: 'Ocurrio un error durante el proceso'
                        })

                    }

                });

                request.fail(function (jqXHR, textStatus) {

                    swal.fire({
                        type: 'error',
                        title: 'Error',
                        text: 'Ocurrio un error durante el proceso - ' + textStatus
                    })

                });

            }

        })

    });

    $('#contenido').on('click', 'button#cancelar', function () {

        $('#nuevo-editar').html('');
        $('#nuevo-editar').addClass('d-none');
        $('#proceso').removeClass('d-none');

    });


    $('#contenido').on('click', 'button#nuevo', function () {

        $('#nuevo-editar').load('./gestionprocesos/nuevo_proceso.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#proceso').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './gestionprocesos/controlador_procesos.php',
            data: { accion: 'listar' },
            dataType: 'json'

        })

    });

    $('#contenido').on('click', 'a.editar', function () {

        var id = $(this).data('id');
        $('#nuevo-editar').load('./gestionprocesos/editar_proceso.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#proceso').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './gestionprocesos/controlador_procesos.php',
            data: {
                id: id,
                accion: 'consultar'
            },
            dataType: 'json'

        }).done(function (e) {

            if (e.respuesta === "no existe") {

                swal.fire({
                    type: 'error',
                    title: 'Error',
                    text: 'El registro no existe'
                })

            } else {

                $('#id').val(e.id);
                $('#nom_proceso').val(e.nom_proceso);
                $('#desc_proceso').val(e.desc_proceso);
               
            }

        });
    });

}

function agregar() {
    var datos = $('#f-proceso').serialize();
    $.ajax({
        type: 'get',
        url: './gestionprocesos/controlador_procesos.php?accion=nuevo',
        data: datos,
        dataType: 'json'

    }).done(function (e) {

        if (e.respuesta == 'correcto') {

            swal.fire(
                'Agregado',
                'El registro se agrego correctamente',
                'success'
            )

            dt.ajax.reload();

            $('#nuevo-editar').html('');
            $('#nuevo-editar').addClass('d-none');
            $('#proceso').removeClass('d-none');

        } else {

            swal.fire({
                type: 'error',
                title: 'Error',
                text: 'Ocurrio un error durante el proceso'
            })

        }

    });
}

function actualizar() {
    var datos = $('#f-proceso').serialize(); //ESTE F.CIUDADES ES EL MISMO QUE SE LE PONE
    $.ajax({                                //AL ID DEL FORMULARIO EN CREAR CIUDAD Y EDITAR CIUDAD
                                            //LO MISMO PARA LAS OTRAS LINEAS PARECIDAS
        type: 'get',
        url: './gestionprocesos/controlador_procesos.php?accion=editar',
        data: datos,
        dataType: 'json'

    }).done(function (e) {

        if (e.respuesta == 'correcto') {

            swal.fire(
                'Actualizado',
                'Datos actualizados de forma correcta',
                'success'
            )

            dt.ajax.reload();

            $('#nuevo-editar').html('');
            $('#nuevo-editar').addClass('d-none');
            $('#proceso').removeClass('d-none'); //OBSERVE, ESTE #CIUDADES ES EL MISMO QUE 
            //SE LE PONE AL DIV DE INDEX.PHP AL PRINCIPIO
            //LO MISMO PARA LAS OTRAS LINEAS PARECIDAS
        } else {

            swal.fire({
                type: 'error',
                title: 'Error',
                text: 'Ocurrio un error durante el proceso'
            })

        }

    });
}

$(document).ready(() => {

    $('#contenido').off('click', 'button#nuevo');
    $('#contenido').off('click', 'a.editar');
    $('#contenido').off('click', 'a.borrar');
    $('#contenido').off('click', 'button#agregar');
    $('#contenido').off('click', 'button#actualizar');
    $('#contenido').off('click', 'button#cancelar');

    dt = $('#tabla').DataTable({

        'ajax': './gestionprocesos/controlador_procesos.php/?accion=listar',
        'columns': [
            { 'data': 'id' },
            { 'data': 'nom_proceso' },
            { 'data': 'desc_proceso' },
            {
                'data': 'id',
                render: function (data) {
                    return '<a href="#" data-id="' + data + '" class="btn btn-warning editar">Editar</a> ' +
                        '<a href="#" data-id="' + data + '" class="btn btn-danger borrar">Borrar</a>'
                }
            },
        ]

    });

    proceso();

})