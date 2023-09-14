<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConjointUpdateRequest extends FormRequest
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
            'PrenomNom' => ['required', 'max:255', 'string'],
            'DateNaissance' => ['required', 'date'],
            'LieuNaissance' => ['required', 'max:255', 'string'],
            'Nationalite' => ['required', 'max:255', 'string'],
            'DateMariage' => ['required', 'date'],
            'LieuMariage' => ['required', 'max:255', 'string'],
            'DateContratMariage' => ['required', 'date'],
            'NomResidentNotaire' => ['required', 'max:255', 'string'],
            'RegimeMatrimoniale' => ['required', 'max:255', 'string'],
            'associe_id' => ['required', 'exists:associes,id'],
        ];
    }
}
