<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
	header("location:index.php");
}

include $_SERVER['DOCUMENT_ROOT']."/agenda/controle/ControleContato.class.php";
$cContato = new ControleContato();

if(isset($_GET['id'])){
	$cContato->excluir($_GET['id']);
}

$contatos = $cContato->listarTodos($_SESSION['idUsuario']);
?>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<title>Agenda de Contatos</title>
</head>
<body>
<?php
	if($contatos!=false){
		foreach($contatos as $contato){
			echo $contato->getNome()." - ".$contato->getNumero();
			echo "<a href='lstContato.php?id=".$contato->getId()."'>Excluir</a>";
			echo " | ";
			echo "<a href='editContato.php?id=".$contato->getId()."'>Editar</a>";
			echo "<br>";
		}
	}
?>
<br>
<a href='../visao/cadContato.php'>Adicionar Contato</a>
<a href='../index.php'>Voltar</a>
</body>
</html>




