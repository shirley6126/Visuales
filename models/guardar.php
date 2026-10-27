<?php
include "conexion.php";
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];    
$sql="insert into estudiantes values($cedula, $nombre, $apellido, $direccion, $telefono)";
if($mysql->query($sql)===TRUE){
    echo(json_encode(["success" => "se guardo correctamente"]));
}
else{
    echo(json_encode(["error" => "error al guardar"]));
}
?>
