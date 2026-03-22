<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title> Actualizaciones</title>
<!--Para aplicar la hoja css, es decir 
conecta el archivo HMTL-->
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
                <button class="tab-button-active" id="btnActualizaciones">
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
                <button class="tab-button" id="btnReportar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-reportar" >                
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                        <path d="M12 9v4"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                    <span class="span-reportar">Reportar</span>
                </button>
            </div>
        </div>

        <div class="updates-list">
            <div class="update-card">
                <div class="header-actualizaciones">
                    <h2 class="section-title">Últimas Actualizaciones</h2>
                </div>
                
                <div class="">
                    <div class="update-card-green">
                        <div class="">
                            <div class="flex items-center gap-2 text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="text-sm font-medium">15 Ene 2026</span>
                            </div>
                        </div>
                        <h3 class="update-card-h3">Nuevo Punto en Centro Histórico</h3>
                        <p class="section-description">Inauguramos un nuevo centro de reciclaje en Plaza Mayor equipado con contenedores inteligentes para papel, plástico, vidrio y orgánicos.</p>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Plaza Mayor, Centro Histórico</span>
                        </div>
                    </div>
                    <div class="update-card-blue">
                        <div class="">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="">10 Ene 2026</span>
                            </div>
                        </div>
                        <h3 class="update-card-h3">Extensión de Horarios</h3>
                        <p class="section-description">Los puntos de reciclaje del sector norte ahora abren de lunes a domingo, de 7:00 AM a 8:00 PM para mayor comodidad.</p>
                    </div>
                    <div class="update-card-amber">
                        <div class="">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4">
                                    <path d="M8 2v4"></path><path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="">5 Ene 2026</span>
                            </div>
                        </div>
                        <h3 class="update-card-h3">Mantenimiento Programado</h3>
                        <p class="section-description">El punto de Avenida Principal estará cerrado del 20 al 22 de enero por renovación de equipos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
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