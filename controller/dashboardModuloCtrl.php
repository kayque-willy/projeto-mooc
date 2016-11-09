<?php
require_once "controller.php";
require_once "model/Curso.php";
require_once "model/Modulo.php";

class dashboardModuloController extends Controller{
	   
	private $view,$curso,$modulo;
	private $diretorio_temporario;
	
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
      $this->view->assign("link","modulo");
	  $this->curso=new Curso();
	  $this->modulo=new Modulo();
	}
	
	/*-------FUNÇÕES PUBLICAS-------*/
	
	//Lista todos os cursos do usuário no dashboard
	public function modulos(){
	 //Apresentação da mensagem de sucesso caso seja redirecionado do cadastro ou exclusão
	 $this->mensagemRetorno();
	 //Lista todas os modulo do curso
	 $this->listarModulos();
	 //Exibe a view
	 $this->view->display("dashboard-modulo.html");
	}
	
	//Cadastra um novo modulo
	public function cadastrar(){
		if(!empty($_POST)) $this->cadastrarModulo();
		$this->view->assign("modulo",$_REQUEST['modulo']);
		$this->view->display("dashboard-modulo-cadastro.html");	
	}
	
	//Recupera o conteudo do módulo
	public function recuperar(){
		//Redireciona se faltar argumento de parametro
		parent::verificaArgModulo();
		
		//Atualiza a pagina
		if(!empty($_POST))$this->atualizarModulo();
		
		//Recupera o conteúdo do modulo
		$this->recuperarModulo();
		
		//Exibe a view
		$this->view->display("dashboard-modulo-cadastro.html");		
	}
	
	//Exclui um módulo
	public function excluir(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgModulo();
		//Exclui a pagina
		$this->excluirModulo();	
	}
	
	/*-------FUNÇÕES PRIVADAS-------*/
	
	//Operação de listagem de modulos
	private function listarModulos(){
		//Recupera os modulos do curso
		$consulta=$this->curso->recuperarModulos($_REQUEST['curso']);
		$modulos=array();
		if(!empty($consulta)){
			foreach($consulta as $modulo){
				$modulos[$modulo['nome']]=$modulo;
				$mod= new Modulo();
				$modulos[$modulo['nome']]['licoes']=$mod->recuperarLicoes($_REQUEST['curso'],$modulo['nome'],"nome");
			}
			$this->view->assign("modulos",$modulos);
		}
	}
	
	//Operação de cadastro de modulo
	private function cadastrarModulo(){
		//TRATAMENTO DA IMAGEM
		$imagem=$this->tratarImagem();
		
		//TRATAMENTO DO VIDEO
		$video=$this->tratarVideo();
			
		//Armazena os dados
		$resultado=$this->modulo->criarModulo($_POST['nome'],$_REQUEST['curso'],$video,$imagem,$_POST['descricao']);

		//Elimina imagem do diretório temporario
		if($imagem!="NULL") unlink($this->diretorio_temporario);
		//Resultado da operação
		if($resultado){
			//TRATAMENTO DOS RECURSOS
			$this->tratarRecurso();
			header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=ok");
		}else  
		 	header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=no");	
	}
	
	//Operação de cadastro de modulo
	private function recuperarModulo(){
		//Recupera o modulo
		$modulo=$this->modulo->recuperarModulo($_REQUEST['modulo'],$_REQUEST['curso']);
		if($modulo){
			//Recupera os recursos do modulo
		    $recursos=$this->modulo->recuperarRecursos($_REQUEST['modulo'],$_REQUEST['curso']);
			$this->view->assign("modulo",$modulo);
			$this->view->assign("cont",sizeof($recursos));
			$this->view->assign("recursos",$recursos);
		}else{
			header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=rec_no");	
			break;
		}	
	}
	
	//Operação de exclusão de modulo
	private function excluirModulo(){
		if($this->modulo->removerModulo($_REQUEST['modulo'],$_REQUEST['curso']))
			header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=exc_ok");
	 	else 
	 		header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=exc_no");	
	}
	
	//Operação de atualização de modulo
	private function atualizarModulo(){
		//TRATAMENTO DA IMAGEM
		$imagem=$this->tratarImagem();
		
		//TRATAMENTO DO VIDEO
		$video=$this->tratarVideo();
			
		//Armazena os dados
		$resultado=$this->modulo->atualizarModulo($_POST['nome'],$_REQUEST['modulo'],$_REQUEST['curso'],$video,$imagem,$_POST['descricao']);

		//Elimina imagem do diretório temporario
		if($imagem!="NULL") unlink($this->diretorio_temporario);
		//Resultado da operação
		if($resultado){
			//TRATAMENTO DOS RECURSOS
			$this->tratarRecurso();
			header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=rec_ok");
			break;
		}else{
			header("Location: index.php?ctrl=dashboardModulo&ac=modulos&curso=".$_REQUEST['curso']."&sucesso=rec_no");
			break;	
		}  
		 	
	}
	
	/*-------FUNÇÕES DE ROTINA-------*/
	
	//Exibe mensagem de retorno em caso de redirecionamento do cadastro ou atualização
	private function mensagemRetorno(){
	  if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok')$this->view->assign("sucesso","Módulo cadastrado com sucesso! Selecione-o para começar a adicionar as lições!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao criar o módulo."); 
		  else if ($_REQUEST['sucesso']=='exc_ok') $this->view->assign("sucesso","O módulo foi removido com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='exc_no') $this->view->assign("fracasso","Ocorreu um problema ao excluir o módulo.");
		  else if ($_REQUEST['sucesso']=='rec_ok') $this->view->assign("sucesso","O módulo foi atualizado com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='rec_no') $this->view->assign("fracasso","Ocorreu um problema ao atualizar o módulo.");
	   }	
	}
	
	//Tratamento para armazenar imagem
	private function tratarImagem(){
	  if(!empty($_FILES['foto']['name'])){
		//Define o caminho do diretorio temporario para a imagem
		$this->diretorio_temporario = raiz.'/temp/'.basename($_FILES['foto']['name']);
		//Move a imagem para o dietório temporário
		move_uploaded_file($_FILES['foto']['tmp_name'], $this->diretorio_temporario);	
		$imagem="lo_import('".$this->diretorio_temporario."')";
	  } else $imagem="NULL";
	  return $imagem;
	}
	
	//Tratamento dos recursos
	private function tratarRecurso(){
		if(!empty($_POST['rec'])){
			for($i=0;$i<sizeof($_POST['rec']);$i++){
				if(($_POST['rec'][$i]!="") or ($_POST['rec_link'][$i]!=""))
					$this->modulo->adicionarRecurso($_POST['rec_link'][$i],$_POST['nome'],$_REQUEST['curso'],$_POST['rec'][$i]);
			}	
		}
	}
	
	//Tratamento do Video
	private function tratarVideo(){
		$video="";
		if(!empty($_POST['video'])) {
			$video= explode('=', strrev($_POST['video']), -1);
			$video="https://www.youtube.com/embed/".strrev($video[0])."?rel=0";
		}
		if($video=='https://www.youtube.com/embed/0?rel=0') 
			if(!empty($_POST['video']))
				return $_POST['video'];
			else
				return "NULL";
		else{
			if ($video=='') $video="NULL";
			return $video;
		} 
		
	}
}
?>