<?php
    session_start();

    // Verificar si la sesión está iniciada
    if(isset($_SESSION['usuario'])) {
        // Si la sesión está iniciada, obtén el nombre de usuario desde la sesión
        $usuario = $_SESSION['usuario'];

        // Muestra el saludo personalizado en lugar de "Ingresar"
        echo '<style>.ingresar-option { display: none; }</style>';
        echo '<style>.saludo-option { display: flex; gap: 30px; }</style>';
    } else {
        // Si la sesión no está iniciada, oculta el saludo personalizado
        echo '<style>.ingresar-option { display: flex; gap: 30px; }</style>';
        echo '<style>.saludo-option { display: none; }</style>';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="opc.css"> <!-- Cambiado a ruta relativa para salir de la carpeta "productos" -->
  
</head>
<body>
    <div class="menu-bar">
        <nav>
            <ul>
                <div class="inicio">
                <li><a href="../index.php">Inicio</a></li>
            </div>
                
             
                <li><a href="../productos/termos.php">Termos</a>
                    <ul>
                        <li><a href="../productos/pequenos.php">Pequeño</a></li>
                        <li><a href="../productos/mediano.php">Mediano</a></li>
                        <li><a href="../productos/grande.php">Grande</a></li>
                    </ul>
                </li>
                <li><a href="../productos/grabado.php">Grabado Láser</a></li>
                
          
                
               

                <div class="opc">
                    <?php
                        if(isset($_SESSION['usuario'])) {
                            echo '<li class="saludo-option"><a href="ingresar.php">Hola, ' . $usuario . '</a></li>';
                        } else {
                            echo '<li class="ingresar-option"><a href="ingresar.php"><img class="perfil-icon" src="../ImgPro/perfil.webp" alt="perfil" height="15px"> Ingresar</a></li>';
                        }
                    ?>
                    <li><a href="carrito.php"><img class="carrito-icon" src="../ImgPro/carrito.png" alt="carrito" height="20px"></a></li>
                </div>
            </ul>
        </nav>
    </div>


    <div class="cart">
        <div class="carritop">
            <div class="cart__content">
                <h2>Carrito</h2>
                <div class="cart__vacio">
                    <img src="../ImgPro/carrito.png" alt="Carrito Vacío">
                    <p>¡Tu carrito está vacío!</p>
                </div>
            </div>
        </div>

        <div class="cart__info">
            <div class="envio-gratis">
                <p>¡Felicidades! Su pedido califica para el envío GRATIS</p>
            </div>

            <div class="resumen-pedido">
                <h3>SUBTOTAL</h3>
                <h3></h3>
                <h3>TOTAL</h3>
                <!-- Agrega aquí el contenido del resumen del pedido -->
            </div>

            <div class="comentarios-pedido">
                <!-- Agrega aquí el contenido de los comentarios del pedido -->
                <p>Los envíos pueden demorar algunos días más por ser temporada alta.</p>
            </div>

            <button class="comprarbtn">COMPRAR AHORA</button>
        </div>
    </div>
    
    <style>
        .inicio {

            margin-right: 300px;
        }

        
        .menu-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .opc {
            display: flex;
            align-items: center;
            gap: 20px; /* Adjust the gap as needed */
            margin-left: 400px; /* Adjust the margin as needed */
        }
    
    </style>


    <script src="../termosP/script.js"></script>
</body>
</html>