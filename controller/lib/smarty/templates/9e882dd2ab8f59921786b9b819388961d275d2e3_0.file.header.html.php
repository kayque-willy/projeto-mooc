<?php
/* Smarty version 3.1.29, created on 2016-09-30 19:19:42
  from "D:\xampp\www\mooc\view\header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ee9eae495216_79230145',
  'file_dependency' => 
  array (
    '9e882dd2ab8f59921786b9b819388961d275d2e3' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\header.html',
      1 => 1475255975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee9eae495216_79230145 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['sessao']->value)) {?> 
  <!--Menu superior-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid"> 
    <!--Cabeçalho do menu-->
    <div class="navbar-header"> 
      <!--Botão collapse da navegação móvel--> 
      <!--Este botão só é exibido em dispositivos móveis-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-principal"> <span class="sr-only">Navegação móvel</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!--Collapse da navegação móvel--> 
      <!--Brand com o título do projeto--> 
      <a class="navbar-brand" href="index.php">Nome do projeto</a> </div>
    <!--Cabeçalho do menu--> 
    <!--Menu principal--> 
    <!--O menu principal é acionando nos dispostivos moveis pelo botão do collapse-->
    <div class="collapse navbar-collapse" id="menu-principal"> 
     <!--Navegação a esquerda-->
     <ul class="nav navbar-nav">
        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Cursos<span class="caret"></span></a>
          <ul class="dropdown-menu list-group" role="menu">
            <li class="nav-header"><strong>
              <p class="text-center">Categorias de curso</p>
              </strong>
            </li>
            <li class="list-group-item"><button class="btn btn-sm btn-primary center-block" onClick='window.location.replace("?ctrl=curso&ac=catalogo");'>Ver todos os cursos</button></li>
            <?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
            	<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cont', 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categoria_0_saved_item = isset($_smarty_tpl->tpl_vars['categoria']) ? $_smarty_tpl->tpl_vars['categoria'] : false;
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$__foreach_categoria_0_saved_local_item = $_smarty_tpl->tpl_vars['categoria'];
?>
                	<?php if (!empty($_smarty_tpl->tpl_vars['categoria']->value['categoria']) && ($_smarty_tpl->tpl_vars['cont']->value++ < 15)) {?><li ><a href="?ctrl=curso&ac=categoria&categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
" class="text-center"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a></li><?php }?>
            	<?php
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_local_item;
}
if ($__foreach_categoria_0_saved_item) {
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_item;
}
?>
            	<li class="list-group-item"><button class="btn btn-sm btn-primary" href="?ctrl=curso&ac=categoria"  onClick='window.location.replace("?ctrl=curso&ac=categoria");'>Ver todas as categorias</button></li>
            <?php } else { ?>
            	<li>&nbsp;&nbsp;&nbsp;Sem categorias</li>
            <?php }?>
          </ul>
        </li>
        <li><a href="#">Como funciona</a></li>
        <li><a href="#">Sobre</a></li>
      </ul>
     <!--Navegação a esquerda-->  
      
      <!--Campo de busca-->
      <form name="form_busca" class="navbar-form navbar-header" method="POST" action="?ctrl=curso&ac=busca">
        <input type="text" class="form-control" placeholder="Buscar" name="busca">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <!--Campo de busca--> 
      
      <!--Navegação a direita-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?ctrl=usuario&ac=cadastrar">Registrar</a></li>
        <!--Login-->
        <li class="dropdown"> <a href="login.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Entrar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> 
              <!-- Formulario do login-->
              <form name="form_login" method="POST" class="navbar-form navbar-header" action="?ctrl=usuario&ac=login">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha"><hr>
                <input type="submit" class="btn btn-primary center-block" value="Entrar">
              </form>
              
            </li>
          </ul>
          <!-- Formulario do login--> 
        </li>
        <!--Login-->
      </ul>
      <!--Navegação a direita--> 
    </div>
    <!--navbar-collapse --> 
  </div>
  <!--container-fluid --> 
  </nav>
  <!--navbar-inverse--> 
<?php } else { ?>
  <div id="wrapper" class="active">
  <!-- Sidebar -->
  <aside id="sidebar-wrapper">
  <nav id="spy">
    <ul class="sidebar-nav nav">
       <li class="sidebar-brand"> <a href="?ctrl=usuario&ac=perfil"><span class="fa fa-user solo">Nome do usuário</span></a> </li>
      <?php if ($_smarty_tpl->tpl_vars['super']->value) {?>
       <li> <a href="?ctrl=usuario&ac=criarTutor"><span class="fa fa-user <?php if ($_smarty_tpl->tpl_vars['link']->value == 'criarTutor') {?>active<?php }?>">Criar tutor</span></a> </li>
      <?php }?>
      <li> <a href="?ctrl=usuario&ac=perfil"><span class="fa fa-user <?php if ($_smarty_tpl->tpl_vars['link']->value == 'perfil') {?>active<?php }?>">Perfil</span></a> </li>
      <li> <a href="?ctrl=dashboardCurso&ac=cursos"><span class="fa fa-graduation-cap solo <?php if ($_smarty_tpl->tpl_vars['link']->value == 'cursos') {?>active<?php }?>">Meus cursos</span></a> </li>
      <?php if ($_smarty_tpl->tpl_vars['novo_curso']->value) {?>
      <li class="sidebar-brand"> <a href="?ctrl=dashboardCurso&ac=cursos"><span class="fa fa-gear">Administração</span></a> </li>
      <li> <a href="?ctrl=dashboardCurso&ac=cadastrar"><span class="fa fa-graduation-cap <?php if ($_smarty_tpl->tpl_vars['link']->value == 'curso') {?>active<?php }?>">Novo curso</span></a> </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['editar_curso']->value) {?>
       <li class="sidebar-brand"> <a href="?ctrl=dashboardCurso&ac=cursos"><span class="fa fa-gear">Administração</span></a> </li>
      <li> <a href="?ctrl=dashboardCurso&ac=recuperar&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><span class="fa fa-graduation-cap <?php if ($_smarty_tpl->tpl_vars['link']->value == 'curso') {?>active<?php }?>">Editar Curso</span></a> </li>
      <li> <a href="?ctrl=dashboardPagina&ac=paginas&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><span class="fa fa-file-text-o <?php if ($_smarty_tpl->tpl_vars['link']->value == 'pagina') {?>active<?php }?>">Paginas</span></a> </li>
      <li> <a href="?ctrl=dashboardModulo&ac=modulos&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><span class="fa fa-list-ol <?php if ($_smarty_tpl->tpl_vars['link']->value == 'modulo') {?>active<?php }?>">Módulos</span></a> </li>
       
        	<?php if ($_smarty_tpl->tpl_vars['link']->value == 'licao') {?>
        	<li> <a href="?ctrl=dashboardLicao&ac=licoes&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><span class="fa fa-pencil-square-o active">Lições: <i><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</i></span></a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['link']->value == 'conteudo') {?>
            <li> <a href="?ctrl=dashboardLicao&ac=licoes&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><span class="fa fa-pencil-square-o">Lições: <i><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</i></span></a></li>
            <li> <a href="?ctrl=dashboardLicao&ac=conteudo&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><span class="fa fa-list active">Conteúdo: <?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
</i></span></a></li>
            <?php }?>
        
      	
      <?php }?>
    </ul>
  </nav>
  </aside>
  <!-- Sidebar --> 
  <!--Menu superior-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid"> 
    <!--Cabeçalho do menu-->
    <div class="navbar-header"> 
      <!--Botão collapse da navegação móvel-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Navegação móvel</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!--Botão collapse para ocultar a sidebar--> 
      <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu btn-lg toggle"></a> 
      <!--Brand com o título do projeto--> 
      <a class="navbar-brand" href="index.php">Nome do projeto</a> </div>
    <!--Cabeçalho do menu--> 
    <!--Menu principal-->
    <nav id="navbar" class="collapse navbar-collapse"> 
     <!--Navegação a esquerda-->
     <ul class="nav navbar-nav">
        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Cursos<span class="caret"></span></a>
          <ul class="dropdown-menu list-group" role="menu">
            <li class="nav-header"><strong>
              <p class="text-center">Categorias de curso</p>
              </strong>
            </li>
            <li class="list-group-item"><button class="btn btn-sm btn-primary center-block" onClick='window.location.replace("?ctrl=curso&ac=catalogo");'>Ver todos os cursos</button></li>
            <?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
            	<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cont', 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categoria_1_saved_item = isset($_smarty_tpl->tpl_vars['categoria']) ? $_smarty_tpl->tpl_vars['categoria'] : false;
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$__foreach_categoria_1_saved_local_item = $_smarty_tpl->tpl_vars['categoria'];
?>
                	<?php if (!empty($_smarty_tpl->tpl_vars['categoria']->value['categoria']) && ($_smarty_tpl->tpl_vars['cont']->value++ < 15)) {?><li ><a href="?ctrl=curso&ac=categoria&categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
" class="text-center"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a></li><?php }?>
            	<?php
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_1_saved_local_item;
}
if ($__foreach_categoria_1_saved_item) {
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_1_saved_item;
}
?>
            	<li class="list-group-item"><button class="btn btn-sm btn-primary" href="?ctrl=curso&ac=categoria"  onClick='window.location.replace("?ctrl=curso&ac=categoria");'>Ver todas as categorias</button></li>
            <?php } else { ?>
            	<li>&nbsp;&nbsp;&nbsp;Sem categorias</li>
            <?php }?>
          </ul>
        </li>
        <li><a href="#">Como funciona</a></li>
        <li><a href="#">Sobre</a></li>
      </ul>
     <!--Navegação a esquerda-->  
      
      
      <!--Campo de busca-->
      <form name="form_busca" class="navbar-form navbar-header" method="POST" action="?ctrl=curso&ac=busca">
        <input type="text" class="form-control" placeholder="Buscar" name="busca">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <!--Campo de busca--> 
      
      <!--Navegação a direita-->
      <ul class="nav navbar-nav navbar-right">
        <!--Login-->
        <li class="dropdown"> <a href="?ctrl=usuario&ac=perfil" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="btn" href="?ctrl=dashboardCurso&ac=cursos">Meus cursos</a></li>
            <li><a class="btn" href="?ctrl=usuario&ac=perfil">Meu perfil</a></li>
            <li><a class="btn" href="?ctrl=usuario&ac=logof">Sair</a></li>
          </ul>
          <!-- Formulario do login--> 
        </li>
        <li><i class="fa fa-2x fa-user"></i></li>
        <!--Login-->
      </ul>
      <!--Navegação a direita--> 
    </nav>
    <!--Menu principal--> 
  </div>
  <!--container-fluid--> 
  </nav>
  <!--Menu superior-->
  <div id="page-content-wrapper">
  <div class="page-content">
<?php }
}
}
