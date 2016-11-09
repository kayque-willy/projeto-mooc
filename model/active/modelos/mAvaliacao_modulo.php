<?php
require_once "DB.php";

class mAvaliacao_modulo extends dbConnection{
	
	private $comentario;
	private $data;
	private $email_aluno;
	private $numero_curso;
	private $nome_modulo;
	
	public function getComentario(){
		return $this->comentario;
	}

	public function setComentario($comentario){
		$this->comentario = $comentario;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getEmail_aluno(){
		return $this->email_aluno;
	}

	public function setEmail_aluno($email_aluno){
		$this->email_aluno = $email_aluno;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}

	public function getNome_modulo(){
		return $this->nome_modulo;
	}

	public function setNome_modulo($nome_modulo){
		$this->nome_modulo = $nome_modulo;
	}
	
}
?>