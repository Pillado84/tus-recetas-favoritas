<?php

class Conexion {

    public function getConexion() {
        $host = "localhost"; // 127.0.0.1
        $db = "recetas"; // base de datos de mysql
        $user = "root"; // usuario de mysql
        $password = "Abc123.."; // contraseña de mysql

        $conexion = new mysqli($host, $user, $password, $db);
        mysqli_set_charset($conexion, "utf8");

        if ($conexion->connect_errno) {
            die("La conexion ha fallado" . $conexion->connect_errno);
        } else {
            return $conexion;
        }
    }

    // Crear funcion para cerrar la conexion
}


?>