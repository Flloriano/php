<?php 
	
	function teste($callback){

		// utiliza para processos lentos
		$callback();

	}


teste(function(){

	echo "Terminou!";
});


?>