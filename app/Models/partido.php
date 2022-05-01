<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    protected $fillable = [
        "equipo_local",
        "equipo_visitante", 
        "resultado_local", 
        "resultado_visita", 
        "estado"];
}
