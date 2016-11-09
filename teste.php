<?php

      $hostname="localhost";
	 $database="mooc";
	 $username="postgres";
	 $password="mooc";
		
     try {
		$conexao = new PDO("pgsql:host=$hostname;dbname=$database",$username,$password);
		return $conexao;
	}catch (PDOException  $e) {
		print $e->getMessage();
	}
?>