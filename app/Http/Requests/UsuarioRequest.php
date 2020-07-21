<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'name'=>'required|max:250', 
            'apellidos'=>'required|max:250',
           'email' => 'required|email|unique:users|max:255',
           'password' => 'required|min:5|confirmed',
           'address'=>'required|max:200',
          
           'dni'=>'max:10',
            'telefono'=>'max:10',
            'imagen'=>'mimes:jpeg,bmp,png',
           
        ];
    }
}
