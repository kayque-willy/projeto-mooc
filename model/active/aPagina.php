<?php

require_once "modelos/mPagina.php";

class aPagina extends mPagina{
	
	protected $sqlSelect = "SELECT %s FROM mooc.pagina WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.pagina where titulo='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.pagina (titulo,numero_curso,conteudo) VALUES ('%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.pagina SET %s WHERE titulo='%s' AND numero_curso='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getTitulo())){
			$where.=" AND titulo='".$this->getTitulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getConteudo())){
			$where.=" AND conteudo='".$this->getConteudo()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getTitulo(),$this->getNumero_curso());
		if (!empty($this->getTitulo()) and !empty($this->getNumero_curso()))
			return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getTitulo(),
					   $this->getNumero_curso(),
					   $this->getConteudo());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($titulo='',$conteudo){
		$parametro='';
		if(!empty($titulo)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" titulo='".$titulo."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		}
		if(!empty($parametro)) $parametro.=",";
		$parametro.=" conteudo='".$conteudo."'";
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getTitulo(),$this->getNumero_curso());
		if (!empty($this->getTitulo()) and !empty($this->getNumero_curso()))
			return $this->RunQuery($sql);
	}
}

?>