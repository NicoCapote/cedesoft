<?php

require_once('../modelo.php');
    class Empresa extends modelo {
        private $id;
        private $nombre_empresa;
        private $no_nit;
        private $pais;
        private $descripcion;

        function __construct()
        {
            
        }

        public function getId()//id_contrato
        {
            return $this->id;
        }

        public function getNombreEmpresa()//tipo_contrato
        {
            return $this->nombre_empresa;
        }

        public function getNonit()//id_empleado
        {
            return $this->no_nit;
        }

        public function getId_pais()//id_empresa
        {
            return $this->pais;
        }

        public function getDescripcion()//fecha_crear
        {
            return $this->descripcion;
        }

        public function consultar($id='')
		{
			if ($id != '') {

				$this->query = "
                SELECT id_empresa AS id, nit AS no_nit,
                id_pais AS pais, desc_empresa
				FROM empresa WHERE id_empresa='$id'
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

            $nombre_empresa =utf8_decode($nombre_empresa);
            $no_nit = utf8_decode($no_nit);
            $descripcion = utf8_decode($descripcion);

			$opciones = [
    			'cost' => 12,
			];

			$this->query = "
			INSERT INTO empresa
			VALUES (NULL,'$nombre_empresa','$no_nit','$pais','$descripcion')";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

        }
        
        public function editar($datos = array())
		{
			foreach ($datos as $llave => $valor) {
				$$llave = $valor;
            }
            
            $nombre_empresa =utf8_decode($nombre_empresa);
            $no_nit = utf8_decode($no_nit);
            $descripcion = utf8_decode($descripcion);

			$this->query = "
			UPDATE empresa
            SET nom_empresa='$nombre_empresa', nit=$no_nit,
            id_pais='$pais', desc_empresa='$descripcion'
            WHERE id_empresa = '$id'
            ";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;

		}

		public function eliminar($id='')
		{
			$this->query = "
			DELETE FROM empresa
			WHERE id_empresa = $id
			";

			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
        public function listar()
        {
            $this->query = "
            SELECT s.id_empresa AS id, s.nom_empresa AS nombre_empresa, s.nit AS no_nit, 
            a.nom_pais AS id_pais,s.desc_empresa AS descripcion
            FROM empresa as s
            INNER JOIN pais AS a 
            on s.id_pais=a.id_pais;
            ";

            $this->obtener_resultados_query();
            
            return $this->rows;
        }
}