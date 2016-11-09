<?php

require_once "modelos/mAvaliacao_curso.php";

class aAvaliacao_curso extends mAvaliacao_curso{
	
	protected $sqlSelect = "SELECT %s FROM mooc.avaliacao_curso WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.avaliacao_curso WHERE email_aluno='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.avaliacao_curso (email_aluno,numero_curso,nota,data,comentario) VALUES ('%s','%s','%s','%s','%s')";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail_aluno())){
			$where.=" AND email_aluno='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getNota())){
			$where.=" AND nota='".$this->getNota()."'";
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
		$sql = sprintf($this->sqlDelete,$this->getEmail_aluno(),$this->getNumero_curso());
		if (!empty($this->getEmail_aluno()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail_aluno(),
					   $this->getNumero_curso(),
					   $this->getNota(),
					   $this->getData(),
					   $this->getComentario());
		return $this->RunQuery($sql);
	}
}

?>