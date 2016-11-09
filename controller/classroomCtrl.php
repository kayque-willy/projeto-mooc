<?php
require_once "controller.php";
require_once "model/Curso.php";
require_once "model/Pagina.php";
require_once "model/Agregacao.php";
require_once "model/Desempenho.php";
require_once "model/Aluno.php";

class classroomController extends controller{
	   
	private $view,$curso,$pagina,$topico,$agregacao;
	
	//Construtor
	function __construct(){
	  //Verifica o parametro do curso
	  parent::verificaArgCurso();
	  //Verifica se o curso existe
	  parent::verificarCurso();
	  //Recebe os parametros iniciais da view
	  $this->view=parent::__construct(); 
	  $this->curso=new Curso();
	  $this->pagina=new Pagina();
	  $this->topico=new Topico();
	  $this->agregacao=new Agregacao();
	  //Recupera as paginas
	  $this->recuperarTituloPagina();
	  //Atualiza o desempenho
	  $this->atualizarDesempenho();
	  $this->view->assign("nome_curso",$this->curso->recuperarCurso($_REQUEST['curso'],"nome,numero"));
	}
	
	/*------FUNÇÕES PUBLICAS---------*/
	
	/*-----------PAGINAS------------*/
	
	//Recupera a pagina
	public function pagina(){
	  if(!empty($_REQUEST['pagina'])){
		 $this->recuperarPagina($_REQUEST['pagina']);
		 $this->view->assign("nome_pagina",$_REQUEST['pagina']);
		 $this->view->display("classroom-pagina.html");		
	  }else{
		   header("Location: index.php?ctrl=curso&ac=catalogo");
		   break;
	  } 	
	}
	
	/*-----------DISCUSSÃO------------*/
	
	//Discussão do curso
	public function discussao(){
	   $this->recuperarTopicos();
	   $this->view->assign("nome_pagina","Discussao");
	   $this->view->display("classroom-discussao.html");		
	}
	
	//Cadastra novo topico
	public function novoTopico(){
		$this->novoTopicoCurso();
		header("Location: index.php?ctrl=classroom&ac=discussao&curso=".$_REQUEST['curso']."");
	}
	
	//Remove  topico
	public function removerTopico(){
		$this->removerTopicoCurso();
		header("Location: index.php?ctrl=classroom&ac=discussao&curso=".$_REQUEST['curso']."");
	}
	
	//Responde topico
	public function responderTopico(){
		$this->responderTopicoCurso();
		header("Location: index.php?ctrl=classroom&ac=discussao&curso=".$_REQUEST['curso']."");
	}
	
	//Edita o topico
	public function editarTopico(){
		$this->editarTopicoCurso();
		header("Location: index.php?ctrl=classroom&ac=discussao&curso=".$_REQUEST['curso']."");
	}
	
	/*-----------MATERIAL ADICIONAL------------*/
	
	//Material adicional
	public function material(){
		$this->view->assign("recursos",$this->curso->recuperarRecursos($_REQUEST['curso']));
		$this->view->assign("nome_pagina","Material Adicional");
		$this->view->display("classroom-material_adicional.html");	
	}
	
	/*-----------WIKI------------*/
	
	//Wiki 
	public function wiki(){
		$this->view->assign("wikis",$this->curso->recuperarWikis($_REQUEST['curso']));
		$this->view->assign("nome_pagina","Wiki");
		$this->view->display("classroom-wiki.html");	
	}
	
	//Cadastra novo wiki
	public function novoWiki(){
		$this->novoWikiCurso();
		header("Location: index.php?ctrl=classroom&ac=wiki&curso=".$_REQUEST['curso']."");
	}
	
	//Edita o wiki
	public function editarWiki(){
		$this->editarWikiCurso();
		header("Location: index.php?ctrl=classroom&ac=wiki&curso=".$_REQUEST['curso']."");
	}
	
	/*-----------MIDIA SOCIAL------------*/
	
	//Material adicional
	public function midiaSocial(){
		$this->view->assign("midia",$this->curso->recuperarMidias($_REQUEST['curso']));
		$this->view->assign("nome_pagina","Midia Social");
		$this->view->display("classroom-midia_social.html");	
	}
	
	//Cadastra novo mida
	public function novaMidia(){
		$this->novaMidiaCurso();
		header("Location: index.php?ctrl=classroom&ac=midiaSocial&curso=".$_REQUEST['curso']."");
	}
	
	//Edita o wiki
	public function editarMidia(){
		$this->editarMidiaCurso();
		header("Location: index.php?ctrl=classroom&ac=midiaSocial&curso=".$_REQUEST['curso']."");
	}
	
	/*-------FUNÇÕES PRIVADAS-------*/
	
	/*-----------PAGINAS------------*/
	
	//Função de operação para recuperar a pagina
	private function recuperarPagina($pagina){
		//Recupera a pagina
		$pagina=$this->pagina->recuperarPagina($pagina,$_REQUEST['curso']);
		//Recupera os itens da pagina
		$itens=$this->pagina->recuperarItens("Pagina Inicial",$_REQUEST['curso']);
		/*------------METODOLOGIA DE RECUPERAÇÃO CONTEUDO------------*/	
		if($pagina){
			/*----------METODOLOGIA DE RECUPERAÇÃO ITENS-------------*/
		    if($itens){
				$rec_item=array();
				$rec_link=array();
				foreach($itens as $item){
					//Pega o numero de ordem
					$i=strstr($item['item'],'#',true);
					//Pega o nome do item
					$nome_item=substr($item['item'],strlen($i)+1);
					//Explode as strings em dois arrays
					$nome_item=explode("|",$nome_item,-1);
					//Pega o link
					$link=substr($item['item'],strlen($nome_item[0])+3);
					$link=explode("&",$link,-1);
					//Adicionan nos arrays 
					$rec_item[$i]=$nome_item[0];
					$rec_link[$i]=$link[0];
				}
			}
			
			//Quebra o conteúdo concatenado
			$conteudo_pagina=$pagina[0]['conteudo'];
			$indice = strstr($conteudo_pagina, '$',true);
			$conteudo=strstr($conteudo_pagina, '#',true);
			$conteudo=substr($conteudo,strlen($indice)+1);
			$ordem = strstr($conteudo_pagina, '&',true);
			$ordem = substr($ordem,strlen($indice)+strlen($conteudo)+2);
			
			//Depois que obtem as substrings, quebra novamente em um vetor
			$indice=explode('|', $indice, -1);
			$conteudo=explode('|', $conteudo, -1);
			$ordem=explode('|', $ordem, -1);
			
			//Percorre a ordem e recupera as sessões e itens
			$pagina_rec=array();
			$i=0;
			$j=0;
			$k=1;
			foreach($ordem as $ord){
				$rec=array();
				if($ord=="sessao") {
					$rec['indice']=$indice[$i];
					$rec['conteudo']=$conteudo[$i];
					$i++;
				}
				if($itens){
				  if($ord=="item") {
					  $rec['item']=$rec_item[$j];
					  $rec['link']=$rec_link[$j];
					  $j++;
				  }
				}
				$rec['tipo']=$ord;
				$rec['field']=(string)$k++;
				$pagina_rec[]=$rec;
			}	
			$this->view->assign("pagina_rec",$pagina_rec);
		}else{
			header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=rec_no");	
			break;
		}
	}
	
	//Recupera os titulos das paginas para adicionar ao menu
	private function recuperarTituloPagina(){
		$this->view->assign("paginas",$this->curso->recuperarPaginas($_REQUEST['curso'],"titulo"));
	}
	
	/*-----------DISCUSSÃO------------*/
	
	//Recupera os topicos de discussao do curso
	private function recuperarTopicos(){
		$this->view->assign("topicos",$this->curso->recuperarTopicos($_REQUEST['curso']));
	}
	
	//Novo topico 
	private function novoTopicoCurso(){
		$this->topico->criarTopico($_POST['numero_curso'],$_POST['email_aluno'],date('Y-m-d H:i:s'),$_POST['assunto']);
	}
	
	//Remover topico 
	private function removerTopicoCurso(){
		$this->topico->removerTopico($_POST['numero'],$_REQUEST['curso']);
	}
	
	//Responder topico 
	private function responderTopicoCurso(){
		$this->topico->responderTopico($_POST['numero'],$_REQUEST['curso'],$_REQUEST['curso'],$_SESSION['usuario'],date('Y-m-d H:i:s'),$_POST['assunto']);
	}
	
	//Editar o topico 
	private function editarTopicoCurso(){
		$this->topico->editarTopico($_REQUEST['curso'],$_POST['numero'],$_SESSION['usuario'],date('Y-m-d H:i:s'),$_POST['assunto']);
	}
	
	/*-----------WIKI------------*/
	
	//Novo wiki 
	private function novoWikiCurso(){
		$this->agregacao->agregarWiki($_SESSION['usuario'],$_REQUEST['curso'],$_POST['wiki']);
	}
	
	//Editar o topico 
	private function editarWikiCurso(){
		$this->agregacao->editarWiki($_SESSION['usuario'],$_REQUEST['curso'],$_POST['wiki_antiga'],$_POST['wiki']);
	}
	
	/*-----------MIDIA SOCIAL------------*/
	
	//Novo wiki 
	private function novaMidiaCurso(){
		$this->agregacao->agregarMidiaSocial($_SESSION['usuario'],$_REQUEST['curso'],$_POST['midia']);
	}
	
	//Editar o topico 
	private function editarMidiaCurso(){
		$this->agregacao->editarMidiaSocial($_SESSION['usuario'],$_REQUEST['curso'],$_POST['midia_antiga'],$_POST['midia']);
	}
	
	//Operação de verificação dos cookies
	private function atualizarDesempenho(){
		$aluno = new Aluno();
		if($aluno->recuperarInscricao($_REQUEST['curso'],$_SESSION['usuario'])){
			$curso = new Curso();
			$consulta=$curso->recuperarModulos($_REQUEST['curso'],"nome");
			foreach($consulta as $modulo){
				$mod=new Modulo();
				$temp['modulo']=$modulo;
				$temp['licoes']=$mod->recuperarLicoes($_REQUEST['curso'],$modulo['nome'],"nome");
				//Verifica os cookies
				if(!empty($_SESSION['usuario']) and $_SESSION['tipo_usuario']=='aluno')
					if(!empty($temp['licoes']))
						foreach($temp['licoes'] as $lic){
							$this->verificarCookies($_REQUEST['curso'],$temp['modulo']['nome'],$lic['nome']);
						}
			}	
		}
	}
	
	//Operação para monitorar o progresso da lição de acordo com os cookies
	private function verificarCookies($curso,$modulo,$licao){
		$aux_curso = str_replace(" ", "_", $curso);
		$aux_modulo = str_replace(" ", "_", $modulo);
		$aux_licao = str_replace(" ", "_", $licao);
		if(isset($_COOKIE["$aux_curso|$aux_modulo|$aux_licao"])) {
			$this->desempenho = new Desempenho();
			if(!$this->desempenho->criarDesempenho($_SESSION['usuario'],$modulo,$curso,$licao,$_COOKIE["$aux_curso|$aux_modulo|$aux_licao"])){
				$this->desempenho->atualizarDesempenho($_SESSION['usuario'],$modulo,$curso,$licao,$_COOKIE["$aux_curso|$aux_modulo|$aux_licao"]);
			}
		}
	}
}
?>