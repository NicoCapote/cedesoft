<?php
//FIJESE BIEN DONDE BORRA LOS CORCHETES, TODO ESTABA PATAS ARRIBA
require_once('../modelo.php');

	class Roles extends modelo {
		private $id;
        private $nom_rol;
        private $descripcion;

		
		function __construct() {
			//$this->db_name = '';
		}
        
        /**
         * Get the value of id_ciudad
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nom_ciudad
         */ 
        public function getNom_rol()
        {
                return $this->nom_rol;
        }

        /**
         * Get the value of id_pais
         */ 
        public function getDescrip()
        {
                return $this->descripcion;
        }

        

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_rol AS id, nom_rol, desc_rol
				FROM rol WHERE id_rol='$id'
				";

				$this->obtener_resultados_query();

			}
			if (count($this->rows) == 1) {
				foreach ($this->rows[0] as $clave => $valor) {
					$this->$clave = $valor;
				}
			}//NICOLE NO BORRE ESTO O SINO NADA SIRVE
		}

		public function listar()
		{
			$this->query = "
            SELECT id_rol as id, nom_rol as nom_rol, desc_rol as descripcion 
            FROM rol;
			";//EL NOMBRE QUE LE PONES ACA DEBE IR IGUAL EN LOS NOMBRES EN LA PARTE FINAL 
			//DE FUNCIONES_CIUDADES

			$this->obtener_resultados_query();

			return $this->rows;
		}

		public function crear($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

			$nombre = utf8_decode($nombre);

			$opciones = [
    			'cost' => 12,
			];

			$this->query = "
			INSERT INTO rol
			VALUES (NULL,'$nom_rol','$descripcion')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $nom_rol = utf8_decode($nom_rol);
            $descripcion = utf8_decode($descripcion);



			$this->query = "
			UPDATE rol
            SET nom_rol='$nom_rol', desc_rol='$descripcion'
            WHERE id_rol = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM rol
			WHERE id_rol = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
	}
?>