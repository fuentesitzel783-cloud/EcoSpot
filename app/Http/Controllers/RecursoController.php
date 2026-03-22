<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;

class RecursoController extends Controller
{
    // Mostrar todos los recursos
    public function index()
    {
        $recursos = Recurso::all();
        return view('noticias', compact('recursos'));
    }
}