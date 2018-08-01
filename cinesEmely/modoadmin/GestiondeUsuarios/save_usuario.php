<?php
require '../conexion/conexion.php';
if (!empty($_POST)){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $franquicia = $_POST['select_franquicia'];
    $estado='Activo';
    $inser=$pdo->exec("insert into usuario(usuario, contrasena, estado, id_franquicia)".
     " values('{$usuario}','{$contrasena}','{$estado}', {$franquicia})");
    header("Location: principal_gestion_usuarios.php");
    exit();
}