<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClienteRequest extends FormRequest
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
            't_doc' => [
                'required',
                Rule::in(['DNI', 'RUC'])
            ],
            'num_doc' => [
                'required',
                'unique:clientes',
                'numeric',
                'max:50'
            ],
            'nombre' => [
                'required',
                'max:100'
            ],
            'apellido' => [
                'sometimes',
                'nullable',
                'max:100'
            ],
            'direccion' => [
                'sometimes',
                'nullable'
            ],
            'telefono' => [
                'sometimes',
                'nullable',
                'numeric'
            ],
            'email' => [
                'sometimes',
                'nullable',
                'email'
            ]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            't_doc.in' => 'el :attribute es invalido (DNI/RUC)',
            'num_doc.numeric'=>'el campo :attribute debe ser numerico'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            't_doc' => 'tipo de documento',
            'num_doc'=>'numero de documento',
            'nombre',
            'apellido',
            'direccion',
            'telefono',
            'email'
        ];
    }
}
