<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"> <!-- Define la codificación de caracteres -->

<title>EcoSpot</title> <!-- Título de la página -->

<!-- Conexión con la hoja de estilos CSS -->
<link rel="stylesheet" href="estilos.css">

<!-- Optimización para carga de fuentes externas -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Importación de tipografías -->
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Quattrocento&family=Source+Sans+3&display=swap" rel="stylesheet">
</head>

<body>

    <!--  HEADER  -->
    <header class="header">
        <div class="container">
            <div class="header-content">

                <!-- LOGO DEL SISTEMA -->
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

    <!--PANEL PRINCIPAL  -->
    <div class="info-panel">

        <!-- ===== NAVEGACIÓN POR TABS ===== -->
        <div class="tabs-wrapper">
            <div class="tabs-container">

                <!-- TAB ACTUALIZACIONES -->
                <button class="tab-button" id="btnActualizaciones">
                    <span>Actualizaciones</span>
                </button>

                <!-- TAB PREGUNTAS -->
                <button class="tab-button" id="btnPreguntas">
                    <span>Preguntas</span>
                </button>

                <!-- TAB ACTIVA: REPORTAR -->
                <button class="tab-button-active" id="btnReportar">
                    <span>Reportar</span>
                </button>

            </div>
        </div>

        <!-- TÍTULO DE SECCIÓN -->
        <div class="header-actualizaciones">
            <h2 class="section-title">
                Ayúdanos a brindarte un mejor servicio
            </h2>
        </div>

        <!--  FORMULARIO DE REPORTES  -->
        <div class="report-container">

            <!-- Título -->
            <h2 class="report-title">Reportar un Problema</h2>

            <!-- Descripción -->
            <p class="report-description">
                Tu reporte nos ayuda a mantener los puntos de reciclaje en óptimas condiciones.
            </p>

            <!-- FORMULARIO -->
            <form class="report-form" id="formReporte" 
                  action="{{ url('/reportes') }}" method="POST">

                @csrf <!-- Protección contra ataques CSRF -->

                <!-- CAMPO: TIPO DE PROBLEMA -->
                <div class="report-field">
                    <label for="problem">Tipo de problema</label>

                    <!-- Lista desplegable -->
                    <select id="problem" name="tipo" required>
                        <option value="">Selecciona una opción</option>
                        <option value="contenedor-lleno">Contenedor lleno</option>
                        <option value="contenedor-dañado">Contenedor dañado</option>
                        <option value="basura-fuera">Basura fuera del contenedor</option>
                        <option value="horario">Horario incorrecto</option>
                        <option value="ubicacion">Ubicación inaccesible</option>
                        <option value="otro">Otro</option>
                    </select>      
                </div>

                <!-- CAMPO: DESCRIPCIÓN -->
                <div class="report-field">
                    <label for="description">Descripción</label>

                    <!-- Área de texto -->
                    <textarea id="desReporte" name="descripcion" rows="4"
                              required placeholder="Describe el problema..."></textarea>
                </div>

                <!-- BOTÓN DE ENVÍO -->
                <button id="enviarReporte" type="submit" class="report-submit">
                    Enviar reporte
                </button>

            </form>

        </div>
    </div>

    <!-- RUTAS DINÁMICAS -->
    <script>
        // Variables con rutas generadas por Laravel
        const rutas = {
            actualizaciones: "{{ url('/actualizaciones') }}",
            preguntas: "{{ url('/preguntas') }}",
            reportes: "{{ url('/reportes') }}",
            centros: "{{ url('/centros') }}",
            info: "{{ url('/sobreNosotros') }}"
        };
    </script>

    <!-- Archivo JavaScript externo -->
    <script src="{{ secure_asset('script1.js') }}"></script> 

</body>
</html>