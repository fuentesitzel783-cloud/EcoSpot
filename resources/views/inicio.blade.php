<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoSpot</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Quattrocento:wght@400;700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    
    <!--Para la forma del encabezado-->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <div class="logo-icon">
                        <svg class="icon-recycle" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M21 8L17.5 3.5M17.5 3.5L13 8M17.5 3.5V14.5C17.5 15.6046 16.6046 16.5 15.5 16.5H14"></path>
                            <path d="M3 16l3.5 4.5m0 0L11 16m-3.5 4.5V9.5C7.5 8.39543 8.39543 7.5 9.5 7.5H11"></path>
                            <path d="M14.5 19H9.5C8.39543 19 7.5 18.1046 7.5 17V16"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="logo-title">EcoSpot</h1>
                        <p class="logo-subtitle">Reciclaje Inteligente</p>
                    </div>
                </div>
                <nav class="nav-menu">
                    <a href="{{ url('noticias') }}">Noticias</a>
                    <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        🌍 Por un planeta más limpio
                    </div>
                    <h2 class="hero-title">
                        Encuentra Puntos de
                        <span class="gradient-text">Reciclaje</span>
                        Cerca de Ti
                    </h2>
                    <p class="hero-description">
                        Conectamos a la comunidad con centros de reciclaje accesibles. 
                        Juntos construimos un futuro más sostenible para todos.
                    </p>
                    <div class="hero-buttons">
                        <button class="btn btn-primary" id="btnExplorar" type="button">
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            Explorar
                        </button>
                        <button class="btn btn-secondary" id="btnInformacion" type="button">Más Información</button>
                    </div>
                </div>
                <div class="hero-image-container">
                    <div class="hero-image-bg"></div>
                    <div class="hero-image">
                        <img src="imagenes/imagen1.png"  alt="Sostenibilidad ambiental">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Puntos Activos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15K+</div>
                    <div class="stat-label">Toneladas Recicladas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Satisfacción</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Soporte</div>
                </div>
            </div>
        </div>
    </section>
    
    
    <script>
        const rutas = {
            actualizaciones: "{{ url('/actualizaciones') }}",
            preguntas: "{{ url('/preguntas') }}",
            reportes: "{{ url('reportes') }}",
            centros: "{{ url('/centros') }}",
            info: "{{ url('/sobreNosotros') }}"
        };
    </script>

<script src="{{ asset('script1.js') }}"></script>


    </body>
</html>