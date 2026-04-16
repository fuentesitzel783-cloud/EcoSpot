<?php

// Define el espacio de nombres donde se encuentra el modelo
namespace App\Models;

// Importa la clase base Model de Eloquent (ORM de Laravel)
use Illuminate\Database\Eloquent\Model;

// Definición del modelo CentroReciclaje
class CentroReciclaje extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'centros_reciclaje';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_Centro';

    // Indica que la tabla NO usa timestamps automáticos (created_at, updated_at)
    public $timestamps = false;

    // Define los campos que pueden ser asignados de forma masiva (mass assignment)
    protected $fillable = [
        'nombre',         // Nombre del centro de reciclaje
        'direccion',      // Dirección física
        'horarios',       // Horarios de atención
        'contactos',      // Información de contacto
        'imagen',         // Ruta o nombre de la imagen
        'paga',           // Indica si el centro paga por materiales
        'plastico',       // Acepta plástico
        'papelCarton',    // Acepta papel y cartón
        'vidrio',         // Acepta vidrio
        'metales',        // Acepta metales
        'electronicos',   // Acepta electrónicos
        'telas',          // Acepta textiles
        'recicladora',    // Tipo: recicladora
        'centroAcopio',   // Tipo: centro de acopio
        'chatarreria'     // Tipo: chatarrería
    ];
}
