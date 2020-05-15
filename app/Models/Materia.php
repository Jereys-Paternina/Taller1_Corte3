<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable=[
        'nombre'
    ];

    protected $hidden=[
        'id', 'maestro_id', 'created_at', 'updated_at'
    ];

    function maestro(){
        return $this-> belongsTo('App\Models\Maestro','maestro_id');
    }

    function notas(){
        return $this-> hasMany('App\Models\Nota');
    }

}
