<?php
require '../conexion/conexion.php';
if (!empty($_POST)){
    $genero = $_POST['nombre_audio'];
    $inser = $pdo->exec("insert into audio_pelicula(audio_pelicula)".
        " values ('{$genero}')");
    header("Location: audio.php");
    exit();
}