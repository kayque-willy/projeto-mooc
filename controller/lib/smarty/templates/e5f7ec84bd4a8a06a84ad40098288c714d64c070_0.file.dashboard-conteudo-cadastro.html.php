<?php
/* Smarty version 3.1.29, created on 2016-10-06 18:58:44
  from "/home/ubuntu/workspace/view/dashboard-conteudo-cadastro.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f69ee49831f9_37036768',
  'file_dependency' => 
  array (
    'e5f7ec84bd4a8a06a84ad40098288c714d64c070' => 
    array (
      0 => '/home/ubuntu/workspace/view/dashboard-conteudo-cadastro.html',
      1 => 1475717483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f69ee49831f9_37036768 ($_smarty_tpl) {
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
               <!--Paginas dashboard-->
               <session class="col-sm-9 col-md-12 col-lg-12 main">
                  <h1 class="page-header">Conteúdo da lição <?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
</h1>
                   <form id="pagina" role="form" method="POST" action="" autocomplete="off">
                    <!--Nome-->
                    <fieldset class="row form-group">
                      <label class="col-md-2 control-label pull-left" for="Nome" >Título</label>
                      <div class="col-md-10">
                        <input type="text" name="conteudo" class="form-control input-md" placeholder="Titulo" <?php if (!empty($_smarty_tpl->tpl_vars['conteudo']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
" <?php }?> required>
                      </div>
                    </fieldset>
                    <!--Tipo-->
                    <fieldset class="row form-group">
                      <label class="col-md-2 control-label pull-left" for="Nome">Tipo de conteúdo</label>
                      <div class="col-md-10">
                        <select  id="titulo" name="tipo" type="text" placeholder="Título da pagina" class="form-control input-md" required>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'video') {?> selected <?php }?> <?php }?>>video</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'pdf') {?> selected <?php }?> <?php }?>>pdf</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'audio') {?> selected <?php }?> <?php }?>>audio</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'imagem') {?> selected <?php }?> <?php }?>>imagem</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'slide') {?> selected <?php }?> <?php }?>>slide</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'jogo') {?> selected <?php }?> <?php }?>>jogo</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'quiz') {?> selected <?php }?> <?php }?>>quiz</option>
                          <option <?php if (!empty($_smarty_tpl->tpl_vars['tipo']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'faq') {?> selected <?php }?> <?php }?>>faq</option>
                        </select>
                      </div>
                    </fieldset>
                    <!--Nome-->
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
                            <?php } elseif ($_smarty_tpl->tpl_vars['conteudo']->value['tipo'] == 'link') {?>
                            <fieldset id="field<?php echo $_smarty_tpl->tpl_vars['conteudo']->value['field'];?>
" class="row form-group">
                              <label class="col-md-2 control-label pull-left" for="Nome">Link</label>
                              <div class="col-md-10">
                              <textarea name="link[]" class="form-control" rows="13" placeholder="iframe" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['conteudo']->value['link'];?>
</textarea>
                              <input type="hidden" name="ordem[]" value="link">
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
                    
                    <!--Sessão-->
                    <input  id="field" type="hidden"/>
                    <!--Sessão-->
                    <!--Enviar-->  
                    <ul class="list-inline pull-right">
                      <li>
                          <button id="b1" class="btn btn-info add-area" type="button">Adicionar texto</button>
                      </li>
                      <li>
                          <button id="b2" class="btn btn-info add-campo" type="button">Adicionar link</button>
                      </li>
                      <li>
                        <button type="button" class="btn btn-primary" onClick="window.location.replace('?ctrl=dashboardLicao&ac=conteudo&modulo=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&licao=<?php echo $_smarty_tpl->tpl_vars['nome_licao']->value;?>
&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
');">Cancelar</button>
                      </li>
                      <li>
                        <button type="submit" class="btn btn-primary btn-success">Salvar</button>
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
    $(".add-area").click(function(e){
        e.preventDefault();
        var addto = "#field";
        next = next + 1;
        var newIn = '<fieldset id="field' + next + '"class="row form-group">'+
		'<label class="col-md-2 control-label pull-left" for="Nome">Sessão</label>'+
		'<div class="col-md-10">'+
		'<input name="titulo_sessao[]" type="text" placeholder="Título da sessão" class="form-control input-md" required=""><br>'+		   
		'<textarea name="conteudo_sessao[]" class="form-control" rows="13" placeholder="Conteúdo da sessão" style="resize:none;"></textarea>'+
		'<input type="hidden" name="ordem[]" value="sessao">'+
		'<button id="remove|' + next + '" class="btn btn-danger remove-me">Remover</button></div>' +
		'</fieldset>';
		var newInput = $(newIn);
        $(addto).before(newInput);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
		
		$('.remove-me').click(function(e){
			e.preventDefault();
			var myString = this.id;
			var fieldNum = myString.split('|');
			var fieldID = "#field" + fieldNum[1];
			$(fieldID).remove();
			$(this).remove();	
			if(fieldNum==next) next=0;
		});
    });
	
	$(".add-campo").click(function(e){
        e.preventDefault();
        var addto = "#field";
        next = next + 1;
		 var newIn = '<fieldset id="field' + next + '"class="row form-group">'+
		'<label class="col-md-2 control-label pull-left" for="Nome">Link</label>'+
		'<div class="col-md-10">'+
		'<textarea name="link[]" class="form-control" rows="13" placeholder="iframe" style="resize:none;"></textarea>'+
		'<input type="hidden" name="ordem[]" value="link">'+
		'<button id="remove|' + next + '" class="btn btn-danger remove-me">Remover</button></div>' +
		'</fieldset>';
		
		var newInput = $(newIn);
        $(addto).before(newInput);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
		
		$('.remove-me').click(function(e){
			e.preventDefault();
			var myString = this.id;
			var fieldNum = myString.split('|');
			var fieldID = "#field" + fieldNum[1];
			$(fieldID).remove();
			$(this).remove();	
			if(fieldNum==next) next=0;
		});
    });
	
	$('.remove-me').click(function(e){
			e.preventDefault();
			var myString = this.id;
			var fieldNum = myString.split('|');
			var fieldID = "#field" + fieldNum[1];
			$(fieldID).remove();
			$(this).remove();	
			if(fieldNum==next) next=0;
		});
});
<?php echo '</script'; ?>
>
<!--Campos múltiplos-->
</body>
</html><?php }
}
