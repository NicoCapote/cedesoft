var dt;

function empleados() {


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
                    url: './empleados/controladorEmpleados.php',
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
        $('#empleados').removeClass('d-none');

    });
    
    //VOY AQUI PARA SEGUIR COPIANDO
    $('#contenido').on('click', 'button#nuevo', function () {

        $('#nuevo-editar').load('./empleados/nuevo_empleado.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#empleados').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './sucursales/controladorSucursales.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#sucursal').append('<option value="' + value.id + '">' + value.sucursal + "</option>")

            });

        });

    });

    $('#contenido').on('click', 'a.editar', function () {

        var id = $(this).data('id');
        var sucursal;
        $('#nuevo-editar').load('./empleados/editar_empleados.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#empleados').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './empleados/controladorEmpleados.php',
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
                $('#nombre').val(e.nombre);
                $('#usuario').val(e.usuario);
                $('#password').val(e.password);
                $('#correo').val(e.correo);
                $('#edad_empleado').val(e.edad);
                $('#genero').val(e.genero);
                sucursal = e.sucursal;
                $('#fecha_ingreso').val(e.fecha_ingreso);
                $('#fecha_salida').val(e.fecha_salida);
            }

        });

        $.ajax({

            type: 'get',
            url: './sucursales/controladorSucursales.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (sucursal === value.id) {

                    $('#sucursal').append('<option selected value="' + value.id + '">' + value.sucursal + "</option>")

                } else {

                    $('#sucursal').append('<option value="' + value.id + '">' + value.sucursal + "</option>")
                }
            });

        });
    });

}

function agregar() {
    var datos = $('#f-empleado').serialize();

    $.ajax({

        type: 'get',
        url: './empleados/controladorEmpleados.php?accion=nuevo',
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
            $('#ciudades').removeClass('d-none');

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
    var datos = $('#f-empleado').serialize();
    $.ajax({

        type: 'get',
        url: './empleados/controladorEmpleados.php?accion=editar',
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
            $('#empleados').removeClass('d-none');

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

        'ajax': './empleados/controladorEmpleados.php/?accion=listar',
        'columns': [
            { 'data': 'id' },
            { 'data': 'nom_empleado' },
            { 'data': 'usuario' },
            { 'data': 'correo' },
            { 'data': 'edad_empleado' },
            { 'data': 'genero' },
            { 'data': 'id_sucursal' },
            { 'data': 'fecha_ingreso' },
            { 'data': 'fecha_salida' },
            {
                'data': 'id',
                render: function (data) {
                    return '<a href="#" data-id="' + data + '" class="btn btn-warning editar">Editar</a> ' +
                        '<a href="#" data-id="' + data + '" class="btn btn-danger borrar">Borrar</a>'
                }
            },
        ]

    });

    empleados();

})