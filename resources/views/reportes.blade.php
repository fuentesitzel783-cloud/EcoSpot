<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>EcoSpot</title>
<!--Para aplicar la hoja css, es decir 
conecta el archivo HMTL-->
<link rel="stylesheet" href="estilos.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Quattrocento:wght@400;700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
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
                    <a href="{{ url('inicio') }}">Inicio</a>
                    <a href="{{ url('centros') }}">Centros</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>
            </div>
        </div>
    </header>


    <div class="info-panel">
        <div class="tabs-wrapper">
            <div class="tabs-container">
                <button class="tab-button" id="btnActualizaciones">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ta">
                        <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
                        <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path>
                    </svg>
                    <span class="tab">Actualizaciones</span>
                </button>
                <button class="tab-button" id="btnPreguntas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tab-button.inactive">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                   <span class="tab-button.inactive">Preguntas</span>
                </button>
                <button class="tab-button-active" id="btnReportar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-reportar" >                
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                        <path d="M12 9v4"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                    <span class="span-reportar">Reportar</span>
                </button>
            </div>
        </div>


         <div class="header-actualizaciones">
                    <h2 class="section-title">Ayúdanos a brindarte un mejor servicio</h2>
                </div>


    <div class="report-container">
        <h2 class="report-title">Reportar un Problema</h2>
        <p class="report-description">Tu reporte nos ayuda a mantener los puntos de reciclaje en óptimas condiciones.</p>
        

        <form class="report-form" id="formReporte" action="{{ url('/reportes') }}" method="POST">
            @csrf
                    <div class="report-field">
                        <label for="problem">Tipo de problema</label>
                        <select id="problem" name="tipo" required>
                            <option value="">Selecciona una opción</option>
                            <option value="contenedor-lleno">📦 Contenedor lleno</option>
                            <option value="contenedor-dañado">🔨 Contenedor dañado</option>
                            <option value="basura-fuera">🗑️ Basura fuera del contenedor</option>
                            <option value="horario">⏰ Horario incorrecto</option>
                            <option value="ubicacion">🚧 Ubicación inaccesible</option>
                            <option value="otro">❓ Otro</option>
                        </select>      
                    </div>
                    <div class="report-field">
                        <label for="description">Descripción</label>
                        <textarea id="desReporte" name="descripcion" nrows="4" required placeholder="Describe el problema con el mayor detalle posible..."></textarea>
                    </div>
                    <button id="enviarReporte" type="submit" class="report-submit">
                        Enviar reporte
                    </button>
        </form>

    </div>
    </div>

    <script>
        const rutas = {
            actualizaciones: "{{ url('/actualizaciones') }}",
            preguntas: "{{ url('/preguntas') }}",
            reportes: "{{ url('/reportes') }}",
            centros: "{{ url('/centros') }}",
            info: "{{ url('/sobreNosotros') }}"
        };
    </script>

    <script src="{{ secure_asset('script1.js') }}"></script> 
</body>    