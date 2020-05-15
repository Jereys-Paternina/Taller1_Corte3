<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable=[
        'codigo_contrato', 'tipo_contrato'
    ];

    protected $hidden=[
        'id', 'maestro_id', 'created_at', 'updated_at'
    ];
    
    function maestro(){
        return $this-> belongsTo('App\Models\Maestro','maestro_id');
    }
}
