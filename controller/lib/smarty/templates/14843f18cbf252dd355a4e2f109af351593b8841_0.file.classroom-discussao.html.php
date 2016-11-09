<?php
/* Smarty version 3.1.29, created on 2016-10-02 16:05:18
  from "D:\xampp\www\mooc\view\classroom-discussao.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f1141e536656_43818228',
  'file_dependency' => 
  array (
    '14843f18cbf252dd355a4e2f109af351593b8841' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\classroom-discussao.html',
      1 => 1475417086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f1141e536656_43818228 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\www\\mooc\\controller\\lib\\smarty\\libs\\plugins\\modifier.date_format.php';
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
   <link rel="stylesheet" href="view/css/classroom-discussao.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>      
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <!--Conteúdo-->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row main">
                  <section class="col-lg-12 col-md-12 comment-list">
                    <!--Painél-->
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
                      <section class="panel-body text-justify ">
                         <!--Cabeçalho-->
                        <header class="row page-header">
                          <h2 class="col-md-7">Discussão</h2>
                          <div class="col-md-4">
                           <!-- <form class="navbar-form navbar-header pull-right" role="search" action="#">
                              <input type="text" class="form-control" placeholder="Buscar" name="busca">
                              <button type="input" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </form>-->
                          </div>
                          <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
                            <div class="col-md-1">
                              <button  data-toggle="modal" data-target="#novoTopico" class="btn btn-md btn-primary pull-right" >Novo tópico</button>
                            </div>
                          <?php }?>
                        </header>
                        <!--Cabeçalho-->
                        <?php if (!empty($_smarty_tpl->tpl_vars['topicos']->value)) {?>
                          <?php
$_from = $_smarty_tpl->tpl_vars['topicos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_topico_1_saved_item = isset($_smarty_tpl->tpl_vars['topico']) ? $_smarty_tpl->tpl_vars['topico'] : false;
$_smarty_tpl->tpl_vars['topico'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['topico']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['topico']->value) {
$_smarty_tpl->tpl_vars['topico']->_loop = true;
$__foreach_topico_1_saved_local_item = $_smarty_tpl->tpl_vars['topico'];
?>
                          <!-- First Comment -->
                          <article class="row">
                            <div class="col-md-2 col-sm-2 hidden-xs">
                              <figure class="thumbnail">
                                <img class="img-responsive" src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['topico']->value['email_aluno'];?>
.jpg"/>
                              </figure>
                            </div>
                            <div class="col-md-10 col-sm-10">
                              <div class="panel panel-default arrow left">
                                <div class="panel-body">
                                  <header class="text-left">
                                    <div class="comment-user"><i class="fa fa-user"></i><strong><?php echo $_smarty_tpl->tpl_vars['topico']->value['email_aluno'];?>
</strong></div>
                                    <time class="comment-date"><i class="fa fa-clock-o"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['topico']->value['data']);?>
</time>
                                  </header>
                                  <div class="comment-post">
                                    <p id="post<?php echo $_smarty_tpl->tpl_vars['topico']->value['numero'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['topico']->value['assunto'];?>
"><?php echo $_smarty_tpl->tpl_vars['topico']->value['assunto'];?>
</p>
                                  </div>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['sessao']->value['usuario'] == $_smarty_tpl->tpl_vars['topico']->value['email_aluno']) {?>
                                    <form method="POST" class="text-right" action="?ctrl=classroom&ac=removerTopico&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" >
                                      <input type="hidden" name="numero" value="<?php echo $_smarty_tpl->tpl_vars['topico']->value['numero'];?>
">
                                       <a data-toggle="modal" data-target="#editar" data-id="<?php echo $_smarty_tpl->tpl_vars['topico']->value['numero'];?>
" class="open-editar btn btn-primary btn-sm"><i class="fa fa-reply"></i>Editar</a>
                                      <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                                    </form>
                                    <?php }?>
                                  <?php }?>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
                                    <p class="text-right"><a data-toggle="modal" data-target="#resposta" data-id="<?php echo $_smarty_tpl->tpl_vars['topico']->value['numero'];?>
" class="open-resposta btn btn-default btn-sm"><i class="fa fa-reply"></i>Responder</a></p>
                                  <?php }?>
                                </div>
                              </div>
                            </div>
                          </article>
                          <?php if (!empty($_smarty_tpl->tpl_vars['topico']->value['resposta'])) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['topico']->value['resposta'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_resposta_2_saved_item = isset($_smarty_tpl->tpl_vars['resposta']) ? $_smarty_tpl->tpl_vars['resposta'] : false;
$_smarty_tpl->tpl_vars['resposta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['resposta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['resposta']->value) {
$_smarty_tpl->tpl_vars['resposta']->_loop = true;
$__foreach_resposta_2_saved_local_item = $_smarty_tpl->tpl_vars['resposta'];
?>
                            <!-- Second Comment Reply -->
                            <article class="row">
                              <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                <figure class="thumbnail">
                                  <img class="img-responsive" src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['resposta']->value['email_aluno'];?>
.jpg"/>
                                </figure>
                              </div>
                              <div class="col-md-9 col-sm-9">
                                <div class="panel panel-default arrow left">
                                  <div class="panel-heading right">Reposta</div>
                                  <div class="panel-body">
                                    <header class="text-left">
                                      <div class="comment-user"><i class="fa fa-user"></i><strong><?php echo $_smarty_tpl->tpl_vars['resposta']->value['email_aluno'];?>
</strong></div>
                                      <time class="comment-date"><i class="fa fa-clock-o"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['resposta']->value['data']);?>
</time>
                                    </header>
                                    <div class="comment-post">
                                      <p id="post<?php echo $_smarty_tpl->tpl_vars['resposta']->value['numero'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['assunto'];?>
"><?php echo $_smarty_tpl->tpl_vars['resposta']->value['assunto'];?>
</p>
                                    </div>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
                                      <?php if ($_smarty_tpl->tpl_vars['sessao']->value['usuario'] == $_smarty_tpl->tpl_vars['resposta']->value['email_aluno']) {?>
                                        <form method="POST" class="text-right" action="?ctrl=classroom&ac=removerTopico&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" >
                                          <input type="hidden" name="numero" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['numero'];?>
">
                                           <a data-toggle="modal" data-target="#editar" data-id="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['numero'];?>
" class="open-editar btn btn-primary btn-sm"><i class="fa fa-reply"></i>Editar</a>
                                          <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                                        </form>
                                      <?php }?>
                                    <?php }?>
                                  </div>
                                </div>
                              </div>
                            </article>
                            <!-- Second Comment Reply -->
                            <?php
$_smarty_tpl->tpl_vars['resposta'] = $__foreach_resposta_2_saved_local_item;
}
if ($__foreach_resposta_2_saved_item) {
$_smarty_tpl->tpl_vars['resposta'] = $__foreach_resposta_2_saved_item;
}
?>
                          <?php }?>
                          <?php
$_smarty_tpl->tpl_vars['topico'] = $__foreach_topico_1_saved_local_item;
}
if ($__foreach_topico_1_saved_item) {
$_smarty_tpl->tpl_vars['topico'] = $__foreach_topico_1_saved_item;
}
?>
                         <?php } else { ?>
                         	<h4>Sem tópicos!</h4>
                         <?php }?>
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
    <!--Modal novo tópico-->
    <div class="modal fade" id="novoTopico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Novo tópico</h3>
      </div>
      <div class="modal-body">
         <form  method="POST" action="?ctrl=classroom&ac=novoTopico&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Comentario</label>
            <div class="col-md-10">
              <textarea class="form-control" id="comentario" rows="13" name="assunto" placeholder="Escreve seu comentario" style="resize:none;" maxlength="400"></textarea>
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
    <!--Modal novo tópico-->
    <!--Modal responder topico-->
    <div class="modal fade" id="resposta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Responder tópico</h3>
      </div>
      <div class="modal-body">
          <form  method="POST" action="?ctrl=classroom&ac=responderTopico&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <input type="hidden" name="numero" id="numero" value=""/>
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Resposta</label>
            <div class="col-md-10">
              <textarea class="form-control" rows="13" name="assunto" placeholder="Escreve seu comentario" style="resize:none;" maxlength="400"></textarea>
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
    <!--Modal responder topico-->
    <!--Modal editar topico-->
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Editar tópico</h3>
      </div>
      <div class="modal-body">
          <form  method="POST" action="?ctrl=classroom&ac=editarTopico&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <input type="hidden" name="numero" id="numero" value=""/>
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Resposta</label>
            <div class="col-md-10">
              <textarea class="form-control" rows="13" name="assunto" id="assunto" placeholder="Escreve seu comentario" style="resize:none;" maxlength="400"></textarea>
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
    <!--Modal editar topico-->
    <hr>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <?php echo '<script'; ?>
>
    $(document).on("click", ".open-resposta", function () {
		 var numero = $(this).data('id');
		 $(".modal-body #numero").val( numero );
	});

	$(document).on("click", ".open-editar", function () {
     	var numero = $(this).data('id');
     	var texto = $("#post"+numero).data('id');
		$(".modal-body #numero").val(numero);
		$(".modal-body #assunto").val(texto);
	});
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
