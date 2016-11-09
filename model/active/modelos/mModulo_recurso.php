<?php
require_once "DB.php";

class mModulo_recurso extends dbConnection{
	
	private $recurso;
	private $nome_modulo;
	private $numero_curso;
	private $nome_recurso;
	
	public function getNome_recurso(){
		return $this->nome_recurso;
	}

	public function setNome_recurso($nome_recurso){
		$this->nome_recurso = $nome_recurso;
	}
	
	public function getRecurso(){
		return $this->recurso;
	}

	public function setRecurso($recurso){
		$this->recurso = $recurso;
	}

	public function getNome_modulo(){
		return $this->nome_modulo;
	}

	public function setNome_modulo($nome_modulo){
		$this->nome_modulo = $nome_modulo;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}


}

