<?php

require_once "modelos/mCurso.php";

class aCurso extends mCurso{
	
	protected $sqlSelect = "SELECT %s FROM mooc.curso WHERE 1=1 %s %s %s %s";
	protected $sqlDelete = "DELETE from mooc.curso where numero='%s'";
	protected $sqlInsert = "INSERT INTO mooc.curso (nivel,faq,compromisso,video,imagem,categoria,conteudo_programatico,carga_horaria,descricao,pre_requisito,nome,licenca,instituicao,descricao_curta) VALUES ('%s','%s','%s','%s',%s,'%s','%s','%s','%s','%s','%s','%s','%s','%s')";
	protected $sqlUpdate = "UPDATE mooc.curso SET %s WHERE numero='%s'";
	protected $sqlSearch = "SELECT %s FROM mooc.curso WHERE %s %s %s %s";
	
	//SELECT
	public function select($parametro='',$order='',$group='',$limit=''){
		$where='';
		if(!empty($this->getNumero())){
			$where.=" AND numero='".$this->getNumero()."'";
		} 
		if(!empty($this->getNivel())){
			$where.=" AND nivel='".$this->getNivel()."'";
		} 
		if(!empty($this->getFAQ())){
			$where.=" AND faq='".$this->getFAQ()."'";
		} 
		if(!empty($this->getCompromisso())){
			$where.=" AND compromisso='".$this->getCompromisso()."'";
		} 
		if(!empty($this->getVideo())){
			$where.=" AND video='".$this->getVideo()."'";
		} 
		if(!empty($this->getImagem())){
			$where.=" AND imagem='".$this->getImagem()."'";
		} 
		if(!empty($this->getCategoria())){
			$where.=" AND categoria='".$this->getCategoria()."'";
		} 
		if(!empty($this->getConteudo_programatico())){
			$where.=" AND conteudo_programatico='".$this->getConteudo_programatico()."'";
		} 
		if(!empty($this->getCarga_horaria())){
			$where.=" AND carga_horaria='".$this->getCarga_horaria()."'";
		} 
		if(!empty($this->getDescricao())){
			$where.=" AND descricao='".$this->getDescricao()."'";
		} 
		if(!empty($this->getPre_requisitos())){
			$where.=" AND pre_requisito='".$this->getPre_requisitos()."'";
		} 
		if(!empty($this->getNome())){
			$where.=" AND nome='".$this->getNome()."'";
		} 
		if(!empty($this->getLicenca())){
			$where.=" AND licenca='".$this->getLicenca()."'";
		} 
		if(!empty($this->getInstituicao())){
			$where.=" AND instituicao='".$this->getInstituicao()."'";
		} 
		if(!empty($this->getDescricao_curta())){
			$where.=" AND descricao_curta='".$this->getDescricao_curta()."'";
		} 
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSelect,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
	//DELETE
	public function delete(){
		$sql = sprintf($this->sqlDelete,$this->getNumero());
		if (!empty($this->getNumero()))return $this->RunQuery($sql);
	}
	
	//INSERT
	public function insert(){
		$sql = sprintf($this->sqlInsert,
					   $this->getNivel(),
					   $this->getFAQ(),
					   $this->getCompromisso(),
					   $this->getVideo(),
					   $this->getImagem(),
					   $this->getCategoria(),
					   $this->getConteudo_programatico(),
					   $this->getCarga_horaria(),
					   $this->getDescricao(),
					   $this->getPre_requisitos(),
					   $this->getNome(),
					   $this->getLicenca(),
					   $this->getInstituicao(),
					   $this->getDescricao_curta());
		return $this->RunQuery($sql);
	}
	
	//UPDATE
	public function update(){
		$parametro='';
		if(!empty($this->getNivel())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nivel='".$this->getNivel()."'";
		} 
		if(!empty($this->getFAQ())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" faq='".$this->getFAQ()."'";
		} 
		if(!empty($this->getCompromisso())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" compromisso='".$this->getCompromisso()."'";
		} 
		if(!empty($this->getVideo())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" video='".$this->getVideo()."'";
		} 
		if(!empty($this->getImagem())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" imagem=".$this->getImagem();
		} 
		if(!empty($this->getCategoria())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" categoria='".$this->getCategoria()."'";
		} 
		if(!empty($this->getConteudo_programatico())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" conteudo_programatico='".$this->getConteudo_programatico()."'";
		} 
		if(!empty($this->getCarga_horaria())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" carga_horaria='".$this->getCarga_horaria()."'";
		} 
		if(!empty($this->getDescricao())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" descricao='".$this->getDescricao()."'";
		} 
		if(!empty($this->getPre_requisitos())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" pre_requisito='".$this->getPre_requisitos()."'";
		} 
		if(!empty($this->getNome())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" nome='".$this->getNome()."'";
		} 
		if(!empty($this->getLicenca())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" licenca='".$this->getLicenca()."'";
		} 
		if(!empty($this->getInstituicao())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" instituicao='".$this->getInstituicao()."'";
		} 
		if(!empty($this->getDescricao_curta())){
			if(!empty($parametro)) $parametro.=",";
			$parametro.=" descricao_curta='".$this->getDescricao_curta()."'";
		} 
		$sql = sprintf($this->sqlUpdate,$parametro,$this->getNumero());
		
		if (!empty($this->getNumero()) and !empty($parametro))return $this->RunQuery($sql);
	}
	
	//SEARCH
	public function search($busca,$parametro='',$order='',$group='',$limit=''){
		$where=" categoria LIKE '%".$busca."%'";
		$where.=" OR descricao LIKE '%".$busca."%'";
		$where.=" OR nome LIKE '%".$busca."%'";
		$where.=" OR instituicao LIKE '%".$busca."%'";
		$where.=" OR descricao_curta LIKE '%".$busca."%'";
		if(!empty($order)) $order=" ORDER BY $order ";
		if(!empty($limit)) $limit=" LIMIT $limit ";
		if(!empty($group)) $group=" GROUP BY $group ";
		$sql = sprintf($this->sqlSearch,$parametro,$where,$group,$order,$limit);
		return $this->RunSelect($sql);
	}
	
}

?>