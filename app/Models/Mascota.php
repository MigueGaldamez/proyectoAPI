<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascota';
    protected $fillable = [
        'nombre'
    ];
    public function propietario()
    {
        return $this->belongsTo(Propietario::class,'id_propietario');
    }

    public function especie()
    {
        return $this->belongsTo(Especie::class,'id_especie');
    }
}
