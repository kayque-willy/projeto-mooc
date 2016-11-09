<?php
require_once "lib/smarty/smarty.php";
require_once "model/Curso.php";

class controller{
	   
	//Construtor
	function __construct(){
	  //Define a rais para exportação da imagem
	  define ('raiz', realpath(dirname(__FILE__)));
	  //Recebe o parametro do smaty
	  $view=$GLOBALS['view'];
	  //Se o usuario estiver logado envia o parametro para a view
	  if(!empty($_SESSION))$view->assign("sessao",$_SESSION);
	  //Adiciona o identificador do curso
      if(!empty($_REQUEST['curso'])) $view->assign("numero_curso",$_REQUEST['curso']);
	  //Oculta todas as opções de tutor e administrador da sidebar
	  $this->ocultarOpcoesAdmin($view);
	  //Se o usuario for tutor envia o parametro para a view para ativar a sidebar do administrador
	  $this->ativarOpcoesAdmin($view);
	  //Lista as categorias no menu superior
	  $this->listarCategorias($view);
	  //Limpa a pasta de imagens temporarias
	  $this->limparTemp();
	  return $view;
	}
	
	/*------------RESTRIÇÕES------------*/
	
	//Redireciona o usuário que esta deslogado 
	public function restricao(){
		if((empty($_SESSION['tipo_usuario'])) or (empty($_SESSION['usuario']))){
			header("Location: index.php");
			break;		 	
		}
	}
	
	//Redireciona o usuário que não é tutor ou admin
	public function restricaoTutor(){
		$this->restricao();	 	
		if ($_SESSION['tipo_usuario']!='tutor' and $_SESSION['tipo_usuario']!='admin'){
			header("Location: index.php");	
			break;
		}
	}
	
	//Redireciona o usuário que não é admin
	public function restricaoAdmin(){
		$this->restricao();	 	
		if ($_SESSION['tipo_usuario']!='admin'){
			header("Location: index.php");	
			break;
		}
	}
	
	//Redireciona se faltar argumento de parametro
	public function verificaArgCurso(){
	  //Verifica o número do curso para recuperar os dados
	  if(empty($_REQUEST['curso'])){
		   header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=error");		
	  	   break;
	  }
	}
	
	//Redireciona se faltar argumento de parametro
	public function verificaArgPagina(){
	  //Verifica o número do curso para recuperar os dados
	  if(empty($_REQUEST['pagina'])){
		   header("Location: index.php?ctrl=dashboardPagina&ac=paginas&sucesso=error");		
	  	   break;
	  }
	}
	
	//Redireciona se faltar argumento de parametro
	public function verificaArgModulo(){
	  //Verifica o número do curso para recuperar os dados
	  if(empty($_REQUEST['modulo'])){
		   header("Location: index.php?ctrl=dashboardModulo&ac=paginas&sucesso=error");		
	  	   break;
	  }
	}
	
	//Redireciona se faltar argumento de parametro
	public function verificaArgLicao(){
	  //Verifica o número do curso para recuperar os dados
	  if(empty($_REQUEST['licao'])){
		   header("Location: index.php?ctrl=dashboardLicao&ac=licoes&modulo=".$_REQUEST['modulo']."&curso=".$_REQUEST['curso']."&sucesso=error");		
	  	   break;
	  }
	}
	
	//Redireciona se faltar argumento de parametro
	public function verificaArgConteudo(){
	  //Verifica o número do curso para recuperar os dados
	  if(empty($_REQUEST['conteudo'])){
		   header("Location: index.php?ctrl=dashboardLicao&ac=conteudo&modulo=".$_REQUEST['modulo']."&licao=".$_REQUEST['licao']."&curso=".$_REQUEST['curso']."&sucesso=error");		
		   break;
	  }
	}
	
	//Redireciona se o autor não estiver ministrando o curso
	public function verificarAutor($numero=''){
		$curso = new Curso();
		if($numero=='') $numero=$_REQUEST['curso'];
		if(!$curso->verificarTutor($numero,$_SESSION['usuario'])){
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos&sucesso=error");
			break;
		}	
	}
	
	//Redireciona se o curso não existir
	public function verificarCurso(){
		$curso = new Curso();
		if(!$curso->verificarCurso($_REQUEST['curso'])){
		   header("Location: index.php?ctrl=curso&ac=catalogo");
		   break;
		}	
	}
	
	/*-------FUNÇÕES DE EXIBIÇÃO-------*/
	
	//Aciona a sidebar de Create do curso
	public function novoCurso($view){
		$view->assign("novo_curso",true);	
		$view->assign("editar_curso",false);
	}
	
	//Aciona a sidebar de Recover Update Delete do curso
	public function editarCurso($view){
		$view->assign("novo_curso",false);	
		$view->assign("editar_curso",true);
	}
	
	/*----------FUNÇÕES DE ROTINA----------*/
	
	//Limpa a pasta de imagens temporarias
	private function limparTemp(){
		$dir = raiz."/temp/";
		if(is_dir($dir)){
			if($handle = opendir($dir)){
				while(($file = readdir($handle)) !== false){
					if($file != '.' && $file != '..'){
						unlink($dir.$file);
					}
				}	
		  	}
		}
	}
	
	//Se o usuario estiver logado, ativa as opções administrativas da sidebar
	private function ativarOpcoesAdmin($view){
	   if(!empty($_SESSION['tipo_usuario'])){
		if($_SESSION['tipo_usuario'] == 'tutor'){
			$view->assign("admin",true);
		}else if ($_SESSION['tipo_usuario'] == 'admin'){
			$view->assign("admin",true);
			$view->assign("super",true);
		}  
	  }
	}
	
	//Oculta todas as opções de tutor e administrador da sidebar
	private function ocultarOpcoesAdmin($view){
		 $view->assign("super",false);
	  	 $view->assign("admin",false);
	  	 $view->assign("novo_curso",false);
	  	 $view->assign("editar_curso",false);
	}
	
	//Seleciona todas as categorias cadastradas
	private function listarCategorias($view){
		$curso = new Curso();
		$view->assign("categorias",$curso->recuperarCategorias());
	}
	
	
}	
?>