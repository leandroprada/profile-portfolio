<?php
	require_once("repositorio.php");
	require_once("repositorioUsuariosSQL.php");
	require_once("repositorioRegistrosSQL.php");

	class RepositorioSQL extends Repositorio {

		private $conn;

		public function __construct() {
			$dsn = 'mysql:host=localhost;dbname=tandm50;charset=utf8mb4;port:3306';

			$user = "root";
			$pass = "";
			// $dsn = 'mysql:host=mysql.hostinger.com.ar;dbname=u386033242_tandm;charset=utf8mb4;port:3306';
			//
			// $user = "u386033242_root";
			// $pass = "Leandro01";

			$this->conn = new PDO($dsn, $user, $pass);

			$this->repositorioUsuarios = new RepositorioUsuariosSQL($this->conn);
			$this->repositorioRegistros = new RepositorioRegistrosSQL($this->conn);
		}

	}
