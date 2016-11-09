<?php
require_once "DB.php";

class mAvaliacao_curso extends dbConnection{
	
	private $nota;
	private $comentario;
	private $data;
	private $email_aluno;
	private $numero_curso;
	
	public function getNota(){
		return $this->nota;
	}

	public function setNota($nota){
		$this->nota = $nota;
	}

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
	
}
?>