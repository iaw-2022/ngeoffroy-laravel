<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class torneo extends Model
{
    protected $fillable = [
        "nombre",
        "logo", 
        "fecha_ini", 
        "fecha_fin"];
}
