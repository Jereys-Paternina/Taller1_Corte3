<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable=[
        'nota_final', 'materia_id'
    ];

    protected $hidden=[
        'id', 'materia_id', 'created_at', 'updated_at'
    ];
    
    function materia(){
        return $this-> belongsTo('App\Models\Materia','materia_id');
    }

}
