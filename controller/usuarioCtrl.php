<?php
require_once "controller.php";
require_once "model/Tutor.php";
require_once "model/Aluno.php";

class usuarioController extends controller{
	   
	private $view;
	private $aluno;
	private $tutor;
	
	//Construtor
	function __construct(){
	 $this->aluno = new Aluno();
	 $this->tutor = new Tutor();
	 //Recebe os parametros iniciais da view
	 $this->view=parent::__construct();  
	 //Desabilita o menu inferior
	 $this->view->assign("menu_inferior",false);
	}
	
	/*----------FUNÇÕES PUBLICAS---------*/
	
	//O Administrador cria um novo tutor
	public function criarTutor(){
		//Restrição do admin
		parent::restricaoAdmin();
		//Apresentação da mensagem de sucesso caso seja redirecionado do cadastro
	    if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok') $this->view->assign("sucesso","O tutor foi cadastrado com sucesso!!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao cadastrar o tutor."); 
	   }
		//Recebe os dados do formulário
		if (!empty($_POST)) $this->cadastrarUsuario();
		$this->view->assign("link","criarTutor");
		//Exibe a view
		$this->view->display("cadastro.html");	
	}
	
	//Cadastra novo usuario
	public function cadastrar(){
		//Apresentação da mensagem de sucesso caso seja redirecionado do cadastro
	    if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok') $this->view->assign("sucesso","O usuário foi cadastrado com sucesso!!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao cadastrar o usuário."); 
	   }
		//Recebe os dados do formulário
		if (!empty($_POST)) $this->cadastrarUsuario();
		//Exibe a view
		$this->view->display("cadastro.html");	
	}
	
	//Atualiza perfil
	public function perfil(){
		//Restrição de login
		parent::restricao();
		//Recebe os dados do formulário
		if (!empty($_POST)) $this->atualizarPerfil();
		//Recupera os dados do usuário logado
		$this->recuperarPerfil();
		//Exibe a view
		$this->view->assign("link","perfil");
		$this->view->display("dashboard-perfil.html");	
	}
	
	//Realiza login
	public function login(){
		//Recebe os dados do formulário
		if (!empty($_POST)) $this->realizarLogin();
		//Exibe a view
		$this->view->display("login.html");	
	}
	
	//Realiza logof
	public function logof(){
		unset($_SESSION['usuario']);	
		unset($_SESSION['tipo_usuario']);
		header("Location: index.php");		 
	}
	
	/*----------FUNÇÕES PRIVADAS---------*/
	
	//Cadastra novo usuário
	private function cadastrarUsuario(){
		if(empty($_POST['tutor']))
			$criacao=$this->aluno->criarPerfil($_POST['email'],$_POST['senha'],$_POST['nome']);	
		else
			$criacao=$this->tutor->criarPerfil($_POST['email'],$_POST['senha'],$_POST['nome']);		
		if($criacao) 
			header("Location: ?ctrl=usuario&ac=criarTutor&sucesso=ok");
		else 
			header("Location: ?ctrl=usuario&ac=criarTutor&sucesso=no");
	}
	
	//Cadastra novo usuário
	private function recuperarPerfil(){
		if($_SESSION['tipo_usuario']=='tutor' or $_SESSION['tipo_usuario']=='admin') 
			$perfil=$this->tutor->recuperarPerfil($_SESSION['usuario']);
		else if ($_SESSION['tipo_usuario']=='aluno') 
			$perfil=$this->aluno->recuperarPerfil($_SESSION['usuario']);
		$this->view->assign("perfil",$perfil);
	}
	
	//Cadastra novo usuário
	private function atualizarPerfil(){
		
		$imagem=$this->tratarImagem();
		
		if($_SESSION['tipo_usuario']=='tutor' or $_SESSION['tipo_usuario']=='admin') 
			$atualizacao=$this->tutor->atualizarPerfil($_SESSION['usuario'],$_POST['senha'],$_POST['nome'],$_POST['local'],$imagem,$_POST['sobre']);
		else if ($_SESSION['tipo_usuario']=='aluno') 
			$atualizacao=$this->aluno->atualizarPerfil($_SESSION['usuario'],$_POST['senha'],$_POST['nome'],$_POST['local'],$_POST['sexo'],$imagem,$_POST['sobre']);
		if($atualizacao)
			header("Location: ?ctrl=usuario&ac=perfil&sucesso=ok");
		else 
			header("Location: ?ctrl=usuario&ac=perfil&sucesso=no");	
	}
	
	//Realiza login
	private function realizarLogin(){
		//Verifica se o email é de aluno
		$login=$this->aluno->recuperarPerfil($_POST['email']);
	
		if($login){
			 //Se o email for de aluno, tenta fazer o login como aluno
			 if($this->aluno->login($login[0]['email'],$login[0]['senha'])){
				$_SESSION['usuario']=$login[0]['email'];
				$_SESSION['tipo_usuario']='aluno';
				header("Location: index.php");		 
			 }
		}else{
			//Verifica se o email é do tutor
			$login=$this->tutor->recuperarPerfil($_POST['email']);
			//Tenta fazer o login como tutor
			if($login){
			   if($this->tutor->login($login[0]['email'],$login[0]['senha'])){
			   	  $_SESSION['usuario']=$login[0]['email'];
				  $_SESSION['tipo_usuario']='tutor';
				  if($login[0]['email']=='admin') 
				  	$_SESSION['tipo_usuario']='admin';
				  header("Location: index.php");		 
			   }
	    }
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
	
}
?>