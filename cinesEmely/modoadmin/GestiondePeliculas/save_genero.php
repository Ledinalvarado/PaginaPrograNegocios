<?php
require '../conexion/conexion.php';
if (!empty($_POST)){
    $genero = $_POST['nombre_genero'];
    $inser = $pdo->exec("insert into genero_pelicula(genero_pelicula)".
        " values ('{$genero}')");
    header("Location: new_genero.php");
    exit();
}