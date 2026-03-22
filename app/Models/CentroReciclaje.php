<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentroReciclaje extends Model
{
    protected $table = 'centros_reciclaje';

    protected $primaryKey = 'id_Centro';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'direccion',
        'horarios',
        'contactos',
        'imagen',
        'paga',
        'plastico',
        'papelCarton',
        'vidrio',
        'metales',
        'electronicos',
        'telas',
        'recicladora',
        'centroAcopio',
        'chatarreria'
    ];
}
