<?php

include 'conexion_be.php';
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo','$usuario','$contrasena')";


$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../ingresar.php";
          </script>';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
            alert("Este usuario ya está registrado, intenta con otro diferente");
            window.location = "../ingresar.php";
          </script>';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            alert("Usuario creado exitosamente");
            window.location.href = "../ingresar.php";
          </script>';
}
else {
    echo '<script>
            alert("Inténtalo de nuevo, usuario no creado");
            window.location = "../ingresar.php";
          </script>';
}


mysqli_close($conexion);

?>
