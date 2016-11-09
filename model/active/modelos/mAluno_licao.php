<?php
require_once "DB.php";

class mAluno_licao extends dbConnection{
	
	private $email;
	private $nome_modulo;
	private $numero_curso;
	private $nome_licao;
	private $marcacao;
	private $progresso;
	
	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

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

	public function getMarcacao(){
		return $this->marcacao;
	}

	public function setMarcacao($marcacao){
		$this->marcacao = $marcacao;
	}

	public function getProgresso(){
		return $this->progresso;
	}

	public function setProgresso($progresso){
		$this->progresso = $progresso;
	}
}
?>
