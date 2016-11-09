<?php

require_once "modelos/mLicao.php";

class aLicao extends mLicao{
	
	protected $sqlSelect = "SELECT %s FROM mooc.licao WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.licao WHERE nome_modulo='%s' AND numero_curso='%s' AND nome='%s'";
	protected $sqlInsert = "INSERT INTO mooc.licao (nome_modulo,numero_curso,nome,resumo) VALUES ('%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.licao SET %s WHERE nome_modulo='%s' AND numero_curso='%s' AND nome='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		//(nome_modulo,numero_curso,nome,resumo)
		$where='';
		if(!empty($this->getNome_modulo())){
			$where.=" AND nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getNome())){
			$where.=" AND nome='".$this->getNome()."'";
		} 
		if(!empty($this->getResumo())){
			$where.=" AND resumo='".$this->getResumo()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getNome_modulo(),$this->getNumero_curso(),$this->getNome());
		if (!empty($this->getNome_modulo()) and !empty($this->getNumero_curso()) and !empty($this->getNome()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getNome_modulo(),
					   $this->getNumero_curso(),
					   $this->getNome(),
					   $this->getResumo());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($nome=''){
		$parametro='';
		if(!empty($this->getNome_modulo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($nome)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome='".$nome."'";
		} 
		if(!empty($this->getResumo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" resumo='".$this->getResumo()."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getNome_modulo(),$this->getNumero_curso(),$this->getNome());
		if (!empty($this->getNome_modulo()) and !empty($this->getNumero_curso()) and !empty($this->getNome()))return $this->RunQuery($sql);
	}
	
}

?>