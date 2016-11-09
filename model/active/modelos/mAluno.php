<?php

require_once "DB.php";

class mAluno extends dbConnection{
	
	private $email;
	private $senha;
	private $nome;
	private $foto;
	private $local;
	private $sexo;
	private $sobre;
	
	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}

	public function getLocal(){
		return $this->local;
	}

	public function setLocal($local){
		$this->local = $local;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getSobre(){
		return $this->sobre;
	}

	public function setSobre($sobre){
		$this->sobre = $sobre;
	}
	
}
?>