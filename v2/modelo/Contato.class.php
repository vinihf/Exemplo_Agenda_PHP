<?php  

	class Contato{
		private $id;
		private $nome;
		private $numero;
		private $usuarioID;
		
		public function __construct(){
			
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNumero(){
			return $this->numero;
		}
		
		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getUsuarioID(){
			return $this->usuarioID;
		}
		
		public function setUsuarioID($usuarioID){
			$this->usuarioID = $usuarioID;
		}
	}

?>
