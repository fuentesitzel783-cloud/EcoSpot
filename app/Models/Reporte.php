<?php

// Define el espacio de nombres del modelo dentro de la aplicación Laravel
namespace App\Models;

// Importa la clase base Model de Eloquent (ORM de Laravel)
use Illuminate\Database\Eloquent\Model;

// Definición del modelo Reporte
class Reporte extends Model
{
    // Campos que pueden ser asignados de forma masiva (mass assignment)
    protected $fillable = [
        'tipo',        // Tipo de reporte (ej: basura, reciclaje, problema ambiental, etc.)
        'descripcion'  // Descripción detallada del reporte realizado por el usuario
    ];

    // Nota: No se especifica el nombre de la tabla porque Laravel asume por convención "reportes"
    // Tampoco se definen relaciones, pero podría relacionarse con usuarios o ubicaciones en el futuro
}
