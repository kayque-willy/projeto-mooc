<?php
/* Smarty version 3.1.29, created on 2016-10-06 18:55:33
  from "/home/ubuntu/workspace/view/dashboard.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f69e258ba839_87416746',
  'file_dependency' => 
  array (
    '0ada36b48c8d33fffae25a44da57ac0652b571b0' => 
    array (
      0 => '/home/ubuntu/workspace/view/dashboard.html',
      1 => 1475780130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f69e258ba839_87416746 ($_smarty_tpl) {
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
        <!--Cursos dashboard-->
        <session class="col-sm-9 col-md-12 col-lg-12 main"> 
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
          <h1 class="page-header">Dashboard</h1>
          <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?><a class="btn btn-success" href="?ctrl=dashboardCurso&ac=cadastrar">Novo curso</a><?php }?>
          <div class="row "> 
           <?php if (empty($_smarty_tpl->tpl_vars['cursos']->value)) {?>
           	<hr>
            <br>
            <h4 class="text-center">Você não possui nenhum curso</h4>
           <?php } else { ?>
            <?php
$_from = $_smarty_tpl->tpl_vars['cursos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_curso_0_saved_item = isset($_smarty_tpl->tpl_vars['curso']) ? $_smarty_tpl->tpl_vars['curso'] : false;
$_smarty_tpl->tpl_vars['curso'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['curso']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->_loop = true;
$__foreach_curso_0_saved_local_item = $_smarty_tpl->tpl_vars['curso'];
?>
                <!--Curso-->
                 <article class="col-md-6 col-sm-6 col-xs-12">
                  <div class="row"> 
                    <div class="col-lg-6 col-md-6 col-xs-12">
                      <br>
                      <img class="img-responsive" src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
.jpg" width="250" height="250" alt="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
">
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-xs-12">
                      <h3><strong><?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
</strong></h3>
					  <?php if (!$_smarty_tpl->tpl_vars['admin']->value) {?>
                      <span class="text-nowrap"><strong>Concluído: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['curso']->value[0]['desempenho'])*100;?>
%</strong></span><br>
                      <?php }?>
                      <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['descricao_curta'];?>
<br></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                     <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                       <a href="?ctrl=dashboardCurso&ac=recuperar&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-primary">Editar curso</a> 
                       <a href="?ctrl=curso&ac=recuperarCurso&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-info">Ver curso</a> 
                     <?php } else { ?>
                     <a href="?ctrl=classroom&ac=pagina&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
&pagina=Pagina%20Inicial" class="btn btn-primary">Ver curso</a> 
                     <?php }?>
                      <button class="btn btn-default" data-toggle="popover<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" data-placement="top" data-trigger="focus" data-container="body" type="button" data-html="true"><i class="fa fa-cogs"></i></button> 
                      <!--Popover-->
                      <div id="popover-content<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="hide" > 
                      <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <a href="?ctrl=dashboardModulo&ac=modulos&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-primary center-block">Módulos</a><br>
                        <a href="?ctrl=dashboardPagina&ac=paginas&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-primary center-block">Páginas</a><br>
                        <a href="?ctrl=dashboardCurso&ac=excluir&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-danger center-block">Remover curso</a>
                      <?php } else { ?>
                          <a href="?ctrl=licao&ac=progresso&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-primary center-block">Consultar progresso</a><br>
                          <a href="?ctrl=curso&ac=cancelar&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
" class="btn btn-danger center-block">Cancelar inscrição</a>
                      <?php }?>
                      
                    </div>
                    <!--Popover--> 
                    </div>
                  </div>
                  <!--row--> 
                </article>
                <br>
                <!--Curso--> 
              <?php
$_smarty_tpl->tpl_vars['curso'] = $__foreach_curso_0_saved_local_item;
}
if ($__foreach_curso_0_saved_item) {
$_smarty_tpl->tpl_vars['curso'] = $__foreach_curso_0_saved_item;
}
?>
            <?php }?>
          </div>
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
 
<!--Opções do curso--> 
<?php echo '<script'; ?>
>
	<?php
$_from = $_smarty_tpl->tpl_vars['cursos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_curso_1_saved_item = isset($_smarty_tpl->tpl_vars['curso']) ? $_smarty_tpl->tpl_vars['curso'] : false;
$_smarty_tpl->tpl_vars['curso'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['curso']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->_loop = true;
$__foreach_curso_1_saved_local_item = $_smarty_tpl->tpl_vars['curso'];
?>
	  $("[data-toggle=popover<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
]").popover({
	  html: true, 
	  content: function() {
			return $("#popover-content<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
").html();
		  }
	  });
	  $(document).ready(function(){
		  $("[data-toggle=popover<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
").popover();
	  });
	<?php
$_smarty_tpl->tpl_vars['curso'] = $__foreach_curso_1_saved_local_item;
}
if ($__foreach_curso_1_saved_item) {
$_smarty_tpl->tpl_vars['curso'] = $__foreach_curso_1_saved_item;
}
echo '</script'; ?>
>
</body>
</html><?php }
}
