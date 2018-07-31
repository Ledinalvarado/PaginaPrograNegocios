<?php
require '../conexion/conexion.php';
if (empty($_POST)){
    $codigo=$_GET['codigo'];
    $eliminar=$pdo->exec("delete from franquicias where id_franquicia={$codigo}");
    header("Location: newFranquicia.php");
    exit();
}