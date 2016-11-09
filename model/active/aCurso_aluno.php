<?php

require_once "modelos/mCurso_aluno.php";

class aCurso_aluno extends mCurso_aluno{
	
	protected $sqlSelect = "SELECT %s FROM mooc.curso_aluno WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.curso_aluno where email_aluno='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.curso_aluno (email_aluno,numero_curso) VALUES ('%s','%s')";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail_aluno())){
			$where.=" AND email_aluno='".$this->getEmail_aluno()."'";
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
		$sql = sprintf($this->sqlDelete,$this->getEmail_aluno(),$this->getNumero_curso());
		if (!empty($this->getEmail_aluno()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail_aluno(),
					   $this->getNumero_curso());
		return $this->RunQuery($sql);
	}
}

?>