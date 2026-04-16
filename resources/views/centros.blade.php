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
                    <a href="{{ url('inicio') }}">Inicio</a>
                    <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                    <a href="{{ url('noticias') }}">Noticias</a>
                </nav>
            </div>
        </div>
    </header>

    

   
                <form method="GET" action="{{ url('/centros') }}">
                    <div class="OrganizadorColumna" style="gap: 40px;">
                        <div style="display:flex;">
                            <h2 class="tipografiaTitulo3" style="color:#2d4b48; font-size:40px;">
                                Centros de Reciclaje
                            </h2>
                            <p class="tipografiaTexto" style="height:50px; padding-top:20px; font-size:30px;">
                                |En Puebla
                            </p>
                        </div>

                        <!-- Barra de búsqueda -->
                        <div style="display:flex; width:1200px; gap:20px;">
                            <div class="contenedor-input">
                                <input type="text"
                                    name="buscar"
                                    id="eco-input"
                                    class="entrada-eco"
                                    placeholder="Buscar Punto de reciclaje">
                            </div>
                            <button type="submit" style="border:none; background:none; padding:0;">
                                <div class="icono" style="height: 50px; width: 50px; background-image: url(imagenes/img13.png);"></div>
                            </button>
                        </div>

                        <!-- Clasificaciones -->
                        <div style="display:flex; flex-direction:column; gap:10px; width:1200px;">
                            <p class="tipografiaSubtituloNegritas" style="font-size:20px;">
                                Clasificaciones
                            </p>
                            <div style="display:flex; width:1200px; gap:40px;">
                                <select name="material" class="select-eco">
                                    <option value="" disabled selected hidden>Material</option>
                                    <option value="plastico">♻️Plástico</option>
                                    <option value="papelCarton">🗞️Papel y Cartón</option>
                                    <option value="vidrio">🏺Vidrio</option>
                                    <option value="metales">⚓Metales</option>
                                    <option value="electronicos">🖥️Electronicos</option>
                                    <option value="telas">👚Telas</option>
                                </select>
                                <select name="tipo" class="select-eco">
                                    <option value="" disabled selected hidden>Tipo</option>
                                    <option value="recicladora">🔄Recicladora</option>
                                    <option value="centroAcopio">📥Centro de Acopio</option>
                                    <option value="chatarreria">🚮Chatarreria</option>
                                </select>
                                <button type="submit" class="select-eco">Mostrar</button>
                            </div>
                        </div>
                    </div>
                </form>















            @foreach($centros as $centro)
            <div class="apartado1">
                <div class="organizacion2">
                    <div class="OrganizadorColumna">
                    <h2 class="tipografiaTitulo4" style="font-size:30px; color:#2d4b48;">
                    {{ $centro->nombre }}
                    </h2>
                    <p class="tipografiaTexto" style="color:#2d4b48; width:400px;">
                    {{ $centro->direccion }}
                    </p>
                    <div class="linea" style="background-color:#2d4b48;"></div>
                    <p class="tipografiaTexto" style="width:400px; height:20px; color:#2d4b48;">
                    ♻️Acepta: {{ $centro->materialesTexto }}
                    </p>
                    <p class="tipografiaTexto" style="width:400px; height:5px;color:#2d4b48;">
                    💰{{ $centro->pagaTexto }}
                    </p>
                    <p class="tipografiaTexto" style="width:400px; height:5px;color:#2d4b48;">
                    🕐Horarios
                    </p>
                    <p class="tipografiaTexto" style="width:400px; height:5px;color:#2d4b48;">
                    {{ $centro->horarios }}
                    </p>
                    <div class="linea" style="background-color:#2d4b48;"></div>
                    <p class="tipografiaTexto" style="width:400px; height:5px;color:#669294;">
                    📢Contactos
                    </p>
                    <p class="tipografiaTexto" style="width:400px; height:5px;color:#669294;">
                    {{ $centro->contactos }}
                    </p>
                    </div>
                    <div >
                        <div class="contenedorImagen">
                <img src="{{ asset($centro->imagen) }}" class="imagenCentro">
            </div>
                    </div>
                </div>
            </div>
            @endforeach






</body> 