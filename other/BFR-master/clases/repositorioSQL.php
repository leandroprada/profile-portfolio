<?php
	require_once("repositorio.php");
	require_once("repositorioUsuariosSQL.php");
	require_once("repositorioRegistrosSQL.php");

	class RepositorioSQL extends Repositorio {

		private $conn;

		public function __construct() {
			$dsn = 'mysql:host=localhost;dbname=bfr;charset=utf8mb4;port=3306';

			$user = "root";
			$pass = "";

			$this->conn = new PDO($dsn, $user, $pass);
			$this->repositorioUsuarios = new RepositorioUsuariosSQL($this->conn);
			$this->repositorioRegistros = new RepositorioRegistrosSQL($this->conn);
		}

	}
