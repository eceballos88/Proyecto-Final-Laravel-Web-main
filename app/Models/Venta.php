<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_codigo',
        /* 'cliente_codigo', */
        'coche_matricula',
        /* 'coche_matricula', */
        'usuario_id',
        'total',
        /* 'usuario_id', */
        'status',      
    ];
}
