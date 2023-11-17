// Este es un ejemplo básico de un script en JavaScript para tu sitio web estática

// Función para resaltar el enlace activo en el menú de navegación
function resaltarEnlaceActivo() {
    var enlaces = document.querySelectorAll('header nav ul li a');
    var ubicacion = window.location.href;

    enlaces.forEach(function(enlace) {
        if (enlace.href === ubicacion) {
            enlace.style.color = '#ffcc00'; // Cambiar el color del enlace activo
        }
    });
}

// Llamar a la función al cargar la página
window.onload = resaltarEnlaceActivo;

