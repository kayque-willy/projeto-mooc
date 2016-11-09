<?php
require_once "DB.php";

class mCurso extends dbConnection{
	
	private $numero;
	private $nome;
	private $descricao;
	private $imagem;
	private $video;
	private $conteudo_programatico;
	private $carga_horaria;
	private $aulas;
	private $categoria;
	private $classificacao;
	private $compromisso;
	private $FAQ;
	private $nivel;
	private $instituicao;
	private $pre_requisitos;
	private $licenca;
	private $descricao_curta;
	
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getImagem(){
		return $this->imagem;
	}

	public function setImagem($imagem){
		$this->imagem = $imagem;
	}

	public function getVideo(){
		return $this->video;
	}

	public function setVideo($video){
		$this->video = $video;
	}

	public function getConteudo_programatico(){
		return $this->conteudo_programatico;
	}

	public function setConteudo_programatico($conteudo_programatico){
		$this->conteudo_programatico = $conteudo_programatico;
	}

	public function getCarga_horaria(){
		return $this->carga_horaria;
	}

	public function setCarga_horaria($carga_horaria){
		$this->carga_horaria = $carga_horaria;
	}

	public function getAulas(){
		return $this->aulas;
	}

	public function setAulas($aulas){
		$this->aulas = $aulas;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	public function getClassificacao(){
		return $this->classificacao;
	}

	public function setClassificacao($classificacao){
		$this->classificacao = $classificacao;
	}

	public function getCompromisso(){
		return $this->compromisso;
	}

	public function setCompromisso($compromisso){
		$this->compromisso = $compromisso;
	}

	public function getFAQ(){
		return $this->FAQ;
	}

	public function setFAQ($FAQ){
		$this->FAQ = $FAQ;
	}

	public function getNivel(){
		return $this->nivel;
	}

	public function setNivel($nivel){
		$this->nivel = $nivel;
	}

	public function getInstituicao(){
		return $this->instituicao;
	}

	public function setInstituicao($instituicao){
		$this->instituicao = $instituicao;
	}

	public function getPre_requisitos(){
		return $this->pre_requisitos;
	}

	public function setPre_requisitos($pre_requisitos){
		$this->pre_requisitos = $pre_requisitos;
	}

	public function getLicenca(){
		return $this->licenca;
	}

	public function setLicenca($licenca){
		$this->licenca = $licenca;
	}
	
	public function getDescricao_curta(){
		return $this->descricao_curta;
	}

	public function setDescricao_curta($descricao_curta){
		$this->descricao_curta = $descricao_curta;
	}
}

?>