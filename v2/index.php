<?php
// aqui é a entrada da api
// como ela vai ser restful, precisamos tratar a entrada de dados...

$rota = $_GET['rota'] ?? 'index';

$rota = explode("/", $rota);

$classes = $rota[0];
$metodo = $rota[1]

$rotas = array(
	"contatos" => array()
);

//$modelo = new $rotas[$rota]["modelo"]."Modelo"();
?>
