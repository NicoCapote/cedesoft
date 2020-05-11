<div class="seccion-empresa">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            EDITAR
        </div>
        <div class="card-body">
            <form id="f-empresa">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre Empresa</label>
                    <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa">
                </div>
                <div class="form-group">
                    <label for="email">NIT</label>
                    <input type="text" class="form-control" id="no_nit" name="no_nit">
                </div>
                <div class="form-group">
                    <label for="tienda">Pais</label>
                    <select class="form-control" name="pais" id="pais"></select>
                </div>
                <div class="form-group">
                    <label for="usuario">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                </div>
                <hr>
                <hr>
                <button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
                <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <script>
        $("#f-empresa").validate({
            rules: {
                nombre_empresa: "required",
                no_nit: "required",
                pais: "required",
                descripcion: "required",
            },
            messages: {
                nombre_empresa: {
                    required: "obligatorio"
                },
                usuario: {
                    required: "obligatorio"
                },
                pais: {
                    required: "obligatorio"
                },
                descripcion: {
                    required: "obligatorio"
                },
            },
            submitHandler: function() {
                actualizar();
            }
        });
    </script>
</div>