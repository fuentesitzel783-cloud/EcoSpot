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
                        <a href="{{ url('centros') }}">Centros</a>
                        <a href="{{ url('actualizaciones') }}">Actualizaciones</a>
                    </nav>
                </div>
            </div>
        </header>




    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-10">
            <p class="mt-3 text-slate-500 max-w-xl mx-auto">Infórmate sobre la importancia del reciclaje y comparte estos recursos con tu comunidad.</p>
        </div>

         



        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($recursos as $recurso)
                <article class="group bg-white rounded-2xl border border-slate-200 hover:border-green-300 hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                    
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset($recurso->imagen) }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                        <!-- Tipo dinámico -->
                        <span class="absolute top-3 left-3 inline-flex items-center gap-1 text-xs font-semibold px-2 py-1 rounded-full
                            @if($recurso->tipo == 'Noticia') bg-sky-100 text-sky-700
                            @elseif($recurso->tipo == 'Guia') bg-amber-100 text-amber-700
                            @else bg-green-100 text-green-700
                            @endif
                        ">

                            @if($recurso->tipo == 'Noticia')
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2"
                                        d="M4 22h16a2 2 0 002-2V4a2 2 0 00-2-2H8a2 2 0 00-2 2v16a2 2 0 01-2 2Zm0 0a2 2 0 01-2-2v-9a2 2 0 012-2h2M18 14H10M15 18H10M10 6h8v4h-8V6z" />
                                </svg>

                            @elseif($recurso->tipo == 'Guia')
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2"
                                        d="M12 7v14M3 18a1 1 0 01-1-1V4a1 1 0 011-1h5a4 4 0 014 4 4 4 0 014-4h5a1 1 0 011 1v13a1 1 0 01-1 1h-6a3 3 0 00-3 3 3 3 0 00-3-3z" />
                                </svg>

                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2"
                                        d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 006 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5M9 18h6M10 22h4" />
                                </svg>
                            @endif

                            <span>{{ $recurso->tipo }}</span>
                        </span>
                    </div>

                    <div class="p-5 flex-1 flex flex-col">
                        <h3 class="text-lg font-bold text-slate-800 group-hover:text-green-700 transition leading-snug">
                            {{ $recurso->titulo }}
                        </h3>

                        <p class="mt-2 text-sm text-slate-500 leading-relaxed flex-1" style="text-align: justify;"> {{ $recurso->descripcion }}</p>

                        <a href="{{ $recurso->link }}" target="_blank" class="mt-3 text-xs text-slate-400 hover:underline">
                            Ver recurso
                        </a>

                        <div class="mt-4 flex items-center justify-between text-xs text-slate-400">
                            <span>{{ \Carbon\Carbon::parse($recurso->fecha)->format('d M Y') }}</span>

                            <span>
                                {{ $recurso->hora }}
                            </span>
                        </div>
                    </div>

                </article>
            @endforeach

        </div>





















        </div>               
    </body>
</html>        