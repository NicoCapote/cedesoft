<?php 

	require_once './modeloEmpleado.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$empleado = new Empleado();
			$resultado = $empleado->editar($datos);

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

			$empleado = new Empleado();
			$resultado = $empleado->crear($datos);

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

			$empleado = new Empleado();
			$resultado = $empleado->eliminar($datos['id']);

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

			$empleado = new Empleado();
			$empleado->consultar($datos['id']);

			if ($empleado->getId() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $empleado->getId(),
					'nombre' => $empleado->getNom_empleado(),
					'usuario' => $empleado->getUsuario(),
					'password' => $empleado->getPassword(),
					'correo' => $empleado->getCorreo(),
					'edad' => $empleado->getEdad_empleado(),
					'genero' => $empleado->getGenero_empleado(),
					'sucursal' => $empleado->getId_sucursal(),
					'fecha_ingreso' => $empleado->getFecha_ingreso(),
					'fecha_salida' => $empleado->getFecha_salida(),
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$empleado = new Empleado();
			$lista = $empleado->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>