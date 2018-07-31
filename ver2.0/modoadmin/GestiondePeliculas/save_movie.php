<?php
require '../conexion/conexion.php';

    $pelicula=$_POST['nombre_pelicula'];
    $genero=$_POST['select_genero'];
    $audio=$_POST['select_audio'];
    $clasificados=$_POST['select_clasificado'];
    $descripcion=$_POST['descripcion'];
    $fecha=$_POST['fecha_de_registro'];

    $foto = $_FILES['foto']['name'];
    $ruta = $_FILES['foto']['tmp_name'];
    $destino = "fotos/".$foto;
    copy($ruta, $destino);

    $inser=$pdo->exec("insert into pelicula(nombre_pelicula,genero,audio,id_clasificado,descripcion,fecha_de_registro, ruta_img)".
     " values('{$pelicula}',{$genero},{$audio},{$clasificados},'{$descripcion}','{$fecha}','{$destino}')");
    header("Location: principal_peliculas.php");
    exit();

?>