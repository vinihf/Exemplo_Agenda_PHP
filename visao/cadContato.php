<?php
if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
	include $_SERVER['CONTEXT_DOCUMENT_ROOT']."/Agenda/controle/ControleContato.class.php";
=======
	include $_SERVER['CONTEXT_DOCUMENT_ROOT']."/agenda/controle/ControleContato.class.php";
>>>>>>> b9deff1ab47969d741c7bd37babb0bbff180c58b
	$cControle = new ControleContato();
	$cControle->inserir($_POST);
}
?>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="lstContato.php">Contatos</a>
  <a class="navbar-brand" href="cadContato.php">Meu Cadastro</a>
  <a class="navbar-brand" href="loginUsuario.php">Sair</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<title>Agenda de Contatos</title>
</head>
<body>
<form method='post' action='cadContato.php'>
	<div class="form-group">
    	<label for="exampleInputEmail1">Nome do contato:</label>
    	<input type="text" class="form-control" name="nomeUsuario" placeholder="Insira o nome de usuário">
    </div>
    <div class="form-group">
    	<label for="exampleInputPassword1">Telefone:</label>
    	<input type="text" class="form-control" name="numero" placeholder="Informe o número com o DDD">
 	</div>
 	<button class="btn btn-primary" type="submit">Salvar</button>
</form>
<a href='../index.html'>Voltar</a>
</body>
</html>
