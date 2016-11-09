<?php
//Classe que realiza a conexão e executa as querys no banco de dados
class dbConnection {
		
	private $hostname="localhost";
	private $database="mooc";
	private $username="postgres";
	private $password="mooc";
		
	private function connect(){
		
		try {
			$conexao = new PDO("pgsql:host=$this->hostname;dbname=$this->database",$this->username,$this->password);
			return $conexao;
		}catch (PDOException  $e) {
			print $e->getMessage();
		}
	}	
	
	public function runQuery($sql){
		try {
			$statment = $this->connect()->prepare($sql);
			return $statment->execute();
		}catch (PDOException  $e) {
			print $e->getMessage();
		}
	}

	public function runSelect($sql){
		try {
			$statment = $this->connect()->prepare($sql);
			$statment->execute();
			return $statment->fetchAll(PDO::FETCH_ASSOC);
		}catch (PDOException  $e) {
			print $e->getMessage();
		}
	}
}
?>