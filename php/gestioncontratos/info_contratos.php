<?php

include('bd.php');

if(isset($_POST['referencia'])) {
    $Ref = $_POST['referencia'];
    $Empleado = $_POST['empleado'];
    $Titulo = $_POST['tit_trabajo'];
    $Servicio = $_POST['nom_servicio'];
    $Salario = $_POST['salario'];
    $Comentarios = $_POST['comentario'];
    $Tipo_de_Contrato = $_POST['Tipo_de_Contrato'];
    $Duracion = $_POST['duracion'];
    $Pago = $_POST['forma_pago'];
    $EPS = $_POST['salud'];
    $Pension = $_POST['pension'];

    $query = "INSERT INTO contrato(id_contrato, ref_contrato, nom_empleado, t_trabajo, n_servicio, salario, comentarios, t_contrato, duracion, f_pago, salud, pension) 
    VALUES (NULL, '$Ref', '$Empleado', '$Titulo', '$Servicio', $Salario, '$Comentarios', '$Tipo_de_Contrato', ' $Duracion', '$Pago', '$EPS', '$Pension')";
    
}


?>