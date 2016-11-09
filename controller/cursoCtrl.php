<?php
require_once "controller.php";
require_once "model/Aluno.php";

class cursoController extends controller{
	
	private $view,$curso,$aluno;
	
	//Construtor
	function __construct(){
	  //Recebe os parametros iniciais da view
	  $this->view=parent::__construct(); 
	  $this->curso = new Curso();
	  $this->aluno = new Aluno();
	  $this->view->assign("menu_inferior",true);
	}
	
	/*------FUNÇÕES PUBLICAS---------*/
	
	//Lista todos os cursos do banco de dados
	public function catalogo(){  
		//Exibe a view
		$this->listarCursos();
	} 
	
	//Lista todas as categorias de curso do banco de dados
	public function categoria(){  
		//Recupera as categorias de curso
		if(empty($_REQUEST['categoria']))$this->listarCategorias();
		else $this->listarCursos();	
	} 
	
	//Busca qualquer termo nos cursos
	public function busca(){  
		if(!empty($_POST['busca']))$this->buscarCurso();
		$this->view->display("catalogo.html");	  
	} 
	
	//Recupera o curso de acordo com o numero
	public function recuperarCurso(){
	  //Verifica o número do curso para recuperar os dados
	  if(!empty($_REQUEST['curso'])){
		 $this->mensagemRetorno();
		 $this->recuperar();
	  }else {
		   header("Location: index.php?ctrl=curso&ac=catalogo");	
		   break;	
	   }
	  	 
	}
	
	//Faz avaliação do curso por aluno
	public function avaliarCurso(){
	    //Redireciona se faltar argumento de parametro
	    parent::verificaArgCurso();
		if($this->curso->avaliarCurso($_REQUEST['curso'],$_SESSION['usuario'],$_POST['nota'],$_POST['avaliacao'],date('Y-m-d H:i:s'))){
			header("Location: index.php?ctrl=curso&ac=recuperarCurso&curso=".$_REQUEST['curso']."&sucesso=ok");
			break;
		}else{
			header("Location: index.php?ctrl=curso&ac=recuperarCurso&curso=".$_REQUEST['curso']."&sucesso=no");
			break;
		}
	}
	
	//Faz inscrição do aluno no curso
	public function inscrever(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgCurso();
		if(!empty($_SESSION['usuario']) and ($_SESSION['tipo_usuario']=='aluno')){
			$this->inscreverCurso();	
		}else{
			header("Location: index.php?ctrl=curso&ac=recuperarCurso&curso=".$_REQUEST['curso']."&sucesso=insc_no");
			break;
		}
	}
	
	//Cancela inscrição do aluno no curso
	public function cancelar(){
		//Redireciona se faltar argumento de parametro
	    parent::verificaArgCurso();
		if(!empty($_SESSION['usuario']) and ($_SESSION['tipo_usuario']=='aluno')){
			$this->cancelarInscricao();	
		}else{
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos");
			break;
		}
	}
	
	/*------FUNÇÕES PRIVADAS---------*/
	
	//Recupera o curso de acordo com o numero
	private function recuperar(){
		$curso = new Curso();
		$resultado=$curso->recuperarCurso($_REQUEST['curso']);
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
				$FAQ[]=$temp;
			}
			//Recupera os módulos
			$modulos=$curso->recuperarModulos($_REQUEST['curso']);
			//Recupera avaliação
			$avaliacao=$curso->recuperarAvaliacaoCurso($_REQUEST['curso']);
			//Recupera a média de avaliação
			$media=$curso->recuperarMediaAvaliacao($_REQUEST['curso']);
			//Verifica se o aluno ja avaliou o curso
			$this->verificarAvaliacao();
			//Verifica se o aluno ja se inscreveu no curso
			$this->verificarInscricao();
			//Adiciona os dados na view
			$this->view->assign("curso",$resultado);
			$this->view->assign("modulos",$modulos);
			$this->view->assign("FAQ",$FAQ);
			$this->view->assign("avaliacoes",$avaliacao);
			$this->view->assign("media",$media);
			
			//Exibe a view
			$this->view->display("curso.html");	  
		} else {
			header("Location: index.php?ctrl=curso&ac=catalogo");	
			break;
		}
	}
	
	//Lista todos os cursos
	private function listarCursos(){
		$escolaridade='';
		if(!empty($_REQUEST['escolaridade'])) $escolaridade=$_REQUEST['escolaridade'];
		$categoria='';
		if(!empty($_REQUEST['categoria'])) $categoria=$_REQUEST['categoria'];
		$this->view->assign("cursos",$this->curso->listarCursos("numero,nome,descricao_curta","numero desc","","",$escolaridade,$categoria)); 
		$this->view->assign("cat",$categoria); 
		$this->view->assign("esc",$escolaridade); 
		$this->view->display("catalogo.html");	  
	}
	
	//Busca o curso por query ou escolaridade
	private function buscarCurso(){
		$this->view->assign("cursos",$this->curso->buscarCurso($_POST['busca'],"numero,nome,descricao,categoria"));
	}
	
	//Lista todas as categorias de curso
	private function listarCategorias(){
		$categorias=$this->curso->recuperarCategorias();
		$categoria=array();
		foreach($categorias as $cat){
			$curso=new Curso();
			$curso->setCategoria($cat['categoria']);
			$numero=$curso->select("numero","","","1");
			$result['numero']=$numero[0]['numero'];
			$result['categoria']=$cat['categoria'];
			$categoria[]=$result;
			$curso->recuperarCurso($numero[0]['numero'],"numero");
		}
		$this->view->assign("categorias",$categoria);
		//Exibe a view
		$this->view->display("categoria.html");	  
	}
	
	//Inscreve o aluno no curso
	private function inscreverCurso(){
		if($this->aluno->inscreverCurso($_REQUEST['curso'],$_SESSION['usuario'])){
			header("Location: index.php?ctrl=classroom&ac=pagina&curso=".$_REQUEST['curso']."&pagina=Pagina Inicial");
			break;
		}else{
			header("Location: index.php?ctrl=curso&ac=recuperarCurso&curso=".$_REQUEST['curso']."&sucesso=insc_no");
			break;
		}	
	}
	
	//Inscreve o aluno no curso
	private function cancelarInscricao(){
		if($this->aluno->cancelarInscricaoCurso($_REQUEST['curso'],$_SESSION['usuario'])){
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos");
			break;
		}else{
			header("Location: index.php?ctrl=dashboardCurso&ac=cursos");
			break;
		}	
	}
	
	/*------FUNÇÕES DE ROTINA---------*/
	
	//Exibe mensagem de retorno em caso de redirecionamento
	private function mensagemRetorno(){
	  if(!empty($_REQUEST['sucesso'])){
		  if ($_REQUEST['sucesso']=='ok')$this->view->assign("sucesso","Sua avaliação foi realizada com sucesso!"); 
		  else if ($_REQUEST['sucesso']=='no') $this->view->assign("fracasso","Ocorreu um problema ao avaliar o curso"); 
		  else if ($_REQUEST['sucesso']=='insc_no') $this->view->assign("fracasso","Ocorreu um problema ao se inscrever o curso.");
	   }	
	}
	
	//Verifica se o aluno ja fez a avaliação do curso
	private function verificarAvaliacao(){
		if (!empty($_SESSION['usuario']) and ($_SESSION['tipo_usuario']=='aluno')){
			$this->view->assign("avaliado",$this->curso->verificarAvaliacao($_REQUEST['curso'],$_SESSION['usuario']));
		}else{
			$this->view->assign("avaliado",false);
		}
	}
	
	//Verifica se o aluno ja fez a inscrição no curso
	private function verificarInscricao(){
		if (!empty($_SESSION['usuario']) and ($_SESSION['tipo_usuario']=='aluno')){
			$this->view->assign("inscrito",$this->aluno->recuperarInscricao($_REQUEST['curso'],$_SESSION['usuario']));
		}else{
			$this->view->assign("inscrito",false);
		}
	}
}
?>