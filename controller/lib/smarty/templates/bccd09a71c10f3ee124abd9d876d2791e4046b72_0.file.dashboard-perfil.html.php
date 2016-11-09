<?php
/* Smarty version 3.1.29, created on 2016-10-01 22:01:28
  from "D:\xampp\www\mooc\view\dashboard-perfil.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f016185b8ce4_63948491',
  'file_dependency' => 
  array (
    'bccd09a71c10f3ee124abd9d876d2791e4046b72' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\dashboard-perfil.html',
      1 => 1475352084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f016185b8ce4_63948491 ($_smarty_tpl) {
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
 
  <div class="container-fluid">
      <div class="row main">
       <!--Cursos dashboard-->
       <session class="col-sm-9 col-md-12 col-lg-12 main">
          <!--Formulario de edição de perfil-->
          <article class="col-sm-12  col-md-12  col-lg-12 ">
              <form class="form-horizontal" method="POST" action="?ctrl=usuario&ac=perfil" autocomplete="off" enctype="multipart/form-data">
                <fieldset class="col-sm-8  col-md-8  col-lg-8 pull-left">
                  <legend>Editar perfil</legend>
                  <!--Foto do perfil-->
                  <fieldset class="row form-group">
                    <label class="col-md-2 control-label" for="Foto">Foto</label>
                    <img class="col-md-2 img-circle" src="<?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['foto'])) {?> controller/temp/<?php echo $_smarty_tpl->tpl_vars['perfil']->value[0]['email'];?>
.jpg <?php }?>"   width="20"/>
                    <div class="col-md-8">
                      <input id="Foto" name="foto" class="input-file" type="file">
                    </div>
                  </fieldset>
                  <!--Foto do perfil-->
                  <fieldset class="row form-group">
                    <label class="col-md-2 control-label pull-left" for="Nome">Nome</label>  
                    <div class="col-md-10">
                    <input id="Nome" name="nome" type="text" placeholder="Nome completo" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['nome'])) {?> value=<?php echo $_smarty_tpl->tpl_vars['perfil']->value[0]['nome'];?>
 <?php }?>>
                    </div>
                  </fieldset>
                  <fieldset class="row form-group">
                    <label class="col-md-2 control-label" for="senha">Senha</label>
                    <div class="col-md-10">
                      <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="" <?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['senha'])) {?> value=<?php echo $_smarty_tpl->tpl_vars['perfil']->value[0]['senha'];?>
 <?php }?>>
                      
                    </div>
                  </fieldset>
                  <fieldset class="row form-group">
                    <label class="col-md-2 control-label" for="local">Local</label>  
                    <div class="col-md-10">
                    <input id="local" name="local" type="text" placeholder="Local" class="form-control input-md" 
                    <?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['local'])) {?> value=<?php echo $_smarty_tpl->tpl_vars['perfil']->value[0]['local'];?>
 <?php }?>>
                    </div>
                  </fieldset>
                  <fieldset class="row form-group">
                    <label class="col-md-2 control-label" for="sexo">sexo</label>
                    <div class="col-md-10">
                      <div class="radio">
                        <label for="sexo-0">
                          <input type="radio" name="sexo" id="sexo-0" value="masculino" 
                          <?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['sexo'])) {?> <?php if ($_smarty_tpl->tpl_vars['perfil']->value[0]['sexo'] == 'masculino') {?> checked <?php }
}?>>
                          masculino
                        </label>
                      </div>
                      <div class="radio">
                        <label for="sexo-1">
                          <input type="radio" name="sexo" id="sexo-1" value="feminino" <?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['sexo'])) {?> 
                          <?php if ($_smarty_tpl->tpl_vars['perfil']->value[0]['sexo'] == 'feminino') {?> checked <?php }
}?>>
                          feminino
                        </label>
                        </div>
                      <div class="radio">
                        <label for="sexo-2">
                          <input type="radio" name="sexo" id="sexo-2" value="outro" <?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['sexo'])) {?> 
                          <?php if ($_smarty_tpl->tpl_vars['perfil']->value[0]['sexo'] == 'outro') {?> checked <?php }
}?>>
                          outro
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset class="row form-group">
                    <label class="col-md-2 control-label text-center" for="sobre">Quem sou eu</label>
                    <div class="col-md-10">                     
                      <textarea class="form-control" id="sobre" rows="10" name="sobre" style="resize:none;"><?php if (!empty($_smarty_tpl->tpl_vars['perfil']->value[0]['sobre'])) {
echo $_smarty_tpl->tpl_vars['perfil']->value[0]['sobre'];
} else { ?>Sobre você<?php }?></textarea>
                    </div>
                  </fieldset>
                  <fieldset class="row form-group">
                      <div class="col-md-12">  
                          <button type="input" class="btn btn-primary center-block" name="Atualizar">Atualizar</button>
                      <div/>  
                  </fieldset>
                </fieldset>
              </form>
          </article>
          <!--Formulario de edição de perfil-->
       </session>
       <!--Cursos dashboard-->
      </div>
  </div>
  <hr>
 <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Opções do curso-->
<?php echo '<script'; ?>
>
	$("[data-toggle=popover]").popover({
    html: true, 
	content: function() {
          return $('#popover-content').html();
        }
	});
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
