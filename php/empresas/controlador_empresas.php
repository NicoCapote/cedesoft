<?php 

	require_once './modeloEmpresa.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$empresa = new Empresa();
			$resultado = $empresa->editar($datos);

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

			$empresa = new Empresa();
			$resultado = $empresa->crear($datos);

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

			$empresa = new Empresa();
			$resultado = $empresa->eliminar($datos['id']);

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

			$empresa = new Empresa();
			$empresa->consultar($datos['id']);

			if ($empresa->getId() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $empresa->getId(),
					'nombre_empresa' => $empresa->getNombreEmpresa(),
					'no_nit' => $empresa->getNonit(),
					'pais' => $empresa->getId_pais(),
					'descripcion' => $empresa->getDescripcion(),
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$empresa = new Empresa();
			$lista = $empresa->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>