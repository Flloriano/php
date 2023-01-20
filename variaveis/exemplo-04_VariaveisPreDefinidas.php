<?php

$nome = (int)$_GET["a"];  

//var_dump($nome);

// pegar ip do usuário
//$ip = $_SERVER['REMOTE_ADDR'];



$ip = $_SERVER['SCRIPT_NAME'];



echo $ip;

?>