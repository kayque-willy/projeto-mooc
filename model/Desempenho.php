<?php
require_once "active/aAluno_licao.php";

class Desempenho{
	
	private $desempenho;
	
	public function __construct(){
		$this->desempenho = new aAluno_licao();
	}
	
	public function criarDesempenho($email,$modulo,$curso,$licao,$progresso='0'){
		 $this->desempenho->setEmail($email);
		 $this->desempenho->setNome_modulo($modulo);
		 $this->desempenho->setNumero_curso($curso);
		 $this->desempenho->setNome_licao($licao);
		 $this->desempenho->setMarcacao(NULL);
		 $this->desempenho->setProgresso($progresso);
		 return $this->desempenho->insert();
	}
	
	public function atualizarDesempenho($email,$modulo,$curso,$licao,$progresso){
		$this->desempenho->setEmail($email);
		$this->desempenho->setNome_modulo($modulo);
		$this->desempenho->setNumero_curso($curso);
		$this->desempenho->setNome_licao($licao);
		$this->desempenho->setMarcacao(NULL);
		$this->desempenho->setProgresso($progresso);
		return $this->desempenho->update();
	}
	
	public function recuperarDesempenhoCurso($email,$curso){
		
		  //Desempenho do curso
		  $cont_curso= 0;
		  //Modulos
		  $this->curso = new Curso();
		  $desempenho_modulo=array();
		  //Percorre os módulos
		  $modulos = $this->curso->recuperarModulos($curso,"nome");
		  foreach($modulos as $modulo){
			  //Desempenho do modulo
			  $cont_modulo = 0;
		 
			  //Licoes
			  $desempenho_licao=array();
			  $this->modulo=new Modulo();
 
			  //Percorre as liçõse 
			  $licoes=$this->modulo->recuperarLicoes($curso,$modulo['nome'],"nome");
			  foreach($licoes as $licao){
			  		//Recupera o desempenho
					$temp=$this->recuperarDesempenhoLicao($email,$modulo['nome'],$curso,$licao['nome']);
					//Soma o desempenho de cada lição para calcular o desempenho do modulo
					$cont_modulo+=$temp[0]['desempenho'];
			   }
			   //Soma o desepenho de cada modulo para calcular o desempenho do curso
			   $cont_curso+= (float) $cont_modulo/sizeof($licoes);
		  } 
		  return $cont_curso/sizeof($modulos);
	}
	
	public function removerDesempenho($email,$curso){
		 $this->desempenho->setEmail($email);
		 $this->desempenho->setNumero_curso($curso);
		 return $this->desempenho->delete();
	}
	
	public function recuperarDesempenhoModulo($email,$modulo,$curso){
		$this->desempenho->setEmail($email);
		$this->desempenho->setNome_modulo($modulo);
		$this->desempenho->setNumero_curso($curso);
		return $this->desempenho->select("AVG(progresso) as desempenho");
	}
	
	public function recuperarDesempenhoLicao($email,$modulo,$curso,$licao){
	   	$this->desempenho->setEmail($email);
		$this->desempenho->setNome_modulo($modulo);
		$this->desempenho->setNumero_curso($curso);
		$this->desempenho->setNome_licao($licao);
		return $this->desempenho->select("AVG(progresso) as desempenho");
	}
}
?>