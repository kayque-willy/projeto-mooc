<?php
/* Smarty version 3.1.29, created on 2016-10-01 22:07:21
  from "D:\xampp\www\mooc\view\footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f01779eb0173_16920247',
  'file_dependency' => 
  array (
    'cf97a0dace17c106f8d8ec6164a6ba14f00a2612' => 
    array (
      0 => 'D:\\xampp\\www\\mooc\\view\\footer.html',
      1 => 1475352436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f01779eb0173_16920247 ($_smarty_tpl) {
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
    <li><a href="#">Sobre</a></li>
    <li><a href="#">FAQ</a></li>
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
