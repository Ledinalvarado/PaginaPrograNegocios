<?php
require '../conexion/conexion.php';
$resultado = $pdo->query("Select genero_pelicula from genero_pelicula");
?>
<div>
    <?php require '../menus/menu_lado.php'; ?>
</div>
<div id="formularios">
    <div class="encabezado">
        <h4>
            Registro de un Nuevo Genero
        </h4>
    </div>
    <div class="cuerpo">
        <form class="formulario" action="save_genero.php" method="post" >
            <div>
                <label>Nombre del Genero </label>
                <br>
                <input type="text" required placeholder="Nombre del genero" name="nombre_genero">
            </div>
            <div class="botones">
                <button type="submit" class="btn btn-success" name="boton_guardar_genero">Agregar Genero</button>
            </div>
        </form>
    </div>
</div>
<div>
    <table id="tablas" border="1">
        <thead>
        <tr>
            <th>Generos</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultado as $genero): ?>
            <tr>
                <td><?php echo $genero['genero_pelicula']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>