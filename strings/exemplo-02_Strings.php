<?php

$nome = "Joao Rangel";

//echo $nome;

// Para deixar texto em maiusculo
//echo strtoupper ($nome);

$nome = strtoupper ($nome);

echo $nome;

echo "<br>";

//Para converter texto em letra minuscula
$nome = strtolower($nome);
echo $nome;

echo "<br>";

//Para converter texto a primeira letra de cada palavra para maiusculo
echo ucwords($nome);

echo "<br>";

//Para converter texto a primeira letra da primeira palavra para maiusculo
echo ucfirst($nome);



?>