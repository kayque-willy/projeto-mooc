<?php
require_once "DB.php";

class mCurso_tutor extends dbConnection{
	
	private $email_tutor;
	private $numero_curso;
	
	public function getEmail_tutor(){
		return $this->email_tutor;
	}

	public function setEmail_tutor($email_tutor){
		$this->email_tutor = $email_tutor;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}
}
?>