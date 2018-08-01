<?php
require '../conexion/conexion.php';
$resultado = $pdo->query("Select audio_pelicula from audio_pelicula");
?>
<div>
    <?php require '../menus/menu_lado.php'; ?>
</div>
<div id="formularios">
    <div class="encabezado">
        <h4>
            Registro de un Nuevo Audio
        </h4>
    </div>
    <div class="cuerpo">
        <form class="formulario" action="save_audio.php" method="post" >
            <div>
                <label>Nombre del Audio</label>
                <br>
                <input type="text" required placeholder="Nombre del audio" name="nombre_audio">
            </div>
            <div class="botones">
                <button type="submit" class="btn btn-success" name="boton_guardar_audio">Agregar Audio</button>
            </div>
        </form>
    </div>
</div>
<div>
    <table id="tablas" border="1">
        <thead>
        <tr>
            <th>Audios</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultado as $audio): ?>
            <tr>
                <td><?php echo $audio['audio_pelicula']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>