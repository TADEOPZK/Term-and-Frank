<?php
$host_prod = "localhost";
$usuario_db_prod = "root";
$clave_db_prod = "";
$nombre_db_prod = "product";

// Conectar a la base de datos de productos
$cone = mysqli_connect($host_prod, $usuario_db_prod, $clave_db_prod, $nombre_db_prod);

if (!$cone) {
    die("Error al conectar a la base de datos de productos: " . mysqli_connect_error());
}
?>
