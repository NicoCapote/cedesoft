<div class="seccion-paises">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            NUEVA
        </div>
        <div class="card-body">
            <form id="f-paises">
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" class="form-control" id="nom_pais" name="nom_pais">
                </div>
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="Aceptar">Aceptar</button>
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
				agregar();
 			}
 		});
	</script>
</div>