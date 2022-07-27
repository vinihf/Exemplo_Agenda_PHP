<?php
if(isset($_POST['botao']) && $_POST['botao']=="Acessar"){
	include $_SERVER['DOCUMENT_ROOT']."/agenda/controle/ControleUsuario.class.php";
	$cUsuario = new ControleUsuario();
	$cUsuario->autenticar($_POST);
}
?>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<title>Agenda de Contatos</title>
</head>
<body>
<h1>Minha Agenda</h1>
<form method="post" action="index.php">
    <label for='login'>Login:</label>
    <input name=login id=login type='text'>
    <label for=senha>Senha:</label>
    <input name='senha' id='senha' type=password>
    <input type='submit' name='botao' value="Acessar">
</form>
<a href='visao/cadUsuario.php'>Novo usuário</a>
</body>
</html>