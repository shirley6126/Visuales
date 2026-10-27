<?php
function abrirConexionRepaso(): mysqli
{
    $conexion = new mysqli("localhost", "root", "", "cuartoaa");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $conexion->set_charset("utf8mb4");
    return $conexion;
}
?>
