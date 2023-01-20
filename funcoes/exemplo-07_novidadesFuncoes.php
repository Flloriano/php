<?php 

function soma(int ...$valores){

	// Soma todos os valores
	return array_sum($valores);

}

echo soma (2,2);
echo "<br>";
echo soma (20,2);
echo "<br>";
echo soma (1.5,3.2);
echo "<br>";

?>