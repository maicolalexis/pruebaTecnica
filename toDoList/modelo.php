<?php
require_once("conexion.php");

class modelo
{
    private $conn;
    public function __construct()
    {
        $db = new conexion();
        $this->conn = $db->conexion();
    }

    public function guardandoDatosAgregados($descripcion, $estado)
    {

        try {
            if ($estado == "activo") {
                $fechaActual = date('d-m-Y');
                $fechaFinalizada = "no a culminado";
            } else if ($estado == "inactivo" or $estado == "cancelado") {
                $fechaActual = "No a iniciado";
                $fechaFinalizada = "no a culminado";
            }
            $query = "INSERT INTO todolist (descripcion, estado, fechaCreacion, fechaCulminacion) 
        VALUES ('$descripcion', '$estado', '$fechaActual', '$fechaFinalizada')";
            $this->conn->query($query);
            header("Location: index.php");
            die();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function editarDatos($id, $descripcion, $estado)
    {

        $conexion = $this->conn;
        $modelo = new modelo();
        $data = $modelo->listarDatosPorId($conexion, $id);
        echo $estado;

        try {

            foreach ($data as $lista) {
                $estadoAnterior = $lista['estado'];
            }
            echo $estadoAnterior;
            if ($estado == "activo" && $estadoAnterior == "cancelado") {
                $fechaActual = date('d-m-Y');
                $fechaFinalizada = "no a culminado";
                $query = "UPDATE todolist SET descripcion= '$descripcion', estado='$estado',
            fechaCreacion='$fechaActual', fechaCulminacion='$fechaFinalizada' WHERE id=$id";
                $this->conn->query($query);
            
            
            } else if ($estado == "terminado" && $estadoAnterior = "activo") {
                $fechaFinalizada = date('d-m-Y');
                $query = "UPDATE todolist SET descripcion= '$descripcion', estado='$estado',
                fechaCulminacion='$fechaFinalizada' WHERE id=$id";
                $this->conn->query($query);
            
            
            } else if ($estado == "cancelado") {
                $fechaActual = "no iniciado";
                $fechaFinalizada = "no a culminado";
                $query = "UPDATE todolist SET descripcion= '$descripcion', estado='$estado',
            fechaCreacion='$fechaActual', fechaCulminacion='$fechaFinalizada' WHERE id=$id";
                $this->conn->query($query);
            }
            else if ($estado == $estadoAnterior) {
            
                $query = "UPDATE todolist SET descripcion= '$descripcion', estado='$estado', WHERE id=$id";
                $this->conn->query($query);
            }else if($estado == "activo" && $estadoAnterior == "terminado"){
                $fechaActual = date('d-m-Y');
                $fechaFinalizada = "no a culminado";
                $query = "UPDATE todolist SET descripcion= '$descripcion', estado='$estado',
            fechaCreacion='$fechaActual', fechaCulminacion='$fechaFinalizada' WHERE id=$id";
                $this->conn->query($query);
            }
            header("Location: index.php");
            die();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function listarDatos($conn)
    {
        try {
            $query = "SELECT * FROM todolist";
            $datos = $conn->query($query);
            return $datos;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function listarDatosPorId($conn, $id)
    {
        try {
            $query = "SELECT * FROM todolist where id = $id";
            $datos = $conn->query($query);
            return $datos;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
