<?php
include $_SERVER['DOCUMENT_ROOT']."/agenda/db/MySQL.class.php";

class Usuario{

    private $id;
    private $login;
    private $senha;

    public function __construct($id=null,$login = null, $senha = null){
        $this->id = $id;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getId(){
        return $this->id;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getSenha(){
        return $this->senha;
    }
    
    public function autenticar(){
        $con = new MySQL();
		$sql = "SELECT * from usuario where login = '{$this->login}' and senha = '{$this->senha}'";
		$resultado = $con->consulta($sql);
        return $resultado;
    }

    public function inserir(){
        $con = new MySQL();
		$sql = "INSERT INTO usuario (login,senha) VALUES ('$this->login','$this->senha')";
		$con->executa($sql);
    }
}