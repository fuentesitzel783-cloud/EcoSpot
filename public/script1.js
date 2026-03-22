console.log("script cargado");
window.onload = function () {

    const btnActualizaciones = document.getElementById("btnActualizaciones");
    if (btnActualizaciones) {
        btnActualizaciones.addEventListener("click", function() {
            window.location.href = rutas.actualizaciones;
        });
    }

    const btnPreguntas = document.getElementById("btnPreguntas");
    if (btnPreguntas) {
        btnPreguntas.addEventListener("click", function() {
            window.location.href = rutas.preguntas;
        });
    }

    const btnReportar = document.getElementById("btnReportar");
    if (btnReportar) {
        btnReportar.addEventListener("click", function() {
            window.location.href = rutas.reportes;
        });
    }

    const btnExplorar = document.getElementById("btnExplorar");
    if (btnExplorar) {
        btnExplorar.addEventListener("click", function () {
            window.location.href = rutas.centros;
        });
    }

    const btnInformacion = document.getElementById("btnInformacion");
    if (btnInformacion) {
        btnInformacion.addEventListener("click", function () {
            window.location.href = rutas.info;
        });
    }

};