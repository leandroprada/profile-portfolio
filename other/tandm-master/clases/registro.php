<?php
	require_once("repositorioRegistros.php");
	// require_once("usuario.php")

	class Registro {

private $id;
private $correoElectronico;
private $fecha;
private $titulo;
private $cuerpo;
private $idioma_a_practicar;
	private $idioma_que_hablo;

		public function __construct($id,$correoElectronico,$fecha,$titulo,$cuerpo,$idioma_que_hablo,$idioma_a_practicar){
			$this->id = $id;
			$this->correoElectronico = $correoElectronico;
			$this->fecha = $fecha;
			$this->titulo = $titulo;
			$this->cuerpo = $cuerpo;
			$this->idioma_que_hablo = $idioma_que_hablo;
			$this->idioma_a_practicar = $idioma_a_practicar;
}
public function getId()
{
	return $this->id;
}
		public function getEmail()
		{
			return $this->correoElectronico;
		}
		public function getFecha()
		{
			return $this->fecha;
		}
		public function getTitulo()
		{
			return $this->titulo;
		}
		public function getCuerpo()
		{
			return $this->cuerpo;
		}
		public function getIdiomaQueHablo()
		{
			return $this->idioma_que_hablo;
		}
		public function getIdiomaAPracticar()
		{
			return $this->idioma_a_practicar;
		}

		public function setId($id) {
			$this->id = $id;}

		public function setIdiomaQueHablo($idioma_que_hablo) {
			$this->idioma_que_hablo = $idioma_que_hablo;}
		public function setIdiomaAPracticar($idioma_a_practicar) {
			$this->idioma_a_practicar = $idioma_a_practicar;
		}
		public function setEmail($correoElectronico) {
			$this->correoElectronico = $correoElectronico;
		}
		public function setFecha($fecha) {
			$this->fecha = $fecha;
		}
		public function setTitulo($titulo) {
			$this->titulo = $titulo;
		}
		public function setCuerpo($cuerpo) {
			$this->cuerpo = $cuerpo;
		}


		public function guardar(RepositorioRegistros $repo) {
			$repo->guardar($this);
		}

		public function toArray() {
			return [
				"id" => $this->getID(),
				"correoElectronico" => $this->getEmail(),
			"fecha"=> $this->getFecha(),
				"titulo"=> $this->getTitulo(),
				"cuerpo"=> $this->getCuerpo(),
];
}

	public function getFechaADB() {

		return date("Y-m-d", strtotime($this->getFecha()) );
	}
}
