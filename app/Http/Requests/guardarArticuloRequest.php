<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class guardarArticuloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //debemos poner el valor en true para que nos de autorizacion de ejecutarlo
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'codigo_articulo' => 'required|min:5|max:50|unique:Articulos',
            'activo' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El campo Nombre es obligatorio', 
        ];
    }   
}
