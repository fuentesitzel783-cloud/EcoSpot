console.log("script cargado");

document.addEventListener("DOMContentLoaded", function () {
    const botones = [
        { id: "btnActualizaciones", ruta: rutas.actualizaciones },
        { id: "btnPreguntas", ruta: rutas.preguntas },
        { id: "btnReportar", ruta: rutas.reportes },
        { id: "btnExplorar", ruta: rutas.centros },
        { id: "btnInformacion", ruta: rutas.info }
    ];

    botones.forEach(boton => {
        const el = document.getElementById(boton.id);
        if (el) {
            el.addEventListener("click", () => {
                window.location.href = boton.ruta;
            });
        }
    });
});