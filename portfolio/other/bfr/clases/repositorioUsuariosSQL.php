<?php
	require_once("repositorioUsuarios.php");

	class RepositorioUsuariosSQL extends RepositorioUsuarios {

		private $conn;

		public function __construct(PDO $conn) {
			$this->conn = $conn;
		}

		public function traerTodosLosUsuarios() {



			$sql = "Select * from usuarios";

			$query = $this->conn->prepare($sql);
			$query->execute();

			$usuariosArrays = $query->fetchAll(PDO::FETCH_ASSOC);

	        foreach ($usuariosArrays as $usuarioArray) {

	        	$usuario = new Usuario(
	        		$usuarioArray["id"],
							$usuarioArray["correoElectronico"]
	        	);

	            $usuarios[] = $usuario;
	        }

	        return $usuarios;
	    }



	    public function guardar(Usuario $usuario) {
	    	if ($usuario->getId() == null) {
	    		$sql = "INSERT  into usuarios(id,correoElectronico) values (default,:correoElectronico)";
	    	}
	    	else {
	    		$sql = "UPDATE usuarios set
														 correoElectronico = :correoElectronico;
										where id = :id";
	    	}

	    	$query = $this->conn->prepare($sql);








								$query->bindValue(":correoElectronico", $usuario->getEmail(), PDO::PARAM_STR);


	    	if ($usuario->getId() != null) {
	    		$query->bindValue(":id", $usuario->getId(), PDO::PARAM_INT);
	    	}

	    	$query->execute();

	    	if ($usuario->getId() == null) {
	    		$usuario->setId($this->conn->lastInsertId());
	    	}

	    }

	    public function traerUsuarioPorEmail($correoElectronico) {
	        $sql = "Select * from usuarios where correoElectronico = :correoElectronico";

	        $query = $this->conn->prepare($sql);

	        $query->bindValue(":correoElectronico", $correoElectronico, PDO::PARAM_STR);

	        $query->execute();

	        $usuarioArray = $query->fetch();

	        if ($usuarioArray) {
						$usuario = new Usuario(
	        		$usuarioArray["id"],
							$usuarioArray["correoElectronico"]


	        	);
	        	return $usuario;
	        }

	        return false;
	    }
	}
