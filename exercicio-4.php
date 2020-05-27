<?php

//recebe através de um método
//converter o tipo, inserindo o int antes do GET
$nome = (int)$_GET['a'];

var_dump($nome);

echo "</br></br>";

//verificar ip do provedor de acesso do usuário
$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

echo "</br></br>";

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>