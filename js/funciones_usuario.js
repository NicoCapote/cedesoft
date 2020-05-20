var dt;

function usuarios()
{
    $('#contenido').on('click','a.borrar', function() {

        var id = $(this).data('id');

        swal.fire({

            title: '¿Continuar?',
            text: '¿Realmente desea borrar este registrio?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuar'
        
        }).then((e) => {
            if (e.value) {

                var request = $.ajax({

                    method: 'get',
                    url: './gestionarusuarios/controlador_usuario.php',
                    data: {
                        id: id,
                        accion: 'borrar'
                    },
                    dataType: 'json'
                })

                request.done(function (e) {

                    if (e.respuesta == 'correcto'){

                        swal.fire(
                            'Borrado',
                            'El registro se ha eliminado con exito',
                            'success'
                        )

                        dt.ajax.reload();

                    } else {

                        swal.fire({
                            type: 'error',
                            title: 'Eror',
                            text: 'Ocurrio un erro durante el proceso'
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
        $('#usuarios').removeClass('d-none');

    });

    //CORRERIR TODO PARA CONTRATOS
    $('#contenido').on('click', 'button#nuevo', function () {

        $('#nuevo-editar').load('./gestionarusuarios/nuevo_usuario.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#usuarios').addClass('d-none');

        //primer combobox
        $.ajax({

            type: 'get',
            url: './roles/controlador_roles.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#rol').append('<option value="' + value.id + '">' + value.nom_rol + "</option>")

            });

        });
        //segundo combobox

        $.ajax({

            type: 'get',
            url: './empleados/controladorEmpleados.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#nom_empleado').append('<option value="' + value.id + '">' + value.nom_empleado + "</option>")

            });

        });

    });
        
    $('#contenido').on('click', 'a.editar', function () {

        var id = $(this).data('id');
        var sucursal;
        $('#nuevo-editar').load('./gestionarusuarios/editar_usuarios.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#usuarios').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './gestionarusuarios/controlador_usuario.php',
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
                $('#user').val(e.user);
                $('#password').val(e.password);
                $('#correo').val(e.correo);
                id_rol=e.id_rol
                id_empleado=e.id_empleado
            }

        });

        //aqui va el que viene de otra tabla
        $.ajax({

            type: 'get',
            url: './roles/controlador_roles.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (sucursal === value.id) {

                    $('#rol').append('<option selected value="' + value.id + '">' + value.nom_rol + "</option>")

                } else {

                    $('#rol').append('<option value="' + value.id + '">' + value.nom_rol + "</option>")
                }
            });

        });
        //aqui va el que viene de otra tabla
        $.ajax({

            type: 'get',
            url: './empleados/controladorEmpleados.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (sucursal === value.id) {

                    $('#nom_empleado').append('<option selected value="' + value.id + '">' + value.nom_empleado + "</option>")

                } else {

                    $('#nom_empleado').append('<option value="' + value.id + '">' + value.nom_empleado + "</option>")
                }
            });

        });
        
    });
}

function agregar() {
    var datos = $('#f-usuarios').serialize();

    $.ajax({

        type: 'get',
        url: './gestionarusuarios/controlador_usuario.php?accion=nuevo',
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
    var datos = $('#f-usuarios').serialize();
    $.ajax({

        type: 'get',
        url: './gestionarusuarios/controlador_usuario.php?accion=editar',
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
            $('#usuarios').removeClass('d-none');

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

        'ajax': './gestionarusuarios/controlador_usuario.php/?accion=listar',
        'columns': [
            { 'data': 'id' },
            { 'data': 'usuario' },
            { 'data': 'password' },
            { 'data': 'correo' },
            { 'data': 'rol' },
            { 'data': 'empleado' },
            {
                'data': 'id',
                render: function (data) {
                    return '<a href="#" data-id="' + data + '" class="btn btn-warning editar">Editar</a> ' +
                        '<a href="#" data-id="' + data + '" class="btn btn-danger borrar">Borrar</a>'
                }
            },
        ]

    });

    usuarios();

})