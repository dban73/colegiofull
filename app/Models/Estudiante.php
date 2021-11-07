<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=[ 
        'paterno', 
        'materno', 
        'nombres', 
        'ci', 
        'sexo', 
        'fecha_nacimiento', 
        'celular' 
    ];
}
