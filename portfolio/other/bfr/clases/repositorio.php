<?php

	abstract Class Repositorio {
		protected $repositorioUsuarios;
		protected $repositorioRegistros;

		public function getRepositorioUsuarios() {
			return $this->repositorioUsuarios;
}
			public function getRepositorioRegistros() {
				return $this->repositorioRegistros;

		}
}
