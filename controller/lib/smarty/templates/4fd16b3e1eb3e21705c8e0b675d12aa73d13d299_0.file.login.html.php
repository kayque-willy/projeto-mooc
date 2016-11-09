<?php
/* Smarty version 3.1.29, created on 2016-10-06 02:10:16
  from "/home/ubuntu/workspace/view/login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f5b2887a8060_80709491',
  'file_dependency' => 
  array (
    '4fd16b3e1eb3e21705c8e0b675d12aa73d13d299' => 
    array (
      0 => '/home/ubuntu/workspace/view/login.html',
      1 => 1475717485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f5b2887a8060_80709491 ($_smarty_tpl) {
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
</head>
<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  <hr>
  <!--Formulario de cadastro-->
  <session class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-xs-12 col-lg-6">
        <div class="jumbotron">
          <article class="row text-center">
            <header class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Entrar</h2>
            </header>
              <!--Formulario de cadastro-->
              <form role="form" id="login" class="text-center" action="?ctrl=usuario&ac=login">
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de E-mail">
                  <span class="help-block" style="display: none;">Por favor entre com um email valido.</span>
                </div>
                 <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
                <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;">Entrar</button>
              </form>
              <!--Formulario de cadastro-->
          </article><!--row text-center-->
        </div><!--jumbotron-->
      </div><!--col-lg-offset-3 col-xs-12 col-lg-6-->
    </div><!--row-->
  </session><!--container-->
  <!--Formulario de cadastro-->
  <p class="text-center">Não possui uma conta? <a href="?ctrl=usuario&ac=cadastrar">Cadastre-se agora</a></p>
  <hr>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</body>
</html><?php }
}
