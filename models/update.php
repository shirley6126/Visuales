<?php
include "conexion.php";
$cedula=$_GET["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$sql="update estudiantes set nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono' 
where cedula='$cedula'";
if($mysql->query($sql)===TRUE){
    echo(json_encode(["success" => "se edito correctamente"]));
}
else{
    echo(json_encode(["error" => "error al editar"]));
}
?>