<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $table = "conductores";

    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'especialidad', 'edad', 'estado'];

    public function maquinaria() {
        return $this->hasOne('App\Models\Maquinaria');
    }
}
