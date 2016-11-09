<?php
require_once "active/aAvaliacao_curso.php";
require_once "active/aAvaliacao_modulo.php";

class Avaliacao{
	
	public function avaliarCurso($email,$numero,$nota,$data,$comentario){
	   $avaliar = new aAvaliacao_curso();
	   $avaliar->setEmail_aluno($email);
	   $avaliar->setNumero_curso($numero);
	   $avaliar->setNota($nota);
	   $avaliar->setData($data);
	   $avaliar->setComentario($comentario);
	   $avaliar->insert();
	}
	
	public function avaliarModulo($email,$numero,$nome_modulo,$data,$comentario){
	   $avaliar = new aAvaliacao_modulo();
	   $avaliar->getEmail_aluno($email);
	   $avaliar->getNome_modulo($nome_modulo);
	   $avaliar->getNumero_curso($numero);
	   $avaliar->getData($data);
	   $avaliar->getComentario($comentario);
	   $avaliar->insert();
	}
	
	public function recuperarAvaliaçãoModulo($nome_modulo,$numero){
	   $avaliar = new aAvaliacao_modulo();
	   $avaliar->getNome_modulo($nome_modulo);
	   $avaliar->getNumero_curso($numero);
	   return $avaliar->select("*");
	}
	
	public function recuperarAvaliaçãoCurso($numero){
	   $avaliar = new aAvaliacao_curso();
	   $avaliar->getNumero_curso($numero);
	   return $avaliar->select("*");
	}
	
}

?>