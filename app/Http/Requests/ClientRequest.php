<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|min:5|max:35',
            'date' => 'required|date',
            'salesman' => 'required|min:5|max:35',
            'description' => 'required|min:10|max:150',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome do cliente é obrigatório!',
            'name.min' => 'Nome do cliente precisa ter no mínimo 5 caracteres',
            'name.max' => 'Nome do cliente precisa ter no máximo 35 caracteres',
            'date.required' => 'Data de cadastro é obrigatório',
            'salesman.required' => 'Nome do vendedor é obrigatório',
            'salesman.min' => 'Nome do vendedor precisa ter no mínimo 5 caracteres',
            'salesman.max' => 'Nome do vendedor precisa ter no máximo 35 caracteres',
            'description.required' => 'Campo Descrição é obrigatório',
            'description.min' => 'Campo Descrição precisa ter no mínimo 10 caracteres',
            'description.max' => 'Campo Descrição precisa ter no máximo 150 caracteres',
            'price.required' => 'Campo Preço é obrigatório',
            'price.numeric' => 'No campo preço informe somente números'
        ];
    }
}
