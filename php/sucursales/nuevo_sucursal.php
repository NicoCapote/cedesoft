<div class="seccion-sucursal">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            NUEVO
        </div>
        <div class="card-body">
            <form id="f-sucursal">
                <div class="form-group">
                    <label for="nombre">Empresa</label>
                    <select class="form-control" name="id_empresa" id="id_empresa"></select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Ciudad</label>
                    <select class="form-control" name="id_ciudad" id="id_ciudad"></select>
                </div>
                <div class="form-group">
                    <label for="id_contrato">Nombre Sucursal</label>
                    <input type="text" class="form-control" id="sucursal" name="sucursal">
                </div>
                
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
		$("#f-sucursal").validate({
			rules: {
                nom_proveedor: "required" ,
                id_contrato: "required",
                id_sucursal: "required",
  			},
			messages:{
				nom_proveedor: {
					required: "obligatorio"
                },
                id_contrato: {
					required: "obligatorio"
                },
                id_sucursal: {
					required: "obligatorio"
                },
			},
			submitHandler: function() {
				agregar();
 			}
 		});
	</script>
</div>