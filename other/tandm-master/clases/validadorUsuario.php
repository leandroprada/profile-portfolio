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

	        if ($datos["pais"] == "")
	        {
	            $errores["pais"] = "Ingrese un pais";
	        }
					if ($datos["ciudad"] == "")
	        {
	            $errores["ciudad"] = "Ingrese una ciudad";
	        }
					if ($datos["telefono"] == "")
	        {
	            $errores["telefono"] = "Ingrese su telefono";
	        }
					if ($datos["idioma_que_hablo"] == "")
	        {
	            $errores["idioma_que_hablo"] = "Ingrese el idioma que habla";
	        }
					if ($datos["idioma_a_practicar"] == "")
	        {
	            $errores["idioma_a_practicar"] = "Ingrese el idioma que desea aprender";
	        }
					if ($datos["password"] == "")
	        {
	            $errores["password"] = "Ingrese una contraseña valida";
	        }
					if ($datos["password"] !== $datos["conf_password"])
	        {
	            $errores["password"] = "Sus contraseñas no coinciden";
	        }
	        return $errores;

		}
	}
