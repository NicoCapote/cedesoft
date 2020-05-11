<?php

require_once('../modelo.php');
	class Proveedores extends modelo {
        private $id;
        private $nom_proveedor;
        private $desc_proveedor;
        private $id_contrato;
    
		
		function __construct() {
			//$this->db_name = '';
		}
        
        /**
         * Get the value of id
         */ 
        public function getId_proveedor()
        {
                return $this->id;
        }

        /**
         * Get the value of nom_proveedor
         */ 
        public function getNom_proveedor()
        {
                return $this->nom_proveedor;
        }

        /**
         * Get the value of des_proveedor
         */ 
        public function getDesc_proveedor()
        {
                return $this->desc_proveedor;
        }

        /**
         * Get the value of id_contrato
         */ 
        public function getId_contrato()
        {
                return $this->id_contrato;
        }

        
        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_proveedor AS id, nom_proveedor AS nom_proveedor, desc_proveedor AS desc_proveedor,
                id_contrato AS id_contrato
				FROM proveedor WHERe id_proveedor='$id'
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
                        SELECT s.id_proveedor as id, s.nom_proveedor as nom_proveedor, 
                        s.desc_proveedor AS desc_proveedor, a.id_contrato  as id_contrato
                        FROM proveedor as s
                        INNER JOIN contrato as a
                        on s.id_contrato=a.id_contrato
			";

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

			$nom_proveedor = utf8_decode($nom_proveedor);
			$desc_proveedor = utf8_decode($desc_proveedor);
			$id_contrato = utf8_decode($id_contrato);

		

			$this->query = "
			INSERT INTO proveedor
			VALUES (NULL,'$nom_proveedor','$desc_proveedor','$id_contrato')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $nom_proveedor = utf8_decode($nom_proveedor);
            $desc_proveedor = utf8_decode($desc_proveedor);
			$id_contrato = utf8_decode($id_contrato);
			


			$this->query = "
			UPDATE proveedor
            SET nom_proveedor='$nom_proveedor', desc_proveedor='$desc_proveedor', id_contrato='$id_contrato'
            WHERE id_proveedor = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM proveedor
			WHERE id_proveedor = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}

        
    }
?>