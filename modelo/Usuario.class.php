<?php
include $_SERVER['CONTEXT_DOCUMENT_ROOT']."/Agenda/db/MySQL.class.php";

class Usuario {

	private $id;
	private $login;
	private $senha;

	public function __construct($id = null, $login = null, $senha = null){
		$this->id = $id;
		$this->login = $login;
		$this->senha = password_hash($senha, PASSWORD_DEFAULT);
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setSenha($senha){
		$this->senha = password_hash($senha, PASSWORD_DEFAULT);
	}

	public function getSenha(){
		return $this->senha;
	}

	public function login($usuario, $senha){
		$con = new MySQL();
		$sql = "SELECT * FROM usuario WHERE login = '$usuario'";
		$resultado = $con->consulta($sql);
		if(!empty($resultado)){
			if(password_verify($senha, $resultado[0]['senha'])){
				$this->id = $resultado[0]['id'];
				$this->login = $resultado[0]['login'];
				$this->senha = $resultado[0]['senha'];
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}

}
?>
