<?php
require_once "DB.php";

class mAgrega_curso extends dbConnection{
	
	private $link;
	private $email_aluno;
	private $email_tutor;
	private $numero_curso;
	private $tipo;
	
	public function getLink(){
		return $this->link;
	}

	public function setLink($link){
		$this->link = $link;
	}

	public function getEmail_tutor(){
		return $this->email_tutor;
	}

	public function setEmail_tutor($email_tutor){
		$this->email_tutor = $email_tutor;
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

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	
}
?>