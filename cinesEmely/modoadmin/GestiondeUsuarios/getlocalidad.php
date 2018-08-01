<?php
require'../conexion/conexion.php';

$cod = $_POST['id_ciudad'];

$query=$pdo->query("select  *from franquicias where id_ciudad={$cod}");
echo '<option value="0">-- Seleccione una Opcion --</option>';
foreach ($query as $row):?>
<option value="<?php echo $row['id_franquicia'] ?>"><?php echo $row['localidad']?></option>
    <?php
endforeach;
?>

