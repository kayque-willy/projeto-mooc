<?php
require_once "active/aAluno.php";
require_once "active/aCurso_aluno.php";
require_once "Curso.php";
require_once "Desempenho.php";

class Aluno extends aAluno{
	
	private $curso;
	
	public function __Aluno(){
		$this->curso= new Curso();	
	}
	
	public function inscreverCurso($numero_curso,$email_aluno){
		$inscreve = new aCurso_aluno();
		$inscreve->setEmail_aluno($email_aluno);
		$inscreve->setNumero_curso($numero_curso);
		return $inscreve->insert();
	}
	
	public function cancelarInscricaoCurso($numero_curso,$email_aluno){
		$inscreve = new aCurso_aluno();
		$inscreve->setEmail_aluno($email_aluno);
		$inscreve->setNumero_curso($numero_curso);
		$desempenho = new Desempenho();
		if($desempenho->removerDesempenho($email_aluno,$numero_curso))
			return $inscreve->delete();
	}
	
	public function recuperarInscricao($numero_curso,$email_aluno){
		$inscreve = new aCurso_aluno();
		$inscreve->setEmail_aluno($email_aluno);
		$inscreve->setNumero_curso($numero_curso);
		if($email_aluno) return $inscreve->select("*");
		else return null;
	}
	
	public function recuperarCursos($email){
		$recupera = new aCurso_aluno();
		$recupera->setEmail_aluno($email);
		foreach ($recupera->select("numero_curso") as $numero_curso){
			$curso = new Curso();
			$this->curso[]=$curso->recuperarCurso($numero_curso['numero_curso']);
		}
		return $this->curso;
	}
	
	public function criarPerfil($email,$senha,$nome,$local=' ',$sexo=' ',$foto=' ',$sobre=' '){
		 $this->setEmail($email);
		 $this->setSenha($senha);
		 $this->setNome($nome);
		 $this->setLocal($local);
		 $this->setSexo($sexo);
		 $dir=raiz.'/lib/user.jpg';
		 $this->setFoto("lo_import('$dir')");
		 $this->setSobre($sobre);
		 return $this->insert();
	}
	
	public function atualizarPerfil($email,$senha,$nome,$local,$sexo,$foto,$sobre,$email_novo=''){
		 $this->setEmail($email);
		 $this->setSenha($senha);
		 $this->setNome($nome);
		 $this->setLocal($local);
		 $this->setSexo($sexo);
		 $this->setFoto($foto);
		 $this->setSobre($sobre);
		 return $this->update($email_novo);
	}
	
	public function recuperarPerfil($email,$param="*"){
		$this->setEmail($email);
		$temp = raiz."/temp/".$email.".jpg";
		return $this->select($param.",lo_export(foto, '$temp')");
	}
	
	public function login($email,$senha){
		$this->setEmail($email);
		$this->setSenha($senha);
		return $this->select("email,nome");
	}
	
}
?>