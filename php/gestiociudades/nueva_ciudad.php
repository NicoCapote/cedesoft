<div class="seccion-ciudades">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            NUEVA
        </div>
        <div class="card-body">
            <form id="f-ciudades">
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                
                <div class="form-group">
	            	<label for="pais">Pais</label>
	            	<select class="form-control" name="id_pais" id="id_pais">
                        
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
		$("#f-ciudades").validate({
			rules: {
                ciudad: "required" ,
                pais: "required",
  			},
			messages:{
				ciudad: {
					required: "obligatorio"
                },
                pais: {
					required: "obligatorio"
				},
			},
			submitHandler: function() {
				agregar();
 			}
 		});
	</script>
</div>