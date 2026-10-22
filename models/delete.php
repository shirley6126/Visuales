<?php
include "conexion.php";
$cedula=$_GET["txtcedula"];
$sql="delete from estudiantes where cedula=$cedula";
if($mysql->query($sql)===TRUE){
    echo("se elimino correctamente");
}
else{
    echo("error al eliminar");
}
?>
