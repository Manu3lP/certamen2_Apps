<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'nombre' => ['required','alpha','min:3','max:15'],
        ];
    }

    public function messages():array
    {
        return [
            'nombre.required' => 'Indique el nombre del equipo',
            'nombre.alpha' => 'El nombre debe solo letras',
            'nombre.min' => 'El nombre debe tener mínimo 3 letras',
            'nombre.max' => 'El nombre debe tener máximo 15 letras',
        ];
    }
}
