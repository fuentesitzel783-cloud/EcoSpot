<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;

class ReporteController extends Controller
{
    public function guardar(Request $request)
    {
        Reporte::create([
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->back()->with('success', 'Reporte enviado correctamente');
    }
}
