<?php 

	require_once 'modeloSucursales.php';

    $datos = $_GET;
    
    //SOLO ARREGLE LOS CASES DE CONSULTAR Y LISTAR, LOS OTROS FALTAN POR HACER

	switch ($_GET['accion']) {
		case 'editar':

			$sucursal = new Sucursal();
			$resultado = $sucursal->editar($datos);

			if ($resultado > 0) {
				$json = array(
                	'respuesta' => 'correcto'
            	);
			} else {
				$json = array(
                	'respuesta' => 'error'
            	);
			}
            
			echo json_encode($json);

			break;

		case 'nuevo':

			$sucursal = new Sucursal();
			$resultado = $sucursal->crear($datos);

			if ($resultado > 0) {
				$json = array(
                	'respuesta' => 'correcto'
            	);
			} else {
				$json = array(
                	'respuesta' => 'error'
            	);
			}

			echo json_encode($json);

			break;

		case 'borrar':

			$sucursal = new sucursal();
			$resultado = $sucursal->eliminar($datos['id']);

			if ($resultado > 0) {
				$json = array(
                	'respuesta' => 'correcto'
            	);
			} else {
				$json = array(
                	'respuesta' => 'error'
            	);
			}
			
			echo json_encode($json);

			break;

		case 'consultar':

			$sucursal = new Sucursal();
			$sucursal->consultar($datos['id']);

			if ($sucursal->getId() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
                    'id' => $sucursal->getId(),
                    'id_empresa' => $sucursal->getId_Empresa(),
                    'id_ciudad' => $sucursal->getId_Ciudad(),
					'sucursal' => $sucursal->getSucursal(),
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$sucursal = new Sucursal();
			$lista = $sucursal->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>