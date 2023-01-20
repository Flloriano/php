<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarchar($marchar);

}

abstract class Automovel implements Veiculo {

	public function acelerar ($velocidade){
		echo "O veículo acelerou até " . $velocidade . " km/h";
	}

	public function freiar ($velocidade){
		echo "O veículo freiou até " . $velocidade . "km/h";
	}

	public function trocarMarchar ($marchar){
		echo "O veículo trocou a marchar " . $marchar;
	}

} 


?>