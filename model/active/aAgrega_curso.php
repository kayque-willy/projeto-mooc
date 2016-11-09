<?php

require_once "modelos/mAgrega_curso.php";

class aAgrega_curso extends mAgrega_curso{
	
	protected $sqlInsert = "INSERT INTO mooc.agrega_curso (email_tutor,email_aluno,numero_curso,link,tipo) VALUES ('%s','%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.agrega_curso SET %s WHERE email_aluno='%s' AND email_tutor='%s' AND numero_curso='%s' AND link='%s'";
	protected $sqlSelect = "SELECT %s FROM mooc.agrega_curso WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.agrega_curso where email_aluno='%s' AND email_tutor='%s' AND numero_curso='%s' AND link='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail_aluno())){
			$where.=" AND email_aluno='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getEmail_tutor())){
			$where.=" AND email_tutor='".$this->getEmail_tutor()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getLink())){
			$where.=" AND link='".$this->getLink()."'";
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
		$sql = sprintf($this->sqlDelete,$this->getEmail_aluno(),$this->getEmail_tutor(),$this->getNumero_curso(),$this->getLink());
	
		if (!empty($this->getEmail_aluno()) and !empty($this->getNumero_curso()) and !empty($this->getEmail_tutor()) and !empty($this->getLink()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail_tutor(),
					   $this->getEmail_aluno(),
					   $this->getNumero_curso(),
					   $this->getLink(),
					   $this->getTipo());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($link=''){
		if (!empty($link))$parametro.=" link='".$link."'";
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getEmail_aluno(),$this->getEmail_tutor(),$this->getNumero_curso(),$this->getLink());
		
		if (!empty($parametro) and  !empty($this->getEmail_aluno()) and !empty($this->getEmail_tutor()) and !empty($this->getNumero_curso()) and !empty($this->getLink()))return $this->RunQuery($sql);
	}
	
}

?>