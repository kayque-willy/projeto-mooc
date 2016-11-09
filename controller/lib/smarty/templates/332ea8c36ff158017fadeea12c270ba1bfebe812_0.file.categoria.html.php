<?php
/* Smarty version 3.1.29, created on 2016-10-06 17:32:52
  from "/home/ubuntu/workspace/view/categoria.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f68ac4a89be6_58158765',
  'file_dependency' => 
  array (
    '332ea8c36ff158017fadeea12c270ba1bfebe812' => 
    array (
      0 => '/home/ubuntu/workspace/view/categoria.html',
      1 => 1475717481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57f68ac4a89be6_58158765 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/dashboard.css"/>
  <link rel="stylesheet" href="view/css/dashboard-form.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  <!--Cabeçalho-->
  <header>
  <hr>
      <h2 class="text-center">Categorias de curso</h2><br>
      <p class="text-center">São listadas aqui todas as categorias de curso desta plataforma</p>
  </header>
  <!--Cabeçalho-->
  <!--Cursos-->	
  <session class="container">
    <!--<h3 class="text-center">Assuntos mais populares</h3>-->
    <!--Linha-->
    <!--<div class="row text-center">
      <a href="curso.html">
      <article class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
        <div class="thumbnail well"> 
          <img src="http://assets1.exame.abril.com.br/assets/images/2015/8/544444/size_960_16_9_curso-online.png" alt="Curso" class="img-responsive" width="400" height="200">
          <div class="caption">
            <h3>Assunto</h3>
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
            <h3>Assunto</h3>
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
            <h3>Assunto</h3>
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
            <h3>Assunto</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, massa eu auctor vestibulum.</p>
          </div>
        </div>
      </article>
      </a>
    </div>-->
    <!--Linha-->
    <hr>
    <h3 class="text-center">Todos os assuntos</h3>
    <hr>
    <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cont', 0);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
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
        	<?php if ($_smarty_tpl->tpl_vars['cont']->value++%4 == 0 || $_smarty_tpl->tpl_vars['cont']->value == 0) {?> <div class="row text-center"> <?php }?>
      			<article class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                  <div class="thumbnail well"> 
                    <img src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['numero'];?>
.jpg" alt="Curso" class="img-responsive" width="400" height="200">
                    <div class="caption">
                      <h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</h3>
                    </div>
                    <p>Serão listados todos os cursos desta categoria</p>
                    <a class="btn btn-info" href="?ctrl=curso&ac=categoria&categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
">Ver cursos</a>
                  </div>
                </article>
              <?php if ($_smarty_tpl->tpl_vars['cont']->value%4 == 0 || $_smarty_tpl->tpl_vars['cont']->value == 0) {?> </div> <?php }?>
    	<?php
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_local_item;
}
if ($__foreach_categoria_0_saved_item) {
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_item;
}
?>
    <?php } else { ?>
    	<h4 class="text-center">Não existe nenhuma categoria cadastrada!</h4>
    <?php }?>
    <!--Linha-->
    <div class="row text-center">
    
    </div>
    <!--Linha-->
    <div class="text-center">
      <a class="btn btn-primary btn-md" href="?ctrl=curso&ac=catalogo" role="button">Ver todos os cursos</a>
    </div>
  </session>
  <!--Cursos-->	
  <hr>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
