<?php

require_once "modelos/mConteudo.php";

class aConteudo extends mConteudo{
	
	protected $sqlSelect = "SELECT %s FROM mooc.conteudo WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.conteudo WHERE nome_modulo='%s' AND numero_curso='%s' AND nome_licao='%s' AND conteudo='%s'";
	protected $sqlInsert = "INSERT INTO mooc.conteudo (nome_modulo,numero_curso,nome_licao,conteudo,texto,tipo) VALUES ('%s','%s','%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.conteudo SET %s WHERE nome_modulo='%s' AND numero_curso='%s' AND nome_licao='%s' AND conteudo='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getNome_modulo())){
			$where.=" AND nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getNome_licao())){
			$where.=" AND nome_licao='".$this->getNome_licao()."'";
		} 
		if(!empty($this->getConteudo())){
			$where.=" AND conteudo='".$this->getConteudo()."'";
		} 
		if(!empty($this->getTexto())){
			$where.=" AND texto='".$this->getTexto()."'";
		} 
		if(!empty($this->getTipo())){
			$where.=" AND tipo='".$this->getTipo()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getNome_modulo(),$this->getNumero_curso(),$this->getNome_licao(),$this->getConteudo());
		if (!empty($this->getNome_modulo()) and !empty($this->getNumero_curso()) and !empty($this->getNome_licao()) and !empty($this->getConteudo()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getNome_modulo(),
					   $this->getNumero_curso(),
					   $this->getNome_licao(),
					   $this->getConteudo(),
					   $this->getTexto(),
					   $this->getTipo());
		
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($conteudo){
		$parametro='';
		if(!empty($this->getNome_modulo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getNome_licao())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome_licao='".$this->getNome_licao()."'";
		} 
		if(!empty($this->getTexto())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" texto='".$this->getTexto()."'";
		} 
		if(!empty($this->getTipo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" tipo='".$this->getTipo()."'";
		} 
		if(!empty($conteudo)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" conteudo='".$conteudo."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getNome_modulo(),$this->getNumero_curso(),$this->getNome_licao(),$this->getConteudo());
		print_r($sql);
		if (!empty($this->getNome_modulo()) and !empty($this->getNumero_curso()) and !empty($this->getNome_licao()) and !empty($this->getConteudo()))return $this->RunQuery($sql);
	}
}
?>