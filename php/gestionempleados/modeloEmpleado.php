<?php

require_once('../modelo.php');
	class Empleado extends modelo {
		public $id;
		public $nombre;
        public $apellido;
        public $usuario;
        public $correo;
        public $foto;
        public $edad;
        public $genero;
        public $id_sucursal;
        public $tel;
        public $departamento;
        public $t_trabajo;
        public $jefe_area;
        public $nacionalidad;
        public $t_documento;
        public $n_identificacion;
        public $n_pasaporte;
        public $f_nacimiento;
        public $l_nacimiento;
        public $direccion_p;
        public $correo_p;
        public $e_civil;
        public $n_cuenta;
        public $banco;
		
		function __construct() {
			//$this->db_name = '';
		}
        
        public function getid()
		{
				return $this->id;
        }
        public function getnombre()
		{
				return $this->nombre;
        }
        public function getapellido()
		{
				return $this->apellido;
        }
        public function getusuario()
		{
				return $this->usuario;
        }
        public function getcorreo()
		{
				return $this->correo;
        }
        public function getfoto()
        {
            return $this->foto;
        }
        public function getedad()
        {
            return $this->edad;
        }
        public function getgenero()
        {
            return $this->genero;
        }
        public function getid_sucursal()
        {
            return $this->id_sucursal;
        }
        public function gettel()
        {
            return $this->tel;
        }
        public function getdepartamento()
        {
            return $this->departamento;
        }
        public function gett_trabajo()
        {
            return $this->t_trabajo;
        }
        public function getjefe_area()
        {
            return $this->jefe_area;
        }
        public function getnacionalidad()
        {
            return $this->nacionalidad;
        }
        public function gett_documento()
        {
            return $this->t_documento;
        }
        public function getn_identificacion()
        {
            return $this->n_identificacion;
        }
        public function getn_pasaporte()
        {
            return $this->n_pasaporte;
        }
        public function getf_nacimiento()
        {
            return $this->f_nacimiento;
        }
        public function getl_nacimiento()
        {
            return $this->l_nacimiento;
        }
        public function getdireccion_p()
        {
            return $this->direccion_p;
        }
        public function getcorreo_p()
        {
            return $this->correo_p;
        }
        public function gete_civil()
        {
            return $this->e_civil;
        }
        public function getn_cuenta()
        {
            return $this->n_cuenta;
        }
        public function getbanco()
        {
            return $this->banco;
        }

        public function consultar($id='') {
			if($id != ''):
				$this->query = "
                SELECT id_empleado,nom_empleado,usuario,correo,foto_empleado,edad_empleado,genero_empleado,
                        id_sucursal,ape_empleado,telefono,departamento,t_trabajo,jefe_area,nacionalidad,
                        tipo_documento,n_identificacion,n_pasaporte,f_nacimiento,L_nacimiento,dirreccion_p,
                        correo_p,n_emergencia,e_civil,n_cuenta,banco
				FROM empleado
				WHERE ID = '$id' AND ESTADO=TRUE
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
        }
        
        public function lista() {
			$this->query = "
			SELECT id_empleado,nom_empleado,usuario,correo,foto_empleado,edad_empleado,genero_empleado,
                    id_sucursal,ape_empleado,telefono,departamento,t_trabajo,jefe_area,nacionalidad,
                    tipo_documento,n_identificacion,n_pasaporte,f_nacimiento,L_nacimiento,dirreccion_p,
                    correo_p,n_emergencia,e_civil,n_cuenta,banco
			FROM empleado WHERE ESTADO=TRUE ORDER BY NOMBRE
			";
			$this->obtener_resultados_query();
			return $this->rows;
        }




?>