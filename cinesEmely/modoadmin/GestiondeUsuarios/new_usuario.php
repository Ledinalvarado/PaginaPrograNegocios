<?php
require '../conexion/conexion.php';
$franquicia = $pdo->query("select ciudad.ciudad, franquicias.id_franquicia, franquicias.localidad from franquicias".
 " inner join ciudad on ciudad.id_ciudad = franquicias.id_ciudad");
?>
<div>
    <?php require'../menus/menu_lado.php' ?>
</div>
<div id="formularios">
    <div class="encabezado">
        <h4>
            Registro de un Nuevo Usuario
        </h4>
    </div>
    <div class="cuerpo">
        <form class="formulario" action="save_usuario.php" method="post" >
            <div>
                <label >Nombre de Usuario</label>
                <br>
                <input type="text" required placeholder="Nombre de Usuario" name="usuario">
            </div>
            <div>
                <label >Contraseña</label>
                <br>
                <input type="text" required placeholder="Contraseña" name="contrasena">
            </div>
            <div>
                <label>Franquicia de Asignacion</label>
                <br>
                <select name="select_franquicia" id="select_franquicia">
                <?php foreach ($franquicia as $row):?>
                <option value="<?php echo $row['id_franquicia']?>" ><?php echo $row['ciudad']?>-<?php echo $row['localidad']?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div class="botones">
                <button type="submit" class="btn btn-success" name="boton_guardar_usuario">Agregar Usuario</button>
            </div>
        </form>
    </div>
</div>