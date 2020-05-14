<?php
//FIJESE BIEN DONDE BORRA LOS CORCHETES, TODO ESTABA PATAS ARRIBA
require_once('../modelo.php');

	class Usuario extends modelo {
		private $id;
        private $user;
        private $contraseña;
        private $correo;
        private $rol;
        private $nom_empleado;

		
		function __construct() {
			//$this->db_name = '';
		}
        public function getId()
        {
                return $this->id;
        }

        public function getUser()
        {
                return $this->user;
        }

        public function getContraseña()
        {
                return $this->contraseña;
        }

        public function getCorreo()
        {
                return $this->correo;
        }

        public function getRol()
        {
                return $this->rol;
        }

        public function getNom_empleado()
        {
                return $this->nom_empleado;
        }

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_usuario AS id, usuario as user, password as contraseña, 
                correo as correo, id_rol as rol, id_empleado as nom_empleado
				FROM usuario WHERE id_usuario='$id'
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
			SELECT s.id_usuario as id,s.usuario, s.password, s.correo,
			r.nom_rol as rol, e.nom_empleado as empleado
			FROM usuario as s
			INNER JOIN rol as r on s.id_rol=r.id_rol
			INNER JOIN empleado as e on s.id_empleado=e.id_empleado
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

            $user = utf8_decode($user);
            $contraseña = utf8_decode($contraseña);
            $correo = utf8_decode($correo);

			$opciones = [
    			'cost' => 12,
			];

			$clave_hash = password_hash($contraseña, PASSWORD_BCRYPT, $opciones);

			$this->query = "
			INSERT INTO usuario
			VALUES (NULL,'$user','$clave_hash ','$correo','$rol','$nom_empleado')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $user = utf8_decode($user);
            $contraseña = utf8_decode($contraseña);
            $correo = utf8_decode($correo);

			$this->query = "
			UPDATE usuario
            SET usuario='$user', password='$contraseña', correo='$correo', id_rol='$rol', id_empleado='$nom_empleado',
            WHERE id_usuario = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM usuario
			WHERE id_usuario = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
	}
