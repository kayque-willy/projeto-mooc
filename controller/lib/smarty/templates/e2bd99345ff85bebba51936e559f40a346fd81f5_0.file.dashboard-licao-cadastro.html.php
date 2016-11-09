<?php
/* Smarty version 3.1.29, created on 2016-09-21 23:06:46
  from "D:\xampp\www\mooc\view\dashboard-licao-cadastro.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57e2f666984833_45188568',
  'file_dependency' => 
  array (
    'e2bd99345ff85bebba51936e559f40a346fd81f5' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\dashboard-licao-cadastro.html',
      1 => 1474492004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57e2f666984833_45188568 ($_smarty_tpl) {
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
          <h1 class="text-center">Administração das lições</h1>
          <!--Formulário-->
          <form id="curso" role="form" method="POST" action="" class="" autocomplete="off">
              <legend>Dados da lição <?php if (!empty($_smarty_tpl->tpl_vars['licao']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['licao']->value[0]['nome'];?>
 <?php }?></legend>
               <?php if (!empty($_smarty_tpl->tpl_vars['licao']->value[0])) {?> <input type="hidden" name="curso" value="<?php echo $_smarty_tpl->tpl_vars['licao']->value[0]['numero_curso'];?>
"> <?php }?>
               <?php if (!empty($_smarty_tpl->tpl_vars['licao']->value[0])) {?> <input type="hidden" name="modulo" value="<?php echo $_smarty_tpl->tpl_vars['licao']->value[0]['nome_modulo'];?>
"> <?php }?> 
               <?php if (!empty($_smarty_tpl->tpl_vars['licao']->value[0])) {?> <input type="hidden" name="licao" value="<?php echo $_smarty_tpl->tpl_vars['licao']->value[0]['nome'];?>
"> <?php }?> 
              <!--Nome-->
              <fieldset class="row">
                <label class="col-md-2 control-label pull-left" for="nome">Título</label>
                <div class="col-md-10">
                  <input id="Nome" name="nome" type="text" placeholder="Título da lição" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['licao']->value[0])) {?> value="<?php echo $_smarty_tpl->tpl_vars['licao']->value[0]['nome'];?>
" <?php }?>>
                </div>
              </fieldset>
              <!--Nome--> 
              <br>
              <!--Resumo-->
              <fieldset class="row">
                <label class="col-md-2 control-label pull-left" name="resumo" for="Resumo">Resumo</label>
                <div class="col-md-10">
                  <textarea id="resumo" name="resumo" type="text" placeholder="Resumo geral" class="form-control input-md" required rows="10" style="resize:none"><?php if (!empty($_smarty_tpl->tpl_vars['licao']->value[0])) {?> <?php echo $_smarty_tpl->tpl_vars['licao']->value[0]['resumo'];?>
 <?php }?></textarea>
                </div>
              </fieldset>
              <!--Resumo--> 
              <br>
              <!--Salvar-->
              <ul class="list-inline pull-right">
                <li>
                  <button type="submit" class="btn btn-primary next-step">Salvar</button>
                </li>
              </ul>
              <!--Salvar-->
            <div class="clearfix"></div>
          </form>
          <!--Formulário--> 
        </section>
      </div>
    </div>
  </div>
  <!--Conteúdo-->
  <hr>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Formulario do curso--> 
<?php echo '<script'; ?>
>
	$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
<?php echo '</script'; ?>
> 
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
