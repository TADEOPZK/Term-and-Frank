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
  
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="menu-bar">
        <nav>
            <ul>
                <div class="inicio">
                <li><a href="index.php">Inicio</a></li>
            </div>
                
             
                <li><a href="productos/termos.php">Termos</a>
                    <ul>
                        <li><a href="productos/pequenos.php">Pequeño</a></li>
                        <li><a href="productos/mediano.php">Mediano</a></li>
                        <li><a href="productos/grande.php">Grande</a></li>
                    </ul>
                </li>
                <li><a href="productos/grabado.php">Grabado Láser</a></li>
                
          
                
               

                <div class="opc">
                    <?php
                        if(isset($_SESSION['usuario'])) {
                            echo '<li class="saludo-option"><a href="opciones/ingresar.php">Hola, ' . $usuario . '</a></li>';
                        } else {
                            echo '<li class="ingresar-option"><a href="opciones/ingresar.php"><img class="perfil-icon" src="ImgPro/perfil.webp" alt="perfil" height="15px"> Ingresar</a></li>';
                        }
                    ?>
                    <li><a href="opciones/carrito.php"><img class="carrito-icon" src="ImgPro/carrito.png" alt="carrito" height="20px"></a></li>
                </div>
            </ul>
        </nav>
    </div>

    <div id="portada">
        <img src="ImgPro/portadaaa.jpg" alt="Portada">
        <div id="texto-portada">
            ¡PIDE TU TERMO YA!
        </div>
    </div>

    <section id="productos">
        <h2>Productos Destacados</h2>

 
        <div class="categoria">
            <div class="productos">
               
                <a href="termosG/termo-popote.php" class="tarjeta">
                    <img src="ImgPro/termo_popote_naranja.webp" class="tpopote" height="69%" alt="Termo Pequeño">
                    <p>Termo Popote</p>
                </a>

                <a href="termosP/termo-copa.php" class="tarjeta">
                    <img src="ImgPro/termo_huevo_morado.webp" alt="Termo Mediano">
                    <p>Termo Copa</p>
                </a>

       
                <a href="termosM/termo-cilindro.php" class="tarjeta">
                    <img class="tcil" src="ImgPro/termo_cilindro_azul.webp" height="55%" alt="Termo Grande">
                    <p>Termo Cilindro</p>
                </a>
            </div>
        </div>
    </section>

    <section id="seccion-negra">
    <div class="contenido-seccion">
        <h2>Consigue tu termo especial y personalizado</h2>
        <p>Descubre nuestros productos de primera calidad, diseñados para cualquier tipo de bebida</p>
    </div>
    <br>
    <br><br><br><br><br><br><br><br><br>
    <div class="derechos-reservados">
        <p style="color: grey;">Derechos reservados para Term & Frank</p>
        <br>
        <p style="color: grey; display: inline-block; margin-right: 20px;">Mendoza Coto Yordi</p>
        <p style="color: grey; display: inline-block; margin-right: 20px;">Mejía Carreño María José</p>
        <p style="color: grey; display: inline-block; margin-right: 20px;">Moreno Rodríguez Abner Tadeo</p>
        
        <p style="color: grey; display: inline-block; margin-right: 10px;">Martinez Romero Isaac</p>
    </div>
</section>
                        <style>
                      @import url("https://fonts.googleapis.com/css?family=Varela+Round");

body {
    font-family: "Varela Round", sans-serif;
    margin: 0;
}

nav {
    box-sizing: border-box;
    background-color: white;
    color: #777;
    padding: 10px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
    border-radius: 0 0 8px 8px;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
}

nav img {
    width: 40px;
    height: auto;
}

nav ul {
    list-style: none;
    display: flex;
    align-items: center;
    margin: 0;
}

nav li {
    position: relative;
    height: 50px;
    width: 160px;
    display: flex;
    align-items: center;
}

nav a {
    text-decoration: none;
    color: #777;
    line-height: 50px;
    height: 100%;
    width: 100%;
    display: inline-block;
    position: relative;
    z-index: 1;
    text-align: center;
    cursor: pointer;
    transition: color 0.3s ease, background-color 0.3s ease;
    border-radius: 8px;
}

nav li:hover a {
    color: #333;
    background-color: #f0f0f0;
    border-radius: 8px;
}

nav ul li ul {
    display: none;
    position: absolute;
    background-color: white;
    padding: 10px;
    top: 100%;
    left: 0;
    min-width: 100%;
    z-index: 1001;
    border-radius: 0 0 8px 8px;
}

nav li:hover > ul,
nav li ul:hover {
    display: inherit;
    flex-direction: column;
    animation: fadeIn 0.5s ease-in-out;
}

nav li ul li {
    width: 100%;
}

nav li ul a {
    color: #333;
}

nav li.search,
nav li.ingresar-option,
nav li.cart {
    margin-left: auto;
}

nav li.search,
nav li.ingresar-option,
nav li.cart,
nav li.search input,
nav li.cart a {
    width: 30px;
    height: 30px;
    border-radius: 8px; /* Ajuste para que la animación abarque toda la opción */
}
nav li.ingresar-option a{
    width: 100px;
    height: 50px;
    border-radius: 8px; /* Ajuste para que la animación abarque toda la opción */
}

nav li.search {
    margin-right: 10px;
}

nav li.search input {
    border: none;
    padding: 5px;
    outline: none;
}

nav li.cart a {
    line-height: 30px;
    margin-left: 10px;
}

nav li.ingresar-option {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 10px;
    width: 120px;
    border-radius: 8px; /* Ajuste para que la animación abarque toda la opción */
}

nav li.ingresar-option a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    
 }

nav li.ingresar-option a img {
    width: 25px;
    height: auto;
    margin-bottom: 2px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}




.opciones{
    position: absolute;
    right: 35px;
}

.inicio{
    margin-left: 10px;
    margin-right: 450px;
}

.menu-bar{

    padding-top: 25px;
}

        /* Nueva animación de barra */
        .barra-animada {
            width: 0;
            height: 4px;
            background-color: white;
            transition: width 0.3s ease;
        }

        /* Añade estilos a la barra */
        button:hover + .barra-animada {
            width: 100%;
        }
        







#portada {
    position: relative;
    height: 400px;
    overflow: hidden;
}

#portada img {
    width: 100%;
    height: auto;
}

#texto-portada {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    font-size: 2em;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
}

#texto-portada img:hover {
    opacity: 0.8;
}

#productos {
    max-width: 1200px;
    margin: 80px auto 20px;
}

.categoria {
    margin-bottom: 30px;
}

.productos {
    display: flex;
    justify-content: space-between;
}

.producto {
    width: calc(33.33% - 20px);
    margin-bottom: 20px;
    text-align: center;
}

.producto img {
    width: 100%;
    height: auto;
    transition: filter 0.3s ease;
}

.producto img:hover {
    filter: brightness(85%);
}

#seccion-negra {
    background-color: #000;
    color: white;
    padding: 50px 20px;
    text-align: center;
    bottom: 0%;
}

.contenido-seccion {
    max-width: 1200px;
    margin: 0 auto;
}

#seccion-negra h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

#seccion-negra p {
    font-size: 1.2em;
}

.tarjeta {
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    margin: 5px;
}

.tarjeta:hover {
    transform: scale(1.021);
}

.tarjeta img {
    max-width: 100%;
    border-radius: 8px;
}

.tarjeta p {
    margin-top: 5px;
    font-weight: bold;
    font-size: 14px;
}

.contam {
    display: flex;
    justify-content: space-around;
    align-items: center;
   padding-top: 100px;
   padding-bottom: 13px;
    height: 400px;
    margin: 0;
    background-color: #f0f0f0;
}

.tarjeta-producto {
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    margin: 10px;
    width: 200px;
}

.tarjeta-producto:hover {
    transform: scale(1.05);
}

.tarjeta-producto img {
    max-width: 100%;
    border-radius: 8px;
}

.info-producto {
    margin-top: 10px;
    text-align: center;
}

.nombre-producto {
    font-weight: bold;
    font-size: 16px;
}

.precio-producto {
    margin-top: 5px;
    font-size: 14px;
}

.contenedorCards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 200px;
    margin: 20px;
    text-align: center;
    transition: ease all 0.3s;

    &:hover {
        transform: translateY(-10px);
    }

    .nombreProd {
        font-size: 16px;
        font-weight: 600;
        margin: 10px 0;
    }

    .precio {
        font-size: 14px;
        color: #b82d44;
    }
}



.tpopote{
    margin-top: 5px;


}


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
margin-left: 350px; /* Adjust the margin as needed */
}

.carrito-icon{

    height: 27px;
    width: auto;
    margin-top: 10px;
}

.tcil{

    margin-top: 60px;
}

#seccion-negra {
    background-color: #000;
    color: white;
    padding: 50px 20px;
    text-align: center;
    position: relative;
}

.contenido-seccion {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.derechos-reservados {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
}

.derechos-reservados p {
    font-size: 1em;
    
}
</style>
    <script src="main.js"></script>
</body>
</html>
