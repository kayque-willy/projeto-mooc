<?php
/* Smarty version 3.1.29, created on 2016-09-28 16:20:57
  from "D:\xampp\www\mooc\view\classroom-home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ebd1c9eb5696_75578008',
  'file_dependency' => 
  array (
    '6d0af8edeb7fef77aac61bb6713a6045c4e9e34b' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\classroom-home.html',
      1 => 1475071893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57ebd1c9eb5696_75578008 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/dashboard.css"/>
  <link rel="stylesheet" href="view/css/classroom-home.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <!--Conteúdo-->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row main">
                  <section class="col-lg-12 col-md-12">
                    <!--Painél-->
                    <div class="panel panel-default">
                      <!--Menu do curso-->
                      <nav class="navbar navbar-default">
                        <div class="container"> 
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myDefaultNavbar1">
                          <ul class="nav navbar-nav navbar-header">
                            <li class="active"><a href="ctrl=classroom&ac=home&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Pagina inicial</a></li>
                            <li><a href="?ctrl=classroom&ac=ConteudoProgramatico&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Programa de estudo</a></li>
                            <li><a href="?ctrl=classroom&ac=discussao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Discussão</a></li>
                            <li><a href="?ctrl=classroom&ac=material&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Material adicional</a></li>
                            <li><a href="?ctrl=classroom&ac=wiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Wiki</a></li>
                            <li><a href="?ctrl=classroom&ac=midiaSocial&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Mídia social</a></li>
                            <li><a href="?ctrl=licao&ac=licao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Lição</a></li>
                            <li><a href="?ctrl=licao&ac=progresso&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Progresso</a></li>
                          </ul> 
                        </div>
                       </div>
                      </nav>
                      <!--Menu do curso--> 
                      <!--Conteúdo-->
                      <section class="panel-body row">
                        <!--Cabeçalho-->
                        <header>
                          <div class="col-md-10 center-block">
                           <h2 class="text-center">Bem vindo ao curso <?php echo $_smarty_tpl->tpl_vars['nome_curso']->value[0]['nome'];?>
</h2>
                          </div>
                          <div class="col-md-2">
                          	<a class="btn btn-md btn-primary center-block" href="#">Retomar curso</a>
                          </div>
                        </header>
                        <!--Cabeçalho-->
                        <session class="col-md-9 text-justify">
                          <div class="row">
                             <?php
$_from = $_smarty_tpl->tpl_vars['pagina_rec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pagina_0_saved_item = isset($_smarty_tpl->tpl_vars['pagina']) ? $_smarty_tpl->tpl_vars['pagina'] : false;
$_smarty_tpl->tpl_vars['pagina'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pagina']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pagina']->value) {
$_smarty_tpl->tpl_vars['pagina']->_loop = true;
$__foreach_pagina_0_saved_local_item = $_smarty_tpl->tpl_vars['pagina'];
?>
                                  <?php if ($_smarty_tpl->tpl_vars['pagina']->value['tipo'] == 'sessao') {?>
                                  <!--Texto-->
                                   <article class="col-md-12" id="art1">
                                      <hgroup>
                                        <h3 ><?php echo $_smarty_tpl->tpl_vars['pagina']->value['indice'];?>
</h3>
                                      </hgroup>
                                      <p><?php echo $_smarty_tpl->tpl_vars['pagina']->value['conteudo'];?>
</p>
                                    </article>
                                    <!--Texto-->
                                  <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_local_item;
}
if ($__foreach_pagina_0_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_item;
}
?>
                          </div>
                        </session>
                        <!--Texto-->
                        <!--Navegação lateral-->
                        <aside class="col-md-3 hidden-xs">
                          <nav class="panel panel-default" >
                            <ul class="nav nav-stacked center-block">
                              <?php
$_from = $_smarty_tpl->tpl_vars['pagina_rec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pagina_1_saved_item = isset($_smarty_tpl->tpl_vars['pagina']) ? $_smarty_tpl->tpl_vars['pagina'] : false;
$_smarty_tpl->tpl_vars['pagina'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pagina']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pagina']->value) {
$_smarty_tpl->tpl_vars['pagina']->_loop = true;
$__foreach_pagina_1_saved_local_item = $_smarty_tpl->tpl_vars['pagina'];
?>
                              	<?php if ($_smarty_tpl->tpl_vars['pagina']->value['tipo'] == 'sessao') {?>
                              		<li><a href="#art1"><?php echo $_smarty_tpl->tpl_vars['pagina']->value['indice'];?>
</a></li>
                                <?php }?>
                              <?php
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_1_saved_local_item;
}
if ($__foreach_pagina_1_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_1_saved_item;
}
?>
                            </ul>
                          </nav>
                        </aside >    
                        <!--Navegação lateral-->
                      </section>
                      <!--Conteúdo-->
                    </div>
                    <!--Painél-->
                  </section>
                </div><!--row main-->
            </div><!--container-fluid-->
        </div><!--page-content-->
    </div><!--page-content-wrapper-->
    <!--Conteúdo-->
    <hr>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Navegação smooth-->
<?php echo '<script'; ?>
>
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html, body').animate({
			  scrollTop: target.offset().top
			}, 700);
			return false;
		  }
		}
	  });
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
