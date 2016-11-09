<?php
/* Smarty version 3.1.29, created on 2016-10-02 02:39:24
  from "D:\xampp\www\mooc\view\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f0573c948d28_19081751',
  'file_dependency' => 
  array (
    '4923226a4f7e0b28faf9063cc843a7fbbd5afafb' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\home.html',
      1 => 1475363634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57f0573c948d28_19081751 ($_smarty_tpl) {
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
<link rel="shortcut icon" href="icone.png"/>
<link rel="stylesheet" href="view/css/bootstrap/bootstrap.min.css"/>
<!--Folhas de estilo-->
<link rel="stylesheet" href="view/css/cabecalho-rodape.css"/>
<link rel="stylesheet" href="view/css/index.css"/>
<link rel="stylesheet" href="view/css/dashboard.css"/>
<link rel="stylesheet" href="view/css/dashboard-form.css"/>
<!--Icones-->
<link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Carrosel-->
<div id="carrosel" class="carousel slide" data-ride="carousel"> 
  <!--itens do carrosel-->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <img src="http://globocom.github.io/bootstrap/assets/img/examples/slide-02.jpg" alt="Chania" width="460" height="345">
      <div class="carousel-caption">
        <h1>Exemplo de título</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <a class="btn btn-large btn-primary" href="?ctrl=curso&ac=catalogo">Explorar cursos</a> 
        <a class="btn btn-large btn-primary" href="?ctrl=usuario&ac=cadastrar">Cadastre-se</a> </div>
    </div>
    <div class="item"> <img src="http://globocom.github.io/bootstrap/assets/img/examples/slide-03.jpg" alt="Chania" width="460" height="345">
      <div class="carousel-caption">
        <h1>Outro exemplo de título</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <a class="btn btn-large btn-primary" href="?ctrl=curso&ac=catalogo">Explorar cursos</a> 
        <a class="btn btn-large btn-primary" href="?ctrl=usuario&ac=cadastrar">Cadastre-se</a> </div>
    </div>
    <div class="item"> <img src="http://globocom.github.io/bootstrap/assets/img/examples/slide-01.jpg" alt="Flower" width="460" height="345">
      <div class="carousel-caption">
        <h1>Um bom exemplo de medida</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <a class="btn btn-large btn-primary" href="?ctrl=curso&ac=catalogo">Explorar cursos</a> 
        <a class="btn btn-large btn-primary" href="?ctrl=usuario&ac=cadastrar">Cadastre-se</a> </div>
    </div>
    <div class="item"> <img src="http://globocom.github.io/bootstrap/assets/img/examples/slide-01.jpg" alt="Flower" width="460" height="345">
      <div class="carousel-caption">
        <h3>Apenas um título comum</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
        <a class="btn btn-large btn-primary" href="?ctrl=curso&ac=catalogo">Explorar cursos</a> 
        <a class="btn btn-large btn-primary" href="?ctrl=usuario&ac=cadastrar">Cadastre-se</a> </div>
    </div>
  </div>
  <!--itens do carrosel--> 
  <!-- Controles do carrosel--> 
  <a class="left carousel-control" href="#carrosel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Anterior</span> </a> <a class="right carousel-control" href="#carrosel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Próximo</span> </a> </div>
<!--Carrosel--> 
<!--Carrosel-->
<hr>
<h2 class="text-center">Conheça os cursos</h2>
<hr>
<!--Cursos-->
<session class="container-fluid"> 
  <!--Linha-->
  <?php if (!empty($_smarty_tpl->tpl_vars['cursos']->value)) {?>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? sizeof($_smarty_tpl->tpl_vars['cursos']->value)-1+1 - (0) : 0-(sizeof($_smarty_tpl->tpl_vars['cursos']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <?php if (($_smarty_tpl->tpl_vars['i']->value == 0) || ($_smarty_tpl->tpl_vars['i']->value == 4)) {?><div class="row"><?php }?>
          <article class="col-md-3 col-xs-6">
            <div class="thumbnail well"> <img src="controller/temp/<?php echo $_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->tpl_vars['i']->value]['numero'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->tpl_vars['i']->value]['nome'];?>
" class="img-responsive" width="400" height="200">
              <div class="caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->tpl_vars['i']->value]['nome'];?>
</h3>
                <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->tpl_vars['i']->value]['descricao_curta'];?>
</p>
              </div>
              <a href="?ctrl=curso&ac=recuperarCurso&curso=<?php echo $_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->tpl_vars['i']->value]['numero'];?>
" class="btn btn-info center-block" role="button">Ir para o curso</a>
            </div>
          </article>
        <?php if (($_smarty_tpl->tpl_vars['i']->value == 3) || ($_smarty_tpl->tpl_vars['i']->value == 7)) {?></div><?php }?>
      <?php }
}
?>

   <div class="text-center"> <a class="btn btn-primary btn-md" href="?ctrl=curso&ac=catalogo" role="button">Ver todos os cursos</a></div>
  <?php } else { ?>
  	<h1 class="text-center">Não existe nenhum curso cadastrado no sistema!</h1>
    <br>
    <br>
  <?php }?>
</session>
<!--Cursos-->
<hr>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
