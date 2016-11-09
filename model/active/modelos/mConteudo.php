<?php
require_once "DB.php";

class mConteudo extends dbConnection{
	
	private $nome_modulo;
	private $numero_curso;
	private $nome_licao;
	private $texto;
	private $conteudo;
	private $tipo;
	
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

	public function getNome_licao(){
		return $this->nome_licao;
	}

	public function setNome_licao($nome_licao){
		$this->nome_licao = $nome_licao;
	}

	public function getTexto(){
		return $this->texto;
	}

	public function setTexto($texto){
		$this->texto = $texto;
	}

	public function getConteudo(){
		return $this->conteudo;
	}

	public function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
}
?>