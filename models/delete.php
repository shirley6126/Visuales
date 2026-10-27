<?php
include "conexion.php";
$cedula=$_GET["cedula"];
$sql="delete from estudiantes where cedula='$cedula'";
if($mysql->query($sql)===TRUE){
    echo(json_encode(["success" => "se elimino correctamente"]));
}
else{
    echo(json_encode(["error" => "error al eliminar"]));
}
?>
