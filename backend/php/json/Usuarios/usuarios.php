<?php
/**
 * Devuelve un array de json con el contenido de los usuarios
*/

require_once('../query/consUser.php');

class Usuarios {
    function getAll() {
        $usuario = new ConsUser();
        $tipos = array();

        $resultado = $usuario->getAll();

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    function getByEmail($email) {
        $usuario = new ConsUser();
        $tipos = array();

        $resultado = $usuario->getByEmail($email);

        if (count($resultado) > 0) {
            $this->printJSON($resultado);
        } else {
            $this->error('No hay elementos registrados');
        }
    }

    function getById($id) {
        $usuario = new ConsUser();
        $resultado = array();

        $resultado = $usuario->getByID($id);

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
