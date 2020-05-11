<div class="seccion-empleado">
	<div class="card border-primary">
		<div class="card-header bg-primary text-white">
			NUEVO
		</div>
		<div class="card-body">
			<form id="f-empleado">
	            <div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre">
	            </div>
	            <div class="form-group">
	            	<label for="apellido">Apellido</label>
	            	<input type="text" class="form-control" id="apellido" name="apellido">
	            </div>
	            <div class="form-group">
	            	<label for="email">Email</label>
	            	<input type="email" class="form-control" id="email" name="email">
	            </div>
	            <div class="form-group">
	            	<label for="usuario">Usuario</label>
	            	<input type="text" class="form-control" id="usuario" name="usuario">
	            </div>
	            <div class="form-group">
	            	<label for="clave">Clave</label>
	            	<input type="password" class="form-control" id="clave" name="clave">
	            </div>
	            <div class="form-group">
	            	<label for="rol">Rol</label>
	            	<select class="form-control" name="rol" id="rol">
	            		<option value="1" id="rol1">Admin</option>
	            		<option value="3" id="rol3">Empleado</option>
	            	</select>
	            </div>
	            <div class="form-group">
	            	<label for="tienda">Tienda</label>
	            	<select class="form-control" name="tienda" id="tienda"></select>
	            </div>          
	            <div class="form-group form-check">
					<input class="form-check-input" type="checkbox" value="1" id="estado" name="estado">
					<label class="form-check-label" for="estado">Activo</label>
				</div>
				<hr>
				<label>Direccion</label>
				<div class="form-group">
					<div class="form-row">
						<div class="col-3">
							<input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
						</div>
						<div class="col-3">
							<input type="text" class="form-control" id="distrito" name="distrito" placeholder="distrito">
						</div>
						<div class="col-3">
							<input type="text" class="form-control" id="cod_postal" name="cod_postal" placeholder="codigo postal">
						</div>
						<div class="col-3">
							<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
						</div>	                
					</div>
				</div>
				<div class="form-group">
					<div class="form-row">						
						<div class="col-3">
							<select class="form-control" name="ciudad" id="ciudad" title="Ciudad"></select>
						</div> 
					</div>
				</div>
				<hr>
				<button type="submit" class="btn btn-primary" id="agregar">Agregar</button>
            	<button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
			</form>
			
		</div>
	</div>
</div>