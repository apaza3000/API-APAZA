<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        't_doc',
        'num_doc',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'email'
    ];
}
