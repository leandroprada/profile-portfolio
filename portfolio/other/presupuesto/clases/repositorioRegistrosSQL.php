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
							$registroArray["fecha"],
							$registroArray["descripcion"],
							$registroArray["ingreso"],
							$registroArray["egreso"]

	        	);

	            $registros[] = $registro;
	        }

	        return $registros;
	    }

	    public function guardar(Registro $registro) {

	    		$sql = "INSERT into registros(id,fecha,descripcion,ingreso,egreso)
					values (default,:fecha,:descripcion,:ingreso,:egreso)";
	    	$query = $this->conn->prepare($sql);

		$query->bindValue(":fecha", $registro->getFechaADB(), PDO::PARAM_STR);
		$query->bindValue(":descripcion", $registro->getDescripcion(), PDO::PARAM_STR);
		$query->bindValue(":ingreso", $registro->getIngreso(), PDO::PARAM_INT);
		$query->bindValue(":egreso", $registro->getEgreso(), PDO::PARAM_INT);


	    	$query->execute();


	    }

	    public function traerRegistrosPorFecha($fecha) {
	        $sql = "Select * from registros where fecha = :fecha";

	        $query = $this->conn->prepare($sql);




$query->bindValue(":fecha", $fecha, PDO::PARAM_STR);


	        $query->execute();

	        $registroArray = $query->fetch();

	        if ($registroArray) {
						$registro = new Registro(
							null,
							$registroArray["fecha"],
							$registroArray["descripcion"],
							$registroArray["ingreso"],
							$registroArray["egreso"]
						        	);
	        	return $registro;
	        }

	        return false;
	    }
	}
