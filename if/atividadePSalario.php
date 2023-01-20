<?php


$tempoEmpresa = 5;
$salarioAtual = 1500;
$aumentoUmAnoSalarial = 500;
$aumentoDoisAnoSalarial = 1000;

if($tempoEmpresa <= 1){

	$valorTotal = $salarioAtual + $aumentoUmAnoSalarial;

	echo $valorTotal;


} else if ($tempoEmpresa <= 2 || $tempoEmpresa <= 3){

    $valorTotal = $salarioAtual + $aumentoDoisAnoSalarial;

    echo $valorTotal;

} else {

    $valorTotal = $salarioAtual + 2000;

    echo $valorTotal;
}


?>