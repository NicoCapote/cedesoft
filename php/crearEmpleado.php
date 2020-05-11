<?php include("../includes/admin/header.php"); ?>
<!------------------------------------------------------------------------->
<!--NAVI-->
<!------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="../img/logo.jpg" alt="CECESOFT" height="38" width="" style="box-align: left">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <button id="inicio" type="button" class="btn btn-primary">Crear</button>
                </li>
                <li class="nav-item">
                    <button id="eliminar" type="submit" class="btn btn-danger">Eliminar</button>
                </li>
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
                    <form class="form-inline my-2 my-lg-0">
                        <input id="buscador" class="form-control mr-sm-2" type="text" placeholder="Buscar... (ej. numero de referencia)">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!------------------------------------------------------------------------->
<!--SIDE NAVI-->
<!------------------------------------------------------------------------->

<div class="wrapper" style="align-items: left;">
    <div class="sidebar">
        <h2>Administración</h2>
        <h3>de contratos</h3>
        <ul>
            <li><a href="../php/crearContrato.php"><i class="fas fa-file-contract"></i>Contratos</a></li>
            <li><a href="#"><i class="fas fa-users"></i><strong>Empleados</strong></a></li>
        </ul>
    </div>
</div>
<!------------------------------------------------------------------------->
<!--TABLE-->
<!------------------------------------------------------------------------->
<div class="container">
    <table id="tabla" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Referencia de contrato</th>
                <th scope="col">Empleado</th>
                <th scope="col">Cargo de trabajo</th>
                <th scope="col">Inicio del contrato</th>
                <th scope="col">Fin del contrato</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <th scope="row">Active</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr>
                <th scope="row">Default</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
        </tbody>
    </table>
    <!------------------------------------------------------------------------->
    <!--FORMULARIO-->
    <!------------------------------------------------------------------------->
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="height: 65px; border-radius: 15px; margin-bottom: 5px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto" style="margin-left: 20px;">
                            <li class="nav-item">
                                <a id="guardar" class="nav-link" href="#" style="font-size: 50px;"><i class="fas fa-save"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="font-size: 50px;" id="close"><i class="fab fa-xbox"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row mb-3" style="margin-left: 0; margin-right: 0;">
                    <div style="border: 1px solid black; border-radius: 5px;">
                        <img src="#" alt="" style="min-width: 3cm; max-width: 3cm; max-height: 4cm;">
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" name="" id="nombre" placeholder="Ingresar Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" id="nombre" placeholder="Ingresar Apellido">
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#infoPub">Información Pública</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#infoPer">Informacion Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#banca">Cuentas Bancarias</a>
                    </li>
                </ul>
                <fieldset>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show" id="infoPub">
                            <div class="tab-pane fade p-3 active show" id="info-publica" role="tabpanel" aria-labelledby="info-publica-tab">
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <legend><strong>Informacion de Contacto</strong></legend>                                            
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Dirección de Trabajo</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="direc_trabajo" name="direc_trabajo" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Ubicación de Trabajo</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="ubica_trabajo" name="ubica_trabajo">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">E-mail de trabajo</label>
                                                <div class="col-sm-7">
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Telefono</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <legend><strong>Cargo</strong></legend>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Departamento</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="departamento" name="departamento">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Titulo de Trabajo</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="titu_traba" name="titu_traba">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Jefe de area</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="jefe_area" name="jefe_area">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!--INFORMACION PUBLICA FIN-->

                        <div class="tab-pane fade" id="infoPer">
                            <div class="tab-pane fade p-3 active show" id="info-personal" role="tabpanel" aria-labelledby="info-personal-tab">
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <legend><strong>Ciudadanía e información adicional</strong></legend>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Nacionalidad</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Tipo de documento</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="tip_documento" name="tip_documento">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Número de identificación</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="num_identificacion" name="num_identificacion">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Número de pasaporte</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="num_pasaporte" name="num_pasaporte">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Fecha de nacimiento</label>
                                                <div class="col-sm-7">
                                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Lugar de nacimiento</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <legend><strong>Información de contacto</strong></legend>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Dirección particular</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="direccion_particular" name="direccion_particular">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Email personal</label>
                                                <div class="col-sm-7">
                                                    <input type="email" class="form-control" id="email_personal" name="email_personal">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Contacto de emergencia</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="contacto_emer" name="contacto_emer">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Sexo</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>Elegir...</option>
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>
                                                        <option>Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Estado civil</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control" id="estado_civil" name="estado_civil">
                                                        <option>Elegir...</option>
                                                        <option>Soltero/a</option>
                                                        <option>Casado/a</option>
                                                        <option>Unión Libres</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!--INFORMACION PERSONAL FIN-->

                        <div class="tab-pane fade" id="banca">
                            <div class="tab-pane fade p-3 active show" id="cuent-bancarias" role="tabpanel" aria-labelledby="cuent-bancarias-tab">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Informacion Bancaria</strong></p>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Numero de Cuenta</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="num_cuenta" name="num_cuenta">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5 col-form-label">Banco</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="banco" name="banco">
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </form>
                            </div>
                        </div><!--INFORMACION BANCARA FIN-->
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------->
    <!------------------------------------------------------------------------->
    <?php include("../includes/admin/footer.php"); ?>