<?php
	require_once("validador.php");
	require_once("repositorio.php");

	class ValidadorRegistro extends Validador {
		public function validar(Array $datos, Repositorio $repo) {

			$repoRegistros = $repo->getRepositorioRegistros();

			$errores = [];


	        if (empty(trim($datos["email"])))
	        {
	            $errores["email"] = "Por favor ingresa tu email";
	        }
	        elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
	            $errores["email"] = "Por favor ingrese un mail valido";
	        }
	        elseif ($repoRegistros->existeElMail($datos["email"]))
	        {
	            $errores["email"] = "El email ya esta registrado";
	        }


	        return $errores;

		}
	}
