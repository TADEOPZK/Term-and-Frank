<?php
session_start();

// Verificar si la sesión está iniciada
if(isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    // Si la sesión no está iniciada, redirigir al inicio de sesión
    header("Location: iniciar_sesion.php");
    exit();
}

// Cerrar sesión al hacer clic en el botón
if(isset($_POST['cerrar_sesion'])) {
    session_destroy();
    header("Location: ingresar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="opc.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 50px;
            font-family: 'Arial', sans-serif;
        }

        .tex {
            margin: 0 auto; /* Centrar el contenido */
            max-width: 600px; /* Ancho máximo del contenedor */
        }

        h1 {
            margin-bottom: 60px; /* Margen entre el texto y el botón */
        }

       
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff; /* Borde blanco */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Blanco ligeramente transparente */
            color: white;
        }
    </style>
</head>
<body>
    <div class="tex">
        <h1>¡Ya has iniciado sesión, <?php echo $usuario; ?>!</h1>
        <form method="post">
            <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>
