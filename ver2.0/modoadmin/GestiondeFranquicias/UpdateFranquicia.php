<?php
require '../conexion/conexion.php';
if (empty($_POST)){
    $codigo=$_GET['cod'];
    var_dump($codigo);
    $consulta_modal=$pdo->query("select ciudad.id_ciudad, franquicias.id_franquicia, ciudad.ciudad, franquicias.localidad, franquicias.activo from franquicias"
            . " inner join ciudad on ciudad.id_ciudad = franquicias.id_ciudad where franquicias.id_franquicia={$codigo}");
    $activo=$pdo->query("select * from franquicias");
}
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
        width: 50%;
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
    <?php require'../menus/menu_lado_aparencia.php' ?>
</div>
<div>
<button ><a href="#openModalUpdateFranquicia">Modificar Franquicia</a></button>
<button ><a href="newFranquicia.php">Volver Atras</a></button>
</div>
<div id="openModalUpdateFranquicia" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <form class="formularios" action="save_upda_fran.php" method="POST">
            <table id="tablas" border="1">
                <thead>
                <tr>
                    <th>Ciudad</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th> Accion </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($consulta_modal as $direc):?>
                    <tr>
                        <input type="hidden" style="display: none" name="cod" value="<?php echo $direc['id_franquicia']?>">
                        <td><?php echo $direc['ciudad']?></td>
                        <td><input type="text" name="new_localidad" value="<?php echo $direc['localidad']?>" ></td>
                        <td>
                            <select name="select_estado" id="select_estado">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </td>

                        <td><input  type="submit" name="boton_uptadeFranquicias" value="Guardar">
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>

