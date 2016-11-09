<?php

require_once "modelos/mTopico.php";

class aTopico extends mTopico{
	
	protected $sqlSelect = "SELECT %s FROM mooc.topico WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.topico WHERE numero='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.topico (numero_curso,topico_numero,topico_curso,email_aluno,data,assunto) VALUES (%s,%s,%s,'%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.topico SET %s WHERE numero='%s' AND numero_curso='%s'";
	protected $sqlSearch = "SELECT %s FROM mooc.topico WHERE %s %s %s %s";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getNumero())){
			$where.=" AND numero='".$this->getNumero()."'";
		}
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getTopico_numero())){
			$where.=" AND topico_numero='".$this->getTopico_numero()."'";
		}
		if(!empty($this->getTopico_curso())){
			$where.=" AND topico_curso='".$this->getTopico_curso()."'";
		} 
		if(!empty($this->getEmail_aluno())){
			$where.=" AND email_aluno='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getData())){
			$where.=" AND data='".$this->getData()."'";
		} 
		if(!empty($this->getAssunto())){
			$where.=" AND assunto='".$this->getAssunto()."'";
		} 
		if(!empty($this->getExibicoes())){
			$where.=" AND exibicoes='".$this->getAssunto()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//SELECT
	public function selectTopico($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getNumero())){
			$where.=" AND numero='".$this->getNumero()."'";
		}
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		$where.=" AND topico_numero IS NULL";
		$where.=" AND topico_curso IS NULL";
		if(!empty($this->getEmail_aluno())){
			$where.=" AND email_aluno='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getData())){
			$where.=" AND data='".$this->getData()."'";
		} 
		if(!empty($this->getAssunto())){
			$where.=" AND assunto='".$this->getAssunto()."'";
		} 
		if(!empty($this->getExibicoes())){
			$where.=" AND exibicoes='".$this->getAssunto()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getNumero(),$this->getNumero_curso());
		if (!empty($this->getNumero()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		if(empty($this->getTopico_numero())){
			$this->setTopico_numero("NULL");
		}
		if(empty($this->getTopico_curso())){
			$this->setTopico_curso("NULL");
		} 
		$sql = sprintf($this->sqlInsert,
					   $this->getNumero_curso(),
					   $this->getTopico_numero(),
					   $this->getTopico_curso(),
					   $this->getEmail_aluno(), 
					   $this->getData(),
					   $this->getAssunto());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update(){
		$parametro='';
		if(!empty($this->getNumero())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero='".$this->getNumero()."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getTopico_numero())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" topico_numero='".$this->getTopico_numero()."'";
		} 
		if(!empty($this->getTopico_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" topico_curso='".$this->getTopico_curso()."'";
		} 
		if(!empty($this->getEmail_aluno())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" email_aluno='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getData())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" data='".$this->getData()."'";
		} 
		if(!empty($this->getAssunto())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" assunto='".$this->getAssunto()."'";
		} 
		if(!empty($this->getExibicoes())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" exibicoes='".$this->getExibicoes()."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getNumero(),$this->getNumero_curso());
		if (!empty($this->getNumero()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//SEARCH
	public function search($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getNumero())){
			if(!empty($where)) $where.=" OR ";
			$where.=" numero='".$this->getNumero()."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($where)) $where.=" OR ";
			$where.=" numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getTopico_numero())){
			if(!empty($where)) $where.=" OR ";
			$where.=" topico_numero='".$this->getTopico_numero()."'";
		} 
		if(!empty($this->getTopico_curso())){
			if(!empty($where)) $where.=" OR ";
			$where.=" topico_curso='".$this->getTopico_curso()."'";
		} 
		if(!empty($this->getEmail_aluno())){
			if(!empty($where)) $where.=" OR ";
			$where.=" email_aluno='".$this->getEmail_aluno()."'";
		} 
		if(!empty($this->getData())){
			if(!empty($where)) $where.=" OR ";
			$where.=" data='".$this->getData()."'";
		} 
		if(!empty($this->getAssunto())){
			if(!empty($where)) $where.=" OR ";
			$where.=" assunto='".$this->getAssunto()."'";
		} 
		if(!empty($this->getExibicoes())){
			if(!empty($where)) $where.=" OR ";
			$where.=" exibicoes='".$this->getExibicoes()."'";
		}
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSearch,$parametro,$where,$group,$order,$limit);
		
		return $this->RunSelect($sql);
	}
}
?>