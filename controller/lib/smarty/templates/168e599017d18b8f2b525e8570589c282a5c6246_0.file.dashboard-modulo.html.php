<?php
/* Smarty version 3.1.29, created on 2016-10-06 22:59:19
  from "/home/ubuntu/workspace/view/dashboard-modulo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f6d747b52317_82616403',
  'file_dependency' => 
  array (
    '168e599017d18b8f2b525e8570589c282a5c6246' => 
    array (
      0 => '/home/ubuntu/workspace/view/dashboard-modulo.html',
      1 => 1475794758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f6d747b52317_82616403 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/dashboard-form.css"/>
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
                 <!--Cursos dashboard-->
                 <session class="col-sm-9 col-md-12 col-lg-12 main">
                    <h1 class="page-header">Módulos do curso</h1>
                    <a href="?ctrl=dashboardModulo&ac=cadastrar&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-success">Novo módulo</a>
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
                    		 <!--Módulo-->
                            <article class="panel panel-default">
                              <header class="panel-heading">
                                <h3><?php echo $_smarty_tpl->tpl_vars['modulo']->value['nome'];?>
</h3>
                                <a class="btn btn-md btn-primary" href="?ctrl=dashboardModulo&ac=recuperar&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['nome'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['numero_curso'];?>
">Editar</a>
                                <a class="btn btn-md btn-danger" href="?ctrl=dashboardModulo&ac=excluir&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['nome'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['numero_curso'];?>
">Excluir</a>
                                <a class="btn btn-md btn-success" href="?ctrl=dashboardLicao&ac=licoes&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['nome'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['modulo']->value['numero_curso'];?>
"><i class="fa fa-pencil-square-o"></i> Lições</a>
                              </header>
                              <div class="panel-body">
                              <p><?php echo $_smarty_tpl->tpl_vars['modulo']->value['descricao'];?>
</p>
                                <p>
                                <?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value['licoes'])) {?>
                                 <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['modulo']->value['licoes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_licao_1_saved_item = isset($_smarty_tpl->tpl_vars['licao']) ? $_smarty_tpl->tpl_vars['licao'] : false;
$_smarty_tpl->tpl_vars['licao'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['licao']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['licao']->value) {
$_smarty_tpl->tpl_vars['licao']->_loop = true;
$__foreach_licao_1_saved_local_item = $_smarty_tpl->tpl_vars['licao'];
?>
                                     <li><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
</li>
                                    <?php
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_1_saved_local_item;
}
if ($__foreach_licao_1_saved_item) {
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_1_saved_item;
}
?> 
                                 </ul>
                                 
                                <?php }?>
                                </p>
                              </div>
                            </article>
                            <!--Módulo-->
                    	<?php
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_0_saved_local_item;
}
if ($__foreach_modulo_0_saved_item) {
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_0_saved_item;
}
?>
                    <?php }?>
                 </session>
                 <!--Cursos dashboard-->
                </div>
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
