<?php
namespace v2\modelo;

class UsuarioModelo {

	private $dao;

	public function __construct(UsuarioDAO $dao){
		$this->dao = $dao;
	}

	public function listar(){
		$usuarios = $this->dao->listar();
		return $usuarios;
	}
}
?>
