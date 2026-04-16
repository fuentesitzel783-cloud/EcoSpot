<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<!-- Título de la página -->
<title>EcoSpot</title>

<!-- Hoja de estilos principal -->
<link rel="stylesheet" href="estilos.css">

<!-- Importación de fuentes desde Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Quattrocento:wght@400;700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>

    <!--  HEADER  -->
    <!-- Encabezado principal con logo y navegación -->
    <header class="header">
        <div class="container">
            <div class="header-content">

                <!-- Sección del logo -->
                <div class="logo-section">
                    <div class="logo-icon">
                        <!-- Icono SVG de reciclaje -->
                        <svg class="icon-recycle" viewBox="0 0 24 24">
                            <path d="M21 8L17.5 3.5L13 8"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="logo-title">EcoSpot</h1>
                        <p class="logo-subtitle">Reciclaje Inteligente</p>
                    </div>
                </div>

                <!-- Menú de navegación -->
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

        <!--  TABS DE NAVEGACIÓN -->
        <div class="tabs-wrapper">
            <div class="tabs-container">

                <!-- Botón: Actualizaciones -->
                <button class="tab-button" id="btnActualizaciones">
                    <span class="tab">Actualizaciones</span>
                </button>

                <!-- Botón activo: Preguntas -->
                <button class="tab-button-active" id="btnPreguntas">
                    <span>Preguntas</span>
                </button>

                <!-- Botón: Reportar -->
                <button class="tab-button" id="btnReportar">
                    <span>Reportar</span>
                </button>

            </div>
        </div>


        <!--TÍTULO  -->
        <div class="header-actualizaciones">
            <h2 class="section-title">Preguntas Frecuentes</h2>
        </div>


        <!-- LISTADO DE PREGUNTAS  -->
        <!-- Se recorren las preguntas obtenidas desde el controlador -->
        @foreach($preguntas as $item)

            <!-- Componente desplegable -->
            <details>

                <!-- Pregunta -->
                <summary>
                    <span class="titulo-pregunta">
                        {{ $item->pregunta }}
                    </span>
                </summary>

                <!-- Respuesta asociada -->
                <p>
                    {{ $item->respuesta->respuesta }}
                </p>

            </details>

        @endforeach


        <!-- SEPARADOR  -->
        <div class="divider-container">
            <div class="divider-line"></div>
            <span class="divider-text">
                ¿No encontraste tu respuesta?
            </span>
        </div>


        <!--  FORMULARIO DE PREGUNTAS  -->
        <div class="question-form">

            <!-- Encabezado del formulario -->
            <h3>Envía tu pregunta</h3>

            <p>
                Si no encontraste la respuesta que buscabas,
                déjanos tu pregunta y te responderemos pronto.
            </p>

            <!-- Formulario -->
            <form method="POST" action="{{ url('/guardar-pregunta') }}">
                @csrf <!-- Protección contra ataques CSRF -->

                <!-- Campo de texto -->
                <div class="question-form-field">
                    <label>Tu pregunta</label>

                    <textarea 
                        name="pregunta"
                        rows="4"
                        required
                        placeholder="Escribe tu pregunta aquí...">
                    </textarea>
                </div>

                <!-- Botón de envío -->
                <button type="submit">
                    Enviar pregunta
                </button>

            </form>

        </div>

    </div>


    <!-- CONFIGURACIÓN DE RUTAS JS  -->
    <script>
        const rutas = {
            actualizaciones: "{{ url('/actualizaciones') }}",
            preguntas: "{{ url('/preguntas') }}",
            reportes: "{{ url('/reportes') }}",
            centros: "{{ url('/centros') }}",
            info: "{{ url('/sobreNosotros') }}"
        };
    </script>

    <!-- Script principal -->
    <script src="{{ secure_asset('script1.js') }}"></script>

</body>
</html>