<?php 

//require_once("Delrey.php"); - seria para chamar a classe Relrey exemplo 

function __autoload($nomeClasse){

	//var_dump($nomeClasse);
	require_once("$nomeClasse.php");
	

}

$carro = new DelRey();

$carro->acelerar(80);

?>