<?php

require_once('../modelo.php');
class Empleado extends modelo
{
        private $id;
        private $nombre;
        private $usuario;
        private $password;
        private $correo;
        private $edad;
        private $genero;
        private $sucursal;
        private $fecha_ingreso;
        private $fecha_salida;

        function __construct()
        {
                //$this->db_name = '';
        }


        /**
         * Get the value of id_empleado
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nom_empleado
         */
        public function getNom_empleado()
        {
                return $this->nombre;
        }

        /**
         * Get the value of usuario
         */
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Get the value of correo
         */
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Get the value of eda_empleado
         */
        public function getEdad_empleado()
        {
                return $this->edad;
        }

        /**
         * Get the value of genero_empleado
         */
        public function getGenero_empleado()
        {
                return $this->genero;
        }

        /**
         * Get the value of id_sucursal
         */
        public function getId_sucursal()
        {
                return $this->sucursal;
        }

        /**
         * Get the value of fecha_ingreso
         */
        public function getFecha_ingreso()
        {
                return $this->fecha_ingreso;
        }

        /**
         * Get the value of fecha_salida
         */
        public function getFecha_salida()
        {
                return $this->fecha_salida;
        }

        public function consultar($id = '')
        {
                if ($id != '') {

                        $this->query = "
                SELECT id_empleado AS id, nom_empleado AS nombre, usuario, password, correo, edad_empleado as edad, 
                genero_empleado as genero, id_sucursal AS sucursal, fecha_ingreso, fecha_salida
		FROM empleado WHERe id_empleado='$id'
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
                        SELECT s.id_empleado as id, s.nom_empleado, s.usuario, s.correo, s.edad_empleado, s.genero_empleado as genero,
                        a.nombre  as id_sucursal, s.fecha_ingreso,s.fecha_salida
                                    FROM empleado as s
                        INNER JOIN sucursal as a
                        on s.id_sucursal=a.id_sucursal 
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

                $nombre = utf8_decode($nombre);
                $correo = utf8_decode($correo);
                $usuario = utf8_decode($usuario);

                $opciones = [
                        'cost' => 12,
                ];
                $clave_hash = password_hash($password, PASSWORD_BCRYPT, $opciones);

                $this->query = "
			INSERT INTO empleado
                        VALUES (NULL,'$nombre','$usuario','$clave_hash','$correo',$edad_empleado,
                        '$genero',$sucursal,'$fecha_ingreso','$fecha_salida')";

                $resultado = $this->ejecutar_query_simple();

                return $resultado;
        }

        public function editar($datos = array())
        {
                foreach ($datos as $llave => $valor) {
                        $$llave = $valor;
                }

                $nombre = utf8_decode($nombre);
                $password = utf8_decode($password);
                $correo = utf8_decode($correo);
                $usuario = utf8_decode($usuario);


                $this->query = "
			UPDATE empleado
            SET nom_empleado='$nombre', usuario='$usuario', password='$password', correo='$correo', 
            edad_empleado='$edad_empleado', genero_empleado='$genero',
            id_sucursal='$sucursal', fecha_ingreso='$fecha_ingreso',
            fecha_salida='$fecha_salida '
            WHERE id_empleado = $id
			";

                $resultado = $this->ejecutar_query_simple();

                return $resultado;
        }

        public function eliminar($id = '')
        {
                $this->query = "
			DELETE FROM empleado
			WHERE id_empleado = $id
			";

                $resultado = $this->ejecutar_query_simple();

                return $resultado;
        }
}
