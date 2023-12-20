
<?php
$servidor = "localhost";
$dbUsuario = "root";
$dbpassword = "";
$dbname = "login_register_db";
$conn = mysqli_connect($servidor, $dbUsuario, $dbpassword, $dbname);

$producto ="termo grande";
$precio ="999";
$cantidad="1";


// Comprobamos que el producto no existe
$sql = "SELECT * FROM `productos` WHERE nombre = '$producto'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 10000) {

  echo "Este producto ya esta registrado";
} else {

  // Insertamos el registro
  $sql = "INSERT INTO productos (nombre, precio, cantidad) VALUES ('$producto', '$precio', '$cantidad')";
  $conn->query($sql);
  echo "PRODUCTO AGREGADO GRACIAS POR COMPRAR ";

  header("Location: ../pro/index.php");
}
exit;


function agregarProductoAlCarrito($producto,$precio, $cantidad) {
  // Agrega el producto al carrito
  $_SESSION["carrito"][] = [
    "producto" => $producto,
    "precio" => $precio * $cantidad,
  ];

  // Actualiza el resumen del pedido
  actualizarResumenPedido();
}

if (isset($_POST["agregar"])) {
  // Obtiene los datos del producto
  $producto = $_POST["producto"];
  $precio = $_POST["precio"];
  $cantidad = $_POST["cantidad"];

  // Agrega el producto al carrito
  agregarProductoAlCarrito($producto, $precio, $cantidad);

  // Redirecciona al carrito
  header("C:\XAMPP\htdocs\PHP\PROYECTO\PROYECTO\opciones\carrito.html");
}

function actualizarResumenPedido() {
  // Obtiene el carrito
  $carrito = $_SESSION["carrito"];

  // Calcula el subtotal
  $subtotal = 0;
  foreach ($carrito as $producto) {
    $subtotal += $producto["precio"];
  }

  // Calcula el envío
  if ($subtotal >= 1000) {
    $envio = 0;
  } else {
    $envio = 100;
  }

  // Calcula el total
  $total = $subtotal + $envio;

  // Actualiza el resumen del pedido
  $_SESSION["resumen"] = [
    "subtotal" => $subtotal,
    "envio" => $envio,
    "total" => $total,
  ];
}
?>