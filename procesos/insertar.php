<?php

    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $datos = array($nombre, $apellido);
    $objeto = new metodos();
    if($objeto->insertarDatosNombre($datos) == 1){
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }
    

?>