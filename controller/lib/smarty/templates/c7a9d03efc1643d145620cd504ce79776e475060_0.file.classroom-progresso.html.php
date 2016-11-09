<?php
/* Smarty version 3.1.29, created on 2016-10-02 16:38:27
  from "D:\xampp\www\mooc\view\classroom-progresso.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f11be33a8338_99505813',
  'file_dependency' => 
  array (
    'c7a9d03efc1643d145620cd504ce79776e475060' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\classroom-progresso.html',
      1 => 1475419097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57f11be33a8338_99505813 ($_smarty_tpl) {
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
  <link rel="stylesheet" href="view/css/classroom-progresso.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
  <!--Graficos-->
  <?php echo '<script'; ?>
 src="view/js/Chart.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <!--Conteúdo-->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row main">
                  <section class="col-lg-12 col-md-12">
                    <hr>
                    <!--Painél-->
                    <div class="panel panel-default">
                      <!--Menu do curso-->
                      <nav class="navbar navbar-default">
                        <div class="container"> 
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myDefaultNavbar1">
                          <ul class="nav navbar-nav navbar-header">
                            <?php
$_from = $_smarty_tpl->tpl_vars['paginas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pagina_0_saved_item = isset($_smarty_tpl->tpl_vars['pagina']) ? $_smarty_tpl->tpl_vars['pagina'] : false;
$_smarty_tpl->tpl_vars['pagina'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pagina']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pagina']->value) {
$_smarty_tpl->tpl_vars['pagina']->_loop = true;
$__foreach_pagina_0_saved_local_item = $_smarty_tpl->tpl_vars['pagina'];
?>
                            	<li <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == $_smarty_tpl->tpl_vars['pagina']->value['titulo']) {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=pagina&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
&pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagina']->value['titulo'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_local_item;
}
if ($__foreach_pagina_0_saved_item) {
$_smarty_tpl->tpl_vars['pagina'] = $__foreach_pagina_0_saved_item;
}
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Discussao") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=discussao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Discussão</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Material Adicional") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=material&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Material adicional</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Wiki") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=wiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Wiki</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Midia Social") {?> class="active" <?php }?>><a href="?ctrl=classroom&ac=midiaSocial&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Mídia social</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Licao") {?> class="active" <?php }?>><a href="?ctrl=licao&ac=licao&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Lição</a></li>
                            <li  <?php if ($_smarty_tpl->tpl_vars['nome_pagina']->value == "Progresso") {?> class="active" <?php }?>><a href="?ctrl=licao&ac=progresso&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">Progresso</a></li>
                          </ul> 
                        </div>
                       </div>
                      </nav>
                      <!--Menu do curso--> 
                      <!--Conteúdo-->
                      <section class="panel-body row">
                        <!--Cabeçalho-->
                        <header>
                          <h2 class="col-md-12 text-center">Progresso atual - <?php echo $_smarty_tpl->tpl_vars['nome_curso']->value[0]['nome'];?>
</h2>
                        </header>
                        <!--Cabeçalho-->
                        <session class="col-md-12 text-justify">
                              <!--Artigo-->
                              <article class="col-md-12 panel panel-default">
                                <br>
                                <div class="row">
                                    <div class="col-md-5 box pull-left">
                                    	<canvas id="Grafico" style="width:50%;"></canvas>
                                    </div>
                                     <div class="col-md-7">
                                    	<h3><strong>Desempenho do curso</strong></h3>
                                        <h4>Você concluiu: <?php if (!empty($_smarty_tpl->tpl_vars['desempenho_curso']->value)) {?> <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['desempenho_curso']->value['desempenho'])*100;?>
%<?php }?> do curso</h4>
                                     </div>      
                               	</div>
                                <br>
                                <?php if (!empty($_smarty_tpl->tpl_vars['desempenho_modulo']->value)) {?>
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['desempenho_modulo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_modulo_1_saved_item = isset($_smarty_tpl->tpl_vars['modulo']) ? $_smarty_tpl->tpl_vars['modulo'] : false;
$_smarty_tpl->tpl_vars['modulo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['modulo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->_loop = true;
$__foreach_modulo_1_saved_local_item = $_smarty_tpl->tpl_vars['modulo'];
?>
                                      <div class="row">
                                          <div class="col-md-5 box pull-left">
                                              <canvas id="Grafico<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" style="width:50%;"></canvas>
                                          </div>
                                           <div class="col-md-7">
                                              <h3><strong><?php echo $_smarty_tpl->tpl_vars['modulo']->value['nome'];?>
</strong> - <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['modulo']->value['desempenho'])*100;?>
%</h3>
                                          <?php if (!empty($_smarty_tpl->tpl_vars['modulo']->value['licoes'])) {?>
                                              <?php
$_from = $_smarty_tpl->tpl_vars['modulo']->value['licoes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_licao_2_saved_item = isset($_smarty_tpl->tpl_vars['licao']) ? $_smarty_tpl->tpl_vars['licao'] : false;
$_smarty_tpl->tpl_vars['licao'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['licao']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['licao']->value) {
$_smarty_tpl->tpl_vars['licao']->_loop = true;
$__foreach_licao_2_saved_local_item = $_smarty_tpl->tpl_vars['licao'];
?>
                                                <h4><strong><?php echo $_smarty_tpl->tpl_vars['licao']->value['nome'];?>
</strong> -  <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['licao']->value['desempenho'])*100;?>
%</h4>
                                              <?php
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_2_saved_local_item;
}
if ($__foreach_licao_2_saved_item) {
$_smarty_tpl->tpl_vars['licao'] = $__foreach_licao_2_saved_item;
}
?>
                                          <?php }?>
                                          </div>      
                                    	</div>
                                        <br>
                                    <?php
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_1_saved_local_item;
}
if ($__foreach_modulo_1_saved_item) {
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_1_saved_item;
}
?>
                                <?php }?>
                              </article>
                              <!--Artigo-->
                        </session>
                        <!--Texto-->
                      </section>
                      <!--Conteúdo-->
                    </div>
                    <!--Painél-->
                  </section>
                </div><!--row main-->
            </div><!--container-fluid-->
        </div><!--page-content-->
    </div><!--page-content-wrapper-->
    <!--Conteúdo-->
    <hr>
    <!--Modal novo artigo-->
    <div class="modal fade" id="novoArtigo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Adicionar artigo</h3>
      </div>
      <div class="modal-body">
         <form  method="POST" action="?ctrl=classroom&ac=novoWiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Artigo</label>
            <div class="col-md-10">
              <textarea class="form-control" id="wiki" rows="13" name="wiki" placeholder="Insira o texto do artigo aqui" style="resize:none;" maxlength="400"></textarea>
            </div>
          </fieldset>
          <!--Comentario-->
          <ul class="list-inline pull-right">
            <li>
              <button type="submit" class="btn btn-primary pull-left">Enviar</button>
            </li>
          </ul>
        </form>
        <br>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    <!--Modal novo artigo-->
    
    <!--Modal editar artigo-->
    <div class="modal fade" id="editarArtigo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="modal-title">Editar artigo</h3>
      </div>
      <div class="modal-body">
         <form  method="POST" action="?ctrl=classroom&ac=editarWiki&curso=<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
" class="tab-content" autocomplete="off">
          <input type="hidden" name="wiki_antiga" id="wiki_antiga" class="rating" value="">
          <input type="hidden" name="numero_curso" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['numero_curso']->value;?>
">
          <input type="hidden" name="email_aluno" class="rating" value="<?php echo $_smarty_tpl->tpl_vars['sessao']->value['usuario'];?>
">
          <!--Comentario-->
          <fieldset class="row form-group">
            <label class="col-md-2 control-label pull-left" for="comentario">Artigo</label>
            <div class="col-md-10">
              <textarea class="form-control" id="wiki" rows="13" name="wiki" placeholder="Insira o texto do artigo aqui" style="resize:none;" maxlength="400"></textarea>
            </div>
          </fieldset>
          <!--Comentario-->
          <ul class="list-inline pull-right">
            <li>
              <button type="submit" class="btn btn-primary pull-left">Enviar</button>
            </li>
          </ul>
        </form>
        <br>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    <!--Modal editar artigo-->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  
<?php echo '<script'; ?>
>
    $(document).on("click", ".open-novo", function () {
     	var numero = $(this).data('id');
     	var texto = $("#post"+numero).data('id');
		$(".modal-body #wiki").val("");
	});

	$(document).on("click", ".open-editar", function () {
     	var numero = $(this).data('id');
     	var texto = $("#post"+numero).data('id');
		$(".modal-body #wiki").val(texto);
		$(".modal-body #wiki_antiga").val(texto);
	});
 <?php echo '</script'; ?>
>
    
 <?php echo '<script'; ?>
 type="text/javascript">
	var options = {
	  responsive:true
	};
	
	var data = [
	  {
		  value: <?php if (!empty($_smarty_tpl->tpl_vars['desempenho_curso']->value)) {?> <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['desempenho_curso']->value['desempenho'])*100;?>
 <?php }?>,
		  color:"#3e5e9a",
		  highlight: "#5C87D8",
		  label: "Concluido"
	  },
	  {
		  value: <?php if (!empty($_smarty_tpl->tpl_vars['desempenho_curso']->value)) {?> <?php echo 100-(sprintf("%.2f",$_smarty_tpl->tpl_vars['desempenho_curso']->value['desempenho'])*100);?>
 <?php }?>,
		  color: "#46BFBD",
		  highlight: "#5AD3D1",
		  label: "Restante"
	  },
	]
	
	  <?php if (!empty($_smarty_tpl->tpl_vars['desempenho_modulo']->value)) {?>
     	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
        <?php
$_from = $_smarty_tpl->tpl_vars['desempenho_modulo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_modulo_3_saved_item = isset($_smarty_tpl->tpl_vars['modulo']) ? $_smarty_tpl->tpl_vars['modulo'] : false;
$_smarty_tpl->tpl_vars['modulo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['modulo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->_loop = true;
$__foreach_modulo_3_saved_local_item = $_smarty_tpl->tpl_vars['modulo'];
?>
			var data<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
 = [
			  {
				  value: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['modulo']->value['desempenho'])*100;?>
,
				  color:"#3e5e9a",
				  highlight: "#5C87D8",
				  label: "Concluido"
			  },
			  {
				  value: <?php echo 100-(sprintf("%.2f",$_smarty_tpl->tpl_vars['modulo']->value['desempenho'])*100);?>
,
				  color: "#46BFBD",
				  highlight: "#5AD3D1",
				  label: "Restante"
			  },
			]
		 <?php
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_3_saved_local_item;
}
if ($__foreach_modulo_3_saved_item) {
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_3_saved_item;
}
?>
	   <?php }?>
	
	window.onload = function(){
	
	  var ctx = document.getElementById("Grafico").getContext("2d");
	  var PizzaChart = new Chart(ctx).Pie(data, options);
	  
	   <?php if (!empty($_smarty_tpl->tpl_vars['desempenho_modulo']->value)) {?>
     	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
        <?php
$_from = $_smarty_tpl->tpl_vars['desempenho_modulo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_modulo_4_saved_item = isset($_smarty_tpl->tpl_vars['modulo']) ? $_smarty_tpl->tpl_vars['modulo'] : false;
$_smarty_tpl->tpl_vars['modulo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['modulo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->_loop = true;
$__foreach_modulo_4_saved_local_item = $_smarty_tpl->tpl_vars['modulo'];
?>
			  var ctx = document.getElementById("Grafico<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
").getContext("2d");
	  		  var PizzaChart = new Chart(ctx).Pie(data<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
, options);
		<?php
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_4_saved_local_item;
}
if ($__foreach_modulo_4_saved_item) {
$_smarty_tpl->tpl_vars['modulo'] = $__foreach_modulo_4_saved_item;
}
?>
	   <?php }?>
	  
	  
	
	}  
<?php echo '</script'; ?>
>           
</body>
</html><?php }
}
