<?php
	require_once("repositorioRegistros.php");
	// require_once("usuario.php")

	class Registro {
		private $id;

private $fecha;
private $descripcion;
private $ingreso;
private $egreso;

		public function __construct($id,$fecha,$descripcion,$ingreso,$egreso){
			$this->id = $id;
			$this->fecha = $fecha;
			$this->descripcion = $descripcion;
			$this->ingreso = $ingreso;
			$this->egreso = $egreso;
}
public function getId()
{
	return $this->id;
}
		public function getFecha()
		{
			return $this->fecha;
		}
		public function getDescripcion()
		{
			return $this->descripcion;
		}
		public function getIngreso()
		{
			return $this->ingreso;
		}
		public function getEgreso()
		{
			return $this->egreso;
		}

		public function setId($id) {
			$this->id = $id;
		}
		public function setFecha($fecha) {
			$this->fecha = $fecha;
		}
		public function setDescripcion($descripcion) {
			$this->descripcion = $descripcion;
		}
		public function setIngreso($ingreso) {
			$this->ingreso = $ingreso;
		}
		public function setEgreso($egreso) {
			$this->egreso = $egreso;
		}


		public function guardar(RepositorioRegistros $repo) {
			$repo->guardar($this);
		}

		public function toArray() {
			return [
				"id" => $this->getID(),
						"fecha"=> $this->getFecha(),
				"descripcion"=> $this->getDescripcion(),
				"ingreso"=> $this->getIngreso(),
				"egreso"=> $this->getEgreso(),
];
}

	public function getFechaADB() {

		return date("Y-m-d", strtotime($this->getFecha()) );
	}
}
