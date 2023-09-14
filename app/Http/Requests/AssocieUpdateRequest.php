<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssocieUpdateRequest extends FormRequest
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
            'DateNaissance' => ['required', 'date'],
            'LieuNaissance' => ['required', 'max:255', 'string'],
            'Nationalite' => ['required', 'max:255', 'string'],
            'Profession' => ['required', 'max:255', 'string'],
            'CNI' => ['required', 'max:255', 'string'],
            'DateDelivrance' => ['required', 'date'],
            'DateExpiration' => ['required', 'date'],
            'Adresse' => ['required', 'max:255', 'string'],
            'Telephone' => ['required', 'max:255', 'string'],
            'PieceIdentite' => ['required', 'max:255', 'string'],
            'SituationMatrimoniale' => ['required', 'max:255', 'string'],
            'societe_id' => ['required', 'exists:societes,id'],
        ];
    }
}
