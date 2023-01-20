<?php

$empresa = "Hcode";


// Trocar dados informar primeiro o que está sendo pesquisado, depois pelo que será trocado e depois o nome da variavel
$empresa = str_replace("o", "0", $empresa);

echo $empresa;

echo "<br>";

$empresa = str_replace("e", "3", $empresa);

echo $empresa;


?>