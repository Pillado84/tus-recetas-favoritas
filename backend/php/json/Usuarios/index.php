<?php
require_once('./usuarios.php');

header('Access-Control-Allow-Origin: *');

$api = new Usuarios();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (is_numeric($id)) {
        $api->getById($id);
    } else {
        $api->error('Los parámetros son incorrectos');
    }
    
} else if (isset($_GET['email'])) {
    $name = $_GET['email'];

    $api->getByEmail($email);
}

else {
    $api->getAll();
}
?>
