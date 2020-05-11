<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5ed9b472e0.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilos_admin.css">
    <title>CEDESOFT ADMINISTRACION</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="../img/logo.jpg" alt="CECESOFT" height="38" width="" style="box-align: left">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <div class="container">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <div class="container">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-info">Filtrar</button>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                        <a class="dropdown-item" href="#">Fecha de creacion</a>
                                        <a class="dropdown-item" href="#">Area de Sistemas</a>
                                        <a class="dropdown-item" href="#">Area de Contabilidad</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">&laquo;</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <input id="buscador" class="form-control mr-sm-2" type="text" placeholder="Buscar... (ej. numero de referencia)">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        <form class="form-inline my-2 my-lg-0">
                            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                            <script>
                                src = "popup.js"
                            </script>
                        </form>
                    </li>
                    <li>
                    <li>
                        <form class="form-inline" method="POST" action="./loginn/logout.php">
                            <input class="btn btn-danger my-2 my-sm-0" type="submit" value="cerrar sesion" id="CerrarSesion" name="CerrarSesion">
                        </form>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------------------------------------------------------------------------->
    <!--SIDE NAVI-->
    <!------------------------------------------------------------------------->
    <!------------------------------------------------------------------------->
    <!--TABLE-->
    <!------------------------------------------------------------------------->
    <div class="card-body mt-2 contenedor col-10" id="contenedor">
        <div class="card">
            <h5 class="card-header">Administracion de contratos</h5>
            <div class="card-body">
                <ul id="opciones">
                    <li><a href="../php/contratos/index.php"><i class="fas fa-file-contract"></i>Contratos</a></li>
                    <li><a href="../php/empleados/index.php"><i class="fas fa-users"></i>Empleados</a></li>
                    <li><a href="../php/empresas/index.php"><i class="fas fa-users"></i>Empresa</a></li>
                    <li><a href="../php/gestionpaises/index.php"><i class="fas fa-users"></i>Pais</a></li>
                    <li><a href="../php/gestiociudades/index.php"><i class="fas fa-users"></i>Ciudad</a></li>
                    <li><a href="../php/proveedores/index.php"><i class="fas fa-users"></i>Proveedor</a></li>
                </ul>
            </div>
        </div>
        <div id="contenido">
            <div class="jumbotron jumbotron-fluid" style="margin-top: 2rem">
                <div class="container">
                    <h1 class="display-4">Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
                    <p class="lead">espacio de trabajo para administradores</p>
                </div>
            </div>
        </div>

    </div>

    <script src="../js/funciones.js"></script>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery/data-table/jquery.dataTables.min.js"></script>
    <script src="../jquery/data-table/dataTables.bootstrap4.min.js"></script>
    <script src="../jquery/data-table/jquery-ui.min.js"></script>
    <script src="../sweetalert/sweetalert2.all.js"></script>
    <script src="../jquery/jquery.validate.min.js"></script>
    <script>
        $(document).ready(Iniciar);
    </script>
    <!------------------------------------------------------------------------->
    
    
    
</body>

</html>
<!------------------------------------------------------------------------->
<!--NAVI-->
<!------------------------------------------------------------------------->