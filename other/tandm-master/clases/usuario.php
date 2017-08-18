<?php
	require_once("repositorioUsuarios.php");

	class Usuario {

private $id;
private $usuario;
private $password;
private $conf_password;
	private $nombre;
		private $apellido;
private $correoElectronico;
		private $telefono;
private $genero;
private $idioma_a_practicar;
	private $idioma_que_hablo;
				private $pais;
		private $ciudad;


		public function __construct($id, $usuario, $password, $conf_password, $nombre, $apellido,  $correoElectronico, $telefono, $genero, $idioma_a_practicar, $idioma_que_hablo, $pais, $ciudad) {
$this->id = $id;
$this->usuario = $usuario;
$this->password = $password;
$this->conf_password = $conf_password;
			$this->nombre =$nombre;
			$this->apellido = $apellido;
			$this->correoElectronico = $correoElectronico;

			$this->telefono = $telefono;
			$this->genero = $genero;

			$this->idioma_que_hablo = $idioma_que_hablo;
			$this->idioma_a_practicar = $idioma_a_practicar;

			$this->pais = $pais;
	$this->ciudad = $ciudad;
	}

		public function getNombre()
		{
			return $this->nombre;
		}
		public function getApellido()
		{
			return $this->apellido;
		}
		public function getTelefono()
		{
			return $this->telefono;
		}
		public function getEmail()
		{
			return $this->correoElectronico;
		}
		public function getUsername()
		{
			return $this->usuario;
		}
		public function getId()
		{
			return $this->id;
		}
		public function getConf_Password()
		{
			return $this->conf_password;
		}
		public function getPassword()
		{
			return $this->password;
		}
		public function getPais()
		{
			return $this->pais;
		}
		public function getGenero()
		{
			return $this->genero;
		}
		public function getCiudad()
		{
			return $this->ciudad;
		}
		public function getHablaIdioma()
		{
			return $this->idioma_que_hablo;
		}public function getAprendeIdioma()
		{
			return $this->idioma_a_practicar;
		}
		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}
		public function setApellido($apellido) {
			$this->apellido = $apellido;
		}
		public function setUsername($usuario) {
			$this->usuario = $usuario;
		}

		public function setGenero($genero)
		{
			$this->genero=$genero;
		}
		public function setEmail($correoElectronico) {
			$this->correoElectronico = $correoElectronico;
		}
		public function setTelefono($telefono) {
			$this->telefono = $telefono;
		}
		public function setId($id) {
			$this->id = $id;
		}
		public function setPais($pais) {
			$this->pais = $pais;
		}
		public function setCiudad($ciudad) {
			$this->ciudad = $ciudad;
		}
		public function setPassword($password) {
			$this->password = password_hash($password, PASSWORD_DEFAULT);
		}
		public function setConfPassword($conf_password) {
			$this->password = password_hash($conf_password, PASSWORD_DEFAULT);
		}
		public function setAprendeIdioma($idioma_a_practicar) {
			$this->idioma_a_practicar = $idioma_a_practicar;
		}
		public function setHablaIdioma($idioma_que_hablo) {
			$this->idioma_que_hablo = $idioma_que_hablo;
		}

		public function guardar(RepositorioUsuarios $repo) {
			$repo->guardar($this);
		}

		public function toArray() {
			return [
				"id" => $this->getId(),
				"usuario" => $this->getUsername(),
				"password" => $this->getPassword(),
						"nombre" => $this->getNombre(),
				"apellido" => $this->getApellido(),
				"correoElectronico" => $this->getEmail(),
				"telefono" => $this->getTelefono(),
				"genero" => $this -> getGenero(),
				"idioma_a_practicar"=> $this->getAprendeIdioma(),
				"idioma_que_hablo" => $this-> getHablaIdioma(),
				"pais" => $this->getPais(),
				"ciudad"=> $this->getCiudad()
			];

		}
	}
