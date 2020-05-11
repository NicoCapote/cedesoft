<?php 

	require_once 'modeloSucursales.php';

    $datos = $_GET;
    
    //SOLO ARREGLE LOS CASES DE CONSULTAR Y LISTAR, LOS OTROS FALTAN POR HACER

	switch ($_GET['accion']) {
		case 'editar':

			$pais = new Pais();
			$resultado = $pais->editar($datos);

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

			$pais = new Pais();
			$resultado = $pais->crear($datos);

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

			$pais = new Pais();
			$resultado = $pais->eliminar($datos['id']);

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

			$pais = new sucursal();
			$pais->consultar($datos['id']);

			if ($pais->getId() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
                    'id' => $pais->getId(),
                    'id_empresa' => $pais->getId_Empresa(),
                    'id_ciudad' => $pais->getId_Ciudad(),
					'sucursal' => $pais->getSucursal(),
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