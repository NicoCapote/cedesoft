<div class="seccion-contrato">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-contrato">
                <div class="form-group">
                    <label for="nombre">Tipo de Contrato</label>
                    <input type="text" class="form-control" id="tipo_contrato" name="tipo_contrato">
                </div>
                <div class="form-group">
                    <label for="apellido">Empleado Responsable</label>
                    <select class="form-control" name="empleado_responsable" id="empleado_responsable">
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Empresa Perteneciente</label>
                    <select class="form-control" name="empresa_perteneciente" id="empresa_perteneciente">
                    </select>
                </div>
                <div class="form-group">
                    <label for="usuario">Fecha de Creacion</label>
                    <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion">
                </div>
                <div class="form-group">
                    <label for="usuario">Fecha de Expiracion</label>
                    <input type="date" class="form-control" id="fecha_expiracion" name="fecha_expiracion">
                </div>
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
		$("#f-contrato").validate({
			rules: {
                tipo: "required" ,
                nom_empleado: "required",
                nombre_empresa: "required",
                fecha_creacion: "required",
                fecha_expi: "required",
  			},
			messages:{
				tipo: {
					required: "obligatorio"
                },
                nom_empleado: {
					required: "obligatorio"
                },
                nombre_empresa: {
					required: "obligatorio"
                },
                fecha_creacion: {
					required: "obligatorio"
                },
                fecha_expi: {
					required: "obligatorio"
                },
			},
			submitHandler: function() {
				agregar();
 			}
 		});
	</script>
</div>