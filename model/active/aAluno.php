<?php

require_once "modelos/mAluno.php";

class aAluno extends mAluno{
	
	protected $sqlSelect = "SELECT %s FROM mooc.aluno WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.aluno where email='%s'";
	protected $sqlInsert = "INSERT INTO mooc.aluno (email,senha,nome,local,sexo,foto,sobre) VALUES ('%s','%s','%s','%s','%s',%s,'%s')";
	protected $sqlUpdate = "UPDATE mooc.aluno SET %s WHERE email='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getEmail())){
			$where.=" AND email='".$this->getEmail()."'";
		} 
		if(!empty($this->getNome())){
			$where.=" AND nome='".$this->getNome()."'";
		} 
		if(!empty($this->getLocal())){
			$where.=" AND local='".$this->getLocal()."'";
		} 
		if(!empty($this->getSexo())){
			$where.=" AND sexo='".$this->getSexo()."'";
		} 
		if(!empty($this->getFoto())){
			$where.=" AND foto='".$this->getFoto()."'";
		} 
		if(!empty($this->getSobre())){
			$where.=" AND sobre='".$this->getSobre()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getEmail());
		if (!empty($this->getEmail()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getEmail(),
					   $this->getSenha(),
					   $this->getNome(),
					   $this->getLocal(),
					   $this->getSexo(),
					   $this->getFoto(),
					   $this->getSobre());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($email=''){
		$parametro='';
		if(!empty($email)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" email='".$email."'";
		} 
		if(!empty($this->getSenha())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" senha='".$this->getSenha()."'";
		} 
		if(!empty($this->getNome())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome='".$this->getNome()."'";
		} 
		if(!empty($this->getLocal())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" local='".$this->getLocal()."'";
		} 
		if(!empty($this->getSexo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" sexo='".$this->getSexo()."'";
		} 
		if(!empty($this->getFoto())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" foto=".$this->getFoto();
		} 
		if(!empty($this->getSobre())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" sobre='".$this->getSobre()."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getEmail());
		
		if (!empty($this->getEmail()) and !empty($parametro))return $this->RunQuery($sql);
	}
	
}

?>