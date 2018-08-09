<?php
<<<<<<< HEAD
include $_SERVER['CONTEXT_DOCUMENT_ROOT']."/Agenda/controle/ControleContato.class.php";
=======
include $_SERVER['CONTEXT_DOCUMENT_ROOT']."/agenda/controle/ControleContato.class.php";
>>>>>>> b9deff1ab47969d741c7bd37babb0bbff180c58b
$cContato = new ControleContato();


if(isset($_POST['botao']) && $_POST['botao']=="Editar"){
	$cContato->alterar($_POST);
}else if(isset($_GET['id'])){
		$contato = $cContato->listarUm($_GET['id']);
}

?>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<title>Agenda de Contatos</title>
</head>
<body>
<form method='post' action='editContato.php'>
<?php
	echo "Nome: <input type='text' name='nome' value=".$contato->getNome().">";
	echo "<br>";
	echo "Numero: <input type='tel' name='numero' value=".$contato->getNumero().">";
	echo "<br>";
	echo "<input type='hidden' name='id' value=".$contato->getId().">";
?>
	<input type='submit' name='botao' value='Editar'>
</form>
<a href='../index.html'>Voltar</a>
</body>
</html>
