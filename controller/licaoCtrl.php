<?php
require_once "controller.php";
require_once "model/Curso.php";
require_once "model/Pagina.php";
require_once "model/Licao.php";
require_once "model/Modulo.php";
require_once "model/Conteudo.php";
require_once "model/Desempenho.php";
require_once "model/Aluno.php";

class licaoController extends Controller{
	   
	private $view,$curso,$pagina,$modulo,$licao,$conteudo,$desempenho;
	
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
	  $this->modulo=new Modulo();
	  $this->licao=new Licao();
	  $this->conteudo=new Conteudo();
	  $this->desempenho=new Desempenho();
	  //Recupera as paginas
	  $this->recuperarTituloPagina();
	  //Lista todas os modulo do curso no menu
	  $this->listarModulos();
	  $this->view->assign("nome_curso",$this->curso->recuperarCurso($_REQUEST['curso'],"nome,numero"));
	}
	
	/*------FUNÇÕES PUBLICAS---------*/
	
	//Recupera o modulo
	public function modulo(){
		$this->recuperarModulo();
		$this->view->assign("nome_pagina","Licao");
		$this->view->display("classroom-licao.html");		
	}
	
	//Recupera a lição
	public function licao(){
		$this->recuperarLicao();
		$this->view->assign("nome_pagina","Licao");
		$this->view->display("classroom-licao.html");		
	}
	
	//Verifica o progresso do aluno
	public function progresso(){
		if (empty($_SESSION['usuario']) or $_SESSION['tipo_usuario']!='aluno'){
			header ("Location: index.php?ctrl=classroom&ac=pagina&curso=".$_REQUEST['curso']."&pagina=Pagina Inicial");	
			break;
		}
		$this->recuperarProgresso();
		$this->view->assign("nome_pagina","Progresso");
		$this->view->display("classroom-progresso.html");		
	}
	
	/*-------FUNÇÕES PRIVADAS-------*/
	
	//Recupera os titulos das paginas para adicionar ao menu
	private function recuperarTituloPagina(){
		$this->view->assign("paginas",$this->curso->recuperarPaginas($_REQUEST['curso'],"titulo"));
	}
	
	//Operação de listagem de modulos
	private function listarModulos(){
		//Verifica se o aluno esta inscrito no curso
		$aluno = new Aluno();
		$inscrito=$aluno->recuperarInscricao($_REQUEST['curso'],$_SESSION['usuario']);
		
		//Operação de listagem de licao
		$modulos=array();
		$consulta=$this->curso->recuperarModulos($_REQUEST['curso'],"nome");
		
		foreach($consulta as $modulo){
			$mod=new Modulo();
			$temp['modulo']=$modulo;
			$temp['licoes']=$mod->recuperarLicoes($_REQUEST['curso'],$modulo['nome'],"nome");
			//Verifica os cookies
			if(!empty($_SESSION['usuario']) and $_SESSION['tipo_usuario']=='aluno' and !empty($inscrito))
				if(!empty($temp['licoes']))
					foreach($temp['licoes'] as $lic){
						$this->verificarCookies($_REQUEST['curso'],$temp['modulo']['nome'],$lic['nome']);
					}
			$modulos[]=$temp;
		}
		//Adiciona no menu
		$this->view->assign("modulos",$modulos);
	}
	
	//Recupera o conteudo do modulo
	private function recuperarModulo(){
		$this->view->assign("item",$this->modulo->recuperarModulo($_REQUEST['modulo'],$_REQUEST['curso']));
		$this->view->assign("n_modulo",$_REQUEST['modulo']);	
		$this->view->assign("escolha",$_REQUEST['modulo']);	
	}
	
	//Recupera o conteudo do modulo
	private function recuperarLicao(){
		if(empty($_REQUEST['licao'])){
			$this->view->assign("escolha","home");	
		}else{
		  //Recupera a home da lição
		  $conteudo=$this->licao->recuperarConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao'],"conteudo,tipo");
		  //Recupera o conteúdo da liçõa
		  $conteudo_licao=array();
		  if(!empty($conteudo)){
		  	 foreach($conteudo as $cont){
			  $conteudo_licao[]=$this->recuperarConteudoLicao($cont['conteudo']);
			}
		  }
		  //Adiciona os arrays na view
		  //Numero do curso
		  $this->view->assign("numero_curso",$_REQUEST['curso']);
		  //Nome do modulo
		  $this->view->assign("nome_modulo",$_REQUEST['modulo']);
		  $this->view->assign("n_modulo",$_REQUEST['modulo']);	
		  //Lição inicial
		  $this->view->assign("item",$this->licao->recuperarLicao($_REQUEST['licao'],$_REQUEST['curso'],$_REQUEST['modulo'],"nome,resumo"));
		  //Demais lições
		  $this->view->assign("conteudo_licao",$conteudo_licao);	
		  //Escolha do menu
		  $this->view->assign("escolha",$_REQUEST['licao']);	
		}
	}
	
	//Operação de consulta de conteúdo
	private function recuperarConteudoLicao($conteudo){
		//Recupera o conteudo
		$pagina=$this->conteudo->recuperarConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao'],$conteudo);
		//Recupera os links do conteudo
		$itens=$this->conteudo->recuperarLinks($conteudo,$_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao']);
		/*------------METODOLOGIA DE RECUPERAÇÃO CONTEUDO------------*/	
		if($pagina){
			/*----------METODOLOGIA DE RECUPERAÇÃO LINKS-------------*/
		    if($itens){
				$rec_item=array();
				$rec_link=array();
				foreach($itens as $item){
					//Pega o numero de ordem
					$i=strstr($item['link'],'#',true);
					//Pega o nome do item
					$nome_item=substr($item['link'],strlen($i)+1);
					$rec_item[$i]=$nome_item;
				}
			}

			//Quebra o conteúdo concatenado
			$conteudo_pagina=$pagina[0]['texto'];
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
				  if($ord=="link") {
					  $rec['link']=$rec_item[$j];
					  $j++;
				  }
				}
				$rec['tipo']=$ord;
				$rec['field']=(string)$k++;
				$pagina_rec[]=$rec;
			}	
			$resultado['conteudo']=$pagina[0]['conteudo'];
			$resultado['tipo']=$pagina[0]['tipo'];
			$resultado['itens']=$pagina_rec;
			return $resultado;
		}
	}
	
	//Operação para monitorar o progresso da lição de acordo com os cookies
	private function verificarCookies($curso,$modulo,$licao){
		$aux_curso = str_replace(" ", "_", $curso);
		$aux_modulo = str_replace(" ", "_", $modulo);
		$aux_licao = str_replace(" ", "_", $licao);
		$usuario=str_replace(".", "_", $_SESSION['usuario']);
	
		if(isset($_COOKIE["$usuario|$aux_curso|$aux_modulo|$aux_licao"])) {
			$this->desempenho = new Desempenho();
			if(!$this->desempenho->criarDesempenho($_SESSION['usuario'],$modulo,$curso,$licao,$_COOKIE["$usuario|$aux_curso|$aux_modulo|$aux_licao"])){
				$this->desempenho->atualizarDesempenho($_SESSION['usuario'],$modulo,$curso,$licao,$_COOKIE["$usuario|$aux_curso|$aux_modulo|$aux_licao"]);
			}
		}
	}
	
	//Relatório de progresso do curso por aluno
	private function recuperarProgresso(){
	  if(!empty($_SESSION['usuario']) and $_SESSION['tipo_usuario']=='aluno'){
		  //Curso
		  //Desempenho do curso
		  $cont_curso= 0;
		  //Modulos
		  $this->curso = new Curso();
		  $desempenho_modulo=array();
		  //Percorre os módulos
		  $modulos = $this->curso->recuperarModulos($_REQUEST['curso'],"nome");
		  foreach($modulos as $modulo){
			  //Desempenho do modulo
			  $cont_modulo = 0;
		 
			  //Licoes
			  $desempenho_licao=array();
			  $this->modulo=new Modulo();
			  $licoes=$this->modulo->recuperarLicoes($_REQUEST['curso'],$modulo['nome'],"nome");
			  
			  //Percorre as liçõse 
			  foreach($licoes as $licao){
			  		//Recupera o desempenho
					$desempenho = new Desempenho();
					$temp=$desempenho->recuperarDesempenhoLicao($_SESSION['usuario'],$modulo['nome'],$_REQUEST['curso'],$licao['nome']);
					//Desempenho da lição
					$desempenho_licao[$licao["nome"]]=$temp[0];
					//Nome da lição
					$desempenho_licao[$licao["nome"]]['nome']=$licao['nome'];
					//Soma o desempenho de cada lição para calcular o desempenho do modulo
					$cont_modulo+=$temp[0]['desempenho'];
			   }
			   //Desempenho do modulo
			   $desempenho_modulo[$modulo["nome"]]['desempenho']=$cont_modulo/sizeof($licoes);
			   //Nome do modulo
			   $desempenho_modulo[$modulo["nome"]]["nome"]=$modulo["nome"];
			   //Liçoes
			   $desempenho_modulo[$modulo["nome"]]['licoes']=$desempenho_licao;

			   //Soma o desepenho de cada modulo para calcular o desempenho do curso
			   $cont_curso+= (float) $desempenho_modulo[$modulo["nome"]]['desempenho'];
		  } 
		  //Desempenho do curso
		  $desempenho_curso['desempenho']=$cont_curso/sizeof($modulos);
		  $this->view->assign("desempenho_curso",$desempenho_curso);
		  $this->view->assign("desempenho_modulo",$desempenho_modulo);
	  }
	}
}
?>