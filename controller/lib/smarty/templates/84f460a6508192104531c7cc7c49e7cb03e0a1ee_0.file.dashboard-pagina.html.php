<?php
/* Smarty version 3.1.29, created on 2016-09-16 03:19:47
  from "D:\xampp\www\mooc\view\dashboard-pagina.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57db48b37af095_11055078',
  'file_dependency' => 
  array (
    '84f460a6508192104531c7cc7c49e7cb03e0a1ee' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\dashboard-pagina.html',
      1 => 1473988772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57db48b37af095_11055078 ($_smarty_tpl) {
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
                 <!--Paginas dashboard-->
                 <session class="col-sm-9 col-md-12 col-lg-12 main">
                    <h1 class="page-header">Paginas</h1>
                   	 	<a href="?ctrl=dashboardPagina&ac=cadastrar&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-success pull-right">Adicionar pagina</a><br><br>
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
                       <?php if (!$_smarty_tpl->tpl_vars['pagina_inicial']->value || !$_smarty_tpl->tpl_vars['programa_estudo']->value) {?>
                            <div class="alert alert-info"> 
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                              A <strong>pagina inicial</strong> e a pagina de <strong>programa de estudo</strong> são obrigatórias!<br>Adicione-as para que o curso seja publicado.
                            </div>
                        <?php }?>
                        <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                            <thead>
                                <tr >                           
                                    <th class="text-center">Título</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
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
                                  <tr>
                                      <td><strong><?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
</strong></td>
                                      <td>
                                      <a href="?ctrl=dashboardPagina&ac=recuperar&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['pagina']->value['numero_curso'];?>
" class="btn btn-primary glyphicon glyphicon-edit"> Editar</a>
                                      <a href="?ctrl=dashboardPagina&ac=excluir&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['pagina']->value['numero_curso'];?>
" class="btn btn-danger glyphicon glyphicon-remove"> Remover</a>
                                      </td>
                                  </tr>
                                <?php
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_local_item;
}
if ($__foreach_pagina_0_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_item;
}
?>
                             <?php }?>
                             <?php if (!$_smarty_tpl->tpl_vars['pagina_inicial']->value) {?>
                             	 <tr>
                                      <td><strong>Pagina Inicial</strong></td>
                                      <td>
                                      <a href="?ctrl=dashboardPagina&ac=cadastrar&pagina=Pagina Inicial&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-success glyphicon glyphicon-edit"> Adicionar</a>
                                      </td>
                                  </tr>
                             <?php }?>
                             <?php if (!$_smarty_tpl->tpl_vars['programa_estudo']->value) {?>
                                  <tr>
                                      <td><strong>Programa de estudo</strong></td>
                                      <td>
                                      <a href="?ctrl=dashboardPagina&ac=cadastrar&pagina=Programa de estudo&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-success glyphicon glyphicon-edit"> Adicionar</a>
                                      </td>
                                  </tr>
                             <?php }?>
                            </tbody>
                        </table>
                        
                        
                 </session>
                 <!--Paginas dashboard-->
                </div>
            </div>
        </div>
    </div>
    <!--Conteúdo-->
    <hr>
    <!--Rodapé-->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</body>
</html><?php }
}
