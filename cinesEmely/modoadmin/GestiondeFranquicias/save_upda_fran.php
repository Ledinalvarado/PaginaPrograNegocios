<?php
require '../conexion/conexion.php';
if(isset($_POST)){
    $codigo=$_POST['cod'];
    $estado=$_POST['select_estado'];
    $localidad=$_POST['new_localidad'];
    $cambio=$pdo->exec("update franquicias set localidad='{$localidad}', activo='{$estado}'"
    . " where id_franquicia={$codigo}");
   header("Location: newFranquicia.php");
}
