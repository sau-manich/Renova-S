<?php
require_once '../../Modelo/Usuario.php';

class Controlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function obtenerRegistros() {
        return $this->modelo->obtenerRegistros();
    }

    public function obtenerRegistro($id) {
        return $this->modelo->obtenerRegistro($id);
    }

    public function crearRegistro($nombre, $contrasena, $email, $rol) {
        return $this->modelo->crearRegistro($nombre, $contrasena, $email, $rol);
    }

    public function editarRegistro($id, $nombre, $contrasena, $email, $rol) {
        return $this->modelo->editarRegistro($id, $nombre, $contrasena, $email, $rol);
    }

    public function eliminarRegistro($id) {
        return $this->modelo->eliminarRegistro($id);
    }
}
?>
