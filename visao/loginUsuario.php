<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Login</title>
<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="lstContato.php">Contatos</a>
  <a class="navbar-brand" href="cadContato.php">Meu Cadastro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
</head>
<body>
<form method='post' action='cadUsuario.php'>
	<div class="form-group">
    	<label for="exampleInputEmail1">Nome de usuário:</label>
    	<input type="text" class="form-control" name="nomeUsuario" placeholder="Insira o nome de usuário">
    </div>
    <div class="form-group">
    	<label for="exampleInputPassword1">Senha:</label>
    	<input type="password" class="form-control" name="senha" placeholder="Password">
 	</div>
 	<button class="btn btn-primary" type="submit">Login</button>
</form>
</body>
</html>