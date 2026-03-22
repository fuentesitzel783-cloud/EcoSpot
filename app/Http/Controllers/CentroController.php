<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroReciclaje;

class CentroController extends Controller
{
    


    public function index(Request $request)
    {
        $query = CentroReciclaje::query();

        if ($request->buscar) {
            $query->where('nombre','LIKE','%'.$request->buscar.'%');
        }

        if ($request->material) {
            $query->where($request->material,1);
        }

        if ($request->tipo) {
            $query->where($request->tipo,1);
        }

        $centros = $query->get();

        // procesar materiales
        foreach ($centros as $centro) {

            $materiales = [];

            if($centro->plastico) $materiales[] = "plástico";
            if($centro->papelCarton) $materiales[] = "papel y cartón";
            if($centro->vidrio) $materiales[] = "vidrio";
            if($centro->metales) $materiales[] = "metales";
            if($centro->electronicos) $materiales[] = "electrónicos";
            if($centro->telas) $materiales[] = "telas";

            $centro->materialesTexto = implode(', ', $materiales);

            $centro->pagaTexto = $centro->paga ? "Paga" : "No paga";
        }

        return view('centros', compact('centros'));
    }
}
