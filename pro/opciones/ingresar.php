<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location: cuenta.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="opc.css">
</head>
<body>
<a class="btn-regresar" href="../index.php">
                <span>&lt;</span> Regresar
            </a>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Nombre de usuario" name="correo" required>
                        <input type="password" placeholder="Contraseña" name="contrasena" required>
                        <button href="../index.html">Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                        <input type="text" placeholder="Usuario" name="correo" required> 
                        <input type="text" placeholder="Correo Electronico"  name="usuario" required>
                        <input type="password" placeholder="Contraseña"  name="contrasena" required>
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="efectos.js"></script>
</body>
</html>