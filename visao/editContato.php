<?php
include $_SERVER['DOCUMENT_ROOT']."/agenda/controle/ControleContato.class.php";
$cContato = new ControleContato();


if(isset($_POST['botao']) && $_POST['botao']=="Editar"){
	$cContato->alterar($_POST);
}else if(isset($_GET['id'])){
		$contato = $cContato->listarUm($_GET['id']);
}

?>
<html lang='pt-br'>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<meta charset='utf-8'>
<title>Agenda de Contatos</title>
</head>
<body>
<div class='container-fluid'>
<div class="row justify-content-center">
<div class="col-5">
<form method='post' action='editContato.php'>
<div class="form-group row">
    <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-10">
	<?php
	echo "<input type='text' class='form-control' id='nome' name='nome' value=".$contato->getNome()." required>";
	?>
    </div>
</div>
<div class="form-group row">
    <label for="numero" class="col-sm-2 col-form-label">Número:</label>
    <div class="col-sm-10">
	<?php
	echo "<input type='tel' class='form-control' id='numero' name='numero' value=".$contato->getNumero()." required>";
	?>
    </div>
</div>
<?php
	echo "<input type='hidden' name='id' value=".$contato->getId().">";
?>
<input type='submit' class='btn btn-primary btn-lg btn-block' name='botao' value='Editar'>
</form>
<a class='btn btn-danger btn-lg btn-block' href='../index.html'>Voltar</a>
</div>
</div>
</div>
</div>
</body>
</html>