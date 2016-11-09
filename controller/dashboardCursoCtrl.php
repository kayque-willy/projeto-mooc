<?php
require_once "controller.php";
require_once "model/Curso.php";
require_once "model/Tutor.php";
require_once "model/Aluno.php";
require_once "model/Desempenho.php";

class dashboardCursoController extends controller{
	
	private $view;
	private $diretorio_temporario;
	
	//Construtor
	function __construct(){
	 //Recebe os parametros iniciais da view
	  $this->view=parent::__construct();
	}
	
	/*-------FUNÇÕES PUBLICAS-------*/
	
	//Lista todos os cursos do usuário no dashboard
	public function cursos(){
	 //Restrição de login
     parent::restricao();
	 //Apresentação da mensagem de sucesso caso seja redirecionado do cadastro ou exclusão
	 $this->mensagemRetorno();
	 //Verica o tipo de usuário para recuperar os cursos
	 $this->listarCursos();
	 //O link serve para ativar o menu da sidebar
	 $this->view->assign("link","cursos");
	 //Exibe a view
	 $this->view->display("dashboard.html");
	}
	
	//Cadastra novo curso
	public function cadastrar(){
		//Restrição para o tutor
		parent::restricaoTutor();
		//Aciona opções da sidebar
		parent::novoCurso($this->view);
		//Recebe os dados do formulário
		if (!empty($_POST)) $this->cadastrarCurso();
		//O link serve para ativar o menu da sidebar
		$this->view->assign("link","curso");
		//Exibe a view
		$this->view->display("dashboard-curso-cadastro.html");	
	}
	
	//Remove curso
	public function excluir(){
	 //Restrição para o tutor
	 parent::restricaoTutor();
	 if(!empty($_REQUEST['curso'])) 
	 	$this->excluirCurso($_REQUEST['curso']);
	 else 
	 	header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=exc_no");	
	}
	
	//Recupera o curso
	public function recuperar(){
      //Restrição para o tutor
	  parent::restricaoTutor();
	  //Habilita as opções de edição do curso
      parent::editarCurso($this->view);
	  //Recebe os dados do formulário
      if (!empty($_POST)) $this->atualizarCurso();
	  //Verifica o número do curso para recuperar os dados
	  if(!empty($_REQUEST['curso']))
		 $this->recuperarCurso($_REQUEST['curso']);
	   else 
	  	 header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=rec_no");	
	}
	
	/*-------FUNÇÕES PRIVADAS-------*/
	
	//Lista os cursos de acordo com o usuário logado
	private function listarCursos(){
		if(!empty($_SESSION['tipo_usuario'])){
		  if(($_SESSION['tipo_usuario'] == 'tutor') or ($_SESSION['tipo_usuario'] == 'admin')) {
			  //Recupera os cursos do tutor
			  $tutor = new Tutor();
			  $this->view->assign("cursos",$tutor->recuperarCursos($_SESSION['usuario']));
		  }else if($_SESSION['tipo_usuario'] == 'aluno'){
			  //Recupera os cursos do aluno
			  $aluno = new Aluno();
			  $cursos = array();
			  $consulta=$aluno->recuperarCursos($_SESSION['usuario']);
			  if($consulta){
			  	foreach ($consulta as $curso){
					$desempenho = new Desempenho();
					$temp[0]=$curso[0];
					$temp[0]['desempenho']=$desempenho->recuperarDesempenhoCurso($_SESSION['usuario'],$curso[0]['numero']);
					$cursos[]=$temp;
				  }
			  }
			  $this->view->assign("cursos",$cursos);  
		  }
	  	}
	}
	
	//Função de cadastro
	private function cadastrarCurso(){
		//TRATAMENTO DA IMAGEM
		$imagem=$this->tratarImagem();
		
		//TRATAMENTO DO FAQ
		$faq=$this->tratarFaq();
		
		//TRATAMENTO DO VIDEO
		$video=$this->tratarVideo();
		
		
				
		//TRATAMENTO DA LICENÇA
		$licenca=$this->tratarLicenca();
		
		//Armazena os dados
		$curso = new Curso();
		$resultado=$curso->criarCurso($_POST['nivel'],
						  $faq,
						  $_POST['compromisso'],
						  $video,
						  $imagem,
						  $_POST['categoria'],
						  $_POST['cp'],
						  (int)$_POST['ch'],
						  $_POST['descricao'],
						  $_POST['pre-requisitos'],
						  $_POST['nome'],
						  $licenca,
						  $_POST['instituicao'],
						  $_SESSION['usuario'],
						  $_POST['descricao_curta']);
		 //Elimina imagem do diretório temporario
		 if($imagem!="NULL") unlink($this->diretorio_temporario);
		 //Resultado da operação
		 if($resultado) 
		 	header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=ok");
		 else  
		 	header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=no");		 
	}
	
	//Função de atualização
	private function atualizarCurso(){
	  //Verificia o autor do curso
	  parent::verificarAutor($_POST['numero']);
	  $curso = new Curso();
  
	  //TRATAMENTO DA IMAGEM
	  $imagem=$this->tratarImagem();
	  
	  //TRATAMENTO DO FAQ
	  $faq=$this->tratarFaq();
	  
	  //TRATAMENTO DO VIDEO
	  $video=$this->tratarVideo();
	
	  //TRATAMENTO DA LICENÇA
	  $licenca=$this->tratarLicenca();
	  
	  //Atualiza os dados
	  $resultado=$curso->atualizarCurso($_POST['numero'],
						$_POST['nivel'],
						$faq,
						$_POST['compromisso'],
						$video,
						$imagem,
						$_POST['categoria'],
						$_POST['cp'],
						(int)$_POST['ch'],
						$_POST['descricao'],
						$_POST['pre-requisitos'],
						$_POST['nome'],
						$licenca,
						$_POST['instituicao'],
						$_POST['descricao_curta']);
	   //Elimina imagem do diretório temporario
	   if($imagem!="NULL") unlink($this->diretorio_temporario);
	   
	   //Resultado da operação
	   if($resultado) 
	   	  header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=ok");
	   else  
	      header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=no");	
	}
	
	//Função de recuperação
	private function recuperarCurso($numero){
	    parent::verificarAutor($numero);
		$curso = new Curso();
		$resultado=$curso->recuperarCurso($numero);
		if($resultado){
			//Recupera as perguntas e respostas da string
			$perguntas=explode('~', $resultado[0]['faq'], -1);
			$perguntas=explode('|', $resultado[0]['faq'], -1);
			$respostas=explode('#', $resultado[0]['faq'], -1);
			//O vetor começa a contagem a partir do 1 e não do 0
			$FAQ = array();
			for ($i=1;$i<sizeof($perguntas);$i++){
				$temp['pergunta']=$perguntas[$i];
				$temp['resposta']=$respostas[$i];
				if($i===sizeof($perguntas)-1)$FAQ_last=$temp;
				else $FAQ[]=$temp;
			}
			
			//Adiciona os dados na view
			$this->view->assign("link","curso");
			$this->view->assign("curso",$resultado);
			$this->view->assign("FAQ",$FAQ);
			$this->view->assign("FAQ_last",$FAQ_last);
			//Exibe a view
			$this->view->display("dashboard-curso-cadastro.html");	
		} else 
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=rec_no");	
	}
	
	//Função de exclusão
	private function excluirCurso($numero){
		//Verifica o número do curso para realizar a exclusão
	    parent::verificarAutor($numero);
		$curso = new Curso();
		$resultado=$curso->removerCurso($numero);
		if($resultado) 
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=exc_ok");
		else  
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=exc_no");		 
	}
	
	/*-------FUNÇÕES DE ROTINA-------*/
	
	//Exibe mensagem de retorno em caso de redirecionamento do cadastro ou atualização
	private function mensagemRetorno(){
	  if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok')$this->view->assign("sucesso","Curso cadastrado com sucesso! Selecione-o para começar a adicionar os módulos!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao criar o curso."); 
		  else if ($_REQUEST['sucesso']=='exc_ok')$this->view->assign("sucesso","O curso foi removido com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='exc_no') $this->view->assign("fracasso","Ocorreu um problema ao excluir o curso.");
		  else if ($_REQUEST['sucesso']=='rec_ok')$this->view->assign("sucesso","O curso foi atualizado com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='rec_no') $this->view->assign("fracasso","Ocorreu um problema ao atualizar o curso.");
		  else if ($_REQUEST['sucesso']=='error') $this->view->assign("fracasso","Ocorreu um problema ao realizar esta operação.");
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
	
	//Tratamento do FAQ
	private function tratarFaq(){
		$faq="";
		if(!empty($_POST['faq'])){
			$faq.="|";
			foreach ($_POST['faq'] as $pergunta){
				$faq.=$pergunta."|";
			}
			$faq.="~";
			$faq.="#";
			foreach ($_POST['resp'] as $resposta){
				$faq.=$resposta."#";
			}
		}
		return $faq;
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
	
	//Tratamento da licenca
	private function tratarLicenca(){
		$licenca="";
		if(!empty($_POST['licenca']))$licenca=$_POST['licenca'];
		return $licenca;
	}
	
}
?>