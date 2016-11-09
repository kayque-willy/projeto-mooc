<?php
require_once "active/aLicao.php";
require_once "Conteudo.php";

class Licao extends aLicao{
	
	private $conteudo;
	
	public function __Licao(){
		$this->conteudo = new Conteudo();	
	}
	
	public function criarLicao($nome,$numero,$modulo,$resumo) {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($numero);
	   $this->setNome($nome);
	   $this->setResumo($resumo);
	   return $this->insert();
	}
	
	public function atualizarLicao($nome,$numero,$modulo,$resumo,$nome_novo) {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($numero);
	   $this->setNome($nome);
	   $this->setResumo($resumo);
	   return $this->update($nome_novo);
	}
	
	public function removerLicao($nome,$numero,$modulo) {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($numero);
	   $this->setNome($nome);
	   return $this->delete();
	}
	
	public function recuperarLicao($nome,$numero,$modulo,$param="*") {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($numero);
	   $this->setNome($nome);
	   return $this->select($param);
	}
	
	public function recuperarConteudo($modulo,$curso,$licao,$param="*"){
		$recuperar = new Conteudo();
		$recuperar->setNome_modulo($modulo);
	    $recuperar->setNumero_curso($curso);
	    $recuperar->setNome_licao($licao);
		foreach($recuperar->select($param) as $conteudo){
			$this->conteudo[]=$conteudo;
		}
		return $this->conteudo;
	}
}
?>