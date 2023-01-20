<?php 

// Converte o tipo de dados para uma string!  
function soma(float ...$valores):float {

	// Soma todos os valores
	return array_sum($valores);

}

echo var_dump(soma (2,2));
echo "<br>";
echo soma(20,2);
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";

?>