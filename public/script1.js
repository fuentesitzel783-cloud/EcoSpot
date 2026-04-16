// Muestra un mensaje en la consola del navegador para verificar que el script se cargó correctamente
console.log("script cargado");

// Espera a que todo el contenido del HTML se haya cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", function () {

    // Arreglo de objetos que contiene los botones y la ruta a la que deben redirigir
    const botones = [
        { id: "btnActualizaciones", ruta: rutas.actualizaciones }, // Botón de actualizaciones
        { id: "btnPreguntas", ruta: rutas.preguntas }, // Botón de preguntas frecuentes
        { id: "btnReportar", ruta: rutas.reportes }, // Botón para reportar
        { id: "btnExplorar", ruta: rutas.centros }, // Botón para explorar centros
        { id: "btnInformacion", ruta: rutas.info } // Botón de información
    ];

    // Recorre cada objeto dentro del arreglo de botones
    botones.forEach(boton => {

        // Busca en el HTML el elemento que tenga el id especificado
        const el = document.getElementById(boton.id);

        // Verifica si el elemento existe en la página
        if (el) {

            // Agrega un evento de tipo "click" al botón
            el.addEventListener("click", () => {

                // Redirige al usuario a la ruta definida en el objeto
                window.location.href = boton.ruta;
            });
        }
    });
});