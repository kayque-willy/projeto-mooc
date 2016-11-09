<?php
/* Smarty version 3.1.29, created on 2016-10-02 01:14:50
  from "D:\xampp\www\mooc\view\curso.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f0436a4739f1_94653228',
  'file_dependency' => 
  array (
    '2dabe035ca816526667b854010af18bbeae6506a' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\curso.html',
      1 => 1475363665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57f0436a4739f1_94653228 ($_smarty_tpl) {
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
<link rel="stylesheet" href="view/css/curso.css"/>
<link rel="stylesheet" href="view/css/dashboard.css"/>
<link href="view/css/estrela.css" rel="stylesheet" type="text/css">
<!--Icones-->
<link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
<!--Scripts-->
<?php echo '<script'; ?>
 src="view/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="view/js/estrela.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Conteudo-->
<hr>
<div class="container">
  <div class="row"> 
    <?php if (!empty($_smarty_tpl->tpl_vars['sucesso']->value)) {?>
        <div class="alert alert-success"> 
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <strong>Sucesso!</strong> <?php echo $_smarty_tpl->tpl_vars['sucesso']->value;?>

        </div>
    <?php }?>    
    <?php if (!empty($_smarty_tpl->tpl_vars['fracasso']->value)) {?>
      <div class="alert alert-danger"> 
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
        <strong>Operação mal sucedida!</strong> <?php echo $_smarty_tpl->tpl_vars['fracasso']->value;?>
 Por favor tente novamente.
      </div>
    <?php }?>   
    <!--Sidebar esquerda-->
    <nav class="col-md-3" id="leftCol">
      <div id="sidebar">
        <ul class="nav nav-stacked navbar-inverse">
          <li><a href="#sec0">Visão geral</a></li>
          <li><a href="#sec1">Programa</a></li>
          <li><a href="#sec2">Perguntas frequentes</a></li>
          <li><a href="#sec3">Classificação e avaliação</a></li>
        </ul>
        <?php if (empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
        	<div class="navbar-form text-center"> <a href="index.php?ctrl=classroom&ac=pagina&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
&pagina=Pagina Inicial" class="btn btn-lg btn-primary">Ver curso</a> </div>
        <?php } else { ?>
        	 <?php if (!$_smarty_tpl->tpl_vars['inscrito']->value) {?>
            <div class="navbar-form text-center"> <a href="?ctrl=curso&ac=inscrever&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-lg btn-primary">Inscrever no curso</a> </div>
            <?php } else { ?>
            <div class="navbar-form text-center"> <a href="index.php?ctrl=classroom&ac=pagina&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
&pagina=Pagina Inicial" class="btn btn-lg btn-success">Ir para o curso</a> </div>
            <?php }?>
        <?php }?>
      </div>
      <!--sidebar--> 
    </nav >
    <!--Sidebar esquerda--> 
    <!--Conteudo-->
    <session class="col-md-6"> 
      <!--Visão geral-->
      <article id="sec0">
        <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
</h1>
        <h2 class="page-header">Visão geral</h2>
        <div class="row"> <img class="col-lg-7 col-md-7 col-xs-12" src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
">
          <p class="col-lg-5 col-md-5 col-xs-12 text-justify"><?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['descricao_curta'];?>
</p>
        </div>
        <hr>
        <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['descricao'];?>
</p>
      </article>
      <!--Visão geral--> 
      <!--Programa-->
      <article id="sec1">
        <h2 class="page-header">Programa</h2>
        <p class="text-justify"> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['conteudo_programatico'];?>
 </p>
        <?php if (!empty($_smarty_tpl->tpl_vars['modulos']->value)) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['modulos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_modulo_0_saved_item = isset($_smarty_tpl->tpl_vars['modulo']) ? $_smarty_tpl->tpl_vars['modulo'] : false;
$_smarty_tpl->tpl_vars['modulo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['modulo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->_loop = true;
$__foreach_modulo_0_saved_local_item = $_smarty_tpl->tpl_vars['modulo'];
?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3><?php echo $_smarty_tpl->tpl_vars['modulo']->value['nome'];?>
</h3>
          </div>
          <div class="panel-body">
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['modulo']->value['descricao'];?>
</p>
            <p> <i class="fa fa-file-video-o" aria-hidden="true"></i> 15 videos<br>
              <i class="fa fa-files-o" aria-hidden="true"></i> 5 documentos complementares<br>
              <i class="fa fa-file-text-o" aria-hidden="true"> 6 leituras</i><br>
            </p>
          </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_0_saved_local_item;
}
if ($__foreach_modulo_0_saved_item) {
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_0_saved_item;
}
?>
        <?php } else { ?>
        <h4>Nenhum módulo cadastrado ainda!</h4>
        <?php }?> </article>
      <!--Programa--> 
      <!--Perguntas frequentes-->
      <article id="sec2">
        <h2 class="page-header">Perguntas frequentes</h2>
        <div class="row"> <?php if (!empty($_smarty_tpl->tpl_vars['FAQ']->value)) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['FAQ']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_1_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_1_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
          <div class="col-lg-1 col-md-1 hidden-xs"> <i class="fa fa-3x fa-question-circle-o" aria-hidden="true"></i> </div>
          <div class="col-lg-11 col-md-11 col-xs-12">
            <p class="text-justify"><strong><?php echo $_smarty_tpl->tpl_vars['pergunta']->value['pergunta'];?>
</strong></p>
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value['resposta'];?>
</p>
          </div>
          <?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_1_saved_local_item;
}
if ($__foreach_pergunta_1_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_1_saved_item;
}
?>	
          <?php } else { ?>
          <h4>Nenhuma pergunta frequente cadastrada ainda!</h4>
          <?php }?> </div>
        <!--row--> 
      </article>
      <!--Perguntas frequentes--> 
      <!--Classificação e avaliação-->
      <article id="sec3">
        <header class="row">
          <h3 class="col-lg-12 col-md-12 col-xs-5 page-header">Classificação e avaliação</h3>
          <span class="col-lg-12 col-md-12 col-xs-7 text-right"> <?php $_smarty_tpl->tpl_vars['resto'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'resto', 0);?>
          <?php if ($_smarty_tpl->tpl_vars['media']->value >= 1 && $_smarty_tpl->tpl_vars['media']->value < 2) {?>
          <?php $_smarty_tpl->tpl_vars['resto'] = new Smarty_Variable($_smarty_tpl->tpl_vars['media']->value-1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'resto', 0);?> 
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['media']->value > 2 && $_smarty_tpl->tpl_vars['media']->value < 5) {?> 
          <?php $_smarty_tpl->tpl_vars['resto'] = new Smarty_Variable(fmod($_smarty_tpl->tpl_vars['media']->value,2), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'resto', 0);?> 
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['media']->value == 3.00) {?>
          <?php $_smarty_tpl->tpl_vars['resto'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'resto', 0);?>
          <?php }?>
          
          <?php if ($_smarty_tpl->tpl_vars['resto']->value > 1.00) {?>
          <?php $_smarty_tpl->tpl_vars['ep'] = new Smarty_Variable($_smarty_tpl->tpl_vars['media']->value-$_smarty_tpl->tpl_vars['resto']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'ep', 0);?>
          <?php } else { ?>
          <?php $_smarty_tpl->tpl_vars['ep'] = new Smarty_Variable($_smarty_tpl->tpl_vars['media']->value-$_smarty_tpl->tpl_vars['resto']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'ep', 0);?>
          <?php }?>
          
          <?php if (($_smarty_tpl->tpl_vars['resto']->value == 0.00)) {?>
          <?php $_smarty_tpl->tpl_vars['eb'] = new Smarty_Variable(5-$_smarty_tpl->tpl_vars['media']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'eb', 0);?>
          <?php } elseif (($_smarty_tpl->tpl_vars['resto']->value > 1.00)) {?>
          <?php $_smarty_tpl->tpl_vars['eb'] = new Smarty_Variable(5-$_smarty_tpl->tpl_vars['media']->value-1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'eb', 0);?>
          <?php } else { ?>
          <?php $_smarty_tpl->tpl_vars['eb'] = new Smarty_Variable(5-$_smarty_tpl->tpl_vars['media']->value-$_smarty_tpl->tpl_vars['resto']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'eb', 0);?>
          <?php }?>
          
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['ep']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['ep']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-2x fa-star" ></i> <?php }
}
?>

          <?php if ($_smarty_tpl->tpl_vars['resto']->value != 0) {?> <i class="fa fa-2x fa-star-half-o"></i> <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['eb']->value > 0) {?>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['eb']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['eb']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-2x fa-star-o" aria-hidden="true"></i> <?php }
}
?>
 
          <?php }?>
          <p>Avaliado em <?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['media']->value);?>
 em 5 decorrente de <a href="#" data-toggle="modal" data-target="#avaliacoes"><?php echo sizeof($_smarty_tpl->tpl_vars['avaliacoes']->value);?>
 avaliações</a></p>
          </span> </header>
        <!--Comentários--> 
        <?php if (!empty($_smarty_tpl->tpl_vars['avaliacoes']->value)) {?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <?php if (!empty($_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value])) {?>
        <div class="row"> <span class="col-lg-9 col-md-9 col-xs-7"><strong><?php echo $_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value]['email_aluno'];?>
</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value]['data']);?>
</span> <span class="col-lg-3 col-md-3 col-xs-5 text-right"> <?php $_smarty_tpl->tpl_vars['na'] = new Smarty_Variable((5-$_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value]['nota']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'na', 0);?>
          <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value]['nota']+1 - (1) : 1-($_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value]['nota'])+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?> <i class="fa fa-1x fa-star" ></i> <?php }
}
?>

          <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['na']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['na']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?> <i class="fa fa-1x fa-star-o" aria-hidden="true"></i> <?php }
}
?>
 </span> <br>
          <br>
          <p class="col-lg-12 col-md-12 col-xs-12 text-justify"><?php echo $_smarty_tpl->tpl_vars['avaliacoes']->value[$_smarty_tpl->tpl_vars['i']->value]['comentario'];?>
</p>
        </div>
        <?php }?>
        <?php }
}
?>

        <?php } else { ?>
        <h4>Sem avaliações!</h4>
        <?php }?> 
        <!--Comentários--> 
      </article>
      <!--Classificação e avaliação--> 
    </session>
    <!--Conteudo--> 
    <!--Sidbar direita-->
    <aside class="col-md-3">
      <div id="painel"> 
        <!--Especificações do curso-->
        <div class="panel panel-default">
          <header class="panel-heading text-center">
            <h4>Especificações do curso</h4>
          </header>
          <div class="panel-body">
            <table class="table">
              <tr>
                <td><strong>Duração:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['carga_horaria'];?>
 hrs</td>
              </tr>
              <tr>
                <td><strong>Compromisso:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['compromisso'];?>
</td>
              </tr>
              <tr>
                <td><strong>Instituição:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['instituicao'];?>
</td>
              </tr>
              <tr>
                <td><strong>Assunto:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['categoria'];?>
</td>
              </tr>
              <tr>
                <td><strong>Nível:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nivel'];?>
</td>
              </tr>
              <tr>
                <td><strong>Licença:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['licenca'];?>
</td>
              </tr>
              <tr>
                <td><strong>Pré requisitos:</strong> <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['pre_requisito'];?>
</td>
              </tr>
            </table>
          </div>
        </div>
        <!--Especificações do curso--> 
        <!--Avaliação do aluno-->
        <div class="panel panel-default">
          <header class="panel-heading text-center">
            <h4>Classificação</h4>
          </header>
          <div class="panel-body text-center"> <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['ep']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['ep']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-2x fa-star" ></i> <?php }
}
?>

            <?php if ($_smarty_tpl->tpl_vars['resto']->value != 0) {?> <i class="fa fa-2x fa-star-half-o"></i> <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['eb']->value > 0) {?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['eb']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['eb']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-2x fa-star-o" aria-hidden="true"></i> <?php }
}
?>
 
            <?php }?>
            <p ><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['media']->value);?>
 de 5<br>
              <a href="#" data-toggle="modal" data-target="#avaliacoes"><?php echo sizeof($_smarty_tpl->tpl_vars['avaliacoes']->value);?>
 avaliações</a></p>
          </div>
        </div>
        <!--Avaliação do aluno--> 
        <?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['sessao']->value['tipo_usuario'] == 'aluno') {?>
        <?php if ($_smarty_tpl->tpl_vars['avaliado']->value) {?>
        <div class="navbar-form text-center">
          <div class="panel panel-default">
            <header class="panel-heading text-center">
              <h4>Sua avaliação</h4>
            </header>
            <div class="panel-body text-center"> <?php $_smarty_tpl->tpl_vars['na'] = new Smarty_Variable((5-$_smarty_tpl->tpl_vars['avaliado']->value[0]['nota']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'na', 0);?>
              <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['avaliado']->value[0]['nota']+1 - (1) : 1-($_smarty_tpl->tpl_vars['avaliado']->value[0]['nota'])+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?> <i class="fa fa-2x fa-star" ></i> <?php }
}
?>

              <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['na']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['na']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?> <i class="fa fa-2x fa-star-o" aria-hidden="true"></i> <?php }
}
?>

              <p class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['avaliado']->value[0]['email_aluno'];?>
</strong><br>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['avaliado']->value[0]['data']);?>
</p>
            </div>
          </div>
        </div>
        <?php } else { ?> <a href="#" data-toggle="modal" data-target="#avaliar" class="btn btn-lg btn-primary center-block">Avaliar o curso</a> <?php }?>
        <?php }?>
        <?php }?> </div>
      <!--painel--> 
    </aside>
    <!--Sidbar direita--> 
  </div>
  <!--/row--> 
</div>
<!--/container--> 
<!--Conteudo--> 
<!--Modal das avaliações-->
<div class="modal fade" id="avaliacoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title" id="myModalLabel">Avaliações de <?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
</h3>
      </div>
      <div class="modal-body">
        <article id="sec3">
          <header class="row"> <span class="col-lg-12 col-md-12 col-xs-7 text-right"> <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['ep']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['ep']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-2x fa-star" ></i> <?php }
}
?>

            <?php if ($_smarty_tpl->tpl_vars['resto']->value != 0) {?> <i class="fa fa-2x fa-star-half-o"></i> <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['eb']->value > 0) {?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['eb']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['eb']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-2x fa-star-o" aria-hidden="true"></i> <?php }
}
?>
 
            <?php }?>
            <p>Avaliado em <?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['media']->value);?>
 em 5 decorrente de <?php echo sizeof($_smarty_tpl->tpl_vars['avaliacoes']->value);?>
 avaliações</p>
            </span> </header>
          <!--Comentários--> 
          <?php if (!empty($_smarty_tpl->tpl_vars['avaliacoes']->value)) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['avaliacoes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_avaliacao_2_saved_item = isset($_smarty_tpl->tpl_vars['avaliacao']) ? $_smarty_tpl->tpl_vars['avaliacao'] : false;
$_smarty_tpl->tpl_vars['avaliacao'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['avaliacao']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['avaliacao']->value) {
$_smarty_tpl->tpl_vars['avaliacao']->_loop = true;
$__foreach_avaliacao_2_saved_local_item = $_smarty_tpl->tpl_vars['avaliacao'];
?>
          <hr>
          <div class="row"> <span class="col-lg-9 col-md-9 col-xs-7"><strong><?php echo $_smarty_tpl->tpl_vars['avaliacao']->value['email_aluno'];?>
</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['avaliacao']->value['data']);?>
</span> <span class="col-lg-3 col-md-3 col-xs-5 text-right"> <?php $_smarty_tpl->tpl_vars['na'] = new Smarty_Variable((5-$_smarty_tpl->tpl_vars['avaliacao']->value['nota']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'na', 0);?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['avaliacao']->value['nota']+1 - (1) : 1-($_smarty_tpl->tpl_vars['avaliacao']->value['nota'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-1x fa-star" ></i> <?php }
}
?>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['na']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['na']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> <i class="fa fa-1x fa-star-o" aria-hidden="true"></i> <?php }
}
?>
 </span> <br>
            <br>
            <p class="col-lg-12 col-md-12 col-xs-12 text-justify"><?php echo $_smarty_tpl->tpl_vars['avaliacao']->value['comentario'];?>
</p>
          </div>
          <?php
$_smarty_tpl->tpl_vars['avaliacao'] = $__foreach_avaliacao_2_saved_local_item;
}
if ($__foreach_avaliacao_2_saved_item) {
$_smarty_tpl->tpl_vars['avaliacao'] = $__foreach_avaliacao_2_saved_item;
}
?>
          <?php } else { ?>
          <h4>Sem avaliações!</h4>
          <?php }?> 
          <!--Comentários--> 
        </article>
        <!--Classificação e avaliação--> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!--Modal das avaliações--> 
<!--Modal do form das avaliações-->
<div class="modal fade" id="avaliar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title" id="myModalLabel">Deixe sua avaliação</h3>
      </div>
      <div class="modal-body">
         <form  method="POST" action="?ctrl=curso&ac=avaliarCurso&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="tab-content" autocomplete="off">
          <!--Nota-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label " for="nota">Sua nota</label>
            <div class="col-md-10 center-block">
             <input id="rating-system" type="number" name="nota" class="rating " min="1" max="5" step="1">
            </div>
          </fieldset>
          <!--Nota--> 
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="avaliacao">Avaliação</label>
            <div class="col-md-10">
              <textarea class="form-control" id="avaliacao" rows="13" name="avaliacao" placeholder="Faça sua avaliação" style="resize:none;" maxlength="400"></textarea>
            </div>
          </fieldset>
          <!--Comentario-->
          <ul class="list-inline pull-right">
            <li>
              <button class="btn btn-primary pull-left">Enviar</button>
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
<!--Modal do form das avaliações-->
<hr>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Script da sidebar e painel--> 
<?php echo '<script'; ?>
>
	$('#sidebar').affix({
	  offset: {
		top: 0
	  }
	});
	
	var $body   = $(document.body);
	var navHeight = $('.navbar').outerHeight(true) + 10;
	
	$body.scrollspy({
		target: '#leftCol',
		offset: navHeight
	});
	
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
