<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Emanuel',
	'idade'=>30
));

array_push($pessoas, array(
	'nome'=>'Gael',
	'idade'=>25
));

echo json_encode($pessoas);


?>