<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table='docente';
    public $timestamps=false;
    protected $fillable=[
        'id_docente', 'nombre_docente',
    ];

    protected $primaryKey = 'id_docente';
}
