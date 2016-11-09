<?php
require_once "active/aModulo.php";
require_once "active/aModulo_recurso.php";
require_once "active/aAvaliacao_modulo.php";
require_once "Licao.php";

class Modulo extends aModulo{
	
	private $recursos;
	private $avaliacoes;
	private $licoes;
	
	public function __Modulo(){
		$this->recursos = new aModulo_recurso();
		$this->avaliacoes = new aAvaliacao_modulo();
		$this->licoes = new Licao();
	}
	
	public function criarModulo($nome,$numero,$video,$imagem,$descricao) {
	   $this->setNome($nome);
	   $this->setNumero_curso($numero);
	   $this->setVideo($video);
	   $this->setImagem($imagem);
	   $this->setDescricao($descricao);
	   return $this->insert();
	}
	
	public function removerModulo($nome,$numero_curso) {
	   $this->setNome($nome);
	   $this->setNumero_curso($numero_curso);
	   return $this->delete();	
	}
	
	public function recuperarModulo($nome,$numero_curso) {
	   $this->setNome($nome);
	   $this->setNumero_curso($numero_curso);
	   $temp = raiz."/temp/".$numero_curso."-".$nome.".jpg";
	   $this->select("lo_export(imagem, '$temp')");
	   return $this->select("*");	
	}
	
	public function atualizarModulo($novo_nome,$nome,$numero,$video,$imagem,$descricao) {
	   $this->setNome($nome);
	   $this->setNumero_curso($numero);
	   $this->setVideo($video);
	   if($imagem!="NULL")$this->setImagem($imagem);
	   $this->setDescricao($descricao);
	   if($this->limparRecursos($nome,$numero)){
		    return $this->update($novo_nome);
	   }
	}
	
	public function adicionarRecurso($recurso,$nome,$numero,$nome_recurso) {
	   $this->recursos = new aModulo_recurso();
	   $this->recursos->setRecurso($recurso);
	   $this->recursos->setNome_modulo($nome);
	   $this->recursos->setNome_recurso($nome_recurso);
	   $this->recursos->setNumero_curso($numero);
	   return $this->recursos->insert();
	}
	
	public function removerRecurso($recurso,$nome,$numero) {
	   $this->recursos->setRecurso($recurso);
	   $this->recursos->setNome_modulo($nome);
	   $this->recursos->setNumero_curso($numero);
	   return $this->recursos->delete();
	}
	
	public function limparRecursos($nome,$numero) {
	   $this->recursos = new aModulo_recurso();
	   $this->recursos->setNome_modulo($nome);
	   $this->recursos->setNumero_curso($numero);
	   return $this->recursos->delete();
	}
	
	public function recuperarLicoes($numero_curso,$modulo,$param="*"){
		$recuperar = new Licao;
		$recuperar->setNome_modulo($modulo);
	    $recuperar->setNumero_curso($numero_curso);
		foreach($recuperar->select($param,"nome asc") as $licao){
			$this->licoes[]=$licao;
		}
		return $this->licoes;
	}
	
	public function recuperarRecursos($nome,$numero) {
		$recuperar = new aModulo_recurso();
		$recuperar->setNome_modulo($nome);
	   	$recuperar->setNumero_curso($numero);
		foreach ($recuperar->select("recurso,nome_recurso") as $recurso){
			$this->recursos[]=$recurso;
		} 
		return $this->recursos;
	}
	
	public function recuperarAvaliacao($email,$numero,$modulo) {
		$recuperar = new aAvaliacao_modulo();
		$recuperar->setEmail_aluno($email);
		$recuperar->setNome_modulo($modulo);
		$recuperar->setNumero_curso($numero);
		foreach ($recuperar->select("*") as $avaliacao){
			$this->avaliacoes[]=$avaliacao;
		} 
		return $this->avaliacoes;
	}
}
?>