<div class="seccion-sucursal">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            NUEVO
        </div>
        <div class="card-body">
            <form id="f-sucursal">
                <div class="form-group">
                    <label for="nombre">Empresa</label>
                    <input type="text" class="form-control" id="nom_proveedor" name="nom_proveedor">
                </div>
                <div class="form-group">
                    <label for="descripcion">Ciudad</label>
                    <input type="text" class="form-control" id="desc_proveedor" name="desc_proveedor">
                </div>
                <div class="form-group">
                    <label for="id_contrato">Nombre Sucursal</label>
                    <select class="form-control" id="id_contrato" name="id_contrato"></select>
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
  			},
			messages:{
				nom_proveedor: {
					required: "obligatorio"
                },
                usuid_contratoario: {
					required: "obligatorio"
				},
			},
			submitHandler: function() {
				agregar();
 			}
 		});
	</script>
</div>