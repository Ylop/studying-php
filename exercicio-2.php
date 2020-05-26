<?php

//comentário global

/* 
$anoNascimento = 1990;

$nomeCompleto = "";
*/


//string 
$nome1 = "joão";
$nome2 = "maria";

$nome3 = "bruno";
$sobreNome = "souza";

//concatenação
$nomeCompleto = $nome3 . " " . $sobreNome;

echo $nomeCompleto;

echo "</br></br>";

//exibe dado em tela
echo $nome1;
echo "</br></br>";
echo $nome2;

//quebra linha
echo "</br>";

//limpa a variável
unset($nome1, $nome2);

//condição: se a variável não existir não executa
if (isset($nome1)){

//exibe dado em tela
echo $nome1;
echo $nome2;

}

?>