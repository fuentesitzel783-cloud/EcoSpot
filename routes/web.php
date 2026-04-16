<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\RecursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/actualizaciones', function () {
    return view('actualizaciones');
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/sobreNosotros', function () {
    return view('sobreNosotros');
});

Route::post('/reportes', [ReporteController::class, 'guardar']);

Route::post('/guardar-pregunta', [PreguntaController::class, 'guardarPregunta']);
Route::get('/preguntas', [PreguntaController::class, 'mostrarPreguntasRespondidas']);

Route::get('/centros', [CentroController::class, 'index']);
Route::get('/noticias', [RecursoController::class, 'index']);
