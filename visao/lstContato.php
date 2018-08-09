<?php
include $_SERVER['DOCUMENT_ROOT']."/agenda/controle/ControleContato.class.php";
$cContato = new ControleContato();

if(isset($_GET['id'])){
	$cContato->excluir($_GET['id']);
}

$contatos = $cContato->listarTodos();
?>
<html lang='pt-br'>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" type='text/css'>

<meta charset='utf-8'>
<title>Agenda de Contatos</title>
</head>
<body>
<?php
	if($contatos!=false){

			echo "<table class='table'><thead><tr><th>Nome</th><th>Número</th><th>Ações</th></thead><tbody>";

		foreach($contatos as $contato){
			echo "<tr><td>";
			echo $contato->getNome()." </td><td> ".$contato->getNumero();
			echo "</td><td>";
			echo "<a href='lstContato.php?id=".$contato->getId()."'>Excluir</a>";
			echo "<a href='editContato.php?id=".$contato->getId()."'>       |      Editar</a>";
			echo "</td></tr>";
		}

		   echo "</tbody><table>";
	}
?>
<br>
<a href='../index.html'>Voltar</a>
</body>
</html>




