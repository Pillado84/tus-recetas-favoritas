<?php
require_once '../../conexion/conexion.php';

class ConsUser
{
    private $conectar;

    public function __construct()
    {
        $this->conectar = new Conexion();
    }

    public function getAll()
    {
        $consulta = 'SELECT usuarios.id AS id, usuarios.dni AS dni, usuarios.img_avatar AS img, usuarios.nombre AS nombre, usuarios.fecha_alta AS fec_alta, usuarios.e_mail AS email, usuarios.apellidos AS apellidos, usuarios.alias AS alias, usuarios.fecha_nacimiento AS fec_nacimiento, usuarios.contrasena AS pass, usuarios.id_rol  FROM usuarios';
        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array["items"] = array();

        while ($row = mysqli_fetch_assoc($resultado)) {
            $arrayAsociativo = [
                "idUsuario" => $row["id"],
                "dni" => $row["dni"],
                "img" => $row["img"],
                "nombre" => $row["nombre"],
                "fec_alta" => $row["fec_alta"],
                "email" => $row["email"],
                "apellidos" => $row["apellidos"],
                "alias" => $row["alias"],
                "fec_nacimiento" => $row["fec_nacimiento"],
                "pass" => $row["pass"],
                "idRol" => $row["id_rol"]
            ];

            array_push($array["items"], $arrayAsociativo);
        }

        return $array;
    }

    public function getByID($id)
    {
        $consulta = 'SELECT usuarios.id AS id, usuarios.dni AS dni, usuarios.img_avatar AS img, usuarios.nombre AS nombre, usuarios.fecha_alta AS fec_alta, usuarios.e_mail AS email, usuarios.apellidos AS apellidos, usuarios.alias AS alias, usuarios.fecha_nacimiento AS fec_nacimiento, usuarios.contrasena AS pass, usuarios.id_rol  FROM usuarios WHERE usuarios.id=' . $id;
        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array["items"] = array();

        $row = mysqli_fetch_assoc($resultado);
        $arrayAsociativo = [
            "idUsuario" => $row["id"],
            "dni" => $row["dni"],
            "img" => $row["img"],
            "nombre" => $row["nombre"],
            "fec_alta" => $row["fec_alta"],
            "email" => $row["email"],
            "apellidos" => $row["apellidos"],
            "alias" => $row["alias"],
            "fec_nacimiento" => $row["fec_nacimiento"],
            "pass" => $row["pass"],
            "idRol" => $row["id_rol"]
        ];

        array_push($array["items"], $arrayAsociativo);

        return $array;
    }

    public function getByEmail($email)
    {
        $consulta = "SELECT usuarios.id AS id, usuarios.dni AS dni, usuarios.img_avatar AS img, usuarios.nombre AS nombre, usuarios.fecha_alta AS fec_alta, usuarios.e_mail AS email, usuarios.apellidos AS apellidos, usuarios.alias AS alias, usuarios.fecha_nacimiento AS fec_nacimiento, usuarios.contrasena AS pass, usuarios.id_rol  FROM usuarios WHERE usuarios.e_mail LIKE '%$email%'";
        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array["items"] = array();

        $row = mysqli_fetch_assoc($resultado);
        $arrayAsociativo = [
            "idUsuario" => $row["id"],
            "dni" => $row["dni"],
            "img" => $row["img"],
            "nombre" => $row["nombre"],
            "fec_alta" => $row["fec_alta"],
            "email" => $row["email"],
            "apellidos" => $row["apellidos"],
            "alias" => $row["alias"],
            "fec_nacimiento" => $row["fec_nacimiento"],
            "pass" => $row["pass"],
            "idRol" => $row["id_rol"]
        ];

        array_push($array["items"], $arrayAsociativo);

        return $array;
    }
}
