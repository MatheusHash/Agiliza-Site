<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalvarAtualizarFormRequestImovel extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => ['required', 'string', 'min: 4','max:60'],
            'cidade_id' => ['required'],
            'titulo',
            'valor' =>['required'],
            'endereco'=>['required', 'string', 'min: 5','max: 100'],
            'oculto'=>['nullable'],
            'googlemaps'=>['nullable', 'max: 1999'],
            'descricao'=>['required', 'string'],
        ];
    }
}
