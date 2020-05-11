<div class="seccion-proveedor">
	<div class="card border-primary">
		<div class="card-header bg-primary text-white">
			NUEVO
		</div>
		<div class="card-body">
			<form id="f-proveedor">
	            <div class="form-group">
					<label for="nom_proveedor">Nombre</label>
					<input type="text" class="form-control" id="nom_proveedor" name="nom_proveedor">
	            </div>
	            <div class="form-group">
	            	<label for="decripcion">Descripcion</label>
	            	<input type="text" class="form-control" id="desc_proveedor" name="desc_proveedor">
	            </div>
	            <div class="form-group">
	            	<label for="id">Id_Contrato</label>
	            	<select class="form-control" id="id_contrato" name="id_contrato">
						<option value="1" id="contrato1">Contrato indefinido</option>
	            		<option value="2" id="contrato2">contrato provee. insumo</option>
					</select>
	            </div>
	            	
				<hr>
				<button type="submit" class="btn btn-primary" id="agregar">Agregar</button>
            	<button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
			</form>
			
		</div>
	</div>
</div>