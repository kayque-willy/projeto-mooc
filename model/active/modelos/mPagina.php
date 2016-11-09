<?php
require_once "DB.php";

class mPagina extends dbConnection{

	private $titulo;
	private $conteudo;
	private $numero_curso;
	
	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}

	public function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}
	
}
?>