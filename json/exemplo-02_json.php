<?php 

$json = '[{"nome":"Emanuel","idade":30},{"nome":"Gael","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>