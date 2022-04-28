<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $table='estudiante';
    public $timestamps = false;
    protected $fillable=[
        'id', 'nombre', 'apellido', 'grado', 'correo', 'foto', 'nombre_docente',

        ];


    protected $primaryKey='id';

}
