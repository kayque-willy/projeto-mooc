<?php
require_once "DB.php";

class mModulo extends dbConnection{
	
	private $nome;
	private $descricao;
	private $imagem;
	private $video;
	private $numero_curso;
	
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getImagem(){
		return $this->imagem;
	}

	public function setImagem($imagem){
		$this->imagem = $imagem;
	}

	public function getVideo(){
		return $this->video;
	}

	public function setVideo($video){
		$this->video = $video;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}
}