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
                <button class="tab-button" id="btnActualizaciones">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ta">
                        <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
                        <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path>
                    </svg>
                    <span class="tab">Actualizaciones</span>
                </button>
                <button class="tab-button-active" id="btnPreguntas">
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

    
                <div class="header-actualizaciones">
                    <h2 class="section-title">Preguntas Frecuentes</h2>
                </div>
        
        
        
                @foreach($preguntas as $item)
                    <details>
                        <summary>
                            <span class="titulo-pregunta">{{ $item->pregunta }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </summary>
                        <p>{{ $item->respuesta->respuesta }}</p>
                    </details>
                @endforeach

        
        <div class="divider-container">
            <div class="divider-line-wrapper">
                <div class="divider-line"></div>
            </div>
            <div class="divider-text-wrapper">
                <span class="divider-text">¿No encontraste tu respuesta?</span>
            </div>
        </div>

    <div class="question-form">
        <div class="question-form-header">
            <div class="question-form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="question-form-icon-wrapper">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                </svg>
            </div>
            <h3 class="question-form-h3">Envía tu pregunta</h3>
        </div>
        <p class="question-form-p">
            Si no encontraste la respuesta que buscabas, déjanos tu pregunta y te responderemos pronto.</p>
        

            <form class="question-form-body" method="POST" action="{{ url('/guardar-pregunta') }}">
                @csrf
                <div class="question-form-field">
                    <label for="faq-question" class="question-form-label">
                        Tu pregunta
                    </label>
                    <textarea name="pregunta" class="question-form-textarea" rows="4"
                    required placeholder="Escribe tu pregunta aquí..."></textarea>
                </div>
                <button type="submit" class="question-form-button">
                    Enviar pregunta
                </button>
            </form>


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