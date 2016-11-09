<?php

require_once "modelos/mPagina_item.php";

class aPagina_item extends mPagina_item{
	
	protected $sqlSelect = "SELECT %s FROM mooc.pagina_item WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.pagina_item where titulo='%s' AND numero_curso='%s' AND item='%s'";
	protected $sqlDeleteLimpa = "DELETE from mooc.pagina_item where titulo='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.pagina_item (titulo,numero_curso,item) VALUES ('%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.pagina_item SET %s WHERE titulo='%s' AND numero_curso='%s' AND item='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getTitulo())){
			$where.=" AND titulo='".$this->getTitulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getItem())){
			$where.=" AND item='".$this->getItem()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getTitulo(),$this->getNumero_curso(),$this->getItem());
		if (!empty($this->getTitulo()) and !empty($this->getNumero_curso()) and $this->getItem())return $this->RunQuery($sql);
	}
	
	//DELETE
	public function deleteLimpa(){
		$sql = sprintf($this->sqlDeleteLimpa,$this->getTitulo(),$this->getNumero_curso());
		print_r($sql);
		
		if (!empty($this->getTitulo()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getTitulo(),
					   $this->getNumero_curso(),
					   $this->getItem());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($item){
		$parametro='';
		if(!empty($this->getTitulo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" titulo='".$this->getTitulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		}
		if(!empty($item)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" item='".$item."'";
		}
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getTitulo(),$this->getNumero_curso(),$this->getItem());
		if (!empty($this->getTitulo()) and !empty($this->getNumero_curso()) and $this->getItem())return $this->RunQuery($sql);
	}
}

?>