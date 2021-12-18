<?php
require_once('../../conexion/conexion.php');

class ConsTipos {
    private $conectar;

    public function __construct() {
        $this->conectar = new Conexion();        
    }

    function getAll() {
        $consulta = 'SELECT tipo.id AS id, tipo.nombre AS nombre  FROM tipo';
        $resultado = mysqli_query($this->conectar->getConexion(), $consulta);
        $array["items"] = array();

        while($row = mysqli_fetch_assoc($resultado)) {
            $arrayAsociativo = [
                "idTipo" => $row["id"],
                "tipo" => $row["nombre"]
            ];

            array_push($array["items"], $arrayAsociativo);
        }
    
        return $array;
    }
}

?>
