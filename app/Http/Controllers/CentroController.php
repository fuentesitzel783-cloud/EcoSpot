<?php

// Define el espacio de nombres del controlador
namespace App\Http\Controllers;

// Importa la clase Request para manejar datos enviados desde formularios o URL
use Illuminate\Http\Request;

// Importa el modelo CentroReciclaje para interactuar con la base de datos
use App\Models\CentroReciclaje;

// Definición del controlador CentroController
class CentroController extends Controller
{
    // Método principal que muestra los centros de reciclaje
    public function index(Request $request)
    {
        // Se crea una consulta base sobre el modelo
        $query = CentroReciclaje::query();

        
        // FILTRO POR NOMBRE
        if ($request->buscar) {
            // Busca coincidencias en el nombre del centro
            $query->where('nombre','LIKE','%'.$request->buscar.'%');
        }
        // FILTRO POR MATERIAL
        if ($request->material) {
            // Filtra dinámicamente por el material seleccionado (valor = 1)
            $query->where($request->material,1);
        }


        // FILTRO POR TIPO DE CENTRO
        if ($request->tipo) {
            // Filtra dinámicamente por tipo (recicladora, centro de acopio, etc.)
            $query->where($request->tipo,1);
        }

        // Ejecuta la consulta y obtiene los resultados
        $centros = $query->get();


        // PROCESAMIENTO DE DATOS

        // Recorre cada centro obtenido
        foreach ($centros as $centro) {

            // Arreglo para almacenar los materiales que acepta
            $materiales = [];

            // Verifica cada material y lo agrega al arreglo si aplica
            if($centro->plastico) $materiales[] = "plástico";
            if($centro->papelCarton) $materiales[] = "papel y cartón";
            if($centro->vidrio) $materiales[] = "vidrio";
            if($centro->metales) $materiales[] = "metales";
            if($centro->electronicos) $materiales[] = "electrónicos";
            if($centro->telas) $materiales[] = "telas";

            // Convierte el arreglo en un texto separado por comas
            $centro->materialesTexto = implode(', ', $materiales);

            // Genera un texto indicando si paga o no
            $centro->pagaTexto = $centro->paga ? "Paga" : "No paga";
        }

        // RETORNO A LA VISTA

        // Envía los datos a la vista "centros"
        return view('centros', compact('centros'));
    }
}