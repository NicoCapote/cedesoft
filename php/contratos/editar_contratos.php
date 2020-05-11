<div class="seccion-contrato">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-contrato">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly>
                </div>
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
                empleado_responsable: "required",
                empresa_perteneciente: "required",
                fecha_creacion: "required",
                fecha_expiracion: "required",
  			},
			messages:{
				tipo: {
					required: "obligatorio"
                },
                empleado_responsable: {
					required: "obligatorio"
                },
                empresa_perteneciente: {
					required: "obligatorio"
                },
                fecha_creacion: {
					required: "obligatorio"
                },
                fecha_expiracion: {
					required: "obligatorio"
                },
			},
			submitHandler: function() {
				actualizar();
 			}
 		});
	</script>
</div>