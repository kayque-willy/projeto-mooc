<?php
/* Smarty version 3.1.29, created on 2016-09-12 21:32:31
  from "D:\xampp\www\mooc\view\cadastro.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d702cfe733d1_24339310',
  'file_dependency' => 
  array (
    '4d77c4a5aff812e19fdf144a13d009f1490f1f53' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\cadastro.html',
      1 => 1473708750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57d702cfe733d1_24339310 ($_smarty_tpl) {
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
 
  <!--Formulario de cadastro-->
  <session class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-xs-12 col-lg-6">
        <div class="jumbotron">
          <article class="row text-center">
            <header class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <?php if (!empty($_smarty_tpl->tpl_vars['sucesso']->value)) {?>
                  <div class="alert alert-success"> 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    <strong>Sucesso!</strong><br> <?php echo $_smarty_tpl->tpl_vars['sucesso']->value;?>

                  </div>
                <?php }?>    
                <?php if (!empty($_smarty_tpl->tpl_vars['fracasso']->value)) {?>
                  <div class="alert alert-danger"> 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    <strong>Operação mal sucedida!</strong><br> <?php echo $_smarty_tpl->tpl_vars['fracasso']->value;?>
 Por favor tente novamente.
                  </div>
                <?php }?>    
              <?php if ($_smarty_tpl->tpl_vars['super']->value) {?>
              	<h2>Cadastrar novo tutor</h2>
              <?php } else { ?>
              	<h2>Cadastrar</h2>
              <?php }?>
            </header>
              <!--Formulario de cadastro-->
              <form role="form" id="cadastro" method="POST" class="text-center" action="?ctrl=usuario&ac=cadastrar">
                <?php if ($_smarty_tpl->tpl_vars['super']->value) {?>
                <input type="hidden" name="tutor" value="tutor">	
                <?php }?>
                <div class="form-group">
                  <label for="nome">Nome completo</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
                  <span class="help-block" style="display: none;">Entre com seu nome completo.</span>
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de E-mail">
                  <span class="help-block" style="display: none;">Por favor entre com um email valido.</span>
                </div>
                 <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                  <span class="help-block" style="display: none;">Por favor entre com um email valido.</span>
                </div>
                <span class="help-block" style="display: none;">Por favor entre com o código de segurança.</span>
                <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;">Cadastrar</button>
              </form>
              <!--Formulario de cadastro-->
          </article><!--row text-center-->
        </div><!--jumbotron-->
      </div><!--col-lg-offset-3 col-xs-12 col-lg-6-->
    </div><!--row-->
  </session><!--container-->
  <!--Formulario de cadastro-->
  <?php if (!$_smarty_tpl->tpl_vars['super']->value) {?>
  <p class="text-center">Ja possui uma conta? <a href="?ctrl=usuario&ac=login">Entre agora</a></p>
  <?php }?>
  <hr>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</body>
</html><?php }
}
