<?php 

class Documento{

	private $numero;

	public function getNumero(){

		return $this->numero;

	}


	public function setNumero($numero){
		// É utilizado para acessar metodos estáticos.
		$resultado = Documento::validarCPF($numero); 

		if ($resultado === false) {

			throw new Exception("CPF informado não é valido.", 1);

		}

		$this->numero = $numero;
	}

	public static function validarCPF($cpf):bool{

		//Verifica se um numero foi infomado
		if(empty($cpf)) {
        return false;
	    }
	 
	 	//Elimina possível mascara
	    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	     
		//Verifica se o numero de digitos informados é igual a 11.	   
	    if (strlen($cpf) != 11) {
	        echo "length";
	        return false;
	    }
	    

	    //Verifica se nenhuma das sequencias inválidas foi digita. Caso afirmativo, retorna falso.
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999') {
	        return false;

	     // Calcula os digitos verificadores para verificar se o CPF é valido
	     } else {   
	         
	        for ($t = 9; $t < 11; $t++) {
	             
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d) {
	                return false;
	            }
	        }
	 
	        return true;
	    }

	}


}

/*
$cpf = new Documento();
$cpf->setNumero("40817259856");

var_dump($cpf->getNumero());
*/


//Utilizar sem intanciar a class
var_dump(Documento::validarCPF("40817259856"));
?>