<?php
    $id = $_GET['id'];
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $objeto = new metodos();
    if($objeto->eliminarDatosNombre($id) == 1){
        header("location:../index.php");
    }else{
        echo "fallo al eliminar";
    }
?>