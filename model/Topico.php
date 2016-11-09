<?php
require_once "active/aTopico.php";

class Topico extends aTopico{
	
	public function criarTopico($numero_curso,$email,$data,$assunto){
		$this->setNumero_curso($numero_curso);
	    $this->setEmail_aluno($email);
	    $this->setData($data);
	    $this->setAssunto($assunto);
		$this->insert();
	}
	
	public function editarTopico($numero_curso,$topico_numero,$email,$data,$assunto){
		$this->setNumero_curso($numero_curso);
	    $this->setNumero($topico_numero);
	    $this->setEmail_aluno($email);
	    $this->setData($data);
	    $this->setAssunto($assunto);
		$this->update();
	}
	
	public function removerTopico($numero_topico,$numero_curso){
		$this->setNumero($numero_topico);
		$this->setNumero_curso($numero_curso);
		$this->delete();
	}
	
	public function responderTopico($topico_numero,$topico_curso,$numero_curso,$email,$data,$assunto){
		$this->setTopico_numero($topico_numero);
		$this->setTopico_curso($topico_curso);
		$this->setNumero_curso($numero_curso);
	    $this->setEmail_aluno($email);
	    $this->setData($data);
	    $this->setAssunto($assunto);
		$this->insert();
	}
	
}

?>