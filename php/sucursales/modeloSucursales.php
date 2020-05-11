<?php 

	require_once '../modelo.php';

	/**
	 * 
	 */
	class sucursal extends Modelo
	{

		private $id_sucursal;
        private $id_empresa;
        private $id_ciudad;
        private $sucursal;
		
		function __construct()
		{
			# code...
        }

        /**
		 * Get the value of id
		 */ 
		public function getId()
		{
				return $this->id_sucursal;
        }
        /**
         * Get the value of id_empresa
         */ 
        public function getId_empresa()
        {
                return $this->id_empresa;
        }

        /**
         * Get the value of id_ciudad
         */ 
        public function getId_ciudad()
        {
                return $this->id_ciudad;
        }

        /**
         * Get the value of sucursal
         */ 
        public function getSucursal()
        {
                return $this->sucursal;
        }
        

		public function consultar($id_sucursal='')
		{
			if ($id_sucursal != '') {

				$this->query = "
				SELECT id_sucursal AS id, id_empresa, id_ciudad,nombre
				FROM sucursal
				WHERE id_sucursal = '$id_sucursal'
				ORDER BY id_sucursal
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
			SELECT id_sucursal as id, nombre as sucursal
			FROM sucursal
			ORDER BY id_sucursal
			";

			$this->obtener_resultados_query();

			return $this->rows;
        }
        
        //NO HICE NADA MAS DE AQUI PARA ABAJO
        // SOLO HICE LOS DOS PRIMEROS METODOS PARA HACER LA PRUEBA DE TODO EL CRUD
        // DE EMPLEADOS

		public function crear($datos = array())
		{
			/*if (array_key_exists('id', $datos)) {
				
			}*/
			foreach ($datos as $clave => $valor) {
				$$clave = $valor;
			}

			$pais = utf8_decode($pais);

			$this->query = "
			INSERT INTO country (country_id, country, last_update)
			VALUES (NULL,'$pais',now())
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}

		public function editar($datos = array())
		{
			foreach ($datos as $clave => $valor) {
				$$clave = $valor;
			}

			$pais = utf8_decode($pais);

			$this->query = "
			UPDATE country
			SET country = '$pais', last_update = now() 
			WHERE country_id = $id;
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM country
			WHERE country_id = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}


		

        
	}

 ?>