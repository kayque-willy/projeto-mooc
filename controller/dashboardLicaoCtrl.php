<?php
require_once "controller.php";
require_once "model/Modulo.php";
require_once "model/Licao.php";
require_once "model/Conteudo.php";

class dashboardLicaoController extends Controller{
	   
	private $view,$modulo,$licao,$conteudo;
	
	//Construtor
	function __construct(){
	  //Restrição de tutor
      parent::restricaoTutor();
	  //Redireciona se faltar argumento de parametro
	  parent::verificaArgCurso();
	  //Redireciona se faltar argumento de parametro
	  parent::verificaArgModulo();
	  //Verifica o autor do curso
	  parent::verificarAutor();
	  //Recebe os parametros iniciais da view
	  $this->view=parent::__construct();  
	  //Aciona opções da sidebar
      parent::editarCurso($this->view);
      $this->view->assign("modulo",$_REQUEST['modulo']);
	  $this->modulo=new Modulo();
	  $this->licao=new Licao();
	  $this->conteudo=new Conteudo();
	}
	
	/*-------FUNÇÕES PUBLICAS DA LIÇÃO-------*/
	
	//Lista as lições do modulo
	public function licoes(){
	 //Apresentação da mensagem de sucesso caso seja redirecionado do cadastro ou exclusão
	 $this->mensagemRetornoLicao();
	 //Lista todas as paginas do curso
	 $this->listarLicoes();
	 //Exibe a view
	 $this->view->assign("link","licao");
	 $this->view->display("dashboard-licao.html");
	}
	
	//Exclui uma lição
	public function excluir(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgLicao();
		//Exclui a pagina
		$this->view->assign("link","licao");
		$this->excluirLicao();	
	}
	
	//Cadastra uma nova lição
	public function cadastrar(){
		if(!empty($_POST)) $this->cadastrarLicao();
		$this->view->assign("link","licao");
		$this->view->display("dashboard-licao-cadastro.html");	
	}
	
	//Recupera a licao
	public function recuperar(){
		//Redireciona se faltar argumento de parametro
		parent::verificaArgLicao();
		//Atualiza a licao
		if(!empty($_POST))$this->atualizarLicao();
		//Recupera o conteúdo da licao
		$this->recuperarLicao();
		//Exibe a view
		$this->view->assign("link","licao");
		$this->view->display("dashboard-licao-cadastro.html");		
	}
	
	/*-------FUNÇÕES PUBLICAS DO CONTEÚDO-------*/
	
	//Lista o conteúdo da lição
	public function conteudo(){
		header("Content-type: text/html; charset=utf-8");
		//Redireciona se faltar argumento de parametro
		parent::verificaArgLicao();
		//Adiciona o nome da lição
		$this->view->assign("nome_licao",$_REQUEST['licao']);
		//Apresentação da mensagem de sucesso caso seja redirecionado do cadastro ou exclusão
		$this->mensagemRetornoConteudo();
		//Lista todas as paginas do curso
		$this->listarConteudo();
		//Exibe a view
		$this->view->assign("link","conteudo");
		$this->view->display("dashboard-conteudo.html");
	}
	
	//Exclui o conteúdo  da lição
	public function excluirConteudo(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgLicao();
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgConteudo();
		//Exclui a pagina
		$this->view->assign("link","conteudo");
		$this->excluirConteudoLicao();	
	}
	
	//Cadastra um novo conteúdo
	public function cadastrarConteudo(){
		if(!empty($_POST)) $this->cadastrarConteudoLicao();
		$this->view->assign("link","conteudo");
		//Adiciona o nome da lição
		$this->view->assign("nome_licao",$_REQUEST['licao']);
		$this->view->display("dashboard-conteudo-cadastro.html");	
	}
	
	//Recupera o conteudo de licao
	public function recuperarConteudo(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgLicao();
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgConteudo();
		//Adiciona o nome da lição
		$this->view->assign("nome_licao",$_REQUEST['licao']);
		//Atualiza a licao
		if(!empty($_POST))$this->atualizarConteudoLicao();
		//Recupera o conteúdo da licao
		$this->recuperarConteudoLicao();
		//Exibe a view
		$this->view->assign("link","conteudo");
		$this->view->display("dashboard-conteudo-cadastro.html");		
	}
	
	/*-------FUNÇÕES PRIVADAS-------*/
	
	//Operação de listagem de licao
	private function listarLicoes(){
		//Recupera as paginas do curso
		$this->view->assign("licoes",$this->modulo->recuperarLicoes($_REQUEST['curso'],$_REQUEST['modulo']));
	}
	
	//Operação de listagem de conteudo
	private function listarConteudo(){
		//Recupera as paginas do curso
		$this->view->assign("conteudo",$this->licao->recuperarConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao']));
	}
	
	//Operação de exclusão de licao
	private function excluirLicao(){
		if($this->licao->removerLicao($_REQUEST['licao'],$_REQUEST['curso'],$_REQUEST['modulo'])){
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=exc_ok");
			break;
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=exc_no");
			break;
		}
	 		
	}
	
	//Operação de exclusão de conteudo
	private function excluirConteudoLicao(){
		if($this->conteudo->removerConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao'],$_REQUEST['conteudo'])){
			header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=exc_ok");
			break;
		}else{
			 header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=exc_no");
			break;
		}
	 		
	}
	
	//Operação de cadastro de licao
	private function cadastrarlicao(){
		//Resultado da operação
		if($this->licao->criarLicao($_POST['nome'],$_REQUEST['curso'],$_REQUEST['modulo'],$_POST['resumo'])){
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=ok");
			break;
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=no");
			break;
		}
	}
	
	//Operação de cadastro de conteudo
	private function cadastrarConteudoLicao(){
		
		//Tratamento do indice das sessões |=separação $=fim do indice
		$indice=$this->tratarTituloSessao();
		
		//Tratamento do conteúdo das sessões |=separação #=fim do conteúdo
		$conteudo=$this->tratarConteudoSessao();
		
		//Tratamento da ordem das sessões e dos indices |=separação &=fim da ordem
		$ordem=$this->tratarOrdem();
		
		//Concatena todo o conteúdo
		$texto=$indice.$conteudo.$ordem;
		
		//Tratamento dos itens
		$links=$this->tratarItens();
		
		//Cria o conteudo
		$resultado=$this->conteudo->adicionarConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao'],$texto,$_POST['conteudo'],$_POST['tipo'],$links);
		
		if($resultado){
		  header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=ok");
		  break;
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=no");
			break;
		}	
	}
	
	//Operação de consulta de lição
	private function recuperarLicao(){
		//Recupera a licao
		$licao=$this->licao->recuperarLicao($_REQUEST['licao'],$_REQUEST['curso'],$_REQUEST['modulo']);
		
		if($licao){
			//Adiciona o array na view
			$this->view->assign("licao",$licao);
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=rec_no");
			break;
		}	
	}
	
	//Operação de consulta de conteúdo
	private function recuperarConteudoLicao(){
		//Recupera o conteudo
		$pagina=$this->conteudo->recuperarConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao'],$_REQUEST['conteudo']);
		
		//Recupera os links do conteudo
		$itens=$this->conteudo->recuperarLinks($_REQUEST['conteudo'],$_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao']);
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
			$this->view->assign("conteudo",$pagina[0]['conteudo']);
			$this->view->assign("tipo",$pagina[0]['tipo']);
	        $this->view->assign("cont",sizeof($pagina_rec));
			$this->view->assign("pagina_rec",$pagina_rec);
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=no");
			break;
		}
	}
	
	//Operação de atualização de licao
	private function atualizarLicao(){
		//Resultado da operação
		if($this->licao->atualizarLicao($_POST['licao'],$_REQUEST['curso'],$_REQUEST['modulo'],$_POST['resumo'],$_POST['nome'])){
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=rec_ok");
			break;
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=rec_no");
			break;
		}
		 	
	}
	
	//Operação de atualização de conteudo
	private function atualizarConteudoLicao(){
		
		//Tratamento do indice das sessões |=separação $=fim do indice
		$indice=$this->tratarTituloSessao();
		
		//Tratamento do conteúdo das sessões |=separação #=fim do conteúdo
		$conteudo=$this->tratarConteudoSessao();
		
		//Tratamento da ordem das sessões e dos indices |=separação &=fim da ordem
		$ordem=$this->tratarOrdem();
		
		//Concatena todo o conteúdo
		$texto=$indice.$conteudo.$ordem;
		
		//Tratamento dos itens
		$links=$this->tratarItens();
		
		//Atualiza o conteudo
		$resultado=$this->conteudo->atualizarConteudo($_REQUEST['modulo'],$_REQUEST['curso'],$_REQUEST['licao'],$_REQUEST['conteudo'],$texto,$_POST['tipo'],$_POST['conteudo'],$links);
		if($resultado){
		  	header("Location: ?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=rec_ok;charset=UTF-8");
		  	break;
		}else{
			header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=rec_no");
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
		}else{
			$indice.="|";
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
		}else{
			 $conteudo.="|";
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
		if(!empty($_POST['link'])){
		  for($i=0;$i<sizeof($_POST['link']);$i++){
			  $item=$i."#".$_POST['link'][$i];
			  $itens[]=$item;
		  }		
		}
		return $itens;
	}
	
	//Exibe mensagem de retorno em caso de redirecionamento do cadastro ou atualização
	private function mensagemRetornoLicao(){
	  if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok')$this->view->assign("sucesso","A lição foi cadastrada com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao criar a lição."); 
		  else if ($_REQUEST['sucesso']=='exc_ok') $this->view->assign("sucesso","A lição foi removida com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='exc_no') $this->view->assign("fracasso","Ocorreu um problema ao excluir a lição.");
		  else if ($_REQUEST['sucesso']=='rec_ok') $this->view->assign("sucesso","A lição foi atualizada com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='rec_no') $this->view->assign("fracasso","Ocorreu um problema ao atualizar a lição.");
	   }	
	}
	
	//Exibe mensagem de retorno em caso de redirecionamento do cadastro ou atualização
	private function mensagemRetornoConteudo(){
	  if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok')$this->view->assign("sucesso","O conteudo foi cadastrado com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao criar o conteudo da lição."); 
		  else if ($_REQUEST['sucesso']=='exc_ok') $this->view->assign("sucesso","O conteudo foi removido com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='exc_no') $this->view->assign("fracasso","Ocorreu um problema ao excluir o conteudo.");
		  else if ($_REQUEST['sucesso']=='rec_ok') $this->view->assign("sucesso","O conteudo foi atualizado com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='rec_no') $this->view->assign("fracasso","Ocorreu um problema ao atualizar o conteudo.");
	   }	
	}
	
}
?>