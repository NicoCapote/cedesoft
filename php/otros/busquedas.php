<?php

include('bd.php');

$busca = $_POST['busca'];

if(!empty($busca)){
    $query = "SELECT * FROM busqueda WHERE nom_bus LIKE '$busca%'";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die('ERROR'.mysqli_error($conexion));
    }

    $json = array();
    while($row = mysqli_fetch_array($resultado)){
        $json[] = array(
            'nombre' => $row['nom_bus'],
            'desc' => $row ['desc_bus'],
            'id' => $row ['id']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>