<?php 

$a = 10;

//Quando tem o & comerial na frente é passagem de parametro por referencia
function trocaValor(&$b){

	$b += 50;
	return $b;

}

echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;

?>