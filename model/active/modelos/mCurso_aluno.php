<?php
require_once "DB.php";

class mCurso_aluno extends dbConnection{
	
	private $email_aluno;
	private $numero_curso;
	
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