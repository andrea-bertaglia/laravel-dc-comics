<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => ['required', 'unique:comics,title', 'min:5'],
            'price' => ['required'],
            'series' => ['required'],
            'sale_date' => ['required'],
            'type' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.unique' => 'Attenzione: fumetto già presente',
            'title.min' => 'Attenzione: il titolo è troppo corto',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'La serie è obbligatoria',
            'sale_date.required' => 'La data è obbligatoria',
            'type.required' => 'La tipoligia è obbligatoria'
        ];
    }
}
