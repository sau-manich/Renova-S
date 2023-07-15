<?php
class Modelo {
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli('localhost', 'root', '', 'renova');
        if ($this->conexion->connect_error) {
            die('Error de conexión a la base de datos: ' . $this->conexion->connect_error);
        }
    }

    public function crearRegistro($nombre, $contrasena, $email, $rol) {
        $query = "INSERT INTO usuarios (nombre, contrasena, email, rol) VALUES ('$nombre', '$contrasena', '$email', '$rol')";
        $resultado = $this->conexion->query($query);
        if ($resultado) {
            return true; // Registro creado exitosamente
        } else {
            return false; // Error al crear el registro
        }
    }

    public function obtenerRegistros() {
        $query = "SELECT * FROM usuarios";
        $resultado = $this->conexion->query($query);
        if ($resultado) {
            $registros = array();
            while ($row = $resultado->fetch_assoc()) {
                $registros[] = $row;
            }
            return $registros; // Devolver los registros obtenidos
        } else {
            return false; // Error al obtener los registros
        }
    }

    public function obtenerRegistro($id) {
      $query = "SELECT * FROM usuarios WHERE id = ?";
      $stmt = $this->conexion->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result->fetch_assoc();
  }

    public function editarRegistro($id, $nombre, $contrasena, $email, $rol) {
        $query = "UPDATE usuarios SET nombre='$nombre', contrasena='$contrasena', email='$email', rol='$rol' WHERE id=$id";
        $resultado = $this->conexion->query($query);
        if ($resultado) {
            return true; // Registro editado exitosamente
        } else {
            return false; // Error al editar el registro
        }
    }

    public function eliminarRegistro($id) {
        $query = "DELETE FROM usuarios WHERE id=$id";
        $resultado = $this->conexion->query($query);
        if ($resultado) {
            return true; // Registro eliminado exitosamente
        } else {
            return false; // Error al eliminar el registro
        }
    }
}
?>
