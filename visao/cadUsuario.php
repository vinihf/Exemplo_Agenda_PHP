<?php
if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
	include $_SERVER['DOCUMENT_ROOT']."/agenda/controle/ControleUsuario.class.php";
	$cUsuario = new ControleUsuario();
	$cUsuario->inserir($_POST);
}
?>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<title>Agenda de Contatos</title>
</head>
<body>
<form method='post' action='cadUsuario.php'>
	Login: <input type='text' name='login'>
	<br>
	Senha: <input type='text' name='senha'>
	<br>
	<input type='submit' name='botao' value='Adicionar'>
</form>
<a href='../index.php'>Voltar</a>
</body>
</html>