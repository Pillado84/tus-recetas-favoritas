<?php
require_once './recetas.php';

header('Access-Control-Allow-Origin: *');

$api = new Recetas();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (is_numeric($id)) {
        $api->getById($id);
    } else {
        $api->error('Los parámetros son incorrectos');
    }

} else if (isset($_GET['name'])) {
    $name = $_GET['name'];

    if (is_string($name)) {
        $api->getByName($name);
    } else {
        $api->error('Los parámetros son incorrectos');
    }
} else if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];

    if (is_numeric($idUsuario)) {
        $api->getByIdUser($idUsuario);
    } else {
        $api->error('Los parámetros son incorrectos');
    }
} else if (isset($_GET['type'])) {
    $type = $_GET['type'];

    if (is_string($type)) {
        $api->getByType($type);
    } else {
        $api->error('Los parámetros son incorrectos');
    }
} else {
    $api->getAll();
}
