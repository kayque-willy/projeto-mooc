<?php
/* Smarty version 3.1.29, created on 2016-09-17 04:01:37
  from "D:\xampp\www\mooc\view\dashboard-pagina-cadastro.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57dca401cb68b8_58393843',
  'file_dependency' => 
  array (
    '67525268ad3e25363ddf3533f32da05fcabd4179' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\dashboard-pagina-cadastro.html',
      1 => 1474077688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57dca401cb68b8_58393843 ($_smarty_tpl) {
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
 
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row main">
                 <!--Paginas dashboard-->
                 <session class="col-sm-9 col-md-12 col-lg-12 main">
                    <h1 class="page-header">Dados pagina</h1>
                     <form id="pagina" method="POST" role="form" method="POST" action="" autocomplete="off">
                      <legend>Editar pagina</legend>
                      <!--Nome-->
                      <fieldset class="row form-group">
                        <label class="col-md-2 control-label pull-left" for="Nome">Título da pagina</label>
                        <div class="col-md-10">
                          <?php if ($_smarty_tpl->tpl_vars['pagina']->value == "Pagina Inicial" || $_smarty_tpl->tpl_vars['pagina']->value == "Programa de estudo") {?>
                          	<input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
">
                          	<h4><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</h4>
                          <?php } else { ?>
                          	<input id="titulo" name="titulo" type="text" placeholder="Título da pagina" class="form-control input-md" required="" <?php if ($_smarty_tpl->tpl_vars['pagina']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
" <?php }?>>
                          <?php }?>
                        </div>
                      </fieldset>
                      <!--Nome-->
                      <!--Sessão-->
                      <?php if (!empty($_smarty_tpl->tpl_vars['pagina_rec']->value)) {?>
                      	<?php
$_from = $_smarty_tpl->tpl_vars['pagina_rec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conteudo_0_saved_item = isset($_smarty_tpl->tpl_vars['conteudo']) ? $_smarty_tpl->tpl_vars['conteudo'] : false;
$_smarty_tpl->tpl_vars['conteudo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['conteudo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['conteudo']->value) {
$_smarty_tpl->tpl_vars['conteudo']->_loop = true;
$__foreach_conteudo_0_saved_local_item = $_smarty_tpl->tpl_vars['conteudo'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'sessao') {?>
                            <fieldset id="field<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['field'];?>
" class="row form-group">
                                <label class="col-md-2 control-label pull-left" for="Nome">Sessão</label>
                                <div class="col-md-10">
                                <input name="titulo_sessao[]" type="text" placeholder="Título da sessão" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['indice'];?>
"><br>   
                                <textarea name="conteudo_sessao[]" class="form-control" rows="13" placeholder="Conteúdo da sessão" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['conteudo']->value['conteudo'];?>
</textarea>
                                <input type="hidden" name="ordem[]" value="sessao">
                                <button id="remove|<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['field'];?>
" class="btn btn-danger remove-me">Remover</button>                           		</div>
                            </fieldset>
                            <?php } elseif ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'item') {?>
                            <fieldset id="field<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['field'];?>
" class="row form-group">
                              <label class="col-md-2 control-label pull-left" for="Nome">Item</label>
                              <div class="col-md-10">
                              <input name="item[]" type="text" placeholder="Item" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['item'];?>
"><br>		
                              <input name="link[]" type="text" placeholder="link" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['link'];?>
"><br>	
                              <input type="hidden" name="ordem[]" value="item">
                              <button id="remove|<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['field'];?>
" class="btn btn-danger remove-me">Remover</button>
                              </div>
                            </fieldset>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['conteudo'] = $__foreach_conteudo_0_saved_local_item;
}
if ($__foreach_conteudo_0_saved_item) {
$_smarty_tpl->tpl_vars['conteudo'] = $__foreach_conteudo_0_saved_item;
}
?>
                       	<input type="hidden" name="pagina" value="<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"/>
                      <?php }?>
                      <input  id="field" type="hidden"/>
                      <!--Sessão-->
                      <!--Enviar-->  
                      <ul class="list-inline pull-right">
                        <li>
                        	<button id="b1" class="btn btn-info add-area" type="button">Adicionar sessão</button>
                        </li>
                        <li>
                        	<button id="b2" class="btn btn-info add-campo" type="button">Adicionar item</button>
                        </li>
                        <li>
                          <button type="button" class="btn btn-primary" onClick='window.location.replace("?ctrl=dashboardPagina&ac=paginas&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
");'>Cancelar</button>
                        </li>
                        <li>
                          <button type="submit" class="btn btn-primary btn-success" >Salvar</button>
                        </li>
                      </ul>
                      <!--Enviar-->  
                    </form>	
                 </session>
                 <!--Paginas dashboard-->
                </div>
            </div>
        </div>
    </div>
    <!--Conteúdo-->
    <hr>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--Campos múltiplos-->
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
    var next = <?php if (!empty($_smarty_tpl->tpl_vars['cont']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
 <?php } else { ?> 0 <?php }?>;
	var cont = 0;
	var id;
    $(".add-area").on( "click", function(e){
        e.preventDefault();
        addto = "#field";
        next = next + 1;
		cont++;
        var newIn = '<fieldset id="field' + next + '"class="row form-group">'+
		'<label class="col-md-2 control-label pull-left" for="Nome">Sessão</label>'+
		'<div class="col-md-10">'+
		'<input name="titulo_sessao[]" type="text" placeholder="Título da sessão" class="form-control input-md"><br>'+		
		'<textarea name="conteudo_sessao[]" class="form-control" rows="13" placeholder="Conteúdo da sessão" style="resize:none;"></textarea>'+
		'<input type="hidden" name="ordem[]" value="sessao">'+
		'<button id="remove|' + next + '" class="btn btn-danger remove-me">Remover</button></div>'+
		'</fieldset>';
		var newInput = $(newIn);
        $(addto).before(newInput);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
		
		$('.remove-me').on( "click", function(e){
			e.preventDefault();
			var myString = this.id;
			var fieldNum = myString.split('|');
			var fieldID = "#field" + fieldNum[1];
			$(fieldID).remove();
			$(this).remove();
		});
    });
	$(".add-campo").on( "click", function(e){
        e.preventDefault();
        addto = "#field";
        next = next + 1;
		cont++;	
        var newIn = '<fieldset id="field' + next + '"class="row form-group">'+
		'<label class="col-md-2 control-label pull-left" for="Nome">Item</label>'+
		'<div class="col-md-10">'+
		'<input name="item[]" type="text" placeholder="Item" class="form-control"><br>'+		
		'<input name="link[]" type="text" placeholder="link" class="form-control"><br>'+	
		'<input type="hidden" name="ordem[]" value="item">'+
		'<button id="remove|' + next + '" class="btn btn-danger remove-me">Remover</button></div>'+
		'</fieldset>';
		var newInput = $(newIn);
        $(addto).before(newInput);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
		
		$('.remove-me').on( "click", function(e){
			e.preventDefault();
			var myString = this.id;
			var fieldNum = myString.split('|');
			var fieldID = "#field" + fieldNum[1];
			$(fieldID).remove();
			$(this).remove();
		});
		
    });
	
	$('.remove-me').on( "click", function(e){
			e.preventDefault();
			var myString = this.id;
			var fieldNum = myString.split('|');
			var fieldID = "#field" + fieldNum[1];
			$(fieldID).remove();
			$(this).remove();
		});
});
<?php echo '</script'; ?>
>
<!--Campos múltiplos-->
</body>
</html><?php }
}
