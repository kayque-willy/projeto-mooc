<?php
/* Smarty version 3.1.29, created on 2016-10-01 01:01:37
  from "D:\xampp\www\mooc\view\dashboard-conteudo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57eeeed163ae44_12421343',
  'file_dependency' => 
  array (
    'b2cf9d3ee75ecfb1db084b6a9f3630322be204dd' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\dashboard-conteudo.html',
      1 => 1475274841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57eeeed163ae44_12421343 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/dashboard-licao.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <!--Conteúdo-->
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row main">
        <section class="col-sm-9 col-md-12 col-lg-12 wizard">
          <h2 class="text-center">Modulo <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</h2>
          <h1 class="text-center">Conteúdo da lição <?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
</h1>
           <!--Conteúdo-->
              <a href="?ctrl=dashboardLicao&ac=cadastrarConteudo&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-success pull-left">Adicionar conteúdo</a><br><br>
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
              <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                  <thead>
                      <tr >                           
                          <th class="text-center">Nome</th>
                          <th class="text-center">Tipo</th>
                          <th class="text-center">Visualização</th>
                          <th class="text-center">Ação</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                      <?php if (!empty($_smarty_tpl->tpl_vars['conteudo']->value)) {?>
                       <?php
$_from = $_smarty_tpl->tpl_vars['conteudo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cont_0_saved_item = isset($_smarty_tpl->tpl_vars['cont']) ? $_smarty_tpl->tpl_vars['cont'] : false;
$_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cont']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cont']->value) {
$_smarty_tpl->tpl_vars['cont']->_loop = true;
$__foreach_cont_0_saved_local_item = $_smarty_tpl->tpl_vars['cont'];
?>
                          <tr>
                              <td><strong><?php echo $_smarty_tpl->tpl_vars['cont']->value['conteudo'];?>
</strong></td>
                              <td class="text-center">
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'video') {?>
                                <i class="fa fa-2x fa-video-camera"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'pdf') {?>
                                <i class="fa fa-2x fa-file-pdf-o"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'audio') {?>
                                <i class="fa fa-2x fa-file-audio-o"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'imagem') {?>
                                <i class="fa fa-2x fa-picture-o"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'slide') {?>
                                <i class="fa fa-2x fa-slideshare"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'jogo') {?>
                                <i class="fa fa-2x fa-gamepad"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'quiz') {?>
                                <i class="fa fa-2x fa-question-circle-o"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['cont']->value['tipo'] == 'faq') {?>
                                <i class="fa fa-2x fa-commenting-o"></i>
                                <?php }?>
                              </td>
                              <td>
                              <?php echo $_smarty_tpl->tpl_vars['cont']->value['texto'];?>

                              </td>
                              <td>
                              <a 
                              href="?ctrl=dashboardLicao&ac=recuperarConteudo&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
&conteudo=<?php echo $_smarty_tpl->tpl_vars['cont']->value['conteudo'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-primary glyphicon glyphicon-edit"> Editar</a>
                              <a href="?ctrl=dashboardLicao&ac=excluirConteudo&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
&conteudo=<?php echo $_smarty_tpl->tpl_vars['cont']->value['conteudo'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-danger glyphicon glyphicon-remove"> Remover</a>
                              </td>
                          </tr>
                        <?php
$_smarty_tpl->tpl_vars['cont'] = $__foreach_cont_0_saved_local_item;
}
if ($__foreach_cont_0_saved_item) {
$_smarty_tpl->tpl_vars['cont'] = $__foreach_cont_0_saved_item;
}
?>
                      <?php } else { ?>
                      <tr>
                          <td><strong>Sem conteúdo</strong></td>
                          <td class="text-center">
                          </td>
                          <td>
                          	A lição não possui nenhum conteúdo cadastrado!
                          </td>
                          <td>
                          </td>
                      </tr>
                      <?php }?>
                  </tbody>
              </table>
              <!--Conteúdo-->
        </section>
      </div>
    </div>
  </div>
  <!--Conteúdo-->
  <hr>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</body>
</html><?php }
}
