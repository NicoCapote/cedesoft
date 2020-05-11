var dt;

function empresas() {


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
                    url: './empresas/controlador_empresas.php',
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
        $('#empresa').removeClass('d-none');

    });
    $('#contenido').on('click', 'button#nuevo', function () {

        $('#nuevo-editar').load('./empresas/nuevo_empresa.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#empresa').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './gestionpaises/controlador_paises.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#pais').append('<option value="' + value.id + '">' + value.nom_pais + "</option>")

            });

        });

    });

    $('#contenido').on('click', 'a.editar', function () {

        var id = $(this).data('id');
        var sucursal;
        $('#nuevo-editar').load('./empresas/editar_empresas.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#empresa').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './empresas/controlador_empresas.php',
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
                $('#nombre_empresa').val(e.nombre_empresa);
                $('#no_nit').val(e.no_nit);
                $('#pais').val(e.pais);
                $('#descripcion').val(e.descripcion);
            }

        });

        $.ajax({

            type: 'get',
            url: './gestionpaises/controlador_paises.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (sucursal === value.id) {

                    $('#pais').append('<option selected value="' + value.id + '">' + value.nom_pais + "</option>")

                } else {

                    $('#pais').append('<option value="' + value.id + '">' + value.nom_pais + "</option>")
                }
            });

        });
    });

}

function agregar() {
    var datos = $('#f-empresa').serialize();

    $.ajax({

        type: 'get',
        url: './empresas/controlador_empresas.php?accion=nuevo',
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
    var datos = $('#f-empresa').serialize();
    $.ajax({

        type: 'get',
        url: './empresas/controlador_empresas.php?accion=editar',
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
            $('#empresa').removeClass('d-none');

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

        'ajax': './empresas/controlador_empresas.php/?accion=listar',
        'columns': [
            { 'data': 'id' },
            { 'data': 'nombre_empresa' },
            { 'data': 'no_nit' },
            { 'data': 'id_pais' },
            { 'data': 'descripcion' },
            {
                'data': 'id',
                render: function (data) {
                    return '<a href="#" data-id="' + data + '" class="btn btn-warning editar">Editar</a> ' +
                        '<a href="#" data-id="' + data + '" class="btn btn-danger borrar">Borrar</a>'
                }
            },
        ]

    });

    empresas();

})