<?php 

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Elias Floriano");
$cad->setEmail("eliasflloriano@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>