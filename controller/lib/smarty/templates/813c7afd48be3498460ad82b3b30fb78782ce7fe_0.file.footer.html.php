<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:54:33
  from "/home/ubuntu/workspace/view/footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57feb11924f481_89685320',
  'file_dependency' => 
  array (
    '813c7afd48be3498460ad82b3b30fb78782ce7fe' => 
    array (
      0 => '/home/ubuntu/workspace/view/footer.html',
      1 => 1476309269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57feb11924f481_89685320 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['menu_inferior']->value)) {?> 
<!--Rodapé-->
</div>
</div>
<footer class="panel-footer well">
  <h3 class="text-center">Nome do projeto</h3>
  <p class="text-center"> <strong> Mooc Unifei - Trabalho Final de Graduação </strong><br>
    Kayque Willy Reis de Oliveira<br>
    Orientador: Dr. Cláudio Kirner<br>
    Curso de Sistemas de Informação<br>
    Itajubá - 2016<br>
  </p>
</footer>
</div>
<!--Rodapé--> 
<?php } else { ?>
<!--Menu do rodapé-->
<nav>
  <ul class="nav nav-justified navbar-inverse">
    <li><a href="index.php">Home</a></li>
    <li><a href="?ctrl=curso&ac=catalogo">Cursos</a></li>
    <li><a href="?ctrl=index&ac=sobre">Sobre</a></li>
    <li><a href="?ctrl=index&ac=faq">FAQ</a></li>
  </ul>
</nav>
<!--Menu do rodapé--> 
<!--Rodapé-->
<footer class="panel-footer well">
  <h3 class="text-center">Nome do projeto</h3>
  <p class="text-center"> <strong> Mooc Unifei - Trabalho Final de Graduação </strong><br>
    Kayque Willy Reis de Oliveira<br>
    Orientador: Dr. Cláudio Kirner<br>
    Universidade Federal de Itajubá - UNIFEI<br>
    Curso de Sistemas de Informação<br>
    Itajubá - 2016<br>
  </p>
</footer>
<!--Rodapé--> 
<?php }?> 
<!--Configurações do bootstrap--> 
<?php echo '<script'; ?>
 src="view/js/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="view/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php if (!empty($_smarty_tpl->tpl_vars['sessao']->value)) {?>
<!--Sidebar--> 
<?php echo '<script'; ?>
 type="text/javascript">
	/*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
<?php echo '</script'; ?>
> 
<?php }
}
}
