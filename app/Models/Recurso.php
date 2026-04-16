<?php

// Define el espacio de nombres del modelo dentro de la estructura de Laravel
namespace App\Models;

// Importa la clase base Model que permite trabajar con la base de datos mediante Eloquent ORM
use Illuminate\Database\Eloquent\Model;

// Definición del modelo Recurso, el cual representa la tabla "recursos"
class Recurso extends Model
{
    // Especifica el nombre de la tabla asociada en la base de datos
    protected $table = 'recursos';

    // Define los campos que pueden ser asignados de forma masiva (protección contra vulnerabilidades)
    protected $fillable = [
        'tipo',        // Tipo de recurso (ejemplo: noticia, guía, evento, etc.)
        'titulo',      // Título del recurso que se mostrará en la interfaz
        'descripcion', // Descripción o contenido del recurso
        'link',        // Enlace relacionado (puede dirigir a otra página o recurso externo)
        'fecha',       // Fecha de publicación del recurso
        'hora',        // Hora de publicación
        'imagen'       // Ruta o nombre del archivo de imagen asociado
    ];

    // Nota: Este modelo no incluye relaciones actualmente,
    // pero puede extenderse para relacionarse con otras entidades en el futuro.
}
