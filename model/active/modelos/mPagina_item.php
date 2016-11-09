<?php
require_once "DB.php";

class mPagina_item extends dbConnection{
	
	private $item;
	private $titulo;
	private $numero_curso;
	
	public function getItem(){
		return $this->item;
	}

	public function setItem($item){
		$this->item = $item;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getNumero_curso(){
		return $this->numero_curso;
	}

	public function setNumero_curso($numero_curso){
		$this->numero_curso = $numero_curso;
	}
	
}
?>