<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    protected $fillable = [
        "nombre",
        "logo", 
        "nombre_estadio", 
        "capitan"];
}
