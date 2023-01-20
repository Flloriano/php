<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;
	private $estado;
	private $pais;


	public function __construct($a, $b, $c, $d, $e){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
		$this->estado = $d;
		$this->pais = $e;
	}	

	//Desconectar da memória
	public function __destruct(){
		//\var_dump("DESTRUIR");
	}

	//Para retornar uma string
	public function __toString(){

		return $this->logradouro.", ".$this->numero." - ".$this->cidade." - ".$this->estado." , ".$this->pais;
	}

}


$meuEndereco = new Endereco("Rua Ademar Saraiva leão","33","São José do Rio Preto","São Paulo", "Brazil");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;

?>