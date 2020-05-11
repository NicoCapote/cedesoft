<div class="seccion-paises">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-paises">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" class="form-control" id="nom_pais" name="nom_pais">
                </div>
                
               
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
		$("#f-paises").validate({
			rules: {
                nom_pais: "required" ,
  			},
			messages:{
                nom_pais: {
					required: "obligatorio"
				},
			},
			submitHandler: function() {
				actualizar();
 			}
 		});
	</script>
</div>