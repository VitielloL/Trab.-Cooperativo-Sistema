<?php

namespace App\Job\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required|integer',
            'job_type_id' => 'required|integer',
            'titulo' => 'required|string|min:5|max:50',
            'descricao' => 'required|string|min:5|max:200',
            'valor_hora' => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Texto',
            'user_id.integer' => 'Texto',
            'job_type_id.required' => 'Texto',
            'job_type_id.integer' => 'Texto',
            'titulo.required' => 'Texto',
            'titulo.string' => 'Texto',
            'titulo.min' => 'Texto',
            'titulo.max' => 'Texto',
            'descricao.required' => 'Texto',
            'descricao.string' => 'Texto',
            'descricao.min' => 'Texto',
            'descricao.max' => 'Texto',
            'valor_hora.required' => 'Texto',
            'valor_hora.integer' => 'Texto'
        ];
    }
}
