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
                    <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="contenedor-principal">
        <div class="contenedor-izquierdo">
            <div class="contenedor-icono">
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-recycle w-8 h-8 text-white">
                        <path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-.881 1.785 1.785 0 0 1-.004-1.784L7.196 9.5"></path>
                        <path d="M11 19h8.203a1.83 1.83 0 0 0 1.556-.89 1.784 1.784 0 0 0 0-1.775l-1.226-2.12"></path>
                        <path d="m14 16-3 3 3 3"></path>
                        <path d="M8.293 13.596 7.196 9.5 3.1 10.598"></path>
                        <path d="m9.344 5.811 1.093-1.892A1.83 1.83 0 0 1 11.985 3a1.784 1.784 0 0 1 1.546.888l3.943 6.843"></path>
                        <path d="m13.378 9.633 4.096 1.098 1.097-4.096"></path>
                    </svg>
                </div>
                <h2 class="titulo-proposito">Nuestro Propósito</h2>
            </div>
            <p class="parrafo-proposito">Este proyecto surge de la necesidad de democratizar el acceso a información sobre reciclaje en nuestra comunidad.</p>
            <p class="parrafo-proposito">Muchas personas tienen la intención de reciclar, pero se enfrentan a barreras de información: ¿dónde están los puntos? ¿qué materiales aceptan? ¿cuáles son los horarios?. Ante esta situación, se identifica la necesidad de contar con un sistema web que muestre de forma clara y accesible la información de los centros de reciclaje en Puebla, permitiendo a los usuarios consultar los datos relevantes de cada uno. De esta manera, se busca fomentar la cultura del reciclaje y contribuir al cuidado del medio ambiente a nivel local.</p>
            <div class="contenedor-vision">
                <h3 class="titulo-vision">Nuestra Visión</h3>
                <p class="parrafo-vision">Crear un ecosistema donde reciclar sea tan fácil como desechar, aumentando las tasas de reciclaje y reduciendo el impacto ambiental.</p>
            </div>
            <div class="contenedor-estadistica">
                <div class="estadistica">
                    <div class="numero">
                        +50%
                    </div>
                    <div class="pie">
                        Aumento en reciclaje
                    </div>
                </div>
                <div class="estadistica">
                    <div class="numero">
                        1,000+
                    </div>
                    <div class="pie">
                        Usuarios activos
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedor-derecho">
            <div class="contenedor-icono-equipo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-5 h-5 text-cyan-600">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span">Conoce al Equipo</span>
            </div>
            <div class="contenedor-equipo">
                <div class="integrante">
                    <div class="numero-integrante">
                        <span>
                            1
                        </span>
                    </div>
                    <div>
                        <h3 class="nom-integrante">Ethel Alejandra Cordero Vega</h3>
                        <p class="des-integrante">Estudiante de la Facultad en Ciencias de la Computacin en la BUAP.</p>
                    </div>
                </div>
                <div class="integrante">
                    <div class="numero-integrante">
                        <span>
                            2
                        </span>
                    </div>
                    <div>
                        <h3 class="nom-integrante">Itzel Fuentes Ordoñez</h3>
                        <p class="des-integrante">Estudiante de la Facultad en Ciencias de la Computacin en la BUAP.</p>
                    </div>
                </div>
                <div class="integrante">
                    <div class="numero-integrante">
                        <span>
                            3
                        </span>
                    </div>
                    <div>
                        <h3 class="nom-integrante">Sergio Alejandro Perez Ballinez</h3>
                        <p class="des-integrante">Estudiante de la Facultad en Ciencias de la Computacin en la BUAP.</p>
                    </div>
                </div>
            </div>
            
            <div class="contacto">
                <h3 class="titulo-contacto">Contáctanos</h3>
                <div class="item-contacto">
                    <div class="icono-contacto">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16v16H4z"/>
                            <path d="M22 6l-10 7L2 6"/>
                        </svg>
                    </div>
                    <span>info@ecorecicla.com</span>
                </div>
                <div class="item-contacto">
                    <div class="icono-contacto">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92V19a2 2 0 0 1-2.18 2 
                            19.79 19.79 0 0 1-8.63-3.07 
                            19.5 19.5 0 0 1-6-6 
                            19.79 19.79 0 0 1-3.07-8.67 
                            A2 2 0 0 1 4 2h2.09a2 2 0 0 1 2 1.72 
                            c.12.81.37 1.6.72 2.35 
                            a2 2 0 0 1-.45 2.11L7.09 9.91 
                            a16 16 0 0 0 6 6l1.73-1.27 
                            a2 2 0 0 1 2.11-.45 
                            c.75.35 1.54.6 2.35.72 
                            a2 2 0 0 1 1.72 2z"/>
                        </svg>
                    </div>
                    <span>+52 221 583 1169</span>
                </div>
                <div class="item-contacto">
                    <div class="icono-contacto">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                        <span>Lunes - Viernes 9AM - 6PM</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-final">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
            <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
            <path d="M9 18h6"></path>
            <path d="M10 22h4"></path>
        </svg>
        <h2 class="titulo-final">¿Listo para Empezar a Reciclar?</h2>
        <p class="parrafo">Únete a miles de personas que ya están contribuyendo a un planeta más limpio</p>
    </div> 

</body>    