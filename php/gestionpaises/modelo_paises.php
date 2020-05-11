<?php
//FIJESE BIEN DONDE BORRA LOS CORCHETES, TODO ESTABA PATAS ARRIBA
require_once('../modelo.php');
	class Paises extends modelo {
		private $id;
        private $nom_pais;

		
		function __construct() {
			//$this->db_name = '';
		}
        
        /**
         * Get the value of id_ciudad
         */ 
        public function getId_pais()
        {
                return $this->id;
        }

        
        /**
         * Get the value of id_pais
         */ 
        public function getNom_pais()
        {
                return $this->nom_pais;
        }

        

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_pais AS id, nom_pais AS nom_pais
				FROM pais WHERe id_pais='$id'
				";

				$this->obtener_resultados_query();

			}
			if (count($this->rows) == 1) {
				foreach ($this->rows[0] as $clave => $valor) {
					$this->$clave = $valor;
				}
			}
		}

		public function listar()
		{
			$this->query = "
			SELECT id_pais as id, nom_pais from pais
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

			$nom_pais = utf8_decode($nom_pais);

			$this->query = "
			INSERT INTO pais
			VALUES (NULL,'$nom_pais')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $nom_pais = utf8_decode($nom_pais);
            //$id_pais = utf8_decode($id_pais);



			$this->query = "
			UPDATE pais
            SET nom_pais='$nom_pais'
            WHERE id_pais = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM pais
			WHERE id_pais = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
	}
