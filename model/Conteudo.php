<?php
require_once "active/aConteudo.php";
require_once "active/aConteudo_link.php";

class Conteudo extends aConteudo{
	
	private $links;
	
	public function __Conteudo(){
		$this->links = new aConteudo_link();	
	}
	
	public function adicionarConteudo($modulo,$curso,$licao,$texto,$conteudo,$tipo,$links) {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($curso);
	   $this->setNome_licao($licao);
	   $this->setTexto($texto);
	   $this->setConteudo($conteudo);
	   $this->setTipo($tipo);
	   if($this->insert()){
		   if(!empty($links)){
			   foreach($links as $link){
				   $this->adicionarLink($conteudo,$modulo,$curso,$licao,$link);
			   }
		   }
	     return true;  
	   }else 
	  	 return false;
	}
	
	public function atualizarConteudo($modulo,$curso,$licao,$conteudo,$texto,$tipo,$novo_conteudo='',$links) {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($curso);
	   $this->setNome_licao($licao);
	   $this->setTexto($texto);
	   $this->setConteudo($conteudo);
	   $this->setTipo($tipo);
	   if ($this->update($novo_conteudo)){
		  if($this->limparLinks($novo_conteudo,$modulo,$curso,$licao)){
			if(!empty($links)){
			   foreach($links as $link){
				   $this->adicionarLink($novo_conteudo,$modulo,$curso,$licao,$link);
			   }
			}
		  }
		  return true;
	    }else 
			return false; 
	}
	
	public function recuperarConteudo($modulo,$curso,$licao,$conteudo='') {
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($curso);
	   $this->setNome_licao($licao);
	   $this->setConteudo($conteudo);
	   return $this->select("*");
	}
	
	public function removerConteudo($modulo,$curso,$licao,$conteudo){
	   $this->setNome_modulo($modulo);
	   $this->setNumero_curso($curso);
	   $this->setNome_licao($licao);
	   $this->setConteudo($conteudo);
	   return $this->delete();
	}
	
	public function adicionarLink($conteudo,$modulo,$curso,$licao,$link){
	   $this->links=new aConteudo_link();
	   $this->links->setConteudo($conteudo);
	   $this->links->setNome_modulo($modulo);
	   $this->links->setNumero_curso($curso);
	   $this->links->setNome_licao($licao);
	   $this->links->setLink($link);
	   $this->links->insert();
	}
	
	public function removerLink($conteudo,$modulo,$curso,$licao,$link){
	   $this->links->setConteudo($conteudo);
	   $this->links->setNome_modulo($modulo);
	   $this->links->setNumero_curso($curso);
	   $this->links->setNome_licao($licao);
	   $this->links->setLink($link);
	   $this->links->delete();
	}
	
	public function recuperarLinks($conteudo,$modulo,$curso,$licao){
		$recuperar = new aConteudo_link();
		$recuperar->setConteudo($conteudo);
		$recuperar->setNome_modulo($modulo);
	    $recuperar->setNumero_curso($curso);
	    $recuperar->setNome_licao($licao);
		$this->links=array();
		foreach($recuperar->select("link") as $link){
			$this->links[]=$link;	
		}
		return $this->links;
	}
	
	public function limparLinks($conteudo,$modulo,$curso,$licao){
		$recuperar = new aConteudo_link();
		$recuperar->setConteudo($conteudo);
		$recuperar->setNome_modulo($modulo);
	    $recuperar->setNumero_curso($curso);
	    $recuperar->setNome_licao($licao);
		return $recuperar->deleteLimpar();
	}
}

?>