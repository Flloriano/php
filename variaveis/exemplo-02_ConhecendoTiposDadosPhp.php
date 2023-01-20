<?php 

// -> para realiza comentário em uma linha

/* -> para realizar comentário em bloco em mais de uma linha
*/

/*
$anoNascimento => nome de variaveis sempre começar com letra miniscula e ser tiver nome composto a segunda palavra começar com a letra maiuscula (padrão Camel Case).
=> Variaveis não podem começar com numero!
=> O unico caracter especial permitido no nome das variaveis é o Underline (_)!

*/

$nome1 = "Elias";

$sobrenome = "Floriano";

//Concaternar => utiliza o . para colocar espaço colocar aspas e informar o espeço entre elas. 
$nomeCompleto = $nome1. " " .$sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

// unset limpa a variavel. exemplo: unset($nome1, $nome2);
unset($nome1);

if(isset($nome1)){

	echo $nome1;

}


 ?>