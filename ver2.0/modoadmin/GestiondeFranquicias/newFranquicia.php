<?php
require '../conexion/conexion.php';
$mensaje = [];
$ciudades = $pdo->query("Select * from ciudad");
$consulta = $pdo->query("select franquicias.id_franquicia, ciudad.ciudad, franquicias.localidad, franquicias.activo from franquicias"
. " inner join ciudad on ciudad.id_ciudad = franquicias.id_ciudad");
?>
<style rel="stylesheet">
    .modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }
    .modalDialog:target {
        opacity:1;
        pointer-events: auto;
    }
    .modalDialog > div {
        width: 700px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
    }
    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    .close:hover { background: #00d9ff; }
</style>
<div>
    <?php require '../menus/menu_lado.php';?>
</div>
<div id="formularios">
    <div class="encabezado">
        <h4>
            Registro de una Nueva Franquicia
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
                </thead>
                <tbody>
                    <?php foreach ($consulta as $direcc):?>
                    <tr>
                        <td><?php echo $direcc['ciudad']?></td>
                        <td><?php echo $direcc['localidad']?></td>
                        <td><?php echo $direcc['activo']?></td>
                        <td><a href="UpdateFranquicia.php?cod=<?php echo $direcc['id_franquicia'] ?>">
                                Modificar</a></td>
                        <td><a href="eliminar_franquicia.php?codigo=<?php echo $direcc['id_franquicia']?>">
                                Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>

<!--<div id="openModalUpdateFranquicia" class="modalDialog">-->
<!--    <div>-->
<!--        <a href="#close" title="Close" class="close">X</a>-->
<!--        --><?php
//        $consulta_modal=$pdo->query("select  franquicias.id_franquicia, ciudad.ciudad, franquicias.localidad, franquicias.activo from franquicias"
//            . " inner join ciudad on ciudad.id_ciudad = franquicias.id_ciudad");
//        ?>
<!--        <form id="formularios" action="UpdateFranquicia.php" method="post">-->
<!--            <table id="tablas" border="1">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Ciudad</th>-->
<!--                <th>Direccion</th>-->
<!--                <th>Estado</th>-->
<!--                <th> </th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //foreach ($consulta_modal as $direc):?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $direc['ciudad']?><!--</td>-->
<!--                    <td><input type="text" name="new_localidad" value="--><?php //echo $direc['localidad']?><!--"></td>-->
<!--                    <td><input type="text" name="new_estado" value="--><?php //echo $direc['activo']?><!--"></td>-->
<!--                    <td><button name="boton_uptadeFranquicias"><a href="UpdateFranquicia.php?cod=--><?php //echo $direc['id_franquicia']?><!--"-->
<!--                                    style="text-decoration:none">Guardar Modificacion</a></button>-->
<!--                    </td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
<!--            </tbody>-->
<!--            </table>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->


