<?php

class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "mi_base_de_datos";

    public function conectar() {
        $conexion = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password);

        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conexion;
    }
}

?>

