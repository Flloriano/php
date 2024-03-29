<?php

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}


// extends=> estende tudo que tem na classe indicada menos o que for privado
class Programador extends Pessoa{

	public function verDados(){

		// Mostrar de qual classe que fez a instancia do objeto!
		echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

$objeto = new Programador();

//echo $objeto->nome . "<br />";
//echo $objeto->idade . "<br />";
//echo $objeto->senha . "<br />";

$objeto->verDados();

?>