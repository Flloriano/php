<?php 

	
//session_start();
require_once("config.php");

//Limpa vaiavel de sessão, mas não remove o usuário
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//Limpa a variavel e remove o usuário
session_destroy();

?>