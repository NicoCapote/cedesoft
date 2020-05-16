var dt;

function empresas() {


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
        ]

    });

    empresas();

})