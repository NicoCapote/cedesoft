<div class="seccion-proceso">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-proceso">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nom_proceso" name="nom_proceso">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="desc_proceso" name="desc_proceso">
                </div>
                
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
		$("#f-proceso").validate({
			rules: {
                nom_proceso: "required" ,
                desc_proceso: "required" ,
  			},
			messages:{
				nom_proceso: {
					required: "obligatorio"
                },
                desc_proceso: {
					required: "obligatorio"
                },
			},
			submitHandler: function() {
				actualizar();
 			}
 		});
	</script>
</div>