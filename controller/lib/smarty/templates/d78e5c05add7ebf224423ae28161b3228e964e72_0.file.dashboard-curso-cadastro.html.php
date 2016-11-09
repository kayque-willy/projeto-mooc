<?php
/* Smarty version 3.1.29, created on 2016-09-27 16:55:47
  from "D:\xampp\www\mooc\view\dashboard-curso-cadastro.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ea88733b8188_84702254',
  'file_dependency' => 
  array (
    'd78e5c05add7ebf224423ae28161b3228e964e72' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\dashboard-curso-cadastro.html',
      1 => 1474988143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57ea88733b8188_84702254 ($_smarty_tpl) {
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
<link rel="stylesheet" href="view/css/dashboard-curso.css"/>
<!--Icones-->
<link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Conteúdo-->
<div class="container-fluid">
  <div class="row main">
    <section class="col-sm-9 col-md-12 col-lg-12 wizard">
      <h1 class="text-center">Administração de curso</h1>
      <!--Navegação-->
      <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">
          <!--Passo-->
          <li role="presentation" class="active"> 
          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1"> 
          <span class="round-tab"> 
          <i class="glyphicon glyphicon-folder-open"></i> 
          </span> 
          </a> 
          </li>
          <!--Passo--> 
          <!--Passo-->
          <li role="presentation" > <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2"> <span class="round-tab"> <i class="glyphicon glyphicon-pencil"></i> </span> </a> </li>
          <!--Passo--> 
          <!--Passo-->
          <li role="presentation"> <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3"> <span class="round-tab"> <i class="glyphicon glyphicon-pencil"></i> </span> </a> </li>
          <!--Passo--> 
          <!--Passo-->
          <li role="presentation" > <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete"> <span class="round-tab"> <i class="glyphicon glyphicon-ok"></i> </span> </a> </li>
          <!--Passo-->
        </ul>
      </div>
      <!--Navegação--> 
      <!--Formulário-->
      <form id="curso" role="form" method="POST" action="#" class="tab-content" autocomplete="off" enctype="multipart/form-data">
        <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['numero'])) {?> 
        	<input type="hidden" name="numero" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
"/>
        <?php }?>
        <!--Etapa-->
        <div class="tab-pane active" role="tabpanel" id="step1">
          <legend>Dados do curso</legend>
          <!--Nome-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Nome do curso</label>
            <div class="col-md-10">
              <input id="Nome" name="nome" type="text" 
              placeholder="Nome do curso" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['nome'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
" <?php }?> >
            </div>
          </fieldset>
          <!--Nome--> 
          <!--Foto-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label" for="Foto">Foto</label>
            <img class="col-md-2 img-rounded" src="<?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['imagem'])) {?> controller/temp/<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['numero'];?>
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
                <div class="col-md-12 form-group"> 
                	<?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['video'])) {?>
                    <iframe width="560" height="315" src="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['video'];?>
" frameborder="0" allowfullscreen></iframe>
                    <?php } else { ?>
                    <img class="img-rounded" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Wikiversity-Mooc-Icon-Video.svg/2000px-Wikiversity-Mooc-Icon-Video.svg.png"  width="180"/> 
                    <?php }?>  
                </div>
                <hr>
                <div class="col-md-12">
                  <input id="video" name="video" type="text" placeholder="Url do video" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['video'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['video'];?>
" <?php }?>>
                </div>
              </div>
            </div>
          </fieldset>
          <!--Video--> 
          <!--Licença-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Licença</label>
            <div class="col-md-10 cc-selector">
              <div class="row">
                <div class="col-md-2">
                  <input id="L1" type="radio" name="licenca" value="CC BY" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'])) {?> 
                  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'] == "CC BY") {?> checked <?php }
}?>/>
                  <label class="drinkcard-cc L1" for="L1" ></label>
                </div>
                <div class="col-md-3">
                  <input id="L2" type="radio" name="licenca" value="CC BY-SA" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'])) {?> 
                  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'] == "CC BY-SA") {?> checked <?php }
}?> />
                  <label class="drinkcard-cc L2" for="L2"></label>
                  <br>
                  <input id="L3" type="radio" name="licenca" value="CC BY-ND" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'])) {?> 
                  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'] == "CC BY-ND") {?> checked <?php }
}?> />
                  <label class="drinkcard-cc L3" for="L3"></label>
                  <br>
                  <input id="L4" type="radio" name="licenca" value="CC BY-NC" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'])) {?> 
                  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'] == "CC BY-NC") {?> checked <?php }
}?>/>
                  <label class="drinkcard-cc L4" for="L4"></label>
                </div>
                <div class="col-md-7">
                  <input id="L5" type="radio" name="licenca" value="CC BY-NC-SA" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'])) {?> 
                  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'] == "CC BY-NC-SA") {?> checked <?php }
}?>/>
                  <label class="drinkcard-cc L5" for="L5"></label>
                  <br>
                  <input id="L6" type="radio" name="licenca" value="CC BY-NC-ND" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'])) {?> 
                  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['licenca'] == "CC BY-NC-ND") {?> checked <?php }
}?> />
                  <label class="drinkcard-cc L6" for="L6"></label>
                </div>
              </div>
            </div>
          </fieldset>
          <!--Licença--> 
          <!--Categoria-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Categoria</label>
            <div class="col-md-10">
              <input id="categoria" name="categoria" type="text" placeholder="Categoria do curso" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['categoria'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['categoria'];?>
" <?php }?>>
            </div>
          </fieldset>
          <!--Categoria--> 
          <!--Instituição-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Instituição</label>
            <div class="col-md-10">
              <input id="instituicao" name="instituicao" type="text" placeholder="Instituição" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['instituicao'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['instituicao'];?>
" <?php }?>>
            </div>
          </fieldset>
          <!--Instituição--> 
          <!--Descrição-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Descricao_curta">Descrição curta</label>
            <div class="col-md-10">
              <textarea class="form-control" id="descricao" rows="13" name="descricao_curta" placeholder="Descrição curta" style="resize:none;" maxlength="400"><?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['descricao_curta'])) {
echo $_smarty_tpl->tpl_vars['curso']->value[0]['descricao_curta'];
}?></textarea>
            </div>
          </fieldset>
          <!--Descrição--> 
          <!--Próximo passo-->
          <ul class="list-inline pull-right">
            <li>
              <button type="button" class="btn btn-primary next-step">Salvar e continuar</button>
            </li>
          </ul>
          <!--Próximo passo--> 
        </div>
        <!--Etapa--> 
        <!--Etapa-->
        <div class="tab-pane" role="tabpanel" id="step2">
          <legend>Perfil do aluno</legend>
          <!--Pré-requisitos-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Pré-requisitos</label>
            <div class="col-md-10">
              <input id="pre-requisitos" name="pre-requisitos" type="text" placeholder="Pré-requisitos" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['pre_requisito'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['pre_requisito'];?>
" <?php }?>>
            </div>
          </fieldset>
          <!--Pré-requisitos--> 
          <!--Nível-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Nível</label>
            <div class="col-md-10">
              <select class="form-control" name=nivel>
                 <option <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'])) {?> <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'] == 'fundamental') {?>selected<?php }
}?>>fundamental</option>
                <option <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'])) {?> <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'] == 'médio') {?>selected<?php }
}?>>médio</option>
                <option <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'])) {?> <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'] == 'técnico') {?>selected<?php }
}?>>técnico</option>
                <option <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'])) {?> <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['nivel'] == 'superior') {?>selected<?php }
}?>>superior</option>
              </select>
            </div>
          </fieldset>
          <!--Nível--> 
          <!--Compromisso-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Compromisso</label>
            <div class="col-md-10">
              <input id="compromisso" name="compromisso" type="text" placeholder="Compromisso" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['compromisso'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['compromisso'];?>
" <?php }?>>
            </div>
          </fieldset>
          <!--Compromisso--> 
          <!--Carga horária-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="Nome">Carga horária</label>
            <div class="col-md-10">
              <input id="ch" name="ch" type="number" placeholder="Carga horária em numero de horas" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['carga_horaria'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['carga_horaria'];?>
" <?php }?>>
            </div>
          </fieldset>
          <!--Carga horária--> 
          <!--Próximo passo-->
          <ul class="list-inline pull-right">
            <li>
              <button type="button" class="btn btn-default prev-step">Anterior</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary next-step">Salvar e continuar</button>
            </li>
          </ul>
          <!--Próximo passo--> 
        </div>
        <!--Etapa--> 
        <!--Etapa-->
        <div class="tab-pane" role="tabpanel" id="step3">
          <legend>Detalhes do curso</legend>
          <!--Descrição-->
          <fieldset class="row form-group">
            <label class="col-md-12 control-label pull-left" for="Nome">Descrição</label>
            <div class="col-md-12">
              <textarea class="form-control" id="descricao" rows="13" name="descricao" placeholder="Descrição" style="resize:none;"><?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['descricao'])) {
echo $_smarty_tpl->tpl_vars['curso']->value[0]['descricao'];
}?></textarea>
            </div>
          </fieldset>
          <!--Descrição--> 
          <!--Conteúdo programático-->
          <fieldset class="row form-group">
            <label class="col-md-12 control-label pull-left" for="Nome">Conteúdo programático</label>
            <div class="col-md-12">
              <textarea class="form-control" id="cp" rows="13" name="cp" placeholder="Conteúdo programático do curso" style="resize:none;"><?php if (!empty($_smarty_tpl->tpl_vars['curso']->value[0]['conteudo_programatico'])) {
echo $_smarty_tpl->tpl_vars['curso']->value[0]['conteudo_programatico'];
}?></textarea>
            </div>
          </fieldset>
          <!--Conteúdo programático--> 
          <!--FAQ-->
          <fieldset class="row form-group">
            <div class="col-md-12">
              <div class="form-group multiple-form-group">
                <label>Perguntas frequentes</label>
                <?php if (!empty($_smarty_tpl->tpl_vars['FAQ']->value) || !empty($_smarty_tpl->tpl_vars['FAQ_last']->value)) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['FAQ']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_0_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_0_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
                        <div class="form-group input-group">
                      <textarea name="faq[]" class="form-control" rows="3" placeholder="Pergunta" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value['pergunta'];?>
</textarea>
                      <br>
                      <hr>
                      <br>
                      <textarea name="resp[]" class="form-control" rows="3" placeholder="Resposta" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value['resposta'];?>
</textarea>
                      <span class="input-group-btn ">
                      <button type="button" class="btn btn-success btn-danger btn-remove"><i class="glyphicon glyphicon-minus"></i></button>
                      </span> 
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_0_saved_local_item;
}
if ($__foreach_pergunta_0_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_0_saved_item;
}
?>
                	<div class="form-group input-group">
                  <textarea name="faq[]" class="form-control" rows="3" placeholder="Pergunta" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['FAQ_last']->value['pergunta'];?>
</textarea>
                  <br>
                  <hr>
                  <br>
                  <textarea name="resp[]" class="form-control" rows="3" placeholder="Resposta" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['FAQ_last']->value['resposta'];?>
</textarea>
                  <span class="input-group-btn ">
                  <button type="button" class="btn btn-default btn-add btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                  
                  </span> 
                  </div>
                <?php } else { ?>
                    <div class="form-group input-group">
                      <textarea name="faq[]" class="form-control" rows="3" placeholder="Pergunta" style="resize:none;"></textarea>
                      <br>
                      <hr>
                      <br>
                      <textarea name="resp[]" class="form-control" rows="3" placeholder="Resposta" style="resize:none;"></textarea>
                      <span class="input-group-btn ">
                      <button type="button" class="btn btn-default btn-add btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                      
                      </span> 
                      </div>
                <?php }?>
              </div>
            </div>
          </fieldset>
          <!--FAQ--> 
          <!--Próximo passo-->
          <ul class="list-inline pull-right">
            <li>
              <button type="button" class="btn btn-default prev-step">Anterior</button>
            </li>
            <li>
              <button type="button" class="btn btn-default next-step">Pular</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-info-full next-step">Salvar e continuar</button>
            </li>
          </ul>
          <!--Próximo passo--> 
        </div>
        <!--Etapa--> 
        <!--Conclusão-->
        <div class="tab-pane" role="tabpanel" id="complete">
          <h3>Concluído</h3>
          <p>Você completou com sucessso todos os passos.</p>
          <p>Agora você enivar as alterações.</p>
          <!--Enviar-->
          <ul class="list-inline pull-right">
            <li>
              <input type="submit" class="btn btn-success" onClick="document.forms['curso'].submit()"/>
            </li>
          </ul>
          <!--Enviar--> 
        </div>
        <!--Conclusão-->
        <div class="clearfix"></div>
      </form>
      <!--Formulário--> 
    </section>
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
