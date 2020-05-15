<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaestroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:5|max:50|alpha',
            'apellido'=>'required|min:5|max:50|alpha',
            'direccion'=>'required|min:10|max:50',
            'telefono'=>'required|digits_between:5,10',
            'email'=>'required|email:rfc|max:60',
        ];
    }

    public function attributes ()
    {
        return [
            'nombre'=>'Nombre',
            'apellido'=>'Apellido',
            'direccion'=>'Direccion',
            'telefono'=>'Telefono',
            'email'=>'Correo',
        ];
    }

    public function messages()
    {
        return[
        'nombre.required'=>'El :attribute es requerido',
        'nombre.min'=>'El :attribute debe contener minimo 5 caracteres',
        'nombre.max'=>'El :attribute debe contener maximo 50 caracteres',
        'nombre.alpha'=>'El :attribute solo estara compuesta con letras',

        'apellido.required'=>'El :attribute es requerido',
        'apellido.min'=>'El :attribute debe contener minimo 5 caracteres',
        'apellido.max'=>'El :attribute debe contener maximo 50 caracteres',
        'apellido.alpha'=>'El :attribute solo estara compuesta con letras',

        'direccion.required'=>'El :attribute es necesario',
        'direccion.min'=>'El :attribute debe contener minimo 10 caracteres',
        'direccion.max'=>'El :attribute debe contener maximo 50 caracteres',

        'telefono.required'=>'El :attribute obligatorio',
        'telefono.digits_between'=>'El :attribute debe ser solamente numero y minimos de caracteres de 5 hasta 10',

        'email.required'=>'El :attribute es necesario llenar este campo',
        'email.email'=>'El :attribute debe seguir el formato establecido',
        'email.max'=>'El :attribute debe contener maximo 60 caracteres',
        ];
    }

}
