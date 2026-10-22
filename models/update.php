<?php
include "conexion.php";
$cedula=$_GET["txtcedula"];
$nombre=$_GET["txtnombre"];
$apellido=$_GET["txtapellido"];
$sql="update estudiantes set nombre='$nombre', apellido='$apellido' 
where cedula='$cedula'";
if($mysql->query($sql)===TRUE){
    echo("se edito correctamente");
}
else{
    echo("error al editar");
}
?>