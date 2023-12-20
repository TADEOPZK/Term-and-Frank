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
    <link rel="stylesheet" href="prod.css">
    <title>Termos Medianos</title>
</head>
<body>
    <div class="menu-bar">
        <nav>
            <ul>
                <div class="inicio">
                <li><a href="../index.php">Inicio</a></li>
            </div>
                
             
                <li><a href="termos.php">Termos</a>
                    <ul>
                        <li><a href="pequenos.php">Pequeño</a></li>
                        <li><a href="mediano.php">Mediano</a></li>
                        <li><a href="grande.php">Grande</a></li>
                    </ul>
                </li>
                <li><a href="grabado.php">Grabado Láser</a></li>
                
          
                
               

                <div class="opc">
                    <?php
                        if(isset($_SESSION['usuario'])) {
                            echo '<li class="saludo-option"><a href="../opciones/ingresar.php">Hola, ' . $usuario . '</a></li>';
                        } else {
                            echo '<li class="ingresar-option"><a href="../opciones/ingresar.php"><img class="perfil-icon" src="../ImgPro/perfil.webp" alt="perfil" height="15px"> Ingresar</a></li>';
                        }
                    ?>
                    <li><a href="../opciones/carrito.php"><img class="carrito-icon" src="../ImgPro/carrito.png" alt="carrito" height="20px"></a></li>
                </div>
            </ul>
        </nav>
    </div>


<div class="contam">
   
        <a href="pequenos.php" class="tarjeta pequeno">
            <img src="../ImgPro/tamañosp.jpg" alt="Termo Pequeño">
            <p>Pequeño</p>
        </a>

        <a href="mediano.php" class="tarjeta mediano">
            <img src="../ImgPro/tamañosm.jpg" alt="Termo Mediano">
            <p>Mediano</p>
        </a>

        <a href="grande.php" class="tarjeta grande">
            <img src="../ImgPro/tamañosg.jpg" alt="Termo Grande">
            <p>Grande</p>
        </a>
    
</div>
    <section id="seccion-negra">
        <div class="contenido-seccion">
            <h2>Consigue tu termo especial y personalizado</h2>
            <p>Descubre nuestros productos de primera calidad, diseñados para cualquier tipo de bebida</p>
        </div>
    </section>

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
margin-left: 380px; /* Adjust the margin as needed */
}

    </style>
    
</body>
</html>
