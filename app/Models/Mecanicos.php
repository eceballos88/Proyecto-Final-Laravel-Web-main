<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanicos extends Model
{
    use HasFactory;
    protected $table = 'mecanicos';
    protected $fillable = ['nombre','apPaterno','apMaterno', 'fecha_contratacion', 'salario', 'estatus'];
}
