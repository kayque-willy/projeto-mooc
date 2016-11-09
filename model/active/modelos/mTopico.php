<?php
require_once "DB.php";

class mTopico extends dbConnection{
	
	private $numero;
	private $numero_curso;
	private $topico_numero;
	private $topico_curso;
	private $email_aluno;
	private $data;
	private $assunto;
	private $exibicoes;
	
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}

	public function getTopico_numero(){
		return $this->topico_numero;
	}

	public function setTopico_numero($topico_numero){
		$this->topico_numero = $topico_numero;
	}

	public function getTopico_curso(){
		return $this->topico_curso;
	}

	public function setTopico_curso($topico_curso){
		$this->topico_curso = $topico_curso;
	}

	public function getEmail_aluno(){
		return $this->email_aluno;
	}

	public function setEmail_aluno($email_aluno){
		$this->email_aluno = $email_aluno;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getAssunto(){
		return $this->assunto;
	}

	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}

	public function getExibicoes(){
		return $this->exibicoes;
	}

	public function setExibicoes($exibicoes){
		$this->exibicoes = $exibicoes;
	}
}