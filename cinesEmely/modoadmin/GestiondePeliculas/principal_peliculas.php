<?php
require '../conexion/conexion.php';
?>
<div>
<?php
require '../menus/menu_lado.php';
$consulta=$pdo->query("select pelicula.nombre_pelicula, genero_pelicula.genero_pelicula, audio_pelicula.audio_pelicula,
clasificados.nombre_clasificado, pelicula.descripcion, pelicula.fecha_de_registro, pelicula.ruta_img from pelicula".
 " inner join genero_pelicula on pelicula.genero = genero_pelicula.id_genero".
 " inner join audio_pelicula on pelicula.audio = audio_pelicula.id_audio".
 " inner join clasificados on pelicula.id_clasificado = clasificados.id_clasificado");

?>
</div>
<div>
    <table id="tablas" border="1">
        <thead>
        <tr>
            <th>Nombre de la Pelicula</th>
            <th>Genero de la Pelicula</th>
            <th>Audio de la Pelicula</th>
            <th>Clasificados de la Pelicula</th>
            <th>Descripcion Breve </th>
            <th>Fecha de Registro</th>
            <th>Cartel</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($consulta as $row): ?>
            <tr>
                <td><?php echo $row['nombre_pelicula']?></td>
                <td><?php echo $row['genero_pelicula']?></td>
                <td><?php echo $row['audio_pelicula']?></td>
                <td><?php echo $row['nombre_clasificado']?></td>
                <td><?php echo $row['descripcion']?></td>
                <td><?php echo $row['fecha_de_registro']?></td>
                <td><img src="<?php echo $row['ruta_img']?>" width="200px" height="300px" alt=""></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
