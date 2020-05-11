<?php 

	require_once './modelo_paises.php';

	$datos = $_GET;

	switch ($_GET['accion']) {
		case 'editar':

			$pais = new Paises();
			$resultado = $pais->editar($datos);

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

			$pais = new Paises();
			$resultado = $pais->crear($datos);

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

			$pais = new Paises();
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

			$pais  = new Paises();
			$pais->consultar($datos['id']);

			if ($pais->getId_pais() == null) {
				$json = array(
                	'respuesta' => 'no existe'
            	);
			} else {
				$json = array(
					'id' => $pais->getId_pais(),
					'nom_pais' => $pais->getNom_pais(),
					//'id_pais' => $ciudad->getId_pais(),
					
                	'respuesta' => 'existe'
            	);
			}

			echo json_encode($json);
			
			break;

		case 'listar':

			$pais = new Paises();
			$lista = $pais->listar();

			echo json_encode(array('data' => $lista), JSON_UNESCAPED_UNICODE);

			break;
			
	}

 ?>