<?php
	//Configuração do smarty
	require_once"libs/Smarty.class.php";
	
	$view = new Smarty();
	$view->template_dir = "view/";
	$view->compile_dir = "controller/lib/smarty/templates";
	
	
?>