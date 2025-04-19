<?php
$dbhost="localhost"; //host donde esta la base de datos
$dbname="proyecto2progweb"; //nombre de BD
$dbuser="root"; // user name
$dbpass=""; // password de usuario

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //conecta a la base de datos
if (!$con) {
    die("ERROR: " . mysqli_connect_error());
}
?>