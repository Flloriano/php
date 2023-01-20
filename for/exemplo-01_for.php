<?php 

	/*
    for($i = 0; $i < 10; $i++){

		echo $i . "<br>";
	
    }
	*/

    // Pular de 5 em cinco exemplo.
	for($i = 0; $i < 1000; $i += 5){

		// ingnora se estiver dentro dessa sequencia
		if($i >= 200 && $i <= 800) continue;

		if($i === 900) break;

		echo $i . "<br>";

	}

?>