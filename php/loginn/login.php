<?php 

	require_once 'Modelo_login.php';

	if (!isset($_POST['usuario']) || !isset($_POST['clave']) || $_POST['usuario']=='' || $_POST['clave']=='') {
		header('location: ../../index.php');
	}

	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$login = new Login();
	$login->consultar($usuario);

	if ($login->getUsuario()==$usuario && $clave==$login->getClave()) {

		$rol = $login->getRol();

		session_start();

		$_SESSION['id'] = $login->getId();
		$_SESSION['usuario'] = $login->getUsuario();
		$_SESSION['rol'] = $rol;
		switch ($rol) {
			case 'admin':			
				header('location: ../administrar.php');
				break;
			case 'visitante':
				header('location: ../asda.php');
				break;
			case 'empleado':
				header('location: ../empleado.php');
				break;								
		}

	} else{
		header('location: ../../index.php');
	}
