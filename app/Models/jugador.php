<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    protected $fillable = [
        "nombre",
        "apellido", 
        "dni", 
        "fecha_nac", 
        "sexo", 
        "puesto"];
}
