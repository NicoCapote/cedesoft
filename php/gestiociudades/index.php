<div class="d-none" id="nuevo-editar"></div>

<div id="ciudades"><!---Cambie este nombre, ESTE NOMBRE ES IMPORTANTE,
SI ACA SE LLAMA CIUDADES EN funciones_ciudades DEBE IR TAMBINE DONDE SE VE ALGO COMO ESTO
$(#ciudades) IGUAL QUE PARA TODO EL TRABAJO!-->

	<button class="btn btn-primary mb-4" id="nuevo">Nuevo</button>
	<a href="fpdf/informe.php" target="_blank" class="btn btn-info mb-4" id="pdf">Lista de Ciudades</a>

	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id_Ciudad</th>
				<th>Nombre Ciudad</th>
				<th>Pais</th>
				<th>Opciones</th> <!---Esto no se borra, si lo borras lo cagas!-->
			</tr>
		</thead>
		<tbody></tbody>

	</table>

	<script src="../js/funciones_ciudades.js"></script><!---Acuerdese de la ruta!-->

</div>