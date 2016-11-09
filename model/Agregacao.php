<?php
require_once "active/aAgrega_curso.php";

class Agregacao extends aAgrega_curso{
	
	public function agregarWiki($email,$numero,$link){
		 $this->setEmail_aluno($email);
		 $this->setEmail_tutor("NULL");
		 $this->setNumero_curso($numero);
		 $this->setLink($link);
		 $this->setTipo("wiki");
		 $this->insert();
	}
	
	public function editarWiki($email,$numero,$link,$novo_link){
		$this->setEmail_aluno($email);
		$this->setEmail_tutor("NULL");
		$this->setNumero_curso($numero);
		$this->setLink($link);
		$this->update($novo_link);
	}
	
	public function agregarMidiaSocial($email,$numero,$link){
		$this->setEmail_aluno("NULL");
		$this->setEmail_tutor($email);
		$this->setNumero_curso($numero);
		$this->setLink($link);
		$this->setTipo("midia");
		$this->insert();
	}
	
	public function editarMidiaSocial($email,$numero,$link,$novo_link){
		$this->setEmail_aluno("NULL");
		$this->setEmail_tutor($email);
		$this->setNumero_curso($numero);
		$this->setLink($link);
		$this->update($novo_link);
	}	
	
	public function recuperarAgregacao($numero,$tipo){
		 $this->setNumero_curso($numero);
		 $this->setTipo($tipo);
		 return $this->select("*");
	}
}
?>