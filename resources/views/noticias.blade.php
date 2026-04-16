<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->
    <title>EcoSpot</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="estilos.css">

    <!-- Conexión a Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Importación de tipografías -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Quattrocento&family=Source+Sans+3&display=swap" rel="stylesheet">
</head>

<body>  

    <!-- HEADER (ENCABEZADO)-->
    <header class="header">
        <div class="container">
            <div class="header-content">

                <!-- LOGO -->
                <div class="logo-section">
                    <div class="logo-icon">

                        <!-- Ícono de reciclaje -->
                        <svg class="icon-recycle" viewBox="0 0 24 24"></svg>
                    </div>

                    <!-- Nombre del sistema -->
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
                </nav>
            </div>
        </div>
    </header>

    <!-- CONTENEDOR PRINCIPAL-->
    <div class="mx-auto max-w-7xl px-4 py-16">

        <!-- Texto introductorio -->
        <div class="text-center mb-10">
            <p class="mt-3 text-slate-500 max-w-xl mx-auto">
                Infórmate sobre la importancia del reciclaje y comparte estos recursos con tu comunidad.
            </p>
        </div>

        <!-- GRID DE RECURSOS -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Recorre todos los recursos enviados desde el controlador -->
            @foreach($recursos as $recurso)

            <article class="group bg-white rounded-2xl border hover:shadow-lg transition-all flex flex-col">

                <!-- IMAGEN DEL RECURSO -->
                <div class="relative overflow-hidden h-48">

                    <!-- Imagen dinámica -->
                    <img src="{{ asset($recurso->imagen) }}"
                         class="w-full h-full object-cover">

                    <!--ETIQUETA DE TIPO -->
                    <span class="absolute top-3 left-3 text-xs font-semibold px-2 py-1 rounded-full
                        @if($recurso->tipo == 'Noticia') bg-sky-100 text-sky-700
                        @elseif($recurso->tipo == 'Guia') bg-amber-100 text-amber-700
                        @else bg-green-100 text-green-700
                        @endif">

                        <!-- Icono según tipo -->
                        @if($recurso->tipo == 'Noticia')
                            <svg width="14" height="14"></svg>

                        @elseif($recurso->tipo == 'Guia')
                            <svg width="14" height="14"></svg>

                        @else
                            <svg width="14" height="14"></svg>
                        @endif

                        <!-- Texto del tipo -->
                        <span>{{ $recurso->tipo }}</span>
                    </span>
                </div>

                <!--  CONTENIDO DEL RECURSO -->
                <div class="p-5 flex-1 flex flex-col">

                    <!-- Título -->
                    <h3 class="text-lg font-bold">
                        {{ $recurso->titulo }}
                    </h3>

                    <!-- Descripción -->
                    <p class="mt-2 text-sm flex-1">
                        {{ $recurso->descripcion }}
                    </p>

                    <!-- Enlace al recurso -->
                    <a href="{{ $recurso->link }}" target="_blank" class="mt-3 text-xs hover:underline">
                        Ver recurso
                    </a>

                    <!-- Fecha y hora -->
                    <div class="mt-4 flex justify-between text-xs">

                        <!-- Formatea la fecha usando Carbon -->
                        <span>
                            {{ \Carbon\Carbon::parse($recurso->fecha)->format('d M Y') }}
                        </span>

                        <!-- Hora -->
                        <span>
                            {{ $recurso->hora }}
                        </span>
                    </div>
                </div>

            </article>

            @endforeach <!-- Fin del ciclo -->

        </div>

    </div>               

</body>
</html>