<?php

// Define el espacio de nombres del modelo dentro de la aplicación
namespace App\Models;

// Importa la clase base Model de Eloquent
use Illuminate\Database\Eloquent\Model;

// Definición del modelo Pregunta
class Pregunta extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'preguntas';

    // Campos que pueden ser asignados masivamente (mass assignment)
    protected $fillable = [
        'pregunta' // Texto de la pregunta
    ];

    // Relación uno a uno con el modelo Respuesta
    public function respuesta()
    {
        // Indica que una pregunta tiene una única respuesta
        return $this->hasOne(Respuesta::class);
    }
}
