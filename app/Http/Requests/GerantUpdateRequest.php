<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GerantUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'Nom' => ['required', 'max:255', 'string'],
            'Prenom' => ['required', 'max:255', 'string'],
            'Nationalite' => ['required', 'max:255', 'string'],
            'Profession' => ['required', 'max:255', 'string'],
            'Email' => ['required', 'email'],
            'Telephone' => ['required', 'max:255', 'string'],
        ];
    }
}
