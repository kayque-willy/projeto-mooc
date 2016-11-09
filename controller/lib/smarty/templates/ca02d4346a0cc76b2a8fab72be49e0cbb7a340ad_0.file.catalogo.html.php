<?php
/* Smarty version 3.1.29, created on 2016-10-06 17:39:01
  from "/home/ubuntu/workspace/view/catalogo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f68c353d14d7_73503740',
  'file_dependency' => 
  array (
    'ca02d4346a0cc76b2a8fab72be49e0cbb7a340ad' => 
    array (
      0 => '/home/ubuntu/workspace/view/catalogo.html',
      1 => 1475775538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57f68c353d14d7_73503740 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/catalogo.css"/>
  <link rel="stylesheet" href="view/css/dashboard.css"/>
  <link rel="stylesheet" href="view/css/dashboard-form.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  <hr>
  <!--Conteudo da pagina-->
  <div class="container-fluid">
      <div class="row">
        <h2 class="text-center">Catálogo de cursos</h2>
        <hr>
      </div>
      <div class="row">
        <!--Menu lateral-->
        <aside class="col-lg-3 col-md-6 col-md-offset-3 col-lg-offset-0">
          <div class="well">
            <h3 class="text-center">Filtre sua busca</h3>
              <div class="form-group">
                <h4 for="location1" class="control-label text-center">Categoria</h4>
                	<ul class="list-group">
                	<?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categoria_0_saved_item = isset($_smarty_tpl->tpl_vars['categoria']) ? $_smarty_tpl->tpl_vars['categoria'] : false;
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$__foreach_categoria_0_saved_local_item = $_smarty_tpl->tpl_vars['categoria'];
?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['categoria']->value['categoria'])) {?>
                            	<a href="?ctrl=curso&ac=categoria&categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><li class="list-group-item <?php if (!empty($_smarty_tpl->tpl_vars['cat']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['cat']->value == $_smarty_tpl->tpl_vars['categoria']->value['categoria']) {?> active <?php }?> <?php }?>"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</li></a>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_local_item;
}
if ($__foreach_categoria_0_saved_item) {
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_item;
}
?>
                    </ul>
                    <a class="btn btn-primary center-block" href="?ctrl=curso&ac=categoria">Ver todas as categorias</a>
                    <?php } else { ?>
                        &nbsp;&nbsp;&nbsp;Sem categorias
                    <?php }?>  
              </div>
              <hr>
              <div class="form-group">
                <h4 for="type1" class="control-label text-center">Escolaridade</h4>
                <ul class="list-group">
                	<a href="?ctrl=curso&ac=catalogo&escolaridade=fundamental"><li class="list-group-item <?php if (!empty($_smarty_tpl->tpl_vars['esc']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['esc']->value == 'fundamental') {?> active <?php }?> <?php }?>">fundamental</li></a>
                    <a href="?ctrl=curso&ac=catalogo&escolaridade=médio"><li class="list-group-item  <?php if (!empty($_smarty_tpl->tpl_vars['esc']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['esc']->value == 'médio') {?> active <?php }?> <?php }?>">médio</li></a>
                    <a href="?ctrl=curso&ac=catalogo&escolaridade=superior"><li class="list-group-item  <?php if (!empty($_smarty_tpl->tpl_vars['esc']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['esc']->value == 'superior') {?> active <?php }?> <?php }?>">superior</li></a>
                    <a href="?ctrl=curso&ac=catalogo&escolaridade=tecnico"><li class="list-group-item  <?php if (!empty($_smarty_tpl->tpl_vars['esc']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['esc']->value == 'tecnico') {?> active <?php }?> <?php }?>">tecnico</li></a>
                </ul>
              </div>
          </div>
        </aside>
        <!--Menu lateral-->
        <!--Cursos-->
        <session class="col-lg-9 col-md-12">
          <h3 class="text-center">Todos os cursos</h3>
          <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cont', 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['cursos']->value)) {?>
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
                    <?php if ($_smarty_tpl->tpl_vars['cont']->value++%3 == 0 || $_smarty_tpl->tpl_vars['cont']->value == 0) {?> <div class="row"> <?php }?>
                    <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="thumbnail well"> 
                        <img src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['curso']->value['numero'];?>
.jpg" alt="Curso" class="img-responsive" width="400" height="200">
                        <div class="caption">
                          <h3><?php echo $_smarty_tpl->tpl_vars['curso']->value['nome'];?>
</h3>
                          <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['curso']->value['descricao_curta'];?>
</p>
                          <hr>
                          <a href="?ctrl=curso&ac=recuperarCurso&curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value['numero'];?>
" class="btn btn-info" role="button">Ir para o curso</a>
                        </div>
                      </div>
                    </article>
                    <?php if ($_smarty_tpl->tpl_vars['cont']->value%3 == 0 || $_smarty_tpl->tpl_vars['cont']->value == 0) {?> </div> <?php }?>
                <?php
$_smarty_tpl->tpl_vars['curso'] = $__foreach_curso_1_saved_local_item;
}
if ($__foreach_curso_1_saved_item) {
$_smarty_tpl->tpl_vars['curso'] = $__foreach_curso_1_saved_item;
}
?>
            <?php } else { ?>
            	<br>
                <h4 class="text-center">Nenhum curso cadastrado!</h4>
            <?php }?>
         
        </session>
        <!--Cursos-->
      </div><!--row-->
  </div><!--container-->
  <!--Conteudo da pagina-->
  <hr>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
