<?php
/**
 * Devuelve un array de json con el contenido de las recetas
 */

require_once '../query/consultas.php';

class Recetas
{
    public function getAll()
    {
        $receta = new Consultas();
        $recetas = array();

        $resultado = $receta->getAll();

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    public function getById($id)
    {
        $receta = new Consultas();
        $resultado = array();

        $resultado = $receta->getByID($id);

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    public function getByIdUser($idUsuario)
    {
        $receta = new Consultas();
        $resultado = array();

        $resultado = $receta->getByIdUser($idUsuario);

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    public function getByName($nombre)
    {
        $receta = new Consultas();
        $resultado = array();

        $resultado = $receta->getByName($nombre);

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    public function getByType($type)
    {
        $receta = new Consultas();
        $resultado = array();

        $resultado = $receta->getByType($type);

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    public function printJSON($array)
    {
        echo json_encode($array);
    }

    public function error($mensaje)
    {
        echo json_encode(array('mensaje' => $mensaje));
    }
}
