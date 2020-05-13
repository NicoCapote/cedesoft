<?php 

	require_once './modelo_roles.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$rol = new Roles();
			$resultado = $rol->editar($datos);

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

			$rol = new Roles();
			$resultado = $rol->crear($datos);

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

			$rol = new Roles();
			$resultado = $rol->eliminar($datos['id']);

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

				$rol = new Roles();
				$rol->consultar($datos['id']);
	
				if ($rol->getId() == null) {
					$json = array(
						'respuesta' => 'no existe'
					);
				} else {
					$json = array(
						'id' => $rol->getId(),
						'nom_rol' => $rol->getNom_rol(),
						'descripcion' => $rol->getDescrip(),
						'respuesta' => 'existe'
					);
				}
	
				echo json_encode($json);
				
				break;

		case 'listar':

			$rol = new Roles();
			$lista = $rol->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}
