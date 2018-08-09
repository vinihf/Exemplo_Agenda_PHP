<?php
namespace v2\controle;
use v2\modelo;

class PaginacaoControle {

	private $modelo;

	public function construct(modelo\PaginacaoModelo $modelo){
		$this->modelo = $modelo;
	}

	public function listar($pagina){
		if($pagina <= 0){
			$pagina = 1;
		}
		$this->modelo->setPagina($pagina);
	}
}
?>
