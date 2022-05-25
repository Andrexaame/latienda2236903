<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
       //1. establecer reglas de validación
       return [
        "nombre" => 'required|alpha|unique:productos,nombre',
        "desc" => 'required|max:100',
        "precio" => 'required|numeric|max:10000',
        "categoria" => 'required',
        "marca" => 'required',
        "imagen" =>  'image|required'
    ];
    }

    /**
     * Mensajes personalizados
     */
    public function messages(){
        return[
            'required' => 'Campo Obligatorio',
            'alpha' => 'Solo letras',
            'max' => 'máximo :max carácteres',
            'numeric' => 'Solo números',
            'unique' => "Este producto ya existe"
        ];
    }
}
