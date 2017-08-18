<?php

	abstract class RepositorioRegistros {
		abstract public function guardar(Registro $registro);
		abstract public function traerTodosLosRegistros();

		public function existeElMail($fecha) {

					$registros = $this->traerRegistrosPorFecha($fecha);

					if ($registros) {
							return true;
					}

					return false;
			}

			public function traerRegistrosPorFecha($fecha) {
					//1: Me traigo todos los usuarios y ya opero con arrays
					$registros = $this->traerTodosLosRegistros();


					//2: Los recorro y si alguno es el que busco, devuelvo
					foreach($registros as $registro)
					{
							if ($registro->getFecha() == $fecha)
							{
									return $registro;
							}
					}

					return false;
			}
	}
