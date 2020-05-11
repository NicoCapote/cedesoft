<div class="seccion-proveedor">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-proveedor">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nom_proveedor" name="nom_proveedor">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="desc_proveedor" name="desc_proveedor">
                </div>
                
                <div class="form-group">
                    <label for="id_contrato">Id_Contrato</label>
                    <select  class="form-control" id="id_contrato" name="id_contrato">
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
		$("#f-proveedor").validate({
			rules: {
                nom_proveedor: "required" ,
                id_contrato: "required",
  			},
			messages:{
				nom_proveedor: {
					required: "obligatorio"
                },
                id_contrato: {
					required: "obligatorio"
				},
			},
			submitHandler: function() {
				actualizar();
 			}
 		});
	</script>
</div>