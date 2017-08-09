<?php
	class Contato{
		private $id;
		private $nome;
		private $numero;
		
		public function __construct($id = null, $nome = null, $numero = null){
			$this->id = $id;
			$this->nome = $nome;
			$this->numero = $numero;
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
		
	}
?>