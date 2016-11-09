<?php
require_once "DB.php";

class mTutor extends dbConnection{
	
	private $email;
	private $senha;
	private $nome;
	private $foto;
	private $sobre;
	private $local;
	
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

	public function getSobre(){
		return $this->sobre;
	}

	public function setSobre($sobre){
		$this->sobre = $sobre;
	}

	public function getLocal(){
		return $this->local;
	}

	public function setLocal($local){
		$this->local = $local;
	}


}
?>