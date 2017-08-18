<?php

	abstract Class Repositorio {
		protected $repositorioUsuarios;

		public function getRepositorioUsuarios() {
			return $this->repositorioUsuarios;
		}

		public function getRepositorioRegistros() {
			return $this->repositorioRegistros;
		}
	}
