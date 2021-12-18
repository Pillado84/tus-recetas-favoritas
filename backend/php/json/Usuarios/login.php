<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

$json = file_get_contents('php://input'); // recibe el json de angular

$params = json_decode($json); // decodifica el json y lo guarda en la variable

require '../../conexion/conexion.php'; // importa el archivo con la conexion a la db

$conexion = new Conexion(); // crea la conexion

// realiza la query a la db
$registros = mysqli_query($this->conectar->getConexion(), "SELECT * FROM usuarios WHERE e_mail='$params->email' and contrasena='$params->password'");

// si el usuario existe obtiene los datos y los guarda en un array
if ($resultado = mysqli_fetch_array($registros)) {
    $datos[] = $resultado;
}

$json = json_encode($datos); // genera el json con los datos obtenidos

echo $json; // muestra el json generado

?>
