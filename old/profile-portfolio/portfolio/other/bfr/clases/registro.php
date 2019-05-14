<?php
	require_once("repositorioRegistros.php");

	class Registro {

private $id;
private $correoElectronico;
private $fecha;
private $hora;
private $pecho_izquierdo;
private $pecho_derecho;
private $pez_izq;
private $pez_der;
private $total;
private $lech_mat;
private $lech_madre;

		public function __construct($id,$correoElectronico,$fecha,$hora,$pecho_izquierdo,$pecho_derecho,$pez_izq,$pez_der,$total,$lech_mat,$lech_madre)
		{
			$this->id = $id;
			$this->correoElectronico = $correoElectronico;
			$this->fecha = $fecha;
			$this->hora = $hora;
			$this->pecho_izquierdo = $pecho_izquierdo;
			$this->pecho_derecho = $pecho_derecho;
			$this->pez_izq = $pez_izq;
			$this->pez_der = $pez_der;
			$this->total = $total;
			$this->leche_mat = $lech_mat;
			$this->lech_madre = $lech_madre;



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
		public function getHora()
		{
			return $this->hora;
		}
		public function getPechoIzquierdo()
		{
			return $this->pecho_izquierdo;
		}
		public function getPechoDerecho()
		{
			return $this->pecho_derecho;
		}
		public function getPezoneraIzquierda()
		{
			return $this->pez_izq;
		}
		public function getPezoneraDerecha()
		{
			return $this->pez_der;
		}
		public function getTotal()
		{
			return $this->total;
		}
		public function getLecheMaternizada()
		{
			return $this->leche_mat;
		}
		public function getLecheMaterna()
		{
			return $this->lech_madre;
		}

		public function setId($id) {
			$this->id = $id;
		}
		public function setEmail($correoElectronico) {
			$this->correoElectronico = $correoElectronico;
		}
		public function setFecha($fecha) {
			$this->fecha = $fecha;
		}
		public function setPechoIzquierdo($pecho_izquierdo) {
			$this->pecho_izquierdo = $pecho_izquierdo;
		}
		public function setPechoDerecho($pecho_derecho) {
			$this->pecho_derecho = $pecho_derecho;
		}
		public function setTotal($total) {
			$this->total = $total;
		}
		public function setPezoneraIzquierda($pez_izq) {
			$this->pez_izq = $pez_izq;
		}
		public function setPezoneraDerecha($pez_der) {
			$this->pez_der = $pez_der;
		}
		public function setLecheMaternizada($lech_mat) {
			$this->lech_mat = $lech_mat;
		}
		public function setLecheMaterna($lech_madre) {
			$this->lech_madre = $lech_madre;
		}


		public function guardar(RepositorioRegistros $repo) {
			$repo->guardar($this);
		}

		public function toArray() {
			return [
"id" => $this->getID(),
				"correoElectronico" => $this->getEmail(),
			"fecha"=> $this->getFecha(),
				"hora"=> $this->getHora(),
				"pecho_izquierdo"=> $this->getPechoIzquierdo(),
				"pecho_derecho"=> $this->getPechoDerecho(),
				"pez_izq"=> $this->getPezoneraIzquierda(),
				"pez_der"=> $this->getPezoneraDerecha(),
				"total"=> $this->getTotal(),
				"lech_mat"=> $this->getLecheMaternizada(),
				"lech_madre"=> $this->getLecheMaterna(),
];
}

	public function getFechaADB() {

		return date("Y-m-d", strtotime($this->getFecha()) );
	}

	public function getPezoneraIzquierdaADB() {
		if ($this->getPezoneraIzquierda() == "si") {
			return 1;
		}
		return 0;
	}
	public function getPezoneraDerechaADB() {
		if ($this->getPezoneraDerecha() == "si") {
			return 1;
		}
		return 0;
	}

	// public function getHoraADB() {
	// 	return $this->getHora() . ":00";
	// }
}
