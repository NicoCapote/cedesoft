<?php

require_once('../modelo.php');
    class Contrato extends modelo {
        private $id;
        private $tipo_contrato;
        private $empleado_responsable;
        private $empresa_perteneciente;
        private $fecha_creacion;
        private $fecha_expiracion;

        function __construct()
        {
            
        }

        public function getId()//id_contrato
        {
            return $this->id;
        }

        public function getTipo_contrato()//tipo_contrato
        {
            return $this->tipo_contrato;
        }

        public function getId_empleado()//id_empleado
        {
            return $this->empleado_responsable;
        }

        public function getId_empresa()//id_empresa
        {
            return $this->empresa_perteneciente;
        }

        public function getFecha_creacion()//fecha_crear
        {
            return $this->fecha_creacion;
        }

        public function getFecha_expiracion()//fecha_fin
        {
            return $this->fecha_expiracion;
        }

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_contrato AS id, tipo_contrato AS tipo_contrato, id_empleado AS empleado_responsable, 
                id_empresa AS empresa_perteneciente, fecha_crear, fecha_fin 
                FROM contrato Where id_contrato='$id'
				";

				$this->obtener_resultados_query();

			}

			if (count($this->rows) == 1) {
				foreach ($this->rows[0] as $clave => $valor) {
					$this->$clave = $valor;
				}
			}
        }
        
        public function crear($datos = array())
		{
			/*if (array_key_exists('id', $datos)) {
				
			}*/
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $tipo_contrato = utf8_decode($tipo_contrato);
            $fecha_creacion = utf8_decode($fecha_creacion);
            $fecha_expiracion = utf8_decode($fecha_expiracion);

			$opciones = [
    			'cost' => 12,
			];

			$this->query = "
			INSERT INTO contrato
			VALUES (NULL,'$tipo_contrato','$empleado_responsable','$empresa_perteneciente','$fecha_creacion','$fecha_expiracion')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

        }
        
        public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
			}

            $tipo_contrato = utf8_decode($tipo_contrato);
            $fecha_creacion = utf8_decode($fecha_creacion);
            $fecha_expiracion = utf8_decode($fecha_expiracion);


			$this->query = "
			UPDATE contrato
            SET tipo_contrato='$tipo_contrato', id_empleado='$empleado_responsable',
            id_empresa='$empresa_perteneciente', fecha_crear='$fecha_creacion',
            fecha_fin='$fecha_expiracion'
            WHERE id_contrato = '$id'
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM contrato
			WHERE id_contrato = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
        public function listar()
        {
            $this->query = "
            SELECT s.id_contrato as id, s.tipo_contrato as tipo_contra,
            a.nom_empleado as empleado, b.nom_empresa as empresa_perteneciente,
            s.fecha_crear as fecha_creacion, s.fecha_fin as fecha_expiracion
            FROM contrato as s
            INNER JOIN empleado as a on s.id_empleado=a.id_empleado
            INNER JOIN empresa  as b on s.id_empresa =b.id_empresa;
            ";

            $this->obtener_resultados_query();
            
            return $this->rows;
        }

    }

?>