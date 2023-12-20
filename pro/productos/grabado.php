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

    <section class="contenidogr">
        <h2>Grabado Láser</h2>
        <br>
        <p>Para personalizar tus termos o botellas da clic en el botón personalizar en la página del producto seleccionado. En caso de no aparecer el botón, se sugiere refrescar la página o intentar con algún otro explorador.</p>
        <br><br>
        <center><img src="../ImgPro/grabadoT.jpg" height="450px" > </center>
        <br> 
        <br>
        
     

        <center> <h3 >Política de Grabado</h3></center>
<br>
        <center> <p><strong>Tiempo de entrega:</strong> El tiempo de entrega se puede seleccionar en el checkout del carrito, varía desde 1 a 2 días hábiles hasta 3 a 5 días hábiles. Estos días son considerados adicionales al envío y procesamiento del pedido.</p>

        <p>Una vez realizado el pago anticipo o pago total del pedido no es posible cancelar el pedido de grabado. El grabado láser no incluye el artículo, solamente el proceso del grabado.</p>

        <p>El precio del grabado láser es de $150.00 por cada lado. El grabado láser incluye el grabado a una cara (el área plana grabable del termo, en caso de tener diferencias de circunferencia debido a las características del termo, o en caso de que el texto o las imágenes no se adapten al área grabable permitida del termo se cobrará grabado adicional).</p>
        </center>
    </section>

   



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

    <script src="main.js"></script>
</body>
</html>

