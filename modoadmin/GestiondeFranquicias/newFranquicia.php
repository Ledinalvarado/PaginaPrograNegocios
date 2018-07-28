<?php
require '../conexion/conexion.php';
$mensaje = [];
$ciudades = $pdo->query("Select * from ciudad");
$consulta = $pdo->query("select franquicias.id_franquicia, ciudad.ciudad, franquicias.localidad, franquicias.activo from franquicias"
. " inner join ciudad on ciudad.id_ciudad = franquicias.id_ciudad");
?>
<div>
    <?php require '../menus/menu_lado.php';?>
</div>
<div id="formularios">
    <div class="encabezado">
        <h4>
            Registro de una Nueva Pelicula
        </h4>
    </div>
    <div class="cuerpo">
        <form class="formulario" action="guardar_franquicia.php" method="post" >
            <div>
                <label>Nombre de la Ciudad</label>
                <br>
                <select name="select_ciudad" id="select_ciudad">
                <?php foreach ($ciudades as $row):?>
                <option value="<?php echo $row['id_ciudad']?>" ><?php echo $row['ciudad']?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div>
                <label >Direccion de la Franquicia</label>
                <br>
                <input type="text" required placeholder="Direccion" name="direccion_franquicia">
            </div>
            <div class="botones">
                <button type="submit" class="btn btn-success" name="boton_guardar_ciuedad">Agregar Franquicia</button>
            </div>
        </form>
    </div>
</div>
        <div>
            <table id="tablas" border="1">
                <thead>
                    <tr>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                <tbody>
                    <?php foreach ($consulta as $direcc):?>
                    <tr>
                        <td><?php echo $direcc['ciudad']?></td>
                        <td><?php echo $direcc['localidad']?></td>
                        <td><?php echo $direcc['activo']?></td>
                        <td><a href="modificar_franquicias.php">Modificar</a></td>
                        <td><a href="eliminar_franquicia.php?codigo=<?php echo $direcc['id_franquicia']?>">
                                <?php $direcc['localidad']?> Eliminar
                            </a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                </thead>
            </table>
        </div>

<?php


