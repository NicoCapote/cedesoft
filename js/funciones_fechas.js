var dt;

$(document).ready(() => {

    $('#contenido').off('click', 'button#nuevo');
    $('#contenido').off('click', 'a.editar');
    $('#contenido').off('click', 'a.borrar');
    $('#contenido').off('click', 'button#agregar');
    $('#contenido').off('click', 'button#actualizar');
    $('#contenido').off('click', 'button#cancelar');

    dt = $('#tabla').DataTable({

        'ajax': './fechas/controladorFechas.php/?accion=listar',
        'columns': [
            { 'data': 'id_contrato' },
            { 'data': 'id_proceso' },
            { 'data': 'tipo_contrato' },
            { 'data': 'id_empleado' },
            { 'data': 'id_empresa' },
            { 'data': 'fecha_crear' },
            { 'data': 'fecha_fin' },
        ]

    });

})