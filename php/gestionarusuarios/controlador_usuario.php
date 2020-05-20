<?php 

	require_once './modelo_usuario.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$usuario = new Usuario();
			$resultado = $usuario->editar($datos);

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

			$usuario = new Usuario();
			$resultado = $usuario->crear($datos);

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

			$usuario = new Usuario();
			$resultado = $usuario->eliminar($datos['id']);

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

			$usuario = new Usuario();
			$usuario->consultar($datos['id']);

			if ($usuario->getId() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $usuario->getId(),
					'user' => $usuario->getUser(),
					'password' => $usuario->getContraseña(),
					'correo' => $usuario->getCorreo(),
					'rol' => $usuario->getRol(),
					'nom_empleado' => $usuario->getNom_empleado(),
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$usuario = new Usuario();
			$lista = $usuario->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>