<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>CEDESOFT</title>
</head>

<body>
    <!--NAVEGADOR SUPERIOR-->
    <!------------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="./img/logo.jpg" alt="CECESOFT" height="38" width="" style="box-align: left">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aceca de nosotros</a>
                </li>
            </ul>
            <button type="button" class="btn btn-success" id="inicio">Iniciar Sesión</button>
        </div>
    </nav>
    <!------------------------------------------------------------------------->
    <!--SLIDER-->
    <!------------------------------------------------------------------------->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../cedesoft/img/01.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../cedesoft/img/02.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../cedesoft/img/03.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!------------------------------------------------------------------------->
        <br>
        <!--ZONA BAJA DE LA PAGINA/MISION/VISION/BOTONES-->
        <!------------------------------------------------------------------------->
        <div class="row">
            <div class="col-4">
                <div class="card border-dark mb-3" style="max-width: 20rem;">
                    <div class="card-header">Mision</div>
                    <div class="card-body">
                        <p>
                            Parrafo x acerca de cosas x, insertar aquí.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-dark mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="#"><button type="button" class="btn btn-info">EMPRESAS Y SUCURSALES</button></a>
                            </div>
                            <div class="col">
                                <a href="#"><button type="button" class="btn btn-info">Nuestra Historia</button></a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-warning btn-sm">CONTÁCTANOS</button>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-dark mb-3" style="max-width: 20rem;">
                    <div class="card-header">Vision</div>
                    <div class="card-body">
                        <p>
                            Parrafo x acerca de cosas x, insertar aquí.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------->
        <!--LOGIN-->
        <!------------------------------------------------------------------------->
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <h3>Iniciar Sesion</h3>
                <form action="php/loginn/login.php" method="POST">
                    <label for="usuario">Usuario</label><br>
                    <label for="contraseña">Contraseña</label><br>
                    <div class="contenedor-inputs">
                        <div>
                            <input class="caja" name="usuario" type="text" placeholder="Ingresar Usuario"><br>
                        </div>
                        <div>
                            <input class="caja" name="clave" type="password" placeholder="Ingresar Contraseña">
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn-cerrar-popup"><button type="button" id="close" class="btn btn-danger">Cancelar</button></a>
                        <input id="aceptar" type="submit" class="btn btn-warning" value="Aceptar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------->
    <!--NAVEGADOR INFERIOR-->
    <!------------------------------------------------------------------------->
    <footer>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terminos y Condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Potilicas de Securidad</a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
    <!------------------------------------------------------------------------->
    <!--Archivo JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/popup.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>