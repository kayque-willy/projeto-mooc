<?php
require_once "DB.php";

class mLicao extends dbConnection{
	
	private $percentual_curso;
	private $percentual_modulo;
	private $resultado_licao;
	private $repeticao_licao;
	
	public function __mLicao(){
		$this->percentual_modulo = array();
		$this->resultado_licao = array();
		$this->repeticao_licao = array();
	}

	public function getPercentual_curso(){
		return $this->percentual_curso;
	}

	public function setPercentual_curso($percentual_curso){
		$this->percentual_curso = $percentual_curso;
	}

	public function getPercentual_modulo(){
		return $this->percentual_modulo;
	}

	public function setPercentual_modulo($percentual_modulo){
		$this->percentual_modulo[] = $percentual_modulo;
	}

	public function getResultado_licao(){
		return $this->resultado_licao;
	}

	public function setResultado_licao($resultado_licao){
		$this->resultado_licao[] = $resultado_licao;
	}
	
	public function getRepeticao_licao(){
		return $this->repeticao_licao;
	}

	public function setRepeticao_licao($repeticao_licao){
		$this->repeticao_licao[] = $repeticao_licao;
	}

}
?>