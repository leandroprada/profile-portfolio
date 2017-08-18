<?php

	abstract class RepositorioRegistros {
		abstract public function guardar(Registro $registro);
		abstract public function traerTodosLosRegistros();

		public function existeElMail($correoElectronico) {

					$registros = $this->traerRegistrosPorEmail($correoElectronico);

					if ($registros) {
							return true;
					}

					return false;
			}

			public function traerRegistrosPorEmail($correoElectronico) {
					//1: Me traigo todos los usuarios y ya opero con arrays
					$registros = $this->traerTodosLosRegistros();


					//2: Los recorro y si alguno es el que busco, devuelvo
					foreach($registros as $registro)
					{
							if ($registro->getEmail() == $correoElectronico)
							{
									return $registro;
							}
					}

					return false;
			}
	}
