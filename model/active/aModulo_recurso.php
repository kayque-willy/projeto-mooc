<?php

require_once "modelos/mModulo_recurso.php";

class aModulo_recurso extends mModulo_recurso{
	
	protected $sqlSelect = "SELECT %s FROM mooc.modulo_recurso WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.modulo_recurso where nome_modulo='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.modulo_recurso (recurso,nome_modulo,numero_curso,nome_recurso) VALUES ('%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.modulo_recurso SET %s WHERE recurso='%s' AND nome_modulo='%s' AND numero_curso='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getRecurso())){
			$where.=" AND recurso='".$this->getRecurso()."'";
		} 
		if(!empty($this->getNome_modulo())){
			$where.=" AND nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getNome_recurso())){
			$where.=" AND nome_recurso='".$this->getNome_recurso()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getNome_modulo(),$this->getNumero_curso());
		if (!empty($this->getNumero_curso()) and !empty($this->getNome_modulo()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getRecurso(),
					   $this->getNome_modulo(),
					   $this->getNumero_curso(),
					   $this->getNome_recurso());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($recurso){
		$parametro='';
		if(!empty($recurso)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" recurso='".$recurso."'";
		} 
		if(!empty($this->getNome_modulo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome_modulo='".$this->getNome_modulo()."'";
		}
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		}
		if(!empty($this->getNome_recurso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome_recurso='".$this->getNome_recurso()."'";
		}
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getRecurso(),$this->getNome_modulo(),$this->getNumero_curso());
		if (!empty($this->getRecurso()) and !empty($this->getNome_modulo()) and $this->getNumero_curso())return $this->RunQuery($sql);
	}
}

?>