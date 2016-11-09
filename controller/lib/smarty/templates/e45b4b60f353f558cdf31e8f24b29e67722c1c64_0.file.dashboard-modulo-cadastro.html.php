<?php
/* Smarty version 3.1.29, created on 2016-10-06 19:07:03
  from "/home/ubuntu/workspace/view/dashboard-modulo-cadastro.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f6a0d7f286f8_67372807',
  'file_dependency' => 
  array (
    'e45b4b60f353f558cdf31e8f24b29e67722c1c64' => 
    array (
      0 => '/home/ubuntu/workspace/view/dashboard-modulo-cadastro.html',
      1 => 1475780816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f6a0d7f286f8_67372807 ($_smarty_tpl) {
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
                 <!--Cursos dashboard-->
                 <session class="col-sm-9 col-md-12 col-lg-12 main">
                    <h1 class="page-header">Novo do módulo </h1>
                    <form id="modulo" role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                       <?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value[0]['numero_curso'])) {?> 
                          <input type="hidden" name="numero_curso" value="<?php echo $_smarty_tpl->tpl_vars['modulo']->value[0]['numero_curso'];?>
"/>
                       <?php }?>
                      <legend>Dados do módulo</legend>
                      <!--Nome-->
                      <fieldset class="row form-group">
                        <label class="col-md-2 control-label pull-left" for="Nome">Nome do módulo</label>
                        <div class="col-md-10">
                          <input id="Nome" name="nome" type="text" placeholder="Nome do módulo" class="form-control input-md" <?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value[0]['nome'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['modulo']->value[0]['nome'];?>
" <?php }?>>
                        </div>
                      </fieldset>
                      <!--Nome-->
                      <!--Foto-->
                      <fieldset class="row form-group">
                        <label class="col-md-2 control-label" for="Foto">Foto</label>
                        <img class="col-md-2 img-rounded" src="<?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value[0]['imagem'])) {?> controller/temp/<?php echo $_smarty_tpl->tpl_vars['modulo']->value[0]['numero_curso'];?>
-<?php echo $_smarty_tpl->tpl_vars['modulo']->value[0]['nome'];?>
.jpg <?php } else { ?>http://www.freeiconspng.com/uploads/no-image-icon-13.png<?php }?>"  width="50"/><br>
                        <div class="col-md-8">
                          <input id="Foto" name="foto" class="input-file" type="file">
                        </div>
                      </fieldset>
                      <!--Foto--> 
                      <!--Video-->
                      <fieldset class="row form-group">
                        <label class="col-md-2 control-label pull-left" for="Nome">Video</label>
                        <div class="col-md-10">
                          <div class="row ">
                            	<?php if ($_smarty_tpl->tpl_vars['modulo']->value[0]['video'] != 'NULL' && !empty($_smarty_tpl->tpl_vars['modulo']->value[0]['video'])) {?>
                                <iframe width="560" height="315" src="<?php echo $_smarty_tpl->tpl_vars['modulo']->value[0]['video'];?>
" frameborder="0" allowfullscreen></iframe>
                              <?php } else { ?>
                                <img class="img-rounded" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Wikiversity-Mooc-Icon-Video.svg/2000px-Wikiversity-Mooc-Icon-Video.svg.png"  width="180"/> 
                              <?php }?>
                            <hr>
                            <div class="col-md-12">
                              <input id="video" name="video" type="text" placeholder="Url do video" class="form-control input-md"  <?php if ($_smarty_tpl->tpl_vars['modulo']->value[0]['video'] != 'NULL') {?> value="<?php echo $_smarty_tpl->tpl_vars['modulo']->value[0]['video'];?>
" <?php }?>>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!--Video--> 
                      <!--Descrição-->
                      <fieldset class="row form-group">
                        <label class="col-md-2 control-label pull-left" for="Nome">Descrição</label>
                        <div class="col-md-10">
                           <textarea class="form-control" id="descricao" rows="13" name="descricao" placeholder="Descrição do módulo" style="resize:none;"><?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value[0]['descricao'])) {
echo $_smarty_tpl->tpl_vars['modulo']->value[0]['descricao'];
}?></textarea>
                        </div>
                      </fieldset>
                      <!--Descrição-->
                      <!--Recursos-->
                      <fieldset class="row form-group">
                        <label class="col-md-2 control-label pull-left" >Recursos do módulo</label>
                        <div class="col-md-10">
                          <div class="form-group multiple-form-group">
                              <?php if ((!empty($_smarty_tpl->tpl_vars['recursos']->value)) && ($_smarty_tpl->tpl_vars['cont']->value > 1)) {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['recursos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_recurso_0_saved_item = isset($_smarty_tpl->tpl_vars['recurso']) ? $_smarty_tpl->tpl_vars['recurso'] : false;
$_smarty_tpl->tpl_vars['recurso'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['recurso']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['recurso']->value) {
$_smarty_tpl->tpl_vars['recurso']->_loop = true;
$__foreach_recurso_0_saved_local_item = $_smarty_tpl->tpl_vars['recurso'];
?>
                                	<div class="form-group input-group">
                                        <input name="rec[]" class="form-control" rows="3" placeholder="Nome do recurso" value="<?php echo $_smarty_tpl->tpl_vars['recurso']->value['nome_recurso'];?>
">
                                        <hr>
                                        <input name="rec_link[]" class="form-control" rows="3" placeholder="Url" value="<?php echo $_smarty_tpl->tpl_vars['recurso']->value['recurso'];?>
">
                                        <span class="input-group-btn ">
                                          <button type="button" class="btn btn-success btn-danger btn-remove"><i class="glyphicon glyphicon-minus"></i></button>
                                        </span>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['recurso'] = $__foreach_recurso_0_saved_local_item;
}
if ($__foreach_recurso_0_saved_item) {
$_smarty_tpl->tpl_vars['recurso'] = $__foreach_recurso_0_saved_item;
}
?>
                              <?php }?>
                              <div class="form-group input-group">
                                  <input name="rec[]" class="form-control" rows="3" placeholder="Nome do recurso" <?php if (!empty($_smarty_tpl->tpl_vars['cont']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['cont']->value == 1) {?> value="<?php echo $_smarty_tpl->tpl_vars['recursos']->value[0]['nome_recurso'];?>
" <?php }?> <?php }?>>
                                  <hr>
                                  <input name="rec_link[]" class="form-control" rows="3" placeholder="Url" <?php if (!empty($_smarty_tpl->tpl_vars['cont']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['cont']->value == 1) {?> value="<?php echo $_smarty_tpl->tpl_vars['recursos']->value[0]['recurso'];?>
" <?php }?> <?php }?>>
                                  <span class="input-group-btn ">
                                    <button type="button" class="btn btn-default btn-add btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                                  </span>
                              </div>
                        	</div>
                        </div>
                      </fieldset>
                      <!--Recursos-->
                      <!--Enviar-->  
                      <ul class="list-inline pull-right">
                        <li>
                          <button type="button" class="btn btn-primary" onClick='window.location.replace("?ctrl=dashboardModulo&ac=modulos&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
");'>Cancelar</button>
                        </li>
                        <li>
                          <button type="submit" class="btn btn-primary btn-success">Salvar</button>
                        </li>
                      </ul>
                      <!--Enviar-->  
                    </form>
                 </session>
                 <!--Cursos dashboard-->
                </div>
            </div>
        </div>
    </div>
    <!--Conteúdo-->
    <hr>
   <hr>
   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Campos múltiplos-->
<?php echo '<script'; ?>
 type="text/javascript">
(function ($) {
    $(function () {

        var addFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
            var $formGroupClone = $formGroup.clone();

            $(this)
                .toggleClass('btn-default btn-add btn-danger btn-remove')
                .html('<i class="glyphicon glyphicon-minus"></i>');

            $formGroupClone.find('input').val('');
            $formGroupClone.insertAfter($formGroup);

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', true);
            }
        };

        var removeFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', false);
            }

            $formGroup.remove();
        };

        var countFormGroup = function ($form) {
            return $form.find('.form-group').length;
        };

        $(document).on('click', '.btn-add', addFormGroup);
        $(document).on('click', '.btn-remove', removeFormGroup);

    });
})(jQuery);
<?php echo '</script'; ?>
>
<!--Campos múltiplos-->
</body>
</html><?php }
}
