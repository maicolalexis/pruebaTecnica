<?php
class conexion{
    private $conn;
        public function conexion(){
            $this->conn = new mysqli("localhost","root","","todolist");
            return $this->conn;
        }
        public function close(){
            $this->conn->close();
        }
    }
?>