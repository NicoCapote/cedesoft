<?php

require_once '../modelo.php';

/**
 * 
 */
class sucursal extends Modelo
{

	private $id;
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
		return $this->id;
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


	public function consultar($id = '')
	{
		if ($id != '') {

			$this->query = "
				SELECT id_sucursal AS id, id_empresa, id_ciudad,nombre as sucursal
				FROM sucursal
				WHERE id_sucursal = '$id'
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
			SELECT s.id_sucursal AS id, a.id_empresa AS id_empresa, 
			b.id_ciudad AS id_ciudad, s.nombre AS sucursal
			FROM sucursal as s
			INNER JOIN empresa AS a on s.id_empresa=a.id_empresa
			INNER JOIN ciudad AS b on s.id_ciudad=b.id_ciudad;		
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
		foreach ($datos as $llave => $valor) {
			$$llave = $valor;
		}

		$sucursal = utf8_decode($sucursal);
		$id_empresa = utf8_decode($id_empresa);
		$id_ciudad = utf8_decode($id_ciudad);

		$this->query = "
			INSERT INTO sucursal
			VALUES (NULL,'$id_empresa','$id_ciudad','$sucursal')";

		$resultado = $this->ejecutar_query_simple();

		return $resultado;
	}

	public function editar($datos = array())
	{
		foreach ($datos as $llave => $valor) {
			$$llave = $valor;
		}

		$id_empresa = utf8_decode($id_empresa);
		$id_ciudad = utf8_decode($id_ciudad);
		$sucursal = utf8_decode($sucursal);

		$this->query = "
			UPDATE sucursal
            SET id_empresa='$id_empresa', id_ciudad=$id_ciudad,
            nombre='$sucursal'
            WHERE id_sucursal = '$id'
            ";

		$resultado = $this->ejecutar_query_simple();

		return $resultado;
	}

	public function eliminar($id = '')
	{
		$this->query = "
			DELETE FROM sucursal
			WHERE id_sucursal = $id
			";

		$resultado = $this->ejecutar_query_simple();

		return $resultado;
	}
}
