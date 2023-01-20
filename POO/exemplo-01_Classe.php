<?php 

// Criar uma classe

class Pessoa { // Obs: Toda a Classe começar com a primeira letra maiuscula


	public $nome; //Criando um atributo para a classe

	public function falar(){ // Criando método

		// $this: representa a class já instanciada ou seja o objeto. Apenas utiliza o $this dentro do método, fora não utiliza.
		return "O meu nome é ".$this->nome;

	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


?>