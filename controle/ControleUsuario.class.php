<?php
include $_SERVER['DOCUMENT_ROOT']."/agenda/modelo/Usuario.class.php";

class ControleUsuario{
	
	public function inserir($dados){
		$usuario = new Usuario(null,$dados['login'],$dados['senha']);
		$usuario->inserir();
		header("location:../index.php");
	}
	
	public function autenticar($dados){
		$usuario = new Usuario(null,$dados['login'],$dados['senha']);
		$resultado = $usuario->autenticar();
       	if(!empty($resultado)){
			session_start();
			$_SESSION['idUsuario'] = $resultado[0]["id"];
			header("location:visao/lstContato.php");
		}else{
			header("location:index.php");
		}
	}
	
}

?>