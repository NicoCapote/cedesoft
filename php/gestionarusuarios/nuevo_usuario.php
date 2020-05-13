<div class="seccion-usuarios">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-usuarios">
                <div class="form-group">
                    <label for="apellido">Usuario</label>
                    <input type="text" class="form-control" id="user" name="user">                   
                </div>
                <div class="form-group">
                    <label for="nombre">Contraseña</label>
                    <input type="text" class="form-control" id="contraseña" name="contraseña">
                </div>
                <div class="form-group">
                    <label for="nombre">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo">
                </div>
                <div class="form-group">
                    <label for="apellido">Rol</label>
                    <select class="form-control" name="rol" id="rol">
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Empleado</label>
                    <select class="form-control" name="nom_empleado" id="nom_empleado">
                    </select>
                </div>
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
		$("#f-usuarios").validate({
			rules: {
                user: "required" ,
                contraseña: "required" ,
                correo: "required",
                rol: "required",
                nom_empleado: "required",
  			},
			messages:{
                user: {
					required: "obligatorio"
                },
				contraseña: {
					required: "obligatorio"
                },
                correo: {
					required: "obligatorio"
                },
                rol: {
					required: "obligatorio"
                },
                nom_empleado: {
					required: "obligatorio"
                },
			},
			submitHandler: function() {
				agregar();
 			}
 		});
	</script>
</div>