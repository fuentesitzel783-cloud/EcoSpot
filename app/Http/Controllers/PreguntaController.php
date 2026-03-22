<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{

    // guardar pregunta del usuario
    public function guardarPregunta(Request $request)
    {
        Pregunta::create([
            'pregunta' => $request->pregunta
        ]);

        return back();
    }

    // mostrar solo preguntas que tengan respuesta
    public function mostrarPreguntasRespondidas() {
        $preguntas = Pregunta::has('respuesta')
                    ->with('respuesta')
                    ->get();

        return view('preguntas', compact('preguntas'));
    }
}
