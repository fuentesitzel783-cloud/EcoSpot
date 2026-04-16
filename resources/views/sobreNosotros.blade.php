<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"> <!-- Define la codificación de caracteres -->

<title>EcoSpot</title> <!-- Título de la página -->

<!-- Conecta el archivo CSS principal -->
<link rel="stylesheet" href="estilos.css">

<!-- Optimización de carga de fuentes -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Importación de tipografías desde Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Quattrocento&family=Source+Sans+3&display=swap" rel="stylesheet">
</head>

<body>
    
    <!-- HEADER -->
    <header class="header"> <!-- Contenedor principal del encabezado -->
        <div class="container">
            <div class="header-content">

                <!-- LOGO Y NOMBRE DEL PROYECTO -->
                <div class="logo-section">
                    <div class="logo-icon">

                        <!-- Ícono de reciclaje en formato SVG -->
                        <svg class="icon-recycle" viewBox="0 0 24 24"></svg>
                    </div>

                    <!-- Nombre y subtítulo -->
                    <div>
                        <h1 class="logo-title">EcoSpot</h1>
                        <p class="logo-subtitle">Reciclaje Inteligente</p>
                    </div>
                </div>

                <!-- MENÚ DE NAVEGACIÓN -->
                <nav class="nav-menu">
                    <!-- Rutas dinámicas con Laravel -->
                    <a href="{{ url('inicio') }}">Inicio</a>
                    <a href="{{ url('centros') }}">Centros</a>
                    <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>

            </div>
        </div>
    </header>

    <!--  CONTENIDO PRINCIPAL  -->
    <div class="contenedor-principal">

        <!-- LADO IZQUIERDO  -->
        <div class="contenedor-izquierdo">

            <!-- PROPÓSITO -->
            <div class="contenedor-icono">

                <!-- Icono decorativo -->
                <div class="icono">
                    <svg></svg>
                </div>

                <!-- Título -->
                <h2 class="titulo-proposito">Nuestro Propósito</h2>
            </div>

            <!-- Texto descriptivo del proyecto -->
            <p class="parrafo-proposito">
                Este proyecto surge de la necesidad de democratizar el acceso a información sobre reciclaje.
            </p>

            <p class="parrafo-proposito">
                Se busca facilitar la consulta de centros de reciclaje en Puebla.
            </p>

            <!-- VISIÓN -->
            <div class="contenedor-vision">
                <h3 class="titulo-vision">Nuestra Visión</h3>
                <p class="parrafo-vision">
                    Crear un ecosistema donde reciclar sea fácil.
                </p>
            </div>

            <!-- ESTADÍSTICAS -->
            <div class="contenedor-estadistica">

                <!-- Estadística 1 -->
                <div class="estadistica">
                    <div class="numero">+50%</div>
                    <div class="pie">Aumento en reciclaje</div>
                </div>

                <!-- Estadística 2 -->
                <div class="estadistica">
                    <div class="numero">1,000+</div>
                    <div class="pie">Usuarios activos</div>
                </div>

            </div>
        </div>

        <!-- LADO DERECHO  -->
        <div class="contenedor-derecho">

            <!-- SECCIÓN EQUIPO -->
            <div class="contenedor-icono-equipo">
                <svg></svg>
                <span>Conoce al Equipo</span>
            </div>

            <!-- LISTA DE INTEGRANTES -->
            <div class="contenedor-equipo">

                <!-- Integrante 1 -->
                <div class="integrante">
                    <div class="numero-integrante">1</div>
                    <div>
                        <h3 class="nom-integrante">Ethel Alejandra Cordero Vega</h3>
                        <p class="des-integrante">Estudiante BUAP</p>
                    </div>
                </div>

                <!-- Integrante 2 -->
                <div class="integrante">
                    <div class="numero-integrante">2</div>
                    <div>
                        <h3 class="nom-integrante">Itzel Fuentes Ordoñez</h3>
                        <p class="des-integrante">Estudiante BUAP</p>
                    </div>
                </div>

                <!-- Integrante 3 -->
                <div class="integrante">
                    <div class="numero-integrante">3</div>
                    <div>
                        <h3 class="nom-integrante">Sergio Alejandro Perez Ballinez</h3>
                        <p class="des-integrante">Estudiante BUAP</p>
                    </div>
                </div>

            </div>
            
            <!-- SECCIÓN CONTACTO -->
            <div class="contacto">

                <h3 class="titulo-contacto">Contáctanos</h3>

                <!-- Correo -->
                <div class="item-contacto">
                    <div class="icono-contacto">
                        <svg></svg>
                    </div>
                    <span>info@ecorecicla.com</span>
                </div>

                <!-- Teléfono -->
                <div class="item-contacto">
                    <div class="icono-contacto">
                        <svg></svg>
                    </div>
                    <span>+52 221 583 1169</span>
                </div>

                <!-- Horario -->
                <div class="item-contacto">
                    <div class="icono-contacto">
                        <svg></svg>
                    </div>
                    <span>Lunes - Viernes 9AM - 6PM</span>
                </div>

            </div>
        </div>
    </div>

    <!-- SECCIÓN FINAL -->
    <div class="contenedor-final">

        <!-- Icono decorativo -->
        <svg></svg>

        <!-- Mensaje motivacional -->
        <h2 class="titulo-final">¿Listo para Empezar a Reciclar?</h2>

        <!-- Descripción -->
        <p class="parrafo">
            Únete a miles de personas que contribuyen al planeta.
        </p>

    </div> 

</body>
</html>