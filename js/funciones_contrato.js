var dt;

function contratos()
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
                    url: './contratos/controladorContratos.php',
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
        $('#contratos').removeClass('d-none');

    });

    //CORRERIR TODO PARA CONTRATOS
    $('#contenido').on('click', 'button#nuevo', function () {

        $('#nuevo-editar').load('./contratos/nuevo_contrato.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#contratos').addClass('d-none');

        //primer combobox
        $.ajax({

            type: 'get',
            url: './empleados/controladorEmpleados.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#empleado_responsable').append('<option value="' + value.id + '">' + value.nom_empleado + "</option>")

            });

        });
        //segundo combobox

        $.ajax({

            type: 'get',
            url: './empresas/controlador_empresas.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                $('#empresa_perteneciente').append('<option value="' + value.id + '">' + value.nombre_empresa + "</option>")

            });

        });

    });
        
    $('#contenido').on('click', 'a.editar', function () {

        var id = $(this).data('id');
        var sucursal;
        $('#nuevo-editar').load('./contratos/editar_contratos.php');
        $('#nuevo-editar').removeClass('d-none');
        $('#contratos').addClass('d-none');

        $.ajax({

            type: 'get',
            url: './contratos/controladorContratos.php',
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
                $('#tipo_contrato').val(e.tipo_contrato);
                $('#nom_empleado').val(e.empleado_responsable);
                $('#nom_empresa').val(e.empresa_perteneciente);
                $('#fecha_creacion').val(e.fecha_creacion);
                $('#fecha_expiracion').val(e.fecha_expiracion);
            }

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

                    $('#empleado_responsable').append('<option selected value="' + value.id + '">' + value.nom_empleado + "</option>")

                } else {

                    $('#empleado_responsable').append('<option value="' + value.id + '">' + value.nom_empleado + "</option>")
                }
            });

        });
        //aqui va el que viene de otra tabla
        $.ajax({

            type: 'get',
            url: './empresas/controlador_empresas.php',
            data: { accion: 'listar' },
            dataType: 'json'

        }).done(function (e) {

            $.each(e.data, function (index, value) {

                if (sucursal === value.id) {

                    $('#empresa_perteneciente').append('<option selected value="' + value.id + '">' + value.nombre_empresa + "</option>")

                } else {

                    $('#empresa_perteneciente').append('<option value="' + value.id + '">' + value.nombre_empresa + "</option>")
                }
            });

        });
    });
}

function agregar() {
    var datos = $('#f-contrato').serialize();

    $.ajax({

        type: 'get',
        url: './contratos/controladorContratos.php?accion=nuevo',
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
    var datos = $('#f-contrato').serialize();
    $.ajax({

        type: 'get',
        url: './contratos/controladorContratos.php?accion=editar',
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
            $('#contratos').removeClass('d-none');

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

        'ajax': './contratos/controladorContratos.php/?accion=listar',
        'columns': [
            { 'data': 'id' },
            { 'data': 'tipo_contra' },
            { 'data': 'empleado' },
            { 'data': 'empresa_perteneciente' },
            { 'data': 'fecha_creacion' },
            { 'data': 'fecha_expiracion' },
            {
                'data': 'id',
                render: function (data) {
                    return '<a href="#" data-id="' + data + '" class="btn btn-warning editar">Editar</a> ' +
                        '<a href="#" data-id="' + data + '" class="btn btn-danger borrar">Borrar</a>'
                }
            },
        ]

    });

    contratos();

})