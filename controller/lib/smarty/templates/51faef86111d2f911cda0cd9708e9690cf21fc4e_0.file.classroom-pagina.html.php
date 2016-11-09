<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:12:10
  from "/home/ubuntu/workspace/view/classroom-pagina.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea72a6ff877_43269826',
  'file_dependency' => 
  array (
    '51faef86111d2f911cda0cd9708e9690cf21fc4e' => 
    array (
      0 => '/home/ubuntu/workspace/view/classroom-pagina.html',
      1 => 1476306722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57fea72a6ff877_43269826 ($_smarty_tpl) {
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
                    <h1 class="text-center">Classroom - <?php echo $_smarty_tpl->tpl_vars['nome_curso']->value[0]['nome'];?>
</h1>
                    <hr>
                    <div class="panel panel-default">
                      <!--Menu do curso-->
                      <nav class="navbar navbar-default">
                        <div class="container"> 
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myDefaultNavbar1">
                          <ul class="nav navbar-nav navbar-header">
                            <?php
$_from = $_smarty_tpl->tpl_vars['paginas']->value;
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
                            	<li <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == $_smarty_tpl->tpl_vars['pagina']->value['titulo']) {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=pagina&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_local_item;
}
if ($__foreach_pagina_0_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_item;
}
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Discussao") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=discussao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Discussão</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Material Adicional") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=material&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Material adicional</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Wiki") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=wiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Wiki</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Midia Social") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=midiaSocial&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Mídia social</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Licao") {?> class="active" <?php }?>><a href="?ctrl=licao&ac=licao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Lição</a></li>
                            <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value['usuario']) && $_smarty_tpl->tpl_vars['sessao']->value['tipo_usuario'] == 'aluno') {?>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Progresso") {?> class="active" <?php }?>><a href="?ctrl=licao&ac=progresso&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Progresso</a></li>
                            <?php }?>
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
$__foreach_pagina_1_saved_item = isset($_smarty_tpl->tpl_vars['pagina']) ? $_smarty_tpl->tpl_vars['pagina'] : false;
$_smarty_tpl->tpl_vars['pagina'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pagina']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pagina']->value) {
$_smarty_tpl->tpl_vars['pagina']->_loop = true;
$__foreach_pagina_1_saved_local_item = $_smarty_tpl->tpl_vars['pagina'];
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
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_1_saved_local_item;
}
if ($__foreach_pagina_1_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_1_saved_item;
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
$__foreach_pagina_2_saved_item = isset($_smarty_tpl->tpl_vars['pagina']) ? $_smarty_tpl->tpl_vars['pagina'] : false;
$_smarty_tpl->tpl_vars['pagina'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pagina']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pagina']->value) {
$_smarty_tpl->tpl_vars['pagina']->_loop = true;
$__foreach_pagina_2_saved_local_item = $_smarty_tpl->tpl_vars['pagina'];
?>
                              	<?php if ($_smarty_tpl->tpl_vars['pagina']->value['tipo'] == 'sessao') {?>
                              		<li><a href="#art1"><?php echo $_smarty_tpl->tpl_vars['pagina']->value['indice'];?>
</a></li>
                                <?php }?>
                              <?php
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_2_saved_local_item;
}
if ($__foreach_pagina_2_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_2_saved_item;
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
