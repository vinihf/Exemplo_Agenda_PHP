<?php
include $_SERVER['DOCUMENT_ROOT']."/agenda/modelo/Contato.class.php";

class ControleContato{
	
	public function inserir($dados){
		$contato = new Contato(null,$dados['nome'],$dados['numero']);
		$contato->inserir();
		header("location:../visao/lstContato.php");
	}
	
	public function listarTodos(){
		$contato = new Contato();
		$contatos = $contato->listarTodos();
		return $contatos;
	}
	
	public function listarUm($id){
		$contato = new Contato($id,null,null);
		$contato->listarUm();
		return $contato;
	}
	
	public function excluir($id){
		$contato = new Contato($id,null,null);
		$contato->excluir();
	}
	
	public function alterar($dados){
		$contato = new Contato($dados['id'],$dados['nome'],$dados['numero']);
		$contato->alterar();
		header("location: lstContato.php");
	}
	
	
}

?>