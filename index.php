<?php
  //INICIO DA APLICAÇÃO 
 
  //O index cria os objetos das classes de controle e acessa seus métodos de acordo com a URL
  ob_start();
  if (!isset($_SESSION)) session_start();
  
  
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  
  //Faz a leitura da url para identificar o controlador e o método requisitado
  //Caso não seja definido nenhum  controlador, o padrão será o do index. 
  $controlador = isset($_REQUEST['ctrl']) ?  $_REQUEST['ctrl'] : 'index';
  $metodo = isset($_REQUEST['ac']) ?  $_REQUEST['ac'] : 'index';
  
  //Seleciona o nome da pagina 
  $nome_pagina="home";
  if(!empty($_REQUEST['ctrl'])){
	  $nome_pagina = strtolower($_REQUEST['ctrl']);	
  }
 
  //Se o arquivo do controller existir, faz a requisição.
  $arquivo = $root.'/controller/'.$controlador.'Ctrl.php';
  if(file_exists($arquivo)) 
	  require_once $arquivo;
  else 
    throw new Exception("Arquivo '$arquivo' nao encontrado");
  
  //Se a classe do controller existir, cria um novo objeto desta classe.
  $classe = $controlador.'Controller';
  if(class_exists($classe)) 
	  $objeto = new $classe;
  else 
  	throw new Exception("Classe '$classe' nao existe no arquivo '$arquivo'");
  
  //Se o método requisitado existir no objeto criado, realiza a chamado do método.
  if(method_exists($objeto,$metodo)) 
	  $objeto->$metodo();
  else 
  	throw new Exception("Método '$metodo()' nao existe na classe $classe'");	
?>