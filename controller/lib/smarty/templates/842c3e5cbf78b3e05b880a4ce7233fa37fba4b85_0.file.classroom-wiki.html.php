<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:18:35
  from "/home/ubuntu/workspace/view/classroom-wiki.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea8ab023548_54009365',
  'file_dependency' => 
  array (
    '842c3e5cbf78b3e05b880a4ce7233fa37fba4b85' => 
    array (
      0 => '/home/ubuntu/workspace/view/classroom-wiki.html',
      1 => 1476306872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fea8ab023548_54009365 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="viwe/css/classroom-wiki.css"/>
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
                  <section class="col-lg-12 col-md-12">
                    <h1 class="text-center">Classroom - <?php echo $_smarty_tpl->tpl_vars['nome_curso']->value[0]['nome'];?>
</h1>
                    <hr>
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
                          <h2 class="col-md-10">Artigos anexados pelos alunos ao curso Lorem Ipsum</h2>
                          <div class="col-md-2">
                             <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
                            <button  data-toggle="modal" data-target="#novoArtigo" class="btn btn-md btn-primary pull-righ open-novo" >Adicionar artigo</button>
                            <?php }?>
                          </div>
                        </header>
                        <!--Cabeçalho-->
                        <session class="col-md-12 text-justify">
                         <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                         <?php if (!empty('wikis')) {?>
                         	<?php
$_from = $_smarty_tpl->tpl_vars['wikis']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_wiki_1_saved_item = isset($_smarty_tpl->tpl_vars['wiki']) ? $_smarty_tpl->tpl_vars['wiki'] : false;
$_smarty_tpl->tpl_vars['wiki'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['wiki']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wiki']->value) {
$_smarty_tpl->tpl_vars['wiki']->_loop = true;
$__foreach_wiki_1_saved_local_item = $_smarty_tpl->tpl_vars['wiki'];
?>
                              <!--Artigo-->
                              <article class="col-md-12 panel panel-default">
                                <div class="row">
                                  <br>
                                  <p id="post<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="col-md-10" data-id="<?php echo $_smarty_tpl->tpl_vars['wiki']->value['link'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['wiki']->value['link'];?>

                                  </p>
                                  <div class="col-md-2">
                                  <div class="form-group text-center">
                                      <a class="btn btn-default" name="visualizar">Visualizar</a>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['wiki']->value['email_aluno'] == $_smarty_tpl->tpl_vars['sessao']->value['usuario']) {?>
                                        <button  data-toggle="modal" data-target="#editarArtigo" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" class="open-editar btn btn-primary btn-sm">Editar</button>
                                        <?php }?>
                                      <?php }?>
                                    </div>
                                  </div>
                                </div>
                              </article>
                              <!--Artigo-->
                         	<?php
$_smarty_tpl->tpl_vars['wiki'] = $__foreach_wiki_1_saved_local_item;
}
if ($__foreach_wiki_1_saved_item) {
$_smarty_tpl->tpl_vars['wiki'] = $__foreach_wiki_1_saved_item;
}
?>
                         <?php } else { ?>
                         	<h3>Sem wikis!</h3>
                         <?php }?>
                        </session>
                        <!--Texto-->
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
    <!--Modal novo artigo-->
    <div class="modal fade" id="novoArtigo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Adicionar artigo</h3>
      </div>
      <div class="modal-body">
         <form  method="POST" action="?ctrl=classroom&ac=novoWiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Artigo</label>
            <div class="col-md-10">
              <textarea class="form-control" id="wiki" rows="13" name="wiki" placeholder="Insira o texto do artigo aqui" style="resize:none;" maxlength="400"></textarea>
            </div>
          </fieldset>
          <!--Comentario-->
          <ul class="list-inline pull-right">
            <li>
              <button type="submit" class="btn btn-primary pull-left">Enviar</button>
            </li>
          </ul>
        </form>
        <br>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    <!--Modal novo artigo-->
    
    <!--Modal editar artigo-->
    <div class="modal fade" id="editarArtigo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Editar artigo</h3>
      </div>
      <div class="modal-body">
         <form  method="POST" action="?ctrl=classroom&ac=editarWiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="wiki_antiga" id="wiki_antiga" class="rating" value="">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Artigo</label>
            <div class="col-md-10">
              <textarea class="form-control" id="wiki" rows="13" name="wiki" placeholder="Insira o texto do artigo aqui" style="resize:none;" maxlength="400"></textarea>
            </div>
          </fieldset>
          <!--Comentario-->
          <ul class="list-inline pull-right">
            <li>
              <button type="submit" class="btn btn-primary pull-left">Enviar</button>
            </li>
          </ul>
        </form>
        <br>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    <!--Modal editar artigo-->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  
  <?php echo '<script'; ?>
>
    $(document).on("click", ".open-novo", function () {
     	var numero = $(this).data('id');
     	var texto = $("#post"+numero).data('id');
		$(".modal-body #wiki").val("");
	});

	$(document).on("click", ".open-editar", function () {
     	var numero = $(this).data('id');
     	var texto = $("#post"+numero).data('id');
		$(".modal-body #wiki").val(texto);
		$(".modal-body #wiki_antiga").val(texto);
	});
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
