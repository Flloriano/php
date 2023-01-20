<?php

session_id('to6v97j01hcmhbmi828o1rgm79');

session_start();
//require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>