<?php
require_once "active/aPagina.php";
require_once "active/aPagina_item.php";

class Pagina extends aPagina{
	
	private $item;
	
	public function __Pagina(){
		$this->item = new aPagina_item();
	}
	
	public function criarPagina($titulo,$numero_curso,$conteudo){
	   $this->setTitulo($titulo);
	   $this->setNumero_curso($numero_curso);
	   $this->setConteudo($conteudo);
	   return $this->insert();	
	}
	
	public function atualizarPagina($novo_titulo='',$conteudo,$titulo,$numero_curso,$itens) {
	   $this->setTitulo($titulo);
	   $this->setNumero_curso($numero_curso);
	   if ($this->update($novo_titulo,$conteudo)){
		  if($this->limparItens($novo_titulo,$numero_curso)){
			if(!empty($itens)){
			   foreach($itens as $item){
				   $this->adicionarItem($titulo,$numero_curso,$item);
			   }
			}
		  }
		  return true;
	    }else 
		  return false; 	
	}
	
	public function recuperarPagina($titulo,$numero_curso) {
	   $this->setTitulo($titulo);
	   $this->setNumero_curso($numero_curso);
	   return $this->select("*");	
	}
	
	public function removerPagina($titulo,$numero_curso) {
	   $this->setTitulo($titulo);
	   $this->setNumero_curso($numero_curso);
	   return $this->delete();	
	}
	
	public function adicionarItem($titulo,$numero_curso,$item) {
	   $this->item = new aPagina_item();
	   $this->item->setTitulo($titulo);
	   $this->item->setNumero_curso($numero_curso);
	   $this->item->setItem($item);
	   return $this->item->insert();
	}
	
	public function removerItem($titulo,$numero_curso,$item) {
	   $this->item->setTitulo($titulo);
	   $this->item->setNumero_curso($numero_curso);
	   $this->item->setItem($item);
	   return $this->item->delete();
	}
	
	public function recuperarItens($titulo,$numero_curso){
		$recuperar = new aPagina_item();
		$recuperar->setNumero_curso($numero_curso);
		$recuperar->setTitulo($titulo);
		$this->item = array();
		foreach ($recuperar->select("item") as $item){
			$this->item[] = $item;	
		}
		return $this->item;
	}
	
	public function limparItens($titulo,$numero_curso){
		$this->item = new aPagina_item();
		$this->item->setTitulo($titulo);
	    $this->item->setNumero_curso($numero_curso);
		return $this->item->deleteLimpa();
	}
}
?>