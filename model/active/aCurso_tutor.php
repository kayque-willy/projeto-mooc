<?php

require_once "modelos/mCurso_tutor.php";

class aCurso_tutor extends mCurso_tutor{
	
	protected $sqlSelect = "SELECT %s FROM mooc.curso_tutor WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.curso_tutor where email_tutor='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.curso_tutor (email_tutor,numero_curso) VALUES ('%s','%s')";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail_tutor())){
			$where.=" AND email_tutor='".$this->getEmail_tutor()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getEmail_tutor(),$this->getNumero_curso());
		if (!empty($this->getEmail_tutor()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail_tutor(),
					   $this->getNumero_curso());
		return $this->RunQuery($sql);
	}
}

?>