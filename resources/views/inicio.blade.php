<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"> <!-- Codificación de caracteres -->
<title>EcoSpot</title> <!-- Título de la página -->

<!-- Conecta el archivo CSS para aplicar estilos -->
<link rel="stylesheet" href="estilos.css">

<!-- Conexión a Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Importación de tipografías -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Quattrocento:wght@400;700&family=Source+Sans+3&display=swap" rel="stylesheet">
</head>

<body>
    
    <!-- ENCABEZADO (HEADER) -->
    <header class="header">
        <div class="container">
            <div class="header-content">

                <!-- LOGO DEL SITIO -->
                <div class="logo-section">
                    <div class="logo-icon">

                        <!-- Ícono SVG de reciclaje -->
                        <svg class="icon-recycle" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M21 8L17.5 3.5M17.5 3.5L13 8M17.5 3.5V14.5C17.5 15.6046 16.6046 16.5 15.5 16.5H14"></path>
                            <path d="M3 16l3.5 4.5m0 0L11 16m-3.5 4.5V9.5C7.5 8.39543 8.39543 7.5 9.5 7.5H11"></path>
                            <path d="M14.5 19H9.5C8.39543 19 7.5 18.1046 7.5 17V16"></path>
                        </svg>
                    </div>

                    <!-- Nombre del proyecto -->
                    <div>
                        <h1 class="logo-title">EcoSpot</h1>
                        <p class="logo-subtitle">Reciclaje Inteligente</p>
                    </div>
                </div>

                <!-- MENÚ DE NAVEGACIÓN -->
                <nav class="nav-menu">
                    <a href="{{ url('inicio') }}">Inicio</a>
                    <a href="{{ url('centros') }}">Centros</a>
                    <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- CONTENEDOR PRINCIPAL= -->
    <div class="contenedor-principal">

        <!--LADO IZQUIERDO (PROPÓSITO) -->
        <div class="contenedor-izquierdo">

            <!-- Ícono + título -->
            <div class="contenedor-icono">
                <div class="icono">
                    <!-- Ícono SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"></svg>
                </div>
                <h2 class="titulo-proposito">Nuestro Propósito</h2>
            </div>

            <!-- Descripción del proyecto -->
            <p class="parrafo-proposito">
                Este proyecto surge de la necesidad de democratizar el acceso a información sobre reciclaje.
            </p>

            <p class="parrafo-proposito">
                Se busca facilitar a los usuarios información sobre centros de reciclaje en Puebla.
            </p>

            <!-- VISIÓN -->
            <div class="contenedor-vision">
                <h3 class="titulo-vision">Nuestra Visión</h3>
                <p class="parrafo-vision">
                    Crear un ecosistema donde reciclar sea fácil y accesible.
                </p>
            </div>

            <!-- ESTADÍSTICAS -->
            <div class="contenedor-estadistica">

                <div class="estadistica">
                    <div class="numero">+50%</div>
                    <div class="pie">Aumento en reciclaje</div>
                </div>

                <div class="estadistica">
                    <div class="numero">1,000+</div>
                    <div class="pie">Usuarios activos</div>
                </div>

            </div>
        </div>

        <!-- LADO DERECHO (EQUIPO) -->
        <div class="contenedor-derecho">

            <!-- TÍTULO DEL EQUIPO -->
            <div class="contenedor-icono-equipo">
                <span>Conoce al Equipo</span>
            </div>

            <!-- LISTA DE INTEGRANTES -->
            <div class="contenedor-equipo">

                <!-- Integrante 1 -->
                <div class="integrante">
                    <h3 class="nom-integrante">Ethel Alejandra Cordero Vega</h3>
                </div>

                <!-- Integrante 2 -->
                <div class="integrante">
                    <h3 class="nom-integrante">Itzel Fuentes Ordoñez</h3>
                </div>

                <!-- Integrante 3 -->
                <div class="integrante">
                    <h3 class="nom-integrante">Sergio Alejandro Perez Ballinez</h3>
                </div>

            </div>

            <!-- SECCIÓN DE CONTACTO-->
            <div class="contacto">

                <h3 class="titulo-contacto">Contáctanos</h3>

                <!-- Correo -->
                <div class="item-contacto">
                    <span>info@ecorecicla.com</span>
                </div>

                <!-- Teléfono -->
                <div class="item-contacto">
                    <span>+52 221 583 1169</span>
                </div>

                <!-- Horario -->
                <div class="item-contacto">
                    <span>Lunes - Viernes 9AM - 6PM</span>
                </div>

            </div>
        </div>
    </div>

    <!--SECCIÓN FINAL -->
    <div class="contenedor-final">

        <!-- Mensaje motivacional -->
        <h2 class="titulo-final">¿Listo para Empezar a Reciclar?</h2>

        <p class="parrafo">
            Únete a personas que contribuyen a un planeta más limpio
        </p>
    </div> 

</body>
</html>