var dt;

function vsucursal() {


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
        ]

    });

    vsucursal();

})