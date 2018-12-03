<?php
	require_once("validador.php");
	require_once("repositorio.php");

	class ValidadorUsuario extends Validador {
		public function validar(Array $datos, Repositorio $repo) {

			$repoUsuarios = $repo->getRepositorioUsuarios();

			$errores = [];

	        if (empty(trim($datos["nombre"])))
	        {
	            $errores["nombre"] = "Por favor completa el nombre";
	        }

	        if (empty(trim($datos["correoElectronico"])))
	        {
	            $errores["correoElectronico"] = "Por favor ingresa tu email";
	        }
	        elseif (!filter_var($datos["correoElectronico"], FILTER_VALIDATE_EMAIL)) {
	            $errores["correoElectronico"] = "Por favor ingrese un mail valido";
	        }
	        elseif ($repoUsuarios->existeElMail($datos["correoElectronico"]))
	        {
	            $errores["correoElectronico"] = "El email ya esta registrado";
	        }


					if ($datos["password"] == "")
	        {
	            $errores["password"] = "Ingrese una contraseña valida";
	        }
					
	        return $errores;

		}
	}
