<?php
/**
 * Devuelve un array de json con el contenido de los tipos de recetas
*/

require_once('../query/consTipos.php');

class Tipos {
    function getAll() {
        $tipo = new ConsTipos();
        $tipos = array();

        $resultado = $tipo->getAll();

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    function printJSON($array) {
        echo json_encode($array);
    }

    function error($mensaje) {
        echo json_encode(array('mensaje' => $mensaje));
    }
}











?>
