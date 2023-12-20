<?php


include 'conexion_be.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
if (mysqli_num_rows($validar_login) > 0) {
    session_start(); // Iniciar la sesión si las credenciales son válidas
    $_SESSION['usuario'] = $correo;
    header("location: ../../index.php");
    exit;
} else {
    echo '<script>
            alert("Usuario o contraseña incorrecta, verifique los datos introducidos");
            window.location = "../ingresar.php";
          </script>';
}








?>