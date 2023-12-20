<?php
// Configuración de la conexión a la base de datos

include 'conexion_prod.php';
$hostname = "localhost";
$username = "root;
$password = "";
$database = "product";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos del carrito
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$color = $_POST['color'];
$cantidad = $_POST['cantidad'];

// Preparar la consulta SQL para insertar en la base de datos
$sql = "INSERT INTO carrito (nombre, precio, color, cantidad) VALUES ('$nombre', $precio, '$color', $cantidad)";

// Ejecutar la consulta y verificar el resultado
if ($conn->query($sql) === TRUE) {
    echo "Producto agregado al carrito con éxito";
} else {
    echo "Error al agregar producto al carrito: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
