<?php 

	//$ts = strtotime("2022-02-12");
	
	// Data dp dia atual
	//$ts = strtotime("now");

	// Data do dia seguinte
	//$ts = strtotime("+1 day");

	// Data do dia seguinte
	$ts = strtotime("+1 week");

	echo date("l, d/m/Y", $ts);

?>