<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- Define codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->
    <title>EcoSpot</title> <!-- Título de la página -->

    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="estilos.css">

    <!-- Conexión a Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Importación de fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Quattrocento&family=Source+Sans+3&display=swap" rel="stylesheet">
</head>

<body>
    
    <!--  HEADER (ENCABEZADO) -->
    <header class="header">
        <div class="container">
            <div class="header-content">

                <!-- LOGO -->
                <div class="logo-section">
                    <div class="logo-icon">

                        <!-- Ícono SVG de reciclaje -->
                        <svg class="icon-recycle" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M21 8L17.5 3.5M17.5 3.5L13 8M17.5 3.5V14.5C17.5 15.6046 16.6046 16.5 15.5 16.5H14"></path>
                            <path d="M3 16l3.5 4.5m0 0L11 16m-3.5 4.5V9.5C7.5 8.39543 8.39543 7.5 9.5 7.5H11"></path>
                            <path d="M14.5 19H9.5C8.39543 19 7.5 18.1046 7.5 17V16"></path>
                        </svg>
                    </div>

                    <!-- Nombre del sitio -->
                    <div>
                        <h1 class="logo-title">EcoSpot</h1>
                        <p class="logo-subtitle">Reciclaje Inteligente</p>
                    </div>
                </div>

                <!-- MENÚ DE NAVEGACIÓN -->
                <nav class="nav-menu">
                    <a href="{{ url('inicio') }}">Inicio</a> <!-- Ruta a inicio -->
                    <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- FORMULARIO DE BÚSQUEDA-->
    <form method="GET" action="{{ url('/centros') }}">
        <div class="OrganizadorColumna" style="gap: 40px;">

            <!-- TÍTULO DE LA SECCIÓN -->
            <div style="display:flex;">
                <h2 class="tipografiaTitulo3" style="color:#2d4b48; font-size:40px;">
                    Centros de Reciclaje
                </h2>
                <p class="tipografiaTexto" style="padding-top:20px; font-size:30px;">
                    |En Puebla
                </p>
            </div>

            <!-- BARRA DE BÚSQUEDA-->
            <div style="display:flex; width:1200px; gap:20px;">
                <div class="contenedor-input">
                    <input type="text"
                        name="buscar" 
                        id="eco-input"
                        class="entrada-eco"
                        placeholder="Buscar Punto de reciclaje">
                </div>

                <!-- Botón de búsqueda -->
                <button type="submit" style="border:none; background:none;">
                    <div class="icono" style="height: 50px; width: 50px; background-image: url(imagenes/img13.png);"></div>
                </button>
            </div>

            <!-- FILTROS (CLASIFICACIONES) -->
            <div style="display:flex; flex-direction:column; gap:10px; width:1200px;">
                <p class="tipografiaSubtituloNegritas" style="font-size:20px;">
                    Clasificaciones
                </p>

                <div style="display:flex; gap:40px;">

                    <!-- Filtro por material -->
                    <select name="material" class="select-eco">
                        <option value="" disabled selected hidden>Material</option>
                        <option value="plastico">♻️Plástico</option>
                        <option value="papelCarton">🗞️Papel y Cartón</option>
                        <option value="vidrio">🏺Vidrio</option>
                        <option value="metales">⚓Metales</option>
                        <option value="electronicos">🖥️Electronicos</option>
                        <option value="telas">👚Telas</option>
                    </select>

                    <!-- Filtro por tipo -->
                    <select name="tipo" class="select-eco">
                        <option value="" disabled selected hidden>Tipo</option>
                        <option value="recicladora">🔄Recicladora</option>
                        <option value="centroAcopio">📥Centro de Acopio</option>
                        <option value="chatarreria">🚮Chatarreria</option>
                    </select>

                    <!-- Botón para aplicar filtros -->
                    <button type="submit" class="select-eco">Mostrar</button>
                </div>
            </div>
        </div>
    </form>

    <!--  LISTADO DE CENTROS (BLADE) -->

    @foreach($centros as $centro) <!-- Recorre cada centro enviado desde el controlador -->

    <div class="apartado1">
        <div class="organizacion2">

            <!-- INFORMACIÓN DEL CENTRO -->
            <div class="OrganizadorColumna">
                <h2 class="tipografiaTitulo4" style="font-size:30px; color:#2d4b48;">
                    {{ $centro->nombre }} <!-- Nombre -->
                </h2>

                <p class="tipografiaTexto">
                    {{ $centro->direccion }} <!-- Dirección -->
                </p>

                <div class="linea"></div>

                <p class="tipografiaTexto">
                    ♻️Acepta: {{ $centro->materialesTexto }} <!-- Materiales -->
                </p>

                <p class="tipografiaTexto">
                    💰{{ $centro->pagaTexto }} <!-- Indica si paga -->
                </p>

                <p class="tipografiaTexto">
                    🕐Horarios
                </p>

                <p class="tipografiaTexto">
                    {{ $centro->horarios }} <!-- Horarios -->
                </p>

                <div class="linea"></div>

                <p class="tipografiaTexto">
                    📢Contactos
                </p>

                <p class="tipografiaTexto">
                    {{ $centro->contactos }} <!-- Contacto -->
                </p>
            </div>

            <!-- IMAGEN DEL CENTRO -->
            <div class="contenedorImagen">
                <img src="{{ asset($centro->imagen) }}" class="imagenCentro">
            </div>

        </div>
    </div>

    @endforeach <!-- Fin del ciclo -->

</body>
</html>