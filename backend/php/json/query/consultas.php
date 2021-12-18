<?php
require_once '../../conexion/conexion.php';

class Consultas
{
    private $conectar;

    public function __construct()
    {
        $this->conectar = new Conexion();
    }

    public function getAll()
    {
        $consulta = 'SELECT usuarios.nombre AS usuarios, recetas.id_usuario AS id_Usuario, recetas.nombre AS recetas, recetas.id AS id_Receta, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre AS tipo, tipo.color, AVG(COALESCE(valorar.puntos,0)) AS media FROM recetas JOIN usuarios ON recetas.id_usuario = usuarios.id JOIN recetas_tipo ON recetas.id = recetas_tipo.id_recetas JOIN tipo ON recetas_tipo.id_tipo = tipo.id LEFT JOIN valorar ON recetas.id = valorar.id_receta GROUP BY usuarios.nombre, recetas.id_usuario, recetas.nombre, recetas.id, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre, tipo.color';
        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array = $this->sql($resultado);

        return $array;
    }

    public function getByID($id)
    {
        $consulta = "SELECT usuarios.nombre AS usuarios, recetas.id_usuario AS id_Usuario, recetas.nombre AS recetas, recetas.id AS id_Receta, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre AS tipo, tipo.color, AVG(COALESCE(valorar.puntos,0)) AS media FROM recetas JOIN usuarios ON recetas.id_usuario = usuarios.id JOIN recetas_tipo ON recetas.id = recetas_tipo.id_recetas JOIN tipo ON recetas_tipo.id_tipo = tipo.id LEFT JOIN valorar ON recetas.id = valorar.id_receta WHERE recetas.id = $id GROUP BY usuarios.nombre, recetas.id_usuario, recetas.nombre, recetas.id, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre, tipo.color";
        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array["items"] = array();

        $row = mysqli_fetch_assoc($resultado);
        $arrayAsociativo = [
            "tipo" => $row["tipo"],
            "color" => $row["color"],
            "idUsuario" => $row["id_Usuario"],
            "usuario" => $row["usuarios"],
            "idReceta" => $row["id_Receta"],
            "receta" => $row["recetas"],
            "preparacion" => $row["preparacion"],
            "fechaCreacion" => $row["fecha_creacion"],
            "imagen" => $row["imagen"],
            "infNutricional" => $row["inf_nutricional"],
            "ingredientes" => $row["ingredientes"],
            "descripcion" => $row["descripcion"],
            "media" => $row["media"],
        ];

        array_push($array["items"], $arrayAsociativo);

        return $array;
    }

    public function getByName($nombre)
    {
        $consulta = "SELECT usuarios.nombre AS usuarios, recetas.id_usuario AS id_Usuario, recetas.nombre AS recetas, recetas.id AS id_Receta, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre AS tipo, tipo.color, AVG(COALESCE(valorar.puntos,0)) AS media FROM recetas JOIN usuarios ON recetas.id_usuario = usuarios.id JOIN recetas_tipo ON recetas.id = recetas_tipo.id_recetas JOIN tipo ON recetas_tipo.id_tipo = tipo.id LEFT JOIN valorar ON recetas.id = valorar.id_receta WHERE recetas.nombre LIKE '%$nombre%' GROUP BY usuarios.nombre, recetas.id_usuario, recetas.nombre, recetas.id, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre, tipo.color";

        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array = $this->sql($resultado);

        return $array;
    }

    public function getByIdUser($idUsuario)
    {
        $consulta = "SELECT usuarios.nombre AS usuarios, recetas.id_usuario AS id_Usuario, recetas.nombre AS recetas, recetas.id AS id_Receta, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre AS tipo, tipo.color, AVG(COALESCE(valorar.puntos,0)) AS media FROM recetas JOIN usuarios ON recetas.id_usuario = usuarios.id JOIN recetas_tipo ON recetas.id = recetas_tipo.id_recetas JOIN tipo ON recetas_tipo.id_tipo = tipo.id LEFT JOIN valorar ON recetas.id = valorar.id_receta WHERE recetas.id_usuario = $idUsuario GROUP BY usuarios.nombre, recetas.id_usuario, recetas.nombre, recetas.id, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre, tipo.color";

        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array = $this->sql($resultado);

        return $array;
    }

    public function getByType($type)
    {
        $consulta = "SELECT usuarios.nombre AS usuarios, recetas.id_usuario AS id_Usuario, recetas.nombre AS recetas, recetas.id AS id_Receta, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre AS tipo, tipo.color, AVG(COALESCE(valorar.puntos,0)) AS media FROM recetas JOIN usuarios ON recetas.id_usuario = usuarios.id JOIN recetas_tipo ON recetas.id = recetas_tipo.id_recetas JOIN tipo ON recetas_tipo.id_tipo = tipo.id LEFT JOIN valorar ON recetas.id = valorar.id_receta WHERE tipo.nombre LIKE '%$type%' GROUP BY usuarios.nombre, recetas.id_usuario, recetas.nombre, recetas.id, recetas.preparacion, recetas.fecha_creacion, recetas.imagen, recetas.inf_nutricional, recetas.ingredientes, recetas.descripcion, tipo.nombre, tipo.color";

        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array = $this->sql($resultado);

        return $array;
    }

    private function sql($resultado)
    {
        $arrayTemporal["items"] = array();

        while ($row = mysqli_fetch_assoc($resultado)) {
            $arrayAsociativo = [
                "tipo" => $row["tipo"],
                "color" => $row["color"],
                "idUsuario" => $row["id_Usuario"],
                "usuario" => $row["usuarios"],
                "idReceta" => $row["id_Receta"],
                "receta" => $row["recetas"],
                "preparacion" => $row["preparacion"],
                "fechaCreacion" => $row["fecha_creacion"],
                "imagen" => $row["imagen"],
                "infNutricional" => $row["inf_nutricional"],
                "ingredientes" => $row["ingredientes"],
                "descripcion" => $row["descripcion"],
                "media" => $row["media"],
            ];

            array_push($arrayTemporal["items"], $arrayAsociativo);
        }

        return $arrayTemporal;
    }
}
