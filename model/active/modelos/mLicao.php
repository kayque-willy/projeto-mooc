<?php
require_once "DB.php";

class mLicao extends dbConnection{
	
	private $nome;
	private $resumo;
	private $nome_modulo;
	private $numero_curso;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getResumo(){
		return $this->resumo;
	}

	public function setResumo($resumo){
		$this->resumo = $resumo;
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
?>