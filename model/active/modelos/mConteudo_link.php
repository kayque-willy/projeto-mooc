<?php
require_once "DB.php";

class mConteudo_link extends dbConnection{
	
	private $nome_modulo;
	private $numero_curso;
	private $nome_licao;
	private $link;
	private $conteudo;
	
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

	public function getLink(){
		return $this->link;
	}

	public function setLink($link){
		$this->link = $link;
	}

	public function getConteudo(){
		return $this->conteudo;
	}

	public function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}
}
?>