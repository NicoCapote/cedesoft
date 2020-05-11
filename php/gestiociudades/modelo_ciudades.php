<?php
//FIJESE BIEN DONDE BORRA LOS CORCHETES, TODO ESTABA PATAS ARRIBA
require_once('../modelo.php');
	class Ciudades extends modelo {
		private $id;
        private $nombre;
        private $id_pais;

		
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
        public function getNom_ciudad()
        {
                return $this->nombre;
        }

        /**
         * Get the value of id_pais
         */ 
        public function getId_pais()
        {
                return $this->id_pais;
        }

        

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_ciudad AS id, nom_ciudad, id_pais
				FROM ciudad WHERE id_ciudad='$id'
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
                        SELECT s.id_ciudad as id, s.nom_ciudad as nom_ciudad, a.nom_pais as pais 
                        FROM ciudad as s
                        INNER JOIN pais as a
						on s.id_pais=a.id_pais
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
			INSERT INTO ciudad
			VALUES (NULL,'$nombre','$id_pais')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $nom_ciudad = utf8_decode($nom_ciudad);
            $id_pais = utf8_decode($id_pais);



			$this->query = "
			UPDATE ciudad
            SET nom_ciuda='$nom_ciudad', id_pais='$id_pais'
            WHERE id_ciudad = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM ciudad
			WHERE id_ciudad = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
	}
?>