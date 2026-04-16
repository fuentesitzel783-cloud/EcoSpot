<?php

// Define el espacio de nombres del controlador
namespace App\Http\Controllers;

// Importa la clase Request para manejar datos enviados desde formularios
use Illuminate\Http\Request;

// Importa el modelo Reporte
use App\Models\Reporte;

// Definición del controlador ReporteController
class ReporteController extends Controller
{
    
    // GUARDAR REPORTE
    public function guardar(Request $request)
    {
        // Crea un nuevo registro en la tabla "reportes"
        Reporte::create([
            'tipo' => $request->tipo, // Tipo de reporte (ej: problema ambiental)
            'descripcion' => $request->descripcion // Descripción del problema
        ]);

        // Redirige a la página anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Reporte enviado correctamente');
    }
}