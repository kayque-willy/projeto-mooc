<?php
/* Smarty version 3.1.29, created on 2016-09-25 01:41:47
  from "D:\xampp\www\mooc\view\categoria-individual.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57e70f3bd0a340_09476957',
  'file_dependency' => 
  array (
    'f106f3a4eba3d5040b7b59666c069ea7d6f0f7af' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\categoria-individual.html',
      1 => 1474760505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e70f3bd0a340_09476957 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--Titulo e descrição-->
  <title>Projeto MOOC</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Projeto MOOC - TFG Kayque"/>
  <!--Configurações do bootstrap-->  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="view/css/bootstrap/bootstrap.min.css"/>
  <!--Folhas de estilo-->
  <link rel="stylesheet" href="view/css/cabecalho-rodape.css"/>
  <link rel="stylesheet" href="view/css/categoria.css"/>
</head>
<body>
  <!--Menu superior-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid"> 
      <!--Cabeçalho do menu-->
      <div class="navbar-header">
        <!--Botão collapse da navegação móvel-->
        <!--Este botão só é exibido em dispositivos móveis-->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-principal"> 
            <span class="sr-only">Navegação móvel</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button><!--Collapse da navegação móvel-->
        <!--Brand com o título do projeto-->
        <a class="navbar-brand" href="home.html">Nome do projeto</a> 
      </div><!--Cabeçalho do menu-->
      
      <!--Menu principal-->
      <!--O menu principal é acionando nos dispostivos moveis pelo botão do collapse-->	
      <div class="collapse navbar-collapse" id="menu-principal">
        <!--Navegação a esquerda-->
        <ul class="nav navbar-nav">
          <li>
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Cursos<span class="caret"></span></a>
          	<ul class="dropdown-menu" role="menu">
            	<li class="nav-header"><strong><p class="text-center">Cursos por assunto</p></strong></li>
                <a class="btn" href="catalogo.html">Ver todos os cursos</a>
                <li class="nav-divider"></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <a class="btn" href="categoria.html">Ver todas as categorias</a>
            </ul>
          </li>
          <li><a href="#">Como funciona</a></li>
          <li><a href="#">Sobre</a></li>
        </ul><!--Navegação a esquerda-->
        
        <!--Campo de busca-->
        <form class="navbar-form navbar-header" role="search" action="catalogo.html">
            <input type="text" class="form-control" placeholder="Buscar" name="busca">
            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        </form><!--Campo de busca-->
       
        <!--Navegação a direita-->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="cadastro.html">Registrar</a></li>
          <!--Login-->
          <li class="dropdown"> 
            <a href="login.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Entrar<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
				  <!-- Formulario do login-->	              	
                  <form class="navbar-form navbar-header" role="search">
                    Email <input type="text" class="form-control" placeholder="Email">
                   	Senha <input type="password" class="form-control" placeholder="Senha">
                   	<button type="button" class="btn btn-primary center-block">Entrar</button>
                  </form>
        	  </li>
            </ul><!-- Formulario do login-->
          </li><!--Login-->
        </ul><!--Navegação a direita-->
      </div><!--navbar-collapse --> 
    </div><!--container-fluid --> 
  </nav><!--navbar-inverse-->
  <!--Menu superior-->
  <!--Cabeçalho-->
  <header>
      <img src="http://iniciantesdoviolao.com.br/wp-content/uploads/2013/12/Viol%C3%A3o-Erudito.jpg" alt="Curso" class="img-responsive center-block" width="500">
      <h2 class="text-center">Categoria do assunto escolhido</h2>
      <p class="text-center">São listadas aqui todos os cursos da categoria específica.</p>
  </header>
  <!--Cabeçalho-->
  <!--Cursos-->	
  <session class="container">
    <!--Linha-->
    <div class="row text-center">
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://assets1.exame.abril.com.br/assets/images/2015/8/544444/size_960_16_9_curso-online.png" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://diretoriodeartigos.net/wp-content/uploads/2016/02/cursos.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://startupi.com.br/wp-content/uploads/2016/04/cursos-da-endeavor-gratuito.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://www.idifusora.com.br/wp-content/uploads/2016/04/curso-online.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
    </div>
    <!--Linha-->
    <!--Linha-->
    <div class="row text-center">
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://campos24horas.com.br/portal/wp-content/uploads/2015/06/consejos_elegir_curso_a_distancia.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://www.bcmcursos.com.br/img/cursos-tecnico-em-edificacoes.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://www.jornalgrandebahia.com.br/wp-content/uploads/2015/03/Curso-de-design-de-moda.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="https://www.iped.com.br/img/cursos/41377.jpg" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Curso</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
    </div>
    <!--Linha-->
    <div class="text-center">
      <a class="btn btn-primary btn-md" href="categoria.html" role="button">Ver todos as categorias</a>
    </div>
  </session>
  <!--Cursos-->	
  <hr>
  <!--Menu do rodapé-->
   <nav>
    <ul class="nav nav-justified navbar-inverse">
      <li><a href="home.html">Home</a></li>
      <li><a href="catalogo.html">Cursos</a></li>
      <li><a href="#">Sobre</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
  </nav>
  <!--Menu do rodapé-->
  <!--Rodapé-->
  <footer class="panel-footer well">
    <h3 class="text-center">Nome do projeto</h3>
    <p class="text-center">
        <strong>
          Mooc Unifei - Trabalho Final de Graduação
        </strong><br>
        Kayque Willy Reis de Oliveira<br>
        Curso de Sistemas de Informação<br>
        Itajubá - 2016<br>
    </p>
  </footer>
  <!--Rodapé--> 
<!--Configurações do bootstrap-->
<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
