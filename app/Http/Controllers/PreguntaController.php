<?php

// Define el espacio de nombres del controlador
namespace App\Http\Controllers;

// Importa la clase Request para manejar datos enviados desde formularios
use Illuminate\Http\Request;

// Importa el modelo Pregunta
use App\Models\Pregunta;

// Definición del controlador PreguntaController
class PreguntaController extends Controller
{

    // GUARDAR PREGUNTA
    public function guardarPregunta(Request $request)
    {
        // Crea un nuevo registro en la tabla "preguntas"
        Pregunta::create([
            'pregunta' => $request->pregunta // Obtiene la pregunta enviada desde el formulario
        ]);

        // Regresa a la página anterior después de guardar
        return back();
    }

    // MOSTRAR PREGUNTAS CON RESPUESTA
    
    public function mostrarPreguntasRespondidas() {

        // Obtiene únicamente las preguntas que tienen una respuesta asociada
        $preguntas = Pregunta::has('respuesta') // Filtra preguntas con relación existente
                    ->with('respuesta') // Carga la respuesta relacionada (Eager Loading)
                    ->get(); // Ejecuta la consulta

        // Retorna la vista "preguntas" enviando los datos obtenidos
        return view('preguntas', compact('preguntas'));
    }
}
