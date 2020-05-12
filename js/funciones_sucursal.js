var dt;

function proveedor() {


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
                    url: './sucursales/controladorSucursales.php',
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
        $('#sucursal').removeClass('d-none');

    });


    $('#contenido').on('click', 'button#nuevo', function () {

        $('#nuevo-editar').load('./sucursales/nuevo_sucursal.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#sucursal').addClass('d-none');



        $.ajax({

            type: 'get',
            url: './empresas/controlador_empresas.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#id_empresa').append('<option value="' + value.id + '">' + value.nombre_empresa + "</option>")

            });

        });

        $.ajax({

            type: 'get',
            url: './gestiociudades/controlador_ciudades.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#id_ciudad').append('<option value="' + value.id + '">' + value.nom_ciudad + "</option>")

            });

        });

    });

    $('#contenido').on('click', 'a.editar', function () {

        var id = $(this).data('id');
        $('#nuevo-editar').load('./sucursales/editar_sucursal.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#proveedor').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './sucursales/controladorSucursales.php',
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
                $('#id_empresa').val(e.id_empresa);
                $('#id_ciudad').val(e.id_ciudad);
                $('#sucursal').val(e.sucursal);

            }

        });
        $.ajax({

            type: 'get',
            url: './empresas/controlador_empresas.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (contrato === value.id) {

                    $('#id_empresa').append('<option selected value="' + value.id + '">' + value.nombre_empresa + "</option>")

                } else {

                    $('#id_empresa').append('<option value="' + value.id + '">' + value.nombre_empresa + "</option>")
                }
            });

        });
        $.ajax({

            type: 'get',
            url: './gestiociudades/controlador_ciudades.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (contrato === value.id) {

                    $('#id_ciudad').append('<option selected value="' + value.id + '">' + value.nom_ciudad + "</option>")

                } else {

                    $('#id_ciudad').append('<option value="' + value.id + '">' + value.nom_ciudad + "</option>")
                }
            });

        });
    });

}

function agregar() {
    var datos = $('#f-proveedor').serialize();
    $.ajax({
        type: 'get',
        url: './sucursales/controladorSucursales.php?accion=nuevo',
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
            //       $('#ciudades').removeClass('d-none');

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
    var datos = $('#f-sucursal').serialize(); //ESTE F.CIUDADES ES EL MISMO QUE SE LE PONE
    $.ajax({                                //AL ID DEL FORMULARIO EN CREAR CIUDAD Y EDITAR CIUDAD
        //LO MISMO PARA LAS OTRAS LINEAS PARECIDAS
        type: 'get',
        url: './sucursales/controladorSucursales.php?accion=editar',
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
            $('#sucursal').removeClass('d-none'); //OBSERVE, ESTE #CIUDADES ES EL MISMO QUE 
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

        'ajax': './sucursales/controladorSucursales.php/?accion=listar',
        'columns': [
            { 'data': 'id' },
            { 'data': 'id_empresa' },
            { 'data': 'id_ciudad' },
            { 'data': 'sucursal' },
            {
                'data': 'id',
                render: function (data) {
                    return '<a href="#" data-id="' + data + '" class="btn btn-warning editar">Editar</a> ' +
                        '<a href="#" data-id="' + data + '" class="btn btn-danger borrar">Borrar</a>'
                }
            },
        ]

    });

    proveedor();

})