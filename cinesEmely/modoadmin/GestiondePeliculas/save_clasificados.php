<?php
require '../conexion/conexion.php';
if (!empty($_POST)){
    $nombre = $_POST['nombre_clasificado'];
    $edad = $_POST['edad_minima'];
    $inser = $pdo->exec("insert into clasificados(nombre_clasificado, edad_minima)".
        " values ('{$nombre}', {$edad})");
    header("Location: clasificados.php");
    exit();
}