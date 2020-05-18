<?php

require_once('../modelo.php');
	class Proceso extends modelo {
		private $id;
		private $nom_proceso;
        private $desc_proceso;

    
		
		function __construct() {
			//$this->db_name = '';
		}
        
        	/**
		 * Get the value of id
		 */ 
		public function getId_Proceso()
		{
				return $this->id;
        }
        
        /**
		 * Get the value of nom_proceso
		 */ 
		public function getNom_proceso()
		{
				return $this->nom_proceso;
        }
        
        
        /**
         * Get the value of desc_proceso
         */ 
        public function getDesc_proceso()
        {
                return $this->desc_proceso;
        }

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
				SELECT id_proceso AS id, nom_proceso AS nom_proceso, desc_proceso AS desc_proceso
                FROM procesos 
                WHERe id_proceso='$id'
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
						SELECT id_proceso AS id, nom_proceso AS nom_proceso, 
						desc_proceso AS desc_proceso
                        FROM procesos ";

			$this->obtener_resultados_query();

			return $this->rows;
		}

		public function crear($datos = array())
		{
			/*if (array_key_exists('id', $datos)) {
				
			}*/
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

			$nom_proceso =utf8_decode($nom_proceso);
			$desc_proceso = utf8_decode($desc_proceso);


			$this->query = "
			INSERT INTO procesos
			VALUES (NULL,'$nom_proceso','$desc_proceso')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}
			
			$nom_proceso =utf8_decode($nom_proceso);
			$desc_proceso = utf8_decode($desc_proceso);


			$this->query = "
			UPDATE procesos
			SET nom_proceso='$nom_proceso', desc_proceso='$desc_proceso' 
            WHERE id_proceso = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM procesos
			WHERE id_proceso = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}

        

	

		

    }
?>