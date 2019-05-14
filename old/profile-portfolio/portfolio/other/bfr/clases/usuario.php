<?php
	require_once("repositorioUsuarios.php");

	class Usuario {

private $id;
private $correoElectronico;


		public function __construct($id, $correoElectronico)
		{
$this->id = $id;
			$this->correoElectronico = $correoElectronico;
}

		public function getEmail()
		{
			return $this->correoElectronico;
		}
		public function getId()
		{
			return $this->id;
		}
		public function setEmail($correoElectronico) {
			$this->correoElectronico = $correoElectronico;
		}
		public function setId($id) {
			$this->id = $id;
		}

		public function guardar(RepositorioUsuarios $repo) {
			$repo->guardar($this);
		}

		public function toArray() {
			return [
				"id" => $this->getId(),
				"correoElectronico" => $this->getEmail(),
			];

		}
	}
