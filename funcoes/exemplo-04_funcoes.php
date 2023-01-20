<?php 

function Ola(){

	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(ola("Bom dia", 10));

?>