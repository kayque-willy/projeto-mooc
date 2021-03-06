<?php
/* Smarty version 3.1.29, created on 2016-10-06 18:58:13
  from "/home/ubuntu/workspace/view/dashboard-licao.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f69ec5cb1633_30597215',
  'file_dependency' => 
  array (
    'afbf001de1dc2b3c9aa5437a49cde0e1cca07eaa' => 
    array (
      0 => '/home/ubuntu/workspace/view/dashboard-licao.html',
      1 => 1475717484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f69ec5cb1633_30597215 ($_smarty_tpl) {
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
                    <h1 class="page-header">Lições do módulo <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</h1>
                   	 	<a href="?ctrl=dashboardLicao&ac=cadastrar&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-success pull-left">Adicionar Lição</a><br><br>
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
                                   
                                  	<th class="text-center">Visualização</th>
                                    <th class="text-center">Ação</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($_smarty_tpl->tpl_vars['licoes']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['licoes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_licao_0_saved_item = isset($_smarty_tpl->tpl_vars['licao']) ? $_smarty_tpl->tpl_vars['licao'] : false;
$_smarty_tpl->tpl_vars['licao'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['licao']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['licao']->value) {
$_smarty_tpl->tpl_vars['licao']->_loop = true;
$__foreach_licao_0_saved_local_item = $_smarty_tpl->tpl_vars['licao'];
?>
                                        <tr>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
</strong></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['licao']->value['resumo'];?>
</td>
                                        <td>
                                        <a href="?ctrl=dashboardLicao&ac=recuperar&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-primary glyphicon glyphicon-edit"> Editar</a>
                                        <a href="?ctrl=dashboardLicao&ac=excluir&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="btn btn-danger glyphicon glyphicon-remove"> Remover</a>
                                        <a class="btn btn-md btn-success" href="?ctrl=dashboardLicao&ac=conteudo&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
"><i class="fa fa-pencil-square-o"></i> Conteúdo</a>
                                        </td>
                                    </tr>
                                    <?php
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_0_saved_local_item;
}
if ($__foreach_licao_0_saved_item) {
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_0_saved_item;
}
?>
                                <?php } else { ?>
                              		 <tr>
                                        <td><strong>Não existem lições cadastradas neste módulo!!</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php }?> 
                            </tbody>
                        </table>
                        
                 </session>
                 <!--Paginas dashboard-->
             
        </div>
    </div>
    <!--Conteúdo-->
    <hr>
   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</body>
</html><?php }
}
