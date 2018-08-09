<?php
include $_SERVER['CONTEXT_DOCUMENT_ROOT']."/Agenda/modelo/Usuario.class.php";

$usuario = new Usuario();

echo "ok: ".$usuario->login("rodrigo", "123");
echo "<hr>";

echo "ok: ".$usuario->login("luciana", "123");
echo "<hr>";

echo "ok: ".$usuario->login("marcelo", "123");
echo "<hr>";

echo "erro: ".$usuario->login("rodrigo", "1234");
echo "<hr>";

echo "erro: ".$usuario->login("rodrigo", "1");
echo "<hr>";

echo "erro: ".$usuario->login("rodrigo", "");
echo "<hr>";

echo "erro: ".$usuario->login("aaa", "123");
echo "<hr>";

echo "erro: ".$usuario->login("aaaaaaaaaaaaaaaaaaaaaaaa", "123");
echo "<hr>";
?>
