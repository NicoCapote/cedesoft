<?php

    require_once '../modelo.php';

    class Login extends Modelo{

        private $usuario;
		private $clave;
		private $rol;
		private $id;
        
        function __construct()
		{
			# code...
		}

		public function getUsuario()
		{
			return $this->usuario;
		}

		public function getClave()
		{
			return $this->clave;
		}

		public function getRol()
		{
			return $this->rol;
		}
		
		public function getId()
		{
			return $this->id;
		}
        
        public function consultar($usuario='')
		{
			if ($usuario != '') {

				$this->query = "
				SELECT s.id_usuario as id, s.usuario AS usuario, s.password AS clave, r.nom_rol AS rol
				FROM usuario AS s
				INNER JOIN rol AS r
				ON s.id_rol=r.id_rol
				WHERE s.usuario='$usuario'
				";

				$this->obtener_resultados_query();

			}

			if (count($this->rows) == 1) {
				foreach ($this->rows[0] as $clave => $valor) {
					$this->$clave = $valor;
				}
			}
		
		}

		public function crear()
		{
			# code...s
		}

		public function eliminar()
		{
			# code...
		}

		public function listar()
		{
			# code...
		}

		public function editar()
		{
			# code...
		}


    }

?>