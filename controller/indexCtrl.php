<?php
require_once "controller.php";

class indexController extends controller{
	
	private $view,$curso;
	
	//Construtor
	function __construct(){
	  //Recebe os parametros iniciais da view
	  $this->view=parent::__construct(); 
	  $this->curso = new Curso();
	  $this->view->assign("menu_inferior",true);
	}
	
	/*------FUNÇÕES PUBLICAS---------*/
	
	//Pagina inicial do site
	public function index(){  
		//Exibe a view
		//Lista os ultimos cursos
		$this->listarCursos();
		$this->view->display("home.html");	  
	} 
	
	/*------FUNÇÕES PRIVADAS---------*/
	
	//Lista os cursos da home
	private function listarCursos(){
		$this->view->assign("cursos",$this->curso->listarCursos("numero,nome,descricao_curta","numero desc","","8"));  
	}
	
	public function faq(){
		$this->view->display("faq.html");	  
	}
	
	public function sobre(){
		$this->view->display("sobre.html");	  
	}
}
?>