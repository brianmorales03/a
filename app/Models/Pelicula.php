<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $connection='mysql';
    protected $table='pelicula';
    protected $primaryKey = "idPelicula";
    public $timestamps=false;
}
