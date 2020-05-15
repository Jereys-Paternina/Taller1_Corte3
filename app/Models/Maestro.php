<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable=[
        'nombre', 'apellido', 'direccion', 'telefono', 'email'
    ];

    protected $hidden=[
        'id', 'created_at', 'updated_at'
    ];

    function materias(){
        return $this-> hasMany('App\Models\Materia');
    }

    function contrato(){
        return $this-> hasOne('App\Models\Contrato');
    }

    function cursos(){
        return $this-> belongsToMany('App\Models\Curso', 'maestros_cursos','maestro_id', 'curso_id');
    }

    function notas(){
        return $this-> hasManyThrough('App\Models\Nota', 'App\Models\Materia','maestro_id', 'materia_id');
    }

}
