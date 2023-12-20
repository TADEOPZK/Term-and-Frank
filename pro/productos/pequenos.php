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

    
    <div class="tituloprod">
    <h2>Termos Pequeños</h2>
</div>
    <div class="productos-container">
        
        <a href="../termosP/termo-copa.php" class="tarjeta-producto">
            <img src="../ImgPro/termo_huevo_gris.webp" alt="Termo Huevo Negro">
            <div class="info-producto">
                <p class="nombre-producto">Termo Copa</p>
                <p class="precio-producto">$299.99</p>
            </div>
        </a>
        
        <a href="../termosP/termo-taza.php" class="tarjeta-producto">
            <img src="../ImgPro/termo_taza_negro.webp" alt="Termo Taza Negro">
            <div class="info-producto">
                <p class="nombre-producto">Termo de Taza </p>
                <p class="precio-producto">$349.99</p>
            </div>
        </a>
        
        <a href="../termosP/termo-tazaP.php" class="tarjeta-producto">
            <img  class="imgtp" src="../ImgPro/termo_tazaP_negro.webp" alt="Termo TazaP Negro">
            <div class="info-producto">
                <p class="nombre-producto">Termo de Taza Premium</p>
                <p class="precio-producto">$499.99</p>
            </div>
        </a>
        
        <a href="../termosP/termo-lata.php" class="tarjeta-producto">
            <img src="../ImgPro/termo_lata_negro.webp" alt="Termo Lata Negro">
            <div class="info-producto">
                <p class="nombre-producto">Termo Lata</p>
                <p class="precio-producto">$399.99</p>
            </div>
        </a>
        
       
    </div>
    <section id="seccion-negra">
        <div class="contenido-seccion">
            <h2>Con capacidad de 20 OZ</h2>
            <p>Mantén tus pequeñas porciones de bebidas favoritas calientes o frías con estilo</p>
        </div>
    </section>
    <script src="tu_script.js"></script>

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