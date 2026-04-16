<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"> <!-- Codificación de caracteres -->
<title> Actualizaciones</title> <!-- Título de la página -->

<!-- Conecta el archivo CSS -->
<link rel="stylesheet" href="estilos.css">

<!-- Conexión a Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Importación de tipografías -->
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Quattrocento&family=Source+Sans+3&display=swap" rel="stylesheet">
</head>

<body>
    
    <!-- HEADER (ENCABEZADO) -->
    <header class="header">
        <div class="container">
            <div class="header-content">

                <!-- LOGO -->
                <div class="logo-section">
                    <div class="logo-icon">

                        <!-- Ícono de reciclaje -->
                        <svg class="icon-recycle" viewBox="0 0 24 24"></svg>
                    </div>

                    <!-- Nombre del sistema -->
                    <div>
                        <h1 class="logo-title">EcoSpot</h1>
                        <p class="logo-subtitle">Reciclaje Inteligente</p>
                    </div>
                </div>

                <!-- MENÚ DE NAVEGACIÓN -->
                <nav class="nav-menu">
                    <a href="{{ url('inicio') }}">Inicio</a>
                    <a href="{{ url('centros') }}">Centros</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>
            </div>
        </div>
    </header>

    <!--  PANEL PRINCIPAL -->
    <div class="info-panel">

        <!-- TABS (NAVEGACIÓN INTERNA)-->
        <div class="tabs-wrapper">
            <div class="tabs-container">

                <!-- TAB ACTIVA -->
                <button class="tab-button-active" id="btnActualizaciones">
                    <span class="tab">Actualizaciones</span>
                </button> 

                <!-- TAB PREGUNTAS -->
                <button class="tab-button" id="btnPreguntas">
                    <span>Preguntas</span>
                </button>

                <!-- TAB REPORTES -->
                <button class="tab-button" id="btnReportar">
                    <span>Reportar</span>
                </button>

            </div>
        </div>

        <!-- CONTENIDO: ACTUALIZACIONES-->
        <div class="updates-list">
            <div class="update-card">

                <!-- TÍTULO DE SECCIÓN -->
                <div class="header-actualizaciones">
                    <h2 class="section-title">Últimas Actualizaciones</h2>
                </div>
                
                <!--TARJETAS DE ACTUALIZACIÓN -->
                <div>

                    <!-- ACTUALIZACIÓN 1 -->
                    <div class="update-card-green">

                        <!-- Fecha -->
                        <span>15 Ene 2026</span>

                        <!-- Título -->
                        <h3 class="update-card-h3">
                            Nuevo Punto en Centro Histórico
                        </h3>

                        <!-- Descripción -->
                        <p class="section-description">
                            Nuevo centro de reciclaje con contenedores inteligentes.
                        </p>

                        <!-- Ubicación -->
                        <span>Plaza Mayor, Centro Histórico</span>
                    </div>

                    <!-- ACTUALIZACIÓN 2 -->
                    <div class="update-card-blue">

                        <!-- Fecha -->
                        <span>10 Ene 2026</span>

                        <!-- Título -->
                        <h3 class="update-card-h3">
                            Extensión de Horarios
                        </h3>

                        <!-- Descripción -->
                        <p class="section-description">
                            Nuevos horarios más amplios para mayor accesibilidad.
                        </p>
                    </div>

                    <!-- ACTUALIZACIÓN 3 -->
                    <div class="update-card-amber">

                        <!-- Fecha -->
                        <span>5 Ene 2026</span>

                        <!-- Título -->
                        <h3 class="update-card-h3">
                            Mantenimiento Programado
                        </h3>

                        <!-- Descripción -->
                        <p class="section-description">
                            Cierre temporal por renovación de equipos.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div> 

    <!--SCRIPT DE RUTAS (BACKEND → FRONTEND) -->
    <script>
        // Define rutas dinámicas desde Laravel para usarlas en JavaScript
        const rutas = {
            actualizaciones: "{{ url('/actualizaciones') }}",
            preguntas: "{{ url('/preguntas') }}",
            reportes: "{{ url('/reportes') }}",
            centros: "{{ url('/centros') }}",
            info: "{{ url('/sobreNosotros') }}"
        };
    </script>

    <!-- Archivo JS externo -->
    <script src="{{ secure_asset('script1.js') }}"></script>

</body>
</html>