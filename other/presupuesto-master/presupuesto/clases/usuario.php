<?php
	require_once("repositorioUsuarios.php");

	class Usuario {

private $id;
private $usuario;
private $password;
	private $nombre;
private $correoElectronico;


		public function __construct($id, $usuario, $password,  $nombre, $correoElectronico) {
$this->id = $id;
$this->usuario = $usuario;
$this->password = $password;

			$this->nombre =$nombre;
			$this->correoElectronico = $correoElectronico;
	}

		public function getNombre()
		{
			return $this->nombre;
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
		public function getPassword()
		{
			return $this->password;
		}
		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}
		public function setUsername($usuario) {
			$this->usuario = $usuario;
		}
		public function setEmail($correoElectronico) {
			$this->correoElectronico = $correoElectronico;
		}
		public function setId($id) {
			$this->id = $id;
		}
		public function setPassword($password) {
			$this->password = password_hash($password, PASSWORD_DEFAULT);
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
				"correoElectronico" => $this->getEmail(),
			];

		}
	}
