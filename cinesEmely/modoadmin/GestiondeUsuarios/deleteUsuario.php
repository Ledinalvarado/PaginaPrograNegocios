<?php
require '../conexion/conexion.php';
if (empty($_POST)){
    $codigo=$_GET['cod'];
    $eliminar=$pdo->exec("delete from usuario where id_usuario={$codigo}");
    header("Location: principal_gestion_usuarios.php");
    exit();
}