<?php

require_once "modelos/mModulo.php";

class aModulo extends mModulo{
	
	protected $sqlSelect = "SELECT %s FROM mooc.modulo WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.modulo WHERE nome='%s' AND numero_curso='%s'";
	protected $sqlInsert = "INSERT INTO mooc.modulo (nome,numero_curso,video,imagem,descricao) VALUES ('%s','%s','%s',%s,'%s')";
	protected $sqlUpdate = "UPDATE mooc.modulo SET %s WHERE nome='%s' AND numero_curso='%s'";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getNome())){
			$where.=" AND nome='".$this->getNome()."'";
		} 
		if(!empty($this->getNumero_curso())){
			$where.=" AND numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getVideo())){
			$where.=" AND video='".$this->getVideo()."'";
		} 
		if(!empty($this->getImagem())){
			$where.=" AND imagem='".$this->getImagem()."'";
		} 
		if(!empty($this->getDescricao())){
			$where.=" AND descricao='".$this->getDescricao()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		
		
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getNome(),$this->getNumero_curso());
		if (!empty($this->getNome()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){	
		$sql = sprintf($this->sqlInsert,
					   $this->getNome(),
					   $this->getNumero_curso(),
					   $this->getVideo(),
					   $this->getImagem(),
					   $this->getDescricao());
		
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update($nome=''){
		$parametro='';
		if(!empty($nome)){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome='".$nome."'";
		} 
		if(!empty($this->getNumero_curso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" numero_curso='".$this->getNumero_curso()."'";
		} 
		if(!empty($this->getVideo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" video='".$this->getVideo()."'";
		} 
		if(!empty($this->getImagem())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" imagem=".$this->getImagem();
		} 
		if(!empty($this->getDescricao())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" descricao='".$this->getDescricao()."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getNome(),$this->getNumero_curso());
		
		if (!empty($this->getNome()) and !empty($this->getNumero_curso()))return $this->RunQuery($sql);
	}
}
?>