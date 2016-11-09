<?php

require_once "modelos/mAvaliacao_modulo.php";

class aAvaliacao_modulo extends mAvaliacao_modulo{
	
	protected $sqlSelect = "SELECT %s FROM mooc.avaliacao_modulo WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.avaliacao_modulo WHERE email='%s' AND nome_modulo='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.avaliacao_modulo (email,nome_modulo,numero_curso,data,comentario) VALUES ('%s','%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.avaliacao_modulo SET %s WHERE email='%s' AND nome_modulo='%s' AND numero_curso='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail_aluno())){
			$where.=" AND email='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getNome_modulo())){
			$where.=" AND nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getData())){
			$where.=" AND data='".$this->getData()."'";
		} 
		if(!empty($this->getComentario())){
			$where.=" AND comentario='".$this->getComentario()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getEmail_aluno(),$this->getNome_modulo(),$this->getNumero_curso());
		if (!empty($this->getEmail_aluno()) and !empty($this->getNome_modulo()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail_aluno(),
					   $this->getNome_modulo(),
					   $this->getNumero_curso(),
					   $this->getData(),
					   $this->getComentario());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update(){
		$parametro='';
		if(!empty($this->getEmail_aluno())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" email='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getNome_modulo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getData())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" data='".$this->getData()."'";
		} 
		if(!empty($this->getComentario())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" comentario='".$this->getComentario()."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getEmail_aluno(),$this->getNome_modulo(),$this->getNumero_curso());
		
		if (!empty($this->getEmail_aluno()) and !empty($this->getNome_modulo()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
}

?>