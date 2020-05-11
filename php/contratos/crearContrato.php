
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
                        <input name="buscador" id="buscador" class="form-control mr-sm-2" type="text" placeholder="Buscar... (ej. numero de referencia)">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script> src="popup.js"</script>
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
            <li><a href="#"><i class="fas fa-file-contract"></i><strong>Contratos</strong></a></li>
            <li><a href="../php/crearEmpleado.php"><i class="fas fa-users"></i>Empleados</a></li>
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
    <div class="overlay2" id="overlay2">
        <form id="contrato">
        <div class="popup2" id="popup2">
            <div  class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="height: 65px; border-radius: 15px; margin-bottom: 5px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto" style="margin-left: 20px;">
                            <li class="nav-item">
                            <input id="guardar" type="submit" class="btn btn-info" value="Guardar">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="font-size: 50px;" id="close"><i class="fab fa-xbox"></i></a>
                            </li>
                        </ul>
                    </div>
                    </form>

                </nav>
                <div class="row mb-3" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="id" class="col-form-label" style="margin-right: 10px;">ID</label>
                            <div>
                                <input type="text" class="form-control" id="id" style="width: 70px" placeholder="ID" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div>
                                <label for="referencia" class="col-form-label" style="text-align: left;">Referencia Contrato</label>
                                <input type="text" class="form-control" id="referencia" style="width: 300px" placeholder="Referencia Contrato">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="empleado" class="col-form-label" style="margin-right: 79px;">Empleado</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="empleado" id="empleado" placeholder="Empleado">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tit_trabajo" class="col-form-label" style="margin-right: 32px;">Titulo de Trabajo</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="tit_trabajo" id="tit_trabajo" placeholder="Titulo de Trabajo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom_servicio" class="col-form-label" style="margin-right: 10px;">Nombre del servicio</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="nom_servicio" id="nom_servicio" placeholder="Nombre del servicio">
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#info">Información</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#dataLab">Datos Laborales</a>
                        </li>
                    </ul>
                    <fieldset>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active show" id="info">
                                <div class="tab-pane fade p-3 active show" id="info-publica" role="tabpanel" aria-labelledby="info-publica-tab">
                                    <form action="#" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <legend><strong>Salarios y Complementos </strong></legend>
                                                <div class="form-group row">
                                                    <label for="salario" class="col-sm-5 col-form-label">Salario</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="salario" name="salario" placeholder="Remuneracion Salarial">
                                                    </div>
                                                </div>

                                                <div class="form-groug row">
                                                    <label for="salario" class="col-sm-5 col-form-label">Comentarios</label>
                                                    <div class="col-sm-7">
                                                        <textarea name="comentario" class="form-control" id="comentario" cols="30" rows="10" style="height: 100px;" placeholder="Comentarios"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <legend><strong>Duracion</strong></legend>
                                                <div class="form-group row">
                                                    <label for="tipo_contrato" class="col-sm-5 col-form-label">Tipo de contrato</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" id="tipo_contrato">
                                                            <option>Elegir...</option>
                                                            <option>Término fijo</option>
                                                            <option>Término Indefinido</option>
                                                            <option>Obra o Labor terminada</option>
                                                            <option>Prestacion de Servicios</option>
                                                            <option>Aprendizaje</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="duracion" class="col-sm-5 col-form-label">Duracion</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duracion del contrato">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="forma_pago" class="col-sm-5 col-form-label">Forma de Pago</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" id="forma_pago" name="forma_pago">
                                                            <option>Elegir...</option>
                                                            <option>Mensual</option>
                                                            <option>Quincenal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--INFORMACION COTRATO FIN-->

                            <div class="tab-pane fade" id="dataLab">
                                <div class="tab-pane fade p-3 active show" id="info-personal" role="tabpanel" aria-labelledby="info-personal-tab">
                                    <form action="#" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <legend><strong>Afiliaciones</strong></legend>
                                                <div class="form-group row">
                                                    <label for="salud" class="col-sm-5 col-form-label">Salud</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="salud" id="salud" placeholder="Intruducir EPS">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="pension" class="col-sm-5 col-form-label">Pensión</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="pension" id="pension" placeholder="Fodo de pensiones">
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--INFORMACION PERSONAL FIN-->
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------->
        <!------------------------------------------------------------------------->
        <?php include("../includes/admin/footer.php"); ?>