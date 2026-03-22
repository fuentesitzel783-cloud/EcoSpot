<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';

    protected $fillable = [
        'pregunta'
    ];

    public function respuesta()
    {
        return $this->hasOne(Respuesta::class);
    }
}
