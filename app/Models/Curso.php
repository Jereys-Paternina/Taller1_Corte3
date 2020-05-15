<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=[
        'codigo_curso', 'nombre_curso'
    ];

    protected $hidden=[
        'id', 'created_at', 'updated_at'
    ];

    function maestros(){
        return $this-> belongsToMany('App\Models\Maestro');
    }

}
