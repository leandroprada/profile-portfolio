<?php

	abstract class RepositorioUsuarios {
		abstract public function guardar(Usuario $usuario);
		abstract public function traerTodosLosUsuarios();

		public function existeElMail($correoElectronico) {

	        $usuario = $this->traerUsuarioPorEmail($correoElectronico);

	        if ($usuario) {
	            return true;
	        }

	        return false;
	    }

	    public function traerUsuarioPorEmail($correoElectronico) {
	        //1: Me traigo todos los usuarios y ya opero con arrays
	        $usuarios = $this->traerTodosLosUsuarios();


	        //2: Los recorro y si alguno es el que busco, devuelvo
	        foreach($usuarios as $usuario)
	        {
	            if ($usuario->getEmail() == $correoElectronico)
	            {
	                return $usuario;
	            }
	        }

	        return false;
	    }
	}
