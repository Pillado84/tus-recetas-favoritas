<?php
require_once('./tipos.php');

header('Access-Control-Allow-Origin: *');

$api = new Tipos();

$api->getAll();


?>
