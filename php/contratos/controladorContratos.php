<?php 

	require_once './modeloContrato.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$contrato = new Contrato();
			$resultado = $contrato->editar($datos);

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

			$contrato = new Contrato();
			$resultado = $contrato->crear($datos);

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

			$contrato = new Contrato();
			$resultado = $contrato->eliminar($datos['id']);

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

			$contrato = new Contrato();
			$contrato->consultar($datos['id']);

			if ($contrato->getId() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $contrato->getId(),
					'tipo_contra' => $contrato->getTipo_contrato(),
					'empleado' => $contrato->getId_empleado(),
					'empresa_perteneciente' => $contrato->getId_empresa(),
					'fecha_creacion' => $contrato->getFecha_creacion(),
					'fecha_expitacion' => $contrato->getFecha_expiracion(),
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$contrato = new Contrato();
			$lista = $contrato->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>