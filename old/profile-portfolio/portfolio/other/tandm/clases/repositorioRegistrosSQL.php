<?php
	require_once("repositorioRegistros.php");

	class RepositorioRegistrosSQL extends RepositorioRegistros {

		private $conn;

		public function __construct(PDO $conn) {
			$this->conn = $conn;
		}

		public function traerTodosLosRegistros() {



			$sql = "Select * from registros";

			$query = $this->conn->prepare($sql);
			$query->execute();

			$registrosArrays = $query->fetchAll(PDO::FETCH_ASSOC);

	        foreach ($registrosArrays as $registroArray) {

	        	$registro = new Registro(
							null,
							$registroArray["correoElectronico"],
							$registroArray["fecha"],
							$registroArray["titulo"],
							$registroArray["cuerpo"],
							$registroArray["idioma_que_hablo"],
							$registroArray["idioma_a_practicar"]

	        	);

	            $registros[] = $registro;
	        }

	        return $registros;
	    }

	    public function guardar(Registro $registro) {

	    		$sql = "INSERT into registros(id,correoElectronico,fecha,titulo,cuerpo,idioma_que_hablo,idioma_a_practicar)
					values (default,:correoElectronico,:fecha,:titulo,:cuerpo,:idioma_que_hablo,:idioma_a_practicar)";
	    	$query = $this->conn->prepare($sql);

				$query->bindValue(":correoElectronico", $registro->getEmail(), PDO::PARAM_STR);
		$query->bindValue(":fecha", $registro->getFechaADB(), PDO::PARAM_STR);
		$query->bindValue(":titulo", $registro->getTitulo(), PDO::PARAM_STR);
		$query->bindValue(":cuerpo", $registro->getCuerpo(), PDO::PARAM_STR);
		$query->bindValue(":idioma_que_hablo", $registro->getIdiomaQueHablo(), PDO::PARAM_STR);
		$query->bindValue(":idioma_a_practicar", $registro->getIdiomaAPracticar(), PDO::PARAM_STR);


	    	$query->execute();


	    }

	    public function traerRegistrosPorEmail($correoElectronico) {
	        $sql = "Select * from registros where correoElectronico = :correoElectronico";

	        $query = $this->conn->prepare($sql);




$query->bindValue(":correoElectronico", $correoElectronico, PDO::PARAM_STR);


	        $query->execute();

	        $registroArray = $query->fetch();

	        if ($registroArray) {
						$registro = new Registro(
							$registroArray["id"],
							$registroArray["correoElectronico"],
							$registroArray["fecha"],
							$registroArray["titulo"],
							$registroArray["cuerpo"],
							$registroArray["idioma_que_hablo"],
							$registroArray["idioma_a_practicar"]
						        	);
	        	return $registro;
	        }

	        return false;
	    }
	}
