<?php

//require_once("config.php");
require_once("config.php");


echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

	case PHP_SESSION_DISABLED:
	echo " as sessóes estiverem desabilidatas";
	break;

	case PHP_SESSION_NONE:
	echo " as sessóes estiverem habilidatas, mas nenhuma existir";
	break;

	case PHP_SESSION_ACTIVE:
	echo " as sessóes estiverem habilidatas, e uma existir";
	break;


}


?>