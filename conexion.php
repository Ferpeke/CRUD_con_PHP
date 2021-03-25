<?php

    class conectar {
        private $servidor = "localhost";
        private $usuario = "root";
        private $db = "crudpoo";
        private $password = "";

        public function conexion() {
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> password, $this -> db);

            return $conexion;
        }

    }

    $objeto = new conectar();
    if($objeto -> conexion()){
        // echo "conectado con exito";
    }else{
        echo "conexion fallado";
    }

?>