<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localidad extends Model
{
    protected $fillable = [
        "nombre",
        "cod_postal", 
        "cant_habitantes"];
}
