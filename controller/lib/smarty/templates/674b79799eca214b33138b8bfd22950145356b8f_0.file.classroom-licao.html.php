<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:15:06
  from "/home/ubuntu/workspace/view/classroom-licao.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea7daac02a7_01566349',
  'file_dependency' => 
  array (
    '674b79799eca214b33138b8bfd22950145356b8f' => 
    array (
      0 => '/home/ubuntu/workspace/view/classroom-licao.html',
      1 => 1476306904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fea7daac02a7_01566349 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/classroom-licao.css"/>
  <link rel="stylesheet" href="view/css/multimidia.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <!--Conteúdo-->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row main">
                  <div class="col-lg-12 col-md-12">
                    <h1 class="text-center">Classroom - <?php echo $_smarty_tpl->tpl_vars['nome_curso']->value[0]['nome'];?>
</h1>
                    <hr>
                    <!--Painél-->
                    <section class="panel panel-default">
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
                        <!--Navegação lateral-->
                        <aside class="col-md-3">
           					<nav class="panel-group" id="accordion">
                              <!--Módulo-->
                              <?php if (!empty($_smarty_tpl->tpl_vars['modulos']->value)) {?>
                              	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['modulos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_modulo_1_saved_item = isset($_smarty_tpl->tpl_vars['modulo']) ? $_smarty_tpl->tpl_vars['modulo'] : false;
$_smarty_tpl->tpl_vars['modulo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['modulo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->_loop = true;
$__foreach_modulo_1_saved_local_item = $_smarty_tpl->tpl_vars['modulo'];
?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#mod<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                              <i class="glyphicon glyphicon-folder-close"></i>
                                              <?php echo $_smarty_tpl->tpl_vars['modulo']->value['modulo']['nome'];?>

                                            </a>
                                        </h4>
                                    </div>
                                    <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'j', 0);?>
                                    <div id="mod<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" class="panel-collapse collapse 
                                    <?php if ($_smarty_tpl->tpl_vars['escolha']->value == 'home') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['j']->value == 0) {?> 
                                        	in 
                                        <?php }?> 
                                    <?php } else { ?>
                                      <?php if ($_smarty_tpl->tpl_vars['modulo']->value['modulo']['nome'] == $_smarty_tpl->tpl_vars['n_modulo']->value) {?> 
                                         in 
                                      <?php }?>
                                     <?php }?>">
                                        <div class="panel-body">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value['licoes'])) {?>
                                            <table class="table">
                                               <tr>
                                                  <td <?php if ($_smarty_tpl->tpl_vars['modulo']->value['modulo']['nome'] == $_smarty_tpl->tpl_vars['escolha']->value) {?> class="active" <?php }?>>
                                                    <a href="?ctrl=licao&ac=modulo&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['modulo']['nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['modulo']->value['modulo']['nome'];?>
</a>
                                                  </td>
                                                </tr>
                                               <?php
$_from = $_smarty_tpl->tpl_vars['modulo']->value['licoes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_licao_2_saved_item = isset($_smarty_tpl->tpl_vars['licao']) ? $_smarty_tpl->tpl_vars['licao'] : false;
$_smarty_tpl->tpl_vars['licao'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['licao']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['licao']->value) {
$_smarty_tpl->tpl_vars['licao']->_loop = true;
$__foreach_licao_2_saved_local_item = $_smarty_tpl->tpl_vars['licao'];
?>
                                                <tr>
                                                  <td <?php if ($_smarty_tpl->tpl_vars['licao']->value['nome'] == $_smarty_tpl->tpl_vars['escolha']->value) {?> class="active" <?php }?>>
                                                    <i class="glyphicon glyphicon-pencil text-primary"></i>
                                                    <a href="?ctrl=licao&ac=licao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['modulo']['nome'];?>
&licao=<?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
</a>
                                                  </td>
                                                </tr>
                                                <?php
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_2_saved_local_item;
}
if ($__foreach_licao_2_saved_item) {
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_2_saved_item;
}
?>
                                            </table>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <?php
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_1_saved_local_item;
}
if ($__foreach_modulo_1_saved_item) {
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_1_saved_item;
}
?>
                              <!--Módulo-->
                              <?php }?>
                            </nav>
                        </aside >    
                        <!--Navegação lateral-->
                        <!--Lição-->
                        <session class="col-md-9 text-justify">
                        	 <div class="panel panel-default">
                                <header class="panel-heading">
                                  <!--Menu da lição-->
                                  <nav class="draggable-container">
                                    <ul class="nav nav-tabs draggable" role="tablist">
                                      <li role="presentation" class="active">
                                        <a href="#tab" aria-controls="tab1" role="tab" data-toggle="tab">
                                          <span class="round-tabs one">
                                            <i class="fa fa-home"></i>
                                          </span>
                                        </a>
                                      </li>
                                      <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                      <?php if (sizeof($_smarty_tpl->tpl_vars['conteudo_licao']->value) > 0) {?>
                                        <?php $_smarty_tpl->tpl_vars['percentual'] = new Smarty_Variable(1/sizeof($_smarty_tpl->tpl_vars['conteudo_licao']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'percentual', 0);?>
                                      <?php }?>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['conteudo_licao']->value)) {?>
                                      	<?php
$_from = $_smarty_tpl->tpl_vars['conteudo_licao']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conteudo_3_saved_item = isset($_smarty_tpl->tpl_vars['conteudo']) ? $_smarty_tpl->tpl_vars['conteudo'] : false;
$_smarty_tpl->tpl_vars['conteudo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['conteudo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['conteudo']->value) {
$_smarty_tpl->tpl_vars['conteudo']->_loop = true;
$__foreach_conteudo_3_saved_local_item = $_smarty_tpl->tpl_vars['conteudo'];
?>
                                        <li role="presentation">
                                        <a href="#tab<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" aria-controls="tab<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="tab" data-toggle="tab" onClick='updateCookie("<?php echo $_smarty_tpl->tpl_vars['sessao']->value["usuario"];?>
|<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['nome_modulo']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value[0]["nome"];?>
",<?php echo $_smarty_tpl->tpl_vars['percentual']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['sessao']->value["usuario"];?>
|<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['nome_modulo']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value[0]["nome"];?>
#tab<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
")'>
                                          <span class="round-tabs one">
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'video') {?>
                                              <i class="fa fa-video-camera"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'pdf') {?>
                                              <i class="fa fa-file-pdf-o"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'audio') {?>
                                              <i class="fa fa-file-audio-o"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'imagem') {?>
                                              <i class="fa fa-picture-o"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'slide') {?>
                                              <i class="fa fa-slideshare"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'jogo') {?>
                                              <i class="fa fa-gamepad"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'quiz') {?>
                                              <i class="fa fa-question-circle-o"></i>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'faq') {?>
                                              <i class="fa fa-commenting-o"></i>
                                              <?php }?>
                                          </span>
                                          </a>
                                        </li>
                                        <?php
$_smarty_tpl->tpl_vars['conteudo'] = $__foreach_conteudo_3_saved_local_item;
}
if ($__foreach_conteudo_3_saved_item) {
$_smarty_tpl->tpl_vars['conteudo'] = $__foreach_conteudo_3_saved_item;
}
?>
                                      <?php }?>
                                      
                                    </ul>
                                  </nav> 
                                  <!--Menu da lição-->
                                </header>
                                <!--Conteúdo da lição-->
                                <div class="panel-body">
                                  <div class="tab-content">
                                    <!--Lição-->  
                                    <article class="tab-pane fade in active" id="tab">
                                     <?php if (!empty($_smarty_tpl->tpl_vars['item']->value)) {?>
                                       <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['nome'];?>
</h3>
                                       <p class="narrow text-center"> Navegue pelo menu superior para visualizar o conteúdo multimídia da lição.</p>
                                       <?php if (!empty($_smarty_tpl->tpl_vars['item']->value[0]['imagem'])) {?>
                                          <img class="img-responsive center-block" src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['item']->value[0]['numero_curso'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value[0]['nome'];?>
.jpg"  width="500"/><br>
                                       <?php }?>
                                       <?php if (!empty($_smarty_tpl->tpl_vars['item']->value[0]['descricao'])) {?>
                                       <p class="narrow text-justify"><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['descricao'];?>
</p>
                                       <?php }?>
                                       <?php if (!empty($_smarty_tpl->tpl_vars['item']->value[0]['resumo'])) {?>
                                       <p class="narrow text-justify"><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['resumo'];?>
</p>
                                       <?php }?>
                                       <?php if (!empty($_smarty_tpl->tpl_vars['item']->value[0]['video']) && ($_smarty_tpl->tpl_vars['item']->value[0]['video'] != 'NULL')) {?>
                                        <iframe width="560" height="315" src="<?php echo $_smarty_tpl->tpl_vars['item']->value[0]['video'];?>
" frameborder="0" allowfullscreen class="center-block"></iframe>
                                       <?php }?>
                                     <?php } else { ?>
                                      	<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['nome_curso']->value[0]['nome'];?>
</h3>
                                     	<p class="narrow text-center">Navegue pelo menu a esquerda para realizar as lições.</p>
                                     <?php }?>
                                    </article>
                                    <!--Lição--> 
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['conteudo_licao']->value)) {?>
                                    	<?php
$_from = $_smarty_tpl->tpl_vars['conteudo_licao']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conteudo_4_saved_item = isset($_smarty_tpl->tpl_vars['conteudo']) ? $_smarty_tpl->tpl_vars['conteudo'] : false;
$_smarty_tpl->tpl_vars['conteudo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['conteudo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['conteudo']->value) {
$_smarty_tpl->tpl_vars['conteudo']->_loop = true;
$__foreach_conteudo_4_saved_local_item = $_smarty_tpl->tpl_vars['conteudo'];
?>
                                          <article class="tab-pane fade in" id="tab<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
">
                                            <div class="row">
                                             <div class="col-md-12">
                                              <?php
$_from = $_smarty_tpl->tpl_vars['conteudo']->value['itens'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_5_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_5_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                              	<?php if ($_smarty_tpl->tpl_vars['item']->value['tipo'] == 'link') {?>
                                                	<?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'imagem') {?>
                                                	  <?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>

                                                	<?php } else { ?>
                                                	  	<div class="item"><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</div>
                                                	<?php }?>
                                                <?php } else { ?>
                                                	<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['indice'];?>
</h3>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['conteudo'];?>

                                                <?php }?> 
                                              <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_5_saved_local_item;
}
if ($__foreach_item_5_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_5_saved_item;
}
?>
                                             </div>
                                            </div>
                                          </article> 
                                     	<?php
$_smarty_tpl->tpl_vars['conteudo'] = $__foreach_conteudo_4_saved_local_item;
}
if ($__foreach_conteudo_4_saved_item) {
$_smarty_tpl->tpl_vars['conteudo'] = $__foreach_conteudo_4_saved_item;
}
?>
                                    <?php }?>
                                  </div>
                                </div>
                                <!--Conteúdo da lição-->
                            </div>
                        </session>
                        <!--Lição-->
                      </section>
                      <!--Conteúdo-->
                    </section>
                    <!--Painél-->
                  </div>
                </div><!--row main-->
            </div><!--container-fluid-->
        </div><!--page-content-->
    </div><!--page-content-wrapper-->
    <!--Conteúdo-->
    <hr>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Interface de scroll da barra de navegação da lição-->
<?php echo '<script'; ?>
>
// calculate and set .draggable width

$.fn.draggable_nav_calc = function(options) {
  return this.each( function(i) {
    var $element = $(this);
    if ($element.is(":visible")) {
      // x or y
      if (options.axis === "x") {
        // calculate
        var navWidth = 1;
        $element.find("> *").each( function(i) {
          navWidth += $(this).outerWidth(true);
        });
        // set width
        var parentWidth = $element.parent().width();
        if (navWidth > parentWidth) {
          $element.css("width", navWidth);
        } else {
          $element.css("width", parentWidth);
        }
      } else if (options.axis === "y") {
        // calculate
        var navHeight = 1;
        $element.find("> *").each( function(i) {
          navHeight += $(this).outerHeight(true);
        });
        // set height
        var parentHeight = $element.parent().width();
        if (navHeight > parentHeight) {
          $element.css("height", navHeight);
        } else {
          $element.css("height", parentHeight);
        }
      }
    }
  });
};

// check inside bounds

$.fn.draggable_nav_check = function() {
  return this.each( function(i) {
    var $element = $(this);
    // calculate
    var w = $element.width();
    var pw = $element.parent().width();
    var maxPosLeft = 0;
    if (w > pw) {
      maxPosLeft = - (w - pw);
    }
    var h = $element.height();
    var ph = $element.parent().height();
    var maxPosTop = 0;
    if (h > ph) {
      maxPosTop = h - ph;
    }
    // horizontal
    var left = parseInt($element[0].style.left);
    if (left > 0) {
      $element.css("left", 0);
    } else if (left < maxPosLeft) {
      $element.css("left", maxPosLeft);
    }
    // vertical
    var top = parseInt($element[0].style.top);
    if (top > 0) {
      $element.css("top", 0);
    } else if (top < maxPosTop) {
      $element.css("top", maxPosTop);
    }
  });
};

// init draggable nav

$.fn.draggable_nav = function(options) {
  return this.each( function(i) {
    var $element = $(this);
    // calculate first time, after delay to fix resize bugs
    window.setTimeout( function(e) {
      $element.draggable_nav_calc(options);
    }, 100);
    // on shown tabs recalculate
    $element.find('[data-toggle="tab"]').on('shown.bs.tab', function(e) {
      $element.draggable_nav_calc(options);
    });
    // on resize recalculate
    function draggable_nav_resize_after() {
      clearTimeout($element.data("draggable_nav_timeout"));
      var timeout = window.setTimeout( function(e) {
        $element.draggable_nav_calc(options);
        $element.draggable_nav_check();
      }, 0);
      $element.data("draggable_nav_timeout", timeout);
    }
    $(window).on('resize', draggable_nav_resize_after);
    $(window).on('scroll', draggable_nav_resize_after);
    // center clicked element
    if ($element.hasClass("draggable-center")) {
      $element.find('li a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
        var $container = $(this).parents(".draggable-container");
        var $li = $(this).parents("li");
        if (options.axis === "x") {
            var left = - $li.position().left + $container.outerWidth() / 2 - $li.outerWidth() / 2;
            $element.css("left", left);
        } else if (options.axis === "y") {
            var top = - $li.position().top + $container.outerWidth() / 2 - $li.outerWidth() / 2;
            $element.css("top", top);
        }
        // put inside bounds
        $element.draggable_nav_check();
      });
    }
  });
};
$(".draggable").draggable_nav({
  axis: 'x' // only horizontally
});

// jquery ui draggable

$(".draggable").draggable({
  axis: 'x', // only horizontally
  drag: function(e, ui) {
    var $element = ui.helper;
    // calculate
    var w = $element.width();
    var pw = $element.parent().width();
    var maxPosLeft = 0;
    if (w > pw) {
      maxPosLeft = - (w - pw);
    }
    var h = $element.height();
    var ph = $element.parent().height();
    var maxPosTop = 0;
    if (h > ph) {
      maxPosTop = h - ph;
    }
    // horizontal
    if (ui.position.left > 0) {
      ui.position.left = 0;
    } else if (ui.position.left < maxPosLeft) {
      ui.position.left = maxPosLeft;
    }
    // vertical
    if (ui.position.top > 0) {
      ui.position.top = 0;
    } else if (ui.position.top < maxPosTop) {
      ui.position.top = maxPosTop;
    }
  }
});

// jquey draggable also on touch devices
// http://stackoverflow.com/questions/5186441/javascript-drag-and-drop-for-touch-devices

function touchHandler(e) {
  var touch = e.originalEvent.changedTouches[0];
  var simulatedEvent = document.createEvent("MouseEvent");
    simulatedEvent.initMouseEvent({
    touchstart: "mousedown",
    touchmove: "mousemove",
    touchend: "mouseup"
  }[e.type], true, true, window, 1,
    touch.screenX, touch.screenY,
    touch.clientX, touch.clientY, false,
    false, false, false, 0, null);
  touch.target.dispatchEvent(simulatedEvent);
}
function preventPageScroll(e) {
    e.preventDefault();
}
function initTouchHandler($element) {
  $element.on("touchstart touchmove touchend touchcancel", touchHandler);
  $element.on("touchmove", preventPageScroll);
}
initTouchHandler($(".draggable"));
<?php echo '</script'; ?>
>
<!--Interface de scroll da barra de navegação da lição-->
<!--Cookies para monitorar o progresso da lição-->
<?php echo '<script'; ?>
>
//Cria um novo cookie
function createCookie(name, value) {
	   var cookie = name + "=" + escape(value) + ";expires=Fri, 31 Dec 9999 23:59:59 GMT; path=localhost/mooc";
       document.cookie = cookie;
}
//Recupera um cookie pelo nome
function getCookie(name) {
    var cookies = document.cookie;
    var prefix = name + "=";
    var begin = cookies.indexOf("; " + prefix);
    if (begin == -1) {
        begin = cookies.indexOf(prefix);
        if (begin != 0) {
            return null;
        }
    } else {
        begin += 2;
    }
    var end = cookies.indexOf(";", begin);
    if (end == -1) {
        end = cookies.length;                        
    }
    return unescape(cookies.substring(begin + prefix.length, end));
}
//Deleta um cookie pelo nome
function deleteCookie(name) {
       if (getCookie(name)) {
              document.cookie = name + "=" + ";expires=Thu, 01-Jan-70 00:00:01 GMT";
       }
}
//Atualiza o cookie
function updateCookie(name,value,tab) {
	   if (getCookie(name)) {
              if(!getCookie(tab)){
				  createCookie(tab,'0');
				  var valor = parseFloat(getCookie(name))+value;
			  	  document.cookie = name + "=" + escape(valor) + ";expires=Fri, 31 Dec 9999 23:59:59 GMT; path=localhost/mooc";
			  }
       }
}
//Deleta um cookie pelo nome
function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
    	var cookie = cookies[i];
    	var eqPos = cookie.indexOf("=");
    	var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    	document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

//deleteAllCookies();

//Cria o cookie se não existir
if (!getCookie('<?php echo $_smarty_tpl->tpl_vars['sessao']->value["usuario"];?>
|<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['nome_modulo']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value[0]["nome"];?>
')) 
	createCookie('<?php echo $_smarty_tpl->tpl_vars['sessao']->value["usuario"];?>
|<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['nome_modulo']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value[0]["nome"];?>
','0');

<?php echo '</script'; ?>
>
<!--Cookies para monitorar o progresso da lição-->
</body>
</html><?php }
}
