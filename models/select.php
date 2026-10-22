<?php
include "conexion.php";
$sq="SELECT * FROM estudiantes";
$respuesta=$mysql->query($sq);
$resultado=array();
if($respuesta->num_rows>0){
    while($fila=$respuesta->fetch_assoc()){
        array_push($resultado,$fila);
    }
}
print_r(json_encode($resultado));
?>