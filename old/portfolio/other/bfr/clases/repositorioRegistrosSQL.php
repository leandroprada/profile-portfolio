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
							$registroArray["hora"],
							$registroArray["pecho_izquierdo"],
							$registroArray["pecho_derecho"],
							$registroArray["pez_izq"],
							$registroArray["pez_der"],
							$registroArray["total"],
							$registroArray["lech_mat"],
							$registroArray["lech_madre"]
	        	);

	            $registros[] = $registro;
	        }

	        return $registros;
	    }

	    public function guardar(Registro $registro) {

	    		$sql = "INSERT into registros(id,correoElectronico,fecha,hora,pecho_izquierdo,pecho_derecho,pez_izq,pez_der,total,lech_mat,lech_madre)
					values (default,:correoElectronico,:fecha,:hora,:pecho_izquierdo,:pecho_derecho,:pez_izq,:pez_der,:total,:lech_mat,:lech_madre)";
	    	$query = $this->conn->prepare($sql);

				$query->bindValue(":correoElectronico", $registro->getEmail(), PDO::PARAM_STR);
		$query->bindValue(":fecha", $registro->getFechaADB(), PDO::PARAM_STR);
		$query->bindValue(":hora", $registro->getHora(), PDO::PARAM_STR);
		$query->bindValue(":pecho_izquierdo", $registro->getPechoIzquierdo(), PDO::PARAM_STR);
		$query->bindValue(":pecho_derecho", $registro->getPechoDerecho(), PDO::PARAM_STR);
		$query->bindValue(":pez_izq", $registro->getPezoneraIzquierdaADB(), PDO::PARAM_STR);
		$query->bindValue(":pez_der", $registro->getPezoneraDerechaADB(), PDO::PARAM_STR);
		$query->bindValue(":total", $registro->getTotal(), PDO::PARAM_STR);
				$query->bindValue(":lech_mat", $registro->getLecheMaternizada(), PDO::PARAM_STR);
					$query->bindValue(":lech_madre", $registro->getLecheMaterna(), PDO::PARAM_STR);

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
							$registroArray["hora"],
							$registroArray["pecho_izquierdo"],
							$registroArray["pecho_derecho"],
							$registroArray["pez_izq"],
							$registroArray["pez_der"],
							$registroArray["total"],
							$registroArray["lech_mat"],
							$registroArray["lech_madre"]
	        	);
	        	return $registro;
	        }

	        return false;
	    }
	}
