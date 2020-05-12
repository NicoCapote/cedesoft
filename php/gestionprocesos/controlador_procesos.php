<?php 

	require_once './modelo_proceso.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$proceso = new Proceso();
			$resultado = $proceso->editar($datos);

			if ($resultado == true || $resultado > 0) {
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

			$proceso = new Proceso();
			$resultado = $proceso->crear($datos);

			if ($resultado == true || $resultado > 0) {
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

			$proceso = new Proceso();
			$resultado = $proceso->eliminar($datos['id']);

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

			$proceso = new Proceso();
			$proceso->consultar($datos['id']);

			if ($proveedor->getId_proveedor() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $proceso->getId_Proceso(),
					'nom_proceso' => $proceso->getNom_proceso(),
					'desc_proceso' => $proceso->getDesc_proceso(),
					
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$proveedor = new Proveedores();
			$lista = $proveedor->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>