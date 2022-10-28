<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padecimiento extends Model
{
    use HasFactory;
    protected $table = 'padecimiento';
    protected $fillable = [
        'tipo_tratamiento',
        'via_administracion'
    ];
}
