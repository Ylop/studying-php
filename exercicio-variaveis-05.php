<?php

//escopo de variável

$nome = "joão";

function teste(){

    Global $nome;
    echo $nome;

}

function teste2(){

    $nome = "maria";
    echo $nome . " (teste2)";
}

teste();

echo "</br></br>";

teste2();

?>