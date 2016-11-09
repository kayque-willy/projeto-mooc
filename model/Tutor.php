<?php
require_once "active/aTutor.php";
require_once "active/aCurso_tutor.php";
require_once "Curso.php";

class Tutor extends aTutor{
	
	private $curso;
	
	public function __Tutor(){
		$this->curso= new Curso();	
	}
	
	public function ministrarCurso($numero_curso,$email_tutor){
		$cria = new aCurso_tutor();
		$cria->setEmail_tutor($email_tutor);
		$cria->setNumero_curso($numero_curso);
		return $cria->insert();
	}
	
	public function removerCurso($numero_curso,$email_tutor){
		$cria = new aCurso_tutor();
		$cria->setEmail_tutor($email_tutor);
		$cria->setNumero_curso($numero_curso);
		return $cria->delete();
	}
	
	public function recuperarCursos($email){
		$recupera = new aCurso_tutor();
		$recupera->setEmail_tutor($email);
		foreach ($recupera->select("numero_curso") as $numero_curso){
			$curso = new Curso();
			$this->curso[]=$curso->recuperarCurso($numero_curso['numero_curso']);
		}
		return $this->curso;
	}
	
	public function cancelarInscricaoCurso($numero_curso,$email_aluno){
		$inscreve = new aCurso_aluno();
		$inscreve->setEmail_aluno($email_aluno);
		$inscreve->setNumero_curso($numero_curso);
		return $inscreve->delete();
	}
	
	public function criarPerfil($email,$senha,$nome,$local='',$foto='',$sobre=''){
		 $this->setEmail($email);
		 $this->setSenha($senha);
		 $this->setNome($nome);
		 $this->setLocal($local);
		 $dir=raiz.'/lib/user.jpg';
		 $this->setFoto("lo_import('$dir')");
		 $this->setSobre($sobre);
		 return $this->insert();
	}
	
	public function atualizarPerfil($email,$senha,$nome,$local,$foto,$sobre,$email_novo=''){
		 $this->setEmail($email);
		 $this->setSenha($senha);
		 $this->setNome($nome);
		 $this->setLocal($local);
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