document.addEventListener("DOMContentLoaded", function () {
    const termoImagen = document.querySelector(".termo-imagen");
    const contador = document.getElementById("contador");
    const restarBtn = document.getElementById("restar");
    const sumarBtn = document.getElementById("sumar");

    restarBtn.addEventListener("click", function () {
        if (contador.value > 1) {
            contador.value--;
        }
    });

    sumarBtn.addEventListener("click", function () {
        contador.value++;
    });

    const labels = document.querySelectorAll(".label-color");
    labels.forEach((label) => {
        label.addEventListener("click", function () {
            const color = this.classList[1].replace("color-", "");
            cambiarImagen(color);
        });
    });
    cambiarImagen("gris");
    function cambiarImagen(color) {
        const nuevaImagenSrc = `../ImgPro/termo_huevo_${color}.webp`;
        termoImagen.src = nuevaImagenSrc;
    }
});

function agregarAlCarrito() {
    alert("Producto agregado al carrito");
    // Aquí puedes agregar la lógica adicional para manejar el carrito de compra
}