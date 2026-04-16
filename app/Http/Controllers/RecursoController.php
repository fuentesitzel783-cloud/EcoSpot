<?php

// Define el espacio de nombres del controlador
namespace App\Http\Controllers;

// Importa la clase Request (aunque en este método no se usa directamente)
use Illuminate\Http\Request;

// Importa el modelo Recurso
use App\Models\Recurso;

// Definición del controlador RecursoController
class RecursoController extends Controller
{
    // =========================
    // MOSTRAR RECURSOS
    // =========================

    // Método que obtiene y muestra todos los recursos
    public function index()
    {
        // Obtiene todos los registros de la tabla "recursos"
        $recursos = Recurso::all();

        // Retorna la vista "noticias" enviando los recursos obtenidos
        return view('noticias', compact('recursos'));
    }
}