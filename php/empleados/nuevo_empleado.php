<div class="seccion-empleado">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-empleado">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>
                <div class="form-group">
                    <label for="email">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="usuario">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo">
                </div>
                <div class="form-group">
                    <label for="usuario">Edad</label>
                    <input type="text" class="form-control" id="edad_empleado" name="edad_empleado">
                </div>
                <div class="form-group">
                    <label for="usuario">Genero</label>
                    <input type="text" class="form-control" id="genero" name="genero">
                </div>
                <div class="form-group">
                    <label for="tienda">Sucursal</label>
                    <select class="form-control" name="sucursal" id="sucursal"></select>
                </div>
                <div class="form-group">
                    <label for="usuario">Fecha Ingreso</label>
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
                </div>
                <div class="form-group">
                    <label for="usuario">Fecha Salida</label>
                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida">
                </div>
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
		$("#f-empleado").validate({
			rules: {
                nombre: "required" ,
                usuario: "required",
  			},
			messages:{
				nombre: {
					required: "obligatorio"
                },
                usuario: {
					required: "obligatorio"
				},
			},
			submitHandler: function() {
				agregar();
 			}
 		});
	</script>
</div>