<?php
require '../conexion/conexion.php';
if (!empty($_POST)){
    $localidad = $_POST['direccion_franquicia'];
    $ciudad = $_POST['select_ciudad'];
    $activo ='activo';
    $inser = $pdo->exec("insert into franquicias(localidad, id_ciudad, activo)".
         " values ('{$localidad}', '{$ciudad}','{$activo}')");
    header("Location: newFranquicia.php");
    exit();
}