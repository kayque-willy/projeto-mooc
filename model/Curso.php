<?php
require_once "active/aCurso.php";
require_once "active/aAvaliacao_curso.php";
require_once "active/aCurso_tutor.php";
require_once "active/aCurso_aluno.php";
require_once "Tutor.php";
require_once "Pagina.php";
require_once "Modulo.php";
require_once "Topico.php";
require_once "Agregacao.php";
require_once "Aluno.php";

class Curso extends aCurso{
	
	private $tutores;
	private $paginas;
	private $modulos;
	private $anexos;
	private $topicos;
	private $avaliacoes;
	private $agregacoes;
	
	public function __Curso(){
		$this->tutores = new Tutor();
		$this->paginas = new Pagina();
		$this->modulos = new Modulo();
		$this->topicos = new Topico();
		$this->agregacoes = new Agregacao();
		$this->avaliacoes = new aAvaliacao_curso();
	}
	
	public function listarCursos($param='',$ord='',$group='',$limite='',$escolaridade='',$categoria=''){
		$array = array();
		if(!empty($escolaridade)) $this->setNivel($escolaridade);
		if(!empty($categoria)) $this->setCategoria($categoria);
		foreach ($this->select("numero",$ord,$group,$limite) as $numero_curso){
			$curso = new Curso();
			$temp=$curso->recuperarCurso($numero_curso['numero'],$param);
			$array[]=$temp[0];
		}
		return $array;
	}
	
	public function criarCurso($nivel,$faq,$compromisso,$video,$imagem,$categoria,$ctd_prog,$ch,$desc,$pre_req,$nome,$licen,$inst,$tutor,$descricao_curta){
	   $this->setNivel($nivel);
	   $this->setFAQ($faq);
	   $this->setCompromisso($compromisso);
	   $this->setVideo($video);
	   if($imagem=='NULL'){
	   	 $dir=raiz.'/lib/curso.jpg';
		 $this->setImagem("lo_import('$dir')");
	   }else 
		$this->setImagem($imagem);
	   $this->setCategoria($categoria);
	   $this->setConteudo_programatico($ctd_prog);
	   $this->setCarga_horaria($ch,$desc);
	   $this->setDescricao($desc);
	   $this->setPre_requisitos($pre_req);
	   $this->setNome($nome);
	   $this->setLicenca($licen);
	   $this->setInstituicao($inst);
	   $this->setDescricao_curta($descricao_curta);
	   if($this->insert()){
			$this->setImagem(NULL);
			$numero=$this->select("numero");
			$ministrar = new Tutor();
			return $ministrar->ministrarCurso($numero[0]['numero'],$tutor);
		}else return false;
	}
	
	public function atualizarCurso($numero,$nivel,$faq,$compromisso,$video,$imagem,$categoria,$ctd_prog,$ch,$desc,$pre_req,$nome,$licen,$inst,$descricao_curta){
	   $this->setNumero($numero);
	   $this->setNivel($nivel);
	   $this->setFAQ($faq);
	   $this->setCompromisso($compromisso);
	   $this->setVideo($video);
	   if($imagem!="NULL")$this->setImagem($imagem);
	   $this->setCategoria($categoria);
	   $this->setConteudo_programatico($ctd_prog);
	   $this->setCarga_horaria($ch,$desc);
	   $this->setDescricao($desc);
	   $this->setPre_requisitos($pre_req);
	   $this->setNome($nome);
	   $this->setLicenca($licen);
	   $this->setInstituicao($inst);
	   $this->setDescricao_curta($descricao_curta);
	   return $this->update();
	}
	
	public function recuperarCurso($numero,$param='*'){
		$this->setNumero($numero);
		$temp = raiz."/temp/".$numero.".jpg";
		return $this->select($param.",lo_export(imagem, '$temp')");
	}
	
	public function removerCurso($numero){
		$temp = raiz."/temp/".$numero.".jpg";
		unlink($temp);
		$this->setNumero($numero);
		return $this->delete();
	}
	
	public function buscarCurso($busca,$param='*'){
		$array = array();
		foreach ($this->search($busca,"numero") as $numero_curso){
			$curso = new Curso();
			$temp=$curso->recuperarCurso($numero_curso['numero'],$param);
			$array[]=$temp[0];
		}
		return $array;	
	}	
	
	public function avaliarCurso($numero,$email,$nota,$comentario,$data){
		$this->avaliacoes = new aAvaliacao_curso();
		$this->avaliacoes->setEmail_aluno($email);
		$this->avaliacoes->setNumero_curso($numero);
		$this->avaliacoes->setNota($nota);
		$this->avaliacoes->setData($data);
		$this->avaliacoes->setComentario($comentario);
		return $this->avaliacoes->insert();
	}
	
	public function recuperarInscritos($numero){
		$inscritos->setNumero_curso($numero);
		$inscritos = new aCurso_aluno();
		return $inscritos->select("count(email_aluno)");	
	}
	
	public function recuperarTutores($numero){
		$recupera = new aCurso_tutor();
		$recupera->setNumero_curso($numero);
		foreach ($recupera->select("email_tutor") as $email){
			$tutor = new Tutor();
			$tutor->setEmail($email);
			$this->tutores[]=$tutor->select("*");
		}
		return $this->tutores;
	}
	
	public function recuperarTopicos($numero){
		$recuperar = new Topico();
		$recuperar->setNumero_curso($numero);
		$consulta=$recuperar->selectTopico("*");
		foreach($consulta as $topico){
			$aluno = new Aluno();
			$aluno->recuperarPerfil($topico['email_aluno'],"email");
			$resposta=new Topico();
			$resposta->setTopico_numero($topico['numero']);
			$resposta->setTopico_curso($topico['numero_curso']);
			$topico['resposta']=$resposta->select("*");
			foreach($topico['resposta'] as $resposta){
				$aluno = new Aluno();
				$aluno->recuperarPerfil($resposta['email_aluno'],"email");
			}
			$this->topicos[]=$topico;	
		}
		
		return $this->topicos;
	}
	
	public function recuperarPaginas($numero,$param='titulo,numero_curso'){
		$recuperar = new Pagina();
		$recuperar->setNumero_curso($numero);
		foreach ($recuperar->select($param,"titulo") as $pagina){
			$this->paginas[]=$pagina;
		}
		return $this->paginas;
	}
	
	public function recuperarModulos($numero,$param="*"){
		$recuperar = new Modulo();
		$recuperar->setNumero_curso($numero);
		
		foreach ($recuperar->select($param,"nome") as $modulo){
			$this->modulos[]=$modulo;
		}
		
		return $this->modulos;
	}
	
	public function recuperarAvaliacaoCurso($numero){
		$recuperar = new aAvaliacao_curso();
		$recuperar->setNumero_curso($numero);
		foreach ($recuperar->select("*") as $avaliacao){
			$this->avaliacoes[]=$avaliacao;
		}
		return $this->avaliacoes;
	}
	
	public function recuperarMediaAvaliacao($numero){
		$recuperar = new aAvaliacao_curso();
		$recuperar->setNumero_curso($numero);
		$media=0;
		$avaliacoes=$recuperar->select("nota");
		foreach ($avaliacoes as $avaliacao){
			$media+=$avaliacao['nota'];
		}
		if(sizeof($avaliacoes)>0)return $media/sizeof($avaliacoes);
	}
	
	public function recuperarCategorias($param='categoria',$group='categoria'){
		return $this->select($param,"categoria asc",$group);
	}
	
	public function recuperarRecursos($numero){
		$consulta=$this->recuperarModulos($numero,"nome");
		$recursos=array();
		foreach($consulta as $mod){
				$rec=new Modulo();
				$temp['modulo']=$mod['nome'];
				$temp['recursos']=$rec->recuperarRecursos($mod['nome'],$numero);
				$recursos[]=$temp;
		}
		return $recursos;
	}
	
	public function recuperarWikis($numero){
		$this->agregacoes = new Agregacao();
		return $this->agregacoes->recuperarAgregacao($numero,"wiki");
	}
	
	public function recuperarMidias($numero){
		$this->agregacoes = new Agregacao();
		return $this->agregacoes->recuperarAgregacao($numero,"midia");
	}
	
	public function verificarTutor($numero,$email){
		$recupera = new aCurso_tutor();
		$recupera->setNumero_curso($numero);
		$recupera->setEmail_tutor($email);
		return $recupera->select("*");
	}
	
	public function verificarAvaliacao($numero,$aluno){
		$recuperar = new aAvaliacao_curso();
		$recuperar->setNumero_curso($numero);
		$recuperar->setEmail_aluno($aluno);
		return $recuperar->select("*");
	}
	
	public function verificarCurso($numero,$param='nome'){
		$this->setNumero($numero);
		return $this->select($param);
	}
	
}
?>