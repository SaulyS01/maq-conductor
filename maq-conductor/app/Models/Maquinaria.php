<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'marca', 'modelo', 'estado', 'conductor_id'];

    public function conductor() {
        return $this->belongsTo('App\Models\Conductor');
    }
}
