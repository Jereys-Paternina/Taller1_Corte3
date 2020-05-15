<?php

namespace App\Http\Controllers;
use App\Models\Maestro;
use App\Models\Materia;
use App\Models\Curso;
use App\Models\Nota;
use App\Models\Contrato;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //save
    function prueba1(){
        $maestro = new Maestro;
        $maestro->nombre ='andres';
        $maestro->apellido ='gomez';
        $maestro->direccion ='cra';
        $maestro->telefono =23456789;
        $maestro->email ='asd@gmil.com';
        $maestro->save();


        $contrato = new Contrato;
        $contrato->codigo_contrato =1100;
        $contrato->tipo_contrato ='fijo';
        $maestro->contrato()->save($contrato);
        return $maestro;
    }

    //saveMany... 
    function prueba2(){
        $maestro = Maestro::find(2);
        $materia = new Materia;
        $materia->nombre ='algebra';

        $materia2 = new Materia;
        $materia2->nombre ='ingles';

        $maestro->materias()->saveMany([$materia, $materia2]);
        $maestro2=Materia::all();
        return $maestro."----------------------------->".$maestro2;
    }

    //la diferencia entre saveMany y createMany es que saveMany acepta una instancia de 
    //modelo Eloquent completa mientras createMany acepta un PHP simple array


    //createMany... 
    function prueba3(){
        $maestro = Maestro::find(1);

        $maestro->materias()->createMany([
            ['nombre'=>'ingles'],
            ['nombre'=>'naturales'],
            ['nombre'=>'geometria'],
        ]);
        $maestro2=Materia::all();
        return $maestro."----------------------------->".$maestro2;
    }

    //many to Many
    function prueba4(){
        Curso::create (['codigo_curso'=>1000, 'nombre_curso'=>'redes']);
        Curso::create (['codigo_curso'=>1001, 'nombre_curso'=>'programacion']);
        Curso::create (['codigo_curso'=>1002, 'nombre_curso'=>'finanzas']);
        //$cursos = Curso::all();
/*
        //attach
        $maestro = Maestro::find(1);
        $maestro -> cursos()->attach([7, 9]);
*/
        //Sync
        $maestro = Maestro::find(1);
        $maestro -> cursos()->sync([7]);

        return $maestro;
    }

    //through
    function prueba5(){
       Nota::create (['nota_final'=>3, 'materia_id'=>3]);
       Nota::create (['nota_final'=>4, 'materia_id'=>3]);
        Nota::create (['nota_final'=>4, 'materia_id'=>4]);
        $nota = Maestro::find(2)->notas;
      // $nota = Maestro::with('notas')->get();
        return $nota;
    }

    

}
