<?php

//tipos básicos////////////////////////////////////////

//string
$nome ="tereza";

//string
$site = 'www.google.com.br';

//número
$ano = 1990;

//ponto flutuante
$salario = 5500.99;

//booleano
$bloqueado = false;


//tipos compostos////////////////////////////////////

//array
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

//orientação a objeto sendo usado [expressão new]
$nascimento = new DateTime();

echo "</br></br>";

var_dump($nascimento);

echo "</br></br>";

//tipos especiais////////////////////////////////////

$arquivo = fopen("exercicio-1.php", "r");

echo "</br></br>";

var_dump ($arquivo);

echo "</br></br>";

$nulo = null;

?>