<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $id = $_POST['id'];

    $datos = array($nombre, $apellido, $id);
    $objeto = new metodos();
    if($objeto->actualizaDatosNombres($datos) == 1){
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }

?>