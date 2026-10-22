<?php
$mensaje="Hola Mundo";
echo "<br>";
echo $mensaje;
echo "<br>";
print_r($mensaje);
echo "<br>";
echo(gettype($mensaje));
echo "<br>";

$numero=10;
echo "<br>";
echo $numero;
echo "<br>";
print_r($numero);
echo "<br>";
echo(gettype($numero));
echo "<br>";
echo "<br>";

$vector= array("lunes",10,"miercoles");
echo "<br>";
for($i=0; $i<=2; $i++){
    echo($vector[$i]);

}
echo "<br>";
print_r($vector[0]);
echo "<br>";
echo(gettype($vector));
echo "<br>";

// array asociativoarray de atributos
$vectorasociativo= array("dia1"=>"lunes","dia2"=>"martes","dia3"=>"miercoles");
echo "<br>";
print_r($vectorasociativo["dia3"]);
echo "<br>";
// simulacion de un objeto 
$objeto=(object)["dia1"=>"lunes","dia2"=>"martes","dia3"=>"miercoles"];
echo "<br>";
print_r($objeto->dia1);

$objetoauto1=(object)["placa"=>"tbd1111","modelo"=>"focus","modelo"=>"rav"];
$objetoauto2=(object)["placa"=>"tbd2222","modelo"=>"civic","modelo"=>"f150"];

function mostrar($automovil){
    print_r($automovil->placa." ".$automovil->modelo." ".$automovil->marca);
}
mostrar($objetoauto1);

?>