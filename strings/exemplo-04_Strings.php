<?php

$frase = "A repetição é mãe da repetição.";

$palavra = "mãe";


// Indica a posição do argumento produrado!
$q = strpos($frase, "mãe");

var_dump($q);

// Mostra o que está da posição do argumento produrado!
$texto = strtr($frase, 0, $q);

var_dump($texto);

// Mostra o que está da posição do argumento produrado!
$texto2 = strtr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);


?>