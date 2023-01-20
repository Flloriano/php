<?php 

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	//Get: Pegar.
	public function getModelo(){

		return $this->modelo;

	}

	// Set: Definir.
	public function setModelo($modelo){

		$this->modelo = $modelo;

	}

	//Get: Pegar.
	public function getMotor(){

		return $this->motor;

	}

	// Set: Definir.
	public function setMotor($motor){

		$this->motor = $motor;

	}

	//Get: Pegar.
	public function getAno(){

		return $this->ano;

	}

	// Set: Definir.
	public function setAno($ano){

		$this->ano = $ano;

	}

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
} //Fechando a class Carro.


$gol = new Carro();
$gol->setModelo = ("Gol GT");
$gol->setMotor = ("1.6");
$gol->setAno = ("2017");

//print_r($gol->exibir());

var_dump($gol->exibir());


?>