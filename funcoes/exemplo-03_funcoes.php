<?php 

//Parametros obrigatorios da função precisam está do lado esquerdo!
function Ola($texto = "Ola Mundo", $periodo = "Bom dia" ){

	return "$texto! $periodo! <br>";

}

// Não vai trazer nada
echo ola("","");

// Trará todas as informações
echo ola();

// Passo o parametro para a função!
echo ola("Ola Elias");



?>