﻿<?php
require_once "modelos/mAluno_licao.php";

class aAluno_licao extends mAluno_licao{
	
	protected $sqlSelect = "SELECT %s FROM mooc.aluno_licao WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.aluno_licao where email='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.aluno_licao (email,nome_modulo,numero_curso,nome_licao,progresso) VALUES ('%s','%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.aluno_licao SET %s WHERE email='%s' AND nome_modulo='%s' AND numero_curso='%s' AND nome_licao='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail())){
			$where.=" AND email='".$this->getEmail()."'";
		} 
		if(!empty($this->getNome_modulo())){
			$where.=" AND nome_modulo='".$this->getNome_modulo()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getNome_licao())){
			$where.=" AND nome_licao='".$this->getNome_licao()."'";
		} 
		if(!empty($this->getMarcacao())){
			$where.=" AND marcacao='".$this->getMarcacao()."'";
		} 
		if(!empty($this->getProgresso())){
			$where.=" AND progresso='".$this->getProgresso()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getEmail(),$this->getNumero_curso());
	
		if ( (!empty($this->getEmail())) and (!empty($this->getNumero_curso()))){
			return $this->RunQuery($sql);
		} 
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail(),
					   $this->getNome_modulo(),
					   $this->getNumero_curso(),
					   $this->getNome_licao(),
					   $this->getProgresso());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update(){
		$parametro='';
		if(!empty($this->getMarcacao())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" marcacao='".$this->getMarcacao()."'";
		} 
		if(!empty($this->getProgresso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" progresso='".$this->getProgresso()."'";
		} 
		
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getEmail(),$this->getNome_modulo(),$this->getNumero_curso(),$this->getNome_licao());
		if (!empty($this->getEmail()) and !empty($this->getNome_modulo()) and !empty($this->getNumero_curso()) and !empty($this->getNome_licao()) and !empty($this->getProgresso()))return $this->RunQuery($sql);
	}
}
?>