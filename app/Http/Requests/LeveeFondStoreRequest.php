<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeveeFondStoreRequest extends FormRequest
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
            'DescriptionProjet' => ['required', 'max:255', 'string'],
            'EtatAvancement' => ['required', 'max:255', 'string'],
            'BesoinFinancement' => ['required', 'max:255', 'string'],
            'ModaliteRemboursement' => ['required', 'max:255', 'string'],
            'Garanties' => ['required', 'max:255', 'string'],
        ];
    }
}
