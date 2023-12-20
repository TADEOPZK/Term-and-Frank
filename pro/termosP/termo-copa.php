


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="termosP.css">
    <title>Tienda de Termos</title>
    <style>
        /* Agrega tus estilos CSS personalizados aquí */
    </style>
</head>
<body>
<form action="../carrito.php" method="POST">
    <div class="producto-detalle">
        <a class="btn-regresar" href="../productos/pequenos.php">
            <span>&lt;</span> Regresar
        </a>
        <div class="imagen-producto">
            
            <img class="termo-imagen" src="../ImgPro/termo_huevo_gris.webp" alt="Termo de Copa">
        </div>
        <div class="info-producto">
            <h2>Termo de Copa</h2>
            <p class="precio">$299.99</p>
            <p class="descripcion">Termo de alta calidad para mantener tus bebidas a la temperatura perfecta. Ideal para uso diario.</p>
           
            <div class="cantidad">
                <button id="restar">-</button>
                <input type="number" id="contador" value="1" min="1">
                <button id="sumar">+</button>
            </div>
            <button class="btn-carrito" onclick="agregarAlCarrito()">Añadir al carrito</button>
        </div>
    </div>
</form>
    <section id="seccion-negra">
        <div class="contenido-seccion">
            <h2>Consigue tu termo especial y personalizado</h2>
            <p>Descubre nuestros productos de primera calidad, diseñados para cualquier tipo de bebida</p>
        </div>
    </section>



    <script src="script.js"></script>
</body>
</html>
