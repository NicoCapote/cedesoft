<?php 

	require_once './modelo_proveedores.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$proveedor = new Proveedores();
			$resultado = $proveedor->editar($datos);

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

			$proveedor = new Proveedores();
			$resultado = $proveedor->crear($datos);

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

			$proveedor = new Proveedores();
			$resultado = $proveedor->eliminar($datos['id']);

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

			$proveedor = new Proveedores();
			$proveedor->consultar($datos['id']);

			if ($proveedor->getId_proveedor() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $proveedor->getId_proveedor(),
					'nom_proveedor' => $proveedor->getNom_proveedor(),
					'desc_proveedor' => $proveedor->getDesc_proveedor(),
					'id_contrato' => $proveedor->getId_contrato(),
					
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