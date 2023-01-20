<?php

//include => Chama função de outro arquivo e tenta funcionar mesmo que o arqvuio não esteja funcionando corretamente. Busca o arquivo do diretorio padrão caso o arquivo não esteja funcionando corretamente. É mais vulneravel em questão de segurança pois permite trazer aquivos de site.
 
//include "exemplo-01_include.php";

//require => Obriga que o arquivo exista e que esteja funcionando corretamente, se nõ existir gera erro fatal.
// require "inc/exemplo-01_include.php";

// require_once => ingnora caso o arquivo tenha sido chamado mais de uma vez
require_once "inc/exemplo-01_include.php";
require_once "inc/exemplo-01_include.php";


$resultado = soma(10, 23);

echo $resultado;


?>