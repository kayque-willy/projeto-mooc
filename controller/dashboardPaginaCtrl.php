<?php
require_once "controller.php";
require_once "model/Curso.php";
require_once "model/Pagina.php";

class dashboardPaginaController extends Controller{
	   
	private $view,$curso,$pagina;
	
	//Construtor
	function __construct(){
	  //Restrição de tutor
      parent::restricaoTutor();
	  //Redireciona se faltar argumento de parametro
	  parent::verificaArgCurso();
	  //Verifica o autor do curso
	  parent::verificarAutor();
	  //Recebe os parametros iniciais da view
	  $this->view=parent::__construct();  
	  //Aciona opções da sidebar
      parent::editarCurso($this->view);
	  //O link serve para ativar o menu da sidebar
      $this->view->assign("link","pagina");
	  $this->curso=new Curso();
	  $this->pagina=new Pagina();
	}
	
	/*-------FUNÇÕES PUBLICAS-------*/
	
	//Lista todos as paginas do curso no dashboard
	public function paginas(){
	 //Apresentação da mensagem de sucesso caso seja redirecionado do cadastro ou exclusão
	 $this->mensagemRetorno();
	 //Lista todas as paginas do curso
	 $this->listarPaginas();
	 //Exibe a view
	 $this->view->display("dashboard-pagina.html");
	}
	
	//Cadastra uma nova pagina
	public function cadastrar(){
		if(!empty($_POST)) $this->cadastrarPagina();
		$this->view->assign("pagina",$_REQUEST['pagina']);
		$this->view->display("dashboard-pagina-cadastro.html");	
	}
	
	//Recupera o conteudo da pagina
	public function recuperar(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgPagina();
		//Atualiza a pagina
		if(!empty($_POST))$this->atualizarPagina();
		//Recupera o conteúdo da pagina
		$this->recuperarPagina();
		//Exibe a view
		$this->view->assign("pagina",$_REQUEST['pagina']);
		$this->view->display("dashboard-pagina-cadastro.html");		
	}
	
	//Exclui uma pagina
	public function excluir(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgPagina();
		//Exclui a pagina
		$this->excluirPagina();	
	}
	
	/*-------FUNÇÕES PRIVADAS-------*/
	
	//Operação de listagem de paginas
	private function listarPaginas(){
		//Verifica se a pagina inicial e o programa de estudo foram cadastrados no curso
		$this->view->assign("pagina_inicial",$this->pagina->recuperarPagina("Pagina Inicial",$_REQUEST['curso']));
		$this->view->assign("programa_estudo",$this->pagina->recuperarPagina("Programa de estudo",$_REQUEST['curso']));
		//Recupera as paginas do curso
		$this->view->assign("paginas",$this->curso->recuperarPaginas($_REQUEST['curso']));
	}
	
	//Operação de cadastro de pagina
	private function cadastrarPagina(){
		//Tratamento do indice das sessões |=separação $=fim do indice
		$indice=$this->tratarTituloSessao();
		
		//Tratamento do conteúdo das sessões |=separação #=fim do conteúdo
		$conteudo=$this->tratarConteudoSessao();
		
		//Tratamento da ordem das sessões e dos indices |=separação &=fim da ordem
		$ordem=$this->tratarOrdem();
		
		//Concatena todo o conteúdo
		$conteudo_pagina=$indice.$conteudo.$ordem;
		
		//Tratamento dos itens
		$itens=$this->tratarItens();
		
		//Cria a pagina
		$resultado=$this->pagina->criarPagina($_POST['titulo'],$_REQUEST['curso'],$conteudo_pagina);
		
		if($resultado){
		  //Se tiver itens, adiciona os itens
		  if(!empty($itens)){
			  foreach($itens as $item){
				  $this->pagina->adicionarItem($_POST['titulo'],$_REQUEST['curso'],$item);	
			  }
		  }
		  header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=ok");
		  break;
		}else{
			 header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=no");
			 break;
		}
		 	
	}
	
	//Operação de cadastro de pagina
	private function recuperarPagina(){
		//Recupera a pagina
		$pagina=$this->pagina->recuperarPagina($_REQUEST['pagina'],$_REQUEST['curso']);
		//Recupera os itens da pagina
		$itens=$this->pagina->recuperarItens($_REQUEST['pagina'],$_REQUEST['curso']);
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
	        $this->view->assign("cont",sizeof($pagina_rec));
			$this->view->assign("pagina_rec",$pagina_rec);
		}else{
			header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=rec_no");	
			break;
		}	
	}
	
	//Operação de exclusão de pagina
	private function excluirPagina(){
		if($this->pagina->removerPagina($_REQUEST['pagina'],$_REQUEST['curso']))
			header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=exc_ok");
	 	else 
	 		header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=exc_no");	
	}
	
	//Operação de atualização de pagina
	private function atualizarPagina(){
		
		//Tratamento do indice das sessões |=separação $=fim do indice
		$indice=$this->tratarTituloSessao();
		
		//Tratamento do conteúdo das sessões |=separação #=fim do conteúdo
		$conteudo=$this->tratarConteudoSessao();
		
		//Tratamento da ordem das sessões e dos indices |=separação &=fim da ordem
		$ordem=$this->tratarOrdem();
		
		//Concatena todo o conteúdo
		$conteudo_pagina=$indice.$conteudo.$ordem;
		
		//Tratamento dos itens
		$itens=$this->tratarItens();
		
		//Atualiza a pagina
		$resultado=$this->pagina->atualizarPagina($_POST['titulo'],$conteudo_pagina,$_REQUEST['pagina'],$_REQUEST['curso'],$itens);
		if($resultado){
		  header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=rec_ok");
		  break;
		 }else {
			 header("Location: index.php?ctrl=dashboardPagina&ac=paginas&curso=".$_REQUEST['curso']."&sucesso=rec_no");	
		     break;	 
		  }
	}
	
	/*-------FUNÇÕES DE ROTINA-------*/
	
	//Operação de tratamento do titulo da sessao
	private function tratarTituloSessao(){
		$indice="";
		if(!empty($_POST['titulo_sessao'])){
		  foreach($_POST['titulo_sessao'] as $titulo_sessao){
			  $indice.=$titulo_sessao."|";
		  }
		  $indice.="$";	
		}
		return $indice;
	}
	
	//Operação de tratamento do conteudo da sessao
	private function tratarConteudoSessao(){
		$conteudo="";
		if(!empty($_POST['conteudo_sessao'])){
		  foreach($_POST['conteudo_sessao'] as $sessao){
			  $conteudo.=$sessao."|";
		  }
		  $conteudo.="#";
		}
		return $conteudo;
	}
	
	//Operação de tratamento do conteudo da sessao
	private function tratarOrdem(){
		$ordem="";
		if(!empty($_POST['ordem'])){
		  foreach($_POST['ordem'] as $ord){
			  $ordem.=$ord."|";
		  }
		  $ordem.="&";	
		}
		return $ordem;
	}
	
	//Operação de tratamento dos itens
	private function tratarItens(){
		$itens=array();
		if(!empty($_POST['item']) and !empty($_POST['link'])){
		  for($i=0;$i<sizeof($_POST['item']);$i++){
			  $item=$i."#".$_POST['item'][$i]."|".$_POST['link'][$i]."&";
			  $itens[]=$item;
		  }		
		}
		return $itens;
	}
	
	//Exibe mensagem de retorno em caso de redirecionamento do cadastro ou atualização
	private function mensagemRetorno(){
	  if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok')$this->view->assign("sucesso","Pagina cadastrada com sucesso! Selecione-a para começar a adicionar os conteúdo!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao criar a pagina."); 
		  else if ($_REQUEST['sucesso']=='exc_ok') $this->view->assign("sucesso","A pagina foi removida com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='exc_no') $this->view->assign("fracasso","Ocorreu um problema ao excluir a pagina.");
		  else if ($_REQUEST['sucesso']=='rec_ok') $this->view->assign("sucesso","A pagina foi atualizada com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='rec_no') $this->view->assign("fracasso","Ocorreu um problema ao atualizar a pagina.");
	   }	
	}
	
}
?>