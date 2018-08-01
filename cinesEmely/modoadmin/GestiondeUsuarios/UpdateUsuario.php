<?php
require '../conexion/conexion.php';
if (empty($_POST)){
    $codigo=$_GET['cod'];
    $consulta_modal=$pdo->query("select usuario.id_usuario, usuario.id_franquicia, usuario.usuario, usuario.contrasena,
     ciudad.ciudad, franquicias.localidad from franquicias"
        . " inner join ciudad on  franquicias.id_ciudad = ciudad.id_ciudad ".
     " inner join usuario on   franquicias.id_franquicia = usuario.id_franquicia".
     " where usuario.id_usuario = {$codigo}");
    $ciudades = $pdo->query("Select * from ciudad");
}
?>
<script src="jquery-3.3.1.min.js">

</script >
<script>
    function cargarlocalidad(val){
        $.ajax({
            type: "POST",
            url: 'getlocalidad.php',
            data: 'id_ciudad='+val,
            success: function(resp){
                $('#select_localidad').html(resp);
            }
        })
    }
</script>
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
        width: 60%;
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
    <button ><a href="principal_gestion_usuarios.php">Volver Atras</a></button>
</div>
<div id="openModalUpdateFranquicia" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <form class="formularios" action="save_upda_usu.php" method="POST">
            <table id="tablas" border="1">
                <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                    <th>Constraseña</th>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Localidad</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($consulta_modal as $direc):?>
                    <tr>
                        <input type="hidden" style="display: none" name="cod" value="<?php echo $direc['id_usuario']?>">
                        <td><?php echo $direc['usuario']?></td>
                        <td><input type="text" name="contrasena" value="<?php echo $direc['contrasena']?>"></td>
                        <td>
                            <select name="select_estado" id="select_estado">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </td>
                        <td>
                            <select name="select_ciudad" id="select_ciudad" onchange="cargarlocalidad(this.value);">
                                <?php echo '<option>-- Seleccione una Opcion --</option>';?>
                                <?php foreach ($ciudades as $c): ?>
                                <option value="<?php echo $c['id_ciudad'];?>"><?php echo $c['ciudad'];?></option>
                                <?php endforeach;?>
                            </select>
                        </td>
                        <td>
                            <select name="select_localidad" id="select_localidad">

                            </select>
                        </td>
<!--                        <td><input type="text" name="new_localidad" value="--><?php //echo $direc['localidad']?><!--" ></td>-->
                        <td><input  type="submit" name="boton_updateUsuario" value="Guardar">
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
