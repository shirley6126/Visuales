<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuartoaa";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$mysql = new mysqli($servername, $username, $password, $dbname);
    if (!$mysql) {
        die("no se conecto".mysqli_connect_error());
    }
?>